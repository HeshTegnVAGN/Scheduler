
<!--    offcanvas block-->
<div class="offcanvas offcanvas-start w-100-xs" tabindex="-1" id="offcanvasWithBackdrop"
     aria-labelledby="offcanvasWithBackdropLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel">Просмотр задачи</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <form class="js-ajax bs-validate" novalidate action="assets/js/ajax/edit_task.php" method="POST">
                <div class="form-floating mb-3">
                    <input required readonly type="text" class="form-control" name="edit_title" id="TaskTitle"
                           placeholder="Название" autocomplete="off">
                    <label for="TaskTitle">Заголовок</label>

                </div>
                <p name="alternate_decr" id="alt_descr"></p>
                <input disabled type="hidden" name="id" id="task-id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select disabled class="form-select" id="floatingSelect" name="edit_responsible"
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
                        <input disabled required type="text" class="form-control" name="author" id="author"
                               placeholder="Название">
                        <label for="author"></label>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <label for="customRange1" class="form-label">Приоритет: <span
                            id="priorityVal">Средний</span></label>
                    <input disabled type="range" class="form-range" id="priority" name="edit_priority">
                </div>

                <!-- Добавить подзадачу -->
                <div class="row">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" style="border-radius: 6px;" id="subtaskTitle"
                               placeholder="Добавить подзадачу">
                        <label for="subtaskTitle" style="margin-left: 12px;">Добавить подзадачу</label>
                    </div>
                    <div class="col-md-6 my-auto">
                        <i type="button" class="btn btn-warning createSubtask fi fi-plus subtask-add-show" data-action="add"></i>
                    </div>
                </div>
                <div id="task-template" class="task-template d-none align-items-center bg-theme-color-light border-1 border-gray-300 d-flex justify-content-between mt-3 p-2 px-3 rad-03">
                    <!--                        <input type="hidden" name="subtask[]" value="">-->
                    <!--                        <input type="hidden" name="completed[]" value="">-->

                    <div class="task-title"></div>

                    <div class="d-flex">
                        <div>
                            <i class="fi fi-check p-2 text-white bg-success cursor-pointer submit-task" style="border-radius: 50%;width: 41px;display: flex;align-content: center;justify-content: center; margin-right: 10px"></i>
                        </div>

                        <div>
                            <span title="Удалить" class="remove-subtasks cursor-pointer" data-type="remove" data-index="${index}">
                                <i class="bg-danger fi fi-thrash p-2 text-white" style="border-radius: 50%;width: 41px;display: flex;align-content: center;justify-content: center;"></i>
                            </span>
                        </div>
    
                    </div>
                </div>
                <div class="justify-content-between align-items-center p-0 mb-3 show-tasks" id="list">

                </div>
                <!-- /Добавить подзадачу -->

                <div id="alt-descr" class="border border-4 border-dashed descr-show my-3 p-2" name="edit_descr"></div>

<!--                <button type="button" class="btn btn-secondary float-end" data-bs-dismiss="offcanvas">-->
<!--                    <i class="fi fi-close"></i>-->
<!--                    Закрыть-->
<!--                </button>-->
<!--                <button type="submit" class="btn btn-danger text-white float-end">-->
<!--                    <i class="fi fi-check"></i>-->
<!--                    Заморозить-->
<!--                </button>-->
            </form>

        </div>
        <div class="comments mt-2">

        </div>
        <div id="alert_error" class="alert alert-danger hide-force">
            Please, review your data and try again!
        </div>

        <!--
            NOTE: WE USE method="GET" insted of "POST" because this is a pure html demo
        -->
        <form class="js-ajax bs-validate p-4" novalidate
              action="https://scheduler.imdibil.ru/assets/js/ajax/new_comment.php"
              method="POST"

              data-ajax-inline-alert-succes="#alert_success"
              data-ajax-inline-alert-error="#alert_error"

              data-ajax-update-url="false"
              data-ajax-show-loading-icon="true"

              data-error-scroll-up="true"
              data-ajax-callback-function="callback_refresh">
            <input type="hidden" name="id_task" id="id_task">
            <textarea type="text" name="text" placeholder="Комментарий" class="form-control mb-3"></textarea>
            <button type="submit" class="btn btn-warning">Отправить</button>
        </form>
        <div class="row">
            <div class="col com-block">
            </div>
        </div>


    </div>
</div>

<!--    /offcanvas block-->
