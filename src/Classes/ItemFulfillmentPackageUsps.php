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

class ItemFulfillmentPackageUsps {
    /**
     * @var float
     */
    protected float $packageWeightUsps;

    /**
     * @var string
     */
    protected string $packageDescrUsps;

    /**
     * @var string
     */
    protected string $packageTrackingNumberUsps;

    /**
     * @var ItemFulfillmentPackageUspsPackagingUsps
     */
    protected ItemFulfillmentPackageUspsPackagingUsps $packagingUsps;

    /**
     * @var bool
     */
    protected bool $useInsuredValueUsps;

    /**
     * @var float
     */
    protected float $insuredValueUsps;

    protected $reference1Usps;
    protected $reference2Usps;
    /**
     * @var int
     */
    protected int $packageLengthUsps;

    /**
     * @var int
     */
    protected int $packageWidthUsps;

    /**
     * @var int
     */
    protected int $packageHeightUsps;

    /**
     * @var ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    protected ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps;

    static $paramtypesmap = array(
        "packageWeightUsps" => "float",
        "packageDescrUsps" => "string",
        "packageTrackingNumberUsps" => "string",
        "packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
        "useInsuredValueUsps" => "boolean",
        "insuredValueUsps" => "float",
        "reference1Usps" => "string",
        "reference2Usps" => "string",
        "packageLengthUsps" => "integer",
        "packageWidthUsps" => "integer",
        "packageHeightUsps" => "integer",
        "deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
    );

    /**
     * @param float $packageWeightUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageWeightUsps(float $packageWeightUsps): ItemFulfillmentPackageUsps
    {
        $this->packageWeightUsps = $packageWeightUsps;
        return $this;
    }

    /**
     * @return float
     */
    public function getPackageWeightUsps(): float
    {
        return $this->packageWeightUsps;
    }

    /**
     * @param string $packageDescrUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageDescrUsps(string $packageDescrUsps): ItemFulfillmentPackageUsps
    {
        $this->packageDescrUsps = $packageDescrUsps;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescrUsps(): string
    {
        return $this->packageDescrUsps;
    }

    /**
     * @param string $packageTrackingNumberUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageTrackingNumberUsps(string $packageTrackingNumberUsps): ItemFulfillmentPackageUsps
    {
        $this->packageTrackingNumberUsps = $packageTrackingNumberUsps;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberUsps(): string
    {
        return $this->packageTrackingNumberUsps;
    }

    /**
     * @param ItemFulfillmentPackageUspsPackagingUsps $packagingUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackagingUsps(ItemFulfillmentPackageUspsPackagingUsps $packagingUsps): ItemFulfillmentPackageUsps
    {
        $this->packagingUsps = $packagingUsps;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsPackagingUsps
     */
    public function getPackagingUsps(): ItemFulfillmentPackageUspsPackagingUsps
    {
        return $this->packagingUsps;
    }

    /**
     * @param bool $useInsuredValueUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setUseInsuredValueUsps(bool $useInsuredValueUsps): ItemFulfillmentPackageUsps
    {
        $this->useInsuredValueUsps = $useInsuredValueUsps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseInsuredValueUsps(): bool
    {
        return $this->useInsuredValueUsps;
    }

    /**
     * @param float $insuredValueUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setInsuredValueUsps(float $insuredValueUsps): ItemFulfillmentPackageUsps
    {
        $this->insuredValueUsps = $insuredValueUsps;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueUsps(): float
    {
        return $this->insuredValueUsps;
    }

    /**
     * @param int $packageLengthUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageLengthUsps(int $packageLengthUsps): ItemFulfillmentPackageUsps
    {
        $this->packageLengthUsps = $packageLengthUsps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthUsps(): int
    {
        return $this->packageLengthUsps;
    }

    /**
     * @param int $packageWidthUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageWidthUsps(int $packageWidthUsps): ItemFulfillmentPackageUsps
    {
        $this->packageWidthUsps = $packageWidthUsps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthUsps(): int
    {
        return $this->packageWidthUsps;
    }

    /**
     * @param int $packageHeightUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setPackageHeightUsps(int $packageHeightUsps): ItemFulfillmentPackageUsps
    {
        $this->packageHeightUsps = $packageHeightUsps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightUsps(): int
    {
        return $this->packageHeightUsps;
    }

    /**
     * @param ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps
     * @return ItemFulfillmentPackageUsps
     */
    public function setDeliveryConfUsps(ItemFulfillmentPackageUspsDeliveryConfUsps $deliveryConfUsps): ItemFulfillmentPackageUsps
    {
        $this->deliveryConfUsps = $deliveryConfUsps;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUspsDeliveryConfUsps
     */
    public function getDeliveryConfUsps(): ItemFulfillmentPackageUspsDeliveryConfUsps
    {
        return $this->deliveryConfUsps;
    }

}
