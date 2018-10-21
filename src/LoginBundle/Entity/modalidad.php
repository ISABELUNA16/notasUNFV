<?php

namespace LoginBundle\Entity;

/**
 * modalidad
 */
class modalidad
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codModalidad;

    /**
     * @var string
     */
    private $modalidadDescripcion;

    /**
     * @var int
     */
    private $modalidadEstado;


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
     * Set codModalidad
     *
     * @param integer $codModalidad
     *
     * @return modalidad
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
     * Set modalidadDescripcion
     *
     * @param string $modalidadDescripcion
     *
     * @return modalidad
     */
    public function setModalidadDescripcion($modalidadDescripcion)
    {
        $this->modalidadDescripcion = $modalidadDescripcion;

        return $this;
    }

    /**
     * Get modalidadDescripcion
     *
     * @return string
     */
    public function getModalidadDescripcion()
    {
        return $this->modalidadDescripcion;
    }

    /**
     * Set modalidadEstado
     *
     * @param integer $modalidadEstado
     *
     * @return modalidad
     */
    public function setModalidadEstado($modalidadEstado)
    {
        $this->modalidadEstado = $modalidadEstado;

        return $this;
    }

    /**
     * Get modalidadEstado
     *
     * @return int
     */
    public function getModalidadEstado()
    {
        return $this->modalidadEstado;
    }
}

