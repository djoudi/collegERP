<?php

/**
 * lesson form base class.
 *
 * @method lesson getObject() Returns the current form's model object
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaselessonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'lesson_code' => new sfWidgetFormInputText(),
      'prev_lesson' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('lesson'), 'add_empty' => true)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'lesson_code' => new sfValidatorString(array('max_length' => 255)),
      'prev_lesson' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('lesson'), 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('lesson[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'lesson';
  }

}
