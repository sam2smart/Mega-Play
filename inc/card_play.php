
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
						
						
						if(empty($check1))
						{
							echo "<script>alert('Empty field 1 !!!');</script>";
						}
						if(empty($check2))
						{
							echo "<script>alert('Empty field 2 !!!');</script>";
						}
						if(empty($check3))
						{
							echo "<script>alert('Empty field 3 !!!');</script>";
						}
						
						
						//__________________________________________________________________Image

						// Set image placement folder
						$target_dir = "image/";
						// Get file path
						$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
						// Get file extension
						$imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
						// Allowed file types
						$allowd_file_ext = array("jpg", "jpeg", "png");
						
				
						if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
						$resMessage = array(
							"status" => "alert-danger",
							"message" => "Select image to upload."
						);
						} else if (!in_array($imageExt, $allowd_file_ext)) {
							$resMessage = array(
								"status" => "alert-danger",
								"message" => "Allowed file formats .jpg, .jpeg and .png."
							);            
						} else if ($_FILES["fileUpload"]["size"] > 2097152) {
							$resMessage = array(
								"status" => "alert-danger",
								"message" => "File is too large. File size should be less than 2 megabytes."
							);
						} else {
							if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
						
					
							
							if($con->cardPlay($check1,$check2,$check3,$phone,$email,$target_file))
							{
									echo "<script>alert('Data Added successfully !!!');</script>";
									echo "<script>window.open('index.php?#form','_self');</script>";
								}
								else{
									echo "<script>alert('Data Not Added successfully !!!');</script>";
								}
							
					}
				}
			}
		?>
                             <form action="" method="post" enctype="multipart/form-data">
								&nbsp;&nbsp;&nbsp;&nbsp;
								
								<div class="card-body">
								<input type="file" name="fileUpload" class="form-control" id="filer_example1" ></br>
								</div>
								<div class="form-group"><br>
								<hr>
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check1" min="0" max="99" required />
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check2" min="0" max="99" required />
			<input type="text" style="text-align: center; width: 20%; border-radius: 20px 20px;" class="form-controls" name="check3" min="0" max="99" required />
						
			<hr>
			</div><br>
								
								<input type="email" name="email" Placeholder="input Email" class="form-control" required><br>
								<input type="tel" name="phone" Placeholder="Phone" class="form-control" required><br>
								<button type="submit" name="sub" class="btn btn-success">PLAY</submit>
								
							</form> 