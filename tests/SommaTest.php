<?php

use PHPUnit\Event\Code\Test;
use PHPUnit\Framework\TestCase;

class SommaTest extends TestCase {

public function test_somma ()
{
    $this->assertEquals(10,5+5, "5+5 non ha dato il risultato che ti aspettavi");

    $colori = ['a','b','c'];

    $this->assertCount(3,$colori);

}

}