<?php

namespace Core\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="tb_seg_config", options={"collate"="utf8_general_ci", "charset"="utf8", "engine"="MyISAM"})
 * @ORM\Entity
 */
class Config
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_variable", type="string", length=255, nullable=true)
     */
    private $chrVariable;

    /**
     * @var string
     *
     * @ORM\Column(name="chr_value", type="string", length=255, nullable=true)
     */
    private $chrValue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="bool_active", type="boolean", nullable=true)
     */
    private $boolActive;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set chrVariable
     *
     * @param string $chrVariable
     * @return Config
     */
    public function setChrVariable($chrVariable)
    {
        $this->chrVariable = $chrVariable;

        return $this;
    }

    /**
     * Get chrVariable
     *
     * @return string 
     */
    public function getChrVariable()
    {
        return $this->chrVariable;
    }

    /**
     * Set chrValue
     *
     * @param string $chrValue
     * @return Config
     */
    public function setChrValue($chrValue)
    {
        $this->chrValue = $chrValue;

        return $this;
    }

    /**
     * Get chrValue
     *
     * @return string 
     */
    public function getChrValue()
    {
        return $this->chrValue;
    }

    /**
     * Set boolActive
     *
     * @param boolean $boolActive
     * @return Config
     */
    public function setBoolActive($boolActive)
    {
        $this->boolActive = $boolActive;

        return $this;
    }

    /**
     * Get boolActive
     *
     * @return boolean 
     */
    public function getBoolActive()
    {
        return $this->boolActive;
    }
}
