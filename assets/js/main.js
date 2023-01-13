

$(document).ready(function () {
	console.log($('input#priority'));
	$('input#priority').on('change', function(){
		$('span#priorityVal').text(getPriority($(this).val())[0])
	});
	$('.priority-flag').each(function( index ) {
		$(this).find('i').addClass(getPriority($(this).data('priority'))[1]);
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
		return ['Низкий', 'text-success']
	}
}