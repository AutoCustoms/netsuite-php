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

class MseSubsidiarySearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBook;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $accountingBookCurrency;

    protected $address1;
    protected $address2;
    protected $address3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $anonymousCustomerInboundEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $anonymousCustomerOnlineForms;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseAssignmentTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseAutomaticClosureTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseCopyEmployeeTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseCreationTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseEscalationTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseUpdateTemplate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $companyNameForSupportMessages;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $currency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $effectiveFrom;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $employeeCaseUpdateTemplate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fax;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isElimination;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $legalName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mainSupportEmailAddress;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $nameNoHierarchy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $nexus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $primary;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderQuantityDiff;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptQuantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $receiptQuantityDiff;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $state;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxEngine;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $taxIdNum;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $taxRegistrationNumber;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $tranPrefix;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $url;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $validUntil;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $zip;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountingBook" => "SearchColumnSelectField[]",
        "accountingBookCurrency" => "SearchColumnSelectField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "anonymousCustomerInboundEmail" => "SearchColumnStringField[]",
        "anonymousCustomerOnlineForms" => "SearchColumnStringField[]",
        "caseAssignmentTemplate" => "SearchColumnStringField[]",
        "caseAutomaticClosureTemplate" => "SearchColumnStringField[]",
        "caseCopyEmployeeTemplate" => "SearchColumnStringField[]",
        "caseCreationTemplate" => "SearchColumnStringField[]",
        "caseEscalationTemplate" => "SearchColumnStringField[]",
        "caseUpdateTemplate" => "SearchColumnStringField[]",
        "city" => "SearchColumnStringField[]",
        "companyNameForSupportMessages" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "currency" => "SearchColumnSelectField[]",
        "effectiveFrom" => "SearchColumnDateField[]",
        "email" => "SearchColumnStringField[]",
        "employeeCaseUpdateTemplate" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isElimination" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "legalName" => "SearchColumnStringField[]",
        "mainSupportEmailAddress" => "SearchColumnStringField[]",
        "name" => "SearchColumnStringField[]",
        "nameNoHierarchy" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "primary" => "SearchColumnBooleanField[]",
        "purchaseOrderAmount" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantity" => "SearchColumnDoubleField[]",
        "purchaseOrderQuantityDiff" => "SearchColumnDoubleField[]",
        "receiptAmount" => "SearchColumnDoubleField[]",
        "receiptQuantity" => "SearchColumnDoubleField[]",
        "receiptQuantityDiff" => "SearchColumnDoubleField[]",
        "state" => "SearchColumnStringField[]",
        "taxEngine" => "SearchColumnSelectField[]",
        "taxIdNum" => "SearchColumnStringField[]",
        "taxRegistrationNumber" => "SearchColumnStringField[]",
        "tranPrefix" => "SearchColumnStringField[]",
        "url" => "SearchColumnStringField[]",
        "validUntil" => "SearchColumnDateField[]",
        "zip" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return MseSubsidiarySearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): MseSubsidiarySearchRowBasic
    {
        $this->accountingBook[] = $accountingBook;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBook(): array
    {
        return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBookCurrency
     * @return MseSubsidiarySearchRowBasic
     */
    public function setAccountingBookCurrency(SearchColumnSelectField $accountingBookCurrency): MseSubsidiarySearchRowBasic
    {
        $this->accountingBookCurrency[] = $accountingBookCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAccountingBookCurrency(): array
    {
        return $this->accountingBookCurrency;
    }

    /**
     * @param SearchColumnStringField[] $anonymousCustomerInboundEmail
     * @return MseSubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerInboundEmail(SearchColumnStringField $anonymousCustomerInboundEmail): MseSubsidiarySearchRowBasic
    {
        $this->anonymousCustomerInboundEmail[] = $anonymousCustomerInboundEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAnonymousCustomerInboundEmail(): array
    {
        return $this->anonymousCustomerInboundEmail;
    }

    /**
     * @param SearchColumnStringField[] $anonymousCustomerOnlineForms
     * @return MseSubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerOnlineForms(SearchColumnStringField $anonymousCustomerOnlineForms): MseSubsidiarySearchRowBasic
    {
        $this->anonymousCustomerOnlineForms[] = $anonymousCustomerOnlineForms;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAnonymousCustomerOnlineForms(): array
    {
        return $this->anonymousCustomerOnlineForms;
    }

    /**
     * @param SearchColumnStringField[] $caseAssignmentTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseAssignmentTemplate(SearchColumnStringField $caseAssignmentTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseAssignmentTemplate[] = $caseAssignmentTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseAssignmentTemplate(): array
    {
        return $this->caseAssignmentTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseAutomaticClosureTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseAutomaticClosureTemplate(SearchColumnStringField $caseAutomaticClosureTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseAutomaticClosureTemplate[] = $caseAutomaticClosureTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseAutomaticClosureTemplate(): array
    {
        return $this->caseAutomaticClosureTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseCopyEmployeeTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseCopyEmployeeTemplate(SearchColumnStringField $caseCopyEmployeeTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseCopyEmployeeTemplate[] = $caseCopyEmployeeTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseCopyEmployeeTemplate(): array
    {
        return $this->caseCopyEmployeeTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseCreationTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseCreationTemplate(SearchColumnStringField $caseCreationTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseCreationTemplate[] = $caseCreationTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseCreationTemplate(): array
    {
        return $this->caseCreationTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseEscalationTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseEscalationTemplate(SearchColumnStringField $caseEscalationTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseEscalationTemplate[] = $caseEscalationTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseEscalationTemplate(): array
    {
        return $this->caseEscalationTemplate;
    }

    /**
     * @param SearchColumnStringField[] $caseUpdateTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCaseUpdateTemplate(SearchColumnStringField $caseUpdateTemplate): MseSubsidiarySearchRowBasic
    {
        $this->caseUpdateTemplate[] = $caseUpdateTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseUpdateTemplate(): array
    {
        return $this->caseUpdateTemplate;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): MseSubsidiarySearchRowBasic
    {
        $this->city[] = $city;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCity(): array
    {
        return $this->city;
    }

    /**
     * @param SearchColumnStringField[] $companyNameForSupportMessages
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCompanyNameForSupportMessages(SearchColumnStringField $companyNameForSupportMessages): MseSubsidiarySearchRowBasic
    {
        $this->companyNameForSupportMessages[] = $companyNameForSupportMessages;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCompanyNameForSupportMessages(): array
    {
        return $this->companyNameForSupportMessages;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): MseSubsidiarySearchRowBasic
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCountry(): array
    {
        return $this->country;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): MseSubsidiarySearchRowBasic
    {
        $this->currency[] = $currency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency(): array
    {
        return $this->currency;
    }

    /**
     * @param SearchColumnDateField[] $effectiveFrom
     * @return MseSubsidiarySearchRowBasic
     */
    public function setEffectiveFrom(SearchColumnDateField $effectiveFrom): MseSubsidiarySearchRowBasic
    {
        $this->effectiveFrom[] = $effectiveFrom;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveFrom(): array
    {
        return $this->effectiveFrom;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return MseSubsidiarySearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): MseSubsidiarySearchRowBasic
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * @param SearchColumnStringField[] $employeeCaseUpdateTemplate
     * @return MseSubsidiarySearchRowBasic
     */
    public function setEmployeeCaseUpdateTemplate(SearchColumnStringField $employeeCaseUpdateTemplate): MseSubsidiarySearchRowBasic
    {
        $this->employeeCaseUpdateTemplate[] = $employeeCaseUpdateTemplate;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEmployeeCaseUpdateTemplate(): array
    {
        return $this->employeeCaseUpdateTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return MseSubsidiarySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): MseSubsidiarySearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnStringField[] $fax
     * @return MseSubsidiarySearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): MseSubsidiarySearchRowBasic
    {
        $this->fax[] = $fax;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFax(): array
    {
        return $this->fax;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return MseSubsidiarySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): MseSubsidiarySearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isElimination
     * @return MseSubsidiarySearchRowBasic
     */
    public function setIsElimination(SearchColumnBooleanField $isElimination): MseSubsidiarySearchRowBasic
    {
        $this->isElimination[] = $isElimination;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsElimination(): array
    {
        return $this->isElimination;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return MseSubsidiarySearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): MseSubsidiarySearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $legalName
     * @return MseSubsidiarySearchRowBasic
     */
    public function setLegalName(SearchColumnStringField $legalName): MseSubsidiarySearchRowBasic
    {
        $this->legalName[] = $legalName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLegalName(): array
    {
        return $this->legalName;
    }

    /**
     * @param SearchColumnStringField[] $mainSupportEmailAddress
     * @return MseSubsidiarySearchRowBasic
     */
    public function setMainSupportEmailAddress(SearchColumnStringField $mainSupportEmailAddress): MseSubsidiarySearchRowBasic
    {
        $this->mainSupportEmailAddress[] = $mainSupportEmailAddress;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMainSupportEmailAddress(): array
    {
        return $this->mainSupportEmailAddress;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return MseSubsidiarySearchRowBasic
     */
    public function setName(SearchColumnStringField $name): MseSubsidiarySearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $nameNoHierarchy
     * @return MseSubsidiarySearchRowBasic
     */
    public function setNameNoHierarchy(SearchColumnStringField $nameNoHierarchy): MseSubsidiarySearchRowBasic
    {
        $this->nameNoHierarchy[] = $nameNoHierarchy;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNameNoHierarchy(): array
    {
        return $this->nameNoHierarchy;
    }

    /**
     * @param SearchColumnSelectField[] $nexus
     * @return MseSubsidiarySearchRowBasic
     */
    public function setNexus(SearchColumnSelectField $nexus): MseSubsidiarySearchRowBasic
    {
        $this->nexus[] = $nexus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getNexus(): array
    {
        return $this->nexus;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return MseSubsidiarySearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): MseSubsidiarySearchRowBasic
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhone(): array
    {
        return $this->phone;
    }

    /**
     * @param SearchColumnBooleanField[] $primary
     * @return MseSubsidiarySearchRowBasic
     */
    public function setPrimary(SearchColumnBooleanField $primary): MseSubsidiarySearchRowBasic
    {
        $this->primary[] = $primary;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPrimary(): array
    {
        return $this->primary;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderAmount(SearchColumnDoubleField $purchaseOrderAmount): MseSubsidiarySearchRowBasic
    {
        $this->purchaseOrderAmount[] = $purchaseOrderAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderAmount(): array
    {
        return $this->purchaseOrderAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantity
     * @return MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantity(SearchColumnDoubleField $purchaseOrderQuantity): MseSubsidiarySearchRowBasic
    {
        $this->purchaseOrderQuantity[] = $purchaseOrderQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantity(): array
    {
        return $this->purchaseOrderQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderQuantityDiff
     * @return MseSubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchColumnDoubleField $purchaseOrderQuantityDiff): MseSubsidiarySearchRowBasic
    {
        $this->purchaseOrderQuantityDiff[] = $purchaseOrderQuantityDiff;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderQuantityDiff(): array
    {
        return $this->purchaseOrderQuantityDiff;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptAmount
     * @return MseSubsidiarySearchRowBasic
     */
    public function setReceiptAmount(SearchColumnDoubleField $receiptAmount): MseSubsidiarySearchRowBasic
    {
        $this->receiptAmount[] = $receiptAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptAmount(): array
    {
        return $this->receiptAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantity
     * @return MseSubsidiarySearchRowBasic
     */
    public function setReceiptQuantity(SearchColumnDoubleField $receiptQuantity): MseSubsidiarySearchRowBasic
    {
        $this->receiptQuantity[] = $receiptQuantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantity(): array
    {
        return $this->receiptQuantity;
    }

    /**
     * @param SearchColumnDoubleField[] $receiptQuantityDiff
     * @return MseSubsidiarySearchRowBasic
     */
    public function setReceiptQuantityDiff(SearchColumnDoubleField $receiptQuantityDiff): MseSubsidiarySearchRowBasic
    {
        $this->receiptQuantityDiff[] = $receiptQuantityDiff;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getReceiptQuantityDiff(): array
    {
        return $this->receiptQuantityDiff;
    }

    /**
     * @param SearchColumnStringField[] $state
     * @return MseSubsidiarySearchRowBasic
     */
    public function setState(SearchColumnStringField $state): MseSubsidiarySearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $taxEngine
     * @return MseSubsidiarySearchRowBasic
     */
    public function setTaxEngine(SearchColumnSelectField $taxEngine): MseSubsidiarySearchRowBasic
    {
        $this->taxEngine[] = $taxEngine;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxEngine(): array
    {
        return $this->taxEngine;
    }

    /**
     * @param SearchColumnStringField[] $taxIdNum
     * @return MseSubsidiarySearchRowBasic
     */
    public function setTaxIdNum(SearchColumnStringField $taxIdNum): MseSubsidiarySearchRowBasic
    {
        $this->taxIdNum[] = $taxIdNum;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxIdNum(): array
    {
        return $this->taxIdNum;
    }

    /**
     * @param SearchColumnStringField[] $taxRegistrationNumber
     * @return MseSubsidiarySearchRowBasic
     */
    public function setTaxRegistrationNumber(SearchColumnStringField $taxRegistrationNumber): MseSubsidiarySearchRowBasic
    {
        $this->taxRegistrationNumber[] = $taxRegistrationNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxRegistrationNumber(): array
    {
        return $this->taxRegistrationNumber;
    }

    /**
     * @param SearchColumnStringField[] $tranPrefix
     * @return MseSubsidiarySearchRowBasic
     */
    public function setTranPrefix(SearchColumnStringField $tranPrefix): MseSubsidiarySearchRowBasic
    {
        $this->tranPrefix[] = $tranPrefix;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTranPrefix(): array
    {
        return $this->tranPrefix;
    }

    /**
     * @param SearchColumnStringField[] $url
     * @return MseSubsidiarySearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): MseSubsidiarySearchRowBasic
    {
        $this->url[] = $url;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl(): array
    {
        return $this->url;
    }

    /**
     * @param SearchColumnDateField[] $validUntil
     * @return MseSubsidiarySearchRowBasic
     */
    public function setValidUntil(SearchColumnDateField $validUntil): MseSubsidiarySearchRowBasic
    {
        $this->validUntil[] = $validUntil;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getValidUntil(): array
    {
        return $this->validUntil;
    }

    /**
     * @param SearchColumnStringField[] $zip
     * @return MseSubsidiarySearchRowBasic
     */
    public function setZip(SearchColumnStringField $zip): MseSubsidiarySearchRowBasic
    {
        $this->zip[] = $zip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZip(): array
    {
        return $this->zip;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return MseSubsidiarySearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): MseSubsidiarySearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
