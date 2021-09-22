<?php
/**
 * PHP FIG
 *
 * @category     PSR-16
 * @package      SimpleCache
 * @license      MIT. See also the LICENCE
 */
namespace Psr\SimpleCache;

/**
 * Exception interface for invalid cache arguments.
 * When an invalid argument is passed, it must throw an exception which implements
 * this interface.
 */
interface InvalidArgumentException extends CacheException {

}
