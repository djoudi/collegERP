<?php

/**
 * teacher_fields filter form base class.
 *
 * @package    ubeo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class Baseteacher_fieldsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'teacher_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('teacher'), 'add_empty' => true)),
      'field_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fields'), 'add_empty' => true)),
      'value'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'teacher_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('teacher'), 'column' => 'id')),
      'field_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('fields'), 'column' => 'id')),
      'value'      => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('teacher_fields_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'teacher_fields';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'teacher_id' => 'ForeignKey',
      'field_id'   => 'ForeignKey',
      'value'      => 'Text',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
