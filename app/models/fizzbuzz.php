<?php
class Fizzbuzz extends AppModel {
  public $useTable = false;

  /**
   * FizzBuzz テキスト表現を作成
   *
   * @param integer $i
   * @return string
   */
  public static function makeFizzBuzzText($i) {
    if ($i % 3 === 0 && $i % 5 === 0) {
      return 'FizzBuzz';
    } else if ($i % 3 === 0) {
      return 'Fizz';
    } else if ($i % 5 === 0) {
      return 'Buzz';
    } else {
      return strval($i);
    }   
  }
}
