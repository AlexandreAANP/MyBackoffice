<?php

namespace App\Entity;

use App\Repository\PagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PagesRepository::class)
 */
class Pages
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
    * @ORM\Column(type="text")
    */
    private $name;

    /**
    * @ORM\Column(type="integer")
    */

    private $object_association;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getObjectAssociation(){
        return $this->object_association;
    }
    public function setName($name){
        $this->name = $name;
        return $this->name;
    }
    public function setObjectAssociation($objectAssociation){
        $this->object_association = $objectAssociation;
        return $this->object_association;
    }

}
