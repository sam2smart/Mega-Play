
						<?php
						include_once'class.data.php';
						$con = new USER();
						
						
					if(isset($_POST['sub']))
					{
						
						$check1 = $_POST['check1'];
						$check2 = $_POST['check2'];
						$check3 = $_POST['check3'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$target_file = "Clients";
						
						
						if(empty($check1))
						{
							echo "<script>alert('Empty field 1 !!!');</script>";
							echo "<script>window.open('index.php?#form','_self');</script>";
						}
						if(empty($check2))
						{
							echo "<script>alert('Empty field 2 !!!');</script>";
							echo "<script>window.open('index.php?#form','_self');</script>";
						}
						if(empty($check3))
						{
							echo "<script>alert('Empty field 3 !!!');</script>";
							echo "<script>window.open('index.php?#form','_self');</script>";
						}
						
						
			
						if($con->cardPlay($check1,$check2,$check3,$phone,$email,$target_file))
							{
									echo "<script>alert('Data Added successfully !!!');</script>";
									echo "<script>window.open('index.php?#form','_self');</script>";
								}
								else{
									echo "<script>alert('Data Not Added successfully !!!');</script>";
								}
					}
		?>
                             <form action="" method="post" enctype="multipart/form-data">
								&nbsp;&nbsp;&nbsp;&nbsp;
								
								<div class="form-group">
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check1" min="0" max="99" required />
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check2" min="0" max="99" required />
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check3" min="0" max="99" required />
							
			<hr>
			</div><br>
								
								<input type="email" name="email" Placeholder="input Email" class="form-control" required><br>
								<input type="tel" name="phone" Placeholder="Phone" class="form-control" required><br>
								<button type="submit" name="sub" class="btn btn-success">PLAY</submit>
								
							</form> 