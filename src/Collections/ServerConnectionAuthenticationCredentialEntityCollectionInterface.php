<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\ServerConnectionAuthenticationCredentialEntityInterface;
use CodeKandis\Entities\Collections\EntityCollectionInterface;

/**
 * Represents the interface of any collection of server connection authentication credential entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ServerConnectionAuthenticationCredentialEntityCollectionInterface extends EntityCollectionInterface
{
	/**
	 * Gets the current server connection authentication credential.
	 * @return ServerConnectionAuthenticationCredentialEntityInterface The current server connection authentication credential.
	 */
	public function current(): EntityInterface;

	/**
	 * Gets the server connection authentication credential at the specified index.
	 * @param int $index The index of the server connection authentication credential.
	 * @return ServerConnectionAuthenticationCredentialEntityInterface The server connection authentication credential to get.
	 */
	public function offsetGet( $index ): EntityInterface;
}
