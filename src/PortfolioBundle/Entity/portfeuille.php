<?php

namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * portfeuille
 *
 * @ORM\Table(name="portfeuille")
 * @ORM\Entity(repositoryClass="PortfolioBundle\Repository\portfeuilleRepository")
 */
class portfeuille
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
     * @ORM\Column(name="FullName", type="string", length=255)
     */
    private $fullName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="BirthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Education1", type="string", length=255)
     */
    private $education1;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip1", type="string", length=255)
     */
    private $descrip1;

    /**
     * @var string
     *
     * @ORM\Column(name="Education2", type="string", length=255, nullable=true)
     */
    private $education2;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrp2", type="string", length=255, nullable=true)
     */
    private $descrp2;

    /**
     * @var string
     *
     * @ORM\Column(name="education3", type="string", length=255, nullable=true)
     */
    private $education3;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrp3", type="string", length=255, nullable=true)
     */
    private $descrp3;

    /**
     * @var string
     *
     * @ORM\Column(name="WorkExperience1", type="string", length=255)
     */
    private $workExperience1;

    /**
     * @var string
     *
     * @ORM\Column(name="descrp4", type="string", length=255)
     */
    private $descrp4;

    /**
     * @var string
     *
     * @ORM\Column(name="WorkExperience2", type="string", length=255, nullable=true)
     */
    private $workExperience2;

    /**
     * @var string
     *
     * @ORM\Column(name="descrip5", type="string", length=255, nullable=true)
     */
    private $descrip5;

    /**
     * @var string
     *
     * @ORM\Column(name="WorkExperience3", type="string", length=255, nullable=true)
     */
    private $workExperience3;

    /**
     * @var string
     *
     * @ORM\Column(name="Descrip6", type="string", length=255)
     */
    private $descrip6;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Skill1", type="string", length=255)
     */
    private $skill1;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage1", type="integer")
     */
    private $pourcentage1;

    /**
     * @var string
     *
     * @ORM\Column(name="skill2", type="string", length=255)
     */
    private $skill2;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcent2", type="integer")
     */
    private $pourcent2;

    /**
     * @var string
     *
     * @ORM\Column(name="skill3", type="string", length=255)
     */
    private $skill3;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcent3", type="string", length=255)
     */
    private $pourcent3;

    /**
     * @var string
     *
     * @ORM\Column(name="skill4", type="string", length=255, nullable=true)
     */
    private $skill4;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcent", type="integer")
     */
    private $pourcent;

    /**
     * @var string
     *
     * @ORM\Column(name="skill5", type="string", length=255, nullable=true)
     */
    private $skill5;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcent5", type="integer", nullable=true)
     */
    private $pourcent5;

    /**
     * @var string
     *
     * @ORM\Column(name="interest1", type="string", length=255)
     */
    private $interest1;

    /**
     * @var string
     *
     * @ORM\Column(name="descript1", type="string", length=255)
     */
    private $descript1;

    /**
     * @var string
     *
     * @ORM\Column(name="interest2", type="string", length=255, nullable=true)
     */
    private $interest2;

    /**
     * @var string
     *
     * @ORM\Column(name="descript2", type="string", length=255)
     */
    private $descript2;


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
     * Set fullName
     *
     * @param string $fullName
     *
     * @return portfeuille
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return portfeuille
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return portfeuille
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set education1
     *
     * @param string $education1
     *
     * @return portfeuille
     */
    public function setEducation1($education1)
    {
        $this->education1 = $education1;

        return $this;
    }

    /**
     * Get education1
     *
     * @return string
     */
    public function getEducation1()
    {
        return $this->education1;
    }

    /**
     * Set descrip1
     *
     * @param string $descrip1
     *
     * @return portfeuille
     */
    public function setDescrip1($descrip1)
    {
        $this->descrip1 = $descrip1;

        return $this;
    }

    /**
     * Get descrip1
     *
     * @return string
     */
    public function getDescrip1()
    {
        return $this->descrip1;
    }

    /**
     * Set education2
     *
     * @param string $education2
     *
     * @return portfeuille
     */
    public function setEducation2($education2)
    {
        $this->education2 = $education2;

        return $this;
    }

    /**
     * Get education2
     *
     * @return string
     */
    public function getEducation2()
    {
        return $this->education2;
    }

    /**
     * Set descrp2
     *
     * @param string $descrp2
     *
     * @return portfeuille
     */
    public function setDescrp2($descrp2)
    {
        $this->descrp2 = $descrp2;

        return $this;
    }

    /**
     * Get descrp2
     *
     * @return string
     */
    public function getDescrp2()
    {
        return $this->descrp2;
    }

    /**
     * Set education3
     *
     * @param string $education3
     *
     * @return portfeuille
     */
    public function setEducation3($education3)
    {
        $this->education3 = $education3;

        return $this;
    }

    /**
     * Get education3
     *
     * @return string
     */
    public function getEducation3()
    {
        return $this->education3;
    }

    /**
     * Set descrp3
     *
     * @param string $descrp3
     *
     * @return portfeuille
     */
    public function setDescrp3($descrp3)
    {
        $this->descrp3 = $descrp3;

        return $this;
    }

    /**
     * Get descrp3
     *
     * @return string
     */
    public function getDescrp3()
    {
        return $this->descrp3;
    }

    /**
     * Set workExperience1
     *
     * @param string $workExperience1
     *
     * @return portfeuille
     */
    public function setWorkExperience1($workExperience1)
    {
        $this->workExperience1 = $workExperience1;

        return $this;
    }

    /**
     * Get workExperience1
     *
     * @return string
     */
    public function getWorkExperience1()
    {
        return $this->workExperience1;
    }

    /**
     * Set descrp4
     *
     * @param string $descrp4
     *
     * @return portfeuille
     */
    public function setDescrp4($descrp4)
    {
        $this->descrp4 = $descrp4;

        return $this;
    }

    /**
     * Get descrp4
     *
     * @return string
     */
    public function getDescrp4()
    {
        return $this->descrp4;
    }

    /**
     * Set workExperience2
     *
     * @param string $workExperience2
     *
     * @return portfeuille
     */
    public function setWorkExperience2($workExperience2)
    {
        $this->workExperience2 = $workExperience2;

        return $this;
    }

    /**
     * Get workExperience2
     *
     * @return string
     */
    public function getWorkExperience2()
    {
        return $this->workExperience2;
    }

    /**
     * Set descrip5
     *
     * @param string $descrip5
     *
     * @return portfeuille
     */
    public function setDescrip5($descrip5)
    {
        $this->descrip5 = $descrip5;

        return $this;
    }

    /**
     * Get descrip5
     *
     * @return string
     */
    public function getDescrip5()
    {
        return $this->descrip5;
    }

    /**
     * Set workExperience3
     *
     * @param string $workExperience3
     *
     * @return portfeuille
     */
    public function setWorkExperience3($workExperience3)
    {
        $this->workExperience3 = $workExperience3;

        return $this;
    }

    /**
     * Get workExperience3
     *
     * @return string
     */
    public function getWorkExperience3()
    {
        return $this->workExperience3;
    }

    /**
     * Set descrip6
     *
     * @param string $descrip6
     *
     * @return portfeuille
     */
    public function setDescrip6($descrip6)
    {
        $this->descrip6 = $descrip6;

        return $this;
    }

    /**
     * Get descrip6
     *
     * @return string
     */
    public function getDescrip6()
    {
        return $this->descrip6;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return portfeuille
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set skill1
     *
     * @param string $skill1
     *
     * @return portfeuille
     */
    public function setSkill1($skill1)
    {
        $this->skill1 = $skill1;

        return $this;
    }

    /**
     * Get skill1
     *
     * @return string
     */
    public function getSkill1()
    {
        return $this->skill1;
    }

    /**
     * Set pourcentage1
     *
     * @param integer $pourcentage1
     *
     * @return portfeuille
     */
    public function setPourcentage1($pourcentage1)
    {
        $this->pourcentage1 = $pourcentage1;

        return $this;
    }

    /**
     * Get pourcentage1
     *
     * @return int
     */
    public function getPourcentage1()
    {
        return $this->pourcentage1;
    }

    /**
     * Set skill2
     *
     * @param string $skill2
     *
     * @return portfeuille
     */
    public function setSkill2($skill2)
    {
        $this->skill2 = $skill2;

        return $this;
    }

    /**
     * Get skill2
     *
     * @return string
     */
    public function getSkill2()
    {
        return $this->skill2;
    }

    /**
     * Set pourcent2
     *
     * @param integer $pourcent2
     *
     * @return portfeuille
     */
    public function setPourcent2($pourcent2)
    {
        $this->pourcent2 = $pourcent2;

        return $this;
    }

    /**
     * Get pourcent2
     *
     * @return int
     */
    public function getPourcent2()
    {
        return $this->pourcent2;
    }

    /**
     * Set skill3
     *
     * @param string $skill3
     *
     * @return portfeuille
     */
    public function setSkill3($skill3)
    {
        $this->skill3 = $skill3;

        return $this;
    }

    /**
     * Get skill3
     *
     * @return string
     */
    public function getSkill3()
    {
        return $this->skill3;
    }

    /**
     * Set pourcent3
     *
     * @param string $pourcent3
     *
     * @return portfeuille
     */
    public function setPourcent3($pourcent3)
    {
        $this->pourcent3 = $pourcent3;

        return $this;
    }

    /**
     * Get pourcent3
     *
     * @return string
     */
    public function getPourcent3()
    {
        return $this->pourcent3;
    }

    /**
     * Set skill4
     *
     * @param string $skill4
     *
     * @return portfeuille
     */
    public function setSkill4($skill4)
    {
        $this->skill4 = $skill4;

        return $this;
    }

    /**
     * Get skill4
     *
     * @return string
     */
    public function getSkill4()
    {
        return $this->skill4;
    }

    /**
     * Set pourcent
     *
     * @param integer $pourcent
     *
     * @return portfeuille
     */
    public function setPourcent($pourcent)
    {
        $this->pourcent = $pourcent;

        return $this;
    }

    /**
     * Get pourcent
     *
     * @return int
     */
    public function getPourcent()
    {
        return $this->pourcent;
    }

    /**
     * Set skill5
     *
     * @param string $skill5
     *
     * @return portfeuille
     */
    public function setSkill5($skill5)
    {
        $this->skill5 = $skill5;

        return $this;
    }

    /**
     * Get skill5
     *
     * @return string
     */
    public function getSkill5()
    {
        return $this->skill5;
    }

    /**
     * Set pourcent5
     *
     * @param integer $pourcent5
     *
     * @return portfeuille
     */
    public function setPourcent5($pourcent5)
    {
        $this->pourcent5 = $pourcent5;

        return $this;
    }

    /**
     * Get pourcent5
     *
     * @return int
     */
    public function getPourcent5()
    {
        return $this->pourcent5;
    }

    /**
     * Set interest1
     *
     * @param string $interest1
     *
     * @return portfeuille
     */
    public function setInterest1($interest1)
    {
        $this->interest1 = $interest1;

        return $this;
    }

    /**
     * Get interest1
     *
     * @return string
     */
    public function getInterest1()
    {
        return $this->interest1;
    }

    /**
     * Set descript1
     *
     * @param string $descript1
     *
     * @return portfeuille
     */
    public function setDescript1($descript1)
    {
        $this->descript1 = $descript1;

        return $this;
    }

    /**
     * Get descript1
     *
     * @return string
     */
    public function getDescript1()
    {
        return $this->descript1;
    }

    /**
     * Set interest2
     *
     * @param string $interest2
     *
     * @return portfeuille
     */
    public function setInterest2($interest2)
    {
        $this->interest2 = $interest2;

        return $this;
    }

    /**
     * Get interest2
     *
     * @return string
     */
    public function getInterest2()
    {
        return $this->interest2;
    }

    /**
     * Set descript2
     *
     * @param string $descript2
     *
     * @return portfeuille
     */
    public function setDescript2($descript2)
    {
        $this->descript2 = $descript2;

        return $this;
    }

    /**
     * Get descript2
     *
     * @return string
     */
    public function getDescript2()
    {
        return $this->descript2;
    }

}

