<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "navbar.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>WELCOME ( <?php echo $_SESSION['username'];?> )</h2>
						<p>Ini adalah website Penjualan Sepatu Bagus Store </p>
						
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>