<?php

/**
 * student_form_fields module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage student_form_fields
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseStudent_form_fieldsGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'student_form_fields' : 'student_form_fields_'.$action;
  }
}
