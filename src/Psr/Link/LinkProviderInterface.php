<?php
/**
 * PHP FIG
 *
 * @category     PSR-13
 * @package      Link
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Link;

//
use Traversable;

/**
 * A link provider object.
 */
interface LinkProviderInterface {
	
	/**
	 * Returns an iterable of LinkInterface objects.
	 * The iterable may be an array or any PHP \Traversable object. If no links
	 * are available, an empty array or \Traversable MUST be returned.
	 *
	 * @return LinkInterface[]|Traversable
	 */
	public function getLinks() : array|Traversable;
	
	/**
	 * Returns an iterable of LinkInterface objects that have a specific relationship.
	 * The iterable may be an array or any PHP \Traversable object. If no links
	 * with that relationship are available, an empty array or \Traversable MUST be returned.
	 *
	 * @return LinkInterface[]|Traversable
	 */
	public function getLinksByRel($rel) : array|Traversable;
}
