<?php

use models\DB;
use models\Task;
ini_set('display_errors', true);
session_start();
require '../../../config/config.php';
require '../../../models/TaskModel.php';

require '../../../models/Task.php';
require '../../../models/User.php';
require '../../../models/mail.php';
require '../../../../vendor/autoload.php';
//$_POST =
//[
//	'TaskTitle' => 'test',
//	'responsible' => 3,
//    'descr' => '<p>setsetsetset</p>',
//	'priority' => 70
//];


function dd($arr)
{
    echo '<pre>';
    print_r($arr);
    echo  '</pre>';
}
//
//dd($_POST);
//die();


file_put_contents(__DIR__.'/0.txt', print_r($_POST, 1), FILE_APPEND);

$task = new Task();
$deadline = null;
if($_POST['date'])
{

	$deadline = date('Y-m-d H:i:s', strtotime($_POST['date'].' '.$_POST['hours'].':'.$_POST['minutes']));
	if($deadline  < date('Y-m-d H:i:s'))
	{
		$deadline = null;
	}
}
$task->add($_POST['TaskTitle'],$_POST['responsible'],$_POST['descr'],$_POST['priority'], $deadline);



foreach ($_POST['subtask'] as $st)
{
    $task->addSubtask($st);
}



if($_POST['responsible'] != $_SESSION['user'])
{
	file_put_contents(__DIR__.'/0.txt', 'unsended ', FILE_APPEND);

	if($task->task->priority > 80)
	{
		$prior = '<span style="color: #b71c1c;">очень важно</span>';
			} elseif ($task->task->priority >= 60)
	{
		$prior = '<span style="color: rgb(246,78,96);">важно</span>';

			} elseif ($task->task->priority >= 35)
	{
		$prior = '<span style="color: #0d6efd;">средний</span>';

			} else
	{
		$prior = '<span style="color:rgb(109,187,48);">низкий</span>';

			}

	$email = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рассылка</title>

    <style>a{color: #333333;font: 14px Arial, sans-serif;line-height: 30px;-webkit-text-size-adjust:none;display: block;}span{color: #333333;font: 14px Arial, sans-serif;line-height: 30px;-webkit-text-size-adjust:none;}img{display: block;}table{background-color: #f8f8f8;color: #000000;font-family: "arial" , sans-serif;font-size: 14px;}</style>
</head>
<body>
    

    <table border="0" cellpadding="0" cellspacing="0" width="600px" style="padding:0; background-color:#f8f8f8;color:#000000;font-size:16px; margin: 0 auto" class="table">
        <tbody>
            <tr>
                <td style="padding:60px 45px 60px 45px">

                    <img height="45" src="https://scheduler.imdibil.ru/assets/images/logo/nobg_logo.png" width="" style="margin-bottom:15px;margin-left:25px">

                    <table align="center" cellpadding="0" cellspacing="0" width="100%" style="background-color:#fff;border:1px solid #e6e6e6;padding:25px 20px 50px 25px; border-radius: 5px;">
                        <tbody>
                            <tr>
                                <td>
                                    <p style="color:#000000;font-family:"arial" , sans-serif;font-size:19px; margin-bottom:0;margin-top:16px">
                                        Вам поставлена новая задача!
                                    </p>
                                    <p style="color:#000000;font-family:"arial" , sans-serif;font-size:16px; margin-bottom:0;margin-top:16px">
                                        Название: '.$task->task->title.'
                                    </p>
                                    <p style="color:#000000;font-family:"arial" , sans-serif;font-size:16px; margin-bottom:0;margin-top:16px">
                                        Дедлайн: <span style="color: rgb(53, 234, 53);">'.$deadline.'</span>
                                    </p>
                                    <p style="color:#000000;font-family:"arial" , sans-serif;font-size:16px; margin-bottom:0;margin-top:16px">
                                        Приоритет: '.$prior.'
                                    </p>
                                    <p style="color:#000000;font-family:"arial" , sans-serif;font-size:16px; margin-bottom:0;margin-top:16px">
                                        Описание: '.$task->task->text.'
                                    </p>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table align="center" cellpadding="0" cellspacing="0" width="100%">
                        <tbody>
                            <tr>
                                <td style="background-image:url(\'https://scheduler.imdibil.ru/assets/images/logo/img_1.png\');padding-top:12px"></td>
                            </tr>

                            <tr>
                                <td style="color:#888888; sans-serif; font-size:12px; padding: 0 30px">Пожалуйста, не отвечайте на это письмо. Связаться со службой поддержки Task Runner Вы можете через форму обратной связи в вашем личном кабинете.
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>';
    $user = new \models\User($_POST['responsible']);
    $res = $user->getAccesssedUsers($_SESSION['user']);
    file_put_contents(__DIR__.'/0.txt', print_r($res, 1), FILE_APPEND);
    if(!$res[0]['add_note'])
    {
        file_put_contents(__DIR__.'/0.txt', 'accedd denied ', FILE_APPEND);
        die();
    }

    file_put_contents(__DIR__.'/0.txt', 'unsended ', FILE_APPEND);

		sendEmail($user->email, $user->name, $email, 'Вам поставлена новая задача '.$task->task->title);
    file_put_contents(__DIR__.'/0.txt', 'sended', FILE_APPEND);




}
