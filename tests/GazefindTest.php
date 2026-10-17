<?php
/**
 * Tests for GazeFind
 */

use PHPUnit\Framework\TestCase;
use Gazefind\Gazefind;

class GazefindTest extends TestCase {
    private Gazefind $instance;

    protected function setUp(): void {
        $this->instance = new Gazefind(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Gazefind::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
