<?php 
// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.0
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: Creative Commons licenses
// ************************************************************************************// 
require_once("include/features.php");

if(isset($_POST['submit'])){
	
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$securecode = $row["id"];
	// Get the client ip address
	$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	
	session_start();
	$_SESSION["secure"] = sitehash($securecode);	
	$sql = "select * from accounts where username = '".$username."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			$_SESSION['secure'] = $securecode;
			$expires = time()+2592000;
			$securecode = $row["id"];
			setcookie("secure", $securecode, $expires,  "/");
			$timestamp = date('Y-m-d H:i:s');
			// Get the client ip address
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
			
			$sql2 = "UPDATE characters SET accountId = ".$row["id"]." WHERE id = ".$_COOKIE["secure"]."";
			$result2 = mysqli_query($conn, $sql2);
			$sql2xz = "UPDATE accounts SET ip = '".$ipaddress."' WHERE id = '".$_COOKIE["secure"]."'";
			$result2x = mysqli_query($conn, $sql2xz);
			if($result)
			{
				//
			}
			header("Location:dashboard.php");
		}
		else{
			site_login_password_none_correct();
		}
	}
	else{
		site_login_user_notfound();
	}
}

site_header();
site_navi_nologged();
site_content_nologged();

echo "
      <div class='content'>
                <div class='row'>
          <div class='col-md-12'>
            <div class='card'>
              <div class='card-header'>
                <h5 class='title'>Willkommen bei ".PROJECTNAME."!</h5>
                <p class='category'>User Control Panel | Login</p>
              </div>
              <div class='card-body'>
			<form action='".$_SERVER['PHP_SELF']."' method='post' enctype='multipart/form-data'>
			<div class='form-row'>
				<div class='form-group col-md-6'>
					<label for='exampleFormControlInput1'><i id='email-icon' class='now-ui-icons users_single-02'></i> Social Club Name</label>
					<input required aria-label='Social Club Name' type='text' name='username' class='form-control' placeholder='Social Club Name *' value='' maxlength='30' id='exampleInputEmail1'/>
				</div>
				<div class='form-group col-md-4'>
					<label for='exampleFormControlInput1'><i id='message-icon' class='now-ui-icons ui-1_lock-circle-open'></i> Passwort</label>
					<input required aria-label='Password' type='password' name='password' class='form-control' placeholder='Passwort *' value='' maxlength='30' id='exampleInputPassword1'/>
				</div>				
			</div>				
			<button type='submit' class='btn btn-primary' name='submit'>Login</submit>					
			</form>				
              </div>
            </div>
          </div>
        </div>
      </div>";
site_footer();	  
?>