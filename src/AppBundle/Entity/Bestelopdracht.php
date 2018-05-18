<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelopdracht
 *
 * @ORM\Table(name="bestelopdracht")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelopdrachtRepository")
 */
class Bestelopdracht
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
     * @ORM\Column(name="product_barcode", type="string", length=20)
     */
    private $productBarcode;

    /**
     * @var int
     *
     * @ORM\Column(name="aantal", type="integer")
     */
    private $aantal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date")
     */
    private $datum;

    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;

    /**
     * @var int
     *
     * @ORM\Column(name="leverancier_id", type="integer")
     */
    private $leverancierId;


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
     * Set productBarcode
     *
     * @param string $productBarcode
     *
     * @return Bestelopdracht
     */
    public function setProductBarcode($productBarcode)
    {
        $this->productBarcode = $productBarcode;

        return $this;
    }

    /**
     * Get productBarcode
     *
     * @return string
     */
    public function getProductBarcode()
    {
        return $this->productBarcode;
    }

    /**
     * Set aantal
     *
     * @param integer $aantal
     *
     * @return Bestelopdracht
     */
    public function setAantal($aantal)
    {
        $this->aantal = $aantal;

        return $this;
    }

    /**
     * Get aantal
     *
     * @return int
     */
    public function getAantal()
    {
        return $this->aantal;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Bestelopdracht
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
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return Bestelopdracht
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set leverancierId
     *
     * @param integer $leverancierId
     *
     * @return Bestelopdracht
     */
    public function setLeverancierId($leverancierId)
    {
        $this->leverancierId = $leverancierId;

        return $this;
    }

    /**
     * Get leverancierId
     *
     * @return int
     */
    public function getLeverancierId()
    {
        return $this->leverancierId;
    }
}