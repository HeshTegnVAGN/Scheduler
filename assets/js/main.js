

$(document).ready(function () {
	console.log($('input#priority'));
	$('input#priority').on('change', function(){
		$('span#priorityVal').text(getPriority($(this).val()))
	});


});

function getPriority(number)
{
	if(number > 85)
	{
		return 'Самый высокий';
	}
	else if(number> 60)
	{
		return 'Высокий';
	}else if(number> 35)
	{
		return 'Средний';
	}else
	{
		return 'Низкий'
	}
}