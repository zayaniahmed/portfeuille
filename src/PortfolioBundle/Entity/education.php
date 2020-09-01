<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * education
 *
 * @ORM\Table(name="education")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\educationRepository")
 */
class education
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
     * @ORM\Column(name="typeofeducaion", type="string", length=255)
     */
    private $typeofeducaion;

    /**
     * @var string
     *
     * @ORM\Column(name="descrption", type="string", length=255)
     */
    private $descrption;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb", type="date")
     */
    private $dateDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     * @Assert\GreaterThan(propertyPath="date_deb")
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
     * Set typeofeducaion
     *
     * @param string $typeofeducaion
     *
     * @return education
     */
    public function setTypeofeducaion($typeofeducaion)
    {
        $this->typeofeducaion = $typeofeducaion;

        return $this;
    }

    /**
     * Get typeofeducaion
     *
     * @return string
     */
    public function getTypeofeducaion()
    {
        return $this->typeofeducaion;
    }

    /**
     * Set descrption
     *
     * @param string $descrption
     *
     * @return education
     */
    public function setDescrption($descrption)
    {
        $this->descrption = $descrption;

        return $this;
    }

    /**
     * Get descrption
     *
     * @return string
     */
    public function getDescrption()
    {
        return $this->descrption;
    }

    /**
     * Set dateDeb
     *
     * @param \DateTime $dateDeb
     *
     * @return education
     */
    public function setDateDeb($dateDeb)
    {
        $this->dateDeb = $dateDeb;

        return $this;
    }

    /**
     * Get dateDeb
     *
     * @return \DateTime
     */
    public function getDateDeb()
    {
        return $this->dateDeb;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return education
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

