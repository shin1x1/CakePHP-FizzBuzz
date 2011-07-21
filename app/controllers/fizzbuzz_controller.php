<?php
class FizzbuzzController extends AppController {
  public $uses = array('Fizzbuzz');

  public function index() {
    for ($i = 1 ; $i <= 100 ; $i++) {
      echo Fizzbuzz::makeFizzBuzzText($i).'<br />';
    }   
    exit;
  }
}
