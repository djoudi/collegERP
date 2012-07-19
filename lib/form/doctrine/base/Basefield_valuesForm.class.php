<?php

/**
 * field_values form base class.
 *
 * @method field_values getObject() Returns the current form's model object
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class Basefield_valuesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'value'           => new sfWidgetFormInputText(),
      'field_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('fields'), 'add_empty' => false)),
      'fielvaluedorder' => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
      'updated_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'value'           => new sfValidatorString(array('max_length' => 255)),
      'field_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('fields'))),
      'fielvaluedorder' => new sfValidatorInteger(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(),
      'updated_at'      => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('field_values[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'field_values';
  }

}
