<?php
App::import('Model', 'Fizzbuzz');

class FizzBuzzTestCase extends CakeTestCase {
  public function test_makeFizzBuzzText_1() {
    $ret = Fizzbuzz::makeFizzBuzzText(1);
    $this->assertEqual(1, $ret);
  }

  public function test_makeFizzBuzzText_2() {
    $ret = Fizzbuzz::makeFizzBuzzText(2);
    $this->assertEqual(2, $ret);
  }

  public function test_makeFizzBuzzText_3() {
    $ret = Fizzbuzz::makeFizzBuzzText(3);
    $this->assertEqual('Fizz', $ret);
  }

  public function test_makeFizzBuzzText_5() {
    $ret = Fizzbuzz::makeFizzBuzzText(5);
    $this->assertEqual('Buzz', $ret);
  }

  public function test_makeFizzBuzzText_15() {
    $this->assertEqual('FizzBuzz', Fizzbuzz::makeFizzBuzzText(15));
  }
}
