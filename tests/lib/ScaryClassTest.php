<?php
/**
 * ScaryClassTest
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
 * Class ScaryClassTest
 *
 * Test for ScaryClassTest to be sure it really works.
 *
 * @category LittleCodeShopOfHorrors/lib
 * @package  Core
 * @author   Cris Bettis <apt142@gmail.com>
 * @license  CC BY-NC-SA http://creativecommons.org/licenses/by-nc-sa/3.0/
 * @link     http://g.lonefry.com
 */

class ColorMathTest extends \PHPUnit_Framework_TestCase {


    public function testProcessSet() {
        $params = array(
            array(
                'name'    => 'Billy Joe',
                'sex'     => 'M',
                'age'     => 25,
                'drinker' => 'false',
                'smoker'  => true,
                'extra'   => '15'
            ),
            array(
                'name'    => 'Sue',
                'sex'     => 'F',
                'age'     => 70,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => null
            ),
            array(
                'name'    => 'Franklin',
                'sex'     => 'male',
                'age'     => 18,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => 25
            ),
            array(
                'name'    => 'Michone',
                'sex'     => 'Female',
                'age'     => 32,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => 20
            ),
            array(
                'name'    => 'Jane',
                'sex'     => null,
                'age'     => 50,
                'drinker' => true,
                'smoker'  => false,
                'extra'   => 75
            )
        );

        $expected = array(
            array(
                'name'    => 'Billy Joe',
                'sex'     => 'M',
                'age'     => 25,
                'drinker' => 'false',
                'smoker'  => true,
                'extra'   => '15',
                'cost'    => 143
            ),
            array(
                'name'    => 'Sue',
                'sex'     => 'F',
                'age'     => 70,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => 0,
                'cost'    => 122
            ),
            array(
                'name'    => 'Franklin',
                'sex'     => 'male',
                'age'     => 18,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => 25,
                'cost'    => 163
            ),
            array(
                'name'    => 'Michone',
                'sex'     => 'Female',
                'age'     => 32,
                'drinker' => false,
                'smoker'  => false,
                'extra'   => 20,
                'cost'    => 132
            ),
            array(
                'name'    => 'Jane',
                'sex'     => null,
                'age'     => 50,
                'drinker' => true,
                'smoker'  => false,
                'extra'   => 75,
                'cost'    => 197
            )
        );

        $InsuranceCalculator = new ScaryClass();
        $InsuranceCalculator->processSet($params);
        $actual = $InsuranceCalculator->getValues();

        $this->assertSame($expected, $actual);
    }
}
