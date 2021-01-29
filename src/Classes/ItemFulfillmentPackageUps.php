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

class ItemFulfillmentPackageUps {
    /**
     * @var float
     */
    protected float $packageWeightUps;

    /**
     * @var string
     */
    protected string $packageDescrUps;

    /**
     * @var string
     */
    protected string $packageTrackingNumberUps;

    /**
     * @var ItemFulfillmentPackageUpsPackagingUps
     */
    protected ItemFulfillmentPackageUpsPackagingUps $packagingUps;

    /**
     * @var bool
     */
    protected bool $useInsuredValueUps;

    /**
     * @var float
     */
    protected float $insuredValueUps;

    protected $reference1Ups;
    protected $reference2Ups;
    /**
     * @var int
     */
    protected int $packageLengthUps;

    /**
     * @var int
     */
    protected int $packageWidthUps;

    /**
     * @var int
     */
    protected int $packageHeightUps;

    /**
     * @var bool
     */
    protected bool $additionalHandlingUps;

    /**
     * @var bool
     */
    protected bool $useCodUps;

    /**
     * @var float
     */
    protected float $codAmountUps;

    /**
     * @var ItemFulfillmentPackageUpsCodMethodUps
     */
    protected ItemFulfillmentPackageUpsCodMethodUps $codMethodUps;

    /**
     * @var ItemFulfillmentPackageUpsDeliveryConfUps
     */
    protected ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps;

    static $paramtypesmap = array(
        "packageWeightUps" => "float",
        "packageDescrUps" => "string",
        "packageTrackingNumberUps" => "string",
        "packagingUps" => "ItemFulfillmentPackageUpsPackagingUps",
        "useInsuredValueUps" => "boolean",
        "insuredValueUps" => "float",
        "reference1Ups" => "string",
        "reference2Ups" => "string",
        "packageLengthUps" => "integer",
        "packageWidthUps" => "integer",
        "packageHeightUps" => "integer",
        "additionalHandlingUps" => "boolean",
        "useCodUps" => "boolean",
        "codAmountUps" => "float",
        "codMethodUps" => "ItemFulfillmentPackageUpsCodMethodUps",
        "deliveryConfUps" => "ItemFulfillmentPackageUpsDeliveryConfUps",
    );

    /**
     * @param float $packageWeightUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageWeightUps(float $packageWeightUps): ItemFulfillmentPackageUps
    {
        $this->packageWeightUps = $packageWeightUps;
        return $this;
    }

    /**
     * @return float
     */
    public function getPackageWeightUps(): float
    {
        return $this->packageWeightUps;
    }

    /**
     * @param string $packageDescrUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageDescrUps(string $packageDescrUps): ItemFulfillmentPackageUps
    {
        $this->packageDescrUps = $packageDescrUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageDescrUps(): string
    {
        return $this->packageDescrUps;
    }

    /**
     * @param string $packageTrackingNumberUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageTrackingNumberUps(string $packageTrackingNumberUps): ItemFulfillmentPackageUps
    {
        $this->packageTrackingNumberUps = $packageTrackingNumberUps;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberUps(): string
    {
        return $this->packageTrackingNumberUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsPackagingUps $packagingUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackagingUps(ItemFulfillmentPackageUpsPackagingUps $packagingUps): ItemFulfillmentPackageUps
    {
        $this->packagingUps = $packagingUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsPackagingUps
     */
    public function getPackagingUps(): ItemFulfillmentPackageUpsPackagingUps
    {
        return $this->packagingUps;
    }

    /**
     * @param bool $useInsuredValueUps
     * @return ItemFulfillmentPackageUps
     */
    public function setUseInsuredValueUps(bool $useInsuredValueUps): ItemFulfillmentPackageUps
    {
        $this->useInsuredValueUps = $useInsuredValueUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseInsuredValueUps(): bool
    {
        return $this->useInsuredValueUps;
    }

    /**
     * @param float $insuredValueUps
     * @return ItemFulfillmentPackageUps
     */
    public function setInsuredValueUps(float $insuredValueUps): ItemFulfillmentPackageUps
    {
        $this->insuredValueUps = $insuredValueUps;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueUps(): float
    {
        return $this->insuredValueUps;
    }

    /**
     * @param int $packageLengthUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageLengthUps(int $packageLengthUps): ItemFulfillmentPackageUps
    {
        $this->packageLengthUps = $packageLengthUps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthUps(): int
    {
        return $this->packageLengthUps;
    }

    /**
     * @param int $packageWidthUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageWidthUps(int $packageWidthUps): ItemFulfillmentPackageUps
    {
        $this->packageWidthUps = $packageWidthUps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthUps(): int
    {
        return $this->packageWidthUps;
    }

    /**
     * @param int $packageHeightUps
     * @return ItemFulfillmentPackageUps
     */
    public function setPackageHeightUps(int $packageHeightUps): ItemFulfillmentPackageUps
    {
        $this->packageHeightUps = $packageHeightUps;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightUps(): int
    {
        return $this->packageHeightUps;
    }

    /**
     * @param bool $additionalHandlingUps
     * @return ItemFulfillmentPackageUps
     */
    public function setAdditionalHandlingUps(bool $additionalHandlingUps): ItemFulfillmentPackageUps
    {
        $this->additionalHandlingUps = $additionalHandlingUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAdditionalHandlingUps(): bool
    {
        return $this->additionalHandlingUps;
    }

    /**
     * @param bool $useCodUps
     * @return ItemFulfillmentPackageUps
     */
    public function setUseCodUps(bool $useCodUps): ItemFulfillmentPackageUps
    {
        $this->useCodUps = $useCodUps;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseCodUps(): bool
    {
        return $this->useCodUps;
    }

    /**
     * @param float $codAmountUps
     * @return ItemFulfillmentPackageUps
     */
    public function setCodAmountUps(float $codAmountUps): ItemFulfillmentPackageUps
    {
        $this->codAmountUps = $codAmountUps;
        return $this;
    }

    /**
     * @return float
     */
    public function getCodAmountUps(): float
    {
        return $this->codAmountUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsCodMethodUps $codMethodUps
     * @return ItemFulfillmentPackageUps
     */
    public function setCodMethodUps(ItemFulfillmentPackageUpsCodMethodUps $codMethodUps): ItemFulfillmentPackageUps
    {
        $this->codMethodUps = $codMethodUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsCodMethodUps
     */
    public function getCodMethodUps(): ItemFulfillmentPackageUpsCodMethodUps
    {
        return $this->codMethodUps;
    }

    /**
     * @param ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps
     * @return ItemFulfillmentPackageUps
     */
    public function setDeliveryConfUps(ItemFulfillmentPackageUpsDeliveryConfUps $deliveryConfUps): ItemFulfillmentPackageUps
    {
        $this->deliveryConfUps = $deliveryConfUps;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageUpsDeliveryConfUps
     */
    public function getDeliveryConfUps(): ItemFulfillmentPackageUpsDeliveryConfUps
    {
        return $this->deliveryConfUps;
    }

}
