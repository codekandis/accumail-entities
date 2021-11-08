<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EMailAddressEntityInterface;
use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\Entities\Collections\EntityCollectionInterface;

/**
 * Represents the interface of any collection of e-mail address entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EMailAddressEntityCollectionInterface extends EntityCollectionInterface
{
	/**
	 * Gets the current e-mail address.
	 * @return EMailAddressEntityInterface The current e-mail address.
	 */
	public function current(): EntityInterface;

	/**
	 * Gets the e-mail address at the specified index.
	 * @param int $index The index of the e-mail address.
	 * @return EMailAddressEntityInterface The e-mail address to get.
	 */
	public function offsetGet( $index ): EntityInterface;
}
