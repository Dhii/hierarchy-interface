<?php

namespace Dhii\Data\Hierarchy;

/**
 * Something that can check for its children.
 *
 * @since [*next-version*]
 */
interface HasChildrenCapableInterface
{
    /**
     * Checks whether this instance has children.
     *
     * @since [*next-version*]
     *
     * @return bool True if this instance has children; false otherwise.
     */
    public function hasChildren();
}
