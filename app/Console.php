<?php

namespace PanoCLI;

require_once 'command/Serve.php';
require_once 'command/DevelopmentMode.php';

use CLIFramework\Application;
use PanoCLI\Command\DevelopmentMode;
use PanoCLI\Command\Serve;

class Console extends Application
{
    const NAME = 'Pano CLI';
    const VERSION = '1.0.0';

    /* init your application options here */
    public function options($opts)
    {
    }

    /* register your command here */
    public function init()
    {
        parent::init();

        $this->command('serve', Serve::class);
        $this->command('developmentMode', DevelopmentMode::class);
    }
}