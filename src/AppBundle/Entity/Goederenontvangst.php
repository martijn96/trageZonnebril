<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goederenontvangst
 *
 * @ORM\Table(name="goederenontvangst")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoederenontvangstRepository")
 */
class Goederenontvangst
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
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date")
     */
    private $datum;

    /**
     * @var string
     *
     * @ORM\Column(name="leverancier", type="string", length=100)
     */
    private $leverancier;

    /**
     * @var int
     *
     * @ORM\Column(name="ordernummer", type="integer")
     */
    private $ordernummer;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=255, unique=true)
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="text")
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="hoeveelheid", type="string", length=255)
     */
    private $hoeveelheid;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="text", nullable=true)
     */
    private $kwaliteit;


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
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Goederenontvangst
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set leverancier
     *
     * @param string $leverancier
     *
     * @return Goederenontvangst
     */
    public function setLeverancier($leverancier)
    {
        $this->leverancier = $leverancier;

        return $this;
    }

    /**
     * Get leverancier
     *
     * @return string
     */
    public function getLeverancier()
    {
        return $this->leverancier;
    }

    /**
     * Set ordernummer
     *
     * @param integer $ordernummer
     *
     * @return Goederenontvangst
     */
    public function setOrdernummer($ordernummer)
    {
        $this->ordernummer = $ordernummer;

        return $this;
    }

    /**
     * Get ordernummer
     *
     * @return int
     */
    public function getOrdernummer()
    {
        return $this->ordernummer;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Goederenontvangst
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Goederenontvangst
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set hoeveelheid
     *
     * @param string $hoeveelheid
     *
     * @return Goederenontvangst
     */
    public function setHoeveelheid($hoeveelheid)
    {
        $this->hoeveelheid = $hoeveelheid;

        return $this;
    }

    /**
     * Get hoeveelheid
     *
     * @return string
     */
    public function getHoeveelheid()
    {
        return $this->hoeveelheid;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Goederenontvangst
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }
}
