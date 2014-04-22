<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends ActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }
    
    /**
     * busca
     */
    public function buscaAction()
    {
        $id = $this->params()->fromQuery('id');
        $descr = $this->params()->fromQuery('descr');
        if(!$id) {
            throw new \Exception('Id é obrigatorio!');
        }
        $em = $this->getService('Doctrine\ORM\EntityManager');
        $result = $em->getRepository('Application\Model\TipoAvaliacoes')->findBy(array(
            'tpaval_id' => $id,
            'descr' => $descr
        ));
        return new ViewModel(array(
            'result' => $result
        ));
    }

    /**
     * inclusão e alteração
     */
    public function includeAction()
    {
        
    }
    
    /**
     * deletar
     */
    public function deleteAction()
    {
        
    }
    
}
