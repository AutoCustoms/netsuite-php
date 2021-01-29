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

class Issue extends Record {
    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $issueNumber;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueType;

    /**
     * @var RecordRef
     */
    protected RecordRef $product;

    /**
     * @var RecordRef
     */
    protected RecordRef $module;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $productTeam;

    /**
     * @var RecordRef
     */
    protected RecordRef $source;

    /**
     * @var RecordRef
     */
    protected RecordRef $reportedBy;

    /**
     * @var RecordRef
     */
    protected RecordRef $reproduce;

    /**
     * @var RecordRef
     */
    protected RecordRef $versionBroken;

    /**
     * @var RecordRef
     */
    protected RecordRef $buildBroken;

    /**
     * @var RecordRef
     */
    protected RecordRef $versionTarget;

    /**
     * @var RecordRef
     */
    protected RecordRef $buildTarget;

    /**
     * @var RecordRef
     */
    protected RecordRef $versionFixed;

    /**
     * @var RecordRef
     */
    protected RecordRef $buildFixed;

    /**
     * @var RecordRef
     */
    protected RecordRef $severity;

    /**
     * @var RecordRef
     */
    protected RecordRef $priority;

    /**
     * @var bool
     */
    protected bool $isShowStopper;

    /**
     * @var RecordRef
     */
    protected RecordRef $assigned;

    /**
     * @var RecordRef
     */
    protected RecordRef $reviewer;

    /**
     * @var bool
     */
    protected bool $isReviewed;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueStatus;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $issueTagsList;

    /**
     * @var string
     */
    protected string $issueAbstract;

    /**
     * @var string
     */
    protected string $newDetails;

    /**
     * @var bool
     */
    protected bool $isOwner;

    /**
     * @var IssueTrackCode
     */
    protected IssueTrackCode $trackCode;

    /**
     * @var bool
     */
    protected bool $emailAssignee;

    /**
     * @var EmailEmployeesList
     */
    protected EmailEmployeesList $emailEmployeesList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $emailCellsList;

    /**
     * @var string
     */
    protected string $externalAbstract;

    /**
     * @var string
     */
    protected string $externalDetails;

    /**
     * @var IssueVersionList
     */
    protected IssueVersionList $brokenInVersionList;

    /**
     * @var IssueVersionList
     */
    protected IssueVersionList $targetVersionList;

    /**
     * @var IssueVersionList
     */
    protected IssueVersionList $fixedInVersionList;

    /**
     * @var IssueRelatedIssuesList
     */
    protected IssueRelatedIssuesList $relatedIssuesList;

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
        "issueNumber" => "string",
        "createdDate" => "dateTime",
        "issueType" => "RecordRef",
        "product" => "RecordRef",
        "module" => "RecordRef",
        "item" => "RecordRef",
        "productTeam" => "RecordRef",
        "source" => "RecordRef",
        "reportedBy" => "RecordRef",
        "reproduce" => "RecordRef",
        "versionBroken" => "RecordRef",
        "buildBroken" => "RecordRef",
        "versionTarget" => "RecordRef",
        "buildTarget" => "RecordRef",
        "versionFixed" => "RecordRef",
        "buildFixed" => "RecordRef",
        "severity" => "RecordRef",
        "priority" => "RecordRef",
        "isShowStopper" => "boolean",
        "assigned" => "RecordRef",
        "reviewer" => "RecordRef",
        "isReviewed" => "boolean",
        "issueStatus" => "RecordRef",
        "lastModifiedDate" => "dateTime",
        "issueTagsList" => "RecordRefList",
        "issueAbstract" => "string",
        "newDetails" => "string",
        "isOwner" => "boolean",
        "trackCode" => "IssueTrackCode",
        "emailAssignee" => "boolean",
        "emailEmployeesList" => "EmailEmployeesList",
        "emailCellsList" => "RecordRefList",
        "externalAbstract" => "string",
        "externalDetails" => "string",
        "brokenInVersionList" => "IssueVersionList",
        "targetVersionList" => "IssueVersionList",
        "fixedInVersionList" => "IssueVersionList",
        "relatedIssuesList" => "IssueRelatedIssuesList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param RecordRef $customForm
     * @return Issue
     */
    public function setCustomForm(RecordRef $customForm): Issue
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
     * @param string $issueNumber
     * @return Issue
     */
    public function setIssueNumber(string $issueNumber): Issue
    {
        $this->issueNumber = $issueNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber(): string
    {
        return $this->issueNumber;
    }

    /**
     * @param string $createdDate
     * @return Issue
     */
    public function setCreatedDate(string $createdDate): Issue
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param RecordRef $issueType
     * @return Issue
     */
    public function setIssueType(RecordRef $issueType): Issue
    {
        $this->issueType = $issueType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueType(): RecordRef
    {
        return $this->issueType;
    }

    /**
     * @param RecordRef $product
     * @return Issue
     */
    public function setProduct(RecordRef $product): Issue
    {
        $this->product = $product;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProduct(): RecordRef
    {
        return $this->product;
    }

    /**
     * @param RecordRef $module
     * @return Issue
     */
    public function setModule(RecordRef $module): Issue
    {
        $this->module = $module;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getModule(): RecordRef
    {
        return $this->module;
    }

    /**
     * @param RecordRef $item
     * @return Issue
     */
    public function setItem(RecordRef $item): Issue
    {
        $this->item = $item;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItem(): RecordRef
    {
        return $this->item;
    }

    /**
     * @param RecordRef $productTeam
     * @return Issue
     */
    public function setProductTeam(RecordRef $productTeam): Issue
    {
        $this->productTeam = $productTeam;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProductTeam(): RecordRef
    {
        return $this->productTeam;
    }

    /**
     * @param RecordRef $source
     * @return Issue
     */
    public function setSource(RecordRef $source): Issue
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSource(): RecordRef
    {
        return $this->source;
    }

    /**
     * @param RecordRef $reportedBy
     * @return Issue
     */
    public function setReportedBy(RecordRef $reportedBy): Issue
    {
        $this->reportedBy = $reportedBy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReportedBy(): RecordRef
    {
        return $this->reportedBy;
    }

    /**
     * @param RecordRef $reproduce
     * @return Issue
     */
    public function setReproduce(RecordRef $reproduce): Issue
    {
        $this->reproduce = $reproduce;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReproduce(): RecordRef
    {
        return $this->reproduce;
    }

    /**
     * @param RecordRef $versionBroken
     * @return Issue
     */
    public function setVersionBroken(RecordRef $versionBroken): Issue
    {
        $this->versionBroken = $versionBroken;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionBroken(): RecordRef
    {
        return $this->versionBroken;
    }

    /**
     * @param RecordRef $buildBroken
     * @return Issue
     */
    public function setBuildBroken(RecordRef $buildBroken): Issue
    {
        $this->buildBroken = $buildBroken;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildBroken(): RecordRef
    {
        return $this->buildBroken;
    }

    /**
     * @param RecordRef $versionTarget
     * @return Issue
     */
    public function setVersionTarget(RecordRef $versionTarget): Issue
    {
        $this->versionTarget = $versionTarget;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionTarget(): RecordRef
    {
        return $this->versionTarget;
    }

    /**
     * @param RecordRef $buildTarget
     * @return Issue
     */
    public function setBuildTarget(RecordRef $buildTarget): Issue
    {
        $this->buildTarget = $buildTarget;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildTarget(): RecordRef
    {
        return $this->buildTarget;
    }

    /**
     * @param RecordRef $versionFixed
     * @return Issue
     */
    public function setVersionFixed(RecordRef $versionFixed): Issue
    {
        $this->versionFixed = $versionFixed;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVersionFixed(): RecordRef
    {
        return $this->versionFixed;
    }

    /**
     * @param RecordRef $buildFixed
     * @return Issue
     */
    public function setBuildFixed(RecordRef $buildFixed): Issue
    {
        $this->buildFixed = $buildFixed;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBuildFixed(): RecordRef
    {
        return $this->buildFixed;
    }

    /**
     * @param RecordRef $severity
     * @return Issue
     */
    public function setSeverity(RecordRef $severity): Issue
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSeverity(): RecordRef
    {
        return $this->severity;
    }

    /**
     * @param RecordRef $priority
     * @return Issue
     */
    public function setPriority(RecordRef $priority): Issue
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPriority(): RecordRef
    {
        return $this->priority;
    }

    /**
     * @param bool $isShowStopper
     * @return Issue
     */
    public function setIsShowStopper(bool $isShowStopper): Issue
    {
        $this->isShowStopper = $isShowStopper;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsShowStopper(): bool
    {
        return $this->isShowStopper;
    }

    /**
     * @param RecordRef $assigned
     * @return Issue
     */
    public function setAssigned(RecordRef $assigned): Issue
    {
        $this->assigned = $assigned;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAssigned(): RecordRef
    {
        return $this->assigned;
    }

    /**
     * @param RecordRef $reviewer
     * @return Issue
     */
    public function setReviewer(RecordRef $reviewer): Issue
    {
        $this->reviewer = $reviewer;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReviewer(): RecordRef
    {
        return $this->reviewer;
    }

    /**
     * @param bool $isReviewed
     * @return Issue
     */
    public function setIsReviewed(bool $isReviewed): Issue
    {
        $this->isReviewed = $isReviewed;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsReviewed(): bool
    {
        return $this->isReviewed;
    }

    /**
     * @param RecordRef $issueStatus
     * @return Issue
     */
    public function setIssueStatus(RecordRef $issueStatus): Issue
    {
        $this->issueStatus = $issueStatus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueStatus(): RecordRef
    {
        return $this->issueStatus;
    }

    /**
     * @param string $lastModifiedDate
     * @return Issue
     */
    public function setLastModifiedDate(string $lastModifiedDate): Issue
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
     * @param RecordRefList $issueTagsList
     * @return Issue
     */
    public function setIssueTagsList(RecordRefList $issueTagsList): Issue
    {
        $this->issueTagsList = $issueTagsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getIssueTagsList(): RecordRefList
    {
        return $this->issueTagsList;
    }

    /**
     * @param string $issueAbstract
     * @return Issue
     */
    public function setIssueAbstract(string $issueAbstract): Issue
    {
        $this->issueAbstract = $issueAbstract;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssueAbstract(): string
    {
        return $this->issueAbstract;
    }

    /**
     * @param string $newDetails
     * @return Issue
     */
    public function setNewDetails(string $newDetails): Issue
    {
        $this->newDetails = $newDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewDetails(): string
    {
        return $this->newDetails;
    }

    /**
     * @param bool $isOwner
     * @return Issue
     */
    public function setIsOwner(bool $isOwner): Issue
    {
        $this->isOwner = $isOwner;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOwner(): bool
    {
        return $this->isOwner;
    }

    /**
     * @param IssueTrackCode $trackCode
     * @return Issue
     */
    public function setTrackCode(IssueTrackCode $trackCode): Issue
    {
        $this->trackCode = $trackCode;
        return $this;
    }

    /**
     * @return IssueTrackCode
     */
    public function getTrackCode(): IssueTrackCode
    {
        return $this->trackCode;
    }

    /**
     * @param bool $emailAssignee
     * @return Issue
     */
    public function setEmailAssignee(bool $emailAssignee): Issue
    {
        $this->emailAssignee = $emailAssignee;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEmailAssignee(): bool
    {
        return $this->emailAssignee;
    }

    /**
     * @param EmailEmployeesList $emailEmployeesList
     * @return Issue
     */
    public function setEmailEmployeesList(EmailEmployeesList $emailEmployeesList): Issue
    {
        $this->emailEmployeesList = $emailEmployeesList;
        return $this;
    }

    /**
     * @return EmailEmployeesList
     */
    public function getEmailEmployeesList(): EmailEmployeesList
    {
        return $this->emailEmployeesList;
    }

    /**
     * @param RecordRefList $emailCellsList
     * @return Issue
     */
    public function setEmailCellsList(RecordRefList $emailCellsList): Issue
    {
        $this->emailCellsList = $emailCellsList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getEmailCellsList(): RecordRefList
    {
        return $this->emailCellsList;
    }

    /**
     * @param string $externalAbstract
     * @return Issue
     */
    public function setExternalAbstract(string $externalAbstract): Issue
    {
        $this->externalAbstract = $externalAbstract;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalAbstract(): string
    {
        return $this->externalAbstract;
    }

    /**
     * @param string $externalDetails
     * @return Issue
     */
    public function setExternalDetails(string $externalDetails): Issue
    {
        $this->externalDetails = $externalDetails;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalDetails(): string
    {
        return $this->externalDetails;
    }

    /**
     * @param IssueVersionList $brokenInVersionList
     * @return Issue
     */
    public function setBrokenInVersionList(IssueVersionList $brokenInVersionList): Issue
    {
        $this->brokenInVersionList = $brokenInVersionList;
        return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getBrokenInVersionList(): IssueVersionList
    {
        return $this->brokenInVersionList;
    }

    /**
     * @param IssueVersionList $targetVersionList
     * @return Issue
     */
    public function setTargetVersionList(IssueVersionList $targetVersionList): Issue
    {
        $this->targetVersionList = $targetVersionList;
        return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getTargetVersionList(): IssueVersionList
    {
        return $this->targetVersionList;
    }

    /**
     * @param IssueVersionList $fixedInVersionList
     * @return Issue
     */
    public function setFixedInVersionList(IssueVersionList $fixedInVersionList): Issue
    {
        $this->fixedInVersionList = $fixedInVersionList;
        return $this;
    }

    /**
     * @return IssueVersionList
     */
    public function getFixedInVersionList(): IssueVersionList
    {
        return $this->fixedInVersionList;
    }

    /**
     * @param IssueRelatedIssuesList $relatedIssuesList
     * @return Issue
     */
    public function setRelatedIssuesList(IssueRelatedIssuesList $relatedIssuesList): Issue
    {
        $this->relatedIssuesList = $relatedIssuesList;
        return $this;
    }

    /**
     * @return IssueRelatedIssuesList
     */
    public function getRelatedIssuesList(): IssueRelatedIssuesList
    {
        return $this->relatedIssuesList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Issue
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Issue
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
     * @return Issue
     */
    public function setInternalId(string $internalId): Issue
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
     * @return Issue
     */
    public function setExternalId(string $externalId): Issue
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
