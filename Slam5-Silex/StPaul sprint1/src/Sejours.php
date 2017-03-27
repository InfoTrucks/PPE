<?php
/**
 * Created by PhpStorm.
 * User: 15milletl
 * Date: 27/03/2017
 * Time: 17:00
 */
/** namespace stpaul\Domain;  */

class Sejours {

    private $SEJNO;
    private $SEJINTITULE;
    private $SEJMONTANTMBI;
    private $SEJDTEDEB;
    private $SEJDUREE;

    function __construct($SEJNO, $SEJINTITULE, $SEJMONTANTMBI, $SEJDTEDEB, $SEJDUREE)
    {
        $this->SEJNO = $SEJNO;
        $this->SEJINTITULE = $SEJINTITULE;
        $this->SEJMONTANTMBI = $SEJMONTANTMBI;
        $this->SEJDTEDEB = $SEJDTEDEB;
        $this->SEJDUREE = $SEJDUREE;
    }

    /**
     * @return mixed
     */
    public function getSEJNO()
    {
        return $this->SEJNO;
    }

    /**
     * @param mixed $SEJNO
     */
    public function setSEJNO($SEJNO)
    {
        $this->SEJNO = $SEJNO;
    }

    /**
     * @return mixed
     */
    public function getSEJINTITULE()
    {
        return $this->SEJINTITULE;
    }

    /**
     * @param mixed $SEJINTITULE
     */
    public function setSEJINTITULE($SEJINTITULE)
    {
        $this->SEJINTITULE = $SEJINTITULE;
    }

    /**
     * @return mixed
     */
    public function getSEJDTEDEB()
    {
        return $this->SEJDTEDEB;
    }

    /**
     * @param mixed $SEJDTEDEB
     */
    public function setSEJDTEDEB($SEJDTEDEB)
    {
        $this->SEJDTEDEB = $SEJDTEDEB;
    }

    /**
     * @return mixed
     */
    public function getSEJDUREE()
    {
        return $this->SEJDUREE;
    }

    /**
     * @param mixed $SEJDUREE
     */
    public function setSEJDUREE($SEJDUREE)
    {
        $this->SEJDUREE = $SEJDUREE;
    }

    /**
     * @return mixed
     */
    public function getSEJMONTANTMBI()
    {
        return $this->SEJMONTANTMBI;
    }

    /**
     * @param mixed $SEJMONTANTMBI
     */
    public function setSEJMONTANTMBI($SEJMONTANTMBI)
    {
        $this->SEJMONTANTMBI = $SEJMONTANTMBI;
    }

}