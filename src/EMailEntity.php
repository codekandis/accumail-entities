<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities;

use CodeKandis\AccuMailEntities\Collections\EMailAddressEntityCollection;
use CodeKandis\AccuMailEntities\Collections\EMailAddressEntityCollectionInterface;
use CodeKandis\AccuMailEntities\Collections\EMailAttachmentEntityCollection;
use CodeKandis\AccuMailEntities\Collections\EMailAttachmentEntityCollectionInterface;

/**
 * Represents an e-mail entity.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
class EMailEntity extends AbstractJobRelatedEntity implements EMailEntityInterface
{
	/**
	 * Stores the `From` address.
	 * @var ?EMailAddressEntityInterface
	 */
	public ?EMailAddressEntityInterface $fromAddress = null;

	/**
	 * Stores the `To` addresses.
	 * @var EMailAddressEntityCollectionInterface
	 */
	public EMailAddressEntityCollectionInterface $toAddresses;

	/**
	 * Stores the `CC` addresses.
	 * @var EMailAddressEntityCollectionInterface
	 */
	public EMailAddressEntityCollectionInterface $ccAddresses;

	/**
	 * Stores the `BCC` addresses.
	 * @var EMailAddressEntityCollectionInterface
	 */
	public EMailAddressEntityCollectionInterface $bccAddresses;

	/**
	 * Stores the subject.
	 * @var string
	 */
	public string $subject = '';

	/**
	 * Stores if the body is a HTML body.
	 * @var bool
	 */
	public bool $isHtmlBody=false;

	/**
	 * Stores the plain text / HTML body.
	 * @var string
	 */
	public string $body = '';

	/**
	 * Stores the alternative plain text body.
	 * @var ?string
	 */
	public ?string $alternativeBody = '';

	/**
	 * Stores the attachments.
	 * @var EMailAttachmentEntityCollectionInterface
	 */
	public EMailAttachmentEntityCollectionInterface $attachments;

	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		$this->toAddresses  = new EMailAddressEntityCollection();
		$this->ccAddresses  = new EMailAddressEntityCollection();
		$this->bccAddresses = new EMailAddressEntityCollection();
		$this->attachments  = new EMailAttachmentEntityCollection();
	}

	/**
	 * {@inheritDoc}
	 */
	public function getFromAddress(): ?EMailAddressEntityInterface
	{
		return $this->fromAddress;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setFromAddress( ?EMailAddressEntityInterface $fromAddress ): void
	{
		$this->fromAddress = $fromAddress;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getToAddresses(): EMailAddressEntityCollectionInterface
	{
		return $this->toAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setToAddresses( EMailAddressEntityCollectionInterface $toAddresses ): void
	{
		$this->toAddresses = $toAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getCcAddresses(): EMailAddressEntityCollectionInterface
	{
		return $this->ccAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setCcAddresses( EMailAddressEntityCollectionInterface $ccAddresses ): void
	{
		$this->ccAddresses = $ccAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBccAddresses(): EMailAddressEntityCollectionInterface
	{
		return $this->bccAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setBccAddresses( EMailAddressEntityCollectionInterface $bccAddresses ): void
	{
		$this->bccAddresses = $bccAddresses;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSubject(): string
	{
		return $this->subject;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setSubject( string $subject ): void
	{
		$this->subject = $subject;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getIsHtmlBody(): bool
	{
		return $this->isHtmlBody;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setIsHtmlBody( bool $isHtmlBody ): void
	{
		$this->isHtmlBody = $isHtmlBody;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getBody(): string
	{
		return $this->body;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setBody( string $body ): void
	{
		$this->body = $body;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAlternativeBody(): ?string
	{
		return $this->alternativeBody;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setAlternativeBody( ?string $alternativeBody ): void
	{
		$this->alternativeBody = $alternativeBody;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getAttachments(): EMailAttachmentEntityCollectionInterface
	{
		return $this->attachments;
	}

	/**
	 * {@inheritDoc}
	 */
	public function setAttachments( EMailAttachmentEntityCollectionInterface $attachments ): void
	{
		$this->attachments = $attachments;
	}
}
