<?php use_helper('I18N', 'Date') ?>
<?php include_partial('student/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Student', array(), 'messages') ?></h1>

  <?php include_partial('student/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('student/form_header', array('student' => $student, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('student/form', array('student' => $student, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('student/form_footer', array('student' => $student, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
