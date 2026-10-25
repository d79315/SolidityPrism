<?php
/**
 * Tests for SolidityPrism
 */

use PHPUnit\Framework\TestCase;
use Solidityprism\Solidityprism;

class SolidityprismTest extends TestCase {
    private Solidityprism $instance;

    protected function setUp(): void {
        $this->instance = new Solidityprism(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidityprism::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
