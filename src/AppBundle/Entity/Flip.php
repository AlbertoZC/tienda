<?php

namespace AppBundle\Entity;

/**
 * Flip
 */
class Flip
{
    /**
     * @var string
     */
    private $contenido;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuarioAutor;


    /**
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Flip
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Flip
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Flip
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set usuarioAutor
     *
     * @param \AppBundle\Entity\Usuario $usuarioAutor
     *
     * @return Flip
     */
    public function setUsuarioAutor(\AppBundle\Entity\Usuario $usuarioAutor = null)
    {
        $this->usuarioAutor = $usuarioAutor;

        return $this;
    }

    /**
     * Get usuarioAutor
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuarioAutor()
    {
        return $this->usuarioAutor;
    }
}

