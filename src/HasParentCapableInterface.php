<?php

namespace Dhii\Data\Hierarchy;

/**
 * Something that can check for its parent.
 *
 * @since [*next-version*]
 */
interface HasParentCapableInterface
{
    /**
     * Checks whether this instance has a parent.
     *
     * @since [*next-version*]
     *
     * @return bool True if this instance has a parent; false otherwise.
     */
    public function hasParent();
}
