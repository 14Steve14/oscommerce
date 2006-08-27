<?php
/*
  $Id: $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2006 osCommerce

  Released under the GNU General Public License
*/

  if ($osC_NavigationHistory->hasSnapshot()) {
    $origin_href = $osC_NavigationHistory->getSnapshotURL();
    $osC_NavigationHistory->resetSnapshot();
  } else {
    $origin_href = osc_href_link(FILENAME_DEFAULT);
  }
?>

<h1><?php echo $osC_Template->getPageTitle(); ?></h1>

<div>
  <div style="float: left;"><?php echo osc_image(DIR_WS_IMAGES . 'table_background_man_on_board.gif', $osC_Template->getPageTitle()); ?></div>

  <div style="padding-top: 30px;">
    <p><?php echo sprintf($osC_Language->get('success_account_created'), osc_href_link(FILENAME_INFO, 'contact')); ?></p>
  </div>
</div>

<div class="submitFormButtons" style="text-align: right;">
  <?php echo osc_link_object($origin_href, osc_draw_image_button('button_continue.gif', $osC_Language->get('button_continue'))); ?>
</div>