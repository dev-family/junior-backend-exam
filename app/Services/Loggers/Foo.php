<?php


namespace App\Services\Loggers;


use Psr\Log\LoggerInterface;

class Foo
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function log()
    {
        $this->logger->info('Foo!'); // должен писать в storage/logs/foo.log
    }
}
