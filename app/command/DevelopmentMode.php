<?php

namespace PanoCLI\Command;

use CLIFramework\Command;

class DevelopmentMode extends Command
{
    public function brief()
    {
        return 'Change Pano development mode';
    }

    function init()
    {
    }

    function execute($arg1 = '')
    {
        $logger = $this->logger;

        $developmentMode = false;

        require PANO_APP_ROOT . 'config/config-loader.php';

        load_config();

        $toggleDevelopmentMode = false;

        if (strcasecmp($arg1, 't') === 0 || strcasecmp($arg1, 'true') === 0) {
            $developmentMode = true;
        } else if (strcasecmp($arg1, 'f') === 0 || strcasecmp($arg1, 'false') === 0) {
            $developmentMode = false;
        } else {
            global $config;

            $config['developmentMode'] = !$config['developmentMode'];

            $toggleDevelopmentMode = true;
        }

        if (!$toggleDevelopmentMode) {
            $config['developmentMode'] = $developmentMode;
        }

        save_config();

        if ($config['developmentMode']) {
            $logger->info('Development Mode is opened.');
        } else {
            $logger->info('Development Mode is closed.');
        }
    }
}