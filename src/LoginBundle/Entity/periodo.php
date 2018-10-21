<?php

namespace LoginBundle\Entity;

/**
 * periodo
 */
class periodo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codPeriodo;

    /**
     * @var string
     */
    private $periodoDescripcion;

    /**
     * @var \DateTime
     */
    private $periodoFechainicio;

    /**
     * @var \DateTime
     */
    private $periodoFechafin;

    /**
     * @var int
     */
    private $periodoEstado;


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
     * Set codPeriodo
     *
     * @param integer $codPeriodo
     *
     * @return periodo
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
     * Set periodoDescripcion
     *
     * @param string $periodoDescripcion
     *
     * @return periodo
     */
    public function setPeriodoDescripcion($periodoDescripcion)
    {
        $this->periodoDescripcion = $periodoDescripcion;

        return $this;
    }

    /**
     * Get periodoDescripcion
     *
     * @return string
     */
    public function getPeriodoDescripcion()
    {
        return $this->periodoDescripcion;
    }

    /**
     * Set periodoFechainicio
     *
     * @param \DateTime $periodoFechainicio
     *
     * @return periodo
     */
    public function setPeriodoFechainicio($periodoFechainicio)
    {
        $this->periodoFechainicio = $periodoFechainicio;

        return $this;
    }

    /**
     * Get periodoFechainicio
     *
     * @return \DateTime
     */
    public function getPeriodoFechainicio()
    {
        return $this->periodoFechainicio;
    }

    /**
     * Set periodoFechafin
     *
     * @param \DateTime $periodoFechafin
     *
     * @return periodo
     */
    public function setPeriodoFechafin($periodoFechafin)
    {
        $this->periodoFechafin = $periodoFechafin;

        return $this;
    }

    /**
     * Get periodoFechafin
     *
     * @return \DateTime
     */
    public function getPeriodoFechafin()
    {
        return $this->periodoFechafin;
    }

    /**
     * Set periodoEstado
     *
     * @param integer $periodoEstado
     *
     * @return periodo
     */
    public function setPeriodoEstado($periodoEstado)
    {
        $this->periodoEstado = $periodoEstado;

        return $this;
    }

    /**
     * Get periodoEstado
     *
     * @return int
     */
    public function getPeriodoEstado()
    {
        return $this->periodoEstado;
    }
}

