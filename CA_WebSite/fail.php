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
				if($_POST['status']=="failure"){
					echo "<p>Payment Failed.<br>Details Are Below.</p>";
					echo "<p>Failure Reason: ".$_POST['unmappedstatus']."</p>";
					echo "<p>Txn Id: ".$_POST['txnid']."</p>";
					echo "<p>Name: ".$_POST['firstname']."</p>";
					echo "<p>Email: ".$_POST['email']."</p>";
					echo "<p>Amount: ".$_POST['amount']."</p>";
					echo "<p>Phone No: ".$_POST['phone']."</p>";
					echo "<p>Product Info: ".$_POST['productinfo']."</p>";
				}
			}

			?>
	</div>
            </div>
        </div>
</div>

<?php include('footer-2.php'); ?>