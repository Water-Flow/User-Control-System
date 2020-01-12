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
// * License Typ: GNU GPLv3
// ************************************************************************************//
require_once("include/features.php");
	
$cookie = $_COOKIE["username"]; 

site_secure();

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
                <p class='category'>User Control Panel | User Profile</p>
              </div>
              <div class='card-body'>
			<div class='row'>
		  <div class='col-md-4'>
            <div class='card card-user'>
              <div class='image'>
                <img src='themes/destiny-life/assets/img/bg5.jpg' alt='...'>
              </div>
              <div class='card-body'>
                <div class='author'>
                  <a href='#'>
                    <img class='avatar border-gray' src='themes/destiny-life/assets/img/mike.jpg' alt='...'>
                    <h5 class='title'>
						Unser Motto
					</h5>
                  </a>
                </div>
                <p class='description text-center'>
				<div style='padding:2px;width:100%;'>
					<div class='rules-item mb-6'>
						<div class='ti-content'>
							<div class='ti-text'>
								<span><b>Auf ".PROJECTNAME." wird jede Whitelist in unseren Teamspeak Server abgehalten.</span></b><br />
							</div>
						</div>
					</div>
				</div>
				<br />				
                </p>
              </div>
            </div>
          </div>
		  <div class='col-md-8'>
            <div class='card card-user'>
              <div class='image'>
                <img src='themes/destiny-life/assets/img/bg5.jpg' alt='...'>
              </div>
              <div class='card-body'>
                <div class='author'>
                  <a href='#'>
                    <img class='avatar border-gray' src='themes/destiny-life/assets/img/mike.jpg' alt='...'>
                    <h5 class='title'>";
						$sql = "SELECT username FROM accounts WHERE id = ".$_COOKIE["secure"]."";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo " " . $row["username"]. "";
							}
						}
echo "						
					</h5>
                  </a>
                </div>
                <p class='description text-center'>";
				$sql = "SELECT username, socialClub, email, isWhitelisted, isBanned, isTeam, createdAt FROM accounts WHERE id = ".$_COOKIE["secure"]."";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "
								Spieler Nummer: ".$_COOKIE["secure"]." <br> 
								Social Club: " . $row["socialClub"]. " <br>
								E-Mail: " . $row["email"]. "<br>
								Banned: " . $row["isBanned"]. "<br>
								Team Member: " . $row["isTeam"]. "<br>
								Whitelisted: " . $row["isWhitelisted"]. "<br>
								Registrierungsdatum: " . $row["createdAt"]. "";
					}
				}
							
echo "
                </p>
              </div>
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