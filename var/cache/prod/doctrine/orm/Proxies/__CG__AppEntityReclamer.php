<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reclamer extends \App\Entity\Reclamer implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'objet', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'corps', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'professeur', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'ufr', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'filiere', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'objet', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'corps', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'professeur', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'dateCreation', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'ufr', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'filiere', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'niveau', '' . "\0" . 'App\\Entity\\Reclamer' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reclamer $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getObjet(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjet', []);

        return parent::getObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setObjet(string $objet): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObjet', [$objet]);

        return parent::setObjet($objet);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorps(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorps', []);

        return parent::getCorps();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorps(string $corps): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorps', [$corps]);

        return parent::setCorps($corps);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfesseur(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfesseur', []);

        return parent::getProfesseur();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfesseur(string $professeur): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfesseur', [$professeur]);

        return parent::setProfesseur($professeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation(\DateTimeInterface $dateCreation): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getUfr(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUfr', []);

        return parent::getUfr();
    }

    /**
     * {@inheritDoc}
     */
    public function setUfr(string $ufr): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUfr', [$ufr]);

        return parent::setUfr($ufr);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiliere(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiliere', []);

        return parent::getFiliere();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiliere(string $filiere): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiliere', [$filiere]);

        return parent::setFiliere($filiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getNiveau(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNiveau', []);

        return parent::getNiveau();
    }

    /**
     * {@inheritDoc}
     */
    public function setNiveau(string $niveau): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNiveau', [$niveau]);

        return parent::setNiveau($niveau);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\Reclamer
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}
