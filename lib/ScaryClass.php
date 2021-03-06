<?php
/**
 * ScaryClass
 *
 * PHP version 5.3
 *
 * @category LittleCodeShopOfHorrors
 * @package  Core
 * @author   Cris Bettis <cris.bettis@bettercarpeople.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link     http://g.lonefry.com
 */

/**
 * Class ScaryClass
 *
 * This is intentionally poorly formatted code for the purpose of education
 * Be afraid, be very afraid.
 *
 * What the developer was told that it really should do:
 *
 * Take in an array of client information that is end user generated (not clean)
 * Calculates insurance costs for users based on their responses.
 * Make the array it calculates retrievable.
 *
 * If for some reason data cannot be processed then the code should indicate a
 * failure and a reason for that failure.
 *
 * Preferred coding style standard for this application is PSR2
 *
 * @category LittleCodeShopOfHorrors/lib
 * @package  Core
 * @author   Cris Bettis <apt142@gmail.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link     http://g.lonefry.com
 */
class ScaryClass {

    private $dataset = array();

    function __construct($data = array()) {
        $this->dataset = $data;
    }

    function processSet($data) {
        foreach ($data as $d) {
            if ($d['extra'] == null) {
                $d['extra'] = 0;
            }
            $this->dataset[] = $d;
        }

        foreach ($this->dataset as $k => $v) {
            $cost = 100; // Base rate
            $bonus = 0;  // Additional flat fee
            $multiplier = 100; // multiplier of base rate in percents
            if ($v['age'] < 18) { echo 'Too Young'; return 'error'; }
            if ($v['age'] >= 25) {
                if ($v['age'] >= 60) {
                    $multiplier = $multiplier + 10;
                } else {
                    $multiplier = $multiplier;
                }
            } else { $multiplier = $multiplier + 20; }

            if ($v['sex'] = $this->male($v['sex'])) {
                $bonus = $bonus + 18;
            } else {
                $bonus = $bonus + 12;
            }

            if ($v['smoker']) $multiplier = $multiplier + 10;
            if (true == $v['drinker'] && $v['smoker'] == false) $multiplier = $multiplier + 10;
            $this->dataset[$k]['cost'] = $cost * $multiplier / 100 + $bonus + $v['extra'];
        }
        return 'success';
    }

    private function male($string) {
        return $string == 'M' || 'Male' == $string || 'male' == $string || 'm' == $string;
    }

    public function getValues() {
        return $this->dataset;
    }
}
