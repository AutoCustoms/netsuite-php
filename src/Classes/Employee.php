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

class Employee extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $template;

    /**
     * @var string
     */
    protected string $entityId;

    /**
     * @var string
     */
    protected string $salutation;

    /**
     * @var string
     */
    protected string $firstName;

    /**
     * @var string
     */
    protected string $middleName;

    /**
     * @var string
     */
    protected string $lastName;

    /**
     * @var string
     */
    protected string $altName;

    /**
     * @var string
     */
    protected string $phone;

    /**
     * @var string
     */
    protected string $fax;

    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string
     */
    protected string $defaultAddress;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $phoneticName;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $dateCreated;

    /**
     * @var string
     */
    protected string $initials;

    /**
     * @var string
     */
    protected string $officePhone;

    /**
     * @var string
     */
    protected string $homePhone;

    /**
     * @var string
     */
    protected string $mobilePhone;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

    /**
     * @var RecordRef
     */
    protected RecordRef $billingClass;

    /**
     * @var string
     */
    protected string $accountNumber;

    /**
     * @var EmployeeCompensationCurrency
     */
    protected EmployeeCompensationCurrency $compensationCurrency;

    /**
     * @var EmployeeBaseWageType
     */
    protected EmployeeBaseWageType $baseWageType;

    /**
     * @var float
     */
    protected float $baseWage;

    /**
     * @var string
     */
    protected string $comments;

    /**
     * @var GlobalSubscriptionStatus
     */
    protected GlobalSubscriptionStatus $globalSubscriptionStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $image;

    /**
     * @var EmployeePayFrequency
     */
    protected EmployeePayFrequency $payFrequency;

    /**
     * @var string
     */
    protected string $lastPaidDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $currency;

    /**
     * @var EmployeeUseTimeData
     */
    protected EmployeeUseTimeData $useTimeData;

    /**
     * @var bool
     */
    protected bool $usePerquest;

    /**
     * @var RecordRef
     */
    protected RecordRef $workplace;

    /**
     * @var string
     */
    protected string $adpId;

    /**
     * @var bool
     */
    protected bool $directDeposit;

    /**
     * @var float
     */
    protected float $expenseLimit;

    /**
     * @var float
     */
    protected float $purchaseOrderLimit;

    /**
     * @var float
     */
    protected float $purchaseOrderApprovalLimit;

    /**
     * @var string
     */
    protected string $socialSecurityNumber;

    /**
     * @var RecordRef
     */
    protected RecordRef $supervisor;

    /**
     * @var RecordRef
     */
    protected RecordRef $approver;

    /**
     * @var float
     */
    protected float $approvalLimit;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeApprover;

    /**
     * @var RecordRef
     */
    protected RecordRef $employeeType;

    /**
     * @var bool
     */
    protected bool $isSalesRep;

    /**
     * @var RecordRef
     */
    protected RecordRef $salesRole;

    /**
     * @var bool
     */
    protected bool $isSupportRep;

    /**
     * @var bool
     */
    protected bool $isJobResource;

    /**
     * @var float
     */
    protected float $laborCost;

    /**
     * @var string
     */
    protected string $birthDate;

    /**
     * @var string
     */
    protected string $hireDate;

    /**
     * @var string
     */
    protected string $releaseDate;

    /**
     * @var string
     */
    protected string $terminationDetails;

    /**
     * @var RecordRef
     */
    protected RecordRef $terminationReason;

    /**
     * @var EmployeeTerminationRegretted
     */
    protected EmployeeTerminationRegretted $terminationRegretted;

    /**
     * @var EmployeeTerminationCategory
     */
    protected EmployeeTerminationCategory $terminationCategory;

    /**
     * @var RecordRef
     */
    protected RecordRef $timeOffPlan;

    /**
     * @var string
     */
    protected string $lastReviewDate;

    /**
     * @var string
     */
    protected string $nextReviewDate;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var RecordRef
     */
    protected RecordRef $employeeStatus;

    /**
     * @var string
     */
    protected string $jobDescription;

    /**
     * @var EmployeeWorkAssignment
     */
    protected EmployeeWorkAssignment $workAssignment;

    /**
     * @var RecordRef
     */
    protected RecordRef $job;

    /**
     * @var RecordRef
     */
    protected RecordRef $maritalStatus;

    /**
     * @var RecordRef
     */
    protected RecordRef $ethnicity;

    /**
     * @var Gender
     */
    protected Gender $gender;

    /**
     * @var RecordRef
     */
    protected RecordRef $purchaseOrderApprover;

    /**
     * @var RecordRef
     */
    protected RecordRef $workCalendar;

    /**
     * @var bool
     */
    protected bool $giveAccess;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultExpenseReportCurrency;

    /**
     * @var bool
     */
    protected bool $concurrentWebServicesUser;

    /**
     * @var bool
     */
    protected bool $sendEmail;

    /**
     * @var bool
     */
    protected bool $hasOfflineAccess;

    /**
     * @var string
     */
    protected string $password;

    protected $password2;
    /**
     * @var bool
     */
    protected bool $requirePwdChange;

    /**
     * @var bool
     */
    protected bool $inheritIPRules;

    /**
     * @var string
     */
    protected string $IPAddressRule;

    /**
     * @var string
     */
    protected string $startDateTimeOffCalc;

    /**
     * @var EmployeeCommissionPaymentPreference
     */
    protected EmployeeCommissionPaymentPreference $commissionPaymentPreference;

    /**
     * @var bool
     */
    protected bool $billPay;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultAcctCorpCardExp;

    /**
     * @var bool
     */
    protected bool $eligibleForCommission;

    /**
     * @var EmployeeSubscriptionsList
     */
    protected EmployeeSubscriptionsList $subscriptionsList;

    /**
     * @var EmployeeRatesList
     */
    protected EmployeeRatesList $ratesList;

    /**
     * @var EmployeeAddressbookList
     */
    protected EmployeeAddressbookList $addressbookList;

    /**
     * @var EmployeeRolesList
     */
    protected EmployeeRolesList $rolesList;

    /**
     * @var EmployeeHrEducationList
     */
    protected EmployeeHrEducationList $hrEducationList;

    /**
     * @var EmployeeAccruedTimeList
     */
    protected EmployeeAccruedTimeList $accruedTimeList;

    /**
     * @var EmployeeDirectDepositList
     */
    protected EmployeeDirectDepositList $directDepositList;

    /**
     * @var EmployeeCurrencyList
     */
    protected EmployeeCurrencyList $currencyList;

    /**
     * @var EmployeeCompanyContributionList
     */
    protected EmployeeCompanyContributionList $companyContributionList;

    /**
     * @var EmployeeEarningList
     */
    protected EmployeeEarningList $earningList;

    /**
     * @var EmployeeEmergencyContactList
     */
    protected EmployeeEmergencyContactList $emergencyContactList;

    /**
     * @var EmployeeHcmPositionList
     */
    protected EmployeeHcmPositionList $hcmPositionList;

    /**
     * @var EmployeeDeductionList
     */
    protected EmployeeDeductionList $deductionList;

    /**
     * @var bool
     */
    protected bool $isJobManager;

    /**
     * @var float
     */
    protected float $targetUtilization;

    /**
     * @var float
     */
    protected float $bonusTarget;

    /**
     * @var string
     */
    protected string $bonusTargetComment;

    /**
     * @var EmployeeBonusTargetType
     */
    protected EmployeeBonusTargetType $bonusTargetType;

    /**
     * @var EmployeeBonusTargetPayFrequency
     */
    protected EmployeeBonusTargetPayFrequency $bonusTargetPayFrequency;

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
        "template" => "RecordRef",
        "entityId" => "string",
        "salutation" => "string",
        "firstName" => "string",
        "middleName" => "string",
        "lastName" => "string",
        "altName" => "string",
        "phone" => "string",
        "fax" => "string",
        "email" => "string",
        "defaultAddress" => "string",
        "isInactive" => "boolean",
        "phoneticName" => "string",
        "lastModifiedDate" => "dateTime",
        "dateCreated" => "dateTime",
        "initials" => "string",
        "officePhone" => "string",
        "homePhone" => "string",
        "mobilePhone" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "billingClass" => "RecordRef",
        "accountNumber" => "string",
        "compensationCurrency" => "EmployeeCompensationCurrency",
        "baseWageType" => "EmployeeBaseWageType",
        "baseWage" => "float",
        "comments" => "string",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "image" => "RecordRef",
        "payFrequency" => "EmployeePayFrequency",
        "lastPaidDate" => "dateTime",
        "currency" => "RecordRef",
        "useTimeData" => "EmployeeUseTimeData",
        "usePerquest" => "boolean",
        "workplace" => "RecordRef",
        "adpId" => "string",
        "directDeposit" => "boolean",
        "expenseLimit" => "float",
        "purchaseOrderLimit" => "float",
        "purchaseOrderApprovalLimit" => "float",
        "socialSecurityNumber" => "string",
        "supervisor" => "RecordRef",
        "approver" => "RecordRef",
        "approvalLimit" => "float",
        "timeApprover" => "RecordRef",
        "employeeType" => "RecordRef",
        "isSalesRep" => "boolean",
        "salesRole" => "RecordRef",
        "isSupportRep" => "boolean",
        "isJobResource" => "boolean",
        "laborCost" => "float",
        "birthDate" => "dateTime",
        "hireDate" => "dateTime",
        "releaseDate" => "dateTime",
        "terminationDetails" => "string",
        "terminationReason" => "RecordRef",
        "terminationRegretted" => "EmployeeTerminationRegretted",
        "terminationCategory" => "EmployeeTerminationCategory",
        "timeOffPlan" => "RecordRef",
        "lastReviewDate" => "dateTime",
        "nextReviewDate" => "dateTime",
        "title" => "string",
        "employeeStatus" => "RecordRef",
        "jobDescription" => "string",
        "workAssignment" => "EmployeeWorkAssignment",
        "job" => "RecordRef",
        "maritalStatus" => "RecordRef",
        "ethnicity" => "RecordRef",
        "gender" => "Gender",
        "purchaseOrderApprover" => "RecordRef",
        "workCalendar" => "RecordRef",
        "giveAccess" => "boolean",
        "defaultExpenseReportCurrency" => "RecordRef",
        "concurrentWebServicesUser" => "boolean",
        "sendEmail" => "boolean",
        "hasOfflineAccess" => "boolean",
        "password" => "string",
        "password2" => "string",
        "requirePwdChange" => "boolean",
        "inheritIPRules" => "boolean",
        "IPAddressRule" => "string",
        "startDateTimeOffCalc" => "dateTime",
        "commissionPaymentPreference" => "EmployeeCommissionPaymentPreference",
        "billPay" => "boolean",
        "defaultAcctCorpCardExp" => "RecordRef",
        "eligibleForCommission" => "boolean",
        "subscriptionsList" => "EmployeeSubscriptionsList",
        "ratesList" => "EmployeeRatesList",
        "addressbookList" => "EmployeeAddressbookList",
        "rolesList" => "EmployeeRolesList",
        "hrEducationList" => "EmployeeHrEducationList",
        "accruedTimeList" => "EmployeeAccruedTimeList",
        "directDepositList" => "EmployeeDirectDepositList",
        "currencyList" => "EmployeeCurrencyList",
        "companyContributionList" => "EmployeeCompanyContributionList",
        "earningList" => "EmployeeEarningList",
        "emergencyContactList" => "EmployeeEmergencyContactList",
        "hcmPositionList" => "EmployeeHcmPositionList",
        "deductionList" => "EmployeeDeductionList",
        "isJobManager" => "boolean",
        "targetUtilization" => "float",
        "bonusTarget" => "float",
        "bonusTargetComment" => "string",
        "bonusTargetType" => "EmployeeBonusTargetType",
        "bonusTargetPayFrequency" => "EmployeeBonusTargetPayFrequency",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Employee
     */
    public function setCustomForm(RecordRef $customForm): Employee
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
     * @param RecordRef $template
     * @return Employee
     */
    public function setTemplate(RecordRef $template): Employee
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTemplate(): RecordRef
    {
        return $this->template;
    }

    /**
     * @param string $entityId
     * @return Employee
     */
    public function setEntityId(string $entityId): Employee
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
     * @param string $salutation
     * @return Employee
     */
    public function setSalutation(string $salutation): Employee
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return string
     */
    public function getSalutation(): string
    {
        return $this->salutation;
    }

    /**
     * @param string $firstName
     * @return Employee
     */
    public function setFirstName(string $firstName): Employee
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $middleName
     * @return Employee
     */
    public function setMiddleName(string $middleName): Employee
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMiddleName(): string
    {
        return $this->middleName;
    }

    /**
     * @param string $lastName
     * @return Employee
     */
    public function setLastName(string $lastName): Employee
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $altName
     * @return Employee
     */
    public function setAltName(string $altName): Employee
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
     * @param string $phone
     * @return Employee
     */
    public function setPhone(string $phone): Employee
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
     * @param string $fax
     * @return Employee
     */
    public function setFax(string $fax): Employee
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
     * @return Employee
     */
    public function setEmail(string $email): Employee
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
     * @param string $defaultAddress
     * @return Employee
     */
    public function setDefaultAddress(string $defaultAddress): Employee
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
     * @param bool $isInactive
     * @return Employee
     */
    public function setIsInactive(bool $isInactive): Employee
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
     * @param string $phoneticName
     * @return Employee
     */
    public function setPhoneticName(string $phoneticName): Employee
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
     * @param string $lastModifiedDate
     * @return Employee
     */
    public function setLastModifiedDate(string $lastModifiedDate): Employee
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
     * @param string $dateCreated
     * @return Employee
     */
    public function setDateCreated(string $dateCreated): Employee
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
     * @param string $initials
     * @return Employee
     */
    public function setInitials(string $initials): Employee
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitials(): string
    {
        return $this->initials;
    }

    /**
     * @param string $officePhone
     * @return Employee
     */
    public function setOfficePhone(string $officePhone): Employee
    {
        $this->officePhone = $officePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhone(): string
    {
        return $this->officePhone;
    }

    /**
     * @param string $homePhone
     * @return Employee
     */
    public function setHomePhone(string $homePhone): Employee
    {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone(): string
    {
        return $this->homePhone;
    }

    /**
     * @param string $mobilePhone
     * @return Employee
     */
    public function setMobilePhone(string $mobilePhone): Employee
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): string
    {
        return $this->mobilePhone;
    }

    /**
     * @param RecordRef $department
     * @return Employee
     */
    public function setDepartment(RecordRef $department): Employee
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param RecordRef $class
     * @return Employee
     */
    public function setClass(RecordRef $class): Employee
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return Employee
     */
    public function setLocation(RecordRef $location): Employee
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Employee
     */
    public function setSubsidiary(RecordRef $subsidiary): Employee
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
     * @param RecordRef $billingClass
     * @return Employee
     */
    public function setBillingClass(RecordRef $billingClass): Employee
    {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillingClass(): RecordRef
    {
        return $this->billingClass;
    }

    /**
     * @param string $accountNumber
     * @return Employee
     */
    public function setAccountNumber(string $accountNumber): Employee
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
     * @param EmployeeCompensationCurrency $compensationCurrency
     * @return Employee
     */
    public function setCompensationCurrency(EmployeeCompensationCurrency $compensationCurrency): Employee
    {
        $this->compensationCurrency = $compensationCurrency;
        return $this;
    }

    /**
     * @return EmployeeCompensationCurrency
     */
    public function getCompensationCurrency(): EmployeeCompensationCurrency
    {
        return $this->compensationCurrency;
    }

    /**
     * @param EmployeeBaseWageType $baseWageType
     * @return Employee
     */
    public function setBaseWageType(EmployeeBaseWageType $baseWageType): Employee
    {
        $this->baseWageType = $baseWageType;
        return $this;
    }

    /**
     * @return EmployeeBaseWageType
     */
    public function getBaseWageType(): EmployeeBaseWageType
    {
        return $this->baseWageType;
    }

    /**
     * @param float $baseWage
     * @return Employee
     */
    public function setBaseWage(float $baseWage): Employee
    {
        $this->baseWage = $baseWage;
        return $this;
    }

    /**
     * @return float
     */
    public function getBaseWage(): float
    {
        return $this->baseWage;
    }

    /**
     * @param string $comments
     * @return Employee
     */
    public function setComments(string $comments): Employee
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
     * @param GlobalSubscriptionStatus $globalSubscriptionStatus
     * @return Employee
     */
    public function setGlobalSubscriptionStatus(GlobalSubscriptionStatus $globalSubscriptionStatus): Employee
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
     * @param RecordRef $image
     * @return Employee
     */
    public function setImage(RecordRef $image): Employee
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getImage(): RecordRef
    {
        return $this->image;
    }

    /**
     * @param EmployeePayFrequency $payFrequency
     * @return Employee
     */
    public function setPayFrequency(EmployeePayFrequency $payFrequency): Employee
    {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * @return EmployeePayFrequency
     */
    public function getPayFrequency(): EmployeePayFrequency
    {
        return $this->payFrequency;
    }

    /**
     * @param string $lastPaidDate
     * @return Employee
     */
    public function setLastPaidDate(string $lastPaidDate): Employee
    {
        $this->lastPaidDate = $lastPaidDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastPaidDate(): string
    {
        return $this->lastPaidDate;
    }

    /**
     * @param RecordRef $currency
     * @return Employee
     */
    public function setCurrency(RecordRef $currency): Employee
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
     * @param EmployeeUseTimeData $useTimeData
     * @return Employee
     */
    public function setUseTimeData(EmployeeUseTimeData $useTimeData): Employee
    {
        $this->useTimeData = $useTimeData;
        return $this;
    }

    /**
     * @return EmployeeUseTimeData
     */
    public function getUseTimeData(): EmployeeUseTimeData
    {
        return $this->useTimeData;
    }

    /**
     * @param bool $usePerquest
     * @return Employee
     */
    public function setUsePerquest(bool $usePerquest): Employee
    {
        $this->usePerquest = $usePerquest;
        return $this;
    }

    /**
     * @return bool
     */
    public function getUsePerquest(): bool
    {
        return $this->usePerquest;
    }

    /**
     * @param RecordRef $workplace
     * @return Employee
     */
    public function setWorkplace(RecordRef $workplace): Employee
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
     * @param string $adpId
     * @return Employee
     */
    public function setAdpId(string $adpId): Employee
    {
        $this->adpId = $adpId;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdpId(): string
    {
        return $this->adpId;
    }

    /**
     * @param bool $directDeposit
     * @return Employee
     */
    public function setDirectDeposit(bool $directDeposit): Employee
    {
        $this->directDeposit = $directDeposit;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDirectDeposit(): bool
    {
        return $this->directDeposit;
    }

    /**
     * @param float $expenseLimit
     * @return Employee
     */
    public function setExpenseLimit(float $expenseLimit): Employee
    {
        $this->expenseLimit = $expenseLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getExpenseLimit(): float
    {
        return $this->expenseLimit;
    }

    /**
     * @param float $purchaseOrderLimit
     * @return Employee
     */
    public function setPurchaseOrderLimit(float $purchaseOrderLimit): Employee
    {
        $this->purchaseOrderLimit = $purchaseOrderLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderLimit(): float
    {
        return $this->purchaseOrderLimit;
    }

    /**
     * @param float $purchaseOrderApprovalLimit
     * @return Employee
     */
    public function setPurchaseOrderApprovalLimit(float $purchaseOrderApprovalLimit): Employee
    {
        $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getPurchaseOrderApprovalLimit(): float
    {
        return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param string $socialSecurityNumber
     * @return Employee
     */
    public function setSocialSecurityNumber(string $socialSecurityNumber): Employee
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSocialSecurityNumber(): string
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param RecordRef $supervisor
     * @return Employee
     */
    public function setSupervisor(RecordRef $supervisor): Employee
    {
        $this->supervisor = $supervisor;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSupervisor(): RecordRef
    {
        return $this->supervisor;
    }

    /**
     * @param RecordRef $approver
     * @return Employee
     */
    public function setApprover(RecordRef $approver): Employee
    {
        $this->approver = $approver;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getApprover(): RecordRef
    {
        return $this->approver;
    }

    /**
     * @param float $approvalLimit
     * @return Employee
     */
    public function setApprovalLimit(float $approvalLimit): Employee
    {
        $this->approvalLimit = $approvalLimit;
        return $this;
    }

    /**
     * @return float
     */
    public function getApprovalLimit(): float
    {
        return $this->approvalLimit;
    }

    /**
     * @param RecordRef $timeApprover
     * @return Employee
     */
    public function setTimeApprover(RecordRef $timeApprover): Employee
    {
        $this->timeApprover = $timeApprover;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeApprover(): RecordRef
    {
        return $this->timeApprover;
    }

    /**
     * @param RecordRef $employeeType
     * @return Employee
     */
    public function setEmployeeType(RecordRef $employeeType): Employee
    {
        $this->employeeType = $employeeType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployeeType(): RecordRef
    {
        return $this->employeeType;
    }

    /**
     * @param bool $isSalesRep
     * @return Employee
     */
    public function setIsSalesRep(bool $isSalesRep): Employee
    {
        $this->isSalesRep = $isSalesRep;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSalesRep(): bool
    {
        return $this->isSalesRep;
    }

    /**
     * @param RecordRef $salesRole
     * @return Employee
     */
    public function setSalesRole(RecordRef $salesRole): Employee
    {
        $this->salesRole = $salesRole;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSalesRole(): RecordRef
    {
        return $this->salesRole;
    }

    /**
     * @param bool $isSupportRep
     * @return Employee
     */
    public function setIsSupportRep(bool $isSupportRep): Employee
    {
        $this->isSupportRep = $isSupportRep;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsSupportRep(): bool
    {
        return $this->isSupportRep;
    }

    /**
     * @param bool $isJobResource
     * @return Employee
     */
    public function setIsJobResource(bool $isJobResource): Employee
    {
        $this->isJobResource = $isJobResource;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsJobResource(): bool
    {
        return $this->isJobResource;
    }

    /**
     * @param float $laborCost
     * @return Employee
     */
    public function setLaborCost(float $laborCost): Employee
    {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getLaborCost(): float
    {
        return $this->laborCost;
    }

    /**
     * @param string $birthDate
     * @return Employee
     */
    public function setBirthDate(string $birthDate): Employee
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $hireDate
     * @return Employee
     */
    public function setHireDate(string $hireDate): Employee
    {
        $this->hireDate = $hireDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getHireDate(): string
    {
        return $this->hireDate;
    }

    /**
     * @param string $releaseDate
     * @return Employee
     */
    public function setReleaseDate(string $releaseDate): Employee
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $terminationDetails
     * @return Employee
     */
    public function setTerminationDetails(string $terminationDetails): Employee
    {
        $this->terminationDetails = $terminationDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminationDetails(): string
    {
        return $this->terminationDetails;
    }

    /**
     * @param RecordRef $terminationReason
     * @return Employee
     */
    public function setTerminationReason(RecordRef $terminationReason): Employee
    {
        $this->terminationReason = $terminationReason;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTerminationReason(): RecordRef
    {
        return $this->terminationReason;
    }

    /**
     * @param EmployeeTerminationRegretted $terminationRegretted
     * @return Employee
     */
    public function setTerminationRegretted(EmployeeTerminationRegretted $terminationRegretted): Employee
    {
        $this->terminationRegretted = $terminationRegretted;
        return $this;
    }

    /**
     * @return EmployeeTerminationRegretted
     */
    public function getTerminationRegretted(): EmployeeTerminationRegretted
    {
        return $this->terminationRegretted;
    }

    /**
     * @param EmployeeTerminationCategory $terminationCategory
     * @return Employee
     */
    public function setTerminationCategory(EmployeeTerminationCategory $terminationCategory): Employee
    {
        $this->terminationCategory = $terminationCategory;
        return $this;
    }

    /**
     * @return EmployeeTerminationCategory
     */
    public function getTerminationCategory(): EmployeeTerminationCategory
    {
        return $this->terminationCategory;
    }

    /**
     * @param RecordRef $timeOffPlan
     * @return Employee
     */
    public function setTimeOffPlan(RecordRef $timeOffPlan): Employee
    {
        $this->timeOffPlan = $timeOffPlan;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTimeOffPlan(): RecordRef
    {
        return $this->timeOffPlan;
    }

    /**
     * @param string $lastReviewDate
     * @return Employee
     */
    public function setLastReviewDate(string $lastReviewDate): Employee
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastReviewDate(): string
    {
        return $this->lastReviewDate;
    }

    /**
     * @param string $nextReviewDate
     * @return Employee
     */
    public function setNextReviewDate(string $nextReviewDate): Employee
    {
        $this->nextReviewDate = $nextReviewDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextReviewDate(): string
    {
        return $this->nextReviewDate;
    }

    /**
     * @param string $title
     * @return Employee
     */
    public function setTitle(string $title): Employee
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param RecordRef $employeeStatus
     * @return Employee
     */
    public function setEmployeeStatus(RecordRef $employeeStatus): Employee
    {
        $this->employeeStatus = $employeeStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEmployeeStatus(): RecordRef
    {
        return $this->employeeStatus;
    }

    /**
     * @param string $jobDescription
     * @return Employee
     */
    public function setJobDescription(string $jobDescription): Employee
    {
        $this->jobDescription = $jobDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobDescription(): string
    {
        return $this->jobDescription;
    }

    /**
     * @param EmployeeWorkAssignment $workAssignment
     * @return Employee
     */
    public function setWorkAssignment(EmployeeWorkAssignment $workAssignment): Employee
    {
        $this->workAssignment = $workAssignment;
        return $this;
    }

    /**
     * @return EmployeeWorkAssignment
     */
    public function getWorkAssignment(): EmployeeWorkAssignment
    {
        return $this->workAssignment;
    }

    /**
     * @param RecordRef $job
     * @return Employee
     */
    public function setJob(RecordRef $job): Employee
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getJob(): RecordRef
    {
        return $this->job;
    }

    /**
     * @param RecordRef $maritalStatus
     * @return Employee
     */
    public function setMaritalStatus(RecordRef $maritalStatus): Employee
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMaritalStatus(): RecordRef
    {
        return $this->maritalStatus;
    }

    /**
     * @param RecordRef $ethnicity
     * @return Employee
     */
    public function setEthnicity(RecordRef $ethnicity): Employee
    {
        $this->ethnicity = $ethnicity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEthnicity(): RecordRef
    {
        return $this->ethnicity;
    }

    /**
     * @param Gender $gender
     * @return Employee
     */
    public function setGender(Gender $gender): Employee
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return Gender
     */
    public function getGender(): Gender
    {
        return $this->gender;
    }

    /**
     * @param RecordRef $purchaseOrderApprover
     * @return Employee
     */
    public function setPurchaseOrderApprover(RecordRef $purchaseOrderApprover): Employee
    {
        $this->purchaseOrderApprover = $purchaseOrderApprover;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPurchaseOrderApprover(): RecordRef
    {
        return $this->purchaseOrderApprover;
    }

    /**
     * @param RecordRef $workCalendar
     * @return Employee
     */
    public function setWorkCalendar(RecordRef $workCalendar): Employee
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getWorkCalendar(): RecordRef
    {
        return $this->workCalendar;
    }

    /**
     * @param bool $giveAccess
     * @return Employee
     */
    public function setGiveAccess(bool $giveAccess): Employee
    {
        $this->giveAccess = $giveAccess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGiveAccess(): bool
    {
        return $this->giveAccess;
    }

    /**
     * @param RecordRef $defaultExpenseReportCurrency
     * @return Employee
     */
    public function setDefaultExpenseReportCurrency(RecordRef $defaultExpenseReportCurrency): Employee
    {
        $this->defaultExpenseReportCurrency = $defaultExpenseReportCurrency;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultExpenseReportCurrency(): RecordRef
    {
        return $this->defaultExpenseReportCurrency;
    }

    /**
     * @param bool $concurrentWebServicesUser
     * @return Employee
     */
    public function setConcurrentWebServicesUser(bool $concurrentWebServicesUser): Employee
    {
        $this->concurrentWebServicesUser = $concurrentWebServicesUser;
        return $this;
    }

    /**
     * @return bool
     */
    public function getConcurrentWebServicesUser(): bool
    {
        return $this->concurrentWebServicesUser;
    }

    /**
     * @param bool $sendEmail
     * @return Employee
     */
    public function setSendEmail(bool $sendEmail): Employee
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSendEmail(): bool
    {
        return $this->sendEmail;
    }

    /**
     * @param bool $hasOfflineAccess
     * @return Employee
     */
    public function setHasOfflineAccess(bool $hasOfflineAccess): Employee
    {
        $this->hasOfflineAccess = $hasOfflineAccess;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasOfflineAccess(): bool
    {
        return $this->hasOfflineAccess;
    }

    /**
     * @param string $password
     * @return Employee
     */
    public function setPassword(string $password): Employee
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param bool $requirePwdChange
     * @return Employee
     */
    public function setRequirePwdChange(bool $requirePwdChange): Employee
    {
        $this->requirePwdChange = $requirePwdChange;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRequirePwdChange(): bool
    {
        return $this->requirePwdChange;
    }

    /**
     * @param bool $inheritIPRules
     * @return Employee
     */
    public function setInheritIPRules(bool $inheritIPRules): Employee
    {
        $this->inheritIPRules = $inheritIPRules;
        return $this;
    }

    /**
     * @return bool
     */
    public function getInheritIPRules(): bool
    {
        return $this->inheritIPRules;
    }

    /**
     * @param string $IPAddressRule
     * @return Employee
     */
    public function setIPAddressRule(string $IPAddressRule): Employee
    {
        $this->IPAddressRule = $IPAddressRule;
        return $this;
    }

    /**
     * @return string
     */
    public function getIPAddressRule(): string
    {
        return $this->IPAddressRule;
    }

    /**
     * @param string $startDateTimeOffCalc
     * @return Employee
     */
    public function setStartDateTimeOffCalc(string $startDateTimeOffCalc): Employee
    {
        $this->startDateTimeOffCalc = $startDateTimeOffCalc;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeOffCalc(): string
    {
        return $this->startDateTimeOffCalc;
    }

    /**
     * @param EmployeeCommissionPaymentPreference $commissionPaymentPreference
     * @return Employee
     */
    public function setCommissionPaymentPreference(EmployeeCommissionPaymentPreference $commissionPaymentPreference): Employee
    {
        $this->commissionPaymentPreference = $commissionPaymentPreference;
        return $this;
    }

    /**
     * @return EmployeeCommissionPaymentPreference
     */
    public function getCommissionPaymentPreference(): EmployeeCommissionPaymentPreference
    {
        return $this->commissionPaymentPreference;
    }

    /**
     * @param bool $billPay
     * @return Employee
     */
    public function setBillPay(bool $billPay): Employee
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
     * @param RecordRef $defaultAcctCorpCardExp
     * @return Employee
     */
    public function setDefaultAcctCorpCardExp(RecordRef $defaultAcctCorpCardExp): Employee
    {
        $this->defaultAcctCorpCardExp = $defaultAcctCorpCardExp;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultAcctCorpCardExp(): RecordRef
    {
        return $this->defaultAcctCorpCardExp;
    }

    /**
     * @param bool $eligibleForCommission
     * @return Employee
     */
    public function setEligibleForCommission(bool $eligibleForCommission): Employee
    {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEligibleForCommission(): bool
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param EmployeeSubscriptionsList $subscriptionsList
     * @return Employee
     */
    public function setSubscriptionsList(EmployeeSubscriptionsList $subscriptionsList): Employee
    {
        $this->subscriptionsList = $subscriptionsList;
        return $this;
    }

    /**
     * @return EmployeeSubscriptionsList
     */
    public function getSubscriptionsList(): EmployeeSubscriptionsList
    {
        return $this->subscriptionsList;
    }

    /**
     * @param EmployeeRatesList $ratesList
     * @return Employee
     */
    public function setRatesList(EmployeeRatesList $ratesList): Employee
    {
        $this->ratesList = $ratesList;
        return $this;
    }

    /**
     * @return EmployeeRatesList
     */
    public function getRatesList(): EmployeeRatesList
    {
        return $this->ratesList;
    }

    /**
     * @param EmployeeAddressbookList $addressbookList
     * @return Employee
     */
    public function setAddressbookList(EmployeeAddressbookList $addressbookList): Employee
    {
        $this->addressbookList = $addressbookList;
        return $this;
    }

    /**
     * @return EmployeeAddressbookList
     */
    public function getAddressbookList(): EmployeeAddressbookList
    {
        return $this->addressbookList;
    }

    /**
     * @param EmployeeRolesList $rolesList
     * @return Employee
     */
    public function setRolesList(EmployeeRolesList $rolesList): Employee
    {
        $this->rolesList = $rolesList;
        return $this;
    }

    /**
     * @return EmployeeRolesList
     */
    public function getRolesList(): EmployeeRolesList
    {
        return $this->rolesList;
    }

    /**
     * @param EmployeeHrEducationList $hrEducationList
     * @return Employee
     */
    public function setHrEducationList(EmployeeHrEducationList $hrEducationList): Employee
    {
        $this->hrEducationList = $hrEducationList;
        return $this;
    }

    /**
     * @return EmployeeHrEducationList
     */
    public function getHrEducationList(): EmployeeHrEducationList
    {
        return $this->hrEducationList;
    }

    /**
     * @param EmployeeAccruedTimeList $accruedTimeList
     * @return Employee
     */
    public function setAccruedTimeList(EmployeeAccruedTimeList $accruedTimeList): Employee
    {
        $this->accruedTimeList = $accruedTimeList;
        return $this;
    }

    /**
     * @return EmployeeAccruedTimeList
     */
    public function getAccruedTimeList(): EmployeeAccruedTimeList
    {
        return $this->accruedTimeList;
    }

    /**
     * @param EmployeeDirectDepositList $directDepositList
     * @return Employee
     */
    public function setDirectDepositList(EmployeeDirectDepositList $directDepositList): Employee
    {
        $this->directDepositList = $directDepositList;
        return $this;
    }

    /**
     * @return EmployeeDirectDepositList
     */
    public function getDirectDepositList(): EmployeeDirectDepositList
    {
        return $this->directDepositList;
    }

    /**
     * @param EmployeeCurrencyList $currencyList
     * @return Employee
     */
    public function setCurrencyList(EmployeeCurrencyList $currencyList): Employee
    {
        $this->currencyList = $currencyList;
        return $this;
    }

    /**
     * @return EmployeeCurrencyList
     */
    public function getCurrencyList(): EmployeeCurrencyList
    {
        return $this->currencyList;
    }

    /**
     * @param EmployeeCompanyContributionList $companyContributionList
     * @return Employee
     */
    public function setCompanyContributionList(EmployeeCompanyContributionList $companyContributionList): Employee
    {
        $this->companyContributionList = $companyContributionList;
        return $this;
    }

    /**
     * @return EmployeeCompanyContributionList
     */
    public function getCompanyContributionList(): EmployeeCompanyContributionList
    {
        return $this->companyContributionList;
    }

    /**
     * @param EmployeeEarningList $earningList
     * @return Employee
     */
    public function setEarningList(EmployeeEarningList $earningList): Employee
    {
        $this->earningList = $earningList;
        return $this;
    }

    /**
     * @return EmployeeEarningList
     */
    public function getEarningList(): EmployeeEarningList
    {
        return $this->earningList;
    }

    /**
     * @param EmployeeEmergencyContactList $emergencyContactList
     * @return Employee
     */
    public function setEmergencyContactList(EmployeeEmergencyContactList $emergencyContactList): Employee
    {
        $this->emergencyContactList = $emergencyContactList;
        return $this;
    }

    /**
     * @return EmployeeEmergencyContactList
     */
    public function getEmergencyContactList(): EmployeeEmergencyContactList
    {
        return $this->emergencyContactList;
    }

    /**
     * @param EmployeeHcmPositionList $hcmPositionList
     * @return Employee
     */
    public function setHcmPositionList(EmployeeHcmPositionList $hcmPositionList): Employee
    {
        $this->hcmPositionList = $hcmPositionList;
        return $this;
    }

    /**
     * @return EmployeeHcmPositionList
     */
    public function getHcmPositionList(): EmployeeHcmPositionList
    {
        return $this->hcmPositionList;
    }

    /**
     * @param EmployeeDeductionList $deductionList
     * @return Employee
     */
    public function setDeductionList(EmployeeDeductionList $deductionList): Employee
    {
        $this->deductionList = $deductionList;
        return $this;
    }

    /**
     * @return EmployeeDeductionList
     */
    public function getDeductionList(): EmployeeDeductionList
    {
        return $this->deductionList;
    }

    /**
     * @param bool $isJobManager
     * @return Employee
     */
    public function setIsJobManager(bool $isJobManager): Employee
    {
        $this->isJobManager = $isJobManager;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsJobManager(): bool
    {
        return $this->isJobManager;
    }

    /**
     * @param float $targetUtilization
     * @return Employee
     */
    public function setTargetUtilization(float $targetUtilization): Employee
    {
        $this->targetUtilization = $targetUtilization;
        return $this;
    }

    /**
     * @return float
     */
    public function getTargetUtilization(): float
    {
        return $this->targetUtilization;
    }

    /**
     * @param float $bonusTarget
     * @return Employee
     */
    public function setBonusTarget(float $bonusTarget): Employee
    {
        $this->bonusTarget = $bonusTarget;
        return $this;
    }

    /**
     * @return float
     */
    public function getBonusTarget(): float
    {
        return $this->bonusTarget;
    }

    /**
     * @param string $bonusTargetComment
     * @return Employee
     */
    public function setBonusTargetComment(string $bonusTargetComment): Employee
    {
        $this->bonusTargetComment = $bonusTargetComment;
        return $this;
    }

    /**
     * @return string
     */
    public function getBonusTargetComment(): string
    {
        return $this->bonusTargetComment;
    }

    /**
     * @param EmployeeBonusTargetType $bonusTargetType
     * @return Employee
     */
    public function setBonusTargetType(EmployeeBonusTargetType $bonusTargetType): Employee
    {
        $this->bonusTargetType = $bonusTargetType;
        return $this;
    }

    /**
     * @return EmployeeBonusTargetType
     */
    public function getBonusTargetType(): EmployeeBonusTargetType
    {
        return $this->bonusTargetType;
    }

    /**
     * @param EmployeeBonusTargetPayFrequency $bonusTargetPayFrequency
     * @return Employee
     */
    public function setBonusTargetPayFrequency(EmployeeBonusTargetPayFrequency $bonusTargetPayFrequency): Employee
    {
        $this->bonusTargetPayFrequency = $bonusTargetPayFrequency;
        return $this;
    }

    /**
     * @return EmployeeBonusTargetPayFrequency
     */
    public function getBonusTargetPayFrequency(): EmployeeBonusTargetPayFrequency
    {
        return $this->bonusTargetPayFrequency;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Employee
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Employee
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
     * @return Employee
     */
    public function setInternalId(string $internalId): Employee
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
     * @return Employee
     */
    public function setExternalId(string $externalId): Employee
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
