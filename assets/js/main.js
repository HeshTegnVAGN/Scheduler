

$(document).ready(function () {
	$('.edit-admission').on("click", function (e) {
		console.log('s');
		let id = $(this).data('id');
		let comm_input = $('#edit-admission').find('input[name="comment"]');
		let dead_input = $('#edit-admission').find('input[name="deadlines"]');
		let edit_input = $('#edit-admission').find('input[name="edit"]');
		let add_input = $('#edit-admission').find('input[name="adding"]');
		let aid_input = $('#edit-admission').find('input[name="admission_id"]');
		let uname_input = $('#edit-admission').find('span.username');

		comm_input.attr('checked', false);
		dead_input.attr('checked', false);
		add_input.attr('checked', false);
		edit_input.attr('checked', false);

		let add = $(this).data('add');
		let dead = $(this).data('dead');
		let edit = $(this).data('edit');
		let comment = $(this).data('comment');
		let user = $(this).data('user');

		if(parseInt(comment) == 1)
		{
			$(comm_input).attr('checked', true);
		}
		if(add == 1)
		{
			add_input.attr('checked',true);
		}
		if(edit == 1)
		{
			edit_input.attr('checked',true);
		}
		if(dead == 1)
		{
			dead_input.attr('checked',true);
		}
		uname_input.text(user)
		aid_input.val(id)


		$('#edit-admission').modal('show');
	});
	if($('[data-type="2"]').length && $('[data-type="1"]').length)
	{
		//region second-col-observer
		window.MutationObserver = window.MutationObserver
			|| window.WebKitMutationObserver
			|| window.MozMutationObserver;
// Find the element that you want to "watch"
		var target = document.querySelector('[data-type="2"]'),
// create an observer instance
			observer = new MutationObserver(function(mutation, observer) {
				let id = $(mutation[0].addedNodes[0]).data('id');
				if($(mutation[0].addedNodes[0]).length == 0)
				{
					console.log('a');
					return;
				}
				$.ajax(
					{
						url: 'https://scheduler.imdibil.ru/assets/js/ajax/change_status.php',
						method: 'post',
						data: {id: id, status: 2},
						success: function (ans) {
								$.SOW.core.toast.show('success', '', 'Задача успешно изменена!', 'top-center', 4000, true);
							console.log(ans);
						},
						error: function (e)
						{
							if(e.status == 505)
							{
								$.SOW.core.toast.show('danger', '', 'У вас нет прав на перемещение задачи!', 'top-center', 4000, true);
							}

						}
					}
				)

			}),
// configuration of the observer:
			config = {
				attributes: true, // this is to watch for attribute changes.
				childList: true
			};
//endregion
		//
		// region third-col-observer
		window.MutationObserver1 = window.MutationObserver
			|| window.WebKitMutationObserver
			|| window.MozMutationObserver;
		// Find the element that you want to "watch"
		var target1 = document.querySelector('[data-type="3"]'),
			// create an observer instance
			observer1 = new MutationObserver(function(mutation, observer) {
				if($(mutation[0].addedNodes[0]).length)
				{
					let ids = $(mutation[0].addedNodes[0]).data('id');
					$('#confirm-modal').modal('show');
					$('#confirm-true').on('click', function (){
						$.ajax(
							{
								url: 'assets/js/ajax/change_status.php',
								method: 'post',
								data: {id: ids, status: 3},
								success: function (ans) {
									$.SOW.core.toast.show('success', '', 'Задача успешно выполнена!', 'top-center', 4000, true);
									console.log(ans)
								},
								error: function (e)
								{
									$.SOW.core.toast.show('danger', '', 'У вас нет прав на перемещение задачи!', 'top-center', 4000, true);

								}
							}
						);
						$('#confirm-modal').modal('hide');
					});S
				}



			}),
			// configuration of the observer:
			config1 = {
				attributes: true, // this is to watch for attribute changes.
				childList: true
			};
		//endregion

		observer.observe(target, config);
		observer1.observe(target1, config1);
	}

	//Счетчик приоритета
	$('input#priority').on('change', function(){
		$('span#priorityVal').text(getPriority($(this).val())[0])
	});
	$('.bg-filled').each(function( index ) {
		$(this).addClass(getPriority($(this).data('priority'))[2]);
		$(this).find('.priority-flag').remove();
	});
	//флаг приоритета
	$('.priority-flag').each(function( index ) {
		$(this).find('i').addClass(getPriority($(this).data('priority'))[1]);
	});


	//Заголовок задачи
	$('.input-group-over').blur(function (e) {
		let id = $(this).parents('.list-item').data('id');
		let title = $(this).parents('.list-item').data('title').trim();
		let text = $(this).text().trim();
		if(title == text)
		{
			return
		}
		$('#confirm-modal').modal('show');

		$('#confirm-true').on('click', function (){
			$.ajax(
				{
					url: 'assets/js/ajax/change_title.php',
					method: 'post',
					data: {id: id, text: text},
					success: function (ans) {
						console.log(ans);
					}
				});
			$('#confirm-modal').modal('hide');
		});

	})


	//Модалка для редактирования
	$('.edit-task').on('click', function () {
		let id = $(this).parents('.list-item').data('id');
		$.ajax(
			{
				url: 'https://scheduler.imdibil.ru/assets/js/ajax/get_task.php',
				method: 'post',
				data: {id: id},
				success: function (ans) {
					let task = JSON.parse(ans);
					console.log(task);
					$('input#alt_descr').empty();
					$('#task-id').empty();
					$('#task-id').val(id);
					$('#id_task').val(id);
					$('.subtask-add-show').attr('data-id', id)
					$('[name="edit_title"]').empty();
					$('[name="edit_descr"]').empty();
					$('[name="edit_priority"]').empty();
					$('[name="author"]').empty();

					$('[name="edit_title"]').val(task.title.trim());
					$('input#alt_descr').val(task.text);
					$('[name="author"]').val(task.author);
					$('.descr-show').empty();
					$('.descr-show').append(task.text);
					$('[name="edit_descr"]').next().children('.note-editing-area').children('.note-placeholder').remove();
					$('[name="edit_descr"]').next().children('.note-editing-area').children('.card-block').empty().append(task.text);
					$('.com-block').empty();
					for(let comment of task.comments)
					{
						console.log(comment);
						$('.com-block').append('<div class="border border-light rounded p-4">' +
							'<div class="row">\n' +
							'<div class="col-md-3 text-center">\n' +
							'<div class="avatar avatar-lg rounded-circle" style="background-image:url(https://scheduler.imdibil.ru/assets/images/avatars/av.png)"></div>\n' +
							'<p class="text-gray-900">\n' +
							'<span class="d-block fw-medium">'+comment.user_name+'</span>\n' +
							'</p>\n' +
							'</div>\n' +
							'<div class="col-md-9">\n' +
							'<p class="align-self-center">'+comment.text+'</p>\n' +
							'</div>\n' +
							'</div>\n' +
							'</div><hr>\n')
					}

					let subtwrapper = $('.edit-subtasks')
					subtwrapper.empty()
					for (let sut of task.subtasks)
					{
						let newT = subtwrapper.siblings('#task-template').clone()
						newT.removeAttr('id')
						newT.attr('id', sut.id)
						newT.find('.task-title').text(sut.title)
						newT.removeClass('d-none')

						let input = document.createElement('input')
						input.setAttribute('value', sut.title)
						input.setAttribute('name', 'subtask[]')
						input.setAttribute('type', 'hidden')
						newT.append(input)
						newT.find('.remove-subtasks').on('click', function() {
							$(this).closest('.task-template').remove();
						})
						subtwrapper.append(newT)
					}
					let subtwrapperS = $('.show-tasks')
					subtwrapperS.empty()
					for (let sut of task.subtasks)
					{
						let newT = subtwrapperS.siblings('#task-template').clone()
						newT.removeAttr('id')
						newT.attr('id', sut.id)
						newT.find('.task-title').text(sut.title)
						newT.removeClass('d-none')
						newT.find('.remove-subtasks').on('click', function() {
							let btn = $(this)
							$.ajax({
								url: 'https://scheduler.imdibil.ru/assets/js/ajax/delete_subtask.php',
								method: 'post',
								data: {id: sut.id},
								success: function ()
								{
									newT.find('.remove-subtasks').closest('.task-template').remove();
									$.SOW.core.toast.show('success', '', 'Подзадача удалена!', 'top-center', 4000, true);
								},
								error: function () {
									$.SOW.core.toast.show('error', '', 'Ошибка!', 'top-center', 4000, true);

								}
							});
						})
						newT.find('.submit-task').on('click', function() {
							let btn = $(this)
							$.ajax({
								url: 'https://scheduler.imdibil.ru/assets/js/ajax/change_subtask_status.php',
								method: 'post',
								data: {id: sut.id},
								success: function ()
								{
									btn.remove()
									newT.addClass('subtasks-success');
									$.SOW.core.toast.show('success', '', 'Подзадача удалена!', 'top-center', 4000, true);
								},
								error: function () {
									$.SOW.core.toast.show('error', '', 'Ошибка!', 'top-center', 4000, true);

								}
							});
						})
						let input = document.createElement('input')
						input.setAttribute('value', sut.title)
						input.setAttribute('name', 'subtask[]')
						input.setAttribute('type', 'hidden')
						newT.append(input)
						if(sut.status === '1')
						{
							newT.find('.submit-task').remove()
							newT.addClass('subtasks-success')
						}


						subtwrapperS.append(newT)

					}
					let opts = $('select[name="edit_responsible"] option[value='+task.responsibile+']');
					$.each(opts, function (key, value) {
						console.log(value)
						$(value).attr('selected', true);
					})
					$('[name="edit_priority"]').val(task.priority);
					$('span#priorityVal').text(getPriority(task.priority)[0])

				}
			});

	});


	// Добавление подзадачи - сделать

	let createBtn = $('.createSubtask')  //document.querySelectorAll()
	const listElement = $('#list')

	// const notes = [
	// 	{
	// 		title: ' 123',
	// 		completed: true,
	// 		hide: true
	// 	}
	// ]

	// function render() {
	// 	listElement.innerHTML = ''
	// 	for (let i = 0; i < notes.length; i++) {
	// 		listElement.insertAdjacentHTML('beforeend', getNoteTemplate(notes[i], i))
	// 	}
	// }

	// render()

	function render(note){


	}


	createBtn.on('click', function (event) {
		console.log(event.target)
		console.log(this)
		let form = $(this).parents('form')
		console.log(form)
		const inputElement = $(form).find('input#subtaskTitle')


		console.log(inputElement)
		console.log($(inputElement).val())
		if ($(inputElement).val().length === 0) {
			return
		}

		const newNote = {
			title: $(inputElement).val(),
			completed: false,
		}
		let listElementE = $(form).find('#list')
		console.log(listElementE)
		let div = $(form).find('#task-template').clone()
		div.removeAttr('id')
		div.find('.task-title').text(newNote.title)
		div.removeClass('d-none')

		let input = document.createElement('input')
		input.setAttribute('value', newNote.title)
		input.setAttribute('name', 'subtask[]')
		input.setAttribute('type', 'hidden')
		div.append(input)

		if($(this).data("action"))
		{
			$.ajax({
				url: 'https://scheduler.imdibil.ru/assets/js/ajax/add_subtask.php',
				method: 'post',
				data: {title: newNote.title, task_id: $(this).data("id")},
				success: function ()
				{
					listElementE.append(div)
					$(inputElement).val('')
					$.SOW.core.toast.show('success', '', 'Подзадача добавлена!', 'top-center', 4000, true);
				},
				error: function () {
					$.SOW.core.toast.show('error', '', 'Ошибка!', 'top-center', 4000, true);

				}
			});
		} else {
			div.find('.remove-subtasks').on('click', function() {
				$(this).closest('.task-template').remove();
			})

			listElementE.append(div)
			$(inputElement).val('')
		}

	})

	listElement.onclick = function (event) {
		if (event.target.dataset.index) {
			const index = parseInt(event.target.dataset.index)
			const type = event.target.dataset.type

			if (type === 'toggle') {
				notes[index].completed = !notes[index].completed
			} else if (type === 'remove')
				notes.splice(index, 1)

			render()
		}
	}


	$('.remove-subtaks').on('click', function ()
	{
		console.log($(this))
	})

	function getNoteTemplate(note, index) {
		return `
		<input type="hidden" name="subtask[]" value="${note.title}">
		<input type="hidden" name="completed[]" value="${note.completed ? '1' : '0'}">
        <li class="bg-gray-300 mt-3 px-3 py-2 justify-content-between align-items-center ${note.hide ? 'hide' : 'd-flex'}" style="border-radius: 5px">
			<span class="${note.completed ? 'text-decoration-line-through' : ''}">${note.title}</span>
			<span>
				<span class="btn btn-sm btn-${note.completed ? 'warning' : 'success'}" data-type="toggle" data-index="${index}">&check;</span>
				<span class="btn btn-sm btn-danger" data-type="remove" data-index="${index}">&times;</span>
			</span>
		</li>
    `
	}

	//сброс пароля
	$('#email_send').submit(function (e) {
		e.preventDefault();
		let email = $(this).find('input').val();
		$.ajax({
			url: 'https://scheduler.imdibil.ru/assets/js/ajax/reset_send.php',
			method: 'post',
			data: {email: email},
			success: function ()
			{
				$('#email_new').val(email);
				$('#email_pw').val(email);
				$('#email_send').remove();
				$('#code_check').removeClass('d-none');
				$.SOW.core.toast.show('success', '', 'Инструкции отправлены на email!', 'top-center', 4000, true);
			},
			error: function () {
				$.SOW.core.toast.show('error', '', 'Пользователь не найден!', 'top-center', 4000, true);

			}
		});
	});



	$('.edit-admission-notes').on("click", function (e) {
		let id = $(this).data('id');
		let add_input = $('#edit-admission-notes').find('input[name="adding"]');
		let comment_input = $('#edit-admission-notes').find('input[name="comment"]');
		let aid_input = $('#edit-admission-notes').find('input[name="admission_id"]');
		let uname_input = $('#edit-admission-notes').find('span.username');

		comment_input.attr('checked', false);
		add_input.attr('checked', false);

		let add = $(this).data('add');
		let comment = $(this).data('comm');
		let user = $(this).data('user');

		if(parseInt(comment) == 1)
		{
			$(comment_input).attr('checked', true);
		}
		if(add == 1)
		{
			add_input.attr('checked',true);
		}
		uname_input.text(user)
		aid_input.val(id)


		$('#edit-admission-notes').modal('show');
	});
	$('.edit-admissed-notes').on("click", function (e) {
		let id = $(this).data('id');
		let finish_input = $('#edit-admissed-notes').find('input[name="finished"]');
		let aid_input = $('#edit-admissed-notes').find('input[name="admission_id"]');
		let uname_input = $('#edit-admissed-notes').find('span.username');

		finish_input.attr('checked', false);

		let finish = $(this).data('finish');
		let comment = $(this).data('comm');
		let user = $(this).data('user');

		if(parseInt(finish) == 1)
		{
			$(finish_input).attr('checked', true);
		}
		uname_input.text(user)
		aid_input.val(id)


		$('#edit-admissed-notes').modal('show');
	});

	$('#deadline-accept').on('change', function(){
		if($(this).attr('checked') == true)
		{
			console.log('d');
		}
	})


});

function getPriority(number)
{
	if(number> 80)
	{
		return ['Очень высокий', 'text-red-900', 'card-red-theme'];
	}
	else if(number> 60)
	{
		return ['Высокий', 'text-danger', 'card-warning-theme'];
	}else if(number> 35)
	{
		return ['Средний', 'text-blue-500', 'card-middle-theme'];
	}else
	{
		return ['Низкий', 'text-success', 'card-low-theme'];
	}
}

// Date actual

const dateActual = document.getElementById('dateActual').innerHTML = new Date().getFullYear();




