<?php

/**
 * student form.
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class studentForm extends BasestudentForm {

    public function configure() {
        unset($this['created_at']);
        unset($this['updated_at']);

        $this->widgetSchema['thumb'] = new sfWidgetFormInputFileEditable(array(
                    'label' => 'Оюутаны зураг',
                    'file_src' => sfConfig::get('app_host') . '/uploads/students/' . $this->getObject()->getThumb(),
                    'is_image' => true,
                    'edit_mode' => !$this->isNew(),
                    'template' => '<div class="thumb">%file%<br />%input%<br />
                                    </div>',
                ));
        $this->validatorSchema['thumb'] = new sfValidatorFile(array(
                    'path' => sfConfig::get('sf_upload_dir') . "/students",
                    'required' => true,
                    'mime_types' => 'web_images'
                ));


        $subForm = new sfForm();
        $student_fields = Doctrine_Core::getTable('student_form_fields')
                ->createQuery('p')
                ->execute();
        foreach ($student_fields as $f) {
            $fields = $f->getFields();
            switch ($fields->getFieldtype()) {
                case "textbox":
                    $this->widgetSchema['field_' . $fields->getId()] = new sfWidgetFormInputText(array('label' => $fields->getFieldname()));
                    $this->validatorSchema['field_' . $fields->getId()] = new sfValidatorString(array('required' => $fields->getIsReq()));
                    break;
                case "textarea":
                    $this->widgetSchema['field_' . $fields->getId()] = new sfWidgetFormInputTextarea(array('label' => $fields->getFieldname()));
                    $this->validatorSchema['field_' . $fields->getId()] = new sfValidatorString(array('required' => $fields->getIsReq()));
                    break;
                case "checkbox":
                    $this->widgetSchema['field_' . $fields->getId()] = new sfWidgetFormChoice(array(
                                'label' => $fields->getFieldname(),
                                'choices' => $this->getFieldValues($fields->getFieldValues()),
                                'multiple' => true,
                                'expanded' => true));
                    $this->validatorSchema['field_' . $fields->getId()] = new sfValidatorBoolean(array(
                                'required' => false,
                                'true_values' => array(true),
                                'false_values' => array(false)
                            ));
                    break;
            }
        }
        $this->mergeForm(new student_angiForm());
    }

    private function getFieldValues($fv) {

        foreach ($fv as $v) {
            $ret[] = $v->getValue();
        }

        return $ret;
    }

}
