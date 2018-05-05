<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schijf
 *
 * @ORM\Table(name="schijven")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SchijfRepository")
 */
class Schijf
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
     * @ORM\Column(name="naam", type="string", length=64, unique=true)
     */
    private $naam;

    /**
     * @var int
     *
     * @ORM\Column(name="capaciteit", type="integer", nullable=true)
     */
    private $capaciteit;

    /**
     * @var int
     *
     * @ORM\Column(name="beschikbaar", type="integer", nullable=true)
     */
    private $beschikbaar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scandatum", type="date", nullable=true)
     */
    private $scandatum;


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
     * @return Schijf
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
     * Set capaciteit
     *
     * @param integer $capaciteit
     *
     * @return Schijf
     */
    public function setCapaciteit($capaciteit)
    {
        $this->capaciteit = $capaciteit;

        return $this;
    }

    /**
     * Get capaciteit
     *
     * @return int
     */
    public function getCapaciteit()
    {
        return $this->capaciteit;
    }

    /**
     * Set beschikbaar
     *
     * @param integer $beschikbaar
     *
     * @return Schijf
     */
    public function setBeschikbaar($beschikbaar)
    {
        $this->beschikbaar = $beschikbaar;

        return $this;
    }

    /**
     * Get beschikbaar
     *
     * @return int
     */
    public function getBeschikbaar()
    {
        return $this->beschikbaar;
    }

    /**
     * Set scandatum
     *
     * @param \DateTime $scandatum
     *
     * @return Schijf
     */
    public function setScandatum($scandatum)
    {
        $this->scandatum = $scandatum;

        return $this;
    }

    /**
     * Get scandatum
     *
     * @return \DateTime
     */
    public function getScandatum()
    {
        return $this->scandatum;
    }
}

