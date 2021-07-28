<?php
namespace Numbers;

class Numbers
{
    public function apply($input)
    {
    	if ($input == 1) {
    		return -1;
    	}

    	$primes = [];
        for ($i = 1; $i <= $input; $i++) {
        	$divisors = 0;

        	for ($j = 1; $j <= $i; $j++) {
        		if ($i % $j == 0) {
        			$divisors++;
        		}
        	}

        	if ($divisors == 2) {
        		$primes[] = $i;
        	}
        }

        return $primes;
    }
}
