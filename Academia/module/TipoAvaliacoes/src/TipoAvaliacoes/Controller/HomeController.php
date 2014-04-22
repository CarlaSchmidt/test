<?php
/**
 * namespace de localizacao no nosso controller
 */

namespace TipoAvaliacoes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class HomeController extends AbstractActionController
{
    /**
     * action index
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {
     
        return new ViewModel();
    }
}
