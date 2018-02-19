<?php include "includes/header.php"; ?>


<section>

	<h1>Account</h1>

	<div class="row">

		<div class="col-sm-4">

			<div class="account_avatarr">
				<img src="assets/images/user.png">
				<a href="#">Update</a>
			</div>
			<h3>Nathaniel</h3>
			<p>nat.meyer.nz@gmail.com</p>
			<p>021 0285 1908</p>
			<a href="" class="btn">Edit profile</a>

		</div>

		<div class="col-sm-8">
			
			<div class="tab-content">
				<ul class="tabs">
					<li class="tab-link current" data-tab="tab-1">Overview</li>
					<li class="tab-link" data-tab="tab-2">Jobs</li>
					<li class="tab-link" data-tab="tab-3">Hours</li>
					<li class="tab-link" data-tab="tab-4">Settings</li>
				</ul>

				<div id="tab-1" class="tab-content current">
					Overview
				</div>
				<div id="tab-2" class="tab-content">
					Jobs
				</div>
				<div id="tab-3" class="tab-content">
					Hours
				</div>
				<div id="tab-4" class="tab-content">
					Settings
				</div>
			</div>

		</div>

	</div>






</section>


<?php include "includes/footer.php"; ?>