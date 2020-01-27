<?php


namespace App;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LogManager
{
    private $logger;

    public function __construct()
    {
        $this->logger = new Logger('App');
        $this->logger->pushHandler(new StreamHandler(dirname(__DIR__) . '/cache/logs/dev.log'));
    }

    public function info(string $msg)
    {
        $this->logger->info($msg);
    }

    public function warning(string $msg)
    {
        $this->logger->warning($msg);
    }

    public function error(string $msg)
    {
        $this->logger->error($msg);
    }

    public function getLogger():Logger
    {
        return $this->logger;
    }
}