<?php

namespace AppBundle\Entity;

/**
 * Detallespedido
 */
class Detallespedido
{
    /**
     * @var integer
     */
    private $numero;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var \AppBundle\Entity\Producto
     */
    private $producto;

    /**
     * @var \AppBundle\Entity\Pedido
     */
    private $pedido;


    /**
     * Set numero
     *
     * @param integer $numero
     *
     * @return Detallespedido
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
     * Set precio
     *
     * @param float $precio
     *
     * @return Detallespedido
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set producto
     *
     * @param \AppBundle\Entity\Producto $producto
     *
     * @return Detallespedido
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

    /**
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return Detallespedido
     */
    public function setPedido(\AppBundle\Entity\Pedido $pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }
}

