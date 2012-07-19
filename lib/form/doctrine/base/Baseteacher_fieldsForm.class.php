<?php

/**
 * teacher_fields form base class.
 *
 * @method teacher_fields getObject() Returns the current form's model object
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Baseteacher_fieldsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'teacher_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('teacher'), 'add_empty' => false)),
      'field_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fields'), 'add_empty' => false)),
      'value'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'teacher_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('teacher'))),
      'field_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fields'))),
      'value'      => new sfValidatorPass(),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('teacher_fields[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'teacher_fields';
  }

}