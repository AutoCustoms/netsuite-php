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

class CustomSaleShipGroup {
    /**
     * @var string
     */
    protected string $sourceAddress;

    /**
     * @var string
     */
    protected string $destinationAddress;

    /**
     * @var string
     */
    protected string $shippingMethod;

    /**
     * @var float
     */
    protected float $shippingRate;

    /**
     * @var float
     */
    protected float $handlingRate;

    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $isFulfilled;

    /**
     * @var float
     */
    protected float $weight;

    /**
     * @var string
     */
    protected string $sourceAddressRef;

    /**
     * @var string
     */
    protected string $destinationAddressRef;

    /**
     * @var string
     */
    protected string $shippingMethodRef;

    static $paramtypesmap = array(
        "sourceAddress" => "string",
        "destinationAddress" => "string",
        "shippingMethod" => "string",
        "shippingRate" => "float",
        "handlingRate" => "float",
        "id" => "integer",
        "isFulfilled" => "string",
        "weight" => "float",
        "sourceAddressRef" => "string",
        "destinationAddressRef" => "string",
        "shippingMethodRef" => "string",
    );

    /**
     * @param string $sourceAddress
     * @return CustomSaleShipGroup
     */
    public function setSourceAddress(string $sourceAddress): CustomSaleShipGroup
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
     * @param string $destinationAddress
     * @return CustomSaleShipGroup
     */
    public function setDestinationAddress(string $destinationAddress): CustomSaleShipGroup
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
     * @param string $shippingMethod
     * @return CustomSaleShipGroup
     */
    public function setShippingMethod(string $shippingMethod): CustomSaleShipGroup
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
     * @param float $shippingRate
     * @return CustomSaleShipGroup
     */
    public function setShippingRate(float $shippingRate): CustomSaleShipGroup
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
     * @param float $handlingRate
     * @return CustomSaleShipGroup
     */
    public function setHandlingRate(float $handlingRate): CustomSaleShipGroup
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
     * @param int $id
     * @return CustomSaleShipGroup
     */
    public function setId(int $id): CustomSaleShipGroup
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
     * @param string $isFulfilled
     * @return CustomSaleShipGroup
     */
    public function setIsFulfilled(string $isFulfilled): CustomSaleShipGroup
    {
        $this->isFulfilled = $isFulfilled;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsFulfilled(): string
    {
        return $this->isFulfilled;
    }

    /**
     * @param float $weight
     * @return CustomSaleShipGroup
     */
    public function setWeight(float $weight): CustomSaleShipGroup
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
     * @param string $sourceAddressRef
     * @return CustomSaleShipGroup
     */
    public function setSourceAddressRef(string $sourceAddressRef): CustomSaleShipGroup
    {
        $this->sourceAddressRef = $sourceAddressRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getSourceAddressRef(): string
    {
        return $this->sourceAddressRef;
    }

    /**
     * @param string $destinationAddressRef
     * @return CustomSaleShipGroup
     */
    public function setDestinationAddressRef(string $destinationAddressRef): CustomSaleShipGroup
    {
        $this->destinationAddressRef = $destinationAddressRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getDestinationAddressRef(): string
    {
        return $this->destinationAddressRef;
    }

    /**
     * @param string $shippingMethodRef
     * @return CustomSaleShipGroup
     */
    public function setShippingMethodRef(string $shippingMethodRef): CustomSaleShipGroup
    {
        $this->shippingMethodRef = $shippingMethodRef;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingMethodRef(): string
    {
        return $this->shippingMethodRef;
    }

}
