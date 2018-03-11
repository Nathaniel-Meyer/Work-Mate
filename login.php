<?php include "includes/head.php"; ?>



<main class="login">
	<div class="container-fluid">
		<div class="row">

			<aside class="col-5">

				<img class="logo" src="assets/img/logo.svg">

				<form action="dashboard">
					<div>
						<label>Email</label>
						<input type="email" name="email">
					</div>
					
					<div>
						<label>Password</label>
						<input type="password" name="password">
					</div>

					<div>
						<input class="bg-primaryDark" type="submit" value="Login">
					</div>
					
				</form>

				<div>
					<a class="fg-pw grey" href="#">Forgot Password?</a>
				</div>
				<div>
					<a class="cr-at primary" href="#">Create Account?</a>
				</div>
			</aside>



			<section class="col-7 bg-image-cover" style="background: url(assets/img/bg/login.jpg) no-repeat center center;">

			</section>


		</div>
	</div>
</main>


<?php include "includes/footer.php"; ?>