<?php
   /**
    * The template for displaying the header
    *
    * Displays all of the head element and everything up until the "site-content" div.
    *
    * @package WordPress
    * @subpackage custom-theme
    * @since custom-theme 1.0
    */
   ?>
   <!DOCTYPE html>
   <html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="utf-8"/>
      <title><?php bloginfo('title');?></title>
      <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/main.css' media='all' />
      <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/iepngfix_tilebg.js'></script>
      <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery-1.2.6.min.js'></script>
      <script type="text/javascript">
         /*** 
             Simple jQuery Slideshow Script
             Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
         ***/
         
         function slideSwitch() {
             var $active = $('#slideshow DIV.active');
         
             if ($active.length == 0) $active = $('#slideshow DIVlast');
         
             // use this to pull the images in the order they appear in the markup
             var $next = $active.next().length ? $active.next()
                 : $('#slideshow DIV:first');
         
             // uncomment the 3 lines below to pull the images in random order
         
             // var $sibs  = $active.siblings();
             // var rndNum = Math.floor(Math.random() * $sibs.length );
             // var $next  = $( $sibs[ rndNum ] );
         
         
             $active.addClass('last-active');
         
             $next.css({ opacity: 0.0 })
                 .addClass('active')
                 .animate({ opacity: 1.0 }, 1000, function () {
                     $active.removeClass('active last-active');
                 });
         }
         
         $(function () {
             setInterval("slideSwitch()", 5000);
         });
         
      </script>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.min.1.7.2.js'></script>
      <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery-ui.min.js'></script>
      <script type="text/JavaScript">
         $(document).ready(function () {
             $('#scrollerContainer1').DOPThumbnailScroller({
                 'SettingsDataType': 'XML',
                 'SettingsFilePath': 'DOPThumbnailScroller/xml/settings.xml',
                 'ContentDataType': 'XML',
                 'ContentFilePath': 'DOPThumbnailScroller/xml/content.xml'
             });
         });
      </script>
      <style type="text/css">
         /*** set the width and height to match your images **/
         #slideshow
         {
         position: relative;
         }
         #slideshow DIV
         {
         position: absolute;
         top: 0;
         left: 0;
         z-index: 8;
         opacity: 0.0;
         }
         #slideshow DIV.active
         {
         z-index: 10;
         opacity: 1.0;
         }
         #slideshow DIV.last-active
         {
         z-index: 9;
         }
      </style>
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/Menu.WSG.css' media='all' />
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/common.css' media='all' />
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/telerik-ad.css' media='all' />
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/w7.css' media='all' />
      <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/w7-global.css' media='all' />
      <?php wp_head(); ?>
   </head>
   <body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
      <form method="post" action="./" id="form1">
         <div class="aspNetHidden">
            <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
            <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="" />
         </div>
         <script type="text/javascript">
            //<![CDATA[
            var theForm = document.forms['form1'];
            if (!theForm) {
                theForm = document.form1;
            }
            function __doPostBack(eventTarget, eventArgument) {
                if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
                    theForm.__EVENTTARGET.value = eventTarget;
                    theForm.__EVENTARGUMENT.value = eventArgument;
                    theForm.submit();
                }
            }
            //]]>
         </script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/radmenu.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/radmenu-r.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/radmenu-s.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/tlr.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jq-menu.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jq-easing.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/tlr-scroller.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/tlr-r.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/tlr-vs.js'></script>
         <script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/tlr-z.js'></script>
         <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
         </div>
         <script type="text/javascript">
            //<![CDATA[
            Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', [], [], [], 90, '');
            //]]>
         </script>
         <div id="topContent">
            <div id="logo">
               <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="242" height="129" alt="logo" />
            </div>
            <div id="nav">               
               <div id="RadMenu1" class="RadMenu RadMenu_WSG">
                  <?php 
                   $menu_args = array(
                    'menu'    => 'MAIN-MENU',
                    'theme_location' => 'my-menu',
                    'depth'    => 4,
                    'container'   => false,
                    'menu_class'   => 'rmHorizontal rmRootGroup',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'    => new wp_bootstrap_navwalker()
                   );
                   //wp_nav_menu($menu_args);
                  ?>
                  <ul class="rmHorizontal rmRootGroup">
                     <li class="rmItem rmFirst">
                        <a href="/" class="rmLink"><span class="rmText">Home&nbsp;</span></a>
                     </li>
                     <li class="rmItem rmSeparator">
                        <span class="rmText"></span>
                     </li>
                     <li class="rmItem ">
                        <a href="/About-Us.aspx" class="rmLink"><span class="rmText">About Us&nbsp;</span></a>
                        <div class="rmSlide">
                           <ul class="rmVertical rmGroup rmLevel1">
                              <li class="rmItem rmFirst"><a href="/About-Us/Our-Team.aspx" class="rmLink"><span class="rmText">Our Team&nbsp;</span></a></li>
                              <li class="rmItem "><a href="/About-Us/Advisory-Group.aspx" class="rmLink"><span class="rmText">Advisory Group&nbsp;</span></a></li>
                              <li class="rmItem "><a href="/About-Us/Dynamic-Advisor-Network.aspx" class="rmLink"><span class="rmText">Dynamic Advisor Network&nbsp;</span></a></li>
                              <li class="rmItem "><a href="/About-Us/Employment-Opportunities.aspx" class="rmLink"><span class="rmText">Employment Opportunities&nbsp;</span></a></li>
                              <li class="rmItem "><a href="/About-Us/WSG-In-The-News.aspx" class="rmLink"><span class="rmText">WSG In The News&nbsp;</span></a></li>
                              <li class="rmItem rmLast"><a href="/About-Us/Our-Values.aspx" class="rmLink"><span class="rmText">Our Values&nbsp;</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="rmItem rmSeparator"><span class="rmText"></span></li>
                     <li class="rmItem ">
                        <a href="/Services.aspx" class="rmLink"><span class="rmText">Services&nbsp;</span></a>
                        <div class="rmSlide">
                           <ul class="rmVertical rmGroup rmLevel1">
                              <li class="rmItem rmFirst"><a href="/Services/Personal-Financial-Planning.aspx" class="rmLink"><span class="rmText">Personal Financial Planning&nbsp;</span></a></li>
                              <li class="rmItem "><a href="/Services/Business-Owners.aspx" class="rmLink"><span class="rmText">Business Owners&nbsp;</span></a></li>
                              <li class="rmItem ">
                                 <a href="/Services/Speaking.aspx" class="rmLink"><span class="rmText">Speaking&nbsp;</span></a>
                                 <div class="rmSlide">
                                    <ul class="rmVertical rmGroup rmLevel2">
                                       <li class="rmItem rmFirst rmLast"><a href="/Speaking/Speaking-Engagements.aspx" class="rmLink"><span class="rmText">Speaking Engagements&nbsp;</span></a></li>
                                    </ul>
                                 </div>
                              </li>
                              <li class="rmItem rmLast"><a href="/Services/Services-for-Federal-Employees.aspx" class="rmLink"><span class="rmText">Services for Federal Employees&nbsp;</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="rmItem rmSeparator"><span class="rmText"></span></li>
                     <li class="rmItem "><a href="/Events/" class="rmLink"><span class="rmText">Events&nbsp;</span></a></li>
                     <li class="rmItem rmSeparator"><span class="rmText"></span></li>
                     <li class="rmItem ">
                        <a href="/Client-Center.aspx" class="rmLink"><span class="rmText">Client Center&nbsp;</span></a>
                        <div class="rmSlide">
                           <ul class="rmVertical rmGroup rmLevel1">
                              <li class="rmItem rmFirst"><a href="/Client-Center.aspx" class="rmLink" target="_blank"><span class="rmText">Client Center&nbsp;</span></a></li>
                              <li class="rmItem rmLast"><a href="/Client-Center/Client-Event-Pictures.aspx" class="rmLink"><span class="rmText">Client Event Pictures&nbsp;</span></a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="rmItem rmSeparator"><span class="rmText"></span></li>
                     <li class="rmItem "><a href="/Newsletter.aspx" class="rmLink"><span class="rmText">Newsletter&nbsp;</span></a></li>
                     <li class="rmItem rmSeparator"><span class="rmText"></span></li>
                     <li class="rmItem rmLast">
                        <a href="/Contact-Us.aspx" class="rmLink"><span class="rmText">Contact Us&nbsp;</span></a>
                        <div class="rmSlide">
                           <ul class="rmVertical rmGroup rmLevel1">
                              <li class="rmItem rmFirst rmLast"><a href="/Contact-Us/Directions.aspx" class="rmLink"><span class="rmText">Directions&nbsp;</span></a></li>
                           </ul>
                        </div>
                     </li>
                  </ul>
                  <input id="RadMenu1_ClientState" name="RadMenu1_ClientState" type="hidden" />
               </div>
            </div>
         </div>