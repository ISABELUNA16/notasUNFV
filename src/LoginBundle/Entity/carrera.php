<?php

namespace LoginBundle\Entity;

/**
 * carrera
 */
class carrera
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codCarrera;
    
    /**
     * @ORM\ManyToOne(targetEntity="facultad")
     */
    private $codFacultad;

    /**
     * @var string
     */
    private $carreraDescripcion;

    /**
     * @var string
     */
    private $carreraSemestres;

    /**
     * @var int
     */
    private $carreraEstado;


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
     * Set codCarrera
     *
     * @param integer $codCarrera
     *
     * @return carrera
     */
    public function setCodCarrera($codCarrera)
    {
        $this->codCarrera = $codCarrera;

        return $this;
    }

    /**
     * Get codCarrera
     *
     * @return int
     */
    public function getCodCarrera()
    {
        return $this->codCarrera;
    }

    /**
     * Set codFacultad
     *
     * @param integer $codFacultad
     *
     * @return carrera
     */
    public function setCodFacultad($codFacultad)
    {
        $this->codFacultad = $codFacultad;

        return $this;
    }

    /**
     * Get codFacultad
     *
     * @return int
     */
    public function getCodFacultad()
    {
        return $this->codFacultad;
    }

    /**
     * Set carreraDescripcion
     *
     * @param string $carreraDescripcion
     *
     * @return carrera
     */
    public function setCarreraDescripcion($carreraDescripcion)
    {
        $this->carreraDescripcion = $carreraDescripcion;

        return $this;
    }

    /**
     * Get carreraDescripcion
     *
     * @return string
     */
    public function getCarreraDescripcion()
    {
        return $this->carreraDescripcion;
    }

    /**
     * Set carreraSemestres
     *
     * @param string $carreraSemestres
     *
     * @return carrera
     */
    public function setCarreraSemestres($carreraSemestres)
    {
        $this->carreraSemestres = $carreraSemestres;

        return $this;
    }

    /**
     * Get carreraSemestres
     *
     * @return string
     */
    public function getCarreraSemestres()
    {
        return $this->carreraSemestres;
    }

    /**
     * Set carreraEstado
     *
     * @param integer $carreraEstado
     *
     * @return carrera
     */
    public function setCarreraEstado($carreraEstado)
    {
        $this->carreraEstado = $carreraEstado;

        return $this;
    }

    /**
     * Get carreraEstado
     *
     * @return int
     */
    public function getCarreraEstado()
    {
        return $this->carreraEstado;
    }
}

