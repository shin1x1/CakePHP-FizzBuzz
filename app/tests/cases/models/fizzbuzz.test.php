<?php
App::import('Fizzbuzz', 'Model');

class FizzBuzzTestCase extends CakeTestCase {
  public $obj = null;

  public function startTest() {
    $this->obj = ClassRegistry::init('Fizzbuzz');
  }

  public function endTest() {
    $this->obj = null;
  }

  public function test_makeFizzBuzzText() {
    $this->assertEqual(1, $this->obj->makeFizzBuzzText(1));
  }
}
