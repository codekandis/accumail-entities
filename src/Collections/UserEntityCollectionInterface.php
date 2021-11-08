<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Collections;

use CodeKandis\AccuMailEntities\EntityInterface;
use CodeKandis\AccuMailEntities\UserEntityInterface;
use CodeKandis\Entities\Collections\EntityCollectionInterface;

/**
 * Represents the interface of any collection of user entities.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface UserEntityCollectionInterface extends EntityCollectionInterface
{
	/**
	 * Gets the current user.
	 * @return UserEntityInterface The current user.
	 */
	public function current(): EntityInterface;

	/**
	 * Gets the user at the specified index.
	 * @param int $index The index of the user.
	 * @return UserEntityInterface The user to get.
	 */
	public function offsetGet( $index ): EntityInterface;
}
