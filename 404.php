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
                <p class='category'>User Control Panel | 404</p>
              </div>
              <div class='card-body'>			  
		<div class='row'>			
			<div class='col-sm-8'>
				<b>Ressource not found...</b>
			</div>				
		</div>										
              </div>
            </div>
          </div>
        </div>
      </div>";
	  
site_footer();
?>