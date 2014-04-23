<?php
/**
 * namespace de localizacao do nosso controller
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
 
    /**
     * action novo
     * @return \Zend\View\Model\ViewModel
     */
    public function novoAction()
    {
        return new ViewModel();
    }
}