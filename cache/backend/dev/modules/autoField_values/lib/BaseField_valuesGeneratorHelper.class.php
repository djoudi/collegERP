<?php

/**
 * field_values module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage field_values
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseField_valuesGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'field_values' : 'field_values_'.$action;
  }
}
