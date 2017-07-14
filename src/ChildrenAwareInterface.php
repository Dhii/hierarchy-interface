<?php

namespace Dhii\Data\Hierarchy;

use Traversable;

/**
 * Something that can have its children retrieved.
 *
 * @since [*next-version*]
 */
interface ChildrenAwareInterface extends HasChildrenCapableInterface
{
    /**
     * Get a list of this instance's children.
     *
     * @since [*next-version*]
     *
     * @return mixed[]|Traversable A list of children that belong to this instance.
     */
    public function getChildren();
}
