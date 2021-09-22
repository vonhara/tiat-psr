<?php
/**
 * PHP FIG
 *
 * @category     PSR-6
 * @package      Cache
 * @license      MIT. See also the LICENCE
 */
namespace Psr\Cache;

/**
 * Exception interface for invalid cache arguments.
 * Any time an invalid argument is passed into a method it must throw an
 * exception class which implements Psr\Cache\InvalidArgumentException.
 */
interface InvalidArgumentException extends CacheException {

}
