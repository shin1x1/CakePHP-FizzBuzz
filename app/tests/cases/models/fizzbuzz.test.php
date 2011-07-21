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

  public function test_makeFizzBuzzText_1() {
    $this->assertEqual(1, $this->obj->makeFizzBuzzText(1));
  }

  public function test_makeFizzBuzzText_2() {
    $this->assertEqual(2, $this->obj->makeFizzBuzzText(2));
  }

  public function test_makeFizzBuzzText_3() {
    $this->assertEqual('Fizz', $this->obj->makeFizzBuzzText(3));
  }

  public function test_makeFizzBuzzText_5() {
    $this->assertEqual('Buzz', $this->obj->makeFizzBuzzText(5));
  }

  public function test_makeFizzBuzzText_15() {
    $this->assertEqual('FizzBuzz', $this->obj->makeFizzBuzzText(15));
  }
}
