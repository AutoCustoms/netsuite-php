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

class JobSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $accountNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $actualTime;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $address;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressee;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressLabel;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $addressPhone;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allocatePayrollExpenses;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allowAllResourcesForTasks;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allowExpenses;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $allowTime;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $applyProjectExpenseTypeToAll;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $attention;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingRateCard;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingSchedule;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $calculatedEndDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $calculatedEndDateBaseline;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $calculatedStartDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $category;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $comments;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $contact;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $customer;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultTaxReg;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $defaultTaxRegText;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $endDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $entityId;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estCost;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $estEndDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedGrossProfit;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedGrossProfitPercent;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedLaborCost;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedLaborCostBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedLaborRevenue;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedTime;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedTimeOverride;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estimatedTimeOverrideBaseline;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $estRevenue;

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
     * @var SearchBooleanField
     */
    protected SearchBooleanField $giveAccess;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $globalSubscriptionStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $image;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $includeCrmTasksInTotals;

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
    protected SearchBooleanField $isDefaultBilling;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isDefaultShipping;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isExemptTime;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isProductiveTime;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isUtilizedTime;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $jobBillingType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $jobItem;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $jobPrice;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $jobResource;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $jobResourceRole;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $language;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastBaselineDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $level;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $limitTimeToAssignees;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $materializeTime;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $pctComplete;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $percentTimeComplete;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $permission;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phoneticName;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWork;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $plannedWorkBaseline;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $projectedEndDateBaseline;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $projectExpenseType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $projectManager;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $revRecForecastRule;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $scheduledEndDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $schedulingMethod;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $sourceServiceItemFromRateCard;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDateBaseline;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $timeApproval;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $timeRemaining;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $type;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $usePercentCompleteOverride;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zipCode;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountNumber" => "SearchStringField",
        "actualTime" => "SearchDoubleField",
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "allocatePayrollExpenses" => "SearchBooleanField",
        "allowAllResourcesForTasks" => "SearchBooleanField",
        "allowExpenses" => "SearchBooleanField",
        "allowTime" => "SearchBooleanField",
        "applyProjectExpenseTypeToAll" => "SearchBooleanField",
        "attention" => "SearchStringField",
        "billingRateCard" => "SearchMultiSelectField",
        "billingSchedule" => "SearchMultiSelectField",
        "calculatedEndDate" => "SearchDateField",
        "calculatedEndDateBaseline" => "SearchDateField",
        "calculatedStartDate" => "SearchDateField",
        "category" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "comments" => "SearchStringField",
        "contact" => "SearchStringField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "customer" => "SearchMultiSelectField",
        "dateCreated" => "SearchDateField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "email" => "SearchStringField",
        "endDate" => "SearchDateField",
        "entityId" => "SearchStringField",
        "estCost" => "SearchDoubleField",
        "estEndDate" => "SearchDateField",
        "estimatedGrossProfit" => "SearchDoubleField",
        "estimatedGrossProfitPercent" => "SearchDoubleField",
        "estimatedLaborCost" => "SearchDoubleField",
        "estimatedLaborCostBaseline" => "SearchDoubleField",
        "estimatedLaborRevenue" => "SearchDoubleField",
        "estimatedTime" => "SearchDoubleField",
        "estimatedTimeOverride" => "SearchDoubleField",
        "estimatedTimeOverrideBaseline" => "SearchDoubleField",
        "estRevenue" => "SearchDoubleField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "image" => "SearchStringField",
        "includeCrmTasksInTotals" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isExemptTime" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isProductiveTime" => "SearchBooleanField",
        "isUtilizedTime" => "SearchBooleanField",
        "jobBillingType" => "SearchEnumMultiSelectField",
        "jobItem" => "SearchMultiSelectField",
        "jobPrice" => "SearchDoubleField",
        "jobResource" => "SearchMultiSelectField",
        "jobResourceRole" => "SearchMultiSelectField",
        "language" => "SearchEnumMultiSelectField",
        "lastBaselineDate" => "SearchDateField",
        "lastModifiedDate" => "SearchDateField",
        "level" => "SearchEnumMultiSelectField",
        "limitTimeToAssignees" => "SearchBooleanField",
        "materializeTime" => "SearchBooleanField",
        "parent" => "SearchMultiSelectField",
        "pctComplete" => "SearchLongField",
        "percentTimeComplete" => "SearchLongField",
        "permission" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "plannedWork" => "SearchDoubleField",
        "plannedWorkBaseline" => "SearchDoubleField",
        "projectedEndDateBaseline" => "SearchDateField",
        "projectExpenseType" => "SearchMultiSelectField",
        "projectManager" => "SearchMultiSelectField",
        "revRecForecastRule" => "SearchMultiSelectField",
        "scheduledEndDate" => "SearchDateField",
        "schedulingMethod" => "SearchEnumMultiSelectField",
        "sourceServiceItemFromRateCard" => "SearchBooleanField",
        "startDate" => "SearchDateField",
        "startDateBaseline" => "SearchDateField",
        "state" => "SearchStringField",
        "status" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "timeApproval" => "SearchMultiSelectField",
        "timeRemaining" => "SearchDoubleField",
        "type" => "SearchMultiSelectField",
        "usePercentCompleteOverride" => "SearchBooleanField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $accountNumber
     * @return JobSearchBasic
     */
    public function setAccountNumber(SearchStringField $accountNumber): JobSearchBasic
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAccountNumber(): SearchStringField
    {
        return $this->accountNumber;
    }

    /**
     * @param SearchDoubleField $actualTime
     * @return JobSearchBasic
     */
    public function setActualTime(SearchDoubleField $actualTime): JobSearchBasic
    {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getActualTime(): SearchDoubleField
    {
        return $this->actualTime;
    }

    /**
     * @param SearchStringField $address
     * @return JobSearchBasic
     */
    public function setAddress(SearchStringField $address): JobSearchBasic
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
     * @param SearchStringField $addressee
     * @return JobSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): JobSearchBasic
    {
        $this->addressee = $addressee;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressee(): SearchStringField
    {
        return $this->addressee;
    }

    /**
     * @param SearchStringField $addressLabel
     * @return JobSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): JobSearchBasic
    {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressLabel(): SearchStringField
    {
        return $this->addressLabel;
    }

    /**
     * @param SearchStringField $addressPhone
     * @return JobSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): JobSearchBasic
    {
        $this->addressPhone = $addressPhone;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAddressPhone(): SearchStringField
    {
        return $this->addressPhone;
    }

    /**
     * @param SearchBooleanField $allocatePayrollExpenses
     * @return JobSearchBasic
     */
    public function setAllocatePayrollExpenses(SearchBooleanField $allocatePayrollExpenses): JobSearchBasic
    {
        $this->allocatePayrollExpenses = $allocatePayrollExpenses;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllocatePayrollExpenses(): SearchBooleanField
    {
        return $this->allocatePayrollExpenses;
    }

    /**
     * @param SearchBooleanField $allowAllResourcesForTasks
     * @return JobSearchBasic
     */
    public function setAllowAllResourcesForTasks(SearchBooleanField $allowAllResourcesForTasks): JobSearchBasic
    {
        $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowAllResourcesForTasks(): SearchBooleanField
    {
        return $this->allowAllResourcesForTasks;
    }

    /**
     * @param SearchBooleanField $allowExpenses
     * @return JobSearchBasic
     */
    public function setAllowExpenses(SearchBooleanField $allowExpenses): JobSearchBasic
    {
        $this->allowExpenses = $allowExpenses;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowExpenses(): SearchBooleanField
    {
        return $this->allowExpenses;
    }

    /**
     * @param SearchBooleanField $allowTime
     * @return JobSearchBasic
     */
    public function setAllowTime(SearchBooleanField $allowTime): JobSearchBasic
    {
        $this->allowTime = $allowTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAllowTime(): SearchBooleanField
    {
        return $this->allowTime;
    }

    /**
     * @param SearchBooleanField $applyProjectExpenseTypeToAll
     * @return JobSearchBasic
     */
    public function setApplyProjectExpenseTypeToAll(SearchBooleanField $applyProjectExpenseTypeToAll): JobSearchBasic
    {
        $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyProjectExpenseTypeToAll(): SearchBooleanField
    {
        return $this->applyProjectExpenseTypeToAll;
    }

    /**
     * @param SearchStringField $attention
     * @return JobSearchBasic
     */
    public function setAttention(SearchStringField $attention): JobSearchBasic
    {
        $this->attention = $attention;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAttention(): SearchStringField
    {
        return $this->attention;
    }

    /**
     * @param SearchMultiSelectField $billingRateCard
     * @return JobSearchBasic
     */
    public function setBillingRateCard(SearchMultiSelectField $billingRateCard): JobSearchBasic
    {
        $this->billingRateCard = $billingRateCard;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingRateCard(): SearchMultiSelectField
    {
        return $this->billingRateCard;
    }

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return JobSearchBasic
     */
    public function setBillingSchedule(SearchMultiSelectField $billingSchedule): JobSearchBasic
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule(): SearchMultiSelectField
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchDateField $calculatedEndDate
     * @return JobSearchBasic
     */
    public function setCalculatedEndDate(SearchDateField $calculatedEndDate): JobSearchBasic
    {
        $this->calculatedEndDate = $calculatedEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCalculatedEndDate(): SearchDateField
    {
        return $this->calculatedEndDate;
    }

    /**
     * @param SearchDateField $calculatedEndDateBaseline
     * @return JobSearchBasic
     */
    public function setCalculatedEndDateBaseline(SearchDateField $calculatedEndDateBaseline): JobSearchBasic
    {
        $this->calculatedEndDateBaseline = $calculatedEndDateBaseline;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCalculatedEndDateBaseline(): SearchDateField
    {
        return $this->calculatedEndDateBaseline;
    }

    /**
     * @param SearchDateField $calculatedStartDate
     * @return JobSearchBasic
     */
    public function setCalculatedStartDate(SearchDateField $calculatedStartDate): JobSearchBasic
    {
        $this->calculatedStartDate = $calculatedStartDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCalculatedStartDate(): SearchDateField
    {
        return $this->calculatedStartDate;
    }

    /**
     * @param SearchMultiSelectField $category
     * @return JobSearchBasic
     */
    public function setCategory(SearchMultiSelectField $category): JobSearchBasic
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory(): SearchMultiSelectField
    {
        return $this->category;
    }

    /**
     * @param SearchStringField $city
     * @return JobSearchBasic
     */
    public function setCity(SearchStringField $city): JobSearchBasic
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
     * @param SearchStringField $comments
     * @return JobSearchBasic
     */
    public function setComments(SearchStringField $comments): JobSearchBasic
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getComments(): SearchStringField
    {
        return $this->comments;
    }

    /**
     * @param SearchStringField $contact
     * @return JobSearchBasic
     */
    public function setContact(SearchStringField $contact): JobSearchBasic
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getContact(): SearchStringField
    {
        return $this->contact;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return JobSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): JobSearchBasic
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
     * @param SearchStringField $county
     * @return JobSearchBasic
     */
    public function setCounty(SearchStringField $county): JobSearchBasic
    {
        $this->county = $county;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCounty(): SearchStringField
    {
        return $this->county;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return JobSearchBasic
     */
    public function setCustomer(SearchMultiSelectField $customer): JobSearchBasic
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer(): SearchMultiSelectField
    {
        return $this->customer;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return JobSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): JobSearchBasic
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated(): SearchDateField
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchMultiSelectField $defaultTaxReg
     * @return JobSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): JobSearchBasic
    {
        $this->defaultTaxReg = $defaultTaxReg;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultTaxReg(): SearchMultiSelectField
    {
        return $this->defaultTaxReg;
    }

    /**
     * @param SearchStringField $defaultTaxRegText
     * @return JobSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): JobSearchBasic
    {
        $this->defaultTaxRegText = $defaultTaxRegText;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDefaultTaxRegText(): SearchStringField
    {
        return $this->defaultTaxRegText;
    }

    /**
     * @param SearchStringField $email
     * @return JobSearchBasic
     */
    public function setEmail(SearchStringField $email): JobSearchBasic
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
     * @param SearchDateField $endDate
     * @return JobSearchBasic
     */
    public function setEndDate(SearchDateField $endDate): JobSearchBasic
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate(): SearchDateField
    {
        return $this->endDate;
    }

    /**
     * @param SearchStringField $entityId
     * @return JobSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): JobSearchBasic
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getEntityId(): SearchStringField
    {
        return $this->entityId;
    }

    /**
     * @param SearchDoubleField $estCost
     * @return JobSearchBasic
     */
    public function setEstCost(SearchDoubleField $estCost): JobSearchBasic
    {
        $this->estCost = $estCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstCost(): SearchDoubleField
    {
        return $this->estCost;
    }

    /**
     * @param SearchDateField $estEndDate
     * @return JobSearchBasic
     */
    public function setEstEndDate(SearchDateField $estEndDate): JobSearchBasic
    {
        $this->estEndDate = $estEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEstEndDate(): SearchDateField
    {
        return $this->estEndDate;
    }

    /**
     * @param SearchDoubleField $estimatedGrossProfit
     * @return JobSearchBasic
     */
    public function setEstimatedGrossProfit(SearchDoubleField $estimatedGrossProfit): JobSearchBasic
    {
        $this->estimatedGrossProfit = $estimatedGrossProfit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfit(): SearchDoubleField
    {
        return $this->estimatedGrossProfit;
    }

    /**
     * @param SearchDoubleField $estimatedGrossProfitPercent
     * @return JobSearchBasic
     */
    public function setEstimatedGrossProfitPercent(SearchDoubleField $estimatedGrossProfitPercent): JobSearchBasic
    {
        $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedGrossProfitPercent(): SearchDoubleField
    {
        return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param SearchDoubleField $estimatedLaborCost
     * @return JobSearchBasic
     */
    public function setEstimatedLaborCost(SearchDoubleField $estimatedLaborCost): JobSearchBasic
    {
        $this->estimatedLaborCost = $estimatedLaborCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCost(): SearchDoubleField
    {
        return $this->estimatedLaborCost;
    }

    /**
     * @param SearchDoubleField $estimatedLaborCostBaseline
     * @return JobSearchBasic
     */
    public function setEstimatedLaborCostBaseline(SearchDoubleField $estimatedLaborCostBaseline): JobSearchBasic
    {
        $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborCostBaseline(): SearchDoubleField
    {
        return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param SearchDoubleField $estimatedLaborRevenue
     * @return JobSearchBasic
     */
    public function setEstimatedLaborRevenue(SearchDoubleField $estimatedLaborRevenue): JobSearchBasic
    {
        $this->estimatedLaborRevenue = $estimatedLaborRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedLaborRevenue(): SearchDoubleField
    {
        return $this->estimatedLaborRevenue;
    }

    /**
     * @param SearchDoubleField $estimatedTime
     * @return JobSearchBasic
     */
    public function setEstimatedTime(SearchDoubleField $estimatedTime): JobSearchBasic
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTime(): SearchDoubleField
    {
        return $this->estimatedTime;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverride
     * @return JobSearchBasic
     */
    public function setEstimatedTimeOverride(SearchDoubleField $estimatedTimeOverride): JobSearchBasic
    {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverride(): SearchDoubleField
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchDoubleField $estimatedTimeOverrideBaseline
     * @return JobSearchBasic
     */
    public function setEstimatedTimeOverrideBaseline(SearchDoubleField $estimatedTimeOverrideBaseline): JobSearchBasic
    {
        $this->estimatedTimeOverrideBaseline = $estimatedTimeOverrideBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstimatedTimeOverrideBaseline(): SearchDoubleField
    {
        return $this->estimatedTimeOverrideBaseline;
    }

    /**
     * @param SearchDoubleField $estRevenue
     * @return JobSearchBasic
     */
    public function setEstRevenue(SearchDoubleField $estRevenue): JobSearchBasic
    {
        $this->estRevenue = $estRevenue;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getEstRevenue(): SearchDoubleField
    {
        return $this->estRevenue;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return JobSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): JobSearchBasic
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
     * @return JobSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): JobSearchBasic
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
     * @return JobSearchBasic
     */
    public function setFax(SearchStringField $fax): JobSearchBasic
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
     * @param SearchBooleanField $giveAccess
     * @return JobSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): JobSearchBasic
    {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getGiveAccess(): SearchBooleanField
    {
        return $this->giveAccess;
    }

    /**
     * @param SearchEnumMultiSelectField $globalSubscriptionStatus
     * @return JobSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): JobSearchBasic
    {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGlobalSubscriptionStatus(): SearchEnumMultiSelectField
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchStringField $image
     * @return JobSearchBasic
     */
    public function setImage(SearchStringField $image): JobSearchBasic
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getImage(): SearchStringField
    {
        return $this->image;
    }

    /**
     * @param SearchBooleanField $includeCrmTasksInTotals
     * @return JobSearchBasic
     */
    public function setIncludeCrmTasksInTotals(SearchBooleanField $includeCrmTasksInTotals): JobSearchBasic
    {
        $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIncludeCrmTasksInTotals(): SearchBooleanField
    {
        return $this->includeCrmTasksInTotals;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return JobSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): JobSearchBasic
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
     * @return JobSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): JobSearchBasic
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
     * @param SearchBooleanField $isDefaultBilling
     * @return JobSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): JobSearchBasic
    {
        $this->isDefaultBilling = $isDefaultBilling;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultBilling(): SearchBooleanField
    {
        return $this->isDefaultBilling;
    }

    /**
     * @param SearchBooleanField $isDefaultShipping
     * @return JobSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): JobSearchBasic
    {
        $this->isDefaultShipping = $isDefaultShipping;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsDefaultShipping(): SearchBooleanField
    {
        return $this->isDefaultShipping;
    }

    /**
     * @param SearchBooleanField $isExemptTime
     * @return JobSearchBasic
     */
    public function setIsExemptTime(SearchBooleanField $isExemptTime): JobSearchBasic
    {
        $this->isExemptTime = $isExemptTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsExemptTime(): SearchBooleanField
    {
        return $this->isExemptTime;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return JobSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): JobSearchBasic
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
     * @param SearchBooleanField $isProductiveTime
     * @return JobSearchBasic
     */
    public function setIsProductiveTime(SearchBooleanField $isProductiveTime): JobSearchBasic
    {
        $this->isProductiveTime = $isProductiveTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsProductiveTime(): SearchBooleanField
    {
        return $this->isProductiveTime;
    }

    /**
     * @param SearchBooleanField $isUtilizedTime
     * @return JobSearchBasic
     */
    public function setIsUtilizedTime(SearchBooleanField $isUtilizedTime): JobSearchBasic
    {
        $this->isUtilizedTime = $isUtilizedTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsUtilizedTime(): SearchBooleanField
    {
        return $this->isUtilizedTime;
    }

    /**
     * @param SearchEnumMultiSelectField $jobBillingType
     * @return JobSearchBasic
     */
    public function setJobBillingType(SearchEnumMultiSelectField $jobBillingType): JobSearchBasic
    {
        $this->jobBillingType = $jobBillingType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getJobBillingType(): SearchEnumMultiSelectField
    {
        return $this->jobBillingType;
    }

    /**
     * @param SearchMultiSelectField $jobItem
     * @return JobSearchBasic
     */
    public function setJobItem(SearchMultiSelectField $jobItem): JobSearchBasic
    {
        $this->jobItem = $jobItem;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobItem(): SearchMultiSelectField
    {
        return $this->jobItem;
    }

    /**
     * @param SearchDoubleField $jobPrice
     * @return JobSearchBasic
     */
    public function setJobPrice(SearchDoubleField $jobPrice): JobSearchBasic
    {
        $this->jobPrice = $jobPrice;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getJobPrice(): SearchDoubleField
    {
        return $this->jobPrice;
    }

    /**
     * @param SearchMultiSelectField $jobResource
     * @return JobSearchBasic
     */
    public function setJobResource(SearchMultiSelectField $jobResource): JobSearchBasic
    {
        $this->jobResource = $jobResource;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobResource(): SearchMultiSelectField
    {
        return $this->jobResource;
    }

    /**
     * @param SearchMultiSelectField $jobResourceRole
     * @return JobSearchBasic
     */
    public function setJobResourceRole(SearchMultiSelectField $jobResourceRole): JobSearchBasic
    {
        $this->jobResourceRole = $jobResourceRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJobResourceRole(): SearchMultiSelectField
    {
        return $this->jobResourceRole;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return JobSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): JobSearchBasic
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLanguage(): SearchEnumMultiSelectField
    {
        return $this->language;
    }

    /**
     * @param SearchDateField $lastBaselineDate
     * @return JobSearchBasic
     */
    public function setLastBaselineDate(SearchDateField $lastBaselineDate): JobSearchBasic
    {
        $this->lastBaselineDate = $lastBaselineDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBaselineDate(): SearchDateField
    {
        return $this->lastBaselineDate;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return JobSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): JobSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchEnumMultiSelectField $level
     * @return JobSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): JobSearchBasic
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLevel(): SearchEnumMultiSelectField
    {
        return $this->level;
    }

    /**
     * @param SearchBooleanField $limitTimeToAssignees
     * @return JobSearchBasic
     */
    public function setLimitTimeToAssignees(SearchBooleanField $limitTimeToAssignees): JobSearchBasic
    {
        $this->limitTimeToAssignees = $limitTimeToAssignees;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getLimitTimeToAssignees(): SearchBooleanField
    {
        return $this->limitTimeToAssignees;
    }

    /**
     * @param SearchBooleanField $materializeTime
     * @return JobSearchBasic
     */
    public function setMaterializeTime(SearchBooleanField $materializeTime): JobSearchBasic
    {
        $this->materializeTime = $materializeTime;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getMaterializeTime(): SearchBooleanField
    {
        return $this->materializeTime;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return JobSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): JobSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchLongField $pctComplete
     * @return JobSearchBasic
     */
    public function setPctComplete(SearchLongField $pctComplete): JobSearchBasic
    {
        $this->pctComplete = $pctComplete;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPctComplete(): SearchLongField
    {
        return $this->pctComplete;
    }

    /**
     * @param SearchLongField $percentTimeComplete
     * @return JobSearchBasic
     */
    public function setPercentTimeComplete(SearchLongField $percentTimeComplete): JobSearchBasic
    {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPercentTimeComplete(): SearchLongField
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return JobSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): JobSearchBasic
    {
        $this->permission = $permission;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPermission(): SearchEnumMultiSelectField
    {
        return $this->permission;
    }

    /**
     * @param SearchStringField $phone
     * @return JobSearchBasic
     */
    public function setPhone(SearchStringField $phone): JobSearchBasic
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
     * @param SearchStringField $phoneticName
     * @return JobSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): JobSearchBasic
    {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPhoneticName(): SearchStringField
    {
        return $this->phoneticName;
    }

    /**
     * @param SearchDoubleField $plannedWork
     * @return JobSearchBasic
     */
    public function setPlannedWork(SearchDoubleField $plannedWork): JobSearchBasic
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWork(): SearchDoubleField
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchDoubleField $plannedWorkBaseline
     * @return JobSearchBasic
     */
    public function setPlannedWorkBaseline(SearchDoubleField $plannedWorkBaseline): JobSearchBasic
    {
        $this->plannedWorkBaseline = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPlannedWorkBaseline(): SearchDoubleField
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchDateField $projectedEndDateBaseline
     * @return JobSearchBasic
     */
    public function setProjectedEndDateBaseline(SearchDateField $projectedEndDateBaseline): JobSearchBasic
    {
        $this->projectedEndDateBaseline = $projectedEndDateBaseline;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getProjectedEndDateBaseline(): SearchDateField
    {
        return $this->projectedEndDateBaseline;
    }

    /**
     * @param SearchMultiSelectField $projectExpenseType
     * @return JobSearchBasic
     */
    public function setProjectExpenseType(SearchMultiSelectField $projectExpenseType): JobSearchBasic
    {
        $this->projectExpenseType = $projectExpenseType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectExpenseType(): SearchMultiSelectField
    {
        return $this->projectExpenseType;
    }

    /**
     * @param SearchMultiSelectField $projectManager
     * @return JobSearchBasic
     */
    public function setProjectManager(SearchMultiSelectField $projectManager): JobSearchBasic
    {
        $this->projectManager = $projectManager;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProjectManager(): SearchMultiSelectField
    {
        return $this->projectManager;
    }

    /**
     * @param SearchMultiSelectField $revRecForecastRule
     * @return JobSearchBasic
     */
    public function setRevRecForecastRule(SearchMultiSelectField $revRecForecastRule): JobSearchBasic
    {
        $this->revRecForecastRule = $revRecForecastRule;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRevRecForecastRule(): SearchMultiSelectField
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param SearchDateField $scheduledEndDate
     * @return JobSearchBasic
     */
    public function setScheduledEndDate(SearchDateField $scheduledEndDate): JobSearchBasic
    {
        $this->scheduledEndDate = $scheduledEndDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getScheduledEndDate(): SearchDateField
    {
        return $this->scheduledEndDate;
    }

    /**
     * @param SearchEnumMultiSelectField $schedulingMethod
     * @return JobSearchBasic
     */
    public function setSchedulingMethod(SearchEnumMultiSelectField $schedulingMethod): JobSearchBasic
    {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSchedulingMethod(): SearchEnumMultiSelectField
    {
        return $this->schedulingMethod;
    }

    /**
     * @param SearchBooleanField $sourceServiceItemFromRateCard
     * @return JobSearchBasic
     */
    public function setSourceServiceItemFromRateCard(SearchBooleanField $sourceServiceItemFromRateCard): JobSearchBasic
    {
        $this->sourceServiceItemFromRateCard = $sourceServiceItemFromRateCard;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSourceServiceItemFromRateCard(): SearchBooleanField
    {
        return $this->sourceServiceItemFromRateCard;
    }

    /**
     * @param SearchDateField $startDate
     * @return JobSearchBasic
     */
    public function setStartDate(SearchDateField $startDate): JobSearchBasic
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate(): SearchDateField
    {
        return $this->startDate;
    }

    /**
     * @param SearchDateField $startDateBaseline
     * @return JobSearchBasic
     */
    public function setStartDateBaseline(SearchDateField $startDateBaseline): JobSearchBasic
    {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateBaseline(): SearchDateField
    {
        return $this->startDateBaseline;
    }

    /**
     * @param SearchStringField $state
     * @return JobSearchBasic
     */
    public function setState(SearchStringField $state): JobSearchBasic
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
     * @param SearchMultiSelectField $status
     * @return JobSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status): JobSearchBasic
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getStatus(): SearchMultiSelectField
    {
        return $this->status;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return JobSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): JobSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $timeApproval
     * @return JobSearchBasic
     */
    public function setTimeApproval(SearchMultiSelectField $timeApproval): JobSearchBasic
    {
        $this->timeApproval = $timeApproval;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeApproval(): SearchMultiSelectField
    {
        return $this->timeApproval;
    }

    /**
     * @param SearchDoubleField $timeRemaining
     * @return JobSearchBasic
     */
    public function setTimeRemaining(SearchDoubleField $timeRemaining): JobSearchBasic
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTimeRemaining(): SearchDoubleField
    {
        return $this->timeRemaining;
    }

    /**
     * @param SearchMultiSelectField $type
     * @return JobSearchBasic
     */
    public function setType(SearchMultiSelectField $type): JobSearchBasic
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getType(): SearchMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchBooleanField $usePercentCompleteOverride
     * @return JobSearchBasic
     */
    public function setUsePercentCompleteOverride(SearchBooleanField $usePercentCompleteOverride): JobSearchBasic
    {
        $this->usePercentCompleteOverride = $usePercentCompleteOverride;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsePercentCompleteOverride(): SearchBooleanField
    {
        return $this->usePercentCompleteOverride;
    }

    /**
     * @param SearchStringField $zipCode
     * @return JobSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): JobSearchBasic
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getZipCode(): SearchStringField
    {
        return $this->zipCode;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return JobSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): JobSearchBasic
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
