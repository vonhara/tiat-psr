<?php
/**
 * PHP FIG
 *
 * @category     PSR-17
 * @package      Http\Message
 * @license      MIT. See also the license.txt
 */
namespace Psr\Http\Message;

/**
 *
 */
interface RequestFactoryInterface {
	
	/**
	 * Create a new request.
	 *
	 * @param    string                 $method    The HTTP method associated with the request.
	 * @param    string|UriInterface    $uri       The URI associated with the request.
	 */
	public function createRequest(string $method, UriInterface|string $uri) : RequestInterface;
}
