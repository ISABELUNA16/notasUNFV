<?php

namespace LoginBundle\Entity;

/**
 * facultad
 */
class facultad
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codFacultad;

    /**
     * @var string
     */
    private $facultadDescripcion;

    /**
     * @var string
     */
    private $facultadSiglas;


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
     * Set codFacultad
     *
     * @param integer $codFacultad
     *
     * @return facultad
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
     * Set facultadDescripcion
     *
     * @param string $facultadDescripcion
     *
     * @return facultad
     */
    public function setFacultadDescripcion($facultadDescripcion)
    {
        $this->facultadDescripcion = $facultadDescripcion;

        return $this;
    }

    /**
     * Get facultadDescripcion
     *
     * @return string
     */
    public function getFacultadDescripcion()
    {
        return $this->facultadDescripcion;
    }

    /**
     * Set facultadSiglas
     *
     * @param string $facultadSiglas
     *
     * @return facultad
     */
    public function setFacultadSiglas($facultadSiglas)
    {
        $this->facultadSiglas = $facultadSiglas;

        return $this;
    }

    /**
     * Get facultadSiglas
     *
     * @return string
     */
    public function getFacultadSiglas()
    {
        return $this->facultadSiglas;
    }
}

