<?php

namespace Dhii\Data\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Hierarchy\SiblingsAwareInterface}.
 *
 * @since 0.1
 */
class SiblingsAwareInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Data\Hierarchy\SiblingsAwareInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\Hierarchy\\SiblingsAwareInterface')
            ->getSiblings()
            ->hasSiblings()
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

        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\SiblingsAwareInterface', $subject, 'A valid instance of the test subject could not be created');
        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\HasSiblingsCapableInterface', $subject, 'Test subject does not implement required interface');
    }
}
