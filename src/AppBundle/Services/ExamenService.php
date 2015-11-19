<?php
/**
 * Created by PhpStorm.
 * User: juan Lu
 * Date: 22/10/15
 * Time: 20:08
 */

namespace AppBundle\Services;


class ExamenService
{
    /*
    ========== VARIABLES ==========
    */
    private $frase1;
    private $frase2;

    /*
    ========== GET y SET ==========
    */
// ___Get___
    /** @return mixed */
    public function getFrase1()
    { return $this->frase1; }

    /** @return mixed */
    public function getFrase2()
    { return $this->frase2; }

// ___Set___
    /** @param mixed $nFrase */
    public function setFrase1($nFrase)
    { $this->frase1 = $nFrase; }

    /** @param mixed $nFrase */
    public function setFrase2($nFrase)
    { $this->frase2 = $nFrase; }

    /*
    ========== FUNCIONES ==========
    */
    public function mayusculas()       //a uppercase
    { $this->frase1 = strtoupper($this->frase1); }

    public function minusculas()       //a uppercase
    { $this->frase1 = strtolower($this->frase1); }
}