<?php


namespace com\realexpayments\remote\sdk\domain\payment;


use com\realexpayments\remote\sdk\EnumBase;

/**
 * Class PaymentType
 * Enumeration for the Payment type.
 */
class PaymentType extends EnumBase {

	const __default = self::AUTH;
	const  AUTH = "auth";
	const  AUTH_MOBILE = "auth-mobile";
	const   SETTLE = "settle";
	const  VOID = "void";
	const  REBATE = "rebate";
	const  OTB = "otb";
	const  CREDIT = "credit";
	const  HOLD = "hold";
	const  RELEASE = "release";
	const  QUERY = "query";

	/**
	 * @var string The payment type String value
	 */
	private $type;


	/**
	 * @param string $type
	 */
	public function __construct( $type ) {
		parent::__construct( $type );
		$this->type = $type;
	}

	/**
	 * Get the string value of the payment type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

}