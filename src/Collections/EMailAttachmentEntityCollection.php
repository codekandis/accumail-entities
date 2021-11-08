<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EMailAttachmentEntityInterface;
use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\Entities\Collections\AbstractEntityCollection;
use CodeKandis\Entities\Collections\EntityExistsException;

/**
 * Represents a collection of e-mail attachment entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class EMailAttachmentEntityCollection extends AbstractEntityCollection implements EMailAttachmentEntityCollectionInterface
{
	/**
	 * Constructor method.
	 * @param EMailAttachmentEntityInterface[] $eMailAttachments The initial e-mail attachments of the collection.
	 * @throws EntityExistsException An e-mail attachment already exists in the collection.
	 */
	public function __construct( EMailAttachmentEntityInterface ...$eMailAttachments )
	{
		parent::__construct( ...$eMailAttachments );
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
