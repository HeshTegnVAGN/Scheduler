<?php
include ROOT.'views/inc/header.php'; ?>

	<div class="container">
		<button type="button" class="btn btn-warning mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalMd">Новая задача</button>

<!--Пометка для меня-->
<!--Изменить $task->title так, что появлялись границы блока названия задачи, нельзя было делать слишком длинное название-->

        <div class="row mt-3">
			<div class="col-md-4 col-sm-6">

				<div class="bg-Grey rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-bell-active text-yellow-700 fs-5">
						</div>
						<div class="col p-3 text-yellow-700 fs-5">
							Новое
						</div>
					</div>
					<div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list"
                             data-ajax-update-url="assets/js/ajax/sort.php"
                             data-ajax-update-identifier="client_list_1"
                             data-ajax-update-params="['action','update']"
                             data-update-toast-success="Order Saved!"
                             data-update-toast-position="bottom-center">
						<?php foreach($tasks[1] as $task): ?>
							<div data-id="<?=$task->id?>" class="row bg-white mb-2 mx-3 rounded-3 text-dark">
								<div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
									<i class="fi fi fi-arrow-end-full fs-5 fs-5"></i>
								</div>

								<div class="col py-2">
									<div class="row">
                                        <div class="input-group-over edit" id="task_edit" contenteditable="true">
                                            <?=$task->title?>
                                        </div>
									</div>

									<div class="row">
<!--										--><?php //=print_r((new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at)->format('%h:%i:%s'), 1)?>
									</div>
								</div>
								<div class="col-2 py-2">
									<i class="fi fi-search" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalTask"></i>
								</div>
							</div>


						<?php endforeach; ?>
                        </div>
					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-Grey rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-circle-spin text-yellow-700 fs-5">
						</div>
						<div class="col p-3 text-yellow-700 fs-5">
							В работе
						</div>
					</div>

                    <div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list"
                             data-ajax-update-url="assets/js/ajax/sort.php"
                             data-ajax-update-identifier="client_list_2"
                             data-ajax-update-params="['action','update']"
                             data-update-toast-success="Order Saved!"
                             data-update-toast-position="bottom-center">
                            <?php foreach($tasks[2] as $task): ?>
                                <div  data-id="<?=$task->id?>"  class="row mx-3 bg-white text-dark rounded-3 mb-2">
                                    <div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
                                        <i class="fi fi fi-arrow-end-full fs-5 fs-5"></i>
                                    </div>

                                    <div class="col py-2">
                                        <div class="row">
                                            <div class="input-group-over edit" id="task_edit" contenteditable="true">
                                                <?=$task->title?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!----><?php //=print_r((new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at)->format('%h:%i:%s'), 1)?>
                                        </div>
                                    </div>

                                    <div class="col-2 py-2">
                                        <i class="fi fi-search" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalTask"></i>
                                    </div>
                                </div>


                            <?php endforeach; ?>
                        </div>
                    </div>


                </div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-Grey rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3 fi fi-box-checked text-yellow-700 fs-5">
						</div>
						<div class="col p-3 text-yellow-700 fs-5">
							Выполнено
						</div>
					</div>

                    <div class="pb-4">
                        <div class="list-group sortable" data-shared-group="client-list">
                            <?php foreach($tasks[3] as $task): ?>
                                <div data-id="<?=$task->id?>"  class="row mx-3 bg-white text-dark rounded-3 mb-2"
                                     data-ajax-update-url="assets/js/ajax/sort.php"
                                     data-ajax-update-identifier="client_list_3"
                                     data-ajax-update-params="['action','update']"
                                     data-update-toast-success="Order Saved!"
                                     data-update-toast-position="bottom-center">
                                    <div class="align-items-center col-2 d-flex priority-flag" data-priority="<?=$task->priority?>">
                                        <i class="fi fi fi-arrow-end-full fs-5 fs-5"></i>
                                    </div>
                                    <div class="col py-2">
                                        <div class="row">
                                            <div class="input-group-over edit" id="task_edit" contenteditable="true">
                                                <?=$task->title?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <!--										--><?php //=print_r((new \DateTime('now', new DateTimeZone('Europe/Moscow')))->diff($task->created_at)->format('%h:%i:%s'), 1)?>
                                        </div>
                                    </div>
                                    <div class="col-2 py-2">
                                        <i class="fi fi-search" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalTask"></i>
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

                    <button type="submit" class="btn btn-danger">
                        <a href="#" data-href="plugins-sow-ajax-confirm.html?action=delete&item_id=1"
                           class="js-ajax-confirm text-white"

                           data-ajax-confirm-mode="regular"

                           data-ajax-confirm-size="modal-md"
                           data-ajax-confirm-centered="false"

                           data-ajax-confirm-title="Заморозить?"
                           data-ajax-confirm-body="Вы уверены, что хотите поставить задачу на паузу? <br > Время её выполнения временно остановится!"

                           data-ajax-confirm-btn-yes-class="btn-primary"
                           data-ajax-confirm-btn-yes-text="Подтвердить"
                           data-ajax-confirm-btn-yes-icon="fi fi-check"

                           data-ajax-confirm-btn-no-class="btn-light"
                           data-ajax-confirm-btn-no-text="Отменить"
                           data-ajax-confirm-btn-no-icon="fi fi-close">
                            <i class="fi fi-check"></i>
                            Заморозить
                        </a>
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

<?php include ROOT.'/views/inc/footer.php';