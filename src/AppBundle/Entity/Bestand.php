<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Bestand
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestandRepository")
 * @ORM\Table(
 *     name="bestanden",uniqueConstraints={
 *     @ORM\UniqueConstraint(name="bestanden_idx", columns={"naam","schijf","map","bestandstype"})
 *     })
 *  * @UniqueEntity(
 *     fields={"naam","schijf","map","bestandstype"},
 *     errorPath="/",
 *     message="Dit bestand bestaat al"
 * )
 *
 */
class Bestand
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
     * @ORM\Column(name="naam", type="string", length=200)
     */
    private $naam;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bestandstype")
     * @ORM\JoinColumn(name="bestandstype", referencedColumnName="naam")
     */
    private $bestandstype;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Map")
     * @ORM\JoinColumn(name="map", referencedColumnName="id")
     */
    private $map;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Schijf")
     * @ORM\JoinColumn(name="schijf", referencedColumnName="naam")
     */
    private $schijf;

    /**
     * @var int
     *
     * @ORM\Column(name="grootte", type="integer", nullable=true)
     */
    private $grootte;


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
     * Set naam
     *
     * @param string $naam
     *
     * @return Bestand
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set bestandstype
     *
     * @param string $bestandstype
     *
     * @return Bestand
     */
    public function setBestandstype($bestandstype)
    {
        $this->bestandstype = $bestandstype;

        return $this;
    }

    /**
     * Get bestandstype
     *
     * @return string
     */
    public function getBestandstype()
    {
        return $this->bestandstype;
    }

    /**
     * Set map
     *
     * @param integer $map
     *
     * @return Bestand
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return int
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set schijf
     *
     * @param string $schijf
     *
     * @return Bestand
     */
    public function setSchijf($schijf)
    {
        $this->schijf = $schijf;

        return $this;
    }

    /**
     * Get schijf
     *
     * @return string
     */
    public function getSchijf()
    {
        return $this->schijf;
    }

    /**
     * Set grootte
     *
     * @param integer $grootte
     *
     * @return Bestand
     */
    public function setGrootte($grootte)
    {
        $this->grootte = $grootte;

        return $this;
    }

    /**
     * Get grootte
     *
     * @return int
     */
    public function getGrootte()
    {
        return $this->grootte;
    }
}

