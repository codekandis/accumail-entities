<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\JobEntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of job entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class JobEntityCollection extends AbstractEntityCollection implements JobEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param JobEntityInterface[] $jobs The initial jobs of the collection.
	 * @throws EntityExistsException A job already exists in the collection.
	 */
	public function __construct( JobEntityInterface ...$jobs )
	{
		parent::__construct( ...$jobs );
	}

	/**
	 * {@inheritDoc}
	 */
	public function current(): EntityInterface
	{
		return parent::current();
	}

	/**
	 * {@inheritDoc}
	 */
	public function offsetGet( $index ): EntityInterface
	{
		return parent::offsetGet( $index );
	}
}
