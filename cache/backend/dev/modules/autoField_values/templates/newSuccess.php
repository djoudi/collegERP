<?php use_helper('I18N', 'Date') ?>
<?php include_partial('field_values/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Field values', array(), 'messages') ?></h1>

  <?php include_partial('field_values/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('field_values/form_header', array('field_values' => $field_values, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('field_values/form', array('field_values' => $field_values, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('field_values/form_footer', array('field_values' => $field_values, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
