<?php use_helper('I18N', 'Date') ?>
<?php include_partial('school_year_term/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit School year term', array(), 'messages') ?></h1>

  <?php include_partial('school_year_term/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('school_year_term/form_header', array('school_year_term' => $school_year_term, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('school_year_term/form', array('school_year_term' => $school_year_term, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('school_year_term/form_footer', array('school_year_term' => $school_year_term, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
