<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\UserEntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of user entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class UserEntityCollection extends AbstractEntityCollection implements UserEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param UserEntityInterface[] $users The initial users of the collection.
	 * @throws EntityExistsException A user already exists in the collection.
	 */
	public function __construct( UserEntityInterface ...$users )
	{
		parent::__construct( ...$users );
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
