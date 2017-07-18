<?php

namespace Dhii\Data\Hierarchy;

use Traversable;

/**
 * Something that can have its siblings retrieved.
 *
 * @since [*next-version*]
 */
interface SiblingsAwareInterface extends HasSiblingsCapableInterface
{
    /**
     * Get a list of this instance's siblings.
     *
     * @since [*next-version*]
     *
     * @return mixed[]|Traversable A list of siblings of this instance.
     */
    public function getSiblings();
}
