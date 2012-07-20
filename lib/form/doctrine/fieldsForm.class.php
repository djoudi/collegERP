<?php

/**
 * fields form.
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fieldsForm extends BasefieldsForm {

    public function configure() {
        unset($this['created_at']);
        unset($this['updated_at']);
        $this->widgetSchema['fieldtype'] = new sfWidgetFormChoice(array('choices' => array('textbox' => 'Text Box',
                        'textarea' => 'Text Area',
                        'select' => 'Select/Dropdown',
                        'checkbox' => 'Check Box',
                        'radiobox' => 'Radio Box',
                        'file' => 'File'
                        )));
        $this->widgetSchema['isNum'] = new sfWidgetFormChoice(array('choices' => array('' => 'Number Field'), 'expanded' => true, 'multiple' => true));
        $this->widgetSchema['isReq'] = new sfWidgetFormChoice(array('choices' => array('' => 'Required Field'), 'expanded' => true, 'multiple' => true));
        $this->validatorSchema['isNum'] = new sfValidatorBoolean(array(
                    'required' => false,
                    'true_values' => array(true),
                    'false_values' => array(false)
                ));
        $this->validatorSchema['isReq'] = new sfValidatorBoolean(array(
                    'required' => false,
                    'true_values' => array(true),
                    'false_values' => array(false)
                ));
    }

}
