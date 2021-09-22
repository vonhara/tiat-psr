<?php
/**
 * PHP FIG
 *
 * @category     PSR-17
 * @package      Http\Message
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Http\Message;

//
use InvalidArgumentException;

/**
 *
 */
interface UriFactoryInterface {
	
	/**
	 * Create a new URI.
	 *
	 * @param    string    $uri    The URI to parse.
	 *
	 * @throws InvalidArgumentException If the given URI cannot be parsed.
	 */
	public function createUri(string $uri = '') : UriInterface;
}
