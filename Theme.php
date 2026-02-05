<?php

namespace CMW\Theme\Warlands;

use CMW\Manager\Env\EnvManager;
use CMW\Manager\Theme\IThemeConfigV2;

class Theme implements IThemeConfigV2
{
    public function name(): string
    {
        return 'Warlands';
    }

    public function version(): string
    {
        return '0.0.1';
    }

    public function cmwVersion(): string
    {
        return 'alpha-05';
    }

    public function authors(): array
    {
        return ['Zomb'];
    }

    public function compatiblesPackages(): array
    {
        return [];
    }

    public function requiredPackages(): array
    {
        return ['Core', 'Users'];
    }

    public function imageLink(): ?string
    {
        return EnvManager::getInstance()->getValue('PATH_SUBFOLDER').'Public/Themes/'.$this->name().'/Assets/default.png';
    }
}
