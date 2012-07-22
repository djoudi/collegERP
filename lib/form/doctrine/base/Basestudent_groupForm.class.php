<?php

/**
 * student_group form base class.
 *
 * @method student_group getObject() Returns the current form's model object
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basestudent_groupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'student_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('student'), 'add_empty' => false)),
      'school_year_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('school_year'), 'add_empty' => false)),
      'group_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('st_group'), 'add_empty' => false)),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'student_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('student'))),
      'school_year_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('school_year'))),
      'group_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('st_group'))),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('student_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'student_group';
  }

}
