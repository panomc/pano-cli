<?php

namespace PanoCLI;

use CLIFramework\Application;

class Console extends Application
{

    /* init your application options here */
    public function options($opts)
    {
        $opts->add('v|verbose', 'verbose message');
        $opts->add('path:', 'required option with a value.');
        $opts->add('path?', 'optional option with a value');
        $opts->add('path+', 'multiple value option.');
    }

    /* register your command here */
    public function init()
    {
        parent::init();

        require_once 'command/Serve.php';

        $this->command('serve', '\PanoCLI\Command\Serve');
//        $this->command( 'foo', '\Command\FooCommand' );
//        $this->command( 'bar' );    // initialize with \YourApp\Command\BarCommand
    }

}