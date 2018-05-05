<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ondertitel
 * @ORM\Table(
 *     name="ondertitels",uniqueConstraints={
 *     @ORM\UniqueConstraint(name="ondertitels_idx", columns={"bestand","taal","soort"})
 *     })
 *  * @UniqueEntity(
 *     fields={"bestand","taal","soort"},
 *     errorPath="/",
 *     message="Deze ondertitel bestaat al"
 * )
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OndertitelRepository")
 */
class Ondertitel
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bestand")
     * @ORM\JoinColumn(name="bestand", referencedColumnName="id")
     */
    private $bestand;

    /**
     * @var string
     *
     * @ORM\Column(name="taal", type="string", length=2)
     */
    private $taal;

    /**
     * @var string
     *
     * @ORM\Column(name="soort", type="string", length=3, nullable=true)
     */
    private $soort;


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
     * Set bestand
     *
     * @param integer $bestand
     *
     * @return Ondertitel
     */
    public function setBestand($bestand)
    {
        $this->bestand = $bestand;

        return $this;
    }

    /**
     * Get bestand
     *
     * @return int
     */
    public function getBestand()
    {
        return $this->bestand;
    }

    /**
     * Set taal
     *
     * @param string $taal
     *
     * @return Ondertitel
     */
    public function setTaal($taal)
    {
        $this->taal = $taal;

        return $this;
    }

    /**
     * Get taal
     *
     * @return string
     */
    public function getTaal()
    {
        return $this->taal;
    }

    /**
     * Set soort
     *
     * @param string $soort
     *
     * @return Ondertitel
     */
    public function setSoort($soort)
    {
        $this->soort = $soort;

        return $this;
    }

    /**
     * Get soort
     *
     * @return string
     */
    public function getSoort()
    {
        return $this->soort;
    }
}

