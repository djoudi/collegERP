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

        $subForm = new sfForm();
        $student_fields;
        for ($i = 0; $i < 2; $i++) {
            $productPhoto = new ProductPhoto();
            $productPhoto->Product = $this->getObject();

            $form = new ProductPhotoForm($productPhoto);

            $subForm->embedForm($i, $form);
        }
        $this->embedForm('student_fields', $subForm);
    }

}
