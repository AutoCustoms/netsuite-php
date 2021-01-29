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

class EmployeeSearchBasic extends SearchRecordBasic {
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
     * @var SearchStringField
     */
    protected SearchStringField $alienNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $allocation;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $anniversary;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $approvalLimit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $approver;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $attention;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $authWorkDate;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $baseWage;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $baseWageType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $billAddress;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $billingClass;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $birthDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $birthDay;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $bonusTarget;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $bonusTargetComment;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $bonusTargetPayFrequency;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $bonusTargetType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $cContribution;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $city;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $comments;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $commissionPlan;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $compensationCurrency;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $concurrentWebServicesUser;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $country;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $county;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateCreated;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $deduction;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultAcctCorpCardExp;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultExpenseReportCurrency;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $defaultTaxReg;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $defaultTaxRegText;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $earning;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $education;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $eligibleForCommission;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $email;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employeeStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employeeType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $employeeTypeKpi;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $entityId;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $ethnicity;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $expenseLimit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $expenseReportCurrency;

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
     * @var SearchStringField
     */
    protected SearchStringField $firstName;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $gender;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $giveAccess;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $globalSubscriptionStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $group;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $hireDate;

    protected $I9Verified;
    /**
     * @var SearchStringField
     */
    protected SearchStringField $image;

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
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isJobManager;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isJobResource;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isTemplate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $job;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $jobDescription;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $laborCost;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $language;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $lastName;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastPaidDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastReviewDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $level;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $maritalStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $middleName;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $nextReviewDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $offlineAccess;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $payFrequency;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $permChangeDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $permission;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $permissionChange;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phone;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $phoneticName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $positionTitle;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $primaryEarningAmount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $primaryEarningItem;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $primaryEarningType;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderApprovalLimit;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $purchaseOrderApprover;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $purchaseOrderLimit;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $releaseDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $residentStatus;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $role;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $roleChange;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $roleChangeDate;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $salesRep;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $salesRole;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $salutation;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $socialSecurityNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $startDateTimeOffCalc;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $state;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $supervisor;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $supportRep;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $targetUtilization;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $terminationCategory;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $terminationDetails;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $terminationReason;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $terminationRegretted;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $timeApprover;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $timeOffPlan;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $usePerquest;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $useTimeData;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $visaExpDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $visaType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $withholding;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workCalendar;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $workplace;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $zipCode;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "address" => "SearchStringField",
        "addressee" => "SearchStringField",
        "addressLabel" => "SearchStringField",
        "addressPhone" => "SearchStringField",
        "alienNumber" => "SearchStringField",
        "allocation" => "SearchDoubleField",
        "anniversary" => "SearchDateField",
        "approvalLimit" => "SearchDoubleField",
        "approver" => "SearchMultiSelectField",
        "attention" => "SearchStringField",
        "authWorkDate" => "SearchDateField",
        "baseWage" => "SearchDoubleField",
        "baseWageType" => "SearchEnumMultiSelectField",
        "billAddress" => "SearchStringField",
        "billingClass" => "SearchMultiSelectField",
        "birthDate" => "SearchDateField",
        "birthDay" => "SearchDateField",
        "bonusTarget" => "SearchDoubleField",
        "bonusTargetComment" => "SearchStringField",
        "bonusTargetPayFrequency" => "SearchEnumMultiSelectField",
        "bonusTargetType" => "SearchEnumMultiSelectField",
        "cContribution" => "SearchMultiSelectField",
        "city" => "SearchStringField",
        "class" => "SearchMultiSelectField",
        "comments" => "SearchStringField",
        "commissionPlan" => "SearchMultiSelectField",
        "compensationCurrency" => "SearchEnumMultiSelectField",
        "concurrentWebServicesUser" => "SearchBooleanField",
        "country" => "SearchEnumMultiSelectField",
        "county" => "SearchStringField",
        "dateCreated" => "SearchDateField",
        "deduction" => "SearchMultiSelectField",
        "defaultAcctCorpCardExp" => "SearchMultiSelectField",
        "defaultExpenseReportCurrency" => "SearchMultiSelectField",
        "defaultTaxReg" => "SearchMultiSelectField",
        "defaultTaxRegText" => "SearchStringField",
        "department" => "SearchMultiSelectField",
        "earning" => "SearchMultiSelectField",
        "education" => "SearchMultiSelectField",
        "eligibleForCommission" => "SearchBooleanField",
        "email" => "SearchStringField",
        "employeeStatus" => "SearchMultiSelectField",
        "employeeType" => "SearchMultiSelectField",
        "employeeTypeKpi" => "SearchBooleanField",
        "entityId" => "SearchStringField",
        "ethnicity" => "SearchMultiSelectField",
        "expenseLimit" => "SearchDoubleField",
        "expenseReportCurrency" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fax" => "SearchStringField",
        "firstName" => "SearchStringField",
        "gender" => "SearchEnumMultiSelectField",
        "giveAccess" => "SearchBooleanField",
        "globalSubscriptionStatus" => "SearchEnumMultiSelectField",
        "group" => "SearchMultiSelectField",
        "hireDate" => "SearchDateField",
        "I9Verified" => "SearchBooleanField",
        "image" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isDefaultBilling" => "SearchBooleanField",
        "isDefaultShipping" => "SearchBooleanField",
        "isInactive" => "SearchBooleanField",
        "isJobManager" => "SearchBooleanField",
        "isJobResource" => "SearchBooleanField",
        "isTemplate" => "SearchBooleanField",
        "job" => "SearchMultiSelectField",
        "jobDescription" => "SearchStringField",
        "laborCost" => "SearchDoubleField",
        "language" => "SearchEnumMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "lastName" => "SearchStringField",
        "lastPaidDate" => "SearchDateField",
        "lastReviewDate" => "SearchDateField",
        "level" => "SearchEnumMultiSelectField",
        "location" => "SearchMultiSelectField",
        "maritalStatus" => "SearchMultiSelectField",
        "middleName" => "SearchStringField",
        "nextReviewDate" => "SearchDateField",
        "offlineAccess" => "SearchBooleanField",
        "payFrequency" => "SearchEnumMultiSelectField",
        "permChangeDate" => "SearchDateField",
        "permission" => "SearchEnumMultiSelectField",
        "permissionChange" => "SearchEnumMultiSelectField",
        "phone" => "SearchStringField",
        "phoneticName" => "SearchStringField",
        "positionTitle" => "SearchMultiSelectField",
        "primaryEarningAmount" => "SearchDoubleField",
        "primaryEarningItem" => "SearchStringField",
        "primaryEarningType" => "SearchStringField",
        "purchaseOrderApprovalLimit" => "SearchDoubleField",
        "purchaseOrderApprover" => "SearchMultiSelectField",
        "purchaseOrderLimit" => "SearchDoubleField",
        "releaseDate" => "SearchDateField",
        "residentStatus" => "SearchMultiSelectField",
        "role" => "SearchMultiSelectField",
        "roleChange" => "SearchMultiSelectField",
        "roleChangeDate" => "SearchDateField",
        "salesRep" => "SearchBooleanField",
        "salesRole" => "SearchMultiSelectField",
        "salutation" => "SearchStringField",
        "socialSecurityNumber" => "SearchStringField",
        "startDateTimeOffCalc" => "SearchDateField",
        "state" => "SearchStringField",
        "subsidiary" => "SearchMultiSelectField",
        "supervisor" => "SearchMultiSelectField",
        "supportRep" => "SearchBooleanField",
        "targetUtilization" => "SearchDoubleField",
        "terminationCategory" => "SearchEnumMultiSelectField",
        "terminationDetails" => "SearchStringField",
        "terminationReason" => "SearchMultiSelectField",
        "terminationRegretted" => "SearchEnumMultiSelectField",
        "timeApprover" => "SearchMultiSelectField",
        "timeOffPlan" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "usePerquest" => "SearchBooleanField",
        "useTimeData" => "SearchBooleanField",
        "visaExpDate" => "SearchDateField",
        "visaType" => "SearchMultiSelectField",
        "withholding" => "SearchMultiSelectField",
        "workCalendar" => "SearchMultiSelectField",
        "workplace" => "SearchMultiSelectField",
        "zipCode" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchStringField $address
     * @return EmployeeSearchBasic
     */
    public function setAddress(SearchStringField $address): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setAddressee(SearchStringField $addressee): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setAddressLabel(SearchStringField $addressLabel): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setAddressPhone(SearchStringField $addressPhone): EmployeeSearchBasic
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
     * @param SearchStringField $alienNumber
     * @return EmployeeSearchBasic
     */
    public function setAlienNumber(SearchStringField $alienNumber): EmployeeSearchBasic
    {
        $this->alienNumber = $alienNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getAlienNumber(): SearchStringField
    {
        return $this->alienNumber;
    }

    /**
     * @param SearchDoubleField $allocation
     * @return EmployeeSearchBasic
     */
    public function setAllocation(SearchDoubleField $allocation): EmployeeSearchBasic
    {
        $this->allocation = $allocation;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getAllocation(): SearchDoubleField
    {
        return $this->allocation;
    }

    /**
     * @param SearchDateField $anniversary
     * @return EmployeeSearchBasic
     */
    public function setAnniversary(SearchDateField $anniversary): EmployeeSearchBasic
    {
        $this->anniversary = $anniversary;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getAnniversary(): SearchDateField
    {
        return $this->anniversary;
    }

    /**
     * @param SearchDoubleField $approvalLimit
     * @return EmployeeSearchBasic
     */
    public function setApprovalLimit(SearchDoubleField $approvalLimit): EmployeeSearchBasic
    {
        $this->approvalLimit = $approvalLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getApprovalLimit(): SearchDoubleField
    {
        return $this->approvalLimit;
    }

    /**
     * @param SearchMultiSelectField $approver
     * @return EmployeeSearchBasic
     */
    public function setApprover(SearchMultiSelectField $approver): EmployeeSearchBasic
    {
        $this->approver = $approver;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getApprover(): SearchMultiSelectField
    {
        return $this->approver;
    }

    /**
     * @param SearchStringField $attention
     * @return EmployeeSearchBasic
     */
    public function setAttention(SearchStringField $attention): EmployeeSearchBasic
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
     * @param SearchDateField $authWorkDate
     * @return EmployeeSearchBasic
     */
    public function setAuthWorkDate(SearchDateField $authWorkDate): EmployeeSearchBasic
    {
        $this->authWorkDate = $authWorkDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getAuthWorkDate(): SearchDateField
    {
        return $this->authWorkDate;
    }

    /**
     * @param SearchDoubleField $baseWage
     * @return EmployeeSearchBasic
     */
    public function setBaseWage(SearchDoubleField $baseWage): EmployeeSearchBasic
    {
        $this->baseWage = $baseWage;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBaseWage(): SearchDoubleField
    {
        return $this->baseWage;
    }

    /**
     * @param SearchEnumMultiSelectField $baseWageType
     * @return EmployeeSearchBasic
     */
    public function setBaseWageType(SearchEnumMultiSelectField $baseWageType): EmployeeSearchBasic
    {
        $this->baseWageType = $baseWageType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBaseWageType(): SearchEnumMultiSelectField
    {
        return $this->baseWageType;
    }

    /**
     * @param SearchStringField $billAddress
     * @return EmployeeSearchBasic
     */
    public function setBillAddress(SearchStringField $billAddress): EmployeeSearchBasic
    {
        $this->billAddress = $billAddress;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBillAddress(): SearchStringField
    {
        return $this->billAddress;
    }

    /**
     * @param SearchMultiSelectField $billingClass
     * @return EmployeeSearchBasic
     */
    public function setBillingClass(SearchMultiSelectField $billingClass): EmployeeSearchBasic
    {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingClass(): SearchMultiSelectField
    {
        return $this->billingClass;
    }

    /**
     * @param SearchDateField $birthDate
     * @return EmployeeSearchBasic
     */
    public function setBirthDate(SearchDateField $birthDate): EmployeeSearchBasic
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBirthDate(): SearchDateField
    {
        return $this->birthDate;
    }

    /**
     * @param SearchDateField $birthDay
     * @return EmployeeSearchBasic
     */
    public function setBirthDay(SearchDateField $birthDay): EmployeeSearchBasic
    {
        $this->birthDay = $birthDay;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getBirthDay(): SearchDateField
    {
        return $this->birthDay;
    }

    /**
     * @param SearchDoubleField $bonusTarget
     * @return EmployeeSearchBasic
     */
    public function setBonusTarget(SearchDoubleField $bonusTarget): EmployeeSearchBasic
    {
        $this->bonusTarget = $bonusTarget;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBonusTarget(): SearchDoubleField
    {
        return $this->bonusTarget;
    }

    /**
     * @param SearchStringField $bonusTargetComment
     * @return EmployeeSearchBasic
     */
    public function setBonusTargetComment(SearchStringField $bonusTargetComment): EmployeeSearchBasic
    {
        $this->bonusTargetComment = $bonusTargetComment;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBonusTargetComment(): SearchStringField
    {
        return $this->bonusTargetComment;
    }

    /**
     * @param SearchEnumMultiSelectField $bonusTargetPayFrequency
     * @return EmployeeSearchBasic
     */
    public function setBonusTargetPayFrequency(SearchEnumMultiSelectField $bonusTargetPayFrequency): EmployeeSearchBasic
    {
        $this->bonusTargetPayFrequency = $bonusTargetPayFrequency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBonusTargetPayFrequency(): SearchEnumMultiSelectField
    {
        return $this->bonusTargetPayFrequency;
    }

    /**
     * @param SearchEnumMultiSelectField $bonusTargetType
     * @return EmployeeSearchBasic
     */
    public function setBonusTargetType(SearchEnumMultiSelectField $bonusTargetType): EmployeeSearchBasic
    {
        $this->bonusTargetType = $bonusTargetType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getBonusTargetType(): SearchEnumMultiSelectField
    {
        return $this->bonusTargetType;
    }

    /**
     * @param SearchMultiSelectField $cContribution
     * @return EmployeeSearchBasic
     */
    public function setCContribution(SearchMultiSelectField $cContribution): EmployeeSearchBasic
    {
        $this->cContribution = $cContribution;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCContribution(): SearchMultiSelectField
    {
        return $this->cContribution;
    }

    /**
     * @param SearchStringField $city
     * @return EmployeeSearchBasic
     */
    public function setCity(SearchStringField $city): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $class
     * @return EmployeeSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): EmployeeSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchStringField $comments
     * @return EmployeeSearchBasic
     */
    public function setComments(SearchStringField $comments): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $commissionPlan
     * @return EmployeeSearchBasic
     */
    public function setCommissionPlan(SearchMultiSelectField $commissionPlan): EmployeeSearchBasic
    {
        $this->commissionPlan = $commissionPlan;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCommissionPlan(): SearchMultiSelectField
    {
        return $this->commissionPlan;
    }

    /**
     * @param SearchEnumMultiSelectField $compensationCurrency
     * @return EmployeeSearchBasic
     */
    public function setCompensationCurrency(SearchEnumMultiSelectField $compensationCurrency): EmployeeSearchBasic
    {
        $this->compensationCurrency = $compensationCurrency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCompensationCurrency(): SearchEnumMultiSelectField
    {
        return $this->compensationCurrency;
    }

    /**
     * @param SearchBooleanField $concurrentWebServicesUser
     * @return EmployeeSearchBasic
     */
    public function setConcurrentWebServicesUser(SearchBooleanField $concurrentWebServicesUser): EmployeeSearchBasic
    {
        $this->concurrentWebServicesUser = $concurrentWebServicesUser;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getConcurrentWebServicesUser(): SearchBooleanField
    {
        return $this->concurrentWebServicesUser;
    }

    /**
     * @param SearchEnumMultiSelectField $country
     * @return EmployeeSearchBasic
     */
    public function setCountry(SearchEnumMultiSelectField $country): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setCounty(SearchStringField $county): EmployeeSearchBasic
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
     * @param SearchDateField $dateCreated
     * @return EmployeeSearchBasic
     */
    public function setDateCreated(SearchDateField $dateCreated): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $deduction
     * @return EmployeeSearchBasic
     */
    public function setDeduction(SearchMultiSelectField $deduction): EmployeeSearchBasic
    {
        $this->deduction = $deduction;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeduction(): SearchMultiSelectField
    {
        return $this->deduction;
    }

    /**
     * @param SearchMultiSelectField $defaultAcctCorpCardExp
     * @return EmployeeSearchBasic
     */
    public function setDefaultAcctCorpCardExp(SearchMultiSelectField $defaultAcctCorpCardExp): EmployeeSearchBasic
    {
        $this->defaultAcctCorpCardExp = $defaultAcctCorpCardExp;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultAcctCorpCardExp(): SearchMultiSelectField
    {
        return $this->defaultAcctCorpCardExp;
    }

    /**
     * @param SearchMultiSelectField $defaultExpenseReportCurrency
     * @return EmployeeSearchBasic
     */
    public function setDefaultExpenseReportCurrency(SearchMultiSelectField $defaultExpenseReportCurrency): EmployeeSearchBasic
    {
        $this->defaultExpenseReportCurrency = $defaultExpenseReportCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDefaultExpenseReportCurrency(): SearchMultiSelectField
    {
        return $this->defaultExpenseReportCurrency;
    }

    /**
     * @param SearchMultiSelectField $defaultTaxReg
     * @return EmployeeSearchBasic
     */
    public function setDefaultTaxReg(SearchMultiSelectField $defaultTaxReg): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setDefaultTaxRegText(SearchStringField $defaultTaxRegText): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $department
     * @return EmployeeSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): EmployeeSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchMultiSelectField $earning
     * @return EmployeeSearchBasic
     */
    public function setEarning(SearchMultiSelectField $earning): EmployeeSearchBasic
    {
        $this->earning = $earning;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEarning(): SearchMultiSelectField
    {
        return $this->earning;
    }

    /**
     * @param SearchMultiSelectField $education
     * @return EmployeeSearchBasic
     */
    public function setEducation(SearchMultiSelectField $education): EmployeeSearchBasic
    {
        $this->education = $education;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEducation(): SearchMultiSelectField
    {
        return $this->education;
    }

    /**
     * @param SearchBooleanField $eligibleForCommission
     * @return EmployeeSearchBasic
     */
    public function setEligibleForCommission(SearchBooleanField $eligibleForCommission): EmployeeSearchBasic
    {
        $this->eligibleForCommission = $eligibleForCommission;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEligibleForCommission(): SearchBooleanField
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param SearchStringField $email
     * @return EmployeeSearchBasic
     */
    public function setEmail(SearchStringField $email): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $employeeStatus
     * @return EmployeeSearchBasic
     */
    public function setEmployeeStatus(SearchMultiSelectField $employeeStatus): EmployeeSearchBasic
    {
        $this->employeeStatus = $employeeStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeStatus(): SearchMultiSelectField
    {
        return $this->employeeStatus;
    }

    /**
     * @param SearchMultiSelectField $employeeType
     * @return EmployeeSearchBasic
     */
    public function setEmployeeType(SearchMultiSelectField $employeeType): EmployeeSearchBasic
    {
        $this->employeeType = $employeeType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeType(): SearchMultiSelectField
    {
        return $this->employeeType;
    }

    /**
     * @param SearchBooleanField $employeeTypeKpi
     * @return EmployeeSearchBasic
     */
    public function setEmployeeTypeKpi(SearchBooleanField $employeeTypeKpi): EmployeeSearchBasic
    {
        $this->employeeTypeKpi = $employeeTypeKpi;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEmployeeTypeKpi(): SearchBooleanField
    {
        return $this->employeeTypeKpi;
    }

    /**
     * @param SearchStringField $entityId
     * @return EmployeeSearchBasic
     */
    public function setEntityId(SearchStringField $entityId): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $ethnicity
     * @return EmployeeSearchBasic
     */
    public function setEthnicity(SearchMultiSelectField $ethnicity): EmployeeSearchBasic
    {
        $this->ethnicity = $ethnicity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEthnicity(): SearchMultiSelectField
    {
        return $this->ethnicity;
    }

    /**
     * @param SearchDoubleField $expenseLimit
     * @return EmployeeSearchBasic
     */
    public function setExpenseLimit(SearchDoubleField $expenseLimit): EmployeeSearchBasic
    {
        $this->expenseLimit = $expenseLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getExpenseLimit(): SearchDoubleField
    {
        return $this->expenseLimit;
    }

    /**
     * @param SearchMultiSelectField $expenseReportCurrency
     * @return EmployeeSearchBasic
     */
    public function setExpenseReportCurrency(SearchMultiSelectField $expenseReportCurrency): EmployeeSearchBasic
    {
        $this->expenseReportCurrency = $expenseReportCurrency;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseReportCurrency(): SearchMultiSelectField
    {
        return $this->expenseReportCurrency;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return EmployeeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setFax(SearchStringField $fax): EmployeeSearchBasic
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
     * @param SearchStringField $firstName
     * @return EmployeeSearchBasic
     */
    public function setFirstName(SearchStringField $firstName): EmployeeSearchBasic
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getFirstName(): SearchStringField
    {
        return $this->firstName;
    }

    /**
     * @param SearchEnumMultiSelectField $gender
     * @return EmployeeSearchBasic
     */
    public function setGender(SearchEnumMultiSelectField $gender): EmployeeSearchBasic
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGender(): SearchEnumMultiSelectField
    {
        return $this->gender;
    }

    /**
     * @param SearchBooleanField $giveAccess
     * @return EmployeeSearchBasic
     */
    public function setGiveAccess(SearchBooleanField $giveAccess): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setGlobalSubscriptionStatus(SearchEnumMultiSelectField $globalSubscriptionStatus): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $group
     * @return EmployeeSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): EmployeeSearchBasic
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup(): SearchMultiSelectField
    {
        return $this->group;
    }

    /**
     * @param SearchDateField $hireDate
     * @return EmployeeSearchBasic
     */
    public function setHireDate(SearchDateField $hireDate): EmployeeSearchBasic
    {
        $this->hireDate = $hireDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getHireDate(): SearchDateField
    {
        return $this->hireDate;
    }

    /**
     * @param SearchStringField $image
     * @return EmployeeSearchBasic
     */
    public function setImage(SearchStringField $image): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return EmployeeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setIsDefaultBilling(SearchBooleanField $isDefaultBilling): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setIsDefaultShipping(SearchBooleanField $isDefaultShipping): EmployeeSearchBasic
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
     * @param SearchBooleanField $isInactive
     * @return EmployeeSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): EmployeeSearchBasic
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
     * @param SearchBooleanField $isJobManager
     * @return EmployeeSearchBasic
     */
    public function setIsJobManager(SearchBooleanField $isJobManager): EmployeeSearchBasic
    {
        $this->isJobManager = $isJobManager;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobManager(): SearchBooleanField
    {
        return $this->isJobManager;
    }

    /**
     * @param SearchBooleanField $isJobResource
     * @return EmployeeSearchBasic
     */
    public function setIsJobResource(SearchBooleanField $isJobResource): EmployeeSearchBasic
    {
        $this->isJobResource = $isJobResource;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsJobResource(): SearchBooleanField
    {
        return $this->isJobResource;
    }

    /**
     * @param SearchBooleanField $isTemplate
     * @return EmployeeSearchBasic
     */
    public function setIsTemplate(SearchBooleanField $isTemplate): EmployeeSearchBasic
    {
        $this->isTemplate = $isTemplate;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTemplate(): SearchBooleanField
    {
        return $this->isTemplate;
    }

    /**
     * @param SearchMultiSelectField $job
     * @return EmployeeSearchBasic
     */
    public function setJob(SearchMultiSelectField $job): EmployeeSearchBasic
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getJob(): SearchMultiSelectField
    {
        return $this->job;
    }

    /**
     * @param SearchStringField $jobDescription
     * @return EmployeeSearchBasic
     */
    public function setJobDescription(SearchStringField $jobDescription): EmployeeSearchBasic
    {
        $this->jobDescription = $jobDescription;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getJobDescription(): SearchStringField
    {
        return $this->jobDescription;
    }

    /**
     * @param SearchDoubleField $laborCost
     * @return EmployeeSearchBasic
     */
    public function setLaborCost(SearchDoubleField $laborCost): EmployeeSearchBasic
    {
        $this->laborCost = $laborCost;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getLaborCost(): SearchDoubleField
    {
        return $this->laborCost;
    }

    /**
     * @param SearchEnumMultiSelectField $language
     * @return EmployeeSearchBasic
     */
    public function setLanguage(SearchEnumMultiSelectField $language): EmployeeSearchBasic
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
     * @param SearchDateField $lastModifiedDate
     * @return EmployeeSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): EmployeeSearchBasic
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
     * @param SearchStringField $lastName
     * @return EmployeeSearchBasic
     */
    public function setLastName(SearchStringField $lastName): EmployeeSearchBasic
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLastName(): SearchStringField
    {
        return $this->lastName;
    }

    /**
     * @param SearchDateField $lastPaidDate
     * @return EmployeeSearchBasic
     */
    public function setLastPaidDate(SearchDateField $lastPaidDate): EmployeeSearchBasic
    {
        $this->lastPaidDate = $lastPaidDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastPaidDate(): SearchDateField
    {
        return $this->lastPaidDate;
    }

    /**
     * @param SearchDateField $lastReviewDate
     * @return EmployeeSearchBasic
     */
    public function setLastReviewDate(SearchDateField $lastReviewDate): EmployeeSearchBasic
    {
        $this->lastReviewDate = $lastReviewDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastReviewDate(): SearchDateField
    {
        return $this->lastReviewDate;
    }

    /**
     * @param SearchEnumMultiSelectField $level
     * @return EmployeeSearchBasic
     */
    public function setLevel(SearchEnumMultiSelectField $level): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $location
     * @return EmployeeSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): EmployeeSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchMultiSelectField $maritalStatus
     * @return EmployeeSearchBasic
     */
    public function setMaritalStatus(SearchMultiSelectField $maritalStatus): EmployeeSearchBasic
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getMaritalStatus(): SearchMultiSelectField
    {
        return $this->maritalStatus;
    }

    /**
     * @param SearchStringField $middleName
     * @return EmployeeSearchBasic
     */
    public function setMiddleName(SearchStringField $middleName): EmployeeSearchBasic
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMiddleName(): SearchStringField
    {
        return $this->middleName;
    }

    /**
     * @param SearchDateField $nextReviewDate
     * @return EmployeeSearchBasic
     */
    public function setNextReviewDate(SearchDateField $nextReviewDate): EmployeeSearchBasic
    {
        $this->nextReviewDate = $nextReviewDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextReviewDate(): SearchDateField
    {
        return $this->nextReviewDate;
    }

    /**
     * @param SearchBooleanField $offlineAccess
     * @return EmployeeSearchBasic
     */
    public function setOfflineAccess(SearchBooleanField $offlineAccess): EmployeeSearchBasic
    {
        $this->offlineAccess = $offlineAccess;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getOfflineAccess(): SearchBooleanField
    {
        return $this->offlineAccess;
    }

    /**
     * @param SearchEnumMultiSelectField $payFrequency
     * @return EmployeeSearchBasic
     */
    public function setPayFrequency(SearchEnumMultiSelectField $payFrequency): EmployeeSearchBasic
    {
        $this->payFrequency = $payFrequency;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPayFrequency(): SearchEnumMultiSelectField
    {
        return $this->payFrequency;
    }

    /**
     * @param SearchDateField $permChangeDate
     * @return EmployeeSearchBasic
     */
    public function setPermChangeDate(SearchDateField $permChangeDate): EmployeeSearchBasic
    {
        $this->permChangeDate = $permChangeDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getPermChangeDate(): SearchDateField
    {
        return $this->permChangeDate;
    }

    /**
     * @param SearchEnumMultiSelectField $permission
     * @return EmployeeSearchBasic
     */
    public function setPermission(SearchEnumMultiSelectField $permission): EmployeeSearchBasic
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
     * @param SearchEnumMultiSelectField $permissionChange
     * @return EmployeeSearchBasic
     */
    public function setPermissionChange(SearchEnumMultiSelectField $permissionChange): EmployeeSearchBasic
    {
        $this->permissionChange = $permissionChange;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getPermissionChange(): SearchEnumMultiSelectField
    {
        return $this->permissionChange;
    }

    /**
     * @param SearchStringField $phone
     * @return EmployeeSearchBasic
     */
    public function setPhone(SearchStringField $phone): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setPhoneticName(SearchStringField $phoneticName): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $positionTitle
     * @return EmployeeSearchBasic
     */
    public function setPositionTitle(SearchMultiSelectField $positionTitle): EmployeeSearchBasic
    {
        $this->positionTitle = $positionTitle;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPositionTitle(): SearchMultiSelectField
    {
        return $this->positionTitle;
    }

    /**
     * @param SearchDoubleField $primaryEarningAmount
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningAmount(SearchDoubleField $primaryEarningAmount): EmployeeSearchBasic
    {
        $this->primaryEarningAmount = $primaryEarningAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPrimaryEarningAmount(): SearchDoubleField
    {
        return $this->primaryEarningAmount;
    }

    /**
     * @param SearchStringField $primaryEarningItem
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningItem(SearchStringField $primaryEarningItem): EmployeeSearchBasic
    {
        $this->primaryEarningItem = $primaryEarningItem;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPrimaryEarningItem(): SearchStringField
    {
        return $this->primaryEarningItem;
    }

    /**
     * @param SearchStringField $primaryEarningType
     * @return EmployeeSearchBasic
     */
    public function setPrimaryEarningType(SearchStringField $primaryEarningType): EmployeeSearchBasic
    {
        $this->primaryEarningType = $primaryEarningType;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getPrimaryEarningType(): SearchStringField
    {
        return $this->primaryEarningType;
    }

    /**
     * @param SearchDoubleField $purchaseOrderApprovalLimit
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderApprovalLimit(SearchDoubleField $purchaseOrderApprovalLimit): EmployeeSearchBasic
    {
        $this->purchaseOrderApprovalLimit = $purchaseOrderApprovalLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderApprovalLimit(): SearchDoubleField
    {
        return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param SearchMultiSelectField $purchaseOrderApprover
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderApprover(SearchMultiSelectField $purchaseOrderApprover): EmployeeSearchBasic
    {
        $this->purchaseOrderApprover = $purchaseOrderApprover;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPurchaseOrderApprover(): SearchMultiSelectField
    {
        return $this->purchaseOrderApprover;
    }

    /**
     * @param SearchDoubleField $purchaseOrderLimit
     * @return EmployeeSearchBasic
     */
    public function setPurchaseOrderLimit(SearchDoubleField $purchaseOrderLimit): EmployeeSearchBasic
    {
        $this->purchaseOrderLimit = $purchaseOrderLimit;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getPurchaseOrderLimit(): SearchDoubleField
    {
        return $this->purchaseOrderLimit;
    }

    /**
     * @param SearchDateField $releaseDate
     * @return EmployeeSearchBasic
     */
    public function setReleaseDate(SearchDateField $releaseDate): EmployeeSearchBasic
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getReleaseDate(): SearchDateField
    {
        return $this->releaseDate;
    }

    /**
     * @param SearchMultiSelectField $residentStatus
     * @return EmployeeSearchBasic
     */
    public function setResidentStatus(SearchMultiSelectField $residentStatus): EmployeeSearchBasic
    {
        $this->residentStatus = $residentStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResidentStatus(): SearchMultiSelectField
    {
        return $this->residentStatus;
    }

    /**
     * @param SearchMultiSelectField $role
     * @return EmployeeSearchBasic
     */
    public function setRole(SearchMultiSelectField $role): EmployeeSearchBasic
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRole(): SearchMultiSelectField
    {
        return $this->role;
    }

    /**
     * @param SearchMultiSelectField $roleChange
     * @return EmployeeSearchBasic
     */
    public function setRoleChange(SearchMultiSelectField $roleChange): EmployeeSearchBasic
    {
        $this->roleChange = $roleChange;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRoleChange(): SearchMultiSelectField
    {
        return $this->roleChange;
    }

    /**
     * @param SearchDateField $roleChangeDate
     * @return EmployeeSearchBasic
     */
    public function setRoleChangeDate(SearchDateField $roleChangeDate): EmployeeSearchBasic
    {
        $this->roleChangeDate = $roleChangeDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getRoleChangeDate(): SearchDateField
    {
        return $this->roleChangeDate;
    }

    /**
     * @param SearchBooleanField $salesRep
     * @return EmployeeSearchBasic
     */
    public function setSalesRep(SearchBooleanField $salesRep): EmployeeSearchBasic
    {
        $this->salesRep = $salesRep;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSalesRep(): SearchBooleanField
    {
        return $this->salesRep;
    }

    /**
     * @param SearchMultiSelectField $salesRole
     * @return EmployeeSearchBasic
     */
    public function setSalesRole(SearchMultiSelectField $salesRole): EmployeeSearchBasic
    {
        $this->salesRole = $salesRole;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSalesRole(): SearchMultiSelectField
    {
        return $this->salesRole;
    }

    /**
     * @param SearchStringField $salutation
     * @return EmployeeSearchBasic
     */
    public function setSalutation(SearchStringField $salutation): EmployeeSearchBasic
    {
        $this->salutation = $salutation;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSalutation(): SearchStringField
    {
        return $this->salutation;
    }

    /**
     * @param SearchStringField $socialSecurityNumber
     * @return EmployeeSearchBasic
     */
    public function setSocialSecurityNumber(SearchStringField $socialSecurityNumber): EmployeeSearchBasic
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getSocialSecurityNumber(): SearchStringField
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param SearchDateField $startDateTimeOffCalc
     * @return EmployeeSearchBasic
     */
    public function setStartDateTimeOffCalc(SearchDateField $startDateTimeOffCalc): EmployeeSearchBasic
    {
        $this->startDateTimeOffCalc = $startDateTimeOffCalc;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDateTimeOffCalc(): SearchDateField
    {
        return $this->startDateTimeOffCalc;
    }

    /**
     * @param SearchStringField $state
     * @return EmployeeSearchBasic
     */
    public function setState(SearchStringField $state): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $subsidiary
     * @return EmployeeSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): EmployeeSearchBasic
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
     * @param SearchMultiSelectField $supervisor
     * @return EmployeeSearchBasic
     */
    public function setSupervisor(SearchMultiSelectField $supervisor): EmployeeSearchBasic
    {
        $this->supervisor = $supervisor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSupervisor(): SearchMultiSelectField
    {
        return $this->supervisor;
    }

    /**
     * @param SearchBooleanField $supportRep
     * @return EmployeeSearchBasic
     */
    public function setSupportRep(SearchBooleanField $supportRep): EmployeeSearchBasic
    {
        $this->supportRep = $supportRep;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getSupportRep(): SearchBooleanField
    {
        return $this->supportRep;
    }

    /**
     * @param SearchDoubleField $targetUtilization
     * @return EmployeeSearchBasic
     */
    public function setTargetUtilization(SearchDoubleField $targetUtilization): EmployeeSearchBasic
    {
        $this->targetUtilization = $targetUtilization;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTargetUtilization(): SearchDoubleField
    {
        return $this->targetUtilization;
    }

    /**
     * @param SearchEnumMultiSelectField $terminationCategory
     * @return EmployeeSearchBasic
     */
    public function setTerminationCategory(SearchEnumMultiSelectField $terminationCategory): EmployeeSearchBasic
    {
        $this->terminationCategory = $terminationCategory;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTerminationCategory(): SearchEnumMultiSelectField
    {
        return $this->terminationCategory;
    }

    /**
     * @param SearchStringField $terminationDetails
     * @return EmployeeSearchBasic
     */
    public function setTerminationDetails(SearchStringField $terminationDetails): EmployeeSearchBasic
    {
        $this->terminationDetails = $terminationDetails;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTerminationDetails(): SearchStringField
    {
        return $this->terminationDetails;
    }

    /**
     * @param SearchMultiSelectField $terminationReason
     * @return EmployeeSearchBasic
     */
    public function setTerminationReason(SearchMultiSelectField $terminationReason): EmployeeSearchBasic
    {
        $this->terminationReason = $terminationReason;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTerminationReason(): SearchMultiSelectField
    {
        return $this->terminationReason;
    }

    /**
     * @param SearchEnumMultiSelectField $terminationRegretted
     * @return EmployeeSearchBasic
     */
    public function setTerminationRegretted(SearchEnumMultiSelectField $terminationRegretted): EmployeeSearchBasic
    {
        $this->terminationRegretted = $terminationRegretted;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getTerminationRegretted(): SearchEnumMultiSelectField
    {
        return $this->terminationRegretted;
    }

    /**
     * @param SearchMultiSelectField $timeApprover
     * @return EmployeeSearchBasic
     */
    public function setTimeApprover(SearchMultiSelectField $timeApprover): EmployeeSearchBasic
    {
        $this->timeApprover = $timeApprover;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeApprover(): SearchMultiSelectField
    {
        return $this->timeApprover;
    }

    /**
     * @param SearchMultiSelectField $timeOffPlan
     * @return EmployeeSearchBasic
     */
    public function setTimeOffPlan(SearchMultiSelectField $timeOffPlan): EmployeeSearchBasic
    {
        $this->timeOffPlan = $timeOffPlan;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTimeOffPlan(): SearchMultiSelectField
    {
        return $this->timeOffPlan;
    }

    /**
     * @param SearchStringField $title
     * @return EmployeeSearchBasic
     */
    public function setTitle(SearchStringField $title): EmployeeSearchBasic
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle(): SearchStringField
    {
        return $this->title;
    }

    /**
     * @param SearchBooleanField $usePerquest
     * @return EmployeeSearchBasic
     */
    public function setUsePerquest(SearchBooleanField $usePerquest): EmployeeSearchBasic
    {
        $this->usePerquest = $usePerquest;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUsePerquest(): SearchBooleanField
    {
        return $this->usePerquest;
    }

    /**
     * @param SearchBooleanField $useTimeData
     * @return EmployeeSearchBasic
     */
    public function setUseTimeData(SearchBooleanField $useTimeData): EmployeeSearchBasic
    {
        $this->useTimeData = $useTimeData;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseTimeData(): SearchBooleanField
    {
        return $this->useTimeData;
    }

    /**
     * @param SearchDateField $visaExpDate
     * @return EmployeeSearchBasic
     */
    public function setVisaExpDate(SearchDateField $visaExpDate): EmployeeSearchBasic
    {
        $this->visaExpDate = $visaExpDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getVisaExpDate(): SearchDateField
    {
        return $this->visaExpDate;
    }

    /**
     * @param SearchMultiSelectField $visaType
     * @return EmployeeSearchBasic
     */
    public function setVisaType(SearchMultiSelectField $visaType): EmployeeSearchBasic
    {
        $this->visaType = $visaType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVisaType(): SearchMultiSelectField
    {
        return $this->visaType;
    }

    /**
     * @param SearchMultiSelectField $withholding
     * @return EmployeeSearchBasic
     */
    public function setWithholding(SearchMultiSelectField $withholding): EmployeeSearchBasic
    {
        $this->withholding = $withholding;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWithholding(): SearchMultiSelectField
    {
        return $this->withholding;
    }

    /**
     * @param SearchMultiSelectField $workCalendar
     * @return EmployeeSearchBasic
     */
    public function setWorkCalendar(SearchMultiSelectField $workCalendar): EmployeeSearchBasic
    {
        $this->workCalendar = $workCalendar;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkCalendar(): SearchMultiSelectField
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchMultiSelectField $workplace
     * @return EmployeeSearchBasic
     */
    public function setWorkplace(SearchMultiSelectField $workplace): EmployeeSearchBasic
    {
        $this->workplace = $workplace;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getWorkplace(): SearchMultiSelectField
    {
        return $this->workplace;
    }

    /**
     * @param SearchStringField $zipCode
     * @return EmployeeSearchBasic
     */
    public function setZipCode(SearchStringField $zipCode): EmployeeSearchBasic
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
     * @return EmployeeSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): EmployeeSearchBasic
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
