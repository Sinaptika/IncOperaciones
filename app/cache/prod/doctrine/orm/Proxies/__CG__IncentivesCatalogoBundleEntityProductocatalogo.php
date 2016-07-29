<?php

namespace Proxies\__CG__\Incentives\CatalogoBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Productocatalogo extends \Incentives\CatalogoBundle\Entity\Productocatalogo implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setActivo($activo)
    {
        $this->__load();
        return parent::setActivo($activo);
    }

    public function getActivo()
    {
        $this->__load();
        return parent::getActivo();
    }

    public function setPuntos($puntos)
    {
        $this->__load();
        return parent::setPuntos($puntos);
    }

    public function getPuntos()
    {
        $this->__load();
        return parent::getPuntos();
    }

    public function setActualizacion($actualizacion)
    {
        $this->__load();
        return parent::setActualizacion($actualizacion);
    }

    public function getActualizacion()
    {
        $this->__load();
        return parent::getActualizacion();
    }

    public function setProducto(\Incentives\CatalogoBundle\Entity\Producto $producto = NULL)
    {
        $this->__load();
        return parent::setProducto($producto);
    }

    public function getProducto()
    {
        $this->__load();
        return parent::getProducto();
    }

    public function setCatalogos(\Incentives\CatalogoBundle\Entity\Catalogos $catalogos = NULL)
    {
        $this->__load();
        return parent::setCatalogos($catalogos);
    }

    public function getCatalogos()
    {
        $this->__load();
        return parent::getCatalogos();
    }

    public function addRedencion(\Incentives\RedencionesBundle\Entity\Redenciones $redencion)
    {
        $this->__load();
        return parent::addRedencion($redencion);
    }

    public function removeRedencion(\Incentives\RedencionesBundle\Entity\Redenciones $redencion)
    {
        $this->__load();
        return parent::removeRedencion($redencion);
    }

    public function getRedencion()
    {
        $this->__load();
        return parent::getRedencion();
    }

    public function setPrecio($precio)
    {
        $this->__load();
        return parent::setPrecio($precio);
    }

    public function getPrecio()
    {
        $this->__load();
        return parent::getPrecio();
    }

    public function setIncremento($incremento)
    {
        $this->__load();
        return parent::setIncremento($incremento);
    }

    public function getIncremento()
    {
        $this->__load();
        return parent::getIncremento();
    }

    public function setLogistica($logistica)
    {
        $this->__load();
        return parent::setLogistica($logistica);
    }

    public function getLogistica()
    {
        $this->__load();
        return parent::getLogistica();
    }

    public function setCategoria(\Incentives\OperacionesBundle\Entity\Categoria $categoria = NULL)
    {
        $this->__load();
        return parent::setCategoria($categoria);
    }

    public function getCategoria()
    {
        $this->__load();
        return parent::getCategoria();
    }

    public function setEstado(\Incentives\CatalogoBundle\Entity\EstadoCatalogo $estado = NULL)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function setFechaModificacion($fechaModificacion)
    {
        $this->__load();
        return parent::setFechaModificacion($fechaModificacion);
    }

    public function getFechaModificacion()
    {
        $this->__load();
        return parent::getFechaModificacion();
    }

    public function setAproboOperaciones(\Incentives\CatalogoBundle\Entity\EstadoCatalogo $aproboOperaciones = NULL)
    {
        $this->__load();
        return parent::setAproboOperaciones($aproboOperaciones);
    }

    public function getAproboOperaciones()
    {
        $this->__load();
        return parent::getAproboOperaciones();
    }

    public function setOperacionesUsuario(\Incentives\BaseBundle\Entity\Usuario $operacionesUsuario = NULL)
    {
        $this->__load();
        return parent::setOperacionesUsuario($operacionesUsuario);
    }

    public function getOperacionesUsuario()
    {
        $this->__load();
        return parent::getOperacionesUsuario();
    }

    public function setAproboComercial(\Incentives\CatalogoBundle\Entity\EstadoCatalogo $aproboComercial = NULL)
    {
        $this->__load();
        return parent::setAproboComercial($aproboComercial);
    }

    public function getAproboComercial()
    {
        $this->__load();
        return parent::getAproboComercial();
    }

    public function setComercialUsuario(\Incentives\BaseBundle\Entity\Usuario $comercialUsuario = NULL)
    {
        $this->__load();
        return parent::setComercialUsuario($comercialUsuario);
    }

    public function getComercialUsuario()
    {
        $this->__load();
        return parent::getComercialUsuario();
    }

    public function setAproboDirector(\Incentives\CatalogoBundle\Entity\EstadoCatalogo $aproboDirector = NULL)
    {
        $this->__load();
        return parent::setAproboDirector($aproboDirector);
    }

    public function getAproboDirector()
    {
        $this->__load();
        return parent::getAproboDirector();
    }

    public function setDirectorUsuario(\Incentives\BaseBundle\Entity\Usuario $directorUsuario = NULL)
    {
        $this->__load();
        return parent::setDirectorUsuario($directorUsuario);
    }

    public function getDirectorUsuario()
    {
        $this->__load();
        return parent::getDirectorUsuario();
    }

    public function setAproboCliente(\Incentives\CatalogoBundle\Entity\EstadoCatalogo $aproboCliente = NULL)
    {
        $this->__load();
        return parent::setAproboCliente($aproboCliente);
    }

    public function getAproboCliente()
    {
        $this->__load();
        return parent::getAproboCliente();
    }

    public function setClienteUsuario(\Incentives\BaseBundle\Entity\Usuario $clienteUsuario = NULL)
    {
        $this->__load();
        return parent::setClienteUsuario($clienteUsuario);
    }

    public function getClienteUsuario()
    {
        $this->__load();
        return parent::getClienteUsuario();
    }

    public function setUsuario(\Incentives\BaseBundle\Entity\Usuario $usuario = NULL)
    {
        $this->__load();
        return parent::setUsuario($usuario);
    }

    public function getUsuario()
    {
        $this->__load();
        return parent::getUsuario();
    }

    public function setPuntosTemporal($puntosTemporal)
    {
        $this->__load();
        return parent::setPuntosTemporal($puntosTemporal);
    }

    public function getPuntosTemporal()
    {
        $this->__load();
        return parent::getPuntosTemporal();
    }

    public function setPrecioTemporal($precioTemporal)
    {
        $this->__load();
        return parent::setPrecioTemporal($precioTemporal);
    }

    public function getPrecioTemporal()
    {
        $this->__load();
        return parent::getPrecioTemporal();
    }

    public function setIncrementoTemporal($incrementoTemporal)
    {
        $this->__load();
        return parent::setIncrementoTemporal($incrementoTemporal);
    }

    public function getIncrementoTemporal()
    {
        $this->__load();
        return parent::getIncrementoTemporal();
    }

    public function setLogisticaTemporal($logisticaTemporal)
    {
        $this->__load();
        return parent::setLogisticaTemporal($logisticaTemporal);
    }

    public function getLogisticaTemporal()
    {
        $this->__load();
        return parent::getLogisticaTemporal();
    }

    public function setAgotado($agotado)
    {
        $this->__load();
        return parent::setAgotado($agotado);
    }

    public function getAgotado()
    {
        $this->__load();
        return parent::getAgotado();
    }

    public function addProductocatalogoHistorico(\Incentives\CatalogoBundle\Entity\ProductocatalogoHistorico $productocatalogoHistorico)
    {
        $this->__load();
        return parent::addProductocatalogoHistorico($productocatalogoHistorico);
    }

    public function removeProductocatalogoHistorico(\Incentives\CatalogoBundle\Entity\ProductocatalogoHistorico $productocatalogoHistorico)
    {
        $this->__load();
        return parent::removeProductocatalogoHistorico($productocatalogoHistorico);
    }

    public function getProductocatalogoHistorico()
    {
        $this->__load();
        return parent::getProductocatalogoHistorico();
    }

    public function setEstadoAprobacion(\Incentives\CatalogoBundle\Entity\EstadoAprobacion $estadoAprobacion = NULL)
    {
        $this->__load();
        return parent::setEstadoAprobacion($estadoAprobacion);
    }

    public function getEstadoAprobacion()
    {
        $this->__load();
        return parent::getEstadoAprobacion();
    }

    public function setFechaInactivacion($fechaInactivacion)
    {
        $this->__load();
        return parent::setFechaInactivacion($fechaInactivacion);
    }

    public function getFechaInactivacion()
    {
        $this->__load();
        return parent::getFechaInactivacion();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'activo', 'puntos', 'actualizacion', 'agotado', 'puntosTemporal', 'precioTemporal', 'incrementoTemporal', 'logisticaTemporal', 'precio', 'incremento', 'logistica', 'fechaInactivacion', 'fechaModificacion', 'producto', 'catalogos', 'categoria', 'redencion', 'productocatalogoHistorico', 'estado', 'estadoAprobacion', 'aproboOperaciones', 'operacionesUsuario', 'aproboComercial', 'comercialUsuario', 'aproboDirector', 'directorUsuario', 'aproboCliente', 'clienteUsuario', 'usuario');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}