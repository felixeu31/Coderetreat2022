<?php

namespace App\Tests\Conway\Contexts;

use Behat\Behat\Context\Context;
use PHPUnit\Framework\TestCase;

class ConwayContext extends testcase implements Context
{
    /**
     * @BeforeScenario
     */
    public function before(): void
    {
    }

    /**
     * @Given test1
     */
    public function test()
    {
        $this->assertTrue(true);
    }

    /**
     * @When test2
     */
    public function test2()
    {
        $this->assertTrue(true);
    }

    /**
     * @Then test3
     */
    public function test3()
    {
        $this->assertTrue(true);
    }
}
