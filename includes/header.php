<?php include("includes/connection.php");
      include("includes/session_check.php");

      
      //Get file name
      $currentFile = $_SERVER["SCRIPT_NAME"];
      $parts = Explode('/', $currentFile);
      $currentFile = $parts[count($parts) - 1];  
     
     //$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>	
			<ul class="nav navbar-nav navbar-right">	
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
					<?php if(PROFILE_IMG!=''){?>
                            <img src="imagess/<?php echo PROFILE_IMG;?>"alt=""/>
                    <?php } else{?>
						<img src="assets/images/placeholder.jpg" alt="">
						<?php }?>
						<span><?php echo PROFILE_NAME;?></span>
						<i class="caret"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="profile.php"><i class="icon-user-plus"></i>My profile</a></li>				
						<li class="divider"></li>
						<li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>