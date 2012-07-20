<?php use_helper('I18N', 'Date') ?>
<?php include_partial('fields/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Fields', array(), 'messages') ?></h1>

  <?php include_partial('fields/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('fields/form_header', array('fields' => $fields, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('fields/form', array('fields' => $fields, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('fields/form_footer', array('fields' => $fields, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
