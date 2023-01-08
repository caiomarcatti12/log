<?php

namespace CaioMarcatti12\Logger;

use CaioMarcatti12\Core\Factory\InstanceFactory;
use CaioMarcatti12\Core\Launcher\Annotation\Launcher;
use CaioMarcatti12\Core\Launcher\Enum\LauncherPriorityEnum;
use CaioMarcatti12\Core\Launcher\Interfaces\LauncherInterface;
use CaioMarcatti12\Core\Modules\Modules;
use CaioMarcatti12\Core\Modules\ModulesEnum;

#[Launcher(LauncherPriorityEnum::BEFORE_LOAD_APPLICATION)]
class Loader implements LauncherInterface
{
    public function handler(): void
    {
        if(Modules::isEnabled(ModulesEnum::LOG))
            InstanceFactory::createIfNotExists(Log::class);
    }
}