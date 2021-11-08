<?php declare( strict_types = 1 );
namespace CodeKandis\AccuMailEntities\Enumerations;

/**
 * Represents an enumeration of e-mail address types.
 * @package codekandis/accumail-entities
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class EMailAddressTypes
{
	/**
	 * Represents a `FROM` e-mail address.
	 * @var string
	 */
	public const FROM = 'FROM';

	/**
	 * Represents a `TO` e-mail address.
	 * @var string
	 */
	public const TO = 'TO';

	/**
	 * Represents a `CC` e-mail address.
	 * @var string
	 */
	public const CC = 'CC';

	/**
	 * Represents a `BCC` e-mail address.
	 * @var string
	 */
	public const BCC = 'BCC';
}
