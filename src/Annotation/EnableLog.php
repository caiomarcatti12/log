<?php

namespace CaioMarcatti12\Logger\Annotation;

use Attribute;
use CaioMarcatti12\Core\Modules\Modules;
use CaioMarcatti12\Core\Modules\ModulesEnum;
use CaioMarcatti12\Logger\Adapter\MonologAdapter;

#[Attribute(Attribute::TARGET_CLASS)]
class EnableLog
{
    private string $adapter = '';

    public function __construct(string $adapter = MonologAdapter::class)
    {
        Modules::enable(ModulesEnum::LOG);
        $this->adapter = $adapter;
    }

    public function getAdapter(): string
    {
        return $this->adapter;
    }
}