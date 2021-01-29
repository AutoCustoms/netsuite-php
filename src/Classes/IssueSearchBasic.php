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

class IssueSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchLongField
     */
    protected SearchLongField $ageInMonths;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $assigned;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buildBroken;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $buildBrokenName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buildFixed;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $buildFixedName;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $buildTarget;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $buildTargetName;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $caseCount;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $caseNumber;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $closedDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $createdDate;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateReleased;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $details;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $duplicateOf;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $eFix;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $employeeOrTeam;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $eventStatus;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalAbstract;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalDetails;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalFixedIn;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalStatus;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $fixed;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $fixedBy;

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
    protected SearchBooleanField $isOwner;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isReviewed;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isShowStopper;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $issueAbstract;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $issueNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $item;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $module;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $number;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $originalFixedIn;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $priority;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $product;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $productTeam;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $relatedIssue;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $relationship;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $relationshipComment;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $reportedBy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $reproduce;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $resolved;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $resolvedBy;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $reviewer;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $severity;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $source;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $status;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $tags;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $tracking;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $type;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $userType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $versionBroken;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $versionFixed;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $versionTarget;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "ageInMonths" => "SearchLongField",
        "assigned" => "SearchMultiSelectField",
        "buildBroken" => "SearchMultiSelectField",
        "buildBrokenName" => "SearchStringField",
        "buildFixed" => "SearchMultiSelectField",
        "buildFixedName" => "SearchStringField",
        "buildTarget" => "SearchMultiSelectField",
        "buildTargetName" => "SearchStringField",
        "caseCount" => "SearchLongField",
        "caseNumber" => "SearchStringField",
        "closedDate" => "SearchDateField",
        "createdDate" => "SearchDateField",
        "dateReleased" => "SearchDateField",
        "details" => "SearchStringField",
        "duplicateOf" => "SearchMultiSelectField",
        "eFix" => "SearchBooleanField",
        "employeeOrTeam" => "SearchMultiSelectField",
        "eventStatus" => "SearchEnumMultiSelectField",
        "externalAbstract" => "SearchStringField",
        "externalDetails" => "SearchStringField",
        "externalFixedIn" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "externalStatus" => "SearchMultiSelectField",
        "fixed" => "SearchDateField",
        "fixedBy" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isOwner" => "SearchBooleanField",
        "isReviewed" => "SearchBooleanField",
        "isShowStopper" => "SearchBooleanField",
        "issueAbstract" => "SearchStringField",
        "issueNumber" => "SearchStringField",
        "item" => "SearchMultiSelectField",
        "lastModifiedDate" => "SearchDateField",
        "module" => "SearchMultiSelectField",
        "number" => "SearchLongField",
        "originalFixedIn" => "SearchStringField",
        "priority" => "SearchMultiSelectField",
        "product" => "SearchMultiSelectField",
        "productTeam" => "SearchMultiSelectField",
        "relatedIssue" => "SearchMultiSelectField",
        "relationship" => "SearchEnumMultiSelectField",
        "relationshipComment" => "SearchStringField",
        "reportedBy" => "SearchMultiSelectField",
        "reproduce" => "SearchMultiSelectField",
        "resolved" => "SearchDateField",
        "resolvedBy" => "SearchMultiSelectField",
        "reviewer" => "SearchMultiSelectField",
        "severity" => "SearchMultiSelectField",
        "source" => "SearchEnumMultiSelectField",
        "status" => "SearchMultiSelectField",
        "tags" => "SearchMultiSelectField",
        "tracking" => "SearchBooleanField",
        "type" => "SearchMultiSelectField",
        "userType" => "SearchMultiSelectField",
        "versionBroken" => "SearchMultiSelectField",
        "versionFixed" => "SearchMultiSelectField",
        "versionTarget" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchLongField $ageInMonths
     * @return IssueSearchBasic
     */
    public function setAgeInMonths(SearchLongField $ageInMonths): IssueSearchBasic
    {
        $this->ageInMonths = $ageInMonths;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAgeInMonths(): SearchLongField
    {
        return $this->ageInMonths;
    }

    /**
     * @param SearchMultiSelectField $assigned
     * @return IssueSearchBasic
     */
    public function setAssigned(SearchMultiSelectField $assigned): IssueSearchBasic
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAssigned(): SearchMultiSelectField
    {
        return $this->assigned;
    }

    /**
     * @param SearchMultiSelectField $buildBroken
     * @return IssueSearchBasic
     */
    public function setBuildBroken(SearchMultiSelectField $buildBroken): IssueSearchBasic
    {
        $this->buildBroken = $buildBroken;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildBroken(): SearchMultiSelectField
    {
        return $this->buildBroken;
    }

    /**
     * @param SearchStringField $buildBrokenName
     * @return IssueSearchBasic
     */
    public function setBuildBrokenName(SearchStringField $buildBrokenName): IssueSearchBasic
    {
        $this->buildBrokenName = $buildBrokenName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildBrokenName(): SearchStringField
    {
        return $this->buildBrokenName;
    }

    /**
     * @param SearchMultiSelectField $buildFixed
     * @return IssueSearchBasic
     */
    public function setBuildFixed(SearchMultiSelectField $buildFixed): IssueSearchBasic
    {
        $this->buildFixed = $buildFixed;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildFixed(): SearchMultiSelectField
    {
        return $this->buildFixed;
    }

    /**
     * @param SearchStringField $buildFixedName
     * @return IssueSearchBasic
     */
    public function setBuildFixedName(SearchStringField $buildFixedName): IssueSearchBasic
    {
        $this->buildFixedName = $buildFixedName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildFixedName(): SearchStringField
    {
        return $this->buildFixedName;
    }

    /**
     * @param SearchMultiSelectField $buildTarget
     * @return IssueSearchBasic
     */
    public function setBuildTarget(SearchMultiSelectField $buildTarget): IssueSearchBasic
    {
        $this->buildTarget = $buildTarget;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBuildTarget(): SearchMultiSelectField
    {
        return $this->buildTarget;
    }

    /**
     * @param SearchStringField $buildTargetName
     * @return IssueSearchBasic
     */
    public function setBuildTargetName(SearchStringField $buildTargetName): IssueSearchBasic
    {
        $this->buildTargetName = $buildTargetName;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getBuildTargetName(): SearchStringField
    {
        return $this->buildTargetName;
    }

    /**
     * @param SearchLongField $caseCount
     * @return IssueSearchBasic
     */
    public function setCaseCount(SearchLongField $caseCount): IssueSearchBasic
    {
        $this->caseCount = $caseCount;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getCaseCount(): SearchLongField
    {
        return $this->caseCount;
    }

    /**
     * @param SearchStringField $caseNumber
     * @return IssueSearchBasic
     */
    public function setCaseNumber(SearchStringField $caseNumber): IssueSearchBasic
    {
        $this->caseNumber = $caseNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getCaseNumber(): SearchStringField
    {
        return $this->caseNumber;
    }

    /**
     * @param SearchDateField $closedDate
     * @return IssueSearchBasic
     */
    public function setClosedDate(SearchDateField $closedDate): IssueSearchBasic
    {
        $this->closedDate = $closedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getClosedDate(): SearchDateField
    {
        return $this->closedDate;
    }

    /**
     * @param SearchDateField $createdDate
     * @return IssueSearchBasic
     */
    public function setCreatedDate(SearchDateField $createdDate): IssueSearchBasic
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreatedDate(): SearchDateField
    {
        return $this->createdDate;
    }

    /**
     * @param SearchDateField $dateReleased
     * @return IssueSearchBasic
     */
    public function setDateReleased(SearchDateField $dateReleased): IssueSearchBasic
    {
        $this->dateReleased = $dateReleased;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateReleased(): SearchDateField
    {
        return $this->dateReleased;
    }

    /**
     * @param SearchStringField $details
     * @return IssueSearchBasic
     */
    public function setDetails(SearchStringField $details): IssueSearchBasic
    {
        $this->details = $details;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDetails(): SearchStringField
    {
        return $this->details;
    }

    /**
     * @param SearchMultiSelectField $duplicateOf
     * @return IssueSearchBasic
     */
    public function setDuplicateOf(SearchMultiSelectField $duplicateOf): IssueSearchBasic
    {
        $this->duplicateOf = $duplicateOf;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDuplicateOf(): SearchMultiSelectField
    {
        return $this->duplicateOf;
    }

    /**
     * @param SearchBooleanField $eFix
     * @return IssueSearchBasic
     */
    public function setEFix(SearchBooleanField $eFix): IssueSearchBasic
    {
        $this->eFix = $eFix;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getEFix(): SearchBooleanField
    {
        return $this->eFix;
    }

    /**
     * @param SearchMultiSelectField $employeeOrTeam
     * @return IssueSearchBasic
     */
    public function setEmployeeOrTeam(SearchMultiSelectField $employeeOrTeam): IssueSearchBasic
    {
        $this->employeeOrTeam = $employeeOrTeam;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getEmployeeOrTeam(): SearchMultiSelectField
    {
        return $this->employeeOrTeam;
    }

    /**
     * @param SearchEnumMultiSelectField $eventStatus
     * @return IssueSearchBasic
     */
    public function setEventStatus(SearchEnumMultiSelectField $eventStatus): IssueSearchBasic
    {
        $this->eventStatus = $eventStatus;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getEventStatus(): SearchEnumMultiSelectField
    {
        return $this->eventStatus;
    }

    /**
     * @param SearchStringField $externalAbstract
     * @return IssueSearchBasic
     */
    public function setExternalAbstract(SearchStringField $externalAbstract): IssueSearchBasic
    {
        $this->externalAbstract = $externalAbstract;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalAbstract(): SearchStringField
    {
        return $this->externalAbstract;
    }

    /**
     * @param SearchStringField $externalDetails
     * @return IssueSearchBasic
     */
    public function setExternalDetails(SearchStringField $externalDetails): IssueSearchBasic
    {
        $this->externalDetails = $externalDetails;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalDetails(): SearchStringField
    {
        return $this->externalDetails;
    }

    /**
     * @param SearchMultiSelectField $externalFixedIn
     * @return IssueSearchBasic
     */
    public function setExternalFixedIn(SearchMultiSelectField $externalFixedIn): IssueSearchBasic
    {
        $this->externalFixedIn = $externalFixedIn;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalFixedIn(): SearchMultiSelectField
    {
        return $this->externalFixedIn;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return IssueSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): IssueSearchBasic
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
     * @return IssueSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): IssueSearchBasic
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
     * @param SearchMultiSelectField $externalStatus
     * @return IssueSearchBasic
     */
    public function setExternalStatus(SearchMultiSelectField $externalStatus): IssueSearchBasic
    {
        $this->externalStatus = $externalStatus;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalStatus(): SearchMultiSelectField
    {
        return $this->externalStatus;
    }

    /**
     * @param SearchDateField $fixed
     * @return IssueSearchBasic
     */
    public function setFixed(SearchDateField $fixed): IssueSearchBasic
    {
        $this->fixed = $fixed;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getFixed(): SearchDateField
    {
        return $this->fixed;
    }

    /**
     * @param SearchMultiSelectField $fixedBy
     * @return IssueSearchBasic
     */
    public function setFixedBy(SearchMultiSelectField $fixedBy): IssueSearchBasic
    {
        $this->fixedBy = $fixedBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFixedBy(): SearchMultiSelectField
    {
        return $this->fixedBy;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return IssueSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): IssueSearchBasic
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
     * @return IssueSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): IssueSearchBasic
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
     * @param SearchBooleanField $isOwner
     * @return IssueSearchBasic
     */
    public function setIsOwner(SearchBooleanField $isOwner): IssueSearchBasic
    {
        $this->isOwner = $isOwner;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOwner(): SearchBooleanField
    {
        return $this->isOwner;
    }

    /**
     * @param SearchBooleanField $isReviewed
     * @return IssueSearchBasic
     */
    public function setIsReviewed(SearchBooleanField $isReviewed): IssueSearchBasic
    {
        $this->isReviewed = $isReviewed;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsReviewed(): SearchBooleanField
    {
        return $this->isReviewed;
    }

    /**
     * @param SearchBooleanField $isShowStopper
     * @return IssueSearchBasic
     */
    public function setIsShowStopper(SearchBooleanField $isShowStopper): IssueSearchBasic
    {
        $this->isShowStopper = $isShowStopper;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsShowStopper(): SearchBooleanField
    {
        return $this->isShowStopper;
    }

    /**
     * @param SearchStringField $issueAbstract
     * @return IssueSearchBasic
     */
    public function setIssueAbstract(SearchStringField $issueAbstract): IssueSearchBasic
    {
        $this->issueAbstract = $issueAbstract;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIssueAbstract(): SearchStringField
    {
        return $this->issueAbstract;
    }

    /**
     * @param SearchStringField $issueNumber
     * @return IssueSearchBasic
     */
    public function setIssueNumber(SearchStringField $issueNumber): IssueSearchBasic
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIssueNumber(): SearchStringField
    {
        return $this->issueNumber;
    }

    /**
     * @param SearchMultiSelectField $item
     * @return IssueSearchBasic
     */
    public function setItem(SearchMultiSelectField $item): IssueSearchBasic
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getItem(): SearchMultiSelectField
    {
        return $this->item;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return IssueSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): IssueSearchBasic
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
     * @param SearchMultiSelectField $module
     * @return IssueSearchBasic
     */
    public function setModule(SearchMultiSelectField $module): IssueSearchBasic
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getModule(): SearchMultiSelectField
    {
        return $this->module;
    }

    /**
     * @param SearchLongField $number
     * @return IssueSearchBasic
     */
    public function setNumber(SearchLongField $number): IssueSearchBasic
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumber(): SearchLongField
    {
        return $this->number;
    }

    /**
     * @param SearchStringField $originalFixedIn
     * @return IssueSearchBasic
     */
    public function setOriginalFixedIn(SearchStringField $originalFixedIn): IssueSearchBasic
    {
        $this->originalFixedIn = $originalFixedIn;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getOriginalFixedIn(): SearchStringField
    {
        return $this->originalFixedIn;
    }

    /**
     * @param SearchMultiSelectField $priority
     * @return IssueSearchBasic
     */
    public function setPriority(SearchMultiSelectField $priority): IssueSearchBasic
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPriority(): SearchMultiSelectField
    {
        return $this->priority;
    }

    /**
     * @param SearchMultiSelectField $product
     * @return IssueSearchBasic
     */
    public function setProduct(SearchMultiSelectField $product): IssueSearchBasic
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProduct(): SearchMultiSelectField
    {
        return $this->product;
    }

    /**
     * @param SearchMultiSelectField $productTeam
     * @return IssueSearchBasic
     */
    public function setProductTeam(SearchMultiSelectField $productTeam): IssueSearchBasic
    {
        $this->productTeam = $productTeam;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getProductTeam(): SearchMultiSelectField
    {
        return $this->productTeam;
    }

    /**
     * @param SearchMultiSelectField $relatedIssue
     * @return IssueSearchBasic
     */
    public function setRelatedIssue(SearchMultiSelectField $relatedIssue): IssueSearchBasic
    {
        $this->relatedIssue = $relatedIssue;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRelatedIssue(): SearchMultiSelectField
    {
        return $this->relatedIssue;
    }

    /**
     * @param SearchEnumMultiSelectField $relationship
     * @return IssueSearchBasic
     */
    public function setRelationship(SearchEnumMultiSelectField $relationship): IssueSearchBasic
    {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRelationship(): SearchEnumMultiSelectField
    {
        return $this->relationship;
    }

    /**
     * @param SearchStringField $relationshipComment
     * @return IssueSearchBasic
     */
    public function setRelationshipComment(SearchStringField $relationshipComment): IssueSearchBasic
    {
        $this->relationshipComment = $relationshipComment;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getRelationshipComment(): SearchStringField
    {
        return $this->relationshipComment;
    }

    /**
     * @param SearchMultiSelectField $reportedBy
     * @return IssueSearchBasic
     */
    public function setReportedBy(SearchMultiSelectField $reportedBy): IssueSearchBasic
    {
        $this->reportedBy = $reportedBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReportedBy(): SearchMultiSelectField
    {
        return $this->reportedBy;
    }

    /**
     * @param SearchMultiSelectField $reproduce
     * @return IssueSearchBasic
     */
    public function setReproduce(SearchMultiSelectField $reproduce): IssueSearchBasic
    {
        $this->reproduce = $reproduce;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReproduce(): SearchMultiSelectField
    {
        return $this->reproduce;
    }

    /**
     * @param SearchDateField $resolved
     * @return IssueSearchBasic
     */
    public function setResolved(SearchDateField $resolved): IssueSearchBasic
    {
        $this->resolved = $resolved;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getResolved(): SearchDateField
    {
        return $this->resolved;
    }

    /**
     * @param SearchMultiSelectField $resolvedBy
     * @return IssueSearchBasic
     */
    public function setResolvedBy(SearchMultiSelectField $resolvedBy): IssueSearchBasic
    {
        $this->resolvedBy = $resolvedBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getResolvedBy(): SearchMultiSelectField
    {
        return $this->resolvedBy;
    }

    /**
     * @param SearchMultiSelectField $reviewer
     * @return IssueSearchBasic
     */
    public function setReviewer(SearchMultiSelectField $reviewer): IssueSearchBasic
    {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getReviewer(): SearchMultiSelectField
    {
        return $this->reviewer;
    }

    /**
     * @param SearchMultiSelectField $severity
     * @return IssueSearchBasic
     */
    public function setSeverity(SearchMultiSelectField $severity): IssueSearchBasic
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSeverity(): SearchMultiSelectField
    {
        return $this->severity;
    }

    /**
     * @param SearchEnumMultiSelectField $source
     * @return IssueSearchBasic
     */
    public function setSource(SearchEnumMultiSelectField $source): IssueSearchBasic
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getSource(): SearchEnumMultiSelectField
    {
        return $this->source;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return IssueSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status): IssueSearchBasic
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
     * @param SearchMultiSelectField $tags
     * @return IssueSearchBasic
     */
    public function setTags(SearchMultiSelectField $tags): IssueSearchBasic
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTags(): SearchMultiSelectField
    {
        return $this->tags;
    }

    /**
     * @param SearchBooleanField $tracking
     * @return IssueSearchBasic
     */
    public function setTracking(SearchBooleanField $tracking): IssueSearchBasic
    {
        $this->tracking = $tracking;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getTracking(): SearchBooleanField
    {
        return $this->tracking;
    }

    /**
     * @param SearchMultiSelectField $type
     * @return IssueSearchBasic
     */
    public function setType(SearchMultiSelectField $type): IssueSearchBasic
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
     * @param SearchMultiSelectField $userType
     * @return IssueSearchBasic
     */
    public function setUserType(SearchMultiSelectField $userType): IssueSearchBasic
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getUserType(): SearchMultiSelectField
    {
        return $this->userType;
    }

    /**
     * @param SearchMultiSelectField $versionBroken
     * @return IssueSearchBasic
     */
    public function setVersionBroken(SearchMultiSelectField $versionBroken): IssueSearchBasic
    {
        $this->versionBroken = $versionBroken;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionBroken(): SearchMultiSelectField
    {
        return $this->versionBroken;
    }

    /**
     * @param SearchMultiSelectField $versionFixed
     * @return IssueSearchBasic
     */
    public function setVersionFixed(SearchMultiSelectField $versionFixed): IssueSearchBasic
    {
        $this->versionFixed = $versionFixed;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionFixed(): SearchMultiSelectField
    {
        return $this->versionFixed;
    }

    /**
     * @param SearchMultiSelectField $versionTarget
     * @return IssueSearchBasic
     */
    public function setVersionTarget(SearchMultiSelectField $versionTarget): IssueSearchBasic
    {
        $this->versionTarget = $versionTarget;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVersionTarget(): SearchMultiSelectField
    {
        return $this->versionTarget;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return IssueSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): IssueSearchBasic
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
