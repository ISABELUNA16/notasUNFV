<?php

namespace LoginBundle\Entity;

/**
 * curso_docente
 */
class curso_docente
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
     * @ORM\ManyToOne(targetEntity="curso")
     */
    private $codCurso;

    /**
     * @ORM\ManyToOne(targetEntity="periodo")
     */
    private $codPeriodo;

    /**
     * @var int
     */
    private $cursodocenteEstado;


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
     * @return curso_docente
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
     * Set codCurso
     *
     * @param integer $codCurso
     *
     * @return curso_docente
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
     * Set codPeriodo
     *
     * @param integer $codPeriodo
     *
     * @return curso_docente
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
     * Set cursodocenteEstado
     *
     * @param integer $cursodocenteEstado
     *
     * @return curso_docente
     */
    public function setCursodocenteEstado($cursodocenteEstado)
    {
        $this->cursodocenteEstado = $cursodocenteEstado;

        return $this;
    }

    /**
     * Get cursodocenteEstado
     *
     * @return int
     */
    public function getCursodocenteEstado()
    {
        return $this->cursodocenteEstado;
    }
}

