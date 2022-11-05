<?php

namespace App\Tests\Conway\Contexts;

use Behat\Behat\Context\Context;
use PHPUnit\Framework\TestCase;

class ConwayContext extends testcase implements Context
{
    private Cell $cell;

    /**
     * @BeforeScenario
     */
    public function before(): void
    {
        $this->cell = new Cell();
    }

    /**
     * @Given a live cell
     */
    public function aLiveCell()
    {
    }

    /**
     * @Given the cell has :quantity neighbours
     */
    public function theCellHasNeighbours(string $quantity)
    {
    }

    /**
     * @When I calculate next generation
     */
    public function test2()
    {
    }

    /**
     * @Then the cell is dead
     */
    public function test3()
    {
    }
}
