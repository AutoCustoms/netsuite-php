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

class Subsidiary extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $showSubsidiaryName;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var RecordRef
     */
    protected RecordRef $logo;

    /**
     * @var string
     */
    protected string $tranPrefix;

    /**
     * @var RecordRef
     */
    protected RecordRef $pageLogo;

    /**
     * @var string
     */
    protected string $state;

    /**
     * @var Country
     */
    protected Country $country;

    /**
     * @var Address
     */
    protected Address $mainAddress;

    /**
     * @var Address
     */
    protected Address $shippingAddress;

    /**
     * @var Address
     */
    protected Address $returnAddress;

    /**
     * @var string
     */
    protected string $legalName;

    /**
     * @var bool
     */
    protected bool $isElimination;

    /**
     * @var RecordRef
     */
    protected RecordRef $fiscalCalendar;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxFiscalCalendar;

    /**
     * @var bool
     */
    protected bool $allowPayroll;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantity;

    /**
     * @var float
     */
    protected float $purchaseOrderAmount;

    /**
     * @var float
     */
    protected float $purchaseOrderQuantityDiff;

    /**
     * @var float
     */
    protected float $receiptQuantity;

    /**
     * @var float
     */
    protected float $receiptAmount;

    /**
     * @var float
     */
    protected float $receiptQuantityDiff;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $edition;

    /**
     * @var string
     */
    protected string $federalIdNumber;

    /**
     * @var string
     */
    protected string $addrLanguage;

    protected $state1TaxNumber;
    /**
     * @var SubsidiaryTaxRegistrationList
     */
    protected SubsidiaryTaxRegistrationList $taxRegistrationList;

    /**
     * @var string
     */
    protected string $ssnOrTin;

    /**
     * @var RecordRef
     */
    protected RecordRef $interCoAccount;

    /**
     * @var SubsidiaryNexusList
     */
    protected SubsidiaryNexusList $nexusList;

    /**
     * @var SubsidiaryAccountingBookDetailList
     */
    protected SubsidiaryAccountingBookDetailList $accountingBookDetailList;

    /**
     * @var RecordRef
     */
    protected RecordRef $checkLayout;

    /**
     * @var ClassTranslationList
     */
    protected ClassTranslationList $classTranslationList;

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
        "name" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "showSubsidiaryName" => "boolean",
        "url" => "string",
        "logo" => "RecordRef",
        "tranPrefix" => "string",
        "pageLogo" => "RecordRef",
        "state" => "string",
        "country" => "Country",
        "mainAddress" => "Address",
        "shippingAddress" => "Address",
        "returnAddress" => "Address",
        "legalName" => "string",
        "isElimination" => "boolean",
        "fiscalCalendar" => "RecordRef",
        "taxFiscalCalendar" => "RecordRef",
        "allowPayroll" => "boolean",
        "email" => "string",
        "currency" => "RecordRef",
        "purchaseOrderQuantity" => "float",
        "purchaseOrderAmount" => "float",
        "purchaseOrderQuantityDiff" => "float",
        "receiptQuantity" => "float",
        "receiptAmount" => "float",
        "receiptQuantityDiff" => "float",
        "fax" => "string",
        "edition" => "string",
        "federalIdNumber" => "string",
        "addrLanguage" => "string",
        "state1TaxNumber" => "string",
        "taxRegistrationList" => "SubsidiaryTaxRegistrationList",
        "ssnOrTin" => "string",
        "interCoAccount" => "RecordRef",
        "nexusList" => "SubsidiaryNexusList",
        "accountingBookDetailList" => "SubsidiaryAccountingBookDetailList",
        "checkLayout" => "RecordRef",
        "classTranslationList" => "ClassTranslationList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Subsidiary
     */
    public function setName(string $name): Subsidiary
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
     * @param RecordRef $parent
     * @return Subsidiary
     */
    public function setParent(RecordRef $parent): Subsidiary
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
     * @param bool $isInactive
     * @return Subsidiary
     */
    public function setIsInactive(bool $isInactive): Subsidiary
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
     * @param bool $showSubsidiaryName
     * @return Subsidiary
     */
    public function setShowSubsidiaryName(bool $showSubsidiaryName): Subsidiary
    {
        $this->showSubsidiaryName = $showSubsidiaryName;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowSubsidiaryName(): bool
    {
        return $this->showSubsidiaryName;
    }

    /**
     * @param string $url
     * @return Subsidiary
     */
    public function setUrl(string $url): Subsidiary
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param RecordRef $logo
     * @return Subsidiary
     */
    public function setLogo(RecordRef $logo): Subsidiary
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLogo(): RecordRef
    {
        return $this->logo;
    }

    /**
     * @param string $tranPrefix
     * @return Subsidiary
     */
    public function setTranPrefix(string $tranPrefix): Subsidiary
    {
        $this->tranPrefix = $tranPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranPrefix(): string
    {
        return $this->tranPrefix;
    }

    /**
     * @param RecordRef $pageLogo
     * @return Subsidiary
     */
    public function setPageLogo(RecordRef $pageLogo): Subsidiary
    {
        $this->pageLogo = $pageLogo;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPageLogo(): RecordRef
    {
        return $this->pageLogo;
    }

    /**
     * @param string $state
     * @return Subsidiary
     */
    public function setState(string $state): Subsidiary
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
     * @param Country $country
     * @return Subsidiary
     */
    public function setCountry(Country $country): Subsidiary
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param Address $mainAddress
     * @return Subsidiary
     */
    public function setMainAddress(Address $mainAddress): Subsidiary
    {
        $this->mainAddress = $mainAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getMainAddress(): Address
    {
        return $this->mainAddress;
    }

    /**
     * @param Address $shippingAddress
     * @return Subsidiary
     */
    public function setShippingAddress(Address $shippingAddress): Subsidiary
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    /**
     * @param Address $returnAddress
     * @return Subsidiary
     */
    public function setReturnAddress(Address $returnAddress): Subsidiary
    {
        $this->returnAddress = $returnAddress;
        return $this;
    }

    /**
     * @return Address
     */
    public function getReturnAddress(): Address
    {
        return $this->returnAddress;
    }

    /**
     * @param string $legalName
     * @return Subsidiary
     */
    public function setLegalName(string $legalName): Subsidiary
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param bool $isElimination
     * @return Subsidiary
     */
    public function setIsElimination(bool $isElimination): Subsidiary
    {
        $this->isElimination = $isElimination;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsElimination(): bool
    {
        return $this->isElimination;
    }

    /**
     * @param RecordRef $fiscalCalendar
     * @return Subsidiary
     */
    public function setFiscalCalendar(RecordRef $fiscalCalendar): Subsidiary
    {
        $this->fiscalCalendar = $fiscalCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar(): RecordRef
    {
        return $this->fiscalCalendar;
    }

    /**
     * @param RecordRef $taxFiscalCalendar
     * @return Subsidiary
     */
    public function setTaxFiscalCalendar(RecordRef $taxFiscalCalendar): Subsidiary
    {
        $this->taxFiscalCalendar = $taxFiscalCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxFiscalCalendar(): RecordRef
    {
        return $this->taxFiscalCalendar;
    }

    /**
     * @param bool $allowPayroll
     * @return Subsidiary
     */
    public function setAllowPayroll(bool $allowPayroll): Subsidiary
    {
        $this->allowPayroll = $allowPayroll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowPayroll(): bool
    {
        return $this->allowPayroll;
    }

    /**
     * @param string $email
     * @return Subsidiary
     */
    public function setEmail(string $email): Subsidiary
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param RecordRef $currency
     * @return Subsidiary
     */
    public function setCurrency(RecordRef $currency): Subsidiary
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency(): RecordRef
    {
        return $this->currency;
    }

    /**
     * @param float $purchaseOrderQuantity
     * @return Subsidiary
     */
    public function setPurchaseOrderQuantity(float $purchaseOrderQuantity): Subsidiary
    {
        $this->purchaseOrderQuantity = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantity(): float
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param float $purchaseOrderAmount
     * @return Subsidiary
     */
    public function setPurchaseOrderAmount(float $purchaseOrderAmount): Subsidiary
    {
        $this->purchaseOrderAmount = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderAmount(): float
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param float $purchaseOrderQuantityDiff
     * @return Subsidiary
     */
    public function setPurchaseOrderQuantityDiff(float $purchaseOrderQuantityDiff): Subsidiary
    {
        $this->purchaseOrderQuantityDiff = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderQuantityDiff(): float
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param float $receiptQuantity
     * @return Subsidiary
     */
    public function setReceiptQuantity(float $receiptQuantity): Subsidiary
    {
        $this->receiptQuantity = $receiptQuantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantity(): float
    {
        return $this->receiptQuantity;
    }

    /**
     * @param float $receiptAmount
     * @return Subsidiary
     */
    public function setReceiptAmount(float $receiptAmount): Subsidiary
    {
        $this->receiptAmount = $receiptAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptAmount(): float
    {
        return $this->receiptAmount;
    }

    /**
     * @param float $receiptQuantityDiff
     * @return Subsidiary
     */
    public function setReceiptQuantityDiff(float $receiptQuantityDiff): Subsidiary
    {
        $this->receiptQuantityDiff = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return float
     */
    public function getReceiptQuantityDiff(): float
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param string $fax
     * @return Subsidiary
     */
    public function setFax(string $fax): Subsidiary
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax(): string
    {
        return $this->fax;
    }

    /**
     * @param string $edition
     * @return Subsidiary
     */
    public function setEdition(string $edition): Subsidiary
    {
        $this->edition = $edition;
        return $this;
    }

    /**
     * @return string
     */
    public function getEdition(): string
    {
        return $this->edition;
    }

    /**
     * @param string $federalIdNumber
     * @return Subsidiary
     */
    public function setFederalIdNumber(string $federalIdNumber): Subsidiary
    {
        $this->federalIdNumber = $federalIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFederalIdNumber(): string
    {
        return $this->federalIdNumber;
    }

    /**
     * @param string $addrLanguage
     * @return Subsidiary
     */
    public function setAddrLanguage(string $addrLanguage): Subsidiary
    {
        $this->addrLanguage = $addrLanguage;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddrLanguage(): string
    {
        return $this->addrLanguage;
    }

    /**
     * @param SubsidiaryTaxRegistrationList $taxRegistrationList
     * @return Subsidiary
     */
    public function setTaxRegistrationList(SubsidiaryTaxRegistrationList $taxRegistrationList): Subsidiary
    {
        $this->taxRegistrationList = $taxRegistrationList;
        return $this;
    }

    /**
     * @return SubsidiaryTaxRegistrationList
     */
    public function getTaxRegistrationList(): SubsidiaryTaxRegistrationList
    {
        return $this->taxRegistrationList;
    }

    /**
     * @param string $ssnOrTin
     * @return Subsidiary
     */
    public function setSsnOrTin(string $ssnOrTin): Subsidiary
    {
        $this->ssnOrTin = $ssnOrTin;
        return $this;
    }

    /**
     * @return string
     */
    public function getSsnOrTin(): string
    {
        return $this->ssnOrTin;
    }

    /**
     * @param RecordRef $interCoAccount
     * @return Subsidiary
     */
    public function setInterCoAccount(RecordRef $interCoAccount): Subsidiary
    {
        $this->interCoAccount = $interCoAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInterCoAccount(): RecordRef
    {
        return $this->interCoAccount;
    }

    /**
     * @param SubsidiaryNexusList $nexusList
     * @return Subsidiary
     */
    public function setNexusList(SubsidiaryNexusList $nexusList): Subsidiary
    {
        $this->nexusList = $nexusList;
        return $this;
    }

    /**
     * @return SubsidiaryNexusList
     */
    public function getNexusList(): SubsidiaryNexusList
    {
        return $this->nexusList;
    }

    /**
     * @param SubsidiaryAccountingBookDetailList $accountingBookDetailList
     * @return Subsidiary
     */
    public function setAccountingBookDetailList(SubsidiaryAccountingBookDetailList $accountingBookDetailList): Subsidiary
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return SubsidiaryAccountingBookDetailList
     */
    public function getAccountingBookDetailList(): SubsidiaryAccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param RecordRef $checkLayout
     * @return Subsidiary
     */
    public function setCheckLayout(RecordRef $checkLayout): Subsidiary
    {
        $this->checkLayout = $checkLayout;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCheckLayout(): RecordRef
    {
        return $this->checkLayout;
    }

    /**
     * @param ClassTranslationList $classTranslationList
     * @return Subsidiary
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList): Subsidiary
    {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * @return ClassTranslationList
     */
    public function getClassTranslationList(): ClassTranslationList
    {
        return $this->classTranslationList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Subsidiary
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Subsidiary
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
     * @return Subsidiary
     */
    public function setInternalId(string $internalId): Subsidiary
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
     * @return Subsidiary
     */
    public function setExternalId(string $externalId): Subsidiary
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
