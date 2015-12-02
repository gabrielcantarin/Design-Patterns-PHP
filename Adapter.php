<?php 
class Facebook {
 
    public function updateStatus($msg) {
        echo $msg;
    }
}

class facebookAdapter implements socialAdapter {
 
    private $facebook;
 
    public function __construct(Facebook $facebook) {
        $this->facebook = $facebook;
    }
 
    public function send($msg) {
        $this->facebook->updateStatus($msg);
    }
}

$facebook = new facebookAdapter(new Facebook());
$facebook->send('Posting to Facebook');