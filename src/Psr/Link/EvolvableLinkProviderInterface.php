<?php
/**
 * PHP FIG
 *
 * @category     PSR-13
 * @package      Link
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Link;

/**
 * An evolvable link provider value object.
 */
interface EvolvableLinkProviderInterface extends LinkProviderInterface {
	
	/**
	 * Returns an instance with the specified link included.
	 * If the specified link is already present, this method MUST return normally
	 * without errors. The link is present if $link is === identical to a link
	 * object already in the collection.
	 *
	 * @param    LinkInterface    $link
	 *   A link object that should be included in this collection.
	 *
	 * @return static
	 */
	public function withLink(LinkInterface $link) : static;
	
	/**
	 * Returns an instance with the specified link removed.
	 * If the specified link is not present, this method MUST return normally
	 * without errors. The link is present if $link is === identical to a link
	 * object already in the collection.
	 *
	 * @param    LinkInterface    $link
	 *   The link to remove.
	 *
	 * @return static
	 */
	public function withoutLink(LinkInterface $link) : static;
}
