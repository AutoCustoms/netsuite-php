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

class PromotionCode extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $implementation;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var PromotionCodeUseType
     */
    protected PromotionCodeUseType $useType;

    /**
     * @var bool
     */
    protected bool $displayLineDiscounts;

    /**
     * @var string
     */
    protected string $code;

    /**
     * @var string
     */
    protected string $codePattern;

    /**
     * @var int
     */
    protected int $numberToGenerate;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $locationList;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var RecordRef
     */
    protected RecordRef $discount;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var bool
     */
    protected bool $discountType;

    /**
     * @var PromotionCodeApplyDiscountTo
     */
    protected PromotionCodeApplyDiscountTo $applyDiscountTo;

    /**
     * @var RecordRef
     */
    protected RecordRef $freeShipMethod;

    /**
     * @var float
     */
    protected float $minimumOrderAmount;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var bool
     */
    protected bool $isPublic;

    /**
     * @var PromotionCodeCurrencyList
     */
    protected PromotionCodeCurrencyList $currencyList;

    /**
     * @var bool
     */
    protected bool $excludeItems;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var PromotionCodeItemsList
     */
    protected PromotionCodeItemsList $itemsList;

    /**
     * @var PromotionCodePartnersList
     */
    protected PromotionCodePartnersList $partnersList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "implementation" => "RecordRef",
        "customForm" => "RecordRef",
        "useType" => "PromotionCodeUseType",
        "displayLineDiscounts" => "boolean",
        "code" => "string",
        "codePattern" => "string",
        "numberToGenerate" => "integer",
        "description" => "string",
        "locationList" => "RecordRefList",
        "isInactive" => "boolean",
        "discount" => "RecordRef",
        "rate" => "string",
        "discountType" => "boolean",
        "applyDiscountTo" => "PromotionCodeApplyDiscountTo",
        "freeShipMethod" => "RecordRef",
        "minimumOrderAmount" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "isPublic" => "boolean",
        "currencyList" => "PromotionCodeCurrencyList",
        "excludeItems" => "boolean",
        "name" => "string",
        "itemsList" => "PromotionCodeItemsList",
        "partnersList" => "PromotionCodePartnersList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $implementation
     * @return PromotionCode
     */
    public function setImplementation(RecordRef $implementation): PromotionCode
    {
        $this->implementation = $implementation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getImplementation(): RecordRef
    {
        return $this->implementation;
    }

    /**
     * @param RecordRef $customForm
     * @return PromotionCode
     */
    public function setCustomForm(RecordRef $customForm): PromotionCode
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param PromotionCodeUseType $useType
     * @return PromotionCode
     */
    public function setUseType(PromotionCodeUseType $useType): PromotionCode
    {
        $this->useType = $useType;
        return $this;
    }

    /**
     * @return PromotionCodeUseType
     */
    public function getUseType(): PromotionCodeUseType
    {
        return $this->useType;
    }

    /**
     * @param bool $displayLineDiscounts
     * @return PromotionCode
     */
    public function setDisplayLineDiscounts(bool $displayLineDiscounts): PromotionCode
    {
        $this->displayLineDiscounts = $displayLineDiscounts;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisplayLineDiscounts(): bool
    {
        return $this->displayLineDiscounts;
    }

    /**
     * @param string $code
     * @return PromotionCode
     */
    public function setCode(string $code): PromotionCode
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $codePattern
     * @return PromotionCode
     */
    public function setCodePattern(string $codePattern): PromotionCode
    {
        $this->codePattern = $codePattern;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodePattern(): string
    {
        return $this->codePattern;
    }

    /**
     * @param int $numberToGenerate
     * @return PromotionCode
     */
    public function setNumberToGenerate(int $numberToGenerate): PromotionCode
    {
        $this->numberToGenerate = $numberToGenerate;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberToGenerate(): int
    {
        return $this->numberToGenerate;
    }

    /**
     * @param string $description
     * @return PromotionCode
     */
    public function setDescription(string $description): PromotionCode
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRefList $locationList
     * @return PromotionCode
     */
    public function setLocationList(RecordRefList $locationList): PromotionCode
    {
        $this->locationList = $locationList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getLocationList(): RecordRefList
    {
        return $this->locationList;
    }

    /**
     * @param bool $isInactive
     * @return PromotionCode
     */
    public function setIsInactive(bool $isInactive): PromotionCode
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
     * @param RecordRef $discount
     * @return PromotionCode
     */
    public function setDiscount(RecordRef $discount): PromotionCode
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDiscount(): RecordRef
    {
        return $this->discount;
    }

    /**
     * @param string $rate
     * @return PromotionCode
     */
    public function setRate(string $rate): PromotionCode
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRate(): string
    {
        return $this->rate;
    }

    /**
     * @param bool $discountType
     * @return PromotionCode
     */
    public function setDiscountType(bool $discountType): PromotionCode
    {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDiscountType(): bool
    {
        return $this->discountType;
    }

    /**
     * @param PromotionCodeApplyDiscountTo $applyDiscountTo
     * @return PromotionCode
     */
    public function setApplyDiscountTo(PromotionCodeApplyDiscountTo $applyDiscountTo): PromotionCode
    {
        $this->applyDiscountTo = $applyDiscountTo;
        return $this;
    }

    /**
     * @return PromotionCodeApplyDiscountTo
     */
    public function getApplyDiscountTo(): PromotionCodeApplyDiscountTo
    {
        return $this->applyDiscountTo;
    }

    /**
     * @param RecordRef $freeShipMethod
     * @return PromotionCode
     */
    public function setFreeShipMethod(RecordRef $freeShipMethod): PromotionCode
    {
        $this->freeShipMethod = $freeShipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFreeShipMethod(): RecordRef
    {
        return $this->freeShipMethod;
    }

    /**
     * @param float $minimumOrderAmount
     * @return PromotionCode
     */
    public function setMinimumOrderAmount(float $minimumOrderAmount): PromotionCode
    {
        $this->minimumOrderAmount = $minimumOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinimumOrderAmount(): float
    {
        return $this->minimumOrderAmount;
    }

    /**
     * @param string $startDate
     * @return PromotionCode
     */
    public function setStartDate(string $startDate): PromotionCode
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->startDate;
    }

    /**
     * @param string $endDate
     * @return PromotionCode
     */
    public function setEndDate(string $endDate): PromotionCode
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->endDate;
    }

    /**
     * @param bool $isPublic
     * @return PromotionCode
     */
    public function setIsPublic(bool $isPublic): PromotionCode
    {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    /**
     * @param PromotionCodeCurrencyList $currencyList
     * @return PromotionCode
     */
    public function setCurrencyList(PromotionCodeCurrencyList $currencyList): PromotionCode
    {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * @return PromotionCodeCurrencyList
     */
    public function getCurrencyList(): PromotionCodeCurrencyList
    {
        return $this->currencyList;
    }

    /**
     * @param bool $excludeItems
     * @return PromotionCode
     */
    public function setExcludeItems(bool $excludeItems): PromotionCode
    {
        $this->excludeItems = $excludeItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeItems(): bool
    {
        return $this->excludeItems;
    }

    /**
     * @param string $name
     * @return PromotionCode
     */
    public function setName(string $name): PromotionCode
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
     * @param PromotionCodeItemsList $itemsList
     * @return PromotionCode
     */
    public function setItemsList(PromotionCodeItemsList $itemsList): PromotionCode
    {
        $this->itemsList = $itemsList;
        return $this;
    }

    /**
     * @return PromotionCodeItemsList
     */
    public function getItemsList(): PromotionCodeItemsList
    {
        return $this->itemsList;
    }

    /**
     * @param PromotionCodePartnersList $partnersList
     * @return PromotionCode
     */
    public function setPartnersList(PromotionCodePartnersList $partnersList): PromotionCode
    {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * @return PromotionCodePartnersList
     */
    public function getPartnersList(): PromotionCodePartnersList
    {
        return $this->partnersList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return PromotionCode
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): PromotionCode
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return PromotionCode
     */
    public function setInternalId(string $internalId): PromotionCode
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
     * @return PromotionCode
     */
    public function setExternalId(string $externalId): PromotionCode
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
