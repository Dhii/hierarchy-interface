<?php

namespace Dhii\Data\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Hierarchy\ParentAwareInterface}.
 *
 * @since 0.1
 */
class ParentAwareInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Data\Hierarchy\ParentAwareInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\Hierarchy\\ParentAwareInterface')
            ->getParent()
            ->hasParent()
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

        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\ParentAwareInterface', $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\HasParentCapableInterface', $subject, 'Test subject does not implement required interface');
    }
}
