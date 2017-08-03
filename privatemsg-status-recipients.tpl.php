<?php 
  //each file loads it's own styles because we cant predict which file will be loaded 
  drupal_add_css(drupal_get_path('module', 'privatemsg') . '/styles/privatemsg-recipients.css');
  drupal_add_css(drupal_get_path('module', 'privatemsg_status') . '/styles/privatemsg-status.css');
?>
<div class="privatemsg-message-participants">
  <?php
    if (variable_get('privatemsg_status_user_status', FALSE)) {
      $participants = _rebuild_html_participants($participants);
    }
    print $participants;
  ?>
</div>