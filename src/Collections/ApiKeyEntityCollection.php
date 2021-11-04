<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\ApiKeyEntityInterface;
use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of API key entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class ApiKeyEntityCollection extends AbstractEntityCollection implements ApiKeyEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param ApiKeyEntityInterface[] $apiKeys The initial API keys of the collection.
	 * @throws EntityExistsException A API key already exists in the collection.
	 */
	public function __construct( ApiKeyEntityInterface ...$apiKeys )
	{
		parent::__construct( ...$apiKeys );
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
