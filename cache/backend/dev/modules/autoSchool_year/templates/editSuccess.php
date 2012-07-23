<?php use_helper('I18N', 'Date') ?>
<?php include_partial('school_year/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit School year', array(), 'messages') ?></h1>

  <?php include_partial('school_year/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('school_year/form_header', array('school_year' => $school_year, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('school_year/form', array('school_year' => $school_year, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('school_year/form_footer', array('school_year' => $school_year, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
