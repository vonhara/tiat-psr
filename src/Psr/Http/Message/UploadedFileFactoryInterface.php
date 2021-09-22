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

//
use const UPLOAD_ERR_OK;

/**
 *
 */
interface UploadedFileFactoryInterface {
	
	/**
	 * Create a new uploaded file.
	 * If a size is not provided it will be determined by checking the size of
	 * the stream.
	 *
	 * @link http://php.net/manual/features.file-upload.post-method.php
	 * @link http://php.net/manual/features.file-upload.errors.php
	 *
	 * @param    StreamInterface    $stream             The underlying stream representing the
	 *                                                  uploaded file content.
	 * @param    null|int           $size               The size of the file in bytes.
	 * @param    int                $error              The PHP file upload error.
	 * @param    null|string        $clientFilename     The filename as provided by the client, if any.
	 * @param    null|string        $clientMediaType    The media type as provided by the client, if any.
	 *
	 * @return UploadedFileInterface
	 * @throws InvalidArgumentException If the file resource is not readable.
	 */
	public function createUploadedFile(
		StreamInterface $stream, int $size = NULL, int $error = UPLOAD_ERR_OK, string $clientFilename = NULL, string $clientMediaType = NULL) : UploadedFileInterface;
}
