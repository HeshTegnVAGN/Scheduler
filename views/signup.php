<div class="section">
	<div class="px-2 max-w-800 mx-auto text-center">

		<h1 class="display-4 fw-bold">
			Create Account
		</h1>

		<p class="lead m-0">
			It's free and easy!
		</p>

	</div>
</div>

<div class="section pt-0">
	<div class="container">


		<div class="row">

			<div class="col-12 col-sm-8 col-md-8 col-lg-6 offset-sm-2 offset-md-2 offset-lg-3">

				<form class="bs-validate p-4 p-md-5 rounded shadow-xs" novalidate="" method="post" action="#" data-error-toast-text="<i class='fi fi-circle-spin fi-spin float-start'></i> Please, complete all required fields!" data-error-toast-delay="3000" data-error-toast-position="top-right">


					<!--
					<p class="text-danger">
						Ups! Please check again
					</p>
					-->


					<div class="form-floating mb-3">
						<input required="" placeholder="First Name" id="account_first_name" name="account_first_name" type="text" class="form-control">
						<label for="account_first_name">Имя</label>
					</div>

					<div class="form-floating mb-3">
						<input required="" placeholder="Email" id="account_email" name="account_email" type="email" class="form-control">
						<label for="account_email">Email</label>
					</div>

					<div class="input-group-over">
						<div class="form-floating mb-3">
							<input required="" placeholder="Password" id="account_password" type="password" class="form-control">
							<label for="account_password">Пароль</label>
						</div>

						<!-- `SOW : Form Advanced` plugin used -->
						<a href="account-simple-signin-password.html" class="btn smaller btn-password-type-toggle js-form_advanced_type_toggle" data-bs-target="#account_password">
										<span class="group-icon">
											<i class="fi fi-eye m-0"></i>
											<i class="fi fi-close m-0"></i>
										</span>
						</a>

					</div>


					<div class="row">

						<div class="col-12 col-md-6 mt-4">
							<button type="submit" class="btn btn-primary w-100 fw-medium">
								Sign Up
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