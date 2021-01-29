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

class Job extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $entityId;

    /**
     * @var string
     */
    protected string $altName;

    /**
     * @var string
     */
    protected string $companyName;

    /**
     * @var string
     */
    protected string $phoneticName;

    /**
     * @var RecordRef
     */
    protected RecordRef $entityStatus;

    /**
     * @var string
     */
    protected string $defaultAddress;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var JobPercentCompleteOverrideList
     */
    protected JobPercentCompleteOverrideList $percentCompleteOverrideList;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var RecordRef
     */
    protected RecordRef $workplace;

    /**
     * @var RecordRef
     */
    protected RecordRef $language;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var string
     */
    protected string $accountNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var float
     */
    protected float $fxRate;

    /**
     * @var string
     */
    protected string $startDate;

    /**
     * @var string
     */
    protected string $endDate;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var string
     */
    protected string $altPhone;

    /**
     * @var string
     */
    protected string $calculatedEndDate;

    /**
     * @var string
     */
    protected string $calculatedEndDateBaseline;

    /**
     * @var string
     */
    protected string $startDateBaseline;

    /**
     * @var string
     */
    protected string $projectedEndDate;

    /**
     * @var string
     */
    protected string $projectedEndDateBaseline;

    /**
     * @var string
     */
    protected string $lastBaselineDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $jobType;

    /**
     * @var float
     */
    protected float $percentComplete;

    /**
     * @var float
     */
    protected float $estimatedCost;

    /**
     * @var float
     */
    protected float $estimatedRevenue;

    /**
     * @var Duration
     */
    protected Duration $estimatedTime;

    /**
     * @var Duration
     */
    protected Duration $estimatedTimeOverride;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var EmailPreference
     */
    protected EmailPreference $emailPreference;

    /**
     * @var float
     */
    protected float $openingBalance;

    /**
     * @var string
     */
    protected string $openingBalanceDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $openingBalanceAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var JobBillingType
     */
    protected JobBillingType $jobBillingType;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingSchedule;

    /**
     * @var RecordRef
     */
    protected RecordRef $jobItem;

    /**
     * @var float
     */
    protected float $percentTimeComplete;

    /**
     * @var Duration
     */
    protected Duration $actualTime;

    /**
     * @var bool
     */
    protected bool $allowTime;

    /**
     * @var Duration
     */
    protected Duration $timeRemaining;

    /**
     * @var bool
     */
    protected bool $limitTimeToAssignees;

    /**
     * @var float
     */
    protected float $estimatedLaborCost;

    /**
     * @var float
     */
    protected float $estimatedLaborCostBaseline;

    /**
     * @var RecordRef
     */
    protected RecordRef $estimateRevRecTemplate;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecForecastRule;

    /**
     * @var bool
     */
    protected bool $usePercentCompleteOverride;

    /**
     * @var float
     */
    protected float $estimatedLaborRevenue;

    /**
     * @var float
     */
    protected float $estimatedGrossProfit;

    /**
     * @var float
     */
    protected float $estimatedGrossProfitPercent;

    /**
     * @var RecordRef
     */
    protected RecordRef $projectExpenseType;

    /**
     * @var bool
     */
    protected bool $applyProjectExpenseTypeToAll;

    /**
     * @var bool
     */
    protected bool $allowAllResourcesForTasks;

    /**
     * @var float
     */
    protected float $jobPrice;

    /**
     * @var bool
     */
    protected bool $isUtilizedTime;

    /**
     * @var bool
     */
    protected bool $isProductiveTime;

    /**
     * @var bool
     */
    protected bool $isExemptTime;

    /**
     * @var bool
     */
    protected bool $materializeTime;

    /**
     * @var bool
     */
    protected bool $allowExpenses;

    /**
     * @var bool
     */
    protected bool $allocatePayrollExpenses;

    /**
     * @var bool
     */
    protected bool $includeCrmTasksInTotals;

    /**
     * @var GlobalSubscriptionStatus
     */
    protected GlobalSubscriptionStatus $globalSubscriptionStatus;

    /**
     * @var JobResourcesList
     */
    protected JobResourcesList $jobResourcesList;

    /**
     * @var JobPlStatementList
     */
    protected JobPlStatementList $plStatementList;

    /**
     * @var JobAddressbookList
     */
    protected JobAddressbookList $addressbookList;

    /**
     * @var JobMilestonesList
     */
    protected JobMilestonesList $milestonesList;

    /**
     * @var JobCreditCardsList
     */
    protected JobCreditCardsList $creditCardsList;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeApproval;

    /**
     * @var Duration
     */
    protected Duration $plannedWork;

    /**
     * @var Duration
     */
    protected Duration $plannedWorkBaseline;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingRateCard;

    /**
     * @var bool
     */
    protected bool $createChargeRule;

    /**
     * @var bool
     */
    protected bool $sourceServiceItemFromRateCard;

    /**
     * @var RecordRef
     */
    protected RecordRef $projectManager;

    /**
     * @var JobSchedulingMethod
     */
    protected JobSchedulingMethod $schedulingMethod;

    /**
     * @var string
     */
    protected string $scheduledEndDate;

    /**
     * @var string
     */
    protected string $calculatedStartDate;

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
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "companyName" => "string",
        "phoneticName" => "string",
        "entityStatus" => "RecordRef",
        "defaultAddress" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "percentCompleteOverrideList" => "JobPercentCompleteOverrideList",
        "lastModifiedDate" => "dateTime",
        "billPay" => "boolean",
        "dateCreated" => "dateTime",
        "category" => "RecordRef",
        "workplace" => "RecordRef",
        "language" => "RecordRef",
        "comments" => "string",
        "accountNumber" => "string",
        "currency" => "RecordRef",
        "fxRate" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "phone" => "string",
        "altPhone" => "string",
        "calculatedEndDate" => "dateTime",
        "calculatedEndDateBaseline" => "dateTime",
        "startDateBaseline" => "dateTime",
        "projectedEndDate" => "dateTime",
        "projectedEndDateBaseline" => "dateTime",
        "lastBaselineDate" => "dateTime",
        "jobType" => "RecordRef",
        "percentComplete" => "float",
        "estimatedCost" => "float",
        "estimatedRevenue" => "float",
        "estimatedTime" => "Duration",
        "estimatedTimeOverride" => "Duration",
        "fax" => "string",
        "email" => "string",
        "emailPreference" => "EmailPreference",
        "openingBalance" => "float",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "subsidiary" => "RecordRef",
        "jobBillingType" => "JobBillingType",
        "billingSchedule" => "RecordRef",
        "jobItem" => "RecordRef",
        "percentTimeComplete" => "float",
        "actualTime" => "Duration",
        "allowTime" => "boolean",
        "timeRemaining" => "Duration",
        "limitTimeToAssignees" => "boolean",
        "estimatedLaborCost" => "float",
        "estimatedLaborCostBaseline" => "float",
        "estimateRevRecTemplate" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "usePercentCompleteOverride" => "boolean",
        "estimatedLaborRevenue" => "float",
        "estimatedGrossProfit" => "float",
        "estimatedGrossProfitPercent" => "float",
        "projectExpenseType" => "RecordRef",
        "applyProjectExpenseTypeToAll" => "boolean",
        "allowAllResourcesForTasks" => "boolean",
        "jobPrice" => "float",
        "isUtilizedTime" => "boolean",
        "isProductiveTime" => "boolean",
        "isExemptTime" => "boolean",
        "materializeTime" => "boolean",
        "allowExpenses" => "boolean",
        "allocatePayrollExpenses" => "boolean",
        "includeCrmTasksInTotals" => "boolean",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "jobResourcesList" => "JobResourcesList",
        "plStatementList" => "JobPlStatementList",
        "addressbookList" => "JobAddressbookList",
        "milestonesList" => "JobMilestonesList",
        "creditCardsList" => "JobCreditCardsList",
        "timeApproval" => "RecordRef",
        "plannedWork" => "Duration",
        "plannedWorkBaseline" => "Duration",
        "billingRateCard" => "RecordRef",
        "createChargeRule" => "boolean",
        "sourceServiceItemFromRateCard" => "boolean",
        "projectManager" => "RecordRef",
        "schedulingMethod" => "JobSchedulingMethod",
        "scheduledEndDate" => "dateTime",
        "calculatedStartDate" => "dateTime",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Job
     */
    public function setCustomForm(RecordRef $customForm): Job
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
     * @param string $entityId
     * @return Job
     */
    public function setEntityId(string $entityId): Job
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->entityId;
    }

    /**
     * @param string $altName
     * @return Job
     */
    public function setAltName(string $altName): Job
    {
        $this->altName = $altName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltName(): string
    {
        return $this->altName;
    }

    /**
     * @param string $companyName
     * @return Job
     */
    public function setCompanyName(string $companyName): Job
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @param string $phoneticName
     * @return Job
     */
    public function setPhoneticName(string $phoneticName): Job
    {
        $this->phoneticName = $phoneticName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneticName(): string
    {
        return $this->phoneticName;
    }

    /**
     * @param RecordRef $entityStatus
     * @return Job
     */
    public function setEntityStatus(RecordRef $entityStatus): Job
    {
        $this->entityStatus = $entityStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEntityStatus(): RecordRef
    {
        return $this->entityStatus;
    }

    /**
     * @param string $defaultAddress
     * @return Job
     */
    public function setDefaultAddress(string $defaultAddress): Job
    {
        $this->defaultAddress = $defaultAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultAddress(): string
    {
        return $this->defaultAddress;
    }

    /**
     * @param RecordRef $parent
     * @return Job
     */
    public function setParent(RecordRef $parent): Job
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
     * @return Job
     */
    public function setIsInactive(bool $isInactive): Job
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
     * @param JobPercentCompleteOverrideList $percentCompleteOverrideList
     * @return Job
     */
    public function setPercentCompleteOverrideList(JobPercentCompleteOverrideList $percentCompleteOverrideList): Job
    {
        $this->percentCompleteOverrideList = $percentCompleteOverrideList;
        return $this;
    }

    /**
     * @return JobPercentCompleteOverrideList
     */
    public function getPercentCompleteOverrideList(): JobPercentCompleteOverrideList
    {
        return $this->percentCompleteOverrideList;
    }

    /**
     * @param string $lastModifiedDate
     * @return Job
     */
    public function setLastModifiedDate(string $lastModifiedDate): Job
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param bool $billPay
     * @return Job
     */
    public function setBillPay(bool $billPay): Job
    {
        $this->billPay = $billPay;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBillPay(): bool
    {
        return $this->billPay;
    }

    /**
     * @param string $dateCreated
     * @return Job
     */
    public function setDateCreated(string $dateCreated): Job
    {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateCreated(): string
    {
        return $this->dateCreated;
    }

    /**
     * @param RecordRef $category
     * @return Job
     */
    public function setCategory(RecordRef $category): Job
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param RecordRef $workplace
     * @return Job
     */
    public function setWorkplace(RecordRef $workplace): Job
    {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkplace(): RecordRef
    {
        return $this->workplace;
    }

    /**
     * @param RecordRef $language
     * @return Job
     */
    public function setLanguage(RecordRef $language): Job
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLanguage(): RecordRef
    {
        return $this->language;
    }

    /**
     * @param string $comments
     * @return Job
     */
    public function setComments(string $comments): Job
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * @return string
     */
    public function getComments(): string
    {
        return $this->comments;
    }

    /**
     * @param string $accountNumber
     * @return Job
     */
    public function setAccountNumber(string $accountNumber): Job
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param RecordRef $currency
     * @return Job
     */
    public function setCurrency(RecordRef $currency): Job
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
     * @param float $fxRate
     * @return Job
     */
    public function setFxRate(float $fxRate): Job
    {
        $this->fxRate = $fxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFxRate(): float
    {
        return $this->fxRate;
    }

    /**
     * @param string $startDate
     * @return Job
     */
    public function setStartDate(string $startDate): Job
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
     * @return Job
     */
    public function setEndDate(string $endDate): Job
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
     * @param string $phone
     * @return Job
     */
    public function setPhone(string $phone): Job
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $altPhone
     * @return Job
     */
    public function setAltPhone(string $altPhone): Job
    {
        $this->altPhone = $altPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltPhone(): string
    {
        return $this->altPhone;
    }

    /**
     * @param string $calculatedEndDate
     * @return Job
     */
    public function setCalculatedEndDate(string $calculatedEndDate): Job
    {
        $this->calculatedEndDate = $calculatedEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedEndDate(): string
    {
        return $this->calculatedEndDate;
    }

    /**
     * @param string $calculatedEndDateBaseline
     * @return Job
     */
    public function setCalculatedEndDateBaseline(string $calculatedEndDateBaseline): Job
    {
        $this->calculatedEndDateBaseline = $calculatedEndDateBaseline;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedEndDateBaseline(): string
    {
        return $this->calculatedEndDateBaseline;
    }

    /**
     * @param string $startDateBaseline
     * @return Job
     */
    public function setStartDateBaseline(string $startDateBaseline): Job
    {
        $this->startDateBaseline = $startDateBaseline;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateBaseline(): string
    {
        return $this->startDateBaseline;
    }

    /**
     * @param string $projectedEndDate
     * @return Job
     */
    public function setProjectedEndDate(string $projectedEndDate): Job
    {
        $this->projectedEndDate = $projectedEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectedEndDate(): string
    {
        return $this->projectedEndDate;
    }

    /**
     * @param string $projectedEndDateBaseline
     * @return Job
     */
    public function setProjectedEndDateBaseline(string $projectedEndDateBaseline): Job
    {
        $this->projectedEndDateBaseline = $projectedEndDateBaseline;
        return $this;
    }

    /**
     * @return string
     */
    public function getProjectedEndDateBaseline(): string
    {
        return $this->projectedEndDateBaseline;
    }

    /**
     * @param string $lastBaselineDate
     * @return Job
     */
    public function setLastBaselineDate(string $lastBaselineDate): Job
    {
        $this->lastBaselineDate = $lastBaselineDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastBaselineDate(): string
    {
        return $this->lastBaselineDate;
    }

    /**
     * @param RecordRef $jobType
     * @return Job
     */
    public function setJobType(RecordRef $jobType): Job
    {
        $this->jobType = $jobType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJobType(): RecordRef
    {
        return $this->jobType;
    }

    /**
     * @param float $percentComplete
     * @return Job
     */
    public function setPercentComplete(float $percentComplete): Job
    {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentComplete(): float
    {
        return $this->percentComplete;
    }

    /**
     * @param float $estimatedCost
     * @return Job
     */
    public function setEstimatedCost(float $estimatedCost): Job
    {
        $this->estimatedCost = $estimatedCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedCost(): float
    {
        return $this->estimatedCost;
    }

    /**
     * @param float $estimatedRevenue
     * @return Job
     */
    public function setEstimatedRevenue(float $estimatedRevenue): Job
    {
        $this->estimatedRevenue = $estimatedRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedRevenue(): float
    {
        return $this->estimatedRevenue;
    }

    /**
     * @param Duration $estimatedTime
     * @return Job
     */
    public function setEstimatedTime(Duration $estimatedTime): Job
    {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTime(): Duration
    {
        return $this->estimatedTime;
    }

    /**
     * @param Duration $estimatedTimeOverride
     * @return Job
     */
    public function setEstimatedTimeOverride(Duration $estimatedTimeOverride): Job
    {
        $this->estimatedTimeOverride = $estimatedTimeOverride;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getEstimatedTimeOverride(): Duration
    {
        return $this->estimatedTimeOverride;
    }

    /**
     * @param string $fax
     * @return Job
     */
    public function setFax(string $fax): Job
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
     * @param string $email
     * @return Job
     */
    public function setEmail(string $email): Job
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
     * @param EmailPreference $emailPreference
     * @return Job
     */
    public function setEmailPreference(EmailPreference $emailPreference): Job
    {
        $this->emailPreference = $emailPreference;
        return $this;
    }

    /**
     * @return EmailPreference
     */
    public function getEmailPreference(): EmailPreference
    {
        return $this->emailPreference;
    }

    /**
     * @param float $openingBalance
     * @return Job
     */
    public function setOpeningBalance(float $openingBalance): Job
    {
        $this->openingBalance = $openingBalance;
        return $this;
    }

    /**
     * @return float
     */
    public function getOpeningBalance(): float
    {
        return $this->openingBalance;
    }

    /**
     * @param string $openingBalanceDate
     * @return Job
     */
    public function setOpeningBalanceDate(string $openingBalanceDate): Job
    {
        $this->openingBalanceDate = $openingBalanceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpeningBalanceDate(): string
    {
        return $this->openingBalanceDate;
    }

    /**
     * @param RecordRef $openingBalanceAccount
     * @return Job
     */
    public function setOpeningBalanceAccount(RecordRef $openingBalanceAccount): Job
    {
        $this->openingBalanceAccount = $openingBalanceAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOpeningBalanceAccount(): RecordRef
    {
        return $this->openingBalanceAccount;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Job
     */
    public function setSubsidiary(RecordRef $subsidiary): Job
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
     * @param JobBillingType $jobBillingType
     * @return Job
     */
    public function setJobBillingType(JobBillingType $jobBillingType): Job
    {
        $this->jobBillingType = $jobBillingType;
        return $this;
    }

    /**
     * @return JobBillingType
     */
    public function getJobBillingType(): JobBillingType
    {
        return $this->jobBillingType;
    }

    /**
     * @param RecordRef $billingSchedule
     * @return Job
     */
    public function setBillingSchedule(RecordRef $billingSchedule): Job
    {
        $this->billingSchedule = $billingSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingSchedule(): RecordRef
    {
        return $this->billingSchedule;
    }

    /**
     * @param RecordRef $jobItem
     * @return Job
     */
    public function setJobItem(RecordRef $jobItem): Job
    {
        $this->jobItem = $jobItem;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJobItem(): RecordRef
    {
        return $this->jobItem;
    }

    /**
     * @param float $percentTimeComplete
     * @return Job
     */
    public function setPercentTimeComplete(float $percentTimeComplete): Job
    {
        $this->percentTimeComplete = $percentTimeComplete;
        return $this;
    }

    /**
     * @return float
     */
    public function getPercentTimeComplete(): float
    {
        return $this->percentTimeComplete;
    }

    /**
     * @param Duration $actualTime
     * @return Job
     */
    public function setActualTime(Duration $actualTime): Job
    {
        $this->actualTime = $actualTime;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getActualTime(): Duration
    {
        return $this->actualTime;
    }

    /**
     * @param bool $allowTime
     * @return Job
     */
    public function setAllowTime(bool $allowTime): Job
    {
        $this->allowTime = $allowTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowTime(): bool
    {
        return $this->allowTime;
    }

    /**
     * @param Duration $timeRemaining
     * @return Job
     */
    public function setTimeRemaining(Duration $timeRemaining): Job
    {
        $this->timeRemaining = $timeRemaining;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getTimeRemaining(): Duration
    {
        return $this->timeRemaining;
    }

    /**
     * @param bool $limitTimeToAssignees
     * @return Job
     */
    public function setLimitTimeToAssignees(bool $limitTimeToAssignees): Job
    {
        $this->limitTimeToAssignees = $limitTimeToAssignees;
        return $this;
    }

    /**
     * @return bool
     */
    public function getLimitTimeToAssignees(): bool
    {
        return $this->limitTimeToAssignees;
    }

    /**
     * @param float $estimatedLaborCost
     * @return Job
     */
    public function setEstimatedLaborCost(float $estimatedLaborCost): Job
    {
        $this->estimatedLaborCost = $estimatedLaborCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborCost(): float
    {
        return $this->estimatedLaborCost;
    }

    /**
     * @param float $estimatedLaborCostBaseline
     * @return Job
     */
    public function setEstimatedLaborCostBaseline(float $estimatedLaborCostBaseline): Job
    {
        $this->estimatedLaborCostBaseline = $estimatedLaborCostBaseline;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborCostBaseline(): float
    {
        return $this->estimatedLaborCostBaseline;
    }

    /**
     * @param RecordRef $estimateRevRecTemplate
     * @return Job
     */
    public function setEstimateRevRecTemplate(RecordRef $estimateRevRecTemplate): Job
    {
        $this->estimateRevRecTemplate = $estimateRevRecTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEstimateRevRecTemplate(): RecordRef
    {
        return $this->estimateRevRecTemplate;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return Job
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): Job
    {
        $this->revRecForecastRule = $revRecForecastRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule(): RecordRef
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param bool $usePercentCompleteOverride
     * @return Job
     */
    public function setUsePercentCompleteOverride(bool $usePercentCompleteOverride): Job
    {
        $this->usePercentCompleteOverride = $usePercentCompleteOverride;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsePercentCompleteOverride(): bool
    {
        return $this->usePercentCompleteOverride;
    }

    /**
     * @param float $estimatedLaborRevenue
     * @return Job
     */
    public function setEstimatedLaborRevenue(float $estimatedLaborRevenue): Job
    {
        $this->estimatedLaborRevenue = $estimatedLaborRevenue;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedLaborRevenue(): float
    {
        return $this->estimatedLaborRevenue;
    }

    /**
     * @param float $estimatedGrossProfit
     * @return Job
     */
    public function setEstimatedGrossProfit(float $estimatedGrossProfit): Job
    {
        $this->estimatedGrossProfit = $estimatedGrossProfit;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedGrossProfit(): float
    {
        return $this->estimatedGrossProfit;
    }

    /**
     * @param float $estimatedGrossProfitPercent
     * @return Job
     */
    public function setEstimatedGrossProfitPercent(float $estimatedGrossProfitPercent): Job
    {
        $this->estimatedGrossProfitPercent = $estimatedGrossProfitPercent;
        return $this;
    }

    /**
     * @return float
     */
    public function getEstimatedGrossProfitPercent(): float
    {
        return $this->estimatedGrossProfitPercent;
    }

    /**
     * @param RecordRef $projectExpenseType
     * @return Job
     */
    public function setProjectExpenseType(RecordRef $projectExpenseType): Job
    {
        $this->projectExpenseType = $projectExpenseType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectExpenseType(): RecordRef
    {
        return $this->projectExpenseType;
    }

    /**
     * @param bool $applyProjectExpenseTypeToAll
     * @return Job
     */
    public function setApplyProjectExpenseTypeToAll(bool $applyProjectExpenseTypeToAll): Job
    {
        $this->applyProjectExpenseTypeToAll = $applyProjectExpenseTypeToAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getApplyProjectExpenseTypeToAll(): bool
    {
        return $this->applyProjectExpenseTypeToAll;
    }

    /**
     * @param bool $allowAllResourcesForTasks
     * @return Job
     */
    public function setAllowAllResourcesForTasks(bool $allowAllResourcesForTasks): Job
    {
        $this->allowAllResourcesForTasks = $allowAllResourcesForTasks;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowAllResourcesForTasks(): bool
    {
        return $this->allowAllResourcesForTasks;
    }

    /**
     * @param float $jobPrice
     * @return Job
     */
    public function setJobPrice(float $jobPrice): Job
    {
        $this->jobPrice = $jobPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getJobPrice(): float
    {
        return $this->jobPrice;
    }

    /**
     * @param bool $isUtilizedTime
     * @return Job
     */
    public function setIsUtilizedTime(bool $isUtilizedTime): Job
    {
        $this->isUtilizedTime = $isUtilizedTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUtilizedTime(): bool
    {
        return $this->isUtilizedTime;
    }

    /**
     * @param bool $isProductiveTime
     * @return Job
     */
    public function setIsProductiveTime(bool $isProductiveTime): Job
    {
        $this->isProductiveTime = $isProductiveTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsProductiveTime(): bool
    {
        return $this->isProductiveTime;
    }

    /**
     * @param bool $isExemptTime
     * @return Job
     */
    public function setIsExemptTime(bool $isExemptTime): Job
    {
        $this->isExemptTime = $isExemptTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsExemptTime(): bool
    {
        return $this->isExemptTime;
    }

    /**
     * @param bool $materializeTime
     * @return Job
     */
    public function setMaterializeTime(bool $materializeTime): Job
    {
        $this->materializeTime = $materializeTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMaterializeTime(): bool
    {
        return $this->materializeTime;
    }

    /**
     * @param bool $allowExpenses
     * @return Job
     */
    public function setAllowExpenses(bool $allowExpenses): Job
    {
        $this->allowExpenses = $allowExpenses;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllowExpenses(): bool
    {
        return $this->allowExpenses;
    }

    /**
     * @param bool $allocatePayrollExpenses
     * @return Job
     */
    public function setAllocatePayrollExpenses(bool $allocatePayrollExpenses): Job
    {
        $this->allocatePayrollExpenses = $allocatePayrollExpenses;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAllocatePayrollExpenses(): bool
    {
        return $this->allocatePayrollExpenses;
    }

    /**
     * @param bool $includeCrmTasksInTotals
     * @return Job
     */
    public function setIncludeCrmTasksInTotals(bool $includeCrmTasksInTotals): Job
    {
        $this->includeCrmTasksInTotals = $includeCrmTasksInTotals;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeCrmTasksInTotals(): bool
    {
        return $this->includeCrmTasksInTotals;
    }

    /**
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Job
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Job
    {
        $this->globalSubscriptionStatus = $globalSubscriptionStatus;
        return $this;
    }

    /**
     * @return GlobalSubscriptionStatus
     */
    public function getGlobalSubscriptionStatus(): GlobalSubscriptionStatus
    {
        return $this->globalSubscriptionStatus;
    }

    /**
     * @param JobResourcesList $jobResourcesList
     * @return Job
     */
    public function setJobResourcesList(JobResourcesList $jobResourcesList): Job
    {
        $this->jobResourcesList = $jobResourcesList;
        return $this;
    }

    /**
     * @return JobResourcesList
     */
    public function getJobResourcesList(): JobResourcesList
    {
        return $this->jobResourcesList;
    }

    /**
     * @param JobPlStatementList $plStatementList
     * @return Job
     */
    public function setPlStatementList(JobPlStatementList $plStatementList): Job
    {
        $this->plStatementList = $plStatementList;
        return $this;
    }

    /**
     * @return JobPlStatementList
     */
    public function getPlStatementList(): JobPlStatementList
    {
        return $this->plStatementList;
    }

    /**
     * @param JobAddressbookList $addressbookList
     * @return Job
     */
    public function setAddressbookList(JobAddressbookList $addressbookList): Job
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return JobAddressbookList
     */
    public function getAddressbookList(): JobAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param JobMilestonesList $milestonesList
     * @return Job
     */
    public function setMilestonesList(JobMilestonesList $milestonesList): Job
    {
        $this->milestonesList = $milestonesList;
        return $this;
    }

    /**
     * @return JobMilestonesList
     */
    public function getMilestonesList(): JobMilestonesList
    {
        return $this->milestonesList;
    }

    /**
     * @param JobCreditCardsList $creditCardsList
     * @return Job
     */
    public function setCreditCardsList(JobCreditCardsList $creditCardsList): Job
    {
        $this->creditCardsList = $creditCardsList;
        return $this;
    }

    /**
     * @return JobCreditCardsList
     */
    public function getCreditCardsList(): JobCreditCardsList
    {
        return $this->creditCardsList;
    }

    /**
     * @param RecordRef $timeApproval
     * @return Job
     */
    public function setTimeApproval(RecordRef $timeApproval): Job
    {
        $this->timeApproval = $timeApproval;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeApproval(): RecordRef
    {
        return $this->timeApproval;
    }

    /**
     * @param Duration $plannedWork
     * @return Job
     */
    public function setPlannedWork(Duration $plannedWork): Job
    {
        $this->plannedWork = $plannedWork;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getPlannedWork(): Duration
    {
        return $this->plannedWork;
    }

    /**
     * @param Duration $plannedWorkBaseline
     * @return Job
     */
    public function setPlannedWorkBaseline(Duration $plannedWorkBaseline): Job
    {
        $this->plannedWorkBaseline = $plannedWorkBaseline;
        return $this;
    }

    /**
     * @return Duration
     */
    public function getPlannedWorkBaseline(): Duration
    {
        return $this->plannedWorkBaseline;
    }

    /**
     * @param RecordRef $billingRateCard
     * @return Job
     */
    public function setBillingRateCard(RecordRef $billingRateCard): Job
    {
        $this->billingRateCard = $billingRateCard;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingRateCard(): RecordRef
    {
        return $this->billingRateCard;
    }

    /**
     * @param bool $createChargeRule
     * @return Job
     */
    public function setCreateChargeRule(bool $createChargeRule): Job
    {
        $this->createChargeRule = $createChargeRule;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCreateChargeRule(): bool
    {
        return $this->createChargeRule;
    }

    /**
     * @param bool $sourceServiceItemFromRateCard
     * @return Job
     */
    public function setSourceServiceItemFromRateCard(bool $sourceServiceItemFromRateCard): Job
    {
        $this->sourceServiceItemFromRateCard = $sourceServiceItemFromRateCard;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSourceServiceItemFromRateCard(): bool
    {
        return $this->sourceServiceItemFromRateCard;
    }

    /**
     * @param RecordRef $projectManager
     * @return Job
     */
    public function setProjectManager(RecordRef $projectManager): Job
    {
        $this->projectManager = $projectManager;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProjectManager(): RecordRef
    {
        return $this->projectManager;
    }

    /**
     * @param JobSchedulingMethod $schedulingMethod
     * @return Job
     */
    public function setSchedulingMethod(JobSchedulingMethod $schedulingMethod): Job
    {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * @return JobSchedulingMethod
     */
    public function getSchedulingMethod(): JobSchedulingMethod
    {
        return $this->schedulingMethod;
    }

    /**
     * @param string $scheduledEndDate
     * @return Job
     */
    public function setScheduledEndDate(string $scheduledEndDate): Job
    {
        $this->scheduledEndDate = $scheduledEndDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheduledEndDate(): string
    {
        return $this->scheduledEndDate;
    }

    /**
     * @param string $calculatedStartDate
     * @return Job
     */
    public function setCalculatedStartDate(string $calculatedStartDate): Job
    {
        $this->calculatedStartDate = $calculatedStartDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalculatedStartDate(): string
    {
        return $this->calculatedStartDate;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Job
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Job
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
     * @return Job
     */
    public function setInternalId(string $internalId): Job
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
     * @return Job
     */
    public function setExternalId(string $externalId): Job
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
