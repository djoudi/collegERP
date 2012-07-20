<?php

/**
 * field_values form.
 *
 * @package    ubeo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class field_valuesForm extends Basefield_valuesForm {

    public function configure() {
        unset($this['created_at']);
        unset($this['updated_at']);
    }

}
