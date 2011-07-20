<?php
class FizzbuzzController extends AppController {
  public $uses = array();

  public function index() {
    for ($i = 1 ; $i <= 100 ; $i++) {
      if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz<br />';
      } else if ($i % 3 === 0) {
        echo 'Fizz<br />';
      } else if ($i % 5 === 0) {
        echo 'Buzz<br />';
      } else {
        echo $i.'<br />';
      }   
    }   
    exit;
  }
}
