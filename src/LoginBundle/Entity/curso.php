<?php

namespace LoginBundle\Entity;

/**
 * curso
 */
class curso
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $codCurso;

    /**
     * @ORM\ManyToOne(targetEntity="carrera")
     */
    private $codCarrera;

    /**
     * @var string
     */
    private $cursoDescripcion;

    /**
     * @var int
     */
    private $cursoCreditos;

    /**
     * @var float
     */
    private $cursoHoraslectivas;

    /**
     * @var int
     */
    private $cursoEstado;


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
     * Set codCurso
     *
     * @param integer $codCurso
     *
     * @return curso
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
     * Set codCarrera
     *
     * @param integer $codCarrera
     *
     * @return curso
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
     * Set cursoDescripcion
     *
     * @param string $cursoDescripcion
     *
     * @return curso
     */
    public function setCursoDescripcion($cursoDescripcion)
    {
        $this->cursoDescripcion = $cursoDescripcion;

        return $this;
    }

    /**
     * Get cursoDescripcion
     *
     * @return string
     */
    public function getCursoDescripcion()
    {
        return $this->cursoDescripcion;
    }

    /**
     * Set cursoCreditos
     *
     * @param integer $cursoCreditos
     *
     * @return curso
     */
    public function setCursoCreditos($cursoCreditos)
    {
        $this->cursoCreditos = $cursoCreditos;

        return $this;
    }

    /**
     * Get cursoCreditos
     *
     * @return int
     */
    public function getCursoCreditos()
    {
        return $this->cursoCreditos;
    }

    /**
     * Set cursoHoraslectivas
     *
     * @param float $cursoHoraslectivas
     *
     * @return curso
     */
    public function setCursoHoraslectivas($cursoHoraslectivas)
    {
        $this->cursoHoraslectivas = $cursoHoraslectivas;

        return $this;
    }

    /**
     * Get cursoHoraslectivas
     *
     * @return float
     */
    public function getCursoHoraslectivas()
    {
        return $this->cursoHoraslectivas;
    }

    /**
     * Set cursoEstado
     *
     * @param integer $cursoEstado
     *
     * @return curso
     */
    public function setCursoEstado($cursoEstado)
    {
        $this->cursoEstado = $cursoEstado;

        return $this;
    }

    /**
     * Get cursoEstado
     *
     * @return int
     */
    public function getCursoEstado()
    {
        return $this->cursoEstado;
    }
}

