<?php
// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.1
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************//
require_once("include/features.php");

$username = trim($row["username"]);
$sql = "select id from users where username = '".$username."'";
$rs = mysqli_query($conn,$sql);

$cookie = $_COOKIE["username"]; 

site_secure();
secure_url();

if(isset($_POST['tweeting'])){
		$username = stripslashes(trim($_POST['username']));
		$msg 	= stripslashes(trim($_POST['msg']));	
		$posted 	= date();
		
		$sql = "insert into tweets (username, msg, posted) value('".$username."', '".$msg."', NOW())";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			site_tweetings_done();
		}
		$conn->close();
}

if(isset($_POST['like_msg'])){
		$liked = stripslashes(trim($_POST['liked'])) + 1;
		$id = $_REQUEST['id'];
		$msg = $_REQUEST['msg'];
		
		$sql2 = "UPDATE tweets SET liked='".$liked."' ORDER BY id LIMIT 10";
		$result2 = mysqli_query($conn, $sql2);
		if($result2)
		{
			site_tweetings_liked_done();
		}
		$conn->close();
}

site_header();
site_navi_logged();
site_content_logged();

echo "
    <div class='content'>
        <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei ".PROJECTNAME."!</h5>
                <p class='category'>User Control Panel | Dashboard</p>
              </div>
              <div class='card-body'>		  
			<div class='row'>			
				<div class='col-sm-12'>
					<b>Willkommen ";
					$id = 0 + $_COOKIE["secure"];
					$securecode = $row["id"];
					$sql = "SELECT username FROM users WHERE id = ".$_SESSION['secure_first']."";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo"".$row["username"]."";
						}
					}
echo "						
					 im Dashboard!
				</div>				
			</div>										
              </div>
            </div>
		<div class='row'>
		  <div class='col-md-12'>
              <div class='card'>
			  <div class='col-md-12'>
                <div class='author'>
                    <h5 class='title'>
					<div class='col-md-12'>
						<p class='description text-center'>
							<div style='padding:2px;width:100%;'>
								<div class='rules-item mb-6'>
									<div class='ti-content'>
										<div class='ti-text'>
											<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
												<div class='form-row'>
													<div class='col-sm-1'>
														<div class='avatar' style='float: left;'>
															<div class='author'>
																<div class='title'>
																	<img class='avatar border-gray' src='../themes/destiny-life/assets/img/mike.jpg' alt='...'>
																</div>
															</div>
														</div>";
												$id = 0 + $_COOKIE["secure"];
												$securecode = $row["id"];
												$sqlx = "SELECT username FROM users WHERE id = ".$_SESSION['secure_first']."";
												$resultx = $conn->query($sqlx);
												if ($resultx->num_rows > 0) {
													// output data of each row
													while($row = $resultx->fetch_assoc()) {
												echo"
														<div class='category'>
															".$row["username"]."
														</div>
													</div>
													<div class='col-sm-2' style='display:none;'>
														<input required style='box-shadow: 0 0 1px rgba(0,0,0, .4);' aria-label='Deine Tweet Nachricht' type='text' name='username' class='form-control' value='" . $row["username"]. "' placeholder='' value='' maxlength='10' id='border-right6'/>			
													</div>";
													}
												}		
													echo "
													<div class='col-sm-9'>
														<input required style='box-shadow: 0 0 1px rgba(0,0,0, .4);' aria-label='Deine Tweet Nachricht' type='text' name='msg' class='form-control' placeholder='Was gibt es Neues ?' value='' maxlength='220' id='border-right6'/>			
													</div>
													<div class='col-sm-2'>
														<button class='form-control btn-round btn-icon border-gray' name='tweeting'><i class='now-ui-icons ui-1_check'></i> Twittern</button>		
													</div>													
												</div>				
											</form>	
										</div>
									</div>
								</div>
							</div>			
						</p>
					</div>
					</h5>
                  </a>
				  </div>
                </div>
				<div class='col-md-12'>
                <div class='description'>";

				$sql = "SELECT username, msg, liked, posted FROM tweets";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "
						<br>
						<div class='card'>
							<div class='category'>
								<br>
								<div class='col-sm-12'>
									<span>
										<h5>
											<i class='now-ui-icons users_single-02'> " . $row["username"]. " - " . $row["posted"]. "</i>
										</h5>								
									</span>
									<span>
										<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
											<button class='btn btn-fab btn-icon btn-round' name='like_msg' style='float: right;'><i class='now-ui-icons ui-2_like'></i></button>
										</form>
									</span>
									<span>
										<h5 class='btn-fab btn-icon btn-round' style='float: right;'>" . $row["liked"]. "</h5>
									</span>										
								</div>
							</div>
							<br>
							<div class='col-md-12'>							
								<span>
									<h5>" . $row["msg"]. "</h5>
								</span>
							</div>
						</div>";
					}
				}
							
echo "
                </div>
				</div>
              </div>
            </div>
          </div>		  
	</div>
	</div>
</div>";
site_footer();	
?>