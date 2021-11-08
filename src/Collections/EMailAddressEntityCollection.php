<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EMailAddressEntityInterface;
use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of e-mail address entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class EMailAddressEntityCollection extends AbstractEntityCollection implements EMailAddressEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param EMailAddressEntityInterface[] $eMailAddresses The initial e-mail addresses of the collection.
	 * @throws EntityExistsException An e-mail address already exists in the collection.
	 */
	public function __construct( EMailAddressEntityInterface ...$eMailAddresses )
	{
		parent::__construct( ...$eMailAddresses );
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
