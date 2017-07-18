<?php

namespace Dhii\Data\Hierarchy;

/**
 * Something that can have its parent retrieved.
 *
 * @since [*next-version*]
 */
interface ParentAwareInterface extends HasParentCapableInterface
{
    /**
     * Get this instance's parent.
     *
     * @since [*next-version*]
     *
     * @return mixed The parent of this instance.
     */
    public function getParent();
}
