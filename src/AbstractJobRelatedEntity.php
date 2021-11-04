<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

/**
 * Represents the base class of any job related entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class AbstractJobRelatedEntity extends AbstractEntity implements JobRelatedEntityInterface
{
	/**
	 * Stores the job ID.
	 * @var string
	 */
	public string $jobId = '';

	/**
	 * {@inheritDoc}
	 */
	public function getJobId(): string
	{
		return $this->jobId;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setJobId( string $jobId ): void
	{
		$this->jobId = $jobId;
	}
}
