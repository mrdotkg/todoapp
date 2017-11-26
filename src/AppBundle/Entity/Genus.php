<?php
/**
 * Created by PhpStorm.
 * User: kumar
 * Date: 11/25/17
 * Time: 10:03 PM
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GenusRepository")
 * @ORM\Table(name="genus")
 */
class Genus
{
    public function __construct()
    {
        $this->notes = new ArrayCollection();
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */private $id;

    public function getUpdatedAt()
    {
        return new \DateTime('-'.rand(0, 100).' days');
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @ORM\Column(type="string")
     */private $name;

     /**
      * @ORM\OneToMany(targetEntity="GenusNote", mappedBy="genus")
      * @ORM\OrderBy({"createdAt" = "DESC"})
      */
    private $notes;


    /**
     * @ORM\Column(type="string")
     */
    private $subFamily;
    /**
     * @ORM\Column(type="integer")
     */
    private $speciesCount;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $funFact;

    /**
     * @return mixed
     */
    public function getSubFamily()
    {
        return $this->subFamily;
    }

    /**
     * @param mixed $subFamily
     */
    public function setSubFamily($subFamily)
    {
        $this->subFamily = $subFamily;
    }

    /**
     * @return mixed
     */
    public function getSpeciesCount()
    {
        return $this->speciesCount;
    }

    /**
     * @param mixed $speciesCount
     */
    public function setSpeciesCount($speciesCount)
    {
        $this->speciesCount = $speciesCount;
    }

    /**
     * @return mixed
     */
    public function getFunFact()
    {
        return $this->funFact;
    }

    /**
     * @param mixed $funFact
     */
    public function setFunFact($funFact)
    {
        $this->funFact = $funFact;
    }

    /**
     * @ORM\Column(type="boolean")
     */
    private $isPublished = true;

    /**
     * @param mixed $isPublished
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * @return ArrayCollection|GenusNote[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

}