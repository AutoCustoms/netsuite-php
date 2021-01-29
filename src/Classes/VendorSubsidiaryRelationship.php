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

class VendorSubsidiaryRelationship extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $baseCurrency;

    /**
     * @var float
     */
    protected float $creditLimit;

    /**
     * @var RecordRef
     */
    protected RecordRef $entity;

    /**
     * @var bool
     */
    protected bool $isPrimarySub;

    /**
     * @var RecordRef
     */
    protected RecordRef $primaryCurrency;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxItem;

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
        "baseCurrency" => "RecordRef",
        "creditLimit" => "float",
        "entity" => "RecordRef",
        "isPrimarySub" => "boolean",
        "primaryCurrency" => "RecordRef",
        "subsidiary" => "RecordRef",
        "taxItem" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $baseCurrency
     * @return VendorSubsidiaryRelationship
     */
    public function setBaseCurrency(RecordRef $baseCurrency): VendorSubsidiaryRelationship
    {
        $this->baseCurrency = $baseCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBaseCurrency(): RecordRef
    {
        return $this->baseCurrency;
    }

    /**
     * @param float $creditLimit
     * @return VendorSubsidiaryRelationship
     */
    public function setCreditLimit(float $creditLimit): VendorSubsidiaryRelationship
    {
        $this->creditLimit = $creditLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getCreditLimit(): float
    {
        return $this->creditLimit;
    }

    /**
     * @param RecordRef $entity
     * @return VendorSubsidiaryRelationship
     */
    public function setEntity(RecordRef $entity): VendorSubsidiaryRelationship
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntity(): RecordRef
    {
        return $this->entity;
    }

    /**
     * @param bool $isPrimarySub
     * @return VendorSubsidiaryRelationship
     */
    public function setIsPrimarySub(bool $isPrimarySub): VendorSubsidiaryRelationship
    {
        $this->isPrimarySub = $isPrimarySub;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrimarySub(): bool
    {
        return $this->isPrimarySub;
    }

    /**
     * @param RecordRef $primaryCurrency
     * @return VendorSubsidiaryRelationship
     */
    public function setPrimaryCurrency(RecordRef $primaryCurrency): VendorSubsidiaryRelationship
    {
        $this->primaryCurrency = $primaryCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPrimaryCurrency(): RecordRef
    {
        return $this->primaryCurrency;
    }

    /**
     * @param RecordRef $subsidiary
     * @return VendorSubsidiaryRelationship
     */
    public function setSubsidiary(RecordRef $subsidiary): VendorSubsidiaryRelationship
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

    /**
     * @param RecordRef $taxItem
     * @return VendorSubsidiaryRelationship
     */
    public function setTaxItem(RecordRef $taxItem): VendorSubsidiaryRelationship
    {
        $this->taxItem = $taxItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxItem(): RecordRef
    {
        return $this->taxItem;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return VendorSubsidiaryRelationship
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): VendorSubsidiaryRelationship
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
     * @return VendorSubsidiaryRelationship
     */
    public function setInternalId(string $internalId): VendorSubsidiaryRelationship
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
     * @return VendorSubsidiaryRelationship
     */
    public function setExternalId(string $externalId): VendorSubsidiaryRelationship
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
