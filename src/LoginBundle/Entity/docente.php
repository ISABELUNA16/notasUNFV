<?php

namespace LoginBundle\Entity;

/**
 * docente
 */
class docente
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codDocente;

    /**
     * @var string
     */
    private $docenteApepat;

    /**
     * @var string
     */
    private $docenteApemat;

    /**
     * @var string
     */
    private $docenteNombre;

    /**
     * @var int
     */
    private $docenteTelefono;


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
     * Set codDocente
     *
     * @param integer $codDocente
     *
     * @return docente
     */
    public function setCodDocente($codDocente)
    {
        $this->codDocente = $codDocente;

        return $this;
    }

    /**
     * Get codDocente
     *
     * @return int
     */
    public function getCodDocente()
    {
        return $this->codDocente;
    }

    /**
     * Set docenteApepat
     *
     * @param string $docenteApepat
     *
     * @return docente
     */
    public function setDocenteApepat($docenteApepat)
    {
        $this->docenteApepat = $docenteApepat;

        return $this;
    }

    /**
     * Get docenteApepat
     *
     * @return string
     */
    public function getDocenteApepat()
    {
        return $this->docenteApepat;
    }

    /**
     * Set docenteApemat
     *
     * @param string $docenteApemat
     *
     * @return docente
     */
    public function setDocenteApemat($docenteApemat)
    {
        $this->docenteApemat = $docenteApemat;

        return $this;
    }

    /**
     * Get docenteApemat
     *
     * @return string
     */
    public function getDocenteApemat()
    {
        return $this->docenteApemat;
    }

    /**
     * Set docenteNombre
     *
     * @param string $docenteNombre
     *
     * @return docente
     */
    public function setDocenteNombre($docenteNombre)
    {
        $this->docenteNombre = $docenteNombre;

        return $this;
    }

    /**
     * Get docenteNombre
     *
     * @return string
     */
    public function getDocenteNombre()
    {
        return $this->docenteNombre;
    }

    /**
     * Set docenteTelefono
     *
     * @param integer $docenteTelefono
     *
     * @return docente
     */
    public function setDocenteTelefono($docenteTelefono)
    {
        $this->docenteTelefono = $docenteTelefono;

        return $this;
    }

    /**
     * Get docenteTelefono
     *
     * @return int
     */
    public function getDocenteTelefono()
    {
        return $this->docenteTelefono;
    }
}

