  
<section class="banner_area" >
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				
				<div class="container">
			
                <div class="page-cover text-center">

                <!-- Contact Form --> 
				 
				 <?php
					
					if(isset($_POST['btn-login']))
					{
						$check1 = $_POST['check1'];
						
						$stmt=$con->prepare("SELECT * FROM checker WHERE no1=:check1");
						$stmt->execute(array(":check1"=>$check1));
						// && $check2 == $vRow['no2'] && $check3 == $vRow['no3'] && $check4 == $vRow['no4']
						$vRow=$stmt->fetch(PDO::FETCH_ASSOC);
						
						//echo "<h2>".$vRow['no2']."</h2><br>";
						//echo "<h2>".$check2."</h2>";
						if($check1 == $vRow['no1'])
						{
						echo "<script> alert('Ticket is valid, please contact our payment department !') </script>";
						}else{
							echo "<script> alert('Error Code !!!') </script>";
						}
					}
				 ?>
  <div style="margin-top: 15%;"></div>
	<table class="table table-striped table-condensed table-opacity" >
	<tr>
		<td style="border: none;">
			
							<h3 style="color: #fff; margin-top: 0%;">WINNING NUMBER</h3>
							
			
						<form  method="post">
						
							<div id="error">
							<?php
								if(isset($error))
								{
									?>
									<div class="alert alert-danger">
									<i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
									</div>
									<?php
								}
								
							?>
							</div>
							
							<div class="form-group">
								<input type="text" style="text-align: center; width: 20%; border: none; border-radius: 20px 20px;" name="check1" min="0" max="99" required />
							
							<span id="check-e"></span><br><br>
							<button type="submit" name="btn-login" class="btn btn-default">
										<i class="glyphicon glyphicon-log-in"></i> &nbsp; CHECK NO
								</button>
							</div>
						</form>
			</td>
		</tr>
	</table>
 <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form --> 
<div class="col-lg-6 mb-6 order-lg-2">
            <div class="container">
				<div class="table-responsive table--no-card m-b-30" style="border-radius: 5% 5% 5% 5%; border: none"  >
<table class="table table-striped table-condensed table-opacity" style="color: #fff; background: #cc0099; border-radius: 10px 10% 10% 10%;">
	<tr>
		<td>
			<h3><i>HOW TO PLAY</i></h3>
			<p>Pick 3 from our out box figures, on our pages and if you are lucky to pick our our
			3 winning numbers you will be given our daily amount, you can below free or with $20 SteamCard. <?php include'inc/continueReading.php'; ?></a></li></p><br>
			<a href="?card#form" class="btn btn-success">PLAY</a>
		</td>
	</tr>
</table>
</div>
</div>
</div>
<div class="col-lg-6 mb-6 order-lg-2" style="">
            <div class="container" style="color: #fff; background: #cc0066; border-radius: 5% 5% 5% 5%">
				<div class="table-responsive table--no-card m-b-30"  >
<table class="table table-condensed table-opacity" >
	
			<h4 style="color: white;"><i>RANDOM NUMBER</I></H4>
		
	<!--- Here our php comes to call our numbers from the database table	-->
	<?php
	$stmt=$con->prepare("SELECT * FROM random limit 2");
			$stmt->execute();
			
			// we use while loop to output all the data from the database
			while($IRow=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			
			?>
			<tr>
		<td style="border: none;">
		
			<input type="text" value="<?php echo $IRow['ran1']; ?>" style="text-align: center; background: white; width: 30%; font-size: 25px; border: none; border-radius: 20px 20px;" disabled />
			<input type="text" value="<?php echo $IRow['ran2']; ?>" style="text-align: center; background: white; width: 30%; font-size: 25px; border: none; border-radius: 20px 20px;" disabled />
			<input type="text" value="<?php echo $IRow['ran3']; ?>" style="text-align: center; background: white; width: 30%; font-size: 25px; border: none; border-radius: 20px 20px;" disabled />
			
		</td>
		</tr>
		
		<?php
		}
			
			?>
	<tr>
			<td>
				<div class="col-md-12" style="background: yellow; width: 80%; height: 3%; margin-bottom: 1px; color: #000; margin-left: 10%; border-radius: 10px;">
					<h3><i>Todays Winning</i></h4>
					<h3><i>$ 10,000</i></h4> 
					</div>
			</td>
		</tr>
</table>
</div>
</div>
</div>
</div>
</div>


				
					</div>
				</div>
            </div>
        </section>