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

class SubsidiarySearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBook;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $accountingBookCurrency;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $address;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $currency;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $effectiveFrom;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $fax;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isElimination;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $legalName;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $nameNoHierarchy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $nexus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderQuantityDiff;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptQuantity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $receiptQuantityDiff;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxEngine;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $taxIdNum;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $taxRegistrationNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $tranPrefix;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $url;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $validUntil;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zip;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingBook" => "SearchMultiSelectField",
        "accountingBookCurrency" => "SearchMultiSelectField",
        "address" => "SearchStringField",
        "city" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "effectiveFrom" => "SearchDateField",
        "email" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isElimination" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "legalName" => "SearchStringField",
        "name" => "SearchStringField",
        "nameNoHierarchy" => "SearchStringField",
        "nexus" => "SearchMultiSelectField",
        "phone" => "SearchStringField",
        "purchaseOrderAmount" => "SearchDoubleField",
        "purchaseOrderQuantity" => "SearchDoubleField",
        "purchaseOrderQuantityDiff" => "SearchDoubleField",
        "receiptAmount" => "SearchDoubleField",
        "receiptQuantity" => "SearchDoubleField",
        "receiptQuantityDiff" => "SearchDoubleField",
        "state" => "SearchStringField",
        "taxEngine" => "SearchMultiSelectField",
        "taxIdNum" => "SearchStringField",
        "taxRegistrationNumber" => "SearchStringField",
        "tranPrefix" => "SearchStringField",
        "url" => "SearchStringField",
        "validUntil" => "SearchDateField",
        "zip" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return SubsidiarySearchBasic
     */
    public function setAccountingBook(SearchMultiSelectField $accountingBook): SubsidiarySearchBasic
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBook(): SearchMultiSelectField
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBookCurrency
     * @return SubsidiarySearchBasic
     */
    public function setAccountingBookCurrency(SearchMultiSelectField $accountingBookCurrency): SubsidiarySearchBasic
    {
        $this->accountingBookCurrency = $accountingBookCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccountingBookCurrency(): SearchMultiSelectField
    {
        return $this->accountingBookCurrency;
    }

    /**
     * @param SearchStringField $address
     * @return SubsidiarySearchBasic
     */
    public function setAddress(SearchStringField $address): SubsidiarySearchBasic
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddress(): SearchStringField
    {
        return $this->address;
    }

    /**
     * @param SearchStringField $city
     * @return SubsidiarySearchBasic
     */
    public function setCity(SearchStringField $city): SubsidiarySearchBasic
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCity(): SearchStringField
    {
        return $this->city;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return SubsidiarySearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): SubsidiarySearchBasic
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCountry(): SearchEnumMultiSelectField
    {
        return $this->country;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return SubsidiarySearchBasic
     */
    public function setCurrency(SearchMultiSelectField $currency): SubsidiarySearchBasic
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency(): SearchMultiSelectField
    {
        return $this->currency;
    }

    /**
     * @param SearchDateField $effectiveFrom
     * @return SubsidiarySearchBasic
     */
    public function setEffectiveFrom(SearchDateField $effectiveFrom): SubsidiarySearchBasic
    {
        $this->effectiveFrom = $effectiveFrom;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveFrom(): SearchDateField
    {
        return $this->effectiveFrom;
    }

    /**
     * @param SearchStringField $email
     * @return SubsidiarySearchBasic
     */
    public function setEmail(SearchStringField $email): SubsidiarySearchBasic
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEmail(): SearchStringField
    {
        return $this->email;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return SubsidiarySearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): SubsidiarySearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return SubsidiarySearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): SubsidiarySearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchStringField $fax
     * @return SubsidiarySearchBasic
     */
    public function setFax(SearchStringField $fax): SubsidiarySearchBasic
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFax(): SearchStringField
    {
        return $this->fax;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return SubsidiarySearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): SubsidiarySearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return SubsidiarySearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): SubsidiarySearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isElimination
     * @return SubsidiarySearchBasic
     */
    public function setIsElimination(SearchBooleanField $isElimination): SubsidiarySearchBasic
    {
        $this->isElimination = $isElimination;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsElimination(): SearchBooleanField
    {
        return $this->isElimination;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return SubsidiarySearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): SubsidiarySearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchStringField $legalName
     * @return SubsidiarySearchBasic
     */
    public function setLegalName(SearchStringField $legalName): SubsidiarySearchBasic
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLegalName(): SearchStringField
    {
        return $this->legalName;
    }

    /**
     * @param SearchStringField $name
     * @return SubsidiarySearchBasic
     */
    public function setName(SearchStringField $name): SubsidiarySearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchStringField $nameNoHierarchy
     * @return SubsidiarySearchBasic
     */
    public function setNameNoHierarchy(SearchStringField $nameNoHierarchy): SubsidiarySearchBasic
    {
        $this->nameNoHierarchy = $nameNoHierarchy;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNameNoHierarchy(): SearchStringField
    {
        return $this->nameNoHierarchy;
    }

    /**
     * @param SearchMultiSelectField $nexus
     * @return SubsidiarySearchBasic
     */
    public function setNexus(SearchMultiSelectField $nexus): SubsidiarySearchBasic
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNexus(): SearchMultiSelectField
    {
        return $this->nexus;
    }

    /**
     * @param SearchStringField $phone
     * @return SubsidiarySearchBasic
     */
    public function setPhone(SearchStringField $phone): SubsidiarySearchBasic
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhone(): SearchStringField
    {
        return $this->phone;
    }

    /**
     * @param SearchDoubleField $purchaseOrderAmount
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderAmount(SearchDoubleField $purchaseOrderAmount): SubsidiarySearchBasic
    {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderAmount(): SearchDoubleField
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantity
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantity(SearchDoubleField $purchaseOrderQuantity): SubsidiarySearchBasic
    {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantity(): SearchDoubleField
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchDoubleField $purchaseOrderQuantityDiff
     * @return SubsidiarySearchBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchDoubleField $purchaseOrderQuantityDiff): SubsidiarySearchBasic
    {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderQuantityDiff(): SearchDoubleField
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchDoubleField $receiptAmount
     * @return SubsidiarySearchBasic
     */
    public function setReceiptAmount(SearchDoubleField $receiptAmount): SubsidiarySearchBasic
    {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptAmount(): SearchDoubleField
    {
        return $this->receiptAmount;
    }

    /**
     * @param SearchDoubleField $receiptQuantity
     * @return SubsidiarySearchBasic
     */
    public function setReceiptQuantity(SearchDoubleField $receiptQuantity): SubsidiarySearchBasic
    {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantity(): SearchDoubleField
    {
        return $this->receiptQuantity;
    }

    /**
     * @param SearchDoubleField $receiptQuantityDiff
     * @return SubsidiarySearchBasic
     */
    public function setReceiptQuantityDiff(SearchDoubleField $receiptQuantityDiff): SubsidiarySearchBasic
    {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getReceiptQuantityDiff(): SearchDoubleField
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchStringField $state
     * @return SubsidiarySearchBasic
     */
    public function setState(SearchStringField $state): SubsidiarySearchBasic
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getState(): SearchStringField
    {
        return $this->state;
    }

    /**
     * @param SearchMultiSelectField $taxEngine
     * @return SubsidiarySearchBasic
     */
    public function setTaxEngine(SearchMultiSelectField $taxEngine): SubsidiarySearchBasic
    {
        $this->taxEngine = $taxEngine;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxEngine(): SearchMultiSelectField
    {
        return $this->taxEngine;
    }

    /**
     * @param SearchStringField $taxIdNum
     * @return SubsidiarySearchBasic
     */
    public function setTaxIdNum(SearchStringField $taxIdNum): SubsidiarySearchBasic
    {
        $this->taxIdNum = $taxIdNum;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxIdNum(): SearchStringField
    {
        return $this->taxIdNum;
    }

    /**
     * @param SearchStringField $taxRegistrationNumber
     * @return SubsidiarySearchBasic
     */
    public function setTaxRegistrationNumber(SearchStringField $taxRegistrationNumber): SubsidiarySearchBasic
    {
        $this->taxRegistrationNumber = $taxRegistrationNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxRegistrationNumber(): SearchStringField
    {
        return $this->taxRegistrationNumber;
    }

    /**
     * @param SearchStringField $tranPrefix
     * @return SubsidiarySearchBasic
     */
    public function setTranPrefix(SearchStringField $tranPrefix): SubsidiarySearchBasic
    {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTranPrefix(): SearchStringField
    {
        return $this->tranPrefix;
    }

    /**
     * @param SearchStringField $url
     * @return SubsidiarySearchBasic
     */
    public function setUrl(SearchStringField $url): SubsidiarySearchBasic
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrl(): SearchStringField
    {
        return $this->url;
    }

    /**
     * @param SearchDateField $validUntil
     * @return SubsidiarySearchBasic
     */
    public function setValidUntil(SearchDateField $validUntil): SubsidiarySearchBasic
    {
        $this->validUntil = $validUntil;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getValidUntil(): SearchDateField
    {
        return $this->validUntil;
    }

    /**
     * @param SearchStringField $zip
     * @return SubsidiarySearchBasic
     */
    public function setZip(SearchStringField $zip): SubsidiarySearchBasic
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZip(): SearchStringField
    {
        return $this->zip;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return SubsidiarySearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): SubsidiarySearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
