<div class="success-div animated fadeInRight" id="success-div">
    <div><i class="bi-check-all"></i></div> 
    PASSWORD RESET SUCCESSFUL!<br /> 
    <span>Check your email to confirm.</span>
</div>


<div class="success-div animated fadeInRight" id="not-success-div">
    <div><i class="bi-x-circle"></i></div> 
    INVALID LOGIN PARAMETERS!<br /> 
    <span>Please check the login detail.</span>
</div>


<div class="success-div animated fadeInRight" id="warning-div">
    <div><i class="bi-exclamation-circle"></i></div> 
    USER ERROR!<br /> 
    <span>Fill The Fields To Continue</span>
</div>

<div id="get-more-div"></div>
<div id="get-more-div-secondary"></div>












<div class="sidenavdiv">
    <div class="sidenavdiv-in" onclick="_close_side_nav()"></div>
</div>


<div class="live-chat-back-div"> 

    <a href="tel:+2348127000262" title="Call Customer Care">
        <div class="chat-div">
            <div class="icon-div" style="background:#008040;"><i class="bi-telephone-outbound"></i></div>
            <div class="text">+234-812-700-0262</div>
          <br clear="all" />
        </div>
    </a>
    <a href="https://api.whatsapp.com/send?text=Hello Leaders Tutors &phone=+2348127000262" target="_blank" title="Whatsapp">
        <div class="chat-div">
            <div class="icon-div" style="background:#25D366;"><i class="bi-whatsapp"></i></div>
            <div class="text">+234-812-700-0262</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://web.facebook.com/" target="_blank" title="Facebook">
        <div class="chat-div">
            <div class="icon-div" style="background:#2980b9;"><i class="bi-facebook"></i></div>
            <div class="text">Facebook Page </div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://twitter.com/" target="_blank" title="Twitter">
        <div class="chat-div">
            <div class="icon-div" style="background:#3498db;"><i class="bi-twitter"></i></div>
            <div class="text">Twitter Page</div>
          <br clear="all" />
        </div>
    </a>

    <a href="https://www.instagram.com/" target="_blank" title="Instagram">
        <div class="chat-div">
            <div class="icon-div" style="background-image: linear-gradient(to right,#03F, #F0F);"><i class="bi-instagram"></i></div>
            <div class="text">Instagram Page</div>
          <br clear="all" />
        </div>
    </a>
  
</div>


<div class="index-menu-back-div"> 

   <div class="div">
    <a href="<?php echo $website_url;?>" title="Home Page">
      <li <?php if ($page=='index.php') {?> id="active-li"<?php }?>><i class="bi-house"></i> Home Page</li></a>
    </div>
        
    <div class="div">
    <li onclick="_open_li('services')"><i class="bi-activity"></i> Other Links <i class="bi-plus" id="side-expand"></i></li>
    <div class="sub-li" id="services-sub-li">
                <li>Sub Links</li></a>
    </div>
    </div>
    
    <div class="menu-title" style="height:100px;"> &nbsp;</div>
</div>  

