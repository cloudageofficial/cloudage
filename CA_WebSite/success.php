<?php include('header-2.php');?>
<div class="intro-full ms-hero-img-city2 ms-hero-bg-primary color-white" id="home">
		 <div id="intro-video" class="plyr__video-embed">
           <video autoplay muted loop id="myVideo">
              <source src="assets/media/3-vp9.webm" type="video/webm">
             </video>
        </div>
        <div class="intro-full-content index-1">
			<div class="container success-text" >
				<!--<h2>Payment Success</h2>-->
				<div class="card card-info" style="background: transparent;padding: 20px;">
		<?php 
			if(isset($_POST['status'])){
				if($_POST['status']=="success"){
					echo "<p style='color: #10d210;font-weight: bold;'>Payment Done Successfully.</p><h2>Details Are Below.</h2>";
					echo "<p><b>Transaction Id :</b> ".$_POST['txnid']."</p>";
					echo "<p><b>Name :</b> ".$_POST['firstname']."</p>";
					echo "<p><b>Email :</b> ".$_POST['email']."</p>";
					echo "<p><b>Amount :</b> ".$_POST['amount']."</p>";
					echo "<p><b>Phone No :</b> ".$_POST['phone']."</p>";
					echo "<p><b>Product Information :</b> ".$_POST['productinfo']."</p>";
					echo "<p><b>encryptedPaymentId :</b> ".$_POST['encryptedPaymentId']."</p>";
				}
			}

			?>
	</div>
            </div>
        </div>
</div>

<?php include('footer-2.php'); ?>