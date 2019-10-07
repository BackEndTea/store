<?php

class StoreTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider provideItems
     */
    public function testItDoesCalculation(int $numberOfDays, Item $inputItem, Item $outputItem): void
    {
        $items = [$inputItem];
        $store = new Store($items);
        foreach(range(1, $numberOfDays) as $_) {
            $store->tick();
        }

        $this->assertEquals($outputItem, $items[0]);
    }

    public function provideItems(): Generator
    {
        yield [1, new Item('Mana Cake', 10, 10), new Item('Mana Cake', 9, 9)];

        yield [2, new Item('Mana Cake', 10, 10), new Item('Mana Cake', 8, 8)];
    }
}
