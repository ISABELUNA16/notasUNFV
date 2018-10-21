<?php

namespace LoginBundle\Entity;

/**
 * nota
 */
class nota
{
    /**
     * @var int
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="matricula")
     */
    private $codMatricula;

    /**
     * @ORM\ManyToOne(targetEntity="curso")
     */
    private $codCurso;

    /**
     * @var string
     */
    private $notasTareas;

    /**
     * @var string
     */
    private $notasExamenParcial;

    /**
     * @var string
     */
    private $notasExamenFinal;

    /**
     * @var string
     */
    private $notaPromediofinal;


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
     * @return nota
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
     * Set codCurso
     *
     * @param integer $codCurso
     *
     * @return nota
     */
    public function setCodCurso($codCurso)
    {
        $this->codCurso = $codCurso;

        return $this;
    }

    /**
     * Get codCurso
     *
     * @return int
     */
    public function getCodCurso()
    {
        return $this->codCurso;
    }

    /**
     * Set notasTareas
     *
     * @param string $notasTareas
     *
     * @return nota
     */
    public function setNotasTareas($notasTareas)
    {
        $this->notasTareas = $notasTareas;

        return $this;
    }

    /**
     * Get notasTareas
     *
     * @return string
     */
    public function getNotasTareas()
    {
        return $this->notasTareas;
    }

    /**
     * Set notasExamenParcial
     *
     * @param string $notasExamenParcial
     *
     * @return nota
     */
    public function setNotasExamenParcial($notasExamenParcial)
    {
        $this->notasExamenParcial = $notasExamenParcial;

        return $this;
    }

    /**
     * Get notasExamenParcial
     *
     * @return string
     */
    public function getNotasExamenParcial()
    {
        return $this->notasExamenParcial;
    }

    /**
     * Set notasExamenFinal
     *
     * @param string $notasExamenFinal
     *
     * @return nota
     */
    public function setNotasExamenFinal($notasExamenFinal)
    {
        $this->notasExamenFinal = $notasExamenFinal;

        return $this;
    }

    /**
     * Get notasExamenFinal
     *
     * @return string
     */
    public function getNotasExamenFinal()
    {
        return $this->notasExamenFinal;
    }

    /**
     * Set notaPromediofinal
     *
     * @param string $notaPromediofinal
     *
     * @return nota
     */
    public function setNotaPromediofinal($notaPromediofinal)
    {
        $this->notaPromediofinal = $notaPromediofinal;

        return $this;
    }

    /**
     * Get notaPromediofinal
     *
     * @return string
     */
    public function getNotaPromediofinal()
    {
        return $this->notaPromediofinal;
    }
}

