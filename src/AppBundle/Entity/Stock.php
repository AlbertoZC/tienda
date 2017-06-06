<?php

namespace AppBundle\Entity;

/**
 * Stock
 */
class Stock
{
    /**
     * @var integer
     */
    private $numero;

    /**
     * @var integer
     */
    private $umbral;

    /**
     * @var \AppBundle\Entity\Producto
     */
    private $producto;


    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Stock
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set umbral
     *
     * @param integer $umbral
     *
     * @return Stock
     */
    public function setUmbral($umbral)
    {
        $this->umbral = $umbral;

        return $this;
    }

    /**
     * Get umbral
     *
     * @return integer
     */
    public function getUmbral()
    {
        return $this->umbral;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     *
     * @return Stock
     */
    public function setProducto(\AppBundle\Entity\Producto $producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getProducto()
    {
        return $this->producto;
    }
}

