<?php

namespace Proxies\__CG__\Incentives\SolicitudesBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Solicitud extends \Incentives\SolicitudesBundle\Entity\Solicitud implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'id', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'descripcion', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'archivo', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'ordenDespacho', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'titulo', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'mantis', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'fechaSolicitud', 'convocatoria', 'cotizacion', 'ordencompra', 'planilla', 'tipo', 'prioridad', 'programa', 'estado', 'asignar', 'solicitante', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'observacionesSolicitante', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'observacionesOperaciones', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'fechaModificacion', 'usuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'id', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'descripcion', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'archivo', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'ordenDespacho', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'titulo', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'mantis', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'fechaSolicitud', 'convocatoria', 'cotizacion', 'ordencompra', 'planilla', 'tipo', 'prioridad', 'programa', 'estado', 'asignar', 'solicitante', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'observacionesSolicitante', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'observacionesOperaciones', '' . "\0" . 'Incentives\\SolicitudesBundle\\Entity\\Solicitud' . "\0" . 'fechaModificacion', 'usuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Solicitud $proxy) {
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
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchivo($archivo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchivo', [$archivo]);

        return parent::setArchivo($archivo);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchivo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchivo', []);

        return parent::getArchivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdenDespacho($ordenDespacho)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdenDespacho', [$ordenDespacho]);

        return parent::setOrdenDespacho($ordenDespacho);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdenDespacho()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdenDespacho', []);

        return parent::getOrdenDespacho();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', [$titulo]);

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', []);

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setMantis($mantis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMantis', [$mantis]);

        return parent::setMantis($mantis);
    }

    /**
     * {@inheritDoc}
     */
    public function getMantis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMantis', []);

        return parent::getMantis();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaSolicitud($fechaSolicitud)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaSolicitud', [$fechaSolicitud]);

        return parent::setFechaSolicitud($fechaSolicitud);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaSolicitud()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaSolicitud', []);

        return parent::getFechaSolicitud();
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
    public function addConvocatoria(\Incentives\OperacionesBundle\Entity\Convocatorias $convocatoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConvocatoria', [$convocatoria]);

        return parent::addConvocatoria($convocatoria);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConvocatoria(\Incentives\OperacionesBundle\Entity\Convocatorias $convocatoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConvocatoria', [$convocatoria]);

        return parent::removeConvocatoria($convocatoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getConvocatoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConvocatoria', []);

        return parent::getConvocatoria();
    }

    /**
     * {@inheritDoc}
     */
    public function addCotizacion(\Incentives\SolicitudesBundle\Entity\Cotizacion $cotizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCotizacion', [$cotizacion]);

        return parent::addCotizacion($cotizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCotizacion(\Incentives\SolicitudesBundle\Entity\Cotizacion $cotizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCotizacion', [$cotizacion]);

        return parent::removeCotizacion($cotizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCotizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCotizacion', []);

        return parent::getCotizacion();
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
    public function setTipo(\Incentives\SolicitudesBundle\Entity\SolicitudTipo $tipo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridad(\Incentives\SolicitudesBundle\Entity\Prioridad $prioridad = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridad', [$prioridad]);

        return parent::setPrioridad($prioridad);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridad', []);

        return parent::getPrioridad();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrograma(\Incentives\CatalogoBundle\Entity\Programa $programa = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrograma', [$programa]);

        return parent::setPrograma($programa);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrograma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrograma', []);

        return parent::getPrograma();
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

    /**
     * {@inheritDoc}
     */
    public function addAsignar(\Incentives\SolicitudesBundle\Entity\SolicitudesAsignar $asignar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAsignar', [$asignar]);

        return parent::addAsignar($asignar);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAsignar(\Incentives\SolicitudesBundle\Entity\SolicitudesAsignar $asignar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAsignar', [$asignar]);

        return parent::removeAsignar($asignar);
    }

    /**
     * {@inheritDoc}
     */
    public function getAsignar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAsignar', []);

        return parent::getAsignar();
    }

    /**
     * {@inheritDoc}
     */
    public function setSolicitante(\Incentives\BaseBundle\Entity\Usuario $solicitante = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSolicitante', [$solicitante]);

        return parent::setSolicitante($solicitante);
    }

    /**
     * {@inheritDoc}
     */
    public function getSolicitante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSolicitante', []);

        return parent::getSolicitante();
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
    public function setObservacionesSolicitante($observacionesSolicitante)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacionesSolicitante', [$observacionesSolicitante]);

        return parent::setObservacionesSolicitante($observacionesSolicitante);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacionesSolicitante()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacionesSolicitante', []);

        return parent::getObservacionesSolicitante();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservacionesOperaciones($observacionesOperaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservacionesOperaciones', [$observacionesOperaciones]);

        return parent::setObservacionesOperaciones($observacionesOperaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservacionesOperaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservacionesOperaciones', []);

        return parent::getObservacionesOperaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(\Incentives\SolicitudesBundle\Entity\SolicitudesEstado $estado = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

}
