<?php
/**
 * Tests for AgentMesh
 */

use PHPUnit\Framework\TestCase;
use Agentmesh\Agentmesh;

class AgentmeshTest extends TestCase {
    private Agentmesh $instance;

    protected function setUp(): void {
        $this->instance = new Agentmesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Agentmesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
