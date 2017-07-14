<?php

namespace Dhii\Data\Hierarchy;

/**
 * Something that can check for its siblings.
 *
 * @since [*next-version*]
 */
interface HasSiblingsCapableInterface
{
    /**
     * Checks whether this instance has siblings.
     *
     * @since [*next-version*]
     *
     * @return bool True if this instance has siblings; false otherwise.
     */
    public function hasSiblings();
}
