<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="OntvangenGoederen")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OntvangenGoederenRepository")
 */
class OntvangenGoederen
{
    /**
     * @var int
     *
     * @ORM\Column(name="product_barcode", length=11, type="integer")
     * @ORM\Id
     *
     */
    private $productbarcode;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="string", length=255, nullable=true)
     */
    private $kwaliteit;

    /**
     * @var integer
     *
     * @ORM\Column(name="aantal", type="integer", length=6, nullable=true)
     */
    private $aantal;

    /**
     * @var string
     *
     * @ORM\Column(name="datum_ontvangst", type="string", length=10, nullable=true)
     */
    private $datumontvangst;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=255, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="leverancier", type="string", length=255, nullable=true)
     */
    private $leverancier;


    /**
     * Set product_barcode
     *
     * @param integer $productbarcode
     *
     * @return OntvangenGoederen
     */
    public function setProductbarcode($productbarcode)
    {
        $this->productbarcode = $productbarcode;

        return $this;
    }

    /**
     * Get product_barcode
     *
     * @return integer
     */
    public function getProductbarcode()
    {
        return $this->productbarcode;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return OntvangenGoederen
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

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return OntvangenGoederen
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return integer
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set datum_ontvangst
     *
     * @param string $datumontvangst
     *
     * @return OntvangenGoederen
     */
    public function setDatumontvangst($datumontvangst)
    {
        $this->datumontvangst = $datumontvangst;

        return $this;
    }

    /**
     * Get datum_ontvangst
     *
     * @return string
     */
    public function getDatumontvangst()
    {
        return $this->datumontvangst;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return OntvangenGoederen
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
     * Set leverancier
     *
     * @param string $leverancier
     *
     * @return OntvangenGoederen
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

}
    ?>
