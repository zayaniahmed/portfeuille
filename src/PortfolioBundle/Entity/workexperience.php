<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * workexperience
 *
 * @ORM\Table(name="workexperience")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\workexperienceRepository")
 */
class workexperience
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="expeiences", type="string", length=255)
     */
    private $expeiences;

    /**
     * @var string
     *
     * @ORM\Column(name="descrpiton", type="string", length=255)
     */
    private $descrpiton;

    /**
     * @var \DateTime

     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime

     * @ORM\Column(name="date_fin", type="date")
     * @Assert\GreaterThan(propertyPath="dateDebut")
     */
    private $dateFin;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set expeiences
     *
     * @param string $expeiences
     *
     * @return workexperience
     */
    public function setExpeiences($expeiences)
    {
        $this->expeiences = $expeiences;

        return $this;
    }

    /**
     * Get expeiences
     *
     * @return string
     */
    public function getExpeiences()
    {
        return $this->expeiences;
    }

    /**
     * Set descrpiton
     *
     * @param string $descrpiton
     *
     * @return workexperience
     */
    public function setDescrpiton($descrpiton)
    {
        $this->descrpiton = $descrpiton;

        return $this;
    }

    /**
     * Get descrpiton
     *
     * @return string
     */
    public function getDescrpiton()
    {
        return $this->descrpiton;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return workexperience
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return workexperience
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }
}

