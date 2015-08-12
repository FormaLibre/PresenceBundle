<?php

namespace FormaLibre\PresenceBundle;

use Claroline\CoreBundle\Library\PluginBundle;
use Claroline\KernelBundle\Bundle\ConfigurationBuilder;

class FormaLibrePresenceBundle extends PluginBundle
{
    public function getConfiguration($environment)
    {
        $config = new ConfigurationBuilder();

        return $config->addRoutingResource(__DIR__ . '/Resources/config/routing.yml', null, 'presence');
    }
    
    public function hasMigrations()
    {
        return true;
    }
    
}