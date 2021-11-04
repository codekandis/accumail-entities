<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

use CodeKandis\AccuMailEntities\Collections\EMailAddressEntityCollectionInterface;
use CodeKandis\AccuMailEntities\Collections\EMailAttachmentEntityCollectionInterface;

/**
 * Represents the interface of any e-mail entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
interface EMailEntityInterface extends JobRelatedEntityInterface
{
	/**
	 * Gets the `From` address.
	 * @return ?EMailAddressEntityInterface The `From` address.
	 */
	public function getFromAddress(): ?EMailAddressEntityInterface;

	/**
	 * Sets the from address.
	 * @param ?EMailAddressEntityInterface $fromAddress The `From` address.
	 */
	public function setFromAddress( ?EMailAddressEntityInterface $fromAddress ): void;

	/**
	 * Gets the `To` addresses.
	 * @return EMailAddressEntityCollectionInterface The `To` addresses.
	 */
	public function getToAddresses(): EMailAddressEntityCollectionInterface;

	/**
	 * Sets the `To` addresses.
	 * @param EMailAddressEntityCollectionInterface $toAddresses The `To` addresses.
	 */
	public function setToAddresses( EMailAddressEntityCollectionInterface $toAddresses ): void;

	/**
	 * Gets the `CC` addresses.
	 * @return EMailAddressEntityCollectionInterface The `CC` addresses.
	 */
	public function getCcAddresses(): EMailAddressEntityCollectionInterface;

	/**
	 * Sets the `CC` addresses.
	 * @param EMailAddressEntityCollectionInterface $ccAddresses The `CC` addresses.
	 */
	public function setCcAddresses( EMailAddressEntityCollectionInterface $ccAddresses ): void;

	/**
	 * Gets the `BCC` addresses.
	 * @return EMailAddressEntityCollectionInterface The `BCC` addresses.
	 */
	public function getBccAddresses(): EMailAddressEntityCollectionInterface;

	/**
	 * Sets the `BCC` addresses.
	 * @param EMailAddressEntityCollectionInterface $bccAddresses The `BCC` addresses.
	 */
	public function setBccAddresses( EMailAddressEntityCollectionInterface $bccAddresses ): void;

	/**
	 * Gets the subject.
	 * @return string The subject.
	 */
	public function getSubject(): string;

	/**
	 * Sets the subject.
	 * @param string $subject The subject.
	 */
	public function setSubject( string $subject ): void;

	/**
	 * Gets if the body is an HTML body.
	 * @return bool True if the body is an HTML body, otherwise false.
	 */
	public function getIsHtmlBody():bool;

	/**
	 * Sets if the body is an HTML body.
	 * @param bool $isHtmlBody True if the body is an HTML body, otherwise false.
	 */
	public function setIsHtmlBody( bool $isHtmlBody ): void;

	/**
	 * Gets the plain text / HTML body.
	 * @return string The plain text / HTML body.
	 */
	public function getBody(): string;

	/**
	 * Sets the plain text / HTML body.
	 * @param string $body The plain text / HTML body.
	 */
	public function setBody( string $body ): void;

	/**
	 * Gets the alternative plain text body.
	 * @return ?string The alternative plain text body.
	 */
	public function getAlternativeBody(): ?string;

	/**
	 * Sets the alternative plain text body.
	 * @param ?string $alternativeBody The alternative plain text body.
	 */
	public function setAlternativeBody( ?string $alternativeBody ): void;

	/**
	 * Gets the attachments.
	 * @return EMailAttachmentEntityCollectionInterface The attachments.
	 */
	public function getAttachments(): EMailAttachmentEntityCollectionInterface;

	/**
	 * Sets the attachments.
	 * @param EMailAttachmentEntityCollectionInterface $attachments The attachments.
	 */
	public function setAttachments( EMailAttachmentEntityCollectionInterface $attachments ): void;
}
