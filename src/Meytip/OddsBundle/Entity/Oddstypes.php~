<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oddstypes
 *
 * @ORM\Table(name="oddstypes")
 * @ORM\Entity
 */
class Oddstypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ot", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ot;

    /**
     * @var string
     *
     * @ORM\Column(name="oddsname", type="string", length=20, nullable=false)
     */
    private $oddsname;

    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=20, nullable=true)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="movestablename", type="string", length=20, nullable=true)
     */
    private $movestablename;

    /**
     * @var integer
     *
     * @ORM\Column(name="valid", type="smallint", nullable=true)
     */
    private $valid;

    /**
     * @var string
     *
     * @ORM\Column(name="sortdrawprice", type="string", length=1, nullable=true)
     */
    private $sortdrawprice;



    /**
     * Get ot
     *
     * @return integer 
     */
    public function getOt()
    {
        return $this->ot;
    }

    /**
     * Set oddsname
     *
     * @param string $oddsname
     * @return Oddstypes
     */
    public function setOddsname($oddsname)
    {
        $this->oddsname = $oddsname;
    
        return $this;
    }

    /**
     * Get oddsname
     *
     * @return string 
     */
    public function getOddsname()
    {
        return $this->oddsname;
    }

    /**
     * Set tablename
     *
     * @param string $tablename
     * @return Oddstypes
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;
    
        return $this;
    }

    /**
     * Get tablename
     *
     * @return string 
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set movestablename
     *
     * @param string $movestablename
     * @return Oddstypes
     */
    public function setMovestablename($movestablename)
    {
        $this->movestablename = $movestablename;
    
        return $this;
    }

    /**
     * Get movestablename
     *
     * @return string 
     */
    public function getMovestablename()
    {
        return $this->movestablename;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     * @return Oddstypes
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
    
        return $this;
    }

    /**
     * Get valid
     *
     * @return integer 
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set sortdrawprice
     *
     * @param string $sortdrawprice
     * @return Oddstypes
     */
    public function setSortdrawprice($sortdrawprice)
    {
        $this->sortdrawprice = $sortdrawprice;
    
        return $this;
    }

    /**
     * Get sortdrawprice
     *
     * @return string 
     */
    public function getSortdrawprice()
    {
        return $this->sortdrawprice;
    }
}