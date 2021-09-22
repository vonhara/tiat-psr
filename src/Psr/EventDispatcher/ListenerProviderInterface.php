<?php
/**
 * PHP FIG
 *
 * @category     PSR-14
 * @package      EventDispatcher
 * @license      MIT. See also the LICENCE
 */
namespace Psr\EventDispatcher;

/**
 * Mapper from an event to the listeners that are applicable to that event.
 */
interface ListenerProviderInterface {
	
	/**
	 * @param    object    $event
	 *   An event for which to return the relevant listeners.
	 *
	 * @return iterable<callable>
	 *   An iterable (array, iterator, or generator) of callables.  Each
	 *   callable MUST be type-compatible with $event.
	 */
	public function getListenersForEvent(object $event) : iterable;
}
