<?php
class FizzBuzz
{

private function translate($number)
{    
        if ($number % 15 === 0) {
            return 'FizzBuzz';
        }

        if ($number % 3 === 0) {
            return 'Fizz';
        }

        if ($number % 5 === 0) {
            return 'Buzz';
        }

        return $number;
    }

        public function list($max){
            $results = [];
             for ($number = 1; $number <= $max; $number++) {
                    array_push($results,$this->translate($number));
             }
             
              return $results;
            
            }        
}


?>
