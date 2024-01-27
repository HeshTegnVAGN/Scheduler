<!--Modal edit task-->
<div class="modal fade" id="exampleModalTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalTask"
     aria-hidden="true">
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
                <form class="bs-validate" novalidate action="<?= PATH ?>assets/js/ajax/edit_task.php"
                      method="POST"

                      data-ajax-inline-alert-succes="#alert_success"
                      data-ajax-inline-alert-error="#alert_error"

                      data-ajax-update-url="true"
                      data-ajax-show-loading-icon="true"

                      data-error-scroll-up="true"
                      data-ajax-callback-function="callback1">

                    <script>
                        function callback1() {
                            $('#exampleModalTask').modal('hide');
                            $.SOW.core.toast.show('success', '', 'Задача успешно изменена!', 'top-center', 4000, true);
                        }

                        function callback_refresh() {
                            // setTimeout(window.location.reload(), 5000);
                        }
                    </script>
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" name="edit_title" id="TaskTitle"
                               placeholder="Название">
                        <label for="TaskTitle">Название</label>
                    </div>
                    <input type="hidden" name="alternate_decr" id="alt_descr">
                    <input type="hidden" name="id" id="task-id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" name="edit_responsible"
                                        aria-label="Floating label select example">
                                    <option value="<?= $user->id ?>"><?= $user->name ?></option>
                                    <?php foreach ($user->admissions as $a): ?>

                                        <?php if ($a['adding']): ?>
                                            <option value="<?= $a['uid'] ?>"><?= $a['name'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floatingSelect">Ответственный</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input required disabled type="text" class="form-control" name="author" id="author"
                                   placeholder="Автор">
                            <label for="author"></label>
                        </div>
                    </div>

                    <!-- Добавить подзадачу -->
                    <div class="row">
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control" style="border-radius: 6px;" id="subtaskTitle"
                                   placeholder="Добавить подзадачу">
                            <label for="subtaskTitle" style="margin-left: 12px;">Добавить подзадачу</label>
                        </div>
                        <div class="col-md-6 my-auto">
                            <i type="button" class="btn btn-warning createSubtask fi fi-plus"
                               style="transform: rotate(90deg);"></i>
                        </div>
                    </div>
                    <div id="task-template" class="task-template d-none align-items-center bg-theme-color-light border-1 border-gray-300 d-flex justify-content-between mt-3 p-2 px-3 rad-03">
                        <!--                        <input type="hidden" name="subtask[]" value="">-->
                        <!--                        <input type="hidden" name="completed[]" value="">-->

                        <div class="task-title"></div>

                        <div>
                            <!--<span class="btn btn-sm btn-${note.completed ? 'warning' : 'success'}" data-type="toggle" data-index="${index}">&check;</span>-->
                            <span title="Удалить" class="remove-subtasks cursor-pointer" data-id data-type="remove" data-index="${index}">
                                <i class="bg-danger fi fi-thrash p-2 text-white" style="border-radius: 50%;width: 41px;display: flex;align-content: center;justify-content: center;"></i>
                            </span>
                        </div>
                    </div>
                    <div class="justify-content-between align-items-center p-0 mb-3 mx-3 edit-subtasks" id="list">

                    </div>
                    <!-- /Добавить подзадачу -->

                    <div class="form-floating mb-3 mt-3">
                        <textarea name="edit_descr" id="editor-decr-new" class="summernote-editor w-100"
                                  data-summernote-config='{
                        "placeholder": "Напишите текст...",
                        "focus":	    false,
                        "lang":			"en-US",
                        "minHeight":	300,
                        "maxHeight":	1500,

                        "styleTags": ["h2","h3","h4","h5","h6"
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
                        <label for="customRange1" class="form-label">Приоритет: <span
                                id="priorityVal">Средний</span></label>
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