<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\ServerConnectionEntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of server connection entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class ServerConnectionEntityCollection extends AbstractEntityCollection implements ServerConnectionEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param ServerConnectionEntityInterface[] $serverConnections The initial server connections of the collection.
	 * @throws EntityExistsException A server connection already exists in the collection.
	 */
	public function __construct( ServerConnectionEntityInterface ...$serverConnections )
	{
		parent::__construct( ...$serverConnections );
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
