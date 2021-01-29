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

class EmployeeSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $accountNumber;

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
     * @var SearchColumnStringField[]
     */
    protected array $alienNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $allocation;

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
     * @var SearchColumnDoubleField[]
     */
    protected array $approvalLimit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $approver;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $attention;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $authWorkDate;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $baseWage;

    /**
     * @var SearchEnumMultiSelectField[]
     */
    protected array $baseWageType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $billAddress;

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
    protected array $billingClass;

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
    protected array $birthDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $birthDay;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $bonusTarget;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $bonusTargetComment;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $bonusTargetPayFrequency;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $bonusTargetType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $city;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $comments;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $compensationCurrency;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $concurrentWebServicesUser;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $country;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $countryCode;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateCreated;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $defaultAcctCorpCardExp;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $defaultExpenseReportCurrency;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $defaultTaxReg;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $eligibleForCommission;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $email;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employeeStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employeeType;

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
    protected array $ethnicity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $expenseLimit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $expenseReportCurrency;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $fax;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $firstName;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $gender;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $giveAccess;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $globalSubscriptionStatus;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $hireDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $homePhone;

    protected $i9Verified;
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $image;

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
    protected array $isInactive;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isJobManager;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isJobResource;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSalesRep;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isSupportRep;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isTemplate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $job;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $laborCost;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $language;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $lastName;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastPaidDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastReviewDate;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $level;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $maritalStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $middleName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $mobilePhone;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $nextReviewDate;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $offlineAccess;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $payFrequency;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $permChangeDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $permChangeLevel;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $permission;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $permissionChange;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phone;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $phoneticName;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $positionTitle;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $primaryEarningAmount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $primaryEarningItem;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $primaryEarningType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderApprovalLimit;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $purchaseOrderApprover;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $purchaseOrderLimit;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $releaseDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $residentStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $role;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $roleChange;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $roleChangeAction;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $roleChangeDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $salesRole;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $salutation;

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
     * @var SearchColumnStringField[]
     */
    protected array $socialSecurityNumber;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $startDateTimeOffCalc;

    /**
     * @var SearchColumnEnumSelectField[]
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
    protected array $supervisor;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $targetUtilization;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $terminationCategory;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $terminationDetails;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $terminationReason;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $terminationRegretted;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $timeApprover;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $timeOffPlan;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $usePerquest;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $useTimeData;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $visaExpDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $visaType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $workCalendar;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $workplace;

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
        "address" => "SearchColumnStringField[]",
        "address1" => "SearchColumnStringField[]",
        "address2" => "SearchColumnStringField[]",
        "address3" => "SearchColumnStringField[]",
        "addressee" => "SearchColumnStringField[]",
        "addressInternalId" => "SearchColumnStringField[]",
        "addressLabel" => "SearchColumnStringField[]",
        "addressPhone" => "SearchColumnStringField[]",
        "alienNumber" => "SearchColumnStringField[]",
        "allocation" => "SearchColumnDoubleField[]",
        "altEmail" => "SearchColumnStringField[]",
        "altName" => "SearchColumnStringField[]",
        "altPhone" => "SearchColumnStringField[]",
        "approvalLimit" => "SearchColumnDoubleField[]",
        "approver" => "SearchColumnSelectField[]",
        "attention" => "SearchColumnStringField[]",
        "authWorkDate" => "SearchColumnDateField[]",
        "baseWage" => "SearchColumnDoubleField[]",
        "baseWageType" => "SearchEnumMultiSelectField[]",
        "billAddress" => "SearchColumnStringField[]",
        "billAddress1" => "SearchColumnStringField[]",
        "billAddress2" => "SearchColumnStringField[]",
        "billAddress3" => "SearchColumnStringField[]",
        "billAddressee" => "SearchColumnStringField[]",
        "billAttention" => "SearchColumnStringField[]",
        "billCity" => "SearchColumnStringField[]",
        "billCountry" => "SearchColumnEnumSelectField[]",
        "billCountryCode" => "SearchColumnStringField[]",
        "billingClass" => "SearchColumnSelectField[]",
        "billPhone" => "SearchColumnStringField[]",
        "billState" => "SearchColumnStringField[]",
        "billZipCode" => "SearchColumnStringField[]",
        "birthDate" => "SearchColumnDateField[]",
        "birthDay" => "SearchColumnDateField[]",
        "bonusTarget" => "SearchColumnDoubleField[]",
        "bonusTargetComment" => "SearchColumnStringField[]",
        "bonusTargetPayFrequency" => "SearchColumnEnumSelectField[]",
        "bonusTargetType" => "SearchColumnEnumSelectField[]",
        "city" => "SearchColumnStringField[]",
        "class" => "SearchColumnSelectField[]",
        "comments" => "SearchColumnStringField[]",
        "compensationCurrency" => "SearchColumnEnumSelectField[]",
        "concurrentWebServicesUser" => "SearchColumnBooleanField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "countryCode" => "SearchColumnStringField[]",
        "dateCreated" => "SearchColumnDateField[]",
        "defaultAcctCorpCardExp" => "SearchColumnSelectField[]",
        "defaultExpenseReportCurrency" => "SearchColumnSelectField[]",
        "defaultTaxReg" => "SearchColumnStringField[]",
        "department" => "SearchColumnSelectField[]",
        "eligibleForCommission" => "SearchColumnBooleanField[]",
        "email" => "SearchColumnStringField[]",
        "employeeStatus" => "SearchColumnSelectField[]",
        "employeeType" => "SearchColumnSelectField[]",
        "entityId" => "SearchColumnStringField[]",
        "entityNumber" => "SearchColumnLongField[]",
        "ethnicity" => "SearchColumnSelectField[]",
        "expenseLimit" => "SearchColumnDoubleField[]",
        "expenseReportCurrency" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fax" => "SearchColumnStringField[]",
        "firstName" => "SearchColumnStringField[]",
        "gender" => "SearchColumnEnumSelectField[]",
        "giveAccess" => "SearchColumnBooleanField[]",
        "globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
        "hireDate" => "SearchColumnDateField[]",
        "homePhone" => "SearchColumnStringField[]",
        "i9Verified" => "SearchColumnBooleanField[]",
        "image" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefaultBilling" => "SearchColumnBooleanField[]",
        "isDefaultShipping" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "isJobManager" => "SearchColumnBooleanField[]",
        "isJobResource" => "SearchColumnBooleanField[]",
        "isSalesRep" => "SearchColumnBooleanField[]",
        "isSupportRep" => "SearchColumnBooleanField[]",
        "isTemplate" => "SearchColumnBooleanField[]",
        "job" => "SearchColumnSelectField[]",
        "laborCost" => "SearchColumnDoubleField[]",
        "language" => "SearchColumnEnumSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "lastName" => "SearchColumnStringField[]",
        "lastPaidDate" => "SearchColumnDateField[]",
        "lastReviewDate" => "SearchColumnDateField[]",
        "level" => "SearchColumnEnumSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "maritalStatus" => "SearchColumnSelectField[]",
        "middleName" => "SearchColumnStringField[]",
        "mobilePhone" => "SearchColumnStringField[]",
        "nextReviewDate" => "SearchColumnDateField[]",
        "offlineAccess" => "SearchColumnBooleanField[]",
        "payFrequency" => "SearchColumnEnumSelectField[]",
        "permChangeDate" => "SearchColumnDateField[]",
        "permChangeLevel" => "SearchColumnStringField[]",
        "permission" => "SearchColumnEnumSelectField[]",
        "permissionChange" => "SearchColumnEnumSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "phoneticName" => "SearchColumnStringField[]",
        "positionTitle" => "SearchColumnStringField[]",
        "primaryEarningAmount" => "SearchColumnDoubleField[]",
        "primaryEarningItem" => "SearchColumnStringField[]",
        "primaryEarningType" => "SearchColumnStringField[]",
        "purchaseOrderApprovalLimit" => "SearchColumnDoubleField[]",
        "purchaseOrderApprover" => "SearchColumnSelectField[]",
        "purchaseOrderLimit" => "SearchColumnDoubleField[]",
        "releaseDate" => "SearchColumnDateField[]",
        "residentStatus" => "SearchColumnSelectField[]",
        "role" => "SearchColumnSelectField[]",
        "roleChange" => "SearchColumnStringField[]",
        "roleChangeAction" => "SearchColumnStringField[]",
        "roleChangeDate" => "SearchColumnDateField[]",
        "salesRole" => "SearchColumnSelectField[]",
        "salutation" => "SearchColumnStringField[]",
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
        "socialSecurityNumber" => "SearchColumnStringField[]",
        "startDateTimeOffCalc" => "SearchColumnDateField[]",
        "state" => "SearchColumnEnumSelectField[]",
        "subscription" => "SearchColumnSelectField[]",
        "subscriptionDate" => "SearchColumnDateField[]",
        "subscriptionStatus" => "SearchColumnBooleanField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "supervisor" => "SearchColumnSelectField[]",
        "targetUtilization" => "SearchColumnDoubleField[]",
        "terminationCategory" => "SearchColumnEnumSelectField[]",
        "terminationDetails" => "SearchColumnStringField[]",
        "terminationReason" => "SearchColumnSelectField[]",
        "terminationRegretted" => "SearchColumnEnumSelectField[]",
        "timeApprover" => "SearchColumnSelectField[]",
        "timeOffPlan" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "usePerquest" => "SearchColumnBooleanField[]",
        "useTimeData" => "SearchColumnBooleanField[]",
        "visaExpDate" => "SearchColumnDateField[]",
        "visaType" => "SearchColumnSelectField[]",
        "workCalendar" => "SearchColumnStringField[]",
        "workplace" => "SearchColumnSelectField[]",
        "zipCode" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnStringField[] $accountNumber
     * @return EmployeeSearchRowBasic
     */
    public function setAccountNumber(SearchColumnStringField $accountNumber): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $address
     * @return EmployeeSearchRowBasic
     */
    public function setAddress(SearchColumnStringField $address): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAddressee(SearchColumnStringField $addressee): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAddressInternalId(SearchColumnStringField $addressInternalId): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAddressLabel(SearchColumnStringField $addressLabel): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAddressPhone(SearchColumnStringField $addressPhone): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $alienNumber
     * @return EmployeeSearchRowBasic
     */
    public function setAlienNumber(SearchColumnStringField $alienNumber): EmployeeSearchRowBasic
    {
        $this->alienNumber[] = $alienNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAlienNumber(): array
    {
        return $this->alienNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $allocation
     * @return EmployeeSearchRowBasic
     */
    public function setAllocation(SearchColumnDoubleField $allocation): EmployeeSearchRowBasic
    {
        $this->allocation[] = $allocation;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getAllocation(): array
    {
        return $this->allocation;
    }

    /**
     * @param SearchColumnStringField[] $altEmail
     * @return EmployeeSearchRowBasic
     */
    public function setAltEmail(SearchColumnStringField $altEmail): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setAltPhone(SearchColumnStringField $altPhone): EmployeeSearchRowBasic
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
     * @param SearchColumnDoubleField[] $approvalLimit
     * @return EmployeeSearchRowBasic
     */
    public function setApprovalLimit(SearchColumnDoubleField $approvalLimit): EmployeeSearchRowBasic
    {
        $this->approvalLimit[] = $approvalLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getApprovalLimit(): array
    {
        return $this->approvalLimit;
    }

    /**
     * @param SearchColumnSelectField[] $approver
     * @return EmployeeSearchRowBasic
     */
    public function setApprover(SearchColumnSelectField $approver): EmployeeSearchRowBasic
    {
        $this->approver[] = $approver;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getApprover(): array
    {
        return $this->approver;
    }

    /**
     * @param SearchColumnStringField[] $attention
     * @return EmployeeSearchRowBasic
     */
    public function setAttention(SearchColumnStringField $attention): EmployeeSearchRowBasic
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
     * @param SearchColumnDateField[] $authWorkDate
     * @return EmployeeSearchRowBasic
     */
    public function setAuthWorkDate(SearchColumnDateField $authWorkDate): EmployeeSearchRowBasic
    {
        $this->authWorkDate[] = $authWorkDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getAuthWorkDate(): array
    {
        return $this->authWorkDate;
    }

    /**
     * @param SearchColumnDoubleField[] $baseWage
     * @return EmployeeSearchRowBasic
     */
    public function setBaseWage(SearchColumnDoubleField $baseWage): EmployeeSearchRowBasic
    {
        $this->baseWage[] = $baseWage;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBaseWage(): array
    {
        return $this->baseWage;
    }

    /**
     * @param SearchEnumMultiSelectField[] $baseWageType
     * @return EmployeeSearchRowBasic
     */
    public function setBaseWageType(SearchEnumMultiSelectField $baseWageType): EmployeeSearchRowBasic
    {
        $this->baseWageType[] = $baseWageType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField[]
     */
    public function getBaseWageType(): array
    {
        return $this->baseWageType;
    }

    /**
     * @param SearchColumnStringField[] $billAddress
     * @return EmployeeSearchRowBasic
     */
    public function setBillAddress(SearchColumnStringField $billAddress): EmployeeSearchRowBasic
    {
        $this->billAddress[] = $billAddress;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBillAddress(): array
    {
        return $this->billAddress;
    }

    /**
     * @param SearchColumnStringField[] $billAddressee
     * @return EmployeeSearchRowBasic
     */
    public function setBillAddressee(SearchColumnStringField $billAddressee): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillAttention(SearchColumnStringField $billAttention): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillCity(SearchColumnStringField $billCity): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillCountry(SearchColumnEnumSelectField $billCountry): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillCountryCode(SearchColumnStringField $billCountryCode): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $billingClass
     * @return EmployeeSearchRowBasic
     */
    public function setBillingClass(SearchColumnSelectField $billingClass): EmployeeSearchRowBasic
    {
        $this->billingClass[] = $billingClass;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingClass(): array
    {
        return $this->billingClass;
    }

    /**
     * @param SearchColumnStringField[] $billPhone
     * @return EmployeeSearchRowBasic
     */
    public function setBillPhone(SearchColumnStringField $billPhone): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillState(SearchColumnStringField $billState): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setBillZipCode(SearchColumnStringField $billZipCode): EmployeeSearchRowBasic
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
     * @param SearchColumnDateField[] $birthDate
     * @return EmployeeSearchRowBasic
     */
    public function setBirthDate(SearchColumnDateField $birthDate): EmployeeSearchRowBasic
    {
        $this->birthDate[] = $birthDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBirthDate(): array
    {
        return $this->birthDate;
    }

    /**
     * @param SearchColumnDateField[] $birthDay
     * @return EmployeeSearchRowBasic
     */
    public function setBirthDay(SearchColumnDateField $birthDay): EmployeeSearchRowBasic
    {
        $this->birthDay[] = $birthDay;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getBirthDay(): array
    {
        return $this->birthDay;
    }

    /**
     * @param SearchColumnDoubleField[] $bonusTarget
     * @return EmployeeSearchRowBasic
     */
    public function setBonusTarget(SearchColumnDoubleField $bonusTarget): EmployeeSearchRowBasic
    {
        $this->bonusTarget[] = $bonusTarget;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBonusTarget(): array
    {
        return $this->bonusTarget;
    }

    /**
     * @param SearchColumnStringField[] $bonusTargetComment
     * @return EmployeeSearchRowBasic
     */
    public function setBonusTargetComment(SearchColumnStringField $bonusTargetComment): EmployeeSearchRowBasic
    {
        $this->bonusTargetComment[] = $bonusTargetComment;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getBonusTargetComment(): array
    {
        return $this->bonusTargetComment;
    }

    /**
     * @param SearchColumnEnumSelectField[] $bonusTargetPayFrequency
     * @return EmployeeSearchRowBasic
     */
    public function setBonusTargetPayFrequency(SearchColumnEnumSelectField $bonusTargetPayFrequency): EmployeeSearchRowBasic
    {
        $this->bonusTargetPayFrequency[] = $bonusTargetPayFrequency;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBonusTargetPayFrequency(): array
    {
        return $this->bonusTargetPayFrequency;
    }

    /**
     * @param SearchColumnEnumSelectField[] $bonusTargetType
     * @return EmployeeSearchRowBasic
     */
    public function setBonusTargetType(SearchColumnEnumSelectField $bonusTargetType): EmployeeSearchRowBasic
    {
        $this->bonusTargetType[] = $bonusTargetType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getBonusTargetType(): array
    {
        return $this->bonusTargetType;
    }

    /**
     * @param SearchColumnStringField[] $city
     * @return EmployeeSearchRowBasic
     */
    public function setCity(SearchColumnStringField $city): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $class
     * @return EmployeeSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): EmployeeSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnStringField[] $comments
     * @return EmployeeSearchRowBasic
     */
    public function setComments(SearchColumnStringField $comments): EmployeeSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $compensationCurrency
     * @return EmployeeSearchRowBasic
     */
    public function setCompensationCurrency(SearchColumnEnumSelectField $compensationCurrency): EmployeeSearchRowBasic
    {
        $this->compensationCurrency[] = $compensationCurrency;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCompensationCurrency(): array
    {
        return $this->compensationCurrency;
    }

    /**
     * @param SearchColumnBooleanField[] $concurrentWebServicesUser
     * @return EmployeeSearchRowBasic
     */
    public function setConcurrentWebServicesUser(SearchColumnBooleanField $concurrentWebServicesUser): EmployeeSearchRowBasic
    {
        $this->concurrentWebServicesUser[] = $concurrentWebServicesUser;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getConcurrentWebServicesUser(): array
    {
        return $this->concurrentWebServicesUser;
    }

    /**
     * @param SearchColumnEnumSelectField[] $country
     * @return EmployeeSearchRowBasic
     */
    public function setCountry(SearchColumnEnumSelectField $country): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setCountryCode(SearchColumnStringField $countryCode): EmployeeSearchRowBasic
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
     * @param SearchColumnDateField[] $dateCreated
     * @return EmployeeSearchRowBasic
     */
    public function setDateCreated(SearchColumnDateField $dateCreated): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $defaultAcctCorpCardExp
     * @return EmployeeSearchRowBasic
     */
    public function setDefaultAcctCorpCardExp(SearchColumnSelectField $defaultAcctCorpCardExp): EmployeeSearchRowBasic
    {
        $this->defaultAcctCorpCardExp[] = $defaultAcctCorpCardExp;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDefaultAcctCorpCardExp(): array
    {
        return $this->defaultAcctCorpCardExp;
    }

    /**
     * @param SearchColumnSelectField[] $defaultExpenseReportCurrency
     * @return EmployeeSearchRowBasic
     */
    public function setDefaultExpenseReportCurrency(SearchColumnSelectField $defaultExpenseReportCurrency): EmployeeSearchRowBasic
    {
        $this->defaultExpenseReportCurrency[] = $defaultExpenseReportCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDefaultExpenseReportCurrency(): array
    {
        return $this->defaultExpenseReportCurrency;
    }

    /**
     * @param SearchColumnStringField[] $defaultTaxReg
     * @return EmployeeSearchRowBasic
     */
    public function setDefaultTaxReg(SearchColumnStringField $defaultTaxReg): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $department
     * @return EmployeeSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): EmployeeSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnBooleanField[] $eligibleForCommission
     * @return EmployeeSearchRowBasic
     */
    public function setEligibleForCommission(SearchColumnBooleanField $eligibleForCommission): EmployeeSearchRowBasic
    {
        $this->eligibleForCommission[] = $eligibleForCommission;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getEligibleForCommission(): array
    {
        return $this->eligibleForCommission;
    }

    /**
     * @param SearchColumnStringField[] $email
     * @return EmployeeSearchRowBasic
     */
    public function setEmail(SearchColumnStringField $email): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $employeeStatus
     * @return EmployeeSearchRowBasic
     */
    public function setEmployeeStatus(SearchColumnSelectField $employeeStatus): EmployeeSearchRowBasic
    {
        $this->employeeStatus[] = $employeeStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeStatus(): array
    {
        return $this->employeeStatus;
    }

    /**
     * @param SearchColumnSelectField[] $employeeType
     * @return EmployeeSearchRowBasic
     */
    public function setEmployeeType(SearchColumnSelectField $employeeType): EmployeeSearchRowBasic
    {
        $this->employeeType[] = $employeeType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeType(): array
    {
        return $this->employeeType;
    }

    /**
     * @param SearchColumnStringField[] $entityId
     * @return EmployeeSearchRowBasic
     */
    public function setEntityId(SearchColumnStringField $entityId): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setEntityNumber(SearchColumnLongField $entityNumber): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $ethnicity
     * @return EmployeeSearchRowBasic
     */
    public function setEthnicity(SearchColumnSelectField $ethnicity): EmployeeSearchRowBasic
    {
        $this->ethnicity[] = $ethnicity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEthnicity(): array
    {
        return $this->ethnicity;
    }

    /**
     * @param SearchColumnDoubleField[] $expenseLimit
     * @return EmployeeSearchRowBasic
     */
    public function setExpenseLimit(SearchColumnDoubleField $expenseLimit): EmployeeSearchRowBasic
    {
        $this->expenseLimit[] = $expenseLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getExpenseLimit(): array
    {
        return $this->expenseLimit;
    }

    /**
     * @param SearchColumnSelectField[] $expenseReportCurrency
     * @return EmployeeSearchRowBasic
     */
    public function setExpenseReportCurrency(SearchColumnSelectField $expenseReportCurrency): EmployeeSearchRowBasic
    {
        $this->expenseReportCurrency[] = $expenseReportCurrency;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExpenseReportCurrency(): array
    {
        return $this->expenseReportCurrency;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return EmployeeSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setFax(SearchColumnStringField $fax): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $firstName
     * @return EmployeeSearchRowBasic
     */
    public function setFirstName(SearchColumnStringField $firstName): EmployeeSearchRowBasic
    {
        $this->firstName[] = $firstName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getFirstName(): array
    {
        return $this->firstName;
    }

    /**
     * @param SearchColumnEnumSelectField[] $gender
     * @return EmployeeSearchRowBasic
     */
    public function setGender(SearchColumnEnumSelectField $gender): EmployeeSearchRowBasic
    {
        $this->gender[] = $gender;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGender(): array
    {
        return $this->gender;
    }

    /**
     * @param SearchColumnBooleanField[] $giveAccess
     * @return EmployeeSearchRowBasic
     */
    public function setGiveAccess(SearchColumnBooleanField $giveAccess): EmployeeSearchRowBasic
    {
        $this->giveAccess[] = $giveAccess;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getGiveAccess(): array
    {
        return $this->giveAccess;
    }

    /**
     * @param SearchColumnEnumSelectField[] $globalSubscriptionStatus
     * @return EmployeeSearchRowBasic
     */
    public function setGlobalSubscriptionStatus(SearchColumnEnumSelectField $globalSubscriptionStatus): EmployeeSearchRowBasic
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
     * @param SearchColumnDateField[] $hireDate
     * @return EmployeeSearchRowBasic
     */
    public function setHireDate(SearchColumnDateField $hireDate): EmployeeSearchRowBasic
    {
        $this->hireDate[] = $hireDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getHireDate(): array
    {
        return $this->hireDate;
    }

    /**
     * @param SearchColumnStringField[] $homePhone
     * @return EmployeeSearchRowBasic
     */
    public function setHomePhone(SearchColumnStringField $homePhone): EmployeeSearchRowBasic
    {
        $this->homePhone[] = $homePhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHomePhone(): array
    {
        return $this->homePhone;
    }

    /**
     * @param SearchColumnSelectField[] $image
     * @return EmployeeSearchRowBasic
     */
    public function setImage(SearchColumnSelectField $image): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return EmployeeSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setIsDefaultBilling(SearchColumnBooleanField $isDefaultBilling): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setIsDefaultShipping(SearchColumnBooleanField $isDefaultShipping): EmployeeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isInactive
     * @return EmployeeSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): EmployeeSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isJobManager
     * @return EmployeeSearchRowBasic
     */
    public function setIsJobManager(SearchColumnBooleanField $isJobManager): EmployeeSearchRowBasic
    {
        $this->isJobManager[] = $isJobManager;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobManager(): array
    {
        return $this->isJobManager;
    }

    /**
     * @param SearchColumnBooleanField[] $isJobResource
     * @return EmployeeSearchRowBasic
     */
    public function setIsJobResource(SearchColumnBooleanField $isJobResource): EmployeeSearchRowBasic
    {
        $this->isJobResource[] = $isJobResource;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsJobResource(): array
    {
        return $this->isJobResource;
    }

    /**
     * @param SearchColumnBooleanField[] $isSalesRep
     * @return EmployeeSearchRowBasic
     */
    public function setIsSalesRep(SearchColumnBooleanField $isSalesRep): EmployeeSearchRowBasic
    {
        $this->isSalesRep[] = $isSalesRep;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSalesRep(): array
    {
        return $this->isSalesRep;
    }

    /**
     * @param SearchColumnBooleanField[] $isSupportRep
     * @return EmployeeSearchRowBasic
     */
    public function setIsSupportRep(SearchColumnBooleanField $isSupportRep): EmployeeSearchRowBasic
    {
        $this->isSupportRep[] = $isSupportRep;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsSupportRep(): array
    {
        return $this->isSupportRep;
    }

    /**
     * @param SearchColumnBooleanField[] $isTemplate
     * @return EmployeeSearchRowBasic
     */
    public function setIsTemplate(SearchColumnBooleanField $isTemplate): EmployeeSearchRowBasic
    {
        $this->isTemplate[] = $isTemplate;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsTemplate(): array
    {
        return $this->isTemplate;
    }

    /**
     * @param SearchColumnSelectField[] $job
     * @return EmployeeSearchRowBasic
     */
    public function setJob(SearchColumnSelectField $job): EmployeeSearchRowBasic
    {
        $this->job[] = $job;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getJob(): array
    {
        return $this->job;
    }

    /**
     * @param SearchColumnDoubleField[] $laborCost
     * @return EmployeeSearchRowBasic
     */
    public function setLaborCost(SearchColumnDoubleField $laborCost): EmployeeSearchRowBasic
    {
        $this->laborCost[] = $laborCost;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getLaborCost(): array
    {
        return $this->laborCost;
    }

    /**
     * @param SearchColumnEnumSelectField[] $language
     * @return EmployeeSearchRowBasic
     */
    public function setLanguage(SearchColumnEnumSelectField $language): EmployeeSearchRowBasic
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
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return EmployeeSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $lastName
     * @return EmployeeSearchRowBasic
     */
    public function setLastName(SearchColumnStringField $lastName): EmployeeSearchRowBasic
    {
        $this->lastName[] = $lastName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLastName(): array
    {
        return $this->lastName;
    }

    /**
     * @param SearchColumnDateField[] $lastPaidDate
     * @return EmployeeSearchRowBasic
     */
    public function setLastPaidDate(SearchColumnDateField $lastPaidDate): EmployeeSearchRowBasic
    {
        $this->lastPaidDate[] = $lastPaidDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastPaidDate(): array
    {
        return $this->lastPaidDate;
    }

    /**
     * @param SearchColumnDateField[] $lastReviewDate
     * @return EmployeeSearchRowBasic
     */
    public function setLastReviewDate(SearchColumnDateField $lastReviewDate): EmployeeSearchRowBasic
    {
        $this->lastReviewDate[] = $lastReviewDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastReviewDate(): array
    {
        return $this->lastReviewDate;
    }

    /**
     * @param SearchColumnEnumSelectField[] $level
     * @return EmployeeSearchRowBasic
     */
    public function setLevel(SearchColumnEnumSelectField $level): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $location
     * @return EmployeeSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): EmployeeSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $maritalStatus
     * @return EmployeeSearchRowBasic
     */
    public function setMaritalStatus(SearchColumnSelectField $maritalStatus): EmployeeSearchRowBasic
    {
        $this->maritalStatus[] = $maritalStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getMaritalStatus(): array
    {
        return $this->maritalStatus;
    }

    /**
     * @param SearchColumnStringField[] $middleName
     * @return EmployeeSearchRowBasic
     */
    public function setMiddleName(SearchColumnStringField $middleName): EmployeeSearchRowBasic
    {
        $this->middleName[] = $middleName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMiddleName(): array
    {
        return $this->middleName;
    }

    /**
     * @param SearchColumnStringField[] $mobilePhone
     * @return EmployeeSearchRowBasic
     */
    public function setMobilePhone(SearchColumnStringField $mobilePhone): EmployeeSearchRowBasic
    {
        $this->mobilePhone[] = $mobilePhone;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMobilePhone(): array
    {
        return $this->mobilePhone;
    }

    /**
     * @param SearchColumnDateField[] $nextReviewDate
     * @return EmployeeSearchRowBasic
     */
    public function setNextReviewDate(SearchColumnDateField $nextReviewDate): EmployeeSearchRowBasic
    {
        $this->nextReviewDate[] = $nextReviewDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextReviewDate(): array
    {
        return $this->nextReviewDate;
    }

    /**
     * @param SearchColumnBooleanField[] $offlineAccess
     * @return EmployeeSearchRowBasic
     */
    public function setOfflineAccess(SearchColumnBooleanField $offlineAccess): EmployeeSearchRowBasic
    {
        $this->offlineAccess[] = $offlineAccess;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOfflineAccess(): array
    {
        return $this->offlineAccess;
    }

    /**
     * @param SearchColumnEnumSelectField[] $payFrequency
     * @return EmployeeSearchRowBasic
     */
    public function setPayFrequency(SearchColumnEnumSelectField $payFrequency): EmployeeSearchRowBasic
    {
        $this->payFrequency[] = $payFrequency;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPayFrequency(): array
    {
        return $this->payFrequency;
    }

    /**
     * @param SearchColumnDateField[] $permChangeDate
     * @return EmployeeSearchRowBasic
     */
    public function setPermChangeDate(SearchColumnDateField $permChangeDate): EmployeeSearchRowBasic
    {
        $this->permChangeDate[] = $permChangeDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getPermChangeDate(): array
    {
        return $this->permChangeDate;
    }

    /**
     * @param SearchColumnStringField[] $permChangeLevel
     * @return EmployeeSearchRowBasic
     */
    public function setPermChangeLevel(SearchColumnStringField $permChangeLevel): EmployeeSearchRowBasic
    {
        $this->permChangeLevel[] = $permChangeLevel;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPermChangeLevel(): array
    {
        return $this->permChangeLevel;
    }

    /**
     * @param SearchColumnEnumSelectField[] $permission
     * @return EmployeeSearchRowBasic
     */
    public function setPermission(SearchColumnEnumSelectField $permission): EmployeeSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $permissionChange
     * @return EmployeeSearchRowBasic
     */
    public function setPermissionChange(SearchColumnEnumSelectField $permissionChange): EmployeeSearchRowBasic
    {
        $this->permissionChange[] = $permissionChange;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getPermissionChange(): array
    {
        return $this->permissionChange;
    }

    /**
     * @param SearchColumnStringField[] $phone
     * @return EmployeeSearchRowBasic
     */
    public function setPhone(SearchColumnStringField $phone): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setPhoneticName(SearchColumnStringField $phoneticName): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $positionTitle
     * @return EmployeeSearchRowBasic
     */
    public function setPositionTitle(SearchColumnStringField $positionTitle): EmployeeSearchRowBasic
    {
        $this->positionTitle[] = $positionTitle;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPositionTitle(): array
    {
        return $this->positionTitle;
    }

    /**
     * @param SearchColumnDoubleField[] $primaryEarningAmount
     * @return EmployeeSearchRowBasic
     */
    public function setPrimaryEarningAmount(SearchColumnDoubleField $primaryEarningAmount): EmployeeSearchRowBasic
    {
        $this->primaryEarningAmount[] = $primaryEarningAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPrimaryEarningAmount(): array
    {
        return $this->primaryEarningAmount;
    }

    /**
     * @param SearchColumnStringField[] $primaryEarningItem
     * @return EmployeeSearchRowBasic
     */
    public function setPrimaryEarningItem(SearchColumnStringField $primaryEarningItem): EmployeeSearchRowBasic
    {
        $this->primaryEarningItem[] = $primaryEarningItem;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryEarningItem(): array
    {
        return $this->primaryEarningItem;
    }

    /**
     * @param SearchColumnStringField[] $primaryEarningType
     * @return EmployeeSearchRowBasic
     */
    public function setPrimaryEarningType(SearchColumnStringField $primaryEarningType): EmployeeSearchRowBasic
    {
        $this->primaryEarningType[] = $primaryEarningType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPrimaryEarningType(): array
    {
        return $this->primaryEarningType;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderApprovalLimit
     * @return EmployeeSearchRowBasic
     */
    public function setPurchaseOrderApprovalLimit(SearchColumnDoubleField $purchaseOrderApprovalLimit): EmployeeSearchRowBasic
    {
        $this->purchaseOrderApprovalLimit[] = $purchaseOrderApprovalLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderApprovalLimit(): array
    {
        return $this->purchaseOrderApprovalLimit;
    }

    /**
     * @param SearchColumnSelectField[] $purchaseOrderApprover
     * @return EmployeeSearchRowBasic
     */
    public function setPurchaseOrderApprover(SearchColumnSelectField $purchaseOrderApprover): EmployeeSearchRowBasic
    {
        $this->purchaseOrderApprover[] = $purchaseOrderApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPurchaseOrderApprover(): array
    {
        return $this->purchaseOrderApprover;
    }

    /**
     * @param SearchColumnDoubleField[] $purchaseOrderLimit
     * @return EmployeeSearchRowBasic
     */
    public function setPurchaseOrderLimit(SearchColumnDoubleField $purchaseOrderLimit): EmployeeSearchRowBasic
    {
        $this->purchaseOrderLimit[] = $purchaseOrderLimit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getPurchaseOrderLimit(): array
    {
        return $this->purchaseOrderLimit;
    }

    /**
     * @param SearchColumnDateField[] $releaseDate
     * @return EmployeeSearchRowBasic
     */
    public function setReleaseDate(SearchColumnDateField $releaseDate): EmployeeSearchRowBasic
    {
        $this->releaseDate[] = $releaseDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReleaseDate(): array
    {
        return $this->releaseDate;
    }

    /**
     * @param SearchColumnSelectField[] $residentStatus
     * @return EmployeeSearchRowBasic
     */
    public function setResidentStatus(SearchColumnSelectField $residentStatus): EmployeeSearchRowBasic
    {
        $this->residentStatus[] = $residentStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResidentStatus(): array
    {
        return $this->residentStatus;
    }

    /**
     * @param SearchColumnSelectField[] $role
     * @return EmployeeSearchRowBasic
     */
    public function setRole(SearchColumnSelectField $role): EmployeeSearchRowBasic
    {
        $this->role[] = $role;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRole(): array
    {
        return $this->role;
    }

    /**
     * @param SearchColumnStringField[] $roleChange
     * @return EmployeeSearchRowBasic
     */
    public function setRoleChange(SearchColumnStringField $roleChange): EmployeeSearchRowBasic
    {
        $this->roleChange[] = $roleChange;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRoleChange(): array
    {
        return $this->roleChange;
    }

    /**
     * @param SearchColumnStringField[] $roleChangeAction
     * @return EmployeeSearchRowBasic
     */
    public function setRoleChangeAction(SearchColumnStringField $roleChangeAction): EmployeeSearchRowBasic
    {
        $this->roleChangeAction[] = $roleChangeAction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRoleChangeAction(): array
    {
        return $this->roleChangeAction;
    }

    /**
     * @param SearchColumnDateField[] $roleChangeDate
     * @return EmployeeSearchRowBasic
     */
    public function setRoleChangeDate(SearchColumnDateField $roleChangeDate): EmployeeSearchRowBasic
    {
        $this->roleChangeDate[] = $roleChangeDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getRoleChangeDate(): array
    {
        return $this->roleChangeDate;
    }

    /**
     * @param SearchColumnSelectField[] $salesRole
     * @return EmployeeSearchRowBasic
     */
    public function setSalesRole(SearchColumnSelectField $salesRole): EmployeeSearchRowBasic
    {
        $this->salesRole[] = $salesRole;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSalesRole(): array
    {
        return $this->salesRole;
    }

    /**
     * @param SearchColumnStringField[] $salutation
     * @return EmployeeSearchRowBasic
     */
    public function setSalutation(SearchColumnStringField $salutation): EmployeeSearchRowBasic
    {
        $this->salutation[] = $salutation;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSalutation(): array
    {
        return $this->salutation;
    }

    /**
     * @param SearchColumnStringField[] $shipAddressee
     * @return EmployeeSearchRowBasic
     */
    public function setShipAddressee(SearchColumnStringField $shipAddressee): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipAttention(SearchColumnStringField $shipAttention): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipCity(SearchColumnStringField $shipCity): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipCountry(SearchColumnEnumSelectField $shipCountry): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipCountryCode(SearchColumnStringField $shipCountryCode): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipPhone(SearchColumnStringField $shipPhone): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipState(SearchColumnStringField $shipState): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setShipZip(SearchColumnStringField $shipZip): EmployeeSearchRowBasic
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
     * @param SearchColumnStringField[] $socialSecurityNumber
     * @return EmployeeSearchRowBasic
     */
    public function setSocialSecurityNumber(SearchColumnStringField $socialSecurityNumber): EmployeeSearchRowBasic
    {
        $this->socialSecurityNumber[] = $socialSecurityNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getSocialSecurityNumber(): array
    {
        return $this->socialSecurityNumber;
    }

    /**
     * @param SearchColumnDateField[] $startDateTimeOffCalc
     * @return EmployeeSearchRowBasic
     */
    public function setStartDateTimeOffCalc(SearchColumnDateField $startDateTimeOffCalc): EmployeeSearchRowBasic
    {
        $this->startDateTimeOffCalc[] = $startDateTimeOffCalc;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDateTimeOffCalc(): array
    {
        return $this->startDateTimeOffCalc;
    }

    /**
     * @param SearchColumnEnumSelectField[] $state
     * @return EmployeeSearchRowBasic
     */
    public function setState(SearchColumnEnumSelectField $state): EmployeeSearchRowBasic
    {
        $this->state[] = $state;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getState(): array
    {
        return $this->state;
    }

    /**
     * @param SearchColumnSelectField[] $subscription
     * @return EmployeeSearchRowBasic
     */
    public function setSubscription(SearchColumnSelectField $subscription): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setSubscriptionDate(SearchColumnDateField $subscriptionDate): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setSubscriptionStatus(SearchColumnBooleanField $subscriptionStatus): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): EmployeeSearchRowBasic
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
     * @param SearchColumnSelectField[] $supervisor
     * @return EmployeeSearchRowBasic
     */
    public function setSupervisor(SearchColumnSelectField $supervisor): EmployeeSearchRowBasic
    {
        $this->supervisor[] = $supervisor;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSupervisor(): array
    {
        return $this->supervisor;
    }

    /**
     * @param SearchColumnDoubleField[] $targetUtilization
     * @return EmployeeSearchRowBasic
     */
    public function setTargetUtilization(SearchColumnDoubleField $targetUtilization): EmployeeSearchRowBasic
    {
        $this->targetUtilization[] = $targetUtilization;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTargetUtilization(): array
    {
        return $this->targetUtilization;
    }

    /**
     * @param SearchColumnEnumSelectField[] $terminationCategory
     * @return EmployeeSearchRowBasic
     */
    public function setTerminationCategory(SearchColumnEnumSelectField $terminationCategory): EmployeeSearchRowBasic
    {
        $this->terminationCategory[] = $terminationCategory;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTerminationCategory(): array
    {
        return $this->terminationCategory;
    }

    /**
     * @param SearchColumnStringField[] $terminationDetails
     * @return EmployeeSearchRowBasic
     */
    public function setTerminationDetails(SearchColumnStringField $terminationDetails): EmployeeSearchRowBasic
    {
        $this->terminationDetails[] = $terminationDetails;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTerminationDetails(): array
    {
        return $this->terminationDetails;
    }

    /**
     * @param SearchColumnSelectField[] $terminationReason
     * @return EmployeeSearchRowBasic
     */
    public function setTerminationReason(SearchColumnSelectField $terminationReason): EmployeeSearchRowBasic
    {
        $this->terminationReason[] = $terminationReason;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTerminationReason(): array
    {
        return $this->terminationReason;
    }

    /**
     * @param SearchColumnEnumSelectField[] $terminationRegretted
     * @return EmployeeSearchRowBasic
     */
    public function setTerminationRegretted(SearchColumnEnumSelectField $terminationRegretted): EmployeeSearchRowBasic
    {
        $this->terminationRegretted[] = $terminationRegretted;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getTerminationRegretted(): array
    {
        return $this->terminationRegretted;
    }

    /**
     * @param SearchColumnSelectField[] $timeApprover
     * @return EmployeeSearchRowBasic
     */
    public function setTimeApprover(SearchColumnSelectField $timeApprover): EmployeeSearchRowBasic
    {
        $this->timeApprover[] = $timeApprover;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTimeApprover(): array
    {
        return $this->timeApprover;
    }

    /**
     * @param SearchColumnStringField[] $timeOffPlan
     * @return EmployeeSearchRowBasic
     */
    public function setTimeOffPlan(SearchColumnStringField $timeOffPlan): EmployeeSearchRowBasic
    {
        $this->timeOffPlan[] = $timeOffPlan;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTimeOffPlan(): array
    {
        return $this->timeOffPlan;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return EmployeeSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): EmployeeSearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnBooleanField[] $usePerquest
     * @return EmployeeSearchRowBasic
     */
    public function setUsePerquest(SearchColumnBooleanField $usePerquest): EmployeeSearchRowBasic
    {
        $this->usePerquest[] = $usePerquest;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUsePerquest(): array
    {
        return $this->usePerquest;
    }

    /**
     * @param SearchColumnBooleanField[] $useTimeData
     * @return EmployeeSearchRowBasic
     */
    public function setUseTimeData(SearchColumnBooleanField $useTimeData): EmployeeSearchRowBasic
    {
        $this->useTimeData[] = $useTimeData;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseTimeData(): array
    {
        return $this->useTimeData;
    }

    /**
     * @param SearchColumnDateField[] $visaExpDate
     * @return EmployeeSearchRowBasic
     */
    public function setVisaExpDate(SearchColumnDateField $visaExpDate): EmployeeSearchRowBasic
    {
        $this->visaExpDate[] = $visaExpDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getVisaExpDate(): array
    {
        return $this->visaExpDate;
    }

    /**
     * @param SearchColumnSelectField[] $visaType
     * @return EmployeeSearchRowBasic
     */
    public function setVisaType(SearchColumnSelectField $visaType): EmployeeSearchRowBasic
    {
        $this->visaType[] = $visaType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVisaType(): array
    {
        return $this->visaType;
    }

    /**
     * @param SearchColumnStringField[] $workCalendar
     * @return EmployeeSearchRowBasic
     */
    public function setWorkCalendar(SearchColumnStringField $workCalendar): EmployeeSearchRowBasic
    {
        $this->workCalendar[] = $workCalendar;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getWorkCalendar(): array
    {
        return $this->workCalendar;
    }

    /**
     * @param SearchColumnSelectField[] $workplace
     * @return EmployeeSearchRowBasic
     */
    public function setWorkplace(SearchColumnSelectField $workplace): EmployeeSearchRowBasic
    {
        $this->workplace[] = $workplace;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getWorkplace(): array
    {
        return $this->workplace;
    }

    /**
     * @param SearchColumnStringField[] $zipCode
     * @return EmployeeSearchRowBasic
     */
    public function setZipCode(SearchColumnStringField $zipCode): EmployeeSearchRowBasic
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
     * @return EmployeeSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): EmployeeSearchRowBasic
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
