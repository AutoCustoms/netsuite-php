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

class PriceLevel extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var float
     */
    protected float $discountpct;

    /**
     * @var bool
     */
    protected bool $updateExistingPrices;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "discountpct" => "float",
        "updateExistingPrices" => "boolean",
        "isOnline" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return PriceLevel
     */
    public function setName(string $name): PriceLevel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param float $discountpct
     * @return PriceLevel
     */
    public function setDiscountpct(float $discountpct): PriceLevel
    {
        $this->discountpct = $discountpct;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscountpct(): float
    {
        return $this->discountpct;
    }

    /**
     * @param bool $updateExistingPrices
     * @return PriceLevel
     */
    public function setUpdateExistingPrices(bool $updateExistingPrices): PriceLevel
    {
        $this->updateExistingPrices = $updateExistingPrices;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUpdateExistingPrices(): bool
    {
        return $this->updateExistingPrices;
    }

    /**
     * @param bool $isOnline
     * @return PriceLevel
     */
    public function setIsOnline(bool $isOnline): PriceLevel
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param bool $isInactive
     * @return PriceLevel
     */
    public function setIsInactive(bool $isInactive): PriceLevel
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $internalId
     * @return PriceLevel
     */
    public function setInternalId(string $internalId): PriceLevel
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return PriceLevel
     */
    public function setExternalId(string $externalId): PriceLevel
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
