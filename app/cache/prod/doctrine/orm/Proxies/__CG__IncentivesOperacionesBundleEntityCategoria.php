<?php

namespace Proxies\__CG__\Incentives\OperacionesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Categoria extends \Incentives\OperacionesBundle\Entity\Categoria implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'nombre', 'proveedores', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'abreviatura', 'producto', 'productocatalogo', 'ordencompra', 'planilla', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'fechaModificacion', 'usuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'nombre', 'proveedores', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'abreviatura', 'producto', 'productocatalogo', 'ordencompra', 'planilla', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Categoria' . "\0" . 'fechaModificacion', 'usuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Categoria $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function addProveedore(\Incentives\OperacionesBundle\Entity\Proveedores $proveedores)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProveedore', [$proveedores]);

        return parent::addProveedore($proveedores);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProveedore(\Incentives\OperacionesBundle\Entity\Proveedores $proveedores)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProveedore', [$proveedores]);

        return parent::removeProveedore($proveedores);
    }

    /**
     * {@inheritDoc}
     */
    public function getProveedores()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProveedores', []);

        return parent::getProveedores();
    }

    /**
     * {@inheritDoc}
     */
    public function addProducto(\Incentives\CatalogoBundle\Entity\Producto $producto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProducto', [$producto]);

        return parent::addProducto($producto);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProducto(\Incentives\CatalogoBundle\Entity\Producto $producto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProducto', [$producto]);

        return parent::removeProducto($producto);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducto', []);

        return parent::getProducto();
    }

    /**
     * {@inheritDoc}
     */
    public function setAbreviatura($abreviatura)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAbreviatura', [$abreviatura]);

        return parent::setAbreviatura($abreviatura);
    }

    /**
     * {@inheritDoc}
     */
    public function getAbreviatura()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbreviatura', []);

        return parent::getAbreviatura();
    }

    /**
     * {@inheritDoc}
     */
    public function addProductocatalogo(\Incentives\CatalogoBundle\Entity\Productocatalogo $productocatalogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductocatalogo', [$productocatalogo]);

        return parent::addProductocatalogo($productocatalogo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductocatalogo(\Incentives\CatalogoBundle\Entity\Productocatalogo $productocatalogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductocatalogo', [$productocatalogo]);

        return parent::removeProductocatalogo($productocatalogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getProductocatalogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductocatalogo', []);

        return parent::getProductocatalogo();
    }

    /**
     * {@inheritDoc}
     */
    public function addOrdencompra(\Incentives\OrdenesBundle\Entity\OrdenesCompra $ordencompra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOrdencompra', [$ordencompra]);

        return parent::addOrdencompra($ordencompra);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOrdencompra(\Incentives\OrdenesBundle\Entity\OrdenesCompra $ordencompra)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOrdencompra', [$ordencompra]);

        return parent::removeOrdencompra($ordencompra);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdencompra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdencompra', []);

        return parent::getOrdencompra();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlanilla(\Incentives\InventarioBundle\Entity\Planilla $planilla)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlanilla', [$planilla]);

        return parent::addPlanilla($planilla);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlanilla(\Incentives\InventarioBundle\Entity\Planilla $planilla)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlanilla', [$planilla]);

        return parent::removePlanilla($planilla);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanilla()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanilla', []);

        return parent::getPlanilla();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaModificacion($fechaModificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaModificacion', [$fechaModificacion]);

        return parent::setFechaModificacion($fechaModificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaModificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaModificacion', []);

        return parent::getFechaModificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\Incentives\BaseBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

}
