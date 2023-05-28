<?php

declare(strict_types=1);

namespace Webinertia\ThemeManager;

final class Module
{
    public function getConfig(): array
    {
        $configProvider = new ConfigProvider();
        return [
            'laminas-cli'     => $configProvider->getCliConfig(),
            'service_manager' => $configProvider->getDependencyConfig(),
            'listeners'       => $configProvider->getListenerConfig(),
            'view_manager'    => $configProvider->getViewManagerConfig(),
        ];
    }
}
