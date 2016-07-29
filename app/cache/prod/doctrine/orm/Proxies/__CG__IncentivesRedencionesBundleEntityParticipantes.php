<?php

namespace Proxies\__CG__\Incentives\RedencionesBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Participantes extends \Incentives\RedencionesBundle\Entity\Participantes implements \Doctrine\ORM\Proxy\Proxy
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

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setDocumento($documento)
    {
        $this->__load();
        return parent::setDocumento($documento);
    }

    public function getDocumento()
    {
        $this->__load();
        return parent::getDocumento();
    }

    public function setDireccion($direccion)
    {
        $this->__load();
        return parent::setDireccion($direccion);
    }

    public function getDireccion()
    {
        $this->__load();
        return parent::getDireccion();
    }

    public function setTelefono($telefono)
    {
        $this->__load();
        return parent::setTelefono($telefono);
    }

    public function getTelefono()
    {
        $this->__load();
        return parent::getTelefono();
    }

    public function setCelular($celular)
    {
        $this->__load();
        return parent::setCelular($celular);
    }

    public function getCelular()
    {
        $this->__load();
        return parent::getCelular();
    }

    public function setBarrio($barrio)
    {
        $this->__load();
        return parent::setBarrio($barrio);
    }

    public function getBarrio()
    {
        $this->__load();
        return parent::getBarrio();
    }

    public function setFechaCreacion($fechaCreacion)
    {
        $this->__load();
        return parent::setFechaCreacion($fechaCreacion);
    }

    public function getFechaCreacion()
    {
        $this->__load();
        return parent::getFechaCreacion();
    }

    public function setEstado($estado)
    {
        $this->__load();
        return parent::setEstado($estado);
    }

    public function getEstado()
    {
        $this->__load();
        return parent::getEstado();
    }

    public function setLlave($llave)
    {
        $this->__load();
        return parent::setLlave($llave);
    }

    public function getLlave()
    {
        $this->__load();
        return parent::getLlave();
    }

    public function setTipodocumento(\Incentives\OperacionesBundle\Entity\Tipodocumento $tipodocumento = NULL)
    {
        $this->__load();
        return parent::setTipodocumento($tipodocumento);
    }

    public function getTipodocumento()
    {
        $this->__load();
        return parent::getTipodocumento();
    }

    public function setPrograma(\Incentives\CatalogoBundle\Entity\Programa $programa = NULL)
    {
        $this->__load();
        return parent::setPrograma($programa);
    }

    public function getPrograma()
    {
        $this->__load();
        return parent::getPrograma();
    }

    public function setParticipanteestado(\Incentives\RedencionesBundle\Entity\Participantesestado $participanteestado = NULL)
    {
        $this->__load();
        return parent::setParticipanteestado($participanteestado);
    }

    public function getParticipanteestado()
    {
        $this->__load();
        return parent::getParticipanteestado();
    }

    public function setCiudad(\Incentives\OperacionesBundle\Entity\Ciudad $ciudad = NULL)
    {
        $this->__load();
        return parent::setCiudad($ciudad);
    }

    public function getCiudad()
    {
        $this->__load();
        return parent::getCiudad();
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

    public function setCiudadNombre($ciudadNombre)
    {
        $this->__load();
        return parent::setCiudadNombre($ciudadNombre);
    }

    public function getCiudadNombre()
    {
        $this->__load();
        return parent::getCiudadNombre();
    }

    public function setCorreo($correo)
    {
        $this->__load();
        return parent::setCorreo($correo);
    }

    public function getCorreo()
    {
        $this->__load();
        return parent::getCorreo();
    }

    public function setParticipante($participante)
    {
        $this->__load();
        return parent::setParticipante($participante);
    }

    public function getParticipante()
    {
        $this->__load();
        return parent::getParticipante();
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


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'participante', 'documento', 'ciudadNombre', 'direccion', 'telefono', 'celular', 'correo', 'barrio', 'fechaCreacion', 'estado', 'llave', 'fechaModificacion', 'tipodocumento', 'programa', 'participanteestado', 'ciudad', 'redencion', 'usuario');
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