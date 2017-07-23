<?php

namespace Dhii\Data\UnitTest;

use Xpmock\TestCase;

/**
 * Tests {@see \Dhii\Data\Hierarchy\HasSiblingsCapableInterface}.
 *
 * @since 0.1
 */
class HasSiblingsCapableInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.1
     *
     * @return \Dhii\Data\Hierarchy\HasSiblingsCapableInterface The new instance of the test subject.
     */
    public function createInstance()
    {
        $mock = $this->mock('Dhii\\Data\\Hierarchy\\HasSiblingsCapableInterface')
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

        $this->assertInstanceOf('Dhii\\Data\\Hierarchy\\HasSiblingsCapableInterface', $subject, 'A valid instance of the test subject could not be created');
    }
}
