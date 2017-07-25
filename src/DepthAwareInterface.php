<?php

namespace Dhii\Data\Hierarchy;

/**
 * Something that can have its depth retrieved.
 * 
 * Here, depth represents the level of nesting.
 *
 * @since [*next-version*]
 */
interface DepthAwareInterface
{
    /**
     * Retrieve the depth of this instance.
     *
     * @since [*next-version*]
     *
     * @return int The depth.
     */
    public function getDepth();
}
