<?php

namespace LoginBundle\Entity;

/**
 * matricula
 */
class matricula
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codMatricula;

    /**
     * @ORM\ManyToOne(targetEntity="modalidad")
     */
    private $codModalidad;

     /**
     * @ORM\ManyToOne(targetEntity="carrera")
     */
    private $codCarrera;

    /**
     * @ORM\ManyToOne(targetEntity="Alumno")
     */
    private $codAlumno;

    /**
     * @ORM\ManyToOne(targetEntity="periodo")
     */
    private $codPeriodo;

    /**
     * @var \DateTime
     */
    private $matFecharegistro;

    /**
     * @var int
     */
    private $matEstado;


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
     * Set codMatricula
     *
     * @param integer $codMatricula
     *
     * @return matricula
     */
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;

        return $this;
    }

    /**
     * Get codMatricula
     *
     * @return int
     */
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    /**
     * Set codModalidad
     *
     * @param integer $codModalidad
     *
     * @return matricula
     */
    public function setCodModalidad($codModalidad)
    {
        $this->codModalidad = $codModalidad;

        return $this;
    }

    /**
     * Get codModalidad
     *
     * @return int
     */
    public function getCodModalidad()
    {
        return $this->codModalidad;
    }

    /**
     * Set codCarrera
     *
     * @param integer $codCarrera
     *
     * @return matricula
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
     * Set codAlumno
     *
     * @param integer $codAlumno
     *
     * @return matricula
     */
    public function setCodAlumno($codAlumno)
    {
        $this->codAlumno = $codAlumno;

        return $this;
    }

    /**
     * Get codAlumno
     *
     * @return int
     */
    public function getCodAlumno()
    {
        return $this->codAlumno;
    }

    /**
     * Set codPeriodo
     *
     * @param integer $codPeriodo
     *
     * @return matricula
     */
    public function setCodPeriodo($codPeriodo)
    {
        $this->codPeriodo = $codPeriodo;

        return $this;
    }

    /**
     * Get codPeriodo
     *
     * @return int
     */
    public function getCodPeriodo()
    {
        return $this->codPeriodo;
    }

    /**
     * Set matFecharegistro
     *
     * @param \DateTime $matFecharegistro
     *
     * @return matricula
     */
    public function setMatFecharegistro($matFecharegistro)
    {
        $this->matFecharegistro = $matFecharegistro;

        return $this;
    }

    /**
     * Get matFecharegistro
     *
     * @return \DateTime
     */
    public function getMatFecharegistro()
    {
        return $this->matFecharegistro;
    }

    /**
     * Set matEstado
     *
     * @param integer $matEstado
     *
     * @return matricula
     */
    public function setMatEstado($matEstado)
    {
        $this->matEstado = $matEstado;

        return $this;
    }

    /**
     * Get matEstado
     *
     * @return int
     */
    public function getMatEstado()
    {
        return $this->matEstado;
    }
}

