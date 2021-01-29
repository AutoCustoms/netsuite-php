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

class ItemVendor {
    /**
     * @var RecordRef
     */
    protected RecordRef $vendor;

    /**
     * @var string
     */
    protected string $vendorCode;

    /**
     * @var string
     */
    protected string $vendorCurrencyName;

    /**
     * @var RecordRef
     */
    protected RecordRef $vendorCurrency;

    /**
     * @var float
     */
    protected float $purchasePrice;

    /**
     * @var bool
     */
    protected bool $preferredVendor;

    /**
     * @var RecordRef
     */
    protected RecordRef $schedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    static $paramtypesmap = array(
        "vendor" => "RecordRef",
        "vendorCode" => "string",
        "vendorCurrencyName" => "string",
        "vendorCurrency" => "RecordRef",
        "purchasePrice" => "float",
        "preferredVendor" => "boolean",
        "schedule" => "RecordRef",
        "subsidiary" => "RecordRef",
    );

    /**
     * @param RecordRef $vendor
     * @return ItemVendor
     */
    public function setVendor(RecordRef $vendor): ItemVendor
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor(): RecordRef
    {
        return $this->vendor;
    }

    /**
     * @param string $vendorCode
     * @return ItemVendor
     */
    public function setVendorCode(string $vendorCode): ItemVendor
    {
        $this->vendorCode = $vendorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }

    /**
     * @param string $vendorCurrencyName
     * @return ItemVendor
     */
    public function setVendorCurrencyName(string $vendorCurrencyName): ItemVendor
    {
        $this->vendorCurrencyName = $vendorCurrencyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorCurrencyName(): string
    {
        return $this->vendorCurrencyName;
    }

    /**
     * @param RecordRef $vendorCurrency
     * @return ItemVendor
     */
    public function setVendorCurrency(RecordRef $vendorCurrency): ItemVendor
    {
        $this->vendorCurrency = $vendorCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendorCurrency(): RecordRef
    {
        return $this->vendorCurrency;
    }

    /**
     * @param float $purchasePrice
     * @return ItemVendor
     */
    public function setPurchasePrice(float $purchasePrice): ItemVendor
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice(): float
    {
        return $this->purchasePrice;
    }

    /**
     * @param bool $preferredVendor
     * @return ItemVendor
     */
    public function setPreferredVendor(bool $preferredVendor): ItemVendor
    {
        $this->preferredVendor = $preferredVendor;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferredVendor(): bool
    {
        return $this->preferredVendor;
    }

    /**
     * @param RecordRef $schedule
     * @return ItemVendor
     */
    public function setSchedule(RecordRef $schedule): ItemVendor
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSchedule(): RecordRef
    {
        return $this->schedule;
    }

    /**
     * @param RecordRef $subsidiary
     * @return ItemVendor
     */
    public function setSubsidiary(RecordRef $subsidiary): ItemVendor
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

}
