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

class JobSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $actualTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $address;

    protected $address1;
    protected $address2;
    protected $address3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressInternalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressLabel;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $addressPhone;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allocatePayrollExpenses;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allowAllResourcesForTasks;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allowExpenses;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $allowTime;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altContact;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altEmail;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $attention;

    protected $billAddress1;
    protected $billAddress2;
    protected $billAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAddressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAttention;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billCity;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $billCountry;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billCountryCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingRateCard;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $billingSchedule;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billZipCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $calculatedEndDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $calculatedEndDateBaseline;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $calculatedStartDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $category;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $comments;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $companyName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $contact;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $countryCode;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $customer;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultTaxReg;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $endDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $entityId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $entityNumber;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $entityStatus;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedGrossProfit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedGrossProfitPercent;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedLaborCost;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedLaborCostBaseline;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedLaborRevenue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedRevenue;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedTimeOverride;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $estimatedTimeOverrideBaseline;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fax;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $globalSubscriptionStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $image;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $includeCrmTasksInTotals;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDefaultBilling;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isDefaultShipping;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isExemptTime;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isProductiveTime;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isUtilizedTime;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $jobBillingType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $jobItem;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $jobPrice;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $jobResource;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $jobResourceRole;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $language;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastBaselineDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $level;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $limitTimeToAssignees;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $materializeTime;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentComplete;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $percentTimeComplete;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $permission;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phoneticName;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWork;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $plannedWorkBaseline;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $projectedEndDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $projectedEndDateBaseline;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $projectExpenseType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $projectManager;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $revRecForecastRule;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $scheduledEndDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $schedulingMethod;

    protected $shipAddress1;
    protected $shipAddress2;
    protected $shipAddress3;
    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipAddressee;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipAttention;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipCity;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $shipCountry;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipCountryCode;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipPhone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipState;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $shipZip;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $sourceServiceItemFromRateCard;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDateBaseline;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $state;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subscription;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $subscriptionDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $subscriptionStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $timeApproval;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $timeRemaining;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $usePercentCompleteOverride;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $zipCode;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "accountNumber" => "SearchColumnStringField[]",
        "actualTime" => "SearchColumnDoubleField[]",
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "allocatePayrollExpenses" => "SearchColumnBooleanField[]",
        "allowAllResourcesForTasks" => "SearchColumnBooleanField[]",
        "allowExpenses" => "SearchColumnBooleanField[]",
        "allowTime" => "SearchColumnBooleanField[]",
        "altContact" => "SearchColumnStringField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "attention" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billingRateCard" => "SearchColumnSelectField[]",
        "billingSchedule" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "calculatedEndDate" => "SearchColumnDateField[]",
        "calculatedEndDateBaseline" => "SearchColumnDateField[]",
        "calculatedStartDate" => "SearchColumnDateField[]",
        "category" => "SearchColumnSelectField[]",
        "city" => "SearchColumnStringField[]",
        "comments" => "SearchColumnStringField[]",
        "companyName" => "SearchColumnStringField[]",
        "contact" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "customer" => "SearchColumnSelectField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "email" => "SearchColumnStringField[]",
        "endDate" => "SearchColumnDateField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "entityStatus" => "SearchColumnSelectField[]",
        "estimatedCost" => "SearchColumnDoubleField[]",
        "estimatedGrossProfit" => "SearchColumnDoubleField[]",
        "estimatedGrossProfitPercent" => "SearchColumnDoubleField[]",
        "estimatedLaborCost" => "SearchColumnDoubleField[]",
        "estimatedLaborCostBaseline" => "SearchColumnDoubleField[]",
        "estimatedLaborRevenue" => "SearchColumnDoubleField[]",
        "estimatedRevenue" => "SearchColumnDoubleField[]",
        "estimatedTime" => "SearchColumnDoubleField[]",
        "estimatedTimeOverride" => "SearchColumnDoubleField[]",
        "estimatedTimeOverrideBaseline" => "SearchColumnDoubleField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "image" => "SearchColumnSelectField[]",
        "includeCrmTasksInTotals" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isExemptTime" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isProductiveTime" => "SearchColumnBooleanField[]",
        "isUtilizedTime" => "SearchColumnBooleanField[]",
        "jobBillingType" => "SearchColumnEnumSelectField[]",
        "jobItem" => "SearchColumnSelectField[]",
        "jobPrice" => "SearchColumnDoubleField[]",
        "jobResource" => "SearchColumnSelectField[]",
        "jobResourceRole" => "SearchColumnSelectField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastBaselineDate" => "SearchColumnDateField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "limitTimeToAssignees" => "SearchColumnBooleanField[]",
        "materializeTime" => "SearchColumnBooleanField[]",
        "percentComplete" => "SearchColumnDoubleField[]",
        "percentTimeComplete" => "SearchColumnDoubleField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "plannedWork" => "SearchColumnDoubleField[]",
        "plannedWorkBaseline" => "SearchColumnDoubleField[]",
        "projectedEndDate" => "SearchColumnDateField[]",
        "projectedEndDateBaseline" => "SearchColumnDateField[]",
        "projectExpenseType" => "SearchColumnSelectField[]",
        "projectManager" => "SearchColumnSelectField[]",
        "revRecForecastRule" => "SearchColumnSelectField[]",
        "scheduledEndDate" => "SearchColumnDateField[]",
        "schedulingMethod" => "SearchColumnEnumSelectField[]",
        "shipAddress1" => "SearchColumnStringField[]",
        "shipAddress2" => "SearchColumnStringField[]",
        "shipAddress3" => "SearchColumnStringField[]",
        "shipAddressee" => "SearchColumnStringField[]",
        "shipAttention" => "SearchColumnStringField[]",
        "shipCity" => "SearchColumnStringField[]",
        "shipCountry" => "SearchColumnEnumSelectField[]",
        "shipCountryCode" => "SearchColumnStringField[]",
        "shipPhone" => "SearchColumnStringField[]",
        "shipState" => "SearchColumnStringField[]",
        "shipZip" => "SearchColumnStringField[]",
        "sourceServiceItemFromRateCard" => "SearchColumnBooleanField[]",
        "startDate" => "SearchColumnDateField[]",
        "startDateBaseline" => "SearchColumnDateField[]",
        "state" => "SearchColumnStringField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "timeApproval" => "SearchColumnSelectField[]",
        "timeRemaining" => "SearchColumnDoubleField[]",
        "usePercentCompleteOverride" => "SearchColumnBooleanField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accountNumber
     * @return JobSearchRowBasic
     */
    public function setAccountNumber(SearchColumnStringField $accountNumber): JobSearchRowBasic
    {
        $this->accountNumber[] = $accountNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountNumber(): array
    {
        return $this->accountNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $actualTime
     * @return JobSearchRowBasic
     */
    public function setActualTime(SearchColumnDoubleField $actualTime): JobSearchRowBasic
    {
        $this->actualTime[] = $actualTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getActualTime(): array
    {
        return $this->actualTime;
    }

    /**
     * @param SearchColumnStringField[] $address
     * @return JobSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): JobSearchRowBasic
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param SearchColumnStringField[] $addressee
     * @return JobSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): JobSearchRowBasic
    {
        $this->addressee[] = $addressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressee(): array
    {
        return $this->addressee;
    }

    /**
     * @param SearchColumnStringField[] $addressInternalId
     * @return JobSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): JobSearchRowBasic
    {
        $this->addressInternalId[] = $addressInternalId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressInternalId(): array
    {
        return $this->addressInternalId;
    }

    /**
     * @param SearchColumnStringField[] $addressLabel
     * @return JobSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): JobSearchRowBasic
    {
        $this->addressLabel[] = $addressLabel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressLabel(): array
    {
        return $this->addressLabel;
    }

    /**
     * @param SearchColumnStringField[] $addressPhone
     * @return JobSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): JobSearchRowBasic
    {
        $this->addressPhone[] = $addressPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAddressPhone(): array
    {
        return $this->addressPhone;
    }

    /**
     * @param SearchColumnBooleanField[] $allocatePayrollExpenses
     * @return JobSearchRowBasic
     */
    public function setAllocatePayrollExpenses(SearchColumnBooleanField $allocatePayrollExpenses): JobSearchRowBasic
    {
        $this->allocatePayrollExpenses[] = $allocatePayrollExpenses;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllocatePayrollExpenses(): array
    {
        return $this->allocatePayrollExpenses;
    }

    /**
     * @param SearchColumnBooleanField[] $allowAllResourcesForTasks
     * @return JobSearchRowBasic
     */
    public function setAllowAllResourcesForTasks(SearchColumnBooleanField $allowAllResourcesForTasks): JobSearchRowBasic
    {
        $this->allowAllResourcesForTasks[] = $allowAllResourcesForTasks;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowAllResourcesForTasks(): array
    {
        return $this->allowAllResourcesForTasks;
    }

    /**
     * @param SearchColumnBooleanField[] $allowExpenses
     * @return JobSearchRowBasic
     */
    public function setAllowExpenses(SearchColumnBooleanField $allowExpenses): JobSearchRowBasic
    {
        $this->allowExpenses[] = $allowExpenses;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowExpenses(): array
    {
        return $this->allowExpenses;
    }

    /**
     * @param SearchColumnBooleanField[] $allowTime
     * @return JobSearchRowBasic
     */
    public function setAllowTime(SearchColumnBooleanField $allowTime): JobSearchRowBasic
    {
        $this->allowTime[] = $allowTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAllowTime(): array
    {
        return $this->allowTime;
    }

    /**
     * @param SearchColumnStringField[] $altContact
     * @return JobSearchRowBasic
     */
    public function setAltContact(SearchColumnStringField $altContact): JobSearchRowBasic
    {
        $this->altContact[] = $altContact;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltContact(): array
    {
        return $this->altContact;
    }

    /**
     * @param SearchColumnStringField[] $altEmail
     * @return JobSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): JobSearchRowBasic
    {
        $this->altEmail[] = $altEmail;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltEmail(): array
    {
        return $this->altEmail;
    }

    /**
     * @param SearchColumnStringField[] $altName
     * @return JobSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): JobSearchRowBasic
    {
        $this->altName[] = $altName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltName(): array
    {
        return $this->altName;
    }

    /**
     * @param SearchColumnStringField[] $altPhone
     * @return JobSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): JobSearchRowBasic
    {
        $this->altPhone[] = $altPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltPhone(): array
    {
        return $this->altPhone;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return JobSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): JobSearchRowBasic
    {
        $this->attention[] = $attention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAttention(): array
    {
        return $this->attention;
    }

    /**
     * @param SearchColumnStringField[] $billAddressee
     * @return JobSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): JobSearchRowBasic
    {
        $this->billAddressee[] = $billAddressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddressee(): array
    {
        return $this->billAddressee;
    }

    /**
     * @param SearchColumnStringField[] $billAttention
     * @return JobSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): JobSearchRowBasic
    {
        $this->billAttention[] = $billAttention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAttention(): array
    {
        return $this->billAttention;
    }

    /**
     * @param SearchColumnStringField[] $billCity
     * @return JobSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): JobSearchRowBasic
    {
        $this->billCity[] = $billCity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCity(): array
    {
        return $this->billCity;
    }

    /**
     * @param SearchColumnEnumSelectField[] $billCountry
     * @return JobSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): JobSearchRowBasic
    {
        $this->billCountry[] = $billCountry;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBillCountry(): array
    {
        return $this->billCountry;
    }

    /**
     * @param SearchColumnStringField[] $billCountryCode
     * @return JobSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): JobSearchRowBasic
    {
        $this->billCountryCode[] = $billCountryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillCountryCode(): array
    {
        return $this->billCountryCode;
    }

    /**
     * @param SearchColumnSelectField[] $billingRateCard
     * @return JobSearchRowBasic
     */
    public function setBillingRateCard(SearchColumnSelectField $billingRateCard): JobSearchRowBasic
    {
        $this->billingRateCard[] = $billingRateCard;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingRateCard(): array
    {
        return $this->billingRateCard;
    }

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return JobSearchRowBasic
     */
    public function setBillingSchedule(SearchColumnSelectField $billingSchedule): JobSearchRowBasic
    {
        $this->billingSchedule[] = $billingSchedule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule(): array
    {
        return $this->billingSchedule;
    }

    /**
     * @param SearchColumnStringField[] $billPhone
     * @return JobSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): JobSearchRowBasic
    {
        $this->billPhone[] = $billPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillPhone(): array
    {
        return $this->billPhone;
    }

    /**
     * @param SearchColumnStringField[] $billState
     * @return JobSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): JobSearchRowBasic
    {
        $this->billState[] = $billState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillState(): array
    {
        return $this->billState;
    }

    /**
     * @param SearchColumnStringField[] $billZipCode
     * @return JobSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): JobSearchRowBasic
    {
        $this->billZipCode[] = $billZipCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillZipCode(): array
    {
        return $this->billZipCode;
    }

    /**
     * @param SearchColumnDateField[] $calculatedEndDate
     * @return JobSearchRowBasic
     */
    public function setCalculatedEndDate(SearchColumnDateField $calculatedEndDate): JobSearchRowBasic
    {
        $this->calculatedEndDate[] = $calculatedEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCalculatedEndDate(): array
    {
        return $this->calculatedEndDate;
    }

    /**
     * @param SearchColumnDateField[] $calculatedEndDateBaseline
     * @return JobSearchRowBasic
     */
    public function setCalculatedEndDateBaseline(SearchColumnDateField $calculatedEndDateBaseline): JobSearchRowBasic
    {
        $this->calculatedEndDateBaseline[] = $calculatedEndDateBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCalculatedEndDateBaseline(): array
    {
        return $this->calculatedEndDateBaseline;
    }

    /**
     * @param SearchColumnDateField[] $calculatedStartDate
     * @return JobSearchRowBasic
     */
    public function setCalculatedStartDate(SearchColumnDateField $calculatedStartDate): JobSearchRowBasic
    {
        $this->calculatedStartDate[] = $calculatedStartDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCalculatedStartDate(): array
    {
        return $this->calculatedStartDate;
    }

    /**
     * @param SearchColumnSelectField[] $category
     * @return JobSearchRowBasic
     */
    public function setCategory(SearchColumnSelectField $category): JobSearchRowBasic
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory(): array
    {
        return $this->category;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return JobSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): JobSearchRowBasic
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
     * @param SearchColumnStringField[] $comments
     * @return JobSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): JobSearchRowBasic
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param SearchColumnStringField[] $companyName
     * @return JobSearchRowBasic
     */
    public function setCompanyName(SearchColumnStringField $companyName): JobSearchRowBasic
    {
        $this->companyName[] = $companyName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCompanyName(): array
    {
        return $this->companyName;
    }

    /**
     * @param SearchColumnStringField[] $contact
     * @return JobSearchRowBasic
     */
    public function setContact(SearchColumnStringField $contact): JobSearchRowBasic
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContact(): array
    {
        return $this->contact;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return JobSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): JobSearchRowBasic
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
     * @param SearchColumnStringField[] $countryCode
     * @return JobSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): JobSearchRowBasic
    {
        $this->countryCode[] = $countryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCountryCode(): array
    {
        return $this->countryCode;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return JobSearchRowBasic
     */
    public function setCustomer(SearchColumnSelectField $customer): JobSearchRowBasic
    {
        $this->customer[] = $customer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer(): array
    {
        return $this->customer;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return JobSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): JobSearchRowBasic
    {
        $this->dateCreated[] = $dateCreated;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated(): array
    {
        return $this->dateCreated;
    }

    /**
     * @param SearchColumnStringField[] $defaultTaxReg
     * @return JobSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): JobSearchRowBasic
    {
        $this->defaultTaxReg[] = $defaultTaxReg;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDefaultTaxReg(): array
    {
        return $this->defaultTaxReg;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return JobSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): JobSearchRowBasic
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
     * @param SearchColumnDateField[] $endDate
     * @return JobSearchRowBasic
     */
    public function setEndDate(SearchColumnDateField $endDate): JobSearchRowBasic
    {
        $this->endDate[] = $endDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate(): array
    {
        return $this->endDate;
    }

    /**
     * @param SearchColumnStringField[] $entityId
     * @return JobSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): JobSearchRowBasic
    {
        $this->entityId[] = $entityId;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getEntityId(): array
    {
        return $this->entityId;
    }

    /**
     * @param SearchColumnLongField[] $entityNumber
     * @return JobSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): JobSearchRowBasic
    {
        $this->entityNumber[] = $entityNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getEntityNumber(): array
    {
        return $this->entityNumber;
    }

    /**
     * @param SearchColumnSelectField[] $entityStatus
     * @return JobSearchRowBasic
     */
    public function setEntityStatus(SearchColumnSelectField $entityStatus): JobSearchRowBasic
    {
        $this->entityStatus[] = $entityStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEntityStatus(): array
    {
        return $this->entityStatus;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedCost
     * @return JobSearchRowBasic
     */
    public function setEstimatedCost(SearchColumnDoubleField $estimatedCost): JobSearchRowBasic
    {
        $this->estimatedCost[] = $estimatedCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedCost(): array
    {
        return $this->estimatedCost;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedGrossProfit
     * @return JobSearchRowBasic
     */
    public function setEstimatedGrossProfit(SearchColumnDoubleField $estimatedGrossProfit): JobSearchRowBasic
    {
        $this->estimatedGrossProfit[] = $estimatedGrossProfit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedGrossProfit(): array
    {
        return $this->estimatedGrossProfit;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedGrossProfitPercent
     * @return JobSearchRowBasic
     */
    public function setEstimatedGrossProfitPercent(SearchColumnDoubleField $estimatedGrossProfitPercent): JobSearchRowBasic
    {
        $this->estimatedGrossProfitPercent[] = $estimatedGrossProfitPercent;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedGrossProfitPercent(): array
    {
        return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborCost
     * @return JobSearchRowBasic
     */
    public function setEstimatedLaborCost(SearchColumnDoubleField $estimatedLaborCost): JobSearchRowBasic
    {
        $this->estimatedLaborCost[] = $estimatedLaborCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborCost(): array
    {
        return $this->estimatedLaborCost;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborCostBaseline
     * @return JobSearchRowBasic
     */
    public function setEstimatedLaborCostBaseline(SearchColumnDoubleField $estimatedLaborCostBaseline): JobSearchRowBasic
    {
        $this->estimatedLaborCostBaseline[] = $estimatedLaborCostBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborCostBaseline(): array
    {
        return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedLaborRevenue
     * @return JobSearchRowBasic
     */
    public function setEstimatedLaborRevenue(SearchColumnDoubleField $estimatedLaborRevenue): JobSearchRowBasic
    {
        $this->estimatedLaborRevenue[] = $estimatedLaborRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedLaborRevenue(): array
    {
        return $this->estimatedLaborRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedRevenue
     * @return JobSearchRowBasic
     */
    public function setEstimatedRevenue(SearchColumnDoubleField $estimatedRevenue): JobSearchRowBasic
    {
        $this->estimatedRevenue[] = $estimatedRevenue;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedRevenue(): array
    {
        return $this->estimatedRevenue;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTime
     * @return JobSearchRowBasic
     */
    public function setEstimatedTime(SearchColumnDoubleField $estimatedTime): JobSearchRowBasic
    {
        $this->estimatedTime[] = $estimatedTime;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTime(): array
    {
        return $this->estimatedTime;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverride
     * @return JobSearchRowBasic
     */
    public function setEstimatedTimeOverride(SearchColumnDoubleField $estimatedTimeOverride): JobSearchRowBasic
    {
        $this->estimatedTimeOverride[] = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverride(): array
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param SearchColumnDoubleField[] $estimatedTimeOverrideBaseline
     * @return JobSearchRowBasic
     */
    public function setEstimatedTimeOverrideBaseline(SearchColumnDoubleField $estimatedTimeOverrideBaseline): JobSearchRowBasic
    {
        $this->estimatedTimeOverrideBaseline[] = $estimatedTimeOverrideBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getEstimatedTimeOverrideBaseline(): array
    {
        return $this->estimatedTimeOverrideBaseline;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return JobSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): JobSearchRowBasic
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
     * @return JobSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): JobSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $globalSubscriptionStatus
     * @return JobSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): JobSearchRowBasic
    {
        $this->globalSubscriptionStatus[] = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGlobalSubscriptionStatus(): array
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param SearchColumnSelectField[] $image
     * @return JobSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): JobSearchRowBasic
    {
        $this->image[] = $image;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getImage(): array
    {
        return $this->image;
    }

    /**
     * @param SearchColumnBooleanField[] $includeCrmTasksInTotals
     * @return JobSearchRowBasic
     */
    public function setIncludeCrmTasksInTotals(SearchColumnBooleanField $includeCrmTasksInTotals): JobSearchRowBasic
    {
        $this->includeCrmTasksInTotals[] = $includeCrmTasksInTotals;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIncludeCrmTasksInTotals(): array
    {
        return $this->includeCrmTasksInTotals;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return JobSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): JobSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isDefaultBilling
     * @return JobSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): JobSearchRowBasic
    {
        $this->isDefaultBilling[] = $isDefaultBilling;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultBilling(): array
    {
        return $this->isDefaultBilling;
    }

    /**
     * @param SearchColumnBooleanField[] $isDefaultShipping
     * @return JobSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): JobSearchRowBasic
    {
        $this->isDefaultShipping[] = $isDefaultShipping;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsDefaultShipping(): array
    {
        return $this->isDefaultShipping;
    }

    /**
     * @param SearchColumnBooleanField[] $isExemptTime
     * @return JobSearchRowBasic
     */
    public function setIsExemptTime(SearchColumnBooleanField $isExemptTime): JobSearchRowBasic
    {
        $this->isExemptTime[] = $isExemptTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsExemptTime(): array
    {
        return $this->isExemptTime;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return JobSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): JobSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isProductiveTime
     * @return JobSearchRowBasic
     */
    public function setIsProductiveTime(SearchColumnBooleanField $isProductiveTime): JobSearchRowBasic
    {
        $this->isProductiveTime[] = $isProductiveTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsProductiveTime(): array
    {
        return $this->isProductiveTime;
    }

    /**
     * @param SearchColumnBooleanField[] $isUtilizedTime
     * @return JobSearchRowBasic
     */
    public function setIsUtilizedTime(SearchColumnBooleanField $isUtilizedTime): JobSearchRowBasic
    {
        $this->isUtilizedTime[] = $isUtilizedTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsUtilizedTime(): array
    {
        return $this->isUtilizedTime;
    }

    /**
     * @param SearchColumnEnumSelectField[] $jobBillingType
     * @return JobSearchRowBasic
     */
    public function setJobBillingType(SearchColumnEnumSelectField $jobBillingType): JobSearchRowBasic
    {
        $this->jobBillingType[] = $jobBillingType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getJobBillingType(): array
    {
        return $this->jobBillingType;
    }

    /**
     * @param SearchColumnSelectField[] $jobItem
     * @return JobSearchRowBasic
     */
    public function setJobItem(SearchColumnSelectField $jobItem): JobSearchRowBasic
    {
        $this->jobItem[] = $jobItem;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobItem(): array
    {
        return $this->jobItem;
    }

    /**
     * @param SearchColumnDoubleField[] $jobPrice
     * @return JobSearchRowBasic
     */
    public function setJobPrice(SearchColumnDoubleField $jobPrice): JobSearchRowBasic
    {
        $this->jobPrice[] = $jobPrice;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getJobPrice(): array
    {
        return $this->jobPrice;
    }

    /**
     * @param SearchColumnSelectField[] $jobResource
     * @return JobSearchRowBasic
     */
    public function setJobResource(SearchColumnSelectField $jobResource): JobSearchRowBasic
    {
        $this->jobResource[] = $jobResource;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobResource(): array
    {
        return $this->jobResource;
    }

    /**
     * @param SearchColumnSelectField[] $jobResourceRole
     * @return JobSearchRowBasic
     */
    public function setJobResourceRole(SearchColumnSelectField $jobResourceRole): JobSearchRowBasic
    {
        $this->jobResourceRole[] = $jobResourceRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJobResourceRole(): array
    {
        return $this->jobResourceRole;
    }

    /**
     * @param SearchColumnEnumSelectField[] $language
     * @return JobSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): JobSearchRowBasic
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLanguage(): array
    {
        return $this->language;
    }

    /**
     * @param SearchColumnDateField[] $lastBaselineDate
     * @return JobSearchRowBasic
     */
    public function setLastBaselineDate(SearchColumnDateField $lastBaselineDate): JobSearchRowBasic
    {
        $this->lastBaselineDate[] = $lastBaselineDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBaselineDate(): array
    {
        return $this->lastBaselineDate;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return JobSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): JobSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $level
     * @return JobSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): JobSearchRowBasic
    {
        $this->level[] = $level;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getLevel(): array
    {
        return $this->level;
    }

    /**
     * @param SearchColumnBooleanField[] $limitTimeToAssignees
     * @return JobSearchRowBasic
     */
    public function setLimitTimeToAssignees(SearchColumnBooleanField $limitTimeToAssignees): JobSearchRowBasic
    {
        $this->limitTimeToAssignees[] = $limitTimeToAssignees;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getLimitTimeToAssignees(): array
    {
        return $this->limitTimeToAssignees;
    }

    /**
     * @param SearchColumnBooleanField[] $materializeTime
     * @return JobSearchRowBasic
     */
    public function setMaterializeTime(SearchColumnBooleanField $materializeTime): JobSearchRowBasic
    {
        $this->materializeTime[] = $materializeTime;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getMaterializeTime(): array
    {
        return $this->materializeTime;
    }

    /**
     * @param SearchColumnDoubleField[] $percentComplete
     * @return JobSearchRowBasic
     */
    public function setPercentComplete(SearchColumnDoubleField $percentComplete): JobSearchRowBasic
    {
        $this->percentComplete[] = $percentComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentComplete(): array
    {
        return $this->percentComplete;
    }

    /**
     * @param SearchColumnDoubleField[] $percentTimeComplete
     * @return JobSearchRowBasic
     */
    public function setPercentTimeComplete(SearchColumnDoubleField $percentTimeComplete): JobSearchRowBasic
    {
        $this->percentTimeComplete[] = $percentTimeComplete;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPercentTimeComplete(): array
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return JobSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): JobSearchRowBasic
    {
        $this->permission[] = $permission;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPermission(): array
    {
        return $this->permission;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return JobSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): JobSearchRowBasic
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
     * @param SearchColumnStringField[] $phoneticName
     * @return JobSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): JobSearchRowBasic
    {
        $this->phoneticName[] = $phoneticName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPhoneticName(): array
    {
        return $this->phoneticName;
    }

    /**
     * @param SearchColumnDoubleField[] $plannedWork
     * @return JobSearchRowBasic
     */
    public function setPlannedWork(SearchColumnDoubleField $plannedWork): JobSearchRowBasic
    {
        $this->plannedWork[] = $plannedWork;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWork(): array
    {
        return $this->plannedWork;
    }

    /**
     * @param SearchColumnDoubleField[] $plannedWorkBaseline
     * @return JobSearchRowBasic
     */
    public function setPlannedWorkBaseline(SearchColumnDoubleField $plannedWorkBaseline): JobSearchRowBasic
    {
        $this->plannedWorkBaseline[] = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPlannedWorkBaseline(): array
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param SearchColumnDateField[] $projectedEndDate
     * @return JobSearchRowBasic
     */
    public function setProjectedEndDate(SearchColumnDateField $projectedEndDate): JobSearchRowBasic
    {
        $this->projectedEndDate[] = $projectedEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectedEndDate(): array
    {
        return $this->projectedEndDate;
    }

    /**
     * @param SearchColumnDateField[] $projectedEndDateBaseline
     * @return JobSearchRowBasic
     */
    public function setProjectedEndDateBaseline(SearchColumnDateField $projectedEndDateBaseline): JobSearchRowBasic
    {
        $this->projectedEndDateBaseline[] = $projectedEndDateBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getProjectedEndDateBaseline(): array
    {
        return $this->projectedEndDateBaseline;
    }

    /**
     * @param SearchColumnSelectField[] $projectExpenseType
     * @return JobSearchRowBasic
     */
    public function setProjectExpenseType(SearchColumnSelectField $projectExpenseType): JobSearchRowBasic
    {
        $this->projectExpenseType[] = $projectExpenseType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProjectExpenseType(): array
    {
        return $this->projectExpenseType;
    }

    /**
     * @param SearchColumnSelectField[] $projectManager
     * @return JobSearchRowBasic
     */
    public function setProjectManager(SearchColumnSelectField $projectManager): JobSearchRowBasic
    {
        $this->projectManager[] = $projectManager;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProjectManager(): array
    {
        return $this->projectManager;
    }

    /**
     * @param SearchColumnSelectField[] $revRecForecastRule
     * @return JobSearchRowBasic
     */
    public function setRevRecForecastRule(SearchColumnSelectField $revRecForecastRule): JobSearchRowBasic
    {
        $this->revRecForecastRule[] = $revRecForecastRule;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRevRecForecastRule(): array
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param SearchColumnDateField[] $scheduledEndDate
     * @return JobSearchRowBasic
     */
    public function setScheduledEndDate(SearchColumnDateField $scheduledEndDate): JobSearchRowBasic
    {
        $this->scheduledEndDate[] = $scheduledEndDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getScheduledEndDate(): array
    {
        return $this->scheduledEndDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $schedulingMethod
     * @return JobSearchRowBasic
     */
    public function setSchedulingMethod(SearchColumnEnumSelectField $schedulingMethod): JobSearchRowBasic
    {
        $this->schedulingMethod[] = $schedulingMethod;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSchedulingMethod(): array
    {
        return $this->schedulingMethod;
    }

    /**
     * @param SearchColumnStringField[] $shipAddressee
     * @return JobSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): JobSearchRowBasic
    {
        $this->shipAddressee[] = $shipAddressee;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAddressee(): array
    {
        return $this->shipAddressee;
    }

    /**
     * @param SearchColumnStringField[] $shipAttention
     * @return JobSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): JobSearchRowBasic
    {
        $this->shipAttention[] = $shipAttention;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipAttention(): array
    {
        return $this->shipAttention;
    }

    /**
     * @param SearchColumnStringField[] $shipCity
     * @return JobSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): JobSearchRowBasic
    {
        $this->shipCity[] = $shipCity;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCity(): array
    {
        return $this->shipCity;
    }

    /**
     * @param SearchColumnEnumSelectField[] $shipCountry
     * @return JobSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): JobSearchRowBasic
    {
        $this->shipCountry[] = $shipCountry;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getShipCountry(): array
    {
        return $this->shipCountry;
    }

    /**
     * @param SearchColumnStringField[] $shipCountryCode
     * @return JobSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): JobSearchRowBasic
    {
        $this->shipCountryCode[] = $shipCountryCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipCountryCode(): array
    {
        return $this->shipCountryCode;
    }

    /**
     * @param SearchColumnStringField[] $shipPhone
     * @return JobSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): JobSearchRowBasic
    {
        $this->shipPhone[] = $shipPhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipPhone(): array
    {
        return $this->shipPhone;
    }

    /**
     * @param SearchColumnStringField[] $shipState
     * @return JobSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): JobSearchRowBasic
    {
        $this->shipState[] = $shipState;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipState(): array
    {
        return $this->shipState;
    }

    /**
     * @param SearchColumnStringField[] $shipZip
     * @return JobSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): JobSearchRowBasic
    {
        $this->shipZip[] = $shipZip;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getShipZip(): array
    {
        return $this->shipZip;
    }

    /**
     * @param SearchColumnBooleanField[] $sourceServiceItemFromRateCard
     * @return JobSearchRowBasic
     */
    public function setSourceServiceItemFromRateCard(SearchColumnBooleanField $sourceServiceItemFromRateCard): JobSearchRowBasic
    {
        $this->sourceServiceItemFromRateCard[] = $sourceServiceItemFromRateCard;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSourceServiceItemFromRateCard(): array
    {
        return $this->sourceServiceItemFromRateCard;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return JobSearchRowBasic
     */
    public function setStartDate(SearchColumnDateField $startDate): JobSearchRowBasic
    {
        $this->startDate[] = $startDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate(): array
    {
        return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDateBaseline
     * @return JobSearchRowBasic
     */
    public function setStartDateBaseline(SearchColumnDateField $startDateBaseline): JobSearchRowBasic
    {
        $this->startDateBaseline[] = $startDateBaseline;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateBaseline(): array
    {
        return $this->startDateBaseline;
    }

    /**
     * @param SearchColumnStringField[] $state
     * @return JobSearchRowBasic
     */
    public function setState(SearchColumnStringField $state): JobSearchRowBasic
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
     * @param SearchColumnSelectField[] $subscription
     * @return JobSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): JobSearchRowBasic
    {
        $this->subscription[] = $subscription;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubscription(): array
    {
        return $this->subscription;
    }

    /**
     * @param SearchColumnDateField[] $subscriptionDate
     * @return JobSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): JobSearchRowBasic
    {
        $this->subscriptionDate[] = $subscriptionDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getSubscriptionDate(): array
    {
        return $this->subscriptionDate;
    }

    /**
     * @param SearchColumnBooleanField[] $subscriptionStatus
     * @return JobSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): JobSearchRowBasic
    {
        $this->subscriptionStatus[] = $subscriptionStatus;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getSubscriptionStatus(): array
    {
        return $this->subscriptionStatus;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return JobSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): JobSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $timeApproval
     * @return JobSearchRowBasic
     */
    public function setTimeApproval(SearchColumnSelectField $timeApproval): JobSearchRowBasic
    {
        $this->timeApproval[] = $timeApproval;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeApproval(): array
    {
        return $this->timeApproval;
    }

    /**
     * @param SearchColumnDoubleField[] $timeRemaining
     * @return JobSearchRowBasic
     */
    public function setTimeRemaining(SearchColumnDoubleField $timeRemaining): JobSearchRowBasic
    {
        $this->timeRemaining[] = $timeRemaining;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTimeRemaining(): array
    {
        return $this->timeRemaining;
    }

    /**
     * @param SearchColumnBooleanField[] $usePercentCompleteOverride
     * @return JobSearchRowBasic
     */
    public function setUsePercentCompleteOverride(SearchColumnBooleanField $usePercentCompleteOverride): JobSearchRowBasic
    {
        $this->usePercentCompleteOverride[] = $usePercentCompleteOverride;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsePercentCompleteOverride(): array
    {
        return $this->usePercentCompleteOverride;
    }

    /**
     * @param SearchColumnStringField[] $zipCode
     * @return JobSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): JobSearchRowBasic
    {
        $this->zipCode[] = $zipCode;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getZipCode(): array
    {
        return $this->zipCode;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return JobSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): JobSearchRowBasic
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
