<?php

require_once 'Logger.php';

class RunLog
{
    public function runLog($user)
    {
        $logger = Logger::getInstance();
        $logtester = Logger::getInstance();
        $logger->log($user);
    
        $logs = $logger->getLogs();
    
        foreach ($logs as $log) {
            echo $log . PHP_EOL;
        }
    
        // echo "Teste Singleton: ";
        // var_dump($logger === $logtester);
    }
}