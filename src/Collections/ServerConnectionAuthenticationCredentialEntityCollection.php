<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\ServerConnectionAuthenticationCredentialEntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of server connection authentication credential entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class ServerConnectionAuthenticationCredentialEntityCollection extends AbstractEntityCollection implements ServerConnectionAuthenticationCredentialEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param ServerConnectionAuthenticationCredentialEntityInterface[] $serverConnectionAuthenticationCredentials The initial server connection authentication credentials of the collection.
	 * @throws EntityExistsException A server connection authentication credential already exists in the collection.
	 */
	public function __construct( ServerConnectionAuthenticationCredentialEntityInterface ...$serverConnectionAuthenticationCredentials )
	{
		parent::__construct( ...$serverConnectionAuthenticationCredentials );
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
