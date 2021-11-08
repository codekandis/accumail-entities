<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

/**
 * Represents the interface of any e-mail attachment entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EMailAttachmentEntityInterface extends EMailRelatedEntityInterface
{
	/**
	 * Gets the name.
	 * @return string The name.
	 */
	public function getName(): string;

	/**
	 * Sets the name.
	 * @param string $name The name.
	 */
	public function setName( string $name ): void;

	/**
	 * Gets the content.
	 * @return string The content.
	 */
	public function getContent(): string;

	/**
	 * Sets the content.
	 * @param string $content The content.
	 */
	public function setContent( string $content ): void;
}
