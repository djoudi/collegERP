<?php

/**
 * fields filter form base class.
 *
 * @package    ubeo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasefieldsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fieldname'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fieldtype'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fieldkey'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fieldorder' => new sfWidgetFormFilterInput(),
      'isNum'      => new sfWidgetFormFilterInput(),
      'isReq'      => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fieldname'  => new sfValidatorPass(array('required' => false)),
      'fieldtype'  => new sfValidatorPass(array('required' => false)),
      'fieldkey'   => new sfValidatorPass(array('required' => false)),
      'fieldorder' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'isNum'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'isReq'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('fields_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'fields';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'fieldname'  => 'Text',
      'fieldtype'  => 'Text',
      'fieldkey'   => 'Text',
      'fieldorder' => 'Number',
      'isNum'      => 'Number',
      'isReq'      => 'Number',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
