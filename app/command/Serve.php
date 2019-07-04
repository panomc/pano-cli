<?php

namespace PanoCLI\Command;

use CLIFramework\Command;

class Serve extends Command
{


    public function brief()
    {
        return 'Start Pano web server';
    }

    function init()
    {
        // register your subcommand here ..
    }

    function options($opts)
    {
        $opts->add('p|port:', 'option requires a value.')->isa('String');
        $opts->add('h|host:', 'option requires a value.')->isa('String');
    }


    function execute()
    {
        global $running;

        $logger = $this->logger;

        $options = [
            'port' => 8088,
            'host' => '0.0.0.0'
        ];

        if (isset($this->options->port)) {
            $options['port'] = $this->options->port;
        }

        if (isset($this->options->host)) {
            $options['host'] = $this->options->host;
        }

        printf('Running PHP server on: ' . $options['host'] . ':' . $options['port'] . '%s', PHP_EOL);

        echo exec('php -S ' . $options['host'] . ':' . $options['port'] . ' ' . PANO_ROOT . '/index.php');

        exit(1);
    }
}