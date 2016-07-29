<?php

namespace Proxies\__CG__\Incentives\OperacionesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tipodocumento extends \Incentives\OperacionesBundle\Entity\Tipodocumento implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'nombre', 'proveedores', 'cliente', 'courier', 'participantes', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'fechaModificacion', 'usuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'nombre', 'proveedores', 'cliente', 'courier', 'participantes', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Tipodocumento' . "\0" . 'fechaModificacion', 'usuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tipodocumento $proxy) {
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
    public function addCliente(\Incentives\CatalogoBundle\Entity\Cliente $cliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCliente', [$cliente]);

        return parent::addCliente($cliente);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCliente(\Incentives\CatalogoBundle\Entity\Cliente $cliente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCliente', [$cliente]);

        return parent::removeCliente($cliente);
    }

    /**
     * {@inheritDoc}
     */
    public function getCliente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCliente', []);

        return parent::getCliente();
    }

    /**
     * {@inheritDoc}
     */
    public function addCourier(\Incentives\InventarioBundle\Entity\Courier $courier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCourier', [$courier]);

        return parent::addCourier($courier);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCourier(\Incentives\InventarioBundle\Entity\Courier $courier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCourier', [$courier]);

        return parent::removeCourier($courier);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourier', []);

        return parent::getCourier();
    }

    /**
     * {@inheritDoc}
     */
    public function addParticipante(\Incentives\RedencionesBundle\Entity\Participantes $participantes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParticipante', [$participantes]);

        return parent::addParticipante($participantes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParticipante(\Incentives\RedencionesBundle\Entity\Participantes $participantes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParticipante', [$participantes]);

        return parent::removeParticipante($participantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipantes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipantes', []);

        return parent::getParticipantes();
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
