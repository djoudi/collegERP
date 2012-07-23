<?php use_helper('I18N', 'Date') ?>
<?php include_partial('student_form_fields/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Student form fields', array(), 'messages') ?></h1>

  <?php include_partial('student_form_fields/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('student_form_fields/form_header', array('student_form_fields' => $student_form_fields, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('student_form_fields/form', array('student_form_fields' => $student_form_fields, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('student_form_fields/form_footer', array('student_form_fields' => $student_form_fields, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
