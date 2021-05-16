<?php
namespace MatthewBaggett\Inflection\Tests;

use MatthewBaggett\Inflection\Inflect;

class MainTest extends \PHPUnit\Framework\TestCase
{
    public function wordDataProvider()
    {
        return [
            ['berry', 'berries'],
            ['activity', 'activities'],
            ['daisy', 'daisies'],
            ['church', 'churches'],
            ['bus', 'buses'],
            ['business', 'businesses'],
            ['fox', 'foxes'],
            ['stomach', 'stomachs'],
            ['epoch', 'epochs'],
            ['knife', 'knives'],
            ['half', 'halves'],
            ['scarf', 'scarves'],
            ['chief', 'chiefs'],
            ['spoof', 'spoofs'],
            ['solo', 'solos'],
            ['zero', 'zeroes'],
            ['avocado', 'avocados'],
            ['studio', 'studios'],
            ['zoo', 'zoos'],
            // Words of Latin origin, as per https://en.oxforddictionaries.com/spelling/plurals-of-nouns
            ['alga', 'algae'],
            ['alumnus', 'alumni'],
            ['larva', 'larvae'],
            // Words of Greek origin
            ['crisis', 'crises'],
            ['analysis', 'analyses'],
            ['neurosis', 'neuroses'],
            // Words of French origin
            ['bureau', 'bureaus'],
            ['chateau', 'chateaus'],
            ['gateau', 'gateaus'],
            ['trousseau', 'trousseaus'],
            // Words of Italian origin
            ['espresso', 'espressos'],
            ['pizza', 'pizzas'],
            ['risotto', 'risottos'],
            ['fresco', 'frescos'],
            // Uncountable
            ['money', 'money'],
            ['sheep', 'sheep']
        ];
    }

    /**
     * @dataProvider wordDataProvider
     */
    public function testSingularise($singular, $plural)
    {
        $this->assertEquals($singular, Inflect::singularize($plural));
    }

    /**
     * @dataProvider wordDataProvider
     */
    public function testPluralise($singular, $plural)
    {
        $this->assertEquals($plural, Inflect::pluralize($singular));
    }

    /**
     * @dataProvider wordDataProvider
     */
    public function testPluraliseIf($singular, $plural)
    {
        $this->assertEquals("2 {$plural}", Inflect::pluralizeIf(2, $singular));
        $this->assertEquals("1 {$singular}", Inflect::pluralizeIf(1, $singular));
    }
}
