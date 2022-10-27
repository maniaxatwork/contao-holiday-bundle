<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'AuthenticationHandlerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'scheb'.\DIRECTORY_SEPARATOR.'2fa-trusted-device'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'TwoFactor'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'TrustedDeviceHandler.php';
class TrustedDeviceHandler_d0544bf extends \Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdbe75 = null;
    private $initializer3a454 = null;
    private static $publicProperties01673 = [
        
    ];
    public function beginTwoFactorAuthentication(\Scheb\TwoFactorBundle\Security\TwoFactor\AuthenticationContextInterface $context) : \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'beginTwoFactorAuthentication', array('context' => $context), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return $this->valueHolderdbe75->beginTwoFactorAuthentication($context);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $instance, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($instance);
        $instance->initializer3a454 = $initializer;
        return $instance;
    }
    public function __construct(\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\AuthenticationHandlerInterface $authenticationHandler, \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceManagerInterface $trustedDeviceManager, bool $extendTrustedToken)
    {
        static $reflection;
        if (! $this->valueHolderdbe75) {
            $reflection = $reflection ?? new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
            $this->valueHolderdbe75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($this);
        }
        $this->valueHolderdbe75->__construct($authenticationHandler, $trustedDeviceManager, $extendTrustedToken);
    }
    public function & __get($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__get', ['name' => $name], $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        if (isset(self::$publicProperties01673[$name])) {
            return $this->valueHolderdbe75->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdbe75;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdbe75;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__isset', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdbe75;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__unset', array('name' => $name), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $realInstanceReflection = new \ReflectionClass('Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdbe75;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdbe75;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__clone', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        $this->valueHolderdbe75 = clone $this->valueHolderdbe75;
    }
    public function __sleep()
    {
        $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, '__sleep', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
        return array('valueHolderdbe75');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Scheb\TwoFactorBundle\Security\TwoFactor\Handler\TrustedDeviceHandler $instance) {
            unset($instance->authenticationHandler, $instance->trustedDeviceManager, $instance->extendTrustedToken);
        }, $this, 'Scheb\\TwoFactorBundle\\Security\\TwoFactor\\Handler\\TrustedDeviceHandler')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3a454 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3a454;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer3a454 && ($this->initializer3a454->__invoke($valueHolderdbe75, $this, 'initializeProxy', array(), $this->initializer3a454) || 1) && $this->valueHolderdbe75 = $valueHolderdbe75;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdbe75;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdbe75;
    }
}
