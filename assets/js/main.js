//region second-col-observer
window.MutationObserver = window.MutationObserver
	|| window.WebKitMutationObserver
	|| window.MozMutationObserver;
// Find the element that you want to "watch"
var target = document.querySelector('[data-type="2"]'),
// create an observer instance
	observer = new MutationObserver(function(mutation, observer) {
		let id = $(mutation[0].addedNodes[0]).data('id');
		$.ajax(
			{
				url: 'assets/js/ajax/change_status.php',
				method: 'post',
				data: {id: id, status: 2},
				success: function (ans) {
					$.SOW.core.toast.show('success', '', 'Задача успешно изменена!', 'top-center', 4000, true);
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
		let id = $(mutation[0].addedNodes[0]).data('id');
		$.ajax(
			{
				url: 'assets/js/ajax/change_status.php',
				method: 'post',
				data: {id: id, status: 3},
				success: function (ans) {
					$.SOW.core.toast.show('success', '', 'Задача успешно изменена!', 'top-center', 4000, true);
				}
			}
		)

	}),
// configuration of the observer:
	config1 = {
		attributes: true, // this is to watch for attribute changes.
		childList: true
	};
//endregion

$(document).ready(function () {
	observer.observe(target, config);
	observer1.observe(target1, config1);

	//Счетчик приоритета
	$('input#priority').on('change', function(){
		$('span#priorityVal').text(getPriority($(this).val())[0])
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
		$('input#alt_descr').empty();
		console.log($(this).parents('.list-item').data('id'));
		$('#task-id').empty();
		$('#task-id').val($(this).parents('.list-item').data('id'));
		$('[name="edit_title"]').empty();
		$('[name="edit_descr"]').empty();
		$('[name="edit_priority"]').empty();
		$('#exampleModalTask').modal('show');

		$('[name="edit_title"]').val($(this).parents('.list-item').data('title').trim());
		$('input#alt_descr').val($(this).parents('.list-item').data('text'));
		$('[name="edit_descr"]').next().children('.note-editing-area').children('.note-placeholder').remove();
		$('[name="edit_descr"]').next().children('.note-editing-area').children('.card-block').empty().append($(this).parents('.list-item').data('text'));

		$('select[name="edit_responsible"]option#U'+$(this).parents('.list-item').data('responsible')).attr('selected');
		$('[name="edit_priority"]').val($(this).parents('.list-item').data('priority'));
	});

	let timer = 0, sec = 0,min = 0,hours = 0;
	timerInterval = setInterval(function() {
			timer += 1;
			sec+=1;
			if(sec == 60)
			{
				min+=1;
				sec=0;
			}
			if(min == 60)
			{
				hours+=1;
				min = 0;
			}
			console.log(hours+':'+min+':'+sec);
			console.log(new Time());
			}, 1000);
});

function getPriority(number)
{
	if(number > 85)
	{
		return ['Самый высокий', 'text-danger'];
	}
	else if(number> 60)
	{
		return ['Высокий', 'text-orange-400'];
	}else if(number> 35)
	{
		return ['Средний', 'text-blue-500'];
	}else
	{
		return ['Низкий', 'text-success'];
	}
}






