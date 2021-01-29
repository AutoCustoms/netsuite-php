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

class ItemFulfillmentPackageFedEx {
    /**
     * @var float
     */
    protected float $packageWeightFedEx;

    /**
     * @var float
     */
    protected float $dryIceWeightFedEx;

    /**
     * @var string
     */
    protected string $packageTrackingNumberFedEx;

    /**
     * @var ItemFulfillmentPackageFedExPackagingFedEx
     */
    protected ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx;

    /**
     * @var ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    protected ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx;

    /**
     * @var bool
     */
    protected bool $isNonStandardContainerFedEx;

    /**
     * @var bool
     */
    protected bool $isAlcoholFedEx;

    /**
     * @var AlcoholRecipientType
     */
    protected AlcoholRecipientType $alcoholRecipientTypeFedEx;

    /**
     * @var bool
     */
    protected bool $isNonHazLithiumFedEx;

    /**
     * @var float
     */
    protected float $insuredValueFedEx;

    /**
     * @var bool
     */
    protected bool $useInsuredValueFedEx;

    protected $reference1FedEx;
    /**
     * @var ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    protected ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx;

    /**
     * @var string
     */
    protected string $priorityAlertContentFedEx;

    /**
     * @var int
     */
    protected int $packageLengthFedEx;

    /**
     * @var int
     */
    protected int $packageWidthFedEx;

    /**
     * @var int
     */
    protected int $packageHeightFedEx;

    /**
     * @var bool
     */
    protected bool $useCodFedEx;

    /**
     * @var float
     */
    protected float $codAmountFedEx;

    /**
     * @var ItemFulfillmentPackageFedExCodMethodFedEx
     */
    protected ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx;

    /**
     * @var ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    protected ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx;

    /**
     * @var ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    protected ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx;

    /**
     * @var ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    protected ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx;

    /**
     * @var string
     */
    protected string $signatureReleaseFedEx;

    /**
     * @var string
     */
    protected string $authorizationNumberFedEx;

    static $paramtypesmap = array(
        "packageWeightFedEx" => "float",
        "dryIceWeightFedEx" => "float",
        "packageTrackingNumberFedEx" => "string",
        "packagingFedEx" => "ItemFulfillmentPackageFedExPackagingFedEx",
        "admPackageTypeFedEx" => "ItemFulfillmentPackageFedExAdmPackageTypeFedEx",
        "isNonStandardContainerFedEx" => "boolean",
        "isAlcoholFedEx" => "boolean",
        "alcoholRecipientTypeFedEx" => "AlcoholRecipientType",
        "isNonHazLithiumFedEx" => "boolean",
        "insuredValueFedEx" => "float",
        "useInsuredValueFedEx" => "boolean",
        "reference1FedEx" => "string",
        "priorityAlertTypeFedEx" => "ItemFulfillmentPackageFedExPriorityAlertTypeFedEx",
        "priorityAlertContentFedEx" => "string",
        "packageLengthFedEx" => "integer",
        "packageWidthFedEx" => "integer",
        "packageHeightFedEx" => "integer",
        "useCodFedEx" => "boolean",
        "codAmountFedEx" => "float",
        "codMethodFedEx" => "ItemFulfillmentPackageFedExCodMethodFedEx",
        "codFreightTypeFedEx" => "ItemFulfillmentPackageFedExCodFreightTypeFedEx",
        "deliveryConfFedEx" => "ItemFulfillmentPackageFedExDeliveryConfFedEx",
        "signatureOptionsFedEx" => "ItemFulfillmentPackageFedExSignatureOptionsFedEx",
        "signatureReleaseFedEx" => "string",
        "authorizationNumberFedEx" => "string",
    );

    /**
     * @param float $packageWeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageWeightFedEx(float $packageWeightFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packageWeightFedEx = $packageWeightFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getPackageWeightFedEx(): float
    {
        return $this->packageWeightFedEx;
    }

    /**
     * @param float $dryIceWeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setDryIceWeightFedEx(float $dryIceWeightFedEx): ItemFulfillmentPackageFedEx
    {
        $this->dryIceWeightFedEx = $dryIceWeightFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getDryIceWeightFedEx(): float
    {
        return $this->dryIceWeightFedEx;
    }

    /**
     * @param string $packageTrackingNumberFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageTrackingNumberFedEx(string $packageTrackingNumberFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packageTrackingNumberFedEx = $packageTrackingNumberFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageTrackingNumberFedEx(): string
    {
        return $this->packageTrackingNumberFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackagingFedEx(ItemFulfillmentPackageFedExPackagingFedEx $packagingFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packagingFedEx = $packagingFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExPackagingFedEx
     */
    public function getPackagingFedEx(): ItemFulfillmentPackageFedExPackagingFedEx
    {
        return $this->packagingFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setAdmPackageTypeFedEx(ItemFulfillmentPackageFedExAdmPackageTypeFedEx $admPackageTypeFedEx): ItemFulfillmentPackageFedEx
    {
        $this->admPackageTypeFedEx = $admPackageTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExAdmPackageTypeFedEx
     */
    public function getAdmPackageTypeFedEx(): ItemFulfillmentPackageFedExAdmPackageTypeFedEx
    {
        return $this->admPackageTypeFedEx;
    }

    /**
     * @param bool $isNonStandardContainerFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsNonStandardContainerFedEx(bool $isNonStandardContainerFedEx): ItemFulfillmentPackageFedEx
    {
        $this->isNonStandardContainerFedEx = $isNonStandardContainerFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNonStandardContainerFedEx(): bool
    {
        return $this->isNonStandardContainerFedEx;
    }

    /**
     * @param bool $isAlcoholFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsAlcoholFedEx(bool $isAlcoholFedEx): ItemFulfillmentPackageFedEx
    {
        $this->isAlcoholFedEx = $isAlcoholFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAlcoholFedEx(): bool
    {
        return $this->isAlcoholFedEx;
    }

    /**
     * @param AlcoholRecipientType $alcoholRecipientTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setAlcoholRecipientTypeFedEx(AlcoholRecipientType $alcoholRecipientTypeFedEx): ItemFulfillmentPackageFedEx
    {
        $this->alcoholRecipientTypeFedEx = $alcoholRecipientTypeFedEx;
        return $this;
    }

    /**
     * @return AlcoholRecipientType
     */
    public function getAlcoholRecipientTypeFedEx(): AlcoholRecipientType
    {
        return $this->alcoholRecipientTypeFedEx;
    }

    /**
     * @param bool $isNonHazLithiumFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setIsNonHazLithiumFedEx(bool $isNonHazLithiumFedEx): ItemFulfillmentPackageFedEx
    {
        $this->isNonHazLithiumFedEx = $isNonHazLithiumFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsNonHazLithiumFedEx(): bool
    {
        return $this->isNonHazLithiumFedEx;
    }

    /**
     * @param float $insuredValueFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setInsuredValueFedEx(float $insuredValueFedEx): ItemFulfillmentPackageFedEx
    {
        $this->insuredValueFedEx = $insuredValueFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuredValueFedEx(): float
    {
        return $this->insuredValueFedEx;
    }

    /**
     * @param bool $useInsuredValueFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setUseInsuredValueFedEx(bool $useInsuredValueFedEx): ItemFulfillmentPackageFedEx
    {
        $this->useInsuredValueFedEx = $useInsuredValueFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseInsuredValueFedEx(): bool
    {
        return $this->useInsuredValueFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertTypeFedEx(ItemFulfillmentPackageFedExPriorityAlertTypeFedEx $priorityAlertTypeFedEx): ItemFulfillmentPackageFedEx
    {
        $this->priorityAlertTypeFedEx = $priorityAlertTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
     */
    public function getPriorityAlertTypeFedEx(): ItemFulfillmentPackageFedExPriorityAlertTypeFedEx
    {
        return $this->priorityAlertTypeFedEx;
    }

    /**
     * @param string $priorityAlertContentFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPriorityAlertContentFedEx(string $priorityAlertContentFedEx): ItemFulfillmentPackageFedEx
    {
        $this->priorityAlertContentFedEx = $priorityAlertContentFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriorityAlertContentFedEx(): string
    {
        return $this->priorityAlertContentFedEx;
    }

    /**
     * @param int $packageLengthFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageLengthFedEx(int $packageLengthFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packageLengthFedEx = $packageLengthFedEx;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageLengthFedEx(): int
    {
        return $this->packageLengthFedEx;
    }

    /**
     * @param int $packageWidthFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageWidthFedEx(int $packageWidthFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packageWidthFedEx = $packageWidthFedEx;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageWidthFedEx(): int
    {
        return $this->packageWidthFedEx;
    }

    /**
     * @param int $packageHeightFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setPackageHeightFedEx(int $packageHeightFedEx): ItemFulfillmentPackageFedEx
    {
        $this->packageHeightFedEx = $packageHeightFedEx;
        return $this;
    }

    /**
     * @return int
     */
    public function getPackageHeightFedEx(): int
    {
        return $this->packageHeightFedEx;
    }

    /**
     * @param bool $useCodFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setUseCodFedEx(bool $useCodFedEx): ItemFulfillmentPackageFedEx
    {
        $this->useCodFedEx = $useCodFedEx;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUseCodFedEx(): bool
    {
        return $this->useCodFedEx;
    }

    /**
     * @param float $codAmountFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodAmountFedEx(float $codAmountFedEx): ItemFulfillmentPackageFedEx
    {
        $this->codAmountFedEx = $codAmountFedEx;
        return $this;
    }

    /**
     * @return float
     */
    public function getCodAmountFedEx(): float
    {
        return $this->codAmountFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodMethodFedEx(ItemFulfillmentPackageFedExCodMethodFedEx $codMethodFedEx): ItemFulfillmentPackageFedEx
    {
        $this->codMethodFedEx = $codMethodFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExCodMethodFedEx
     */
    public function getCodMethodFedEx(): ItemFulfillmentPackageFedExCodMethodFedEx
    {
        return $this->codMethodFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setCodFreightTypeFedEx(ItemFulfillmentPackageFedExCodFreightTypeFedEx $codFreightTypeFedEx): ItemFulfillmentPackageFedEx
    {
        $this->codFreightTypeFedEx = $codFreightTypeFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExCodFreightTypeFedEx
     */
    public function getCodFreightTypeFedEx(): ItemFulfillmentPackageFedExCodFreightTypeFedEx
    {
        return $this->codFreightTypeFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setDeliveryConfFedEx(ItemFulfillmentPackageFedExDeliveryConfFedEx $deliveryConfFedEx): ItemFulfillmentPackageFedEx
    {
        $this->deliveryConfFedEx = $deliveryConfFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExDeliveryConfFedEx
     */
    public function getDeliveryConfFedEx(): ItemFulfillmentPackageFedExDeliveryConfFedEx
    {
        return $this->deliveryConfFedEx;
    }

    /**
     * @param ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setSignatureOptionsFedEx(ItemFulfillmentPackageFedExSignatureOptionsFedEx $signatureOptionsFedEx): ItemFulfillmentPackageFedEx
    {
        $this->signatureOptionsFedEx = $signatureOptionsFedEx;
        return $this;
    }

    /**
     * @return ItemFulfillmentPackageFedExSignatureOptionsFedEx
     */
    public function getSignatureOptionsFedEx(): ItemFulfillmentPackageFedExSignatureOptionsFedEx
    {
        return $this->signatureOptionsFedEx;
    }

    /**
     * @param string $signatureReleaseFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setSignatureReleaseFedEx(string $signatureReleaseFedEx): ItemFulfillmentPackageFedEx
    {
        $this->signatureReleaseFedEx = $signatureReleaseFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureReleaseFedEx(): string
    {
        return $this->signatureReleaseFedEx;
    }

    /**
     * @param string $authorizationNumberFedEx
     * @return ItemFulfillmentPackageFedEx
     */
    public function setAuthorizationNumberFedEx(string $authorizationNumberFedEx): ItemFulfillmentPackageFedEx
    {
        $this->authorizationNumberFedEx = $authorizationNumberFedEx;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorizationNumberFedEx(): string
    {
        return $this->authorizationNumberFedEx;
    }

}
