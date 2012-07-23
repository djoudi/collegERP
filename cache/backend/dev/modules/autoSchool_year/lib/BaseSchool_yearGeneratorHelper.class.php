<?php

/**
 * school_year module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage school_year
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSchool_yearGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'school_year' : 'school_year_'.$action;
  }
}
