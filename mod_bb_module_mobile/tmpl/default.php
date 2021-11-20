<?php
   /**
      * @package Joomla.Site
      * @subpackage mod_firstmodule
      * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
      * @license GNU General Public License version 2 or later; see LICENSE.txt
	  * class show   visible-phone visible-tablet visible-desktop  
	  * class show   hidden-phone hidden-tablet hidden-desktop  
   */
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$menu = $app->getMenu();
 
$txtPhone ='tel:'. $params->get('txtPhone');
$txtLine =  $params->get('txtLine'); 
$txtFacebook =  $params->get('txtFacebook'); 
$txtTwitter =  $params->get('txtTwitter'); 
  
$mylistteam = $params->get('mylistteam'); 
$txtEmail ='to:'. $params->get('txtEmail');

$class='';
if ($params->get('mobile') ==1) { 	$class .=' visible-phone ';  }else { $class .=' hidden-phone ';  }
if ($params->get('tablest') ==1){ 	$class .=' visible-tablet '; }else { $class .=' hidden-tablet '; }
if ($params->get('desktop') ==1){ 	$class .=' visible-desktop ';}else { $class .=' hidden-desktop ';}

/* 
if(strpos($txtFacebook, 'http://') !== false ||strpos($txtFacebook, 'https;//') !== false  ){
    echo "Word Found!";
} else{
   $txtFacebook ='http://'.$txtFacebook;
}
if(strpos($txtTwitter, 'http://') !== false ||strpos($txtTwitter, 'https;//') !== false   ){
  //  echo "Word Found!";
} else{
   $txtTwitter ='http://'.$txtTwitter;
}
*/

?> 
<?php if ($mylistteam ==0): ?>
	<div class="screen <?php echo $class; ?> "> 
	  <nav>
		<ul>  
			<li class="phone"    onclick="location.href='<?php echo $txtPhone ; ?>';" >
				<span  class="hidden-xs-down" >Phone</span>
			</li> 
			<li class="line"     onclick="window.open('http://line.me/ti/p/~<?php echo $txtLine; ?>', '_blank'); " >
				<span class="hidden-xs-down">@Line</span>
			</li>
			<li class="home"     onclick="location.href='.';" >
				<span  class="hidden-xs-down" >Home</span>
			</li>
			<li class="facebook"  onclick="window.open('<?php echo $txtFacebook; ?>', '_blank');" >
				<span   >Facebook</span>
			</li>  
			<li class="twitter"   onclick="window.open('<?php echo $txtTwitter; ?>', '_blank'); "   >
				<span class="hidden-xs-down"  >Twitter</span>
			</li>
			<li ><a href="http://boxs.me" title="www.boxs.me" target="_blank" >.</a></li> 
		</ul> 
	  </nav>  
	</div> 
	
<?php elseif ($mylistteam ==1): ?>
	<div class="bbx-social-button <?php echo $class; ?>" title="expand social media options">
		<i class="fas fa-share-alt" id="social-icon"></i> 
	   <!-- <i class="fa fa-bars" id="social-icon"></i>-->
		<a hidden class="bbx-social-point" href="<?php echo $txtPhone ; ?>" target="_blank" rel="nofollow" title="phone"><i class="fas fa-phone-square-alt fa-lg"></i></a>
		<a hidden class="bbx-social-point" href="<?php echo $txtEmail ; ?>" title="Email"><i class="fas fa-envelope fa-lg"></i></a> 
		<a hidden class="bbx-social-point" href="http://line.me/ti/p/~<?php echo $txtLine; ?>" target="_blank" rel="nofollow" title="LINE"><i class="fab fa-line fa-lg"></i></a>
		<a hidden class="bbx-social-point" href="<?php echo $txtTwitter; ?>" target="_blank" rel="nofollow" title="Twitter"><i class="fab fa-twitter fa-lg"></i></a>
		<a hidden class="bbx-social-point" href="<?php echo $txtFacebook; ?>" target="_blank" rel="nofollow" title="Facebook"><i class="fab fa-facebook fa-lg"></i></a>
	</div>  
	
  <?php endif; ?>