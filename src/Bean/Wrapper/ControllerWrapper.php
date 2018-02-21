<?php

namespace Swoft\Rpc\Client\Bean\Wrapper;

use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Value;
use Swoft\Rpc\Client\Bean\Annotation\Reference;

/**
 * The wrapper of controller
 */
class ControllerWrapper extends \Swoft\Http\Server\Bean\Wrapper\ControllerWrapper
{
    /**
     * 属性注解
     *
     * @var array
     */
    protected $propertyAnnotations = [
        Inject::class,
        Value::class,
        Reference::class
    ];

    /**
     * 是否解析属性注解
     *
     * @param array $annotations
     *
     * @return bool
     */
    public function isParsePropertyAnnotations(array $annotations): bool
    {
        $parent = parent::isParsePropertyAnnotations($annotations);

        return $parent || isset($annotations[Reference::class]);
    }
}