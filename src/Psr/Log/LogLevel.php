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
 * Describes log levels.
 */
class LogLevel {
	
	public const EMERGENCY = 'emergency';
	public const ALERT     = 'alert';
	public const CRITICAL  = 'critical';
	public const ERROR     = 'error';
	public const WARNING   = 'warning';
	public const NOTICE    = 'notice';
	public const INFO      = 'info';
	public const DEBUG     = 'debug';
}
