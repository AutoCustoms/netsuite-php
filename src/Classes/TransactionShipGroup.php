<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-01-29 05:23:50 PM UTC
 */

namespace NetSuite\Classes;

class TransactionShipGroup {
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var bool
     */
    protected bool $isFulfilled;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceAddressRef;

    /**
     * @var string
     */
    protected string $sourceAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $destinationAddressRef;

    /**
     * @var string
     */
    protected string $destinationAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $shippingMethodRef;

    /**
     * @var string
     */
    protected string $shippingMethod;

    /**
     * @var bool
     */
    protected bool $isHandlingTaxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $handlingTaxCode;

    /**
     * @var string
     */
    protected string $handlingTaxRate;

    protected $handlingTax2Rate;
    /**
     * @var float
     */
    protected float $handlingRate;

    /**
     * @var float
     */
    protected float $handlingTaxAmt;

    protected $handlingTax2Amt;
    /**
     * @var bool
     */
    protected bool $isShippingTaxable;

    /**
     * @var RecordRef
     */
    protected RecordRef $shippingTaxCode;

    /**
     * @var string
     */
    protected string $shippingTaxRate;

    protected $shippingTax2Rate;
    /**
     * @var float
     */
    protected float $shippingRate;

    /**
     * @var float
     */
    protected float $shippingTaxAmt;

    protected $shippingTax2Amt;
    static $paramtypesmap = array(
        "id" => "integer",
        "isFulfilled" => "boolean",
        "weight" => "float",
        "sourceAddressRef" => "RecordRef",
        "sourceAddress" => "string",
        "destinationAddressRef" => "RecordRef",
        "destinationAddress" => "string",
        "shippingMethodRef" => "RecordRef",
        "shippingMethod" => "string",
        "isHandlingTaxable" => "boolean",
        "handlingTaxCode" => "RecordRef",
        "handlingTaxRate" => "string",
        "handlingTax2Rate" => "string",
        "handlingRate" => "float",
        "handlingTaxAmt" => "float",
        "handlingTax2Amt" => "float",
        "isShippingTaxable" => "boolean",
        "shippingTaxCode" => "RecordRef",
        "shippingTaxRate" => "string",
        "shippingTax2Rate" => "string",
        "shippingRate" => "float",
        "shippingTaxAmt" => "float",
        "shippingTax2Amt" => "float",
    );

    /**
     * @param int $id
     * @return TransactionShipGroup
     */
    public function setId(int $id): TransactionShipGroup
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param bool $isFulfilled
     * @return TransactionShipGroup
     */
    public function setIsFulfilled(bool $isFulfilled): TransactionShipGroup
    {
        $this->isFulfilled = $isFulfilled;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFulfilled(): bool
    {
        return $this->isFulfilled;
    }

    /**
     * @param float $weight
     * @return TransactionShipGroup
     */
    public function setWeight(float $weight): TransactionShipGroup
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param RecordRef $sourceAddressRef
     * @return TransactionShipGroup
     */
    public function setSourceAddressRef(RecordRef $sourceAddressRef): TransactionShipGroup
    {
        $this->sourceAddressRef = $sourceAddressRef;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceAddressRef(): RecordRef
    {
        return $this->sourceAddressRef;
    }

    /**
     * @param string $sourceAddress
     * @return TransactionShipGroup
     */
    public function setSourceAddress(string $sourceAddress): TransactionShipGroup
    {
        $this->sourceAddress = $sourceAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceAddress(): string
    {
        return $this->sourceAddress;
    }

    /**
     * @param RecordRef $destinationAddressRef
     * @return TransactionShipGroup
     */
    public function setDestinationAddressRef(RecordRef $destinationAddressRef): TransactionShipGroup
    {
        $this->destinationAddressRef = $destinationAddressRef;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDestinationAddressRef(): RecordRef
    {
        return $this->destinationAddressRef;
    }

    /**
     * @param string $destinationAddress
     * @return TransactionShipGroup
     */
    public function setDestinationAddress(string $destinationAddress): TransactionShipGroup
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAddress(): string
    {
        return $this->destinationAddress;
    }

    /**
     * @param RecordRef $shippingMethodRef
     * @return TransactionShipGroup
     */
    public function setShippingMethodRef(RecordRef $shippingMethodRef): TransactionShipGroup
    {
        $this->shippingMethodRef = $shippingMethodRef;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingMethodRef(): RecordRef
    {
        return $this->shippingMethodRef;
    }

    /**
     * @param string $shippingMethod
     * @return TransactionShipGroup
     */
    public function setShippingMethod(string $shippingMethod): TransactionShipGroup
    {
        $this->shippingMethod = $shippingMethod;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethod(): string
    {
        return $this->shippingMethod;
    }

    /**
     * @param bool $isHandlingTaxable
     * @return TransactionShipGroup
     */
    public function setIsHandlingTaxable(bool $isHandlingTaxable): TransactionShipGroup
    {
        $this->isHandlingTaxable = $isHandlingTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsHandlingTaxable(): bool
    {
        return $this->isHandlingTaxable;
    }

    /**
     * @param RecordRef $handlingTaxCode
     * @return TransactionShipGroup
     */
    public function setHandlingTaxCode(RecordRef $handlingTaxCode): TransactionShipGroup
    {
        $this->handlingTaxCode = $handlingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getHandlingTaxCode(): RecordRef
    {
        return $this->handlingTaxCode;
    }

    /**
     * @param string $handlingTaxRate
     * @return TransactionShipGroup
     */
    public function setHandlingTaxRate(string $handlingTaxRate): TransactionShipGroup
    {
        $this->handlingTaxRate = $handlingTaxRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getHandlingTaxRate(): string
    {
        return $this->handlingTaxRate;
    }

    /**
     * @param float $handlingRate
     * @return TransactionShipGroup
     */
    public function setHandlingRate(float $handlingRate): TransactionShipGroup
    {
        $this->handlingRate = $handlingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getHandlingRate(): float
    {
        return $this->handlingRate;
    }

    /**
     * @param float $handlingTaxAmt
     * @return TransactionShipGroup
     */
    public function setHandlingTaxAmt(float $handlingTaxAmt): TransactionShipGroup
    {
        $this->handlingTaxAmt = $handlingTaxAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getHandlingTaxAmt(): float
    {
        return $this->handlingTaxAmt;
    }

    /**
     * @param bool $isShippingTaxable
     * @return TransactionShipGroup
     */
    public function setIsShippingTaxable(bool $isShippingTaxable): TransactionShipGroup
    {
        $this->isShippingTaxable = $isShippingTaxable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsShippingTaxable(): bool
    {
        return $this->isShippingTaxable;
    }

    /**
     * @param RecordRef $shippingTaxCode
     * @return TransactionShipGroup
     */
    public function setShippingTaxCode(RecordRef $shippingTaxCode): TransactionShipGroup
    {
        $this->shippingTaxCode = $shippingTaxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getShippingTaxCode(): RecordRef
    {
        return $this->shippingTaxCode;
    }

    /**
     * @param string $shippingTaxRate
     * @return TransactionShipGroup
     */
    public function setShippingTaxRate(string $shippingTaxRate): TransactionShipGroup
    {
        $this->shippingTaxRate = $shippingTaxRate;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingTaxRate(): string
    {
        return $this->shippingTaxRate;
    }

    /**
     * @param float $shippingRate
     * @return TransactionShipGroup
     */
    public function setShippingRate(float $shippingRate): TransactionShipGroup
    {
        $this->shippingRate = $shippingRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingRate(): float
    {
        return $this->shippingRate;
    }

    /**
     * @param float $shippingTaxAmt
     * @return TransactionShipGroup
     */
    public function setShippingTaxAmt(float $shippingTaxAmt): TransactionShipGroup
    {
        $this->shippingTaxAmt = $shippingTaxAmt;
        return $this;
    }

    /**
     * @return float
     */
    public function getShippingTaxAmt(): float
    {
        return $this->shippingTaxAmt;
    }

}
