<?php

require_once dirname(__FILE__) . '/../lib/field_valuesGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/field_valuesGeneratorHelper.class.php';

/**
 * field_values actions.
 *
 * @package    ubeo
 * @subpackage field_values
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class field_valuesActions extends autoField_valuesActions {

    public function executeIndex(sfWebRequest $request) {
        // sorting
        if ($request->getParameter('sort') && $this->isValidSortColumn($request->getParameter('sort'))) {
            $this->setSort(array($request->getParameter('sort'), $request->getParameter('sort_type')));
        }

        // pager
        if ($request->getParameter('page')) {
            $this->setPage($request->getParameter('page'));
        }
        $pager = $this->configuration->getPager('fields');

        $pager->setQuery($this->buildQuery($request->getParameter('field', null)));
        $pager->setPage($this->getPage());
        $pager->init();
        $this->pager = $pager;
        $this->sort = $this->getSort();
    }

    protected function buildQuery($field = null) {

        $tableMethod = $this->configuration->getTableMethod();
        if ($field != NULL)
            $query = Doctrine_Core::getTable('field_values')
                    ->createQuery('a')
                    ->andWhere('a.field_id=?', $field);
        else
            $query = Doctrine_Core::getTable('field_values')
                    ->createQuery('a');
        if ($tableMethod) {
            $query = Doctrine_Core::getTable('field_values')->$tableMethod($query);
        }

        $this->addSortQuery($query);

        $event = $this->dispatcher->filter(new sfEvent($this, 'admin.build_query'), $query);
        $query = $event->getReturnValue();

        return $query;
    }

}
