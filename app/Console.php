<?php

namespace PanoCLI;

require_once 'command/Serve.php';

use CLIFramework\Application;
use PanoCLI\Command\Serve;

class Console extends Application
{

    /* init your application options here */
    public function options($opts)
    {
    }

    /* register your command here */
    public function init()
    {
        parent::init();

        $this->command('serve', Serve::class);
    }

}