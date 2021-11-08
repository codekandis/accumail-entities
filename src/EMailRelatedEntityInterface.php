<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

/**
 * Represents the interface of any e-mail related entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EMailRelatedEntityInterface extends EntityInterface
{
	/**
	 * Gets the e-mail ID.
	 * @return string The e-mail ID.
	 */
	public function getEMailId(): string;

	/**
	 * Sets the e-mail ID.
	 * @param string $eMailId The e-mail ID.
	 */
	public function setEMailId( string $eMailId ): void;
}
