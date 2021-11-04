<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Enumerations;

/**
 * Represents an enumeration of job statuses.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class JobStatuses
{
	/**
	 * Represents the job status if a job has been created.
	 * @var string
	 */
	public const CREATED = 'CREATED';

	/**
	 * Represents the job status if a job has been succeeded to send.
	 * @var string
	 */
	public const SENT_SUCCEEDED = 'SENT_SUCCEEDED';

	/**
	 * Represents the job status if a job has been failed to send.
	 * @var string
	 */
	public const SENT_FAILED = 'SENT_FAILED';
}
