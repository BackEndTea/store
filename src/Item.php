<?php

/**
 * Do not touch
 */
class Item {
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $sell_in;
    /** @var int */
    public $quality;

    function __construct(string $name, int $sell_in, int $quality) {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    /**
     * Converts the object to a string
     */
    public function __toString(): string {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}
