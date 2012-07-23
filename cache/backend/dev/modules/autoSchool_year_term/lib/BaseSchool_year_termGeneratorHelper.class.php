<?php

/**
 * school_year_term module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage school_year_term
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSchool_year_termGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'school_year_term' : 'school_year_term_'.$action;
  }
}
