<?php include "includes/header.php"; ?>
<?php $Admin = true; ?>

<section>
	
	<?php if ($Admin == true) { ?>

	<h1>Dashboard Admin</h1> 
	
	
	
	<?php }else{ ?>

	<h1>Dashboard User</h1> 
	
	
	
	<?php } ?>	

</section>


<?php include "includes/footer.php"; ?>