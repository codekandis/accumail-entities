<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\ServerConnectionEntityInterface;
use CodeKandis\Entities\Collections\EntityCollectionInterface;

/**
 * Represents the interface of any collection of server connection entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ServerConnectionEntityCollectionInterface extends EntityCollectionInterface
{
	/**
	 * Gets the current server connection.
	 * @return ServerConnectionEntityInterface The current server connection.
	 */
	public function current(): EntityInterface;

	/**
	 * Gets the server connection at the specified index.
	 * @param int $index The index of the server connection.
	 * @return ServerConnectionEntityInterface The server connection to get.
	 */
	public function offsetGet( $index ): EntityInterface;
}
