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

                        <p class="mb-0">Почта</p>

                        <input type="email" class="form-control" autocomplete="off" aria-describedby="emailHelp">
                    </form>
                </div>
            </div>

            <div class="mt-3 w-250 bg-gradient-linear-danger mb-3 p-2 rad-10 text-center">
                <a href="/scheduler/reset" class="text-white">Восттановить пароль</a>
            </div>

        </div>
    </main>
</div>