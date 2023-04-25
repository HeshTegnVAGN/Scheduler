
<div class="section">
	<div class="px-2 max-w-800 mx-auto text-center">

		<h1 class="display-4 fw-bold">
			Авторизация
		</h1>

		<p class="lead m-0">
			Получить доступ к планировщику
		</p>

	</div>
</div><div class="section pt-0">
	<div class="container">


		<div class="row">

			<div class="col-12 col-sm-8 col-md-8 col-lg-6 offset-sm-2 offset-md-2 offset-lg-3">

				<form novalidate="" action="<?=PATH?>controller/login.php" method="POST" class="bs-validate p-4 p-md-5 rounded shadow-xs">


				<?php if($_SESSION['error']): ?>
					<p class="text-danger">
						<?=$_SESSION['error']?>
					</p>
                <?php endif; unset($_SESSION['error']); ?>



                    <div class="form-floating mb-3">
                        <input required="" placeholder="Email" id="account_email" name="email" type="email" class="form-control">
                        <label for="account_email">Email</label>
                    </div>

                    <div class="input-group-over position-relative ">
                        <div class="mb-3 form-floating">
                            <input required="" placeholder="Password" id="account_password" name="password" type="password" class="form-control">
                            <label for="account_password">Пароль</label>
                            <button type="button" title="Показать пароль" id="test"></button>

                        </div>


                        <!--						<a href="account-simple-signin-password.html" class="btn smaller fw-bold">-->
                        <!--							RESET?-->
                        <!--						</a>-->

                    </div>



					<div class="row">

						<div class="col-12 col-md-6 mt-4">
							<button type="submit" class="btn btn-primary w-100 fw-medium">
								Войти
							</button>
						</div>

						<div class="col-12 col-md-6 mt-4 text-align-end text-center-xs">
							<a href="/scheduler/signup" class="btn px-0 link-normal">
								Не зарегистрированы?
							</a>
						</div>

					</div>

				</form>

			</div>
            <a href="/scheduler/reset" class="text-center mt-2">Забыли пароль?</a>

		</div>

	</div>
</div>


<script>
    const togglePassword = document.querySelector('#test');
    const password = document.querySelector('#account_password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>