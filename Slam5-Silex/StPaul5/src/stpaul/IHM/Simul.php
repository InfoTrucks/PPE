<?php
/**
 * Created by PhpStorm.
 * User: 15milletl
 * Date: 06/04/2017
 * Time: 11:16
 */

class Simul {

    private $famNom;

    /**
     * @return mixed
     */
    public function getFamNom()
    {
        return $this->famNom;
    }

    /**
     * @param mixed $famNom
     */
    public function setFamNom($famNom)
    {
        $this->famNom = $famNom;
    }

    /**
     * @return mixed
     */
    public function getFamnbEnfant()
    {
        return $this->famnbEnfant;
    }

    /**
     * @param mixed $famnbEnfant
     */
    public function setFamnbEnfant($famnbEnfant)
    {
        $this->famnbEnfant = $famnbEnfant;
    }

    /**
     * @return mixed
     */
    public function getFamQF()
    {
        return $this->famQF;
    }

    /**
     * @param mixed $famQF
     */
    public function setFamQF($famQF)
    {
        $this->famQF = $famQF;
    }

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNo
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejMBI()
    {
        return $this->sejMBI;
    }

    /**
     * @param mixed $sejMBI
     */
    public function setSejMBI($sejMBI)
    {
        $this->sejMBI = $sejMBI;
    }

    /**
     * @return mixed
     */
    public function getSimulNbEnfPartant()
    {
        return $this->simulNbEnfPartant;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setSimulNbEnfPartant($simulNbEnfPartant)
    {
        $this->simulNbEnfPartant = $simulNbEnfPartant;
    }

    /**
     * @return mixed
     */
    public function getSimulReducQF()
    {
        return $this->simulReducQF;
    }

    /**
     * @param mixed $simulReducQF
     */
    public function setSimulReducQF($simulReducQF)
    {
        $this->simulReducQF = $simulReducQF;
    }

    /**
     * @return mixed
     */
    public function getSimulReducFamilleNombreuse()
    {
        return $this->simulReducFamilleNombreuse;
    }

    /**
     * @param mixed $simulReducFamilleNombreuse
     */
    public function setSimulReducFamilleNombreuse($simulReducFamilleNombreuse)
    {
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;
    }

    /**
     * @return mixed
     */
    public function getSimulReducDepartMultiple()
    {
        return $this->simulReducDepartMultiple;
    }

    /**
     * @param mixed $simulReducDepartMultiple
     */
    public function setSimulReducDepartMultiple($simulReducDepartMultiple)
    {
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getSimulSousTotal()
    {
        return $this->simulSousTotal;
    }

    /**
     * @param mixed $simulSousTotal
     */
    public function setSimulSousTotal($simulSousTotal)
    {
        $this->simulSousTotal = $simulSousTotal;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresReduc()
    {
        return $this->simulTotalApresReduc;
    }

    /**
     * @param mixed $simulTotalApresReduc
     */
    public function setSimulTotalApresReduc($simulTotalApresReduc)
    {
        $this->simulTotalApresReduc = $simulTotalApresReduc;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresPlafond()
    {
        return $this->simulTotalApresPlafond;
    }

    /**
     * @param mixed $simulTotalApresPlafond
     */
    public function setSimulTotalApresPlafond($simulTotalApresPlafond)
    {
        $this->simulTotalApresPlafond = $simulTotalApresPlafond;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalDepartMultiple()
    {
        return $this->simulTotalDepartMultiple;
    }

    /**
     * @param mixed $simulTotalDepartMultiple
     */
    public function setSimulTotalDepartMultiple($simulTotalDepartMultiple)
    {
        $this->simulTotalDepartMultiple = $simulTotalDepartMultiple;
    }
    private $famnbEnfant;
    private $famQF;

    private $sejNo;
    private $sejMBI;

    private $simulNbEnfPartant;
    private $simulReducQF;
    private $simulReducFamilleNombreuse;
    private $simulReducDepartMultiple;
    private $simulSousTotal;
    private $simulTotalApresReduc;
    private $simulTotalApresPlafond;
    private $simulTotalDepartMultiple;

    function __construct($famNom, $famnbEnfant, $famQF, $sejNo, $sejMBI, $simulNbEnfPartant, $simulReducQF, $simulReducFamilleNombreuse, $simulReducDepartMultiple, $simulSousTotal, $simulTotalApresReduc, $simulTotalApresPlafond, $simulTotalDepartMultiple)
    {
        $this->famNom = $famNom;
        $this->famnbEnfant = $famnbEnfant;
        $this->famQF = $famQF;
        $this->sejNo = $sejNo;
        $this->sejMBI = $sejMBI;
        $this->simulNbEnfPartant = $simulNbEnfPartant;
        $this->simulReducQF = $simulReducQF;
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;
        $this->simulSousTotal = $simulSousTotal;
        $this->simulTotalApresReduc = $simulTotalApresReduc;
        $this->simulTotalApresPlafond = $simulTotalApresPlafond;
        $this->simulTotalDepartMultiple = $simulTotalDepartMultiple;
    }

    public function simulNbEnfPartant(){
        return $this->getFamnbEnfant();
    }

    public function simulReducQF(){
        if ($this->getFamQF() < 500){
            return 0.1;
        }
        else {
            return 0;
        }
    }

    public function simulReducFamilleNombreuse(){
        if ($this->getFamnbEnfant() == 2){
            return 0.2;
        }
        elseif ($this->getFamnbEnfant() >= 3){
            return 0.3;
        }
        else {
            return 0;
        }
    }

    public function simulReducDepartMultiple(){

    }

    public function simulSousTotal(){
        return ($this->getSejMBI())-(simulReducQF()*$this->getSejMBI())-(simulReducFamilleNombreuse*$this->getSejMBI());
    }
}