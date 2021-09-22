<?php
/**
 * PHP FIG
 *
 * @category     PSR-17
 * @package      Http\Message
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Http\Message;

/**
 *
 */
interface ServerRequestFactoryInterface {
	
	/**
	 * Create a new server request.
	 * Note that server parameters are taken precisely as given - no parsing/processing
	 * of the given values is performed. In particular, no attempt is made to
	 * determine the HTTP method or URI, which must be provided explicitly.
	 *
	 * @param    string                 $method          The HTTP method associated with the request.
	 * @param    string|UriInterface    $uri             The URI associated with the request.
	 * @param    array                  $serverParams    An array of Server API (SAPI) parameters with
	 *                                                   which to seed the generated request instance.
	 */
	public function createServerRequest(string $method, UriInterface|string $uri, array $serverParams = []) : ServerRequestInterface;
}
