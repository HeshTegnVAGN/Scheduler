<?php include ROOT.'views/inc/header.php'; ?>

	<div class="container">
		<button type="button" class="btn btn-warning text-white mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalMd">Новая задача</button>

		<div class="row mt-3">
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3">
							<svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
								<path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"></path>
							</svg>
						</div>
						<div class="col p-3">
							Новое
						</div>
					</div>
					<div class="pb-4">
						<?php foreach($tasks as $task): ?>
						<div class="list-group sortable" data-shared-group="client-list">

							<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
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

						</div>
						<?php endforeach; ?>

					</div>
				</div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3">
							<svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
								<path d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z"></path>
							</svg>
						</div>
						<div class="col p-3">
							В работе
						</div>
					</div>

					<div class="list-group sortable" data-shared-group="client-list2" data-pull-mode="clone">
						<div class="pb-4">
							<!-- list 1 -->
							<div class="list-group sortable" data-shared-group="client-list">

								<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
									<div class="col-10 py-2">
										Почти разобрался 1
									</div>
									<div class="col-2 py-2">
										<i class="fi fi-search"></i>
									</div>
								</div>

							</div>
							<!-- list 1 -->

							<!-- list 2 -->
							<div class="list-group sortable" data-shared-group="client-list">

								<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
									<div class="col-10 py-2">
										Почти разобрался 2
									</div>
									<div class="col-2 py-2">
										<i class="fi fi-search"></i>
									</div>
								</div>

							</div>

							<!-- list 2 -->

							<!-- list 3 -->
							<div class="list-group sortable" data-shared-group="client-list">

								<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
									<div class="col-10 py-2">
										Почти разобрался 3
									</div>
									<div class="col-2 py-2">
										<i class="fi fi-search"></i>
									</div>
								</div>

							</div>
							<!-- list 3 -->
						</div>
					</div>

				</div>

			</div>
			<div class="col-md-4 col-sm-6">

				<div class="bg-secondary rounded-3">

					<div class="row mx-0">
						<div class="col-1 p-3">
							<svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bell-slash" viewBox="0 0 16 16">
								<path d="M5.164 14H15c-.299-.199-.557-.553-.78-1-.9-1.8-1.22-5.12-1.22-6 0-.264-.02-.523-.06-.776l-.938.938c.02.708.157 2.154.457 3.58.161.767.377 1.566.663 2.258H6.164l-1 1zm5.581-9.91a3.986 3.986 0 0 0-1.948-1.01L8 2.917l-.797.161A4.002 4.002 0 0 0 4 7c0 .628-.134 2.197-.459 3.742-.05.238-.105.479-.166.718l-1.653 1.653c.02-.037.04-.074.059-.113C2.679 11.2 3 7.88 3 7c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0c.942.19 1.788.645 2.457 1.284l-.707.707zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z"></path>
							</svg>
						</div>
						<div class="col p-3">
							Выполнено
						</div>
					</div>

					<div class="pb-4">
						<!-- list 1 -->
						<div class="list-group sortable" data-shared-group="client-list">

							<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
								<div class="col-10 py-2">
									Разобрался 1
								</div>
								<div class="col-2 py-2">
									<i class="fi fi-search"></i>
								</div>
							</div>

						</div>
						<!-- list 1 -->

						<!-- list 2 -->
						<div class="list-group sortable" data-shared-group="client-list">

							<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
								<div class="col-10 py-2">
									Разобрался 2
								</div>
								<div class="col-2 py-2">
									<i class="fi fi-search"></i>
								</div>
							</div>

						</div>

						<!-- list 2 -->

						<!-- list 3 -->
						<div class="list-group sortable" data-shared-group="client-list">

							<div class="row mx-3 bg-white text-dark rounded-3 mb-2">
								<div class="col-10 py-2">
									Разобрался 3
								</div>
								<div class="col-2 py-2">
									<i class="fi fi-search"></i>
								</div>
							</div>

						</div>
						<!-- list 3 -->
					</div>
				</div>

			</div>
		</div>
	</div>


	<div class="modal fade" id="exampleModalMd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelMd" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabelMd">Добавить задачу</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body">
					<div id="alert_success" class="alert alert-success hide-force">
					Thank you! Data Sumbmited!
				</div>

				<!-- error inline message -->
				<div id="alert_error" class="alert alert-danger hide-force">
					Please, review your data and try again!
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
						"placeholder":	"Type here...",
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

<?php include ROOT.'/views/inc/footer.php';