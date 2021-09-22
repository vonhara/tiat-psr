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
 * Defines a dispatcher for events.
 */
interface EventDispatcherInterface {
	
	/**
	 * Provide all relevant listeners with an event to process.
	 *
	 * @param    object    $event
	 *   The object to process.
	 *
	 * @return object
	 *   The Event that was passed, now modified by listeners.
	 */
	public function dispatch(object $event) : object;
}
