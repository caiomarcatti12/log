<?php

namespace CaioMarcatti12\Logger\Resolver;

use CaioMarcatti12\Core\Bean\Annotation\AnnotationResolver;
use CaioMarcatti12\Core\Bean\Interfaces\ClassResolverInterface;
use CaioMarcatti12\Core\Bean\Objects\BeanProxy;
use CaioMarcatti12\Logger\Annotation\EnableLog;
use CaioMarcatti12\Logger\Interfaces\LogInterface;
use ReflectionClass;

#[AnnotationResolver(EnableLog::class)]
class EnableLogResolver implements ClassResolverInterface
{
    public function handler(object &$instance): void
    {
        $reflectionClass = new ReflectionClass($instance);

        $attributes = $reflectionClass->getAttributes(EnableLog::class);

        /** @var EnableLog $attribute */
        $attribute = ($attributes[0]->newInstance());

        BeanProxy::add(LogInterface::class, $attribute->getAdapter());
    }
}