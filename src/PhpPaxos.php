<?php
/**
 * Created by PhpStorm.
 * User: mouthliu
 * Date: 17-7-30
 * Time: 上午1:01
 */

namespace PhpPaxos;

use Psr\Log\LogLevel;

class PhpPaxos
{
    public $logger;

    public function __construct()
    {
        $this->logger = new Logger();
    }

    public function show()
    {
        $this->logger->log(LogLevel::DEBUG, "test");
    }
}