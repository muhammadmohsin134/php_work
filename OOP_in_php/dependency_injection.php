<?php
class logger{
    public function log($message){
        echo "logging message : $message";
    }
}

class userprofile{
    public function createUser(){
        // $logger = new logger();
        $this->logger->log("user created.");
    }
    public function updateUser(){
        // $logger = new logger();
        $this->logger->log("user updated.");
    }
    public function deleteUser(){
        // $logger = new logger();
        $this->logger->log("user deleted.");
    }
    public function __construct(logger $logg){
        $this->logger = new logger();
    }
}
$logger =new logger();
$profile = new userprofile($logger);
$profile->createUser();
$profile->updateUser();
$profile->deleteUser();