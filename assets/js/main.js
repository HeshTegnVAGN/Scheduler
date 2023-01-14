
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
	$('input#priority').on('change', function(){
		$('span#priorityVal').text(getPriority($(this).val())[0])
	});
	$('.priority-flag').each(function( index ) {
		$(this).find('i').addClass(getPriority($(this).data('priority'))[1]);
	});
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