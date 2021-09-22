<?php
/**
 * PHP FIG
 *
 * @category     PSR-3
 * @package      Log
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface {
	
	/**
	 * Sets a logger instance on the object.
	 *
	 * @param    LoggerInterface    $logger
	 *
	 * @return void
	 */
	public function setLogger(LoggerInterface $logger) : void;
}
