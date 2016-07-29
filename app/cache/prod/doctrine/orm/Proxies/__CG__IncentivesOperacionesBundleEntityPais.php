<?php

namespace Proxies\__CG__\Incentives\OperacionesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pais extends \Incentives\OperacionesBundle\Entity\Pais implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'nombre', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'latitud', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'longitud', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'poligono', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'zoom', 'departamentos', 'proveedores', 'catalogo', 'ordencompra', 'planilla', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'fechaModificacion', 'usuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'id', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'nombre', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'latitud', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'longitud', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'poligono', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'zoom', 'departamentos', 'proveedores', 'catalogo', 'ordencompra', 'planilla', '' . "\0" . 'Incentives\\OperacionesBundle\\Entity\\Pais' . "\0" . 'fechaModificacion', 'usuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pais $proxy) {
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
    public function setLatitud($latitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitud', [$latitud]);

        return parent::setLatitud($latitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitud', []);

        return parent::getLatitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitud($longitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitud', [$longitud]);

        return parent::setLongitud($longitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitud', []);

        return parent::getLongitud();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoligono($poligono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoligono', [$poligono]);

        return parent::setPoligono($poligono);
    }

    /**
     * {@inheritDoc}
     */
    public function getPoligono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoligono', []);

        return parent::getPoligono();
    }

    /**
     * {@inheritDoc}
     */
    public function setZoom($zoom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setZoom', [$zoom]);

        return parent::setZoom($zoom);
    }

    /**
     * {@inheritDoc}
     */
    public function getZoom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getZoom', []);

        return parent::getZoom();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepartamento(\Incentives\OperacionesBundle\Entity\Departamento $departamentos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepartamento', [$departamentos]);

        return parent::addDepartamento($departamentos);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepartamento(\Incentives\OperacionesBundle\Entity\Departamento $departamentos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepartamento', [$departamentos]);

        return parent::removeDepartamento($departamentos);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartamentos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartamentos', []);

        return parent::getDepartamentos();
    }

    /**
     * {@inheritDoc}
     */
    public function addCatalogo(\Incentives\CatalogoBundle\Entity\Catalogos $catalogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCatalogo', [$catalogo]);

        return parent::addCatalogo($catalogo);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCatalogo(\Incentives\CatalogoBundle\Entity\Catalogos $catalogo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCatalogo', [$catalogo]);

        return parent::removeCatalogo($catalogo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCatalogo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCatalogo', []);

        return parent::getCatalogo();
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
