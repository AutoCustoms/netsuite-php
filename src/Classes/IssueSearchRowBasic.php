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

class IssueSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnLongField[]
     */
    protected array $ageInMonths;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $assigned;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $buildBroken;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $buildFixed;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $buildTarget;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $caseCount;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $caseNumber;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $closedDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $createdDate;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateReleased;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $duplicateOf;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $employeeOrTeam;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $eventStatus;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $externalAbstract;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $externalDetails;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $externalFixedIn;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalStatus;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $fixed;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $fixedBy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isOwner;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isReviewed;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isShowStopper;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $issueAbstract;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $issueStatus;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $module;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $number;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $originalFixedIn;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $priority;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $product;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $productTeam;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $relatedIssue;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $relationship;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $relationshipComment;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $reportedBy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $reproduce;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $resolved;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $resolvedBy;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $reviewer;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $severity;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $source;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $tags;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $type;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $userType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $versionBroken;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $versionFixed;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $versionTarget;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "ageInMonths" => "SearchColumnLongField[]",
        "assigned" => "SearchColumnSelectField[]",
        "buildBroken" => "SearchColumnSelectField[]",
        "buildFixed" => "SearchColumnSelectField[]",
        "buildTarget" => "SearchColumnSelectField[]",
        "caseCount" => "SearchColumnLongField[]",
        "caseNumber" => "SearchColumnStringField[]",
        "closedDate" => "SearchColumnDateField[]",
        "createdDate" => "SearchColumnDateField[]",
        "dateReleased" => "SearchColumnDateField[]",
        "duplicateOf" => "SearchColumnSelectField[]",
        "employeeOrTeam" => "SearchColumnSelectField[]",
        "eventStatus" => "SearchColumnEnumSelectField[]",
        "externalAbstract" => "SearchColumnStringField[]",
        "externalDetails" => "SearchColumnStringField[]",
        "externalFixedIn" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "externalStatus" => "SearchColumnSelectField[]",
        "fixed" => "SearchColumnDateField[]",
        "fixedBy" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isOwner" => "SearchColumnBooleanField[]",
        "isReviewed" => "SearchColumnBooleanField[]",
        "isShowStopper" => "SearchColumnBooleanField[]",
        "issueAbstract" => "SearchColumnStringField[]",
        "issueStatus" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "module" => "SearchColumnStringField[]",
        "number" => "SearchColumnStringField[]",
        "originalFixedIn" => "SearchColumnStringField[]",
        "priority" => "SearchColumnSelectField[]",
        "product" => "SearchColumnSelectField[]",
        "productTeam" => "SearchColumnSelectField[]",
        "relatedIssue" => "SearchColumnSelectField[]",
        "relationship" => "SearchColumnEnumSelectField[]",
        "relationshipComment" => "SearchColumnStringField[]",
        "reportedBy" => "SearchColumnSelectField[]",
        "reproduce" => "SearchColumnSelectField[]",
        "resolved" => "SearchColumnDateField[]",
        "resolvedBy" => "SearchColumnSelectField[]",
        "reviewer" => "SearchColumnSelectField[]",
        "severity" => "SearchColumnSelectField[]",
        "source" => "SearchColumnEnumSelectField[]",
        "tags" => "SearchColumnSelectField[]",
        "type" => "SearchColumnStringField[]",
        "userType" => "SearchColumnSelectField[]",
        "versionBroken" => "SearchColumnSelectField[]",
        "versionFixed" => "SearchColumnSelectField[]",
        "versionTarget" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnLongField[] $ageInMonths
     * @return IssueSearchRowBasic
     */
    public function setAgeInMonths(SearchColumnLongField $ageInMonths): IssueSearchRowBasic
    {
        $this->ageInMonths[] = $ageInMonths;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getAgeInMonths(): array
    {
        return $this->ageInMonths;
    }

    /**
     * @param SearchColumnSelectField[] $assigned
     * @return IssueSearchRowBasic
     */
    public function setAssigned(SearchColumnSelectField $assigned): IssueSearchRowBasic
    {
        $this->assigned[] = $assigned;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAssigned(): array
    {
        return $this->assigned;
    }

    /**
     * @param SearchColumnSelectField[] $buildBroken
     * @return IssueSearchRowBasic
     */
    public function setBuildBroken(SearchColumnSelectField $buildBroken): IssueSearchRowBasic
    {
        $this->buildBroken[] = $buildBroken;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildBroken(): array
    {
        return $this->buildBroken;
    }

    /**
     * @param SearchColumnSelectField[] $buildFixed
     * @return IssueSearchRowBasic
     */
    public function setBuildFixed(SearchColumnSelectField $buildFixed): IssueSearchRowBasic
    {
        $this->buildFixed[] = $buildFixed;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildFixed(): array
    {
        return $this->buildFixed;
    }

    /**
     * @param SearchColumnSelectField[] $buildTarget
     * @return IssueSearchRowBasic
     */
    public function setBuildTarget(SearchColumnSelectField $buildTarget): IssueSearchRowBasic
    {
        $this->buildTarget[] = $buildTarget;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBuildTarget(): array
    {
        return $this->buildTarget;
    }

    /**
     * @param SearchColumnLongField[] $caseCount
     * @return IssueSearchRowBasic
     */
    public function setCaseCount(SearchColumnLongField $caseCount): IssueSearchRowBasic
    {
        $this->caseCount[] = $caseCount;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getCaseCount(): array
    {
        return $this->caseCount;
    }

    /**
     * @param SearchColumnStringField[] $caseNumber
     * @return IssueSearchRowBasic
     */
    public function setCaseNumber(SearchColumnStringField $caseNumber): IssueSearchRowBasic
    {
        $this->caseNumber[] = $caseNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getCaseNumber(): array
    {
        return $this->caseNumber;
    }

    /**
     * @param SearchColumnDateField[] $closedDate
     * @return IssueSearchRowBasic
     */
    public function setClosedDate(SearchColumnDateField $closedDate): IssueSearchRowBasic
    {
        $this->closedDate[] = $closedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getClosedDate(): array
    {
        return $this->closedDate;
    }

    /**
     * @param SearchColumnDateField[] $createdDate
     * @return IssueSearchRowBasic
     */
    public function setCreatedDate(SearchColumnDateField $createdDate): IssueSearchRowBasic
    {
        $this->createdDate[] = $createdDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreatedDate(): array
    {
        return $this->createdDate;
    }

    /**
     * @param SearchColumnDateField[] $dateReleased
     * @return IssueSearchRowBasic
     */
    public function setDateReleased(SearchColumnDateField $dateReleased): IssueSearchRowBasic
    {
        $this->dateReleased[] = $dateReleased;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateReleased(): array
    {
        return $this->dateReleased;
    }

    /**
     * @param SearchColumnSelectField[] $duplicateOf
     * @return IssueSearchRowBasic
     */
    public function setDuplicateOf(SearchColumnSelectField $duplicateOf): IssueSearchRowBasic
    {
        $this->duplicateOf[] = $duplicateOf;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDuplicateOf(): array
    {
        return $this->duplicateOf;
    }

    /**
     * @param SearchColumnSelectField[] $employeeOrTeam
     * @return IssueSearchRowBasic
     */
    public function setEmployeeOrTeam(SearchColumnSelectField $employeeOrTeam): IssueSearchRowBasic
    {
        $this->employeeOrTeam[] = $employeeOrTeam;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getEmployeeOrTeam(): array
    {
        return $this->employeeOrTeam;
    }

    /**
     * @param SearchColumnEnumSelectField[] $eventStatus
     * @return IssueSearchRowBasic
     */
    public function setEventStatus(SearchColumnEnumSelectField $eventStatus): IssueSearchRowBasic
    {
        $this->eventStatus[] = $eventStatus;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getEventStatus(): array
    {
        return $this->eventStatus;
    }

    /**
     * @param SearchColumnStringField[] $externalAbstract
     * @return IssueSearchRowBasic
     */
    public function setExternalAbstract(SearchColumnStringField $externalAbstract): IssueSearchRowBasic
    {
        $this->externalAbstract[] = $externalAbstract;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalAbstract(): array
    {
        return $this->externalAbstract;
    }

    /**
     * @param SearchColumnStringField[] $externalDetails
     * @return IssueSearchRowBasic
     */
    public function setExternalDetails(SearchColumnStringField $externalDetails): IssueSearchRowBasic
    {
        $this->externalDetails[] = $externalDetails;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalDetails(): array
    {
        return $this->externalDetails;
    }

    /**
     * @param SearchColumnStringField[] $externalFixedIn
     * @return IssueSearchRowBasic
     */
    public function setExternalFixedIn(SearchColumnStringField $externalFixedIn): IssueSearchRowBasic
    {
        $this->externalFixedIn[] = $externalFixedIn;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExternalFixedIn(): array
    {
        return $this->externalFixedIn;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return IssueSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): IssueSearchRowBasic
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
     * @param SearchColumnSelectField[] $externalStatus
     * @return IssueSearchRowBasic
     */
    public function setExternalStatus(SearchColumnSelectField $externalStatus): IssueSearchRowBasic
    {
        $this->externalStatus[] = $externalStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalStatus(): array
    {
        return $this->externalStatus;
    }

    /**
     * @param SearchColumnDateField[] $fixed
     * @return IssueSearchRowBasic
     */
    public function setFixed(SearchColumnDateField $fixed): IssueSearchRowBasic
    {
        $this->fixed[] = $fixed;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getFixed(): array
    {
        return $this->fixed;
    }

    /**
     * @param SearchColumnSelectField[] $fixedBy
     * @return IssueSearchRowBasic
     */
    public function setFixedBy(SearchColumnSelectField $fixedBy): IssueSearchRowBasic
    {
        $this->fixedBy[] = $fixedBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFixedBy(): array
    {
        return $this->fixedBy;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return IssueSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): IssueSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isOwner
     * @return IssueSearchRowBasic
     */
    public function setIsOwner(SearchColumnBooleanField $isOwner): IssueSearchRowBasic
    {
        $this->isOwner[] = $isOwner;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsOwner(): array
    {
        return $this->isOwner;
    }

    /**
     * @param SearchColumnBooleanField[] $isReviewed
     * @return IssueSearchRowBasic
     */
    public function setIsReviewed(SearchColumnBooleanField $isReviewed): IssueSearchRowBasic
    {
        $this->isReviewed[] = $isReviewed;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsReviewed(): array
    {
        return $this->isReviewed;
    }

    /**
     * @param SearchColumnBooleanField[] $isShowStopper
     * @return IssueSearchRowBasic
     */
    public function setIsShowStopper(SearchColumnBooleanField $isShowStopper): IssueSearchRowBasic
    {
        $this->isShowStopper[] = $isShowStopper;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsShowStopper(): array
    {
        return $this->isShowStopper;
    }

    /**
     * @param SearchColumnStringField[] $issueAbstract
     * @return IssueSearchRowBasic
     */
    public function setIssueAbstract(SearchColumnStringField $issueAbstract): IssueSearchRowBasic
    {
        $this->issueAbstract[] = $issueAbstract;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIssueAbstract(): array
    {
        return $this->issueAbstract;
    }

    /**
     * @param SearchColumnSelectField[] $issueStatus
     * @return IssueSearchRowBasic
     */
    public function setIssueStatus(SearchColumnSelectField $issueStatus): IssueSearchRowBasic
    {
        $this->issueStatus[] = $issueStatus;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getIssueStatus(): array
    {
        return $this->issueStatus;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return IssueSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): IssueSearchRowBasic
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getItem(): array
    {
        return $this->item;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return IssueSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): IssueSearchRowBasic
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
     * @param SearchColumnStringField[] $module
     * @return IssueSearchRowBasic
     */
    public function setModule(SearchColumnStringField $module): IssueSearchRowBasic
    {
        $this->module[] = $module;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getModule(): array
    {
        return $this->module;
    }

    /**
     * @param SearchColumnStringField[] $number
     * @return IssueSearchRowBasic
     */
    public function setNumber(SearchColumnStringField $number): IssueSearchRowBasic
    {
        $this->number[] = $number;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumber(): array
    {
        return $this->number;
    }

    /**
     * @param SearchColumnStringField[] $originalFixedIn
     * @return IssueSearchRowBasic
     */
    public function setOriginalFixedIn(SearchColumnStringField $originalFixedIn): IssueSearchRowBasic
    {
        $this->originalFixedIn[] = $originalFixedIn;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getOriginalFixedIn(): array
    {
        return $this->originalFixedIn;
    }

    /**
     * @param SearchColumnSelectField[] $priority
     * @return IssueSearchRowBasic
     */
    public function setPriority(SearchColumnSelectField $priority): IssueSearchRowBasic
    {
        $this->priority[] = $priority;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getPriority(): array
    {
        return $this->priority;
    }

    /**
     * @param SearchColumnSelectField[] $product
     * @return IssueSearchRowBasic
     */
    public function setProduct(SearchColumnSelectField $product): IssueSearchRowBasic
    {
        $this->product[] = $product;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProduct(): array
    {
        return $this->product;
    }

    /**
     * @param SearchColumnSelectField[] $productTeam
     * @return IssueSearchRowBasic
     */
    public function setProductTeam(SearchColumnSelectField $productTeam): IssueSearchRowBasic
    {
        $this->productTeam[] = $productTeam;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getProductTeam(): array
    {
        return $this->productTeam;
    }

    /**
     * @param SearchColumnSelectField[] $relatedIssue
     * @return IssueSearchRowBasic
     */
    public function setRelatedIssue(SearchColumnSelectField $relatedIssue): IssueSearchRowBasic
    {
        $this->relatedIssue[] = $relatedIssue;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getRelatedIssue(): array
    {
        return $this->relatedIssue;
    }

    /**
     * @param SearchColumnEnumSelectField[] $relationship
     * @return IssueSearchRowBasic
     */
    public function setRelationship(SearchColumnEnumSelectField $relationship): IssueSearchRowBasic
    {
        $this->relationship[] = $relationship;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRelationship(): array
    {
        return $this->relationship;
    }

    /**
     * @param SearchColumnStringField[] $relationshipComment
     * @return IssueSearchRowBasic
     */
    public function setRelationshipComment(SearchColumnStringField $relationshipComment): IssueSearchRowBasic
    {
        $this->relationshipComment[] = $relationshipComment;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRelationshipComment(): array
    {
        return $this->relationshipComment;
    }

    /**
     * @param SearchColumnSelectField[] $reportedBy
     * @return IssueSearchRowBasic
     */
    public function setReportedBy(SearchColumnSelectField $reportedBy): IssueSearchRowBasic
    {
        $this->reportedBy[] = $reportedBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReportedBy(): array
    {
        return $this->reportedBy;
    }

    /**
     * @param SearchColumnSelectField[] $reproduce
     * @return IssueSearchRowBasic
     */
    public function setReproduce(SearchColumnSelectField $reproduce): IssueSearchRowBasic
    {
        $this->reproduce[] = $reproduce;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReproduce(): array
    {
        return $this->reproduce;
    }

    /**
     * @param SearchColumnDateField[] $resolved
     * @return IssueSearchRowBasic
     */
    public function setResolved(SearchColumnDateField $resolved): IssueSearchRowBasic
    {
        $this->resolved[] = $resolved;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getResolved(): array
    {
        return $this->resolved;
    }

    /**
     * @param SearchColumnSelectField[] $resolvedBy
     * @return IssueSearchRowBasic
     */
    public function setResolvedBy(SearchColumnSelectField $resolvedBy): IssueSearchRowBasic
    {
        $this->resolvedBy[] = $resolvedBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getResolvedBy(): array
    {
        return $this->resolvedBy;
    }

    /**
     * @param SearchColumnSelectField[] $reviewer
     * @return IssueSearchRowBasic
     */
    public function setReviewer(SearchColumnSelectField $reviewer): IssueSearchRowBasic
    {
        $this->reviewer[] = $reviewer;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getReviewer(): array
    {
        return $this->reviewer;
    }

    /**
     * @param SearchColumnSelectField[] $severity
     * @return IssueSearchRowBasic
     */
    public function setSeverity(SearchColumnSelectField $severity): IssueSearchRowBasic
    {
        $this->severity[] = $severity;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSeverity(): array
    {
        return $this->severity;
    }

    /**
     * @param SearchColumnEnumSelectField[] $source
     * @return IssueSearchRowBasic
     */
    public function setSource(SearchColumnEnumSelectField $source): IssueSearchRowBasic
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getSource(): array
    {
        return $this->source;
    }

    /**
     * @param SearchColumnSelectField[] $tags
     * @return IssueSearchRowBasic
     */
    public function setTags(SearchColumnSelectField $tags): IssueSearchRowBasic
    {
        $this->tags[] = $tags;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param SearchColumnStringField[] $type
     * @return IssueSearchRowBasic
     */
    public function setType(SearchColumnStringField $type): IssueSearchRowBasic
    {
        $this->type[] = $type;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * @param SearchColumnSelectField[] $userType
     * @return IssueSearchRowBasic
     */
    public function setUserType(SearchColumnSelectField $userType): IssueSearchRowBasic
    {
        $this->userType[] = $userType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUserType(): array
    {
        return $this->userType;
    }

    /**
     * @param SearchColumnSelectField[] $versionBroken
     * @return IssueSearchRowBasic
     */
    public function setVersionBroken(SearchColumnSelectField $versionBroken): IssueSearchRowBasic
    {
        $this->versionBroken[] = $versionBroken;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionBroken(): array
    {
        return $this->versionBroken;
    }

    /**
     * @param SearchColumnSelectField[] $versionFixed
     * @return IssueSearchRowBasic
     */
    public function setVersionFixed(SearchColumnSelectField $versionFixed): IssueSearchRowBasic
    {
        $this->versionFixed[] = $versionFixed;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionFixed(): array
    {
        return $this->versionFixed;
    }

    /**
     * @param SearchColumnSelectField[] $versionTarget
     * @return IssueSearchRowBasic
     */
    public function setVersionTarget(SearchColumnSelectField $versionTarget): IssueSearchRowBasic
    {
        $this->versionTarget[] = $versionTarget;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getVersionTarget(): array
    {
        return $this->versionTarget;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return IssueSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): IssueSearchRowBasic
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
