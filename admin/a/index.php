
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include '../../config/constants.php';?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include 'meta.php'?>
<title>Administrative Portal | <?php echo $thename;?></title>
</head>
<body>
   
<?php include 'header.php'?>
<?php  include 'alert.php'?>
<?php include 'side-bar.php'?>


<div class="content-div">
    <div class="page-title-div dashbord-title animated fadeInDown animated animated">
        <div class="div-in">
            <div class="title-side-div">
                <span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span>
                <div class="user-name" >Hi, <span id="login_user_fullname"></span></div>
            </div>  
        </div>
    </div>
   
    <div id="page-content">
        <script>_get_page('dashboard')</script>	
    </div>

      
    <div class="side-div-right">
        <div class="inner-right">

            <div class="alert-dashboard-div animated ZoomIn">
                <div class="alert-dashboard-title"><i class="bi-bell"></i> Recent Activities <span class="right">See All</span></div>
		
                    <div class="fetch animated fadeIn" id="fetch_dashboard_alert">
                        <script> _fetch_dashboard_alert();</script>
                    </div>
                <!-- <div class="system-alert dashboard-system-alert" id="<?php //echo $alert_id; ?>" onclick="_read_alert('<?php //echo $alert_id; ?>')">
                    <div class="alert-name"><i class="bi-person"></i> Afolabi Taiwo <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                    <div class="alert-text">Success Alert: EMMANUEL SAMUEL profile was updated successfully...</div>
                    <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                </div> -->

            </div>
        </div>
    </div>
      
</div>
<script type="text/javascript" src="js/scrollBar.js"></script>
<script type="text/javascript">$(".sb-container").scrollBox();</script>
  


</body>
</html>
