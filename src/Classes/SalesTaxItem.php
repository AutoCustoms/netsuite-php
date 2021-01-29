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

class SalesTaxItem extends Record {
    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var string
     */
    protected string $rate;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxType;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAgency;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $saleAccount;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $effectiveFrom;

    /**
     * @var string
     */
    protected string $validUntil;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var bool
     */
    protected bool $eccode;

    /**
     * @var bool
     */
    protected bool $reverseCharge;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $service;

    /**
     * @var bool
     */
    protected bool $exempt;

    /**
     * @var bool
     */
    protected bool $isDefault;

    /**
     * @var bool
     */
    protected bool $excludeFromTaxReports;

    /**
     * @var SalesTaxItemAvailable
     */
    protected SalesTaxItemAvailable $available;

    /**
     * @var bool
     */
    protected bool $export;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxAccount;

    /**
     * @var string
     */
    protected string $county;

    /**
     * @var string
     */
    protected string $city;

    /**
     * @var string
     */
    protected string $state;

    /**
     * @var string
     */
    protected string $zip;

    /**
     * @var RecordRef
     */
    protected RecordRef $nexusCountry;

    /**
     * @var string
     */
    protected string $name;

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
        "itemId" => "string",
        "displayName" => "string",
        "description" => "string",
        "rate" => "string",
        "taxType" => "RecordRef",
        "taxAgency" => "RecordRef",
        "purchaseAccount" => "RecordRef",
        "saleAccount" => "RecordRef",
        "isInactive" => "boolean",
        "effectiveFrom" => "dateTime",
        "validUntil" => "dateTime",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "eccode" => "boolean",
        "reverseCharge" => "boolean",
        "parent" => "RecordRef",
        "service" => "boolean",
        "exempt" => "boolean",
        "isDefault" => "boolean",
        "excludeFromTaxReports" => "boolean",
        "available" => "SalesTaxItemAvailable",
        "export" => "boolean",
        "taxAccount" => "RecordRef",
        "county" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "nexusCountry" => "RecordRef",
        "name" => "string",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $itemId
     * @return SalesTaxItem
     */
    public function setItemId(string $itemId): SalesTaxItem
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $displayName
     * @return SalesTaxItem
     */
    public function setDisplayName(string $displayName): SalesTaxItem
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $description
     * @return SalesTaxItem
     */
    public function setDescription(string $description): SalesTaxItem
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
     * @param string $rate
     * @return SalesTaxItem
     */
    public function setRate(string $rate): SalesTaxItem
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
     * @param RecordRef $taxType
     * @return SalesTaxItem
     */
    public function setTaxType(RecordRef $taxType): SalesTaxItem
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxType(): RecordRef
    {
        return $this->taxType;
    }

    /**
     * @param RecordRef $taxAgency
     * @return SalesTaxItem
     */
    public function setTaxAgency(RecordRef $taxAgency): SalesTaxItem
    {
        $this->taxAgency = $taxAgency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAgency(): RecordRef
    {
        return $this->taxAgency;
    }

    /**
     * @param RecordRef $purchaseAccount
     * @return SalesTaxItem
     */
    public function setPurchaseAccount(RecordRef $purchaseAccount): SalesTaxItem
    {
        $this->purchaseAccount = $purchaseAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseAccount(): RecordRef
    {
        return $this->purchaseAccount;
    }

    /**
     * @param RecordRef $saleAccount
     * @return SalesTaxItem
     */
    public function setSaleAccount(RecordRef $saleAccount): SalesTaxItem
    {
        $this->saleAccount = $saleAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSaleAccount(): RecordRef
    {
        return $this->saleAccount;
    }

    /**
     * @param bool $isInactive
     * @return SalesTaxItem
     */
    public function setIsInactive(bool $isInactive): SalesTaxItem
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
     * @param string $effectiveFrom
     * @return SalesTaxItem
     */
    public function setEffectiveFrom(string $effectiveFrom): SalesTaxItem
    {
        $this->effectiveFrom = $effectiveFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveFrom(): string
    {
        return $this->effectiveFrom;
    }

    /**
     * @param string $validUntil
     * @return SalesTaxItem
     */
    public function setValidUntil(string $validUntil): SalesTaxItem
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * @return string
     */
    public function getValidUntil(): string
    {
        return $this->validUntil;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return SalesTaxItem
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): SalesTaxItem
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param bool $includeChildren
     * @return SalesTaxItem
     */
    public function setIncludeChildren(bool $includeChildren): SalesTaxItem
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param bool $eccode
     * @return SalesTaxItem
     */
    public function setEccode(bool $eccode): SalesTaxItem
    {
        $this->eccode = $eccode;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEccode(): bool
    {
        return $this->eccode;
    }

    /**
     * @param bool $reverseCharge
     * @return SalesTaxItem
     */
    public function setReverseCharge(bool $reverseCharge): SalesTaxItem
    {
        $this->reverseCharge = $reverseCharge;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReverseCharge(): bool
    {
        return $this->reverseCharge;
    }

    /**
     * @param RecordRef $parent
     * @return SalesTaxItem
     */
    public function setParent(RecordRef $parent): SalesTaxItem
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param bool $service
     * @return SalesTaxItem
     */
    public function setService(bool $service): SalesTaxItem
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return bool
     */
    public function getService(): bool
    {
        return $this->service;
    }

    /**
     * @param bool $exempt
     * @return SalesTaxItem
     */
    public function setExempt(bool $exempt): SalesTaxItem
    {
        $this->exempt = $exempt;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExempt(): bool
    {
        return $this->exempt;
    }

    /**
     * @param bool $isDefault
     * @return SalesTaxItem
     */
    public function setIsDefault(bool $isDefault): SalesTaxItem
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $excludeFromTaxReports
     * @return SalesTaxItem
     */
    public function setExcludeFromTaxReports(bool $excludeFromTaxReports): SalesTaxItem
    {
        $this->excludeFromTaxReports = $excludeFromTaxReports;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExcludeFromTaxReports(): bool
    {
        return $this->excludeFromTaxReports;
    }

    /**
     * @param SalesTaxItemAvailable $available
     * @return SalesTaxItem
     */
    public function setAvailable(SalesTaxItemAvailable $available): SalesTaxItem
    {
        $this->available = $available;
        return $this;
    }

    /**
     * @return SalesTaxItemAvailable
     */
    public function getAvailable(): SalesTaxItemAvailable
    {
        return $this->available;
    }

    /**
     * @param bool $export
     * @return SalesTaxItem
     */
    public function setExport(bool $export): SalesTaxItem
    {
        $this->export = $export;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExport(): bool
    {
        return $this->export;
    }

    /**
     * @param RecordRef $taxAccount
     * @return SalesTaxItem
     */
    public function setTaxAccount(RecordRef $taxAccount): SalesTaxItem
    {
        $this->taxAccount = $taxAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxAccount(): RecordRef
    {
        return $this->taxAccount;
    }

    /**
     * @param string $county
     * @return SalesTaxItem
     */
    public function setCounty(string $county): SalesTaxItem
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return string
     */
    public function getCounty(): string
    {
        return $this->county;
    }

    /**
     * @param string $city
     * @return SalesTaxItem
     */
    public function setCity(string $city): SalesTaxItem
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $state
     * @return SalesTaxItem
     */
    public function setState(string $state): SalesTaxItem
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $zip
     * @return SalesTaxItem
     */
    public function setZip(string $zip): SalesTaxItem
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param RecordRef $nexusCountry
     * @return SalesTaxItem
     */
    public function setNexusCountry(RecordRef $nexusCountry): SalesTaxItem
    {
        $this->nexusCountry = $nexusCountry;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexusCountry(): RecordRef
    {
        return $this->nexusCountry;
    }

    /**
     * @param string $name
     * @return SalesTaxItem
     */
    public function setName(string $name): SalesTaxItem
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
     * @param CustomFieldList $customFieldList
     * @return SalesTaxItem
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): SalesTaxItem
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
     * @return SalesTaxItem
     */
    public function setInternalId(string $internalId): SalesTaxItem
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
     * @return SalesTaxItem
     */
    public function setExternalId(string $externalId): SalesTaxItem
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
