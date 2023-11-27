<?php

class Logger 
{
    private static $instance = null;
    private $logs = [];

    private function __construct() {}

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function log(string $message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $logEntry = "[LOG] warning: [$timestamp] $message";
        $this->logs = [$logEntry];
    }

    public function getLogs()
    {
        return $this->logs;
    }
}