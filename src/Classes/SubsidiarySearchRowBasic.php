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

class SubsidiarySearchRowBasic extends SearchRowBasic {
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
     * @return SubsidiarySearchRowBasic
     */
    public function setAccountingBook(SearchColumnSelectField $accountingBook): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setAccountingBookCurrency(SearchColumnSelectField $accountingBookCurrency): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerInboundEmail(SearchColumnStringField $anonymousCustomerInboundEmail): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setAnonymousCustomerOnlineForms(SearchColumnStringField $anonymousCustomerOnlineForms): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseAssignmentTemplate(SearchColumnStringField $caseAssignmentTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseAutomaticClosureTemplate(SearchColumnStringField $caseAutomaticClosureTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseCopyEmployeeTemplate(SearchColumnStringField $caseCopyEmployeeTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseCreationTemplate(SearchColumnStringField $caseCreationTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseEscalationTemplate(SearchColumnStringField $caseEscalationTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCaseUpdateTemplate(SearchColumnStringField $caseUpdateTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCompanyNameForSupportMessages(SearchColumnStringField $companyNameForSupportMessages): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCurrency(SearchColumnSelectField $currency): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setEffectiveFrom(SearchColumnDateField $effectiveFrom): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setEmployeeCaseUpdateTemplate(SearchColumnStringField $employeeCaseUpdateTemplate): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setIsElimination(SearchColumnBooleanField $isElimination): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setLegalName(SearchColumnStringField $legalName): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setMainSupportEmailAddress(SearchColumnStringField $mainSupportEmailAddress): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setName(SearchColumnStringField $name): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setNameNoHierarchy(SearchColumnStringField $nameNoHierarchy): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setNexus(SearchColumnSelectField $nexus): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): SubsidiarySearchRowBasic
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
     * @param SearchColumnDoubleField[] $purchaseOrderAmount
     * @return SubsidiarySearchRowBasic
     */
    public function setPurchaseOrderAmount(SearchColumnDoubleField $purchaseOrderAmount): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantity(SearchColumnDoubleField $purchaseOrderQuantity): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setPurchaseOrderQuantityDiff(SearchColumnDoubleField $purchaseOrderQuantityDiff): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setReceiptAmount(SearchColumnDoubleField $receiptAmount): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setReceiptQuantity(SearchColumnDoubleField $receiptQuantity): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setReceiptQuantityDiff(SearchColumnDoubleField $receiptQuantityDiff): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setState(SearchColumnStringField $state): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setTaxEngine(SearchColumnSelectField $taxEngine): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setTaxIdNum(SearchColumnStringField $taxIdNum): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setTaxRegistrationNumber(SearchColumnStringField $taxRegistrationNumber): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setTranPrefix(SearchColumnStringField $tranPrefix): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setValidUntil(SearchColumnDateField $validUntil): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setZip(SearchColumnStringField $zip): SubsidiarySearchRowBasic
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
     * @return SubsidiarySearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): SubsidiarySearchRowBasic
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
