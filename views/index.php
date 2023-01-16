

	<div class="container">
		<button type="button" class="btn btn-warning text-white mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalMd">Новая задача</button>
        <p>
            1. Оставь пометку, где найти task->priority и отредактировать его. Я хочу для каждого приоритета сделать что-то другое, возможно не треугольником а чем-то другим.
            <br>
            И оставь ток 3 приоритета: низкий, средний и высокий (либо пока жи мне где это делается)
        </p>

<!--Пометка для меня-->
<!--Изменить $task->title так, что появлялись границы блока названия задачи, нельзя было делать слишком длинное название-->

        <div class="row mt-3">
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-bell-active text-warning fs-5">
						</div>
						<div class="col p-3 text-warning fs-5">
							Новое
						</div>
					</div>
					<div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list"
                             data-ajax-update-url="assets/js/ajax/sort.php"
                             data-ajax-update-identifier="client_list_1"
                             data-ajax-update-params="['action','update']"
                             data-update-toast-success="Order Saved!"
                             data-update-toast-position="bottom-center"
												data-type="1">
						<?php foreach($tasks[1] as $task): ?>
							<div data-id="<?=$task->id?>" data-title="<?=$task->title?> " data-text="<?=$task->text?>" data-priority="<?=$task->priority?> "class="row bg-white mb-2 mx-3 rounded-3 text-dark list-item">
								<div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
									<i class="fi fi fi-arrow-end-full fs-5 fs-5"></i>
								</div>
								<div class="col py-2">
									<div class="row">

                                        <div class="input-group-over" id="task_edit" contenteditable="true">
                                            <?=$task->title?>
                                        </div>


									</div>
									<div class="row">
										<time class="sow-util-timeago text-secondary fs-7"
													datetime="<?=$task->created_at->format('Y-m-d\TH:i:d')?>"
													data-live="true"
													data-lang='{
		"seconds"	 : "Несколько секунд назад",
		"minute"		: "Около минуты назад",
		"minutes"	 : "%d минут назад",
		"hour"			: "Около часа назад",
		"hours"		 : "Около %d часов назад",
		"day"			 : "Вчера",
		"days"			: "%d дней назад",
		"month"		 : "Около месяца назад",
		"months"		: "%d месяцев назад",
		"year"			: "Около года назад",
		"years"		 : "%d лет назад"
	}'></time>
									</div>
								</div>
								<div class="col-2 py-2 d-flex align-items-center">
									<i class="fi fi-search edit-task" type="button" ></i>
								</div>
							</div>


						<?php endforeach; ?>
                        </div>
					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-circle-spin text-warning fs-5">
						</div>
						<div class="col p-3 text-warning fs-5">
							В работе
						</div>
					</div>

                    <div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list"
                             data-ajax-update-url="assets/js/ajax/sort.php"
                             data-ajax-update-identifier="client_list_2"
                             data-ajax-update-params="['action','update']"
                             data-update-toast-success="Order Saved!"
                             data-update-toast-position="bottom-center" data-type="2">
                            <?php foreach($tasks[2] as $task): ?>
                                <div  data-id="<?=$task->id?>" data-upd="<?=(new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->updated_at)->format('%h:%i:%s')?>" class="row mx-3 bg-white text-dark  list-item rounded-3 mb-2">
                                    <div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
																			<i class="fs-1 fi fi-spin fi-circle-spin text-primary fs-5"></i>
                                    </div>
                                    <div class="col py-2">
                                        <div class="row">
                                            <?=$task->title?>
                                        </div>
                                        <div class="row">
                                            <!----><?php //=print_r((new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at)->format('%h:%i:%s'), 1)?>
                                        </div>
                                    </div>
                                    <div class="col-2 py-2">

                                        <i class="fi fi-search"></i>

                                    </div>
                                </div>


                            <?php endforeach; ?>
                        </div>
                    </div>


                </div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-box-checked text-warning fs-5">
						</div>
						<div class="col p-3 text-warning fs-5">
							Выполнено
						</div>
					</div>

                    <div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list"data-ajax-update-url="assets/js/ajax/sort.php"
														 data-ajax-update-identifier="client_list_3"
														 data-ajax-update-params="['action','update']"
														 data-update-toast-success="Order Saved!"
														 data-update-toast-position="bottom-center" data-type="3">
                            <?php foreach($tasks[3] as $task): ?>
                                <div data-id="<?=$task->id?>"  class="row mx-3 bg-white text-dark rounded-3 mb-2  list-item"
                                     >
                                    <div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
                                        <i class="fi fi fi-arrow-end-full fs-5 fs-5"></i>
                                    </div>
                                    <div class="col py-2">
                                        <div class="row">
                                            <?=$task->title?>
                                        </div>
                                        <div class="row">
                                            <!--										--><?php //=print_r((new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at)->format('%h:%i:%s'), 1)?>
                                        </div>
                                    </div>
                                    <div class="col-2 py-2">
                                        <i class="fi fi-search"></i>
                                    </div>
                                </div>


                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

			</div>
		</div>
	</div>

    <!--Modal new task-->
	<div class="modal fade" id="exampleModalMd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelMd" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabelMd">Добавить задачу</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<div id="alert_success" class="alert alert-success hide-force">
					Задача успешно создана!
				</div>

				<!-- error inline message -->
				<div id="alert_error" class="alert alert-danger hide-force">
					Пожалуйста, заполните это поле!
				</div>

				<!--
					NOTE: WE USE method="GET" insted of "POST" because this is a pure html demo
				-->
				<form class="js-ajax bs-validate" novalidate
							action="assets/js/ajax/new_task.php"
							method="POST"

							data-ajax-inline-alert-succes="#alert_success"
							data-ajax-inline-alert-error="#alert_error"

							data-ajax-update-url="true"
							data-ajax-show-loading-icon="true"

							data-error-scroll-up="true"
							data-ajax-callback-function="">


					<div class="form-floating mb-3">
						<input required type="text" class="form-control" name="TaskTitle" id="TaskTitle" placeholder="Название">
						<label for="TaskTitle">Название</label>
					</div>

					<div class="form-floating mb-3">
						<select class="form-select" id="floatingSelect" name="responsible" aria-label="Floating label select example">
							<option value="1">Данил</option>
							<option value="2">Влад</option>
						</select>
						<label for="floatingSelect">Ответственный</label>
					</div>

					<div class="form-floating mb-3">
						<textarea name="descr" id="editor-decr-new"class="summernote-editor w-100"
											data-summernote-config='{
						"placeholder":	"Напишите текст...",
						"focus":		false,
						"lang":			"en-US",
						"minHeight":	 300,
						"maxHeight":	 1500,

						" styleTags": ["h2","h3","h4","h5","h6"

							,{
								"title"		:"Paragraph",
								"tag"		:"p",
								"value"		:"p",
								"className"	:""
							}

							,{
								"title"		:"Paragraph Lead",
								"tag"		:"p",
								"value"		:"p",
								"className"	:"lead"
							}

						],

						"toolbar": [
							["font", ["bold", "italic", "underline", "clear"]],
							["para", ["ul", "ol", "paragraph"]],
							["insert", ["link", "picture", "video", "hr"]],
							["view", ["fullscreen", "codeview", "help"]]
						],

						"disableDragAndDrop":	 false,
						"codeviewFilter":		 false,
						"codeviewIframeFilter":	 true
					}'></textarea>

					</div>

					<div class="form-floating mb-3">
						<label for="customRange1" class="form-label">Приоритет: <span id="priorityVal">Средний</span></label>
						<input type="range" class="form-range" id="priority" name="priority">
					</div>


				</div>

				<div class="modal-footer">
					<button type="submit" class="btn btn-success text-white">
						<i class="fi fi-check"></i>
						Добавить
					</button>
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
						<i class="fi fi-close"></i>
						Закрыть
					</button>
				</div>
				</form>
			</div>
		</div>
	</div>
    <!--/Modal new task-->

    <!--Modal edit task-->
    <div class="modal fade" id="exampleModalTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalTask" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelTask">Изменить задачу</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div id="alert_success" class="alert alert-success hide-force">
                        Задача успешно изменена!
                    </div>

                    <!-- error inline message -->
                    <div id="alert_error" class="alert alert-danger hide-force">
                        Пожалуйста, заполните это поле!
                    </div>

                    <!--
                        NOTE: WE USE method="GET" insted of "POST" because this is a pure html demo
                    -->
                    <form class="js-ajax bs-validate" novalidate
                          action="assets/js/ajax/edit_task.php"
                          method="POST"

                          data-ajax-inline-alert-succes="#alert_success"
                          data-ajax-inline-alert-error="#alert_error"

                          data-ajax-update-url="true"
                          data-ajax-show-loading-icon="true"

                          data-error-scroll-up="true"
                          data-ajax-callback-function="callback1">

                        <script>
                            function callback1(){
                                $('#exampleModalTask').modal('hide');
                                $.SOW.core.toast.show('success', '', 'Задача успешно изменена!', 'top-center', 4000, true);
                            }
                        </script>
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" name="edit_title" id="TaskTitle" placeholder="Название">
                            <label for="TaskTitle">Название</label>
                        </div>
                        <input type="hidden" name="alternate_decr" id="alt_descr">
                        <input type="hidden" name="id" id="task-id">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="edit_responsible" aria-label="Floating label select example">
                                <option value="1">Данил</option>
                                <option value="2">Влад</option>
                            </select>
                            <label for="floatingSelect">Ответственный</label>
                        </div>

                        <div class="form-floating mb-3">
						<textarea name="edit_descr" id="editor-decr-new"class="summernote-editor w-100"
                                  data-summernote-config='{
						"placeholder":	"Напишите текст...",
						"focus":		false,
						"lang":			"en-US",
						"minHeight":	 300,
						"maxHeight":	 1500,

						" styleTags": ["h2","h3","h4","h5","h6"

							,{
								"title"		:"Paragraph",
								"tag"		:"p",
								"value"		:"p",
								"className"	:""
							}

							,{
								"title"		:"Paragraph Lead",
								"tag"		:"p",
								"value"		:"p",
								"className"	:"lead"
							}

						],

						"toolbar": [
							["font", ["bold", "italic", "underline", "clear"]],
							["para", ["ul", "ol", "paragraph"]],
							["insert", ["link", "picture", "video", "hr"]],
							["view", ["fullscreen", "codeview", "help"]]
						],

						"disableDragAndDrop":	 false,
						"codeviewFilter":		 false,
						"codeviewIframeFilter":	 true
					}'></textarea>

                        </div>

                        <div class="form-floating mb-3">
                            <label for="customRange1" class="form-label">Приоритет: <span id="priorityVal">Средний</span></label>
                            <input type="range" class="form-range" id="priority" name="edit_priority">
                        </div>


                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger text-white">
                        <i class="fi fi-check"></i>
                        Заморозить
                    </button>
                    <button type="submit" class="btn btn-success text-white">
                        <i class="fi fi-check"></i>
                        Изменить
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="fi fi-close"></i>
                        Закрыть
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--/Modal edit task-->


<!--Редактор поля. Над ним нужно поработать-->
<div>
<!--    <div class="form-floating">-->
<!--        <input required readonly placeholder="text" id="task_name" name="Task Name" type="text" class="form-control" value="">-->
<!--    </div>-->
<!---->
<!--    <a id="task_edit_show" href="#" class="btn transition-none sow-util-action"-->
<!--       data-util-self-ignore="true"-->
<!--       data-util-target-hide="#task_edit_show"-->
<!--       data-util-target-show="#task_edit_hide, #task_edit_password_request"-->
<!--       data-util-target-readonly-off="#task_name"-->
<!---->
<!--       data-util-target-input="#task_name"-->
<!--       data-util-target-input-val=""-->
<!---->
<!--       data-util-target-focus="#task_name">-->
<!--        <i class="fi fi-pencil m-0"></i>-->
<!--    </a>-->
<!---->
<!--    <a id="task_edit_hide" href="#" class="btn transition-none sow-util-action hide"-->
<!--       data-util-self-ignore="true"-->
<!--       data-util-target-hide="#task_edit_hide, #task_edit_password_request"-->
<!--       data-util-target-show="#task_edit_show"-->
<!--       data-util-target-readonly-on="#task_name"-->
<!---->
<!--       data-util-target-input="#task_name"-->
<!--       data-util-target-input-val="">-->
<!--        <i class="fi fi-close m-0"></i>-->
<!--    </a>-->
</div>
<!--/Редактор поля. Над ним нужно поработать-->

    <div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelSm" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    Вы уверены?
                </div>

                <div class="modal-footer">

                    <button type="button" id="confirm-true" class="btn text-white btn-success">
                        <i class="fi fi-check"></i>
                        Да. сохранить
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        <i class="fi fi-close"></i>
                        Закрыть
                    </button>

                </div>

            </div>
        </div>
    </div>


