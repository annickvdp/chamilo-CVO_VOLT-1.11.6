<?php

namespace DoctrineProxies\__CG__\Chamilo\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ExtraField extends \Chamilo\CoreBundle\Entity\ExtraField implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'extraFieldType', 'fieldType', 'variable', 'displayText', 'defaultValue', 'fieldOrder', 'visibleToSelf', 'visibleToOthers', 'changeable', 'filter', 'options', 'createdAt', 'type', 'name', 'configuration', 'updatedAt', 'translations', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
        }

        return ['__isInitialized__', 'id', 'extraFieldType', 'fieldType', 'variable', 'displayText', 'defaultValue', 'fieldOrder', 'visibleToSelf', 'visibleToOthers', 'changeable', 'filter', 'options', 'createdAt', 'type', 'name', 'configuration', 'updatedAt', 'translations', 'currentLocale', 'currentTranslation', 'fallbackLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ExtraField $proxy) {
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
    public function getExtraFieldType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtraFieldType', []);

        return parent::getExtraFieldType();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtraFieldType($extraFieldType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtraFieldType', [$extraFieldType]);

        return parent::setExtraFieldType($extraFieldType);
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldType', []);

        return parent::getFieldType();
    }

    /**
     * {@inheritDoc}
     */
    public function setFieldType($fieldType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFieldType', [$fieldType]);

        return parent::setFieldType($fieldType);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariable', []);

        return parent::getVariable();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariable($variable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariable', [$variable]);

        return parent::setVariable($variable);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayText($translated = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayText', [$translated]);

        return parent::getDisplayText($translated);
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayText($displayText)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayText', [$displayText]);

        return parent::setDisplayText($displayText);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultValue', []);

        return parent::getDefaultValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultValue($defaultValue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultValue', [$defaultValue]);

        return parent::setDefaultValue($defaultValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldOrder', []);

        return parent::getFieldOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setFieldOrder($fieldOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFieldOrder', [$fieldOrder]);

        return parent::setFieldOrder($fieldOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function isChangeable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isChangeable', []);

        return parent::isChangeable();
    }

    /**
     * {@inheritDoc}
     */
    public function setChangeable($changeable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChangeable', [$changeable]);

        return parent::setChangeable($changeable);
    }

    /**
     * {@inheritDoc}
     */
    public function isFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFilter', []);

        return parent::isFilter();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilter($filter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilter', [$filter]);

        return parent::setFilter($filter);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisibleToSelf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisibleToSelf', []);

        return parent::isVisibleToSelf();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibleToSelf($visibleToSelf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibleToSelf', [$visibleToSelf]);

        return parent::setVisibleToSelf($visibleToSelf);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisibleToOthers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisibleToOthers', []);

        return parent::isVisibleToOthers();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibleToOthers($visibleToOthers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibleToOthers', [$visibleToOthers]);

        return parent::setVisibleToOthers($visibleToOthers);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeToString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeToString', []);

        return parent::getTypeToString();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPresentation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPresentation', []);

        return parent::getPresentation();
    }

    /**
     * {@inheritDoc}
     */
    public function setPresentation($presentation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPresentation', [$presentation]);

        return parent::setPresentation($presentation);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfiguration', []);

        return parent::getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfiguration(array $configuration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfiguration', [$configuration]);

        return parent::setConfiguration($configuration);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation(\Sylius\Component\Translation\Model\TranslationInterface $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation(\Sylius\Component\Translation\Model\TranslationInterface $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTranslation(\Sylius\Component\Translation\Model\TranslationInterface $translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTranslation', [$translation]);

        return parent::hasTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale($currentLocale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$currentLocale]);

        return parent::setCurrentLocale($currentLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentLocale', []);

        return parent::getCurrentLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentTranslation(\Sylius\Component\Translation\Model\TranslationInterface $currentTranslation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentTranslation', [$currentTranslation]);

        return parent::setCurrentTranslation($currentTranslation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentTranslation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentTranslation', []);

        return parent::getCurrentTranslation();
    }

    /**
     * {@inheritDoc}
     */
    public function setFallbackLocale($fallbackLocale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFallbackLocale', [$fallbackLocale]);

        return parent::setFallbackLocale($fallbackLocale);
    }

    /**
     * {@inheritDoc}
     */
    public function getFallbackLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFallbackLocale', []);

        return parent::getFallbackLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function translate($locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'translate', [$locale]);

        return parent::translate($locale);
    }

}
