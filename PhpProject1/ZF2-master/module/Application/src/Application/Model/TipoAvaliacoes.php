<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_avaliacoes")
 */
class TipoAvaliacoes extends AbstractModel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $tpaval_id;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $cd;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $descr;
    
}

?>

