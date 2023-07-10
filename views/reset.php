<div id="wrapper">


    <!-- Header -->

    <!-- /Header -->




    <!-- PAGE TITLE -->
    <div class="section">
        <div class="px-2 max-w-800 mx-auto text-center">

            <h1 class="display-4 fw-bold">
                Восстановить пароль
            </h1>

            <p class="lead m-0">
                Инструкции будут отправлены на ваш email
            </p>

        </div>
    </div>
    <!-- /PAGE TITLE -->

    <script>

        function callback2()
        {
            $('#code_check').remove();
            $('#new_pass').removeClass('d-none');
        }
        function callback3()
        {
            setTimeout(()=>{
                window.location.href = "https://scheduler.imdibil.ru/login";
            }, 3000)
        }
    </script>


    <!-- FORM -->
    <div class="section pt-0">
        <div class="container">


            <div class="row">

                <div class="col-12 col-sm-8 col-md-8 col-lg-6 offset-sm-2 offset-md-2 offset-lg-3">

                    <form id="email_send" class="bs-validate" novalidate>
                        <div class="form-floating mb-3">
                            <input required="" placeholder="Email" id="account_email" name="email" type="email" class="form-control">
                            <label for="account_email">Email</label>
                        </div>


                        <div class="row">

                            <div class="col-12 col-md-6 mt-4">
                                <button type="submit" class="btn btn-primary w-100 fw-medium">
                                    Подтвердить
                                </button>
                            </div>

                            <div class="col-12 col-md-6 text-align-end text-center-xs">
                                <!-- empty -->
                            </div>

                        </div>

                    </form>

                    <form  id="code_check"class="js-ajax bs-validate d-none" novalidate
                           action="assets/js/ajax/check_code.php"
                           method="POST"

                           data-ajax-container="#ajax_response_container"
                           data-ajax-update-url="false"
                           data-ajax-show-loading-icon="true"

                           data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i>Неверный код!"
                           data-success-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i>Код принят. введите новый пароль"
                           data-error-toast-delay="3000"
                           data-error-toast-position="top-center"

                           data-error-scroll-up="true"
                           data-ajax-callback-function="callback2">


                        <!--
                        <p class="text-danger">
                            Ups! Please check again
                        </p>
                        -->


                        <div class="form-floating mb-3">
                            <input required="" placeholder="" id="code" name="code" type="text" class="form-control">
                            <label for="account_email">Код подтверждения</label>
                        </div>
                        <input type="hidden" name="email" id="email_new">


                        <div class="row">

                            <div class="col-12 col-md-6 mt-4">
                                <button type="submit" class="btn btn-primary w-100 fw-medium">
                                    Подтвердить
                                </button>
                            </div>


                            <div class="col-12 col-md-6 text-align-end text-center-xs">
                                <!-- empty -->
                            </div>

                        </div>

                    </form>
                    <form class="bs-validate p-4 p-md-5 d-none js-ajax" id="new_pass" novalidate
                          action="assets/js/ajax/reset_pass.php"
                          method="POST"

                          data-ajax-container="#ajax_response_container"
                          data-ajax-update-url="false"
                          data-ajax-show-loading-icon="true"
                          data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Заолните все поля!" data-error-toast-delay="3000" data-error-toast-position="top-right" data-ajax-callback-function="callback3">


                        <!--
                        <p class="text-danger">
                            Ups! Please check again
                        </p>
                        -->



                        <div class="input-group-over">
                            <div class="form-floating mb-3">
                                <input placeholder="Account Password" id="account_password" name="password" type="password" class="form-control">
                                <label for="account_password">Пароль</label>
                            </div>
                            <input type="hidden" name="email" id="email_pw">

                            <!-- Show Password -->
                            <a href="#" class="btn btn-password-type-toggle" data-target="#account_password">
			<span class="group-icon">
				<i class="fi fi-eye m-0"></i>
				<i class="fi fi-close m-0"></i>
			</span>
                            </a>
                        </div>


                        <div class="row">

                            <div class="col-12 col-md-6 mt-4">
                                <button type="submit" class="btn btn-primary w-100 fw-medium">
                                    Подтвердить
                                </button>
                            </div>

                            <div class="col-12 col-md-6 text-align-end text-center-xs">
                                <!-- empty -->
                            </div>

                        </div>

                    </form>



                </div>

            </div>

        </div>
    </div>
    <!-- /FORM -->




    <!-- Footer -->

    <!-- /Footer -->


</div>