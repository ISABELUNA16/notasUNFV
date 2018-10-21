<?php

namespace LoginBundle\Entity;

/**
 * Alumno
 */
class Alumno
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codAlumno;

    /**
     * @var string
     */
    private $alumApepat;

    /**
     * @var string
     */
    private $alumApemat;

    /**
     * @var string
     */
    private $alumNom;

    /**
     * @var string
     */
    private $alumDireccion;

    /**
     * @var string
     */
    private $alumTelefono;


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
     * Set codAlumno
     *
     * @param integer $codAlumno
     *
     * @return Alumno
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
     * Set alumApepat
     *
     * @param string $alumApepat
     *
     * @return Alumno
     */
    public function setAlumApepat($alumApepat)
    {
        $this->alumApepat = $alumApepat;

        return $this;
    }

    /**
     * Get alumApepat
     *
     * @return string
     */
    public function getAlumApepat()
    {
        return $this->alumApepat;
    }

    /**
     * Set alumApemat
     *
     * @param string $alumApemat
     *
     * @return Alumno
     */
    public function setAlumApemat($alumApemat)
    {
        $this->alumApemat = $alumApemat;

        return $this;
    }

    /**
     * Get alumApemat
     *
     * @return string
     */
    public function getAlumApemat()
    {
        return $this->alumApemat;
    }

    /**
     * Set alumNom
     *
     * @param string $alumNom
     *
     * @return Alumno
     */
    public function setAlumNom($alumNom)
    {
        $this->alumNom = $alumNom;

        return $this;
    }

    /**
     * Get alumNom
     *
     * @return string
     */
    public function getAlumNom()
    {
        return $this->alumNom;
    }

    /**
     * Set alumDireccion
     *
     * @param string $alumDireccion
     *
     * @return Alumno
     */
    public function setAlumDireccion($alumDireccion)
    {
        $this->alumDireccion = $alumDireccion;

        return $this;
    }

    /**
     * Get alumDireccion
     *
     * @return string
     */
    public function getAlumDireccion()
    {
        return $this->alumDireccion;
    }

    /**
     * Set alumTelefono
     *
     * @param string $alumTelefono
     *
     * @return Alumno
     */
    public function setAlumTelefono($alumTelefono)
    {
        $this->alumTelefono = $alumTelefono;

        return $this;
    }

    /**
     * Get alumTelefono
     *
     * @return string
     */
    public function getAlumTelefono()
    {
        return $this->alumTelefono;
    }
}

