<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

use CodeKandis\Entities\EntityInterface as OriginEntityInterface;

/**
 * Represents the interface of any entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EntityInterface extends OriginEntityInterface
{
	/**
	 * Gets the canonical URI.
	 * @return string The canonical URI.
	 */
	public function getCanonicalUri(): string;

	/**
	 * Sets the canonical URI.
	 * @param string $canonicalUri The canonical URI.
	 */
	public function setCanonicalUri( string $canonicalUri ): void;

	/**
	 * Gets the ID.
	 * @return string The ID.
	 */
	public function getId(): string;

	/**
	 * Sets the ID.
	 * @param string $id The ID.
	 */
	public function setId( string $id ): void;
}
