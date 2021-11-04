<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\JobEntityInterface;
use CodeKandis\Entities\Collections\EntityCollectionInterface;

/**
 * Represents the interface of any collection of job entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface JobEntityCollectionInterface extends EntityCollectionInterface
{
	/**
	 * Gets the current job.
	 * @return JobEntityInterface The current job.
	 */
	public function current(): EntityInterface;

	/**
	 * Gets the job at the specified index.
	 * @param int $index The index of the job.
	 * @return JobEntityInterface The job to get.
	 */
	public function offsetGet( $index ): EntityInterface;
}
