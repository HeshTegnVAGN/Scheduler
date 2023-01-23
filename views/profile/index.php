<div class="d-flex">
    <?php include ROOT.'views/inc/sidebar.php'; ?>
    <main class="w-100">
        <div class="container p-3 py-4">
            <h2>Редактировать профиль</h2>
            <div class="row">
                <div class="col-12">
                    <form class="js-ajax bs-validate">
                        <div class="form-floating mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Имя</label>
                                    <input required type="text" class="form-control" name="First_Name" placeholder="Имя">
                                </div>
                                <div class="col-md-4">
                                    <label>Фамилия</label>
                                    <input required type="text" class="form-control" name="Last_Name" placeholder="Фамилия">
                                </div>
                                <div class="col-md-4">
                                    <label>Отчество</label>
                                    <input required type="text" class="form-control" name="Middle_Name" placeholder="Отчество (при наличии)">
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <label>Почта</label>
                            <input type="email" class="form-control" autocomplete="off" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3 form-floating">
                            <label">Старый пароль</label>
                            <input type="password" class="form-control" autocomplete="new-password" name="old-password" id="inputPassword">
                        </div>
                        <div class="mb-3 form-floating">
                            <label">Новый пароль</label>
                            <input type="password" class="form-control" name="new-password" id="inputPassword">
                        </div>
                        <div class="mb-3 form-floating">
                            <label">Еще разок</label>
                            <input type="password" class="form-control" name="cheсk-new-password" id="inputPassword">
                        </div>

                </div>
                </form>
            </div>
        </div>
    </main>
</div>