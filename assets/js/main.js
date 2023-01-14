
window.MutationObserver = window.MutationObserver
	|| window.WebKitMutationObserver
	|| window.MozMutationObserver;
// Find the element that you want to "watch"
var target = document.querySelector('[data-type="1"]'),
// create an observer instance
	observer = new MutationObserver(function(mutation, observer) {
		console.log(mutation[0])

	}),
// configuration of the observer:
	config = {
		attributes: true, // this is to watch for attribute changes.
		childList: true
	};
// pass in the element you wanna watch as well as the options
// observer.observe(target, config);
// later, you can stop observing
// observer.disconnect();
$(document).ready(function () {
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

