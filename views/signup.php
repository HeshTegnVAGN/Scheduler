<div class="section">
	<div class="px-2 max-w-800 mx-auto text-center">

		<h1 class="display-4 fw-bold">
			Зарегистрируйтесь
		</h1>


	</div>
</div>

<div class="section pt-0">
	<div class="container">


		<div class="row">

			<div class="col-12 col-sm-8 col-md-8 col-lg-6 offset-sm-2 offset-md-2 offset-lg-3">

				<form class="bs-validate p-4 p-md-5 rounded shadow-xs" novalidate="" method="post" action="<?=PATH?>controller/register.php" data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Заолните все поля!" data-error-toast-delay="3000" data-error-toast-position="top-right">


					<!--
					<p class="text-danger">
						Ups! Please check again
					</p>
					-->


					<div class="form-floating mb-3">
						<input required="" placeholder="First Name" id="account_first_name" name="name" type="text" class="form-control">
						<label for="account_first_name">Имя</label>
					</div>

					<div class="form-floating mb-3">
						<input required="" placeholder="Email" id="account_email" name="email" type="email" class="form-control">
						<label for="account_email">Email</label>
					</div>

					<div class="input-group-over">
						<div class="form-floating mb-3">
							<input placeholder="Account Password" id="account_password" name="password" type="password" class="form-control">
							<label for="account_password">Пароль</label>
						</div>

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
								Зарегистрироваться
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