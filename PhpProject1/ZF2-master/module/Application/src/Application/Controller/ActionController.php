<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * classe pai de todos os controllers
 */
class ActionController extends AbstractActionController
{
    /**
     * retorna a instancia de um serviço
     * @param string $serviceName nome do serviço
     * @return serviço
     */
    protected function getService($serviceName)
    {
        return $this->getServiceLocator()->get($serviceName);
    }
}