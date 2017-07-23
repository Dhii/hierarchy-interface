<?php

namespace Dhii\Data\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Hierarchy\ChildrenAwareInterface}.
 *
 * @since 0.1
 */
class ChildrenAwareInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Data\Hierarchy\ChildrenAwareInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\Hierarchy\\ChildrenAwareInterface')
            ->getChildren()
            ->hasChildren()
            ->new();

        return $mock;
    }

    /**
     * Tests if a valid instance of the test subject can be created.
     *
     * @since 0.1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\ChildrenAwareInterface', $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\HasChildrenCapableInterface', $subject, 'Test subject does not implement required interface');
    }
}
