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

class WorkOrderIssue extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var string
     */
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var RecordRef
     */
    protected RecordRef $createdFrom;

    /**
     * @var string
     */
    protected string $tranDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $postingPeriod;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
    protected RecordRef $revision;

    /**
     * @var RecordRef
     */
    protected RecordRef $manufacturingRouting;

    /**
     * @var RecordRef
     */
    protected RecordRef $startOperation;

    /**
     * @var RecordRef
     */
    protected RecordRef $endOperation;

    /**
     * @var WorkOrderIssueComponentList
     */
    protected WorkOrderIssueComponentList $componentList;

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
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "manufacturingRouting" => "RecordRef",
        "startOperation" => "RecordRef",
        "endOperation" => "RecordRef",
        "componentList" => "WorkOrderIssueComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return WorkOrderIssue
     */
    public function setCreatedDate(string $createdDate): WorkOrderIssue
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
     * @param string $lastModifiedDate
     * @return WorkOrderIssue
     */
    public function setLastModifiedDate(string $lastModifiedDate): WorkOrderIssue
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
     * @param RecordRef $customForm
     * @return WorkOrderIssue
     */
    public function setCustomForm(RecordRef $customForm): WorkOrderIssue
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
     * @param string $tranId
     * @return WorkOrderIssue
     */
    public function setTranId(string $tranId): WorkOrderIssue
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranId(): string
    {
        return $this->tranId;
    }

    /**
     * @param RecordRef $item
     * @return WorkOrderIssue
     */
    public function setItem(RecordRef $item): WorkOrderIssue
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
     * @param RecordRef $createdFrom
     * @return WorkOrderIssue
     */
    public function setCreatedFrom(RecordRef $createdFrom): WorkOrderIssue
    {
        $this->createdFrom = $createdFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreatedFrom(): RecordRef
    {
        return $this->createdFrom;
    }

    /**
     * @param string $tranDate
     * @return WorkOrderIssue
     */
    public function setTranDate(string $tranDate): WorkOrderIssue
    {
        $this->tranDate = $tranDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTranDate(): string
    {
        return $this->tranDate;
    }

    /**
     * @param RecordRef $postingPeriod
     * @return WorkOrderIssue
     */
    public function setPostingPeriod(RecordRef $postingPeriod): WorkOrderIssue
    {
        $this->postingPeriod = $postingPeriod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPostingPeriod(): RecordRef
    {
        return $this->postingPeriod;
    }

    /**
     * @param string $memo
     * @return WorkOrderIssue
     */
    public function setMemo(string $memo): WorkOrderIssue
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * @param RecordRef $subsidiary
     * @return WorkOrderIssue
     */
    public function setSubsidiary(RecordRef $subsidiary): WorkOrderIssue
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
     * @param RecordRef $department
     * @return WorkOrderIssue
     */
    public function setDepartment(RecordRef $department): WorkOrderIssue
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
     * @return WorkOrderIssue
     */
    public function setClass(RecordRef $class): WorkOrderIssue
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
     * @return WorkOrderIssue
     */
    public function setLocation(RecordRef $location): WorkOrderIssue
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
     * @param RecordRef $revision
     * @return WorkOrderIssue
     */
    public function setRevision(RecordRef $revision): WorkOrderIssue
    {
        $this->revision = $revision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevision(): RecordRef
    {
        return $this->revision;
    }

    /**
     * @param RecordRef $manufacturingRouting
     * @return WorkOrderIssue
     */
    public function setManufacturingRouting(RecordRef $manufacturingRouting): WorkOrderIssue
    {
        $this->manufacturingRouting = $manufacturingRouting;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getManufacturingRouting(): RecordRef
    {
        return $this->manufacturingRouting;
    }

    /**
     * @param RecordRef $startOperation
     * @return WorkOrderIssue
     */
    public function setStartOperation(RecordRef $startOperation): WorkOrderIssue
    {
        $this->startOperation = $startOperation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStartOperation(): RecordRef
    {
        return $this->startOperation;
    }

    /**
     * @param RecordRef $endOperation
     * @return WorkOrderIssue
     */
    public function setEndOperation(RecordRef $endOperation): WorkOrderIssue
    {
        $this->endOperation = $endOperation;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getEndOperation(): RecordRef
    {
        return $this->endOperation;
    }

    /**
     * @param WorkOrderIssueComponentList $componentList
     * @return WorkOrderIssue
     */
    public function setComponentList(WorkOrderIssueComponentList $componentList): WorkOrderIssue
    {
        $this->componentList = $componentList;
        return $this;
    }

    /**
     * @return WorkOrderIssueComponentList
     */
    public function getComponentList(): WorkOrderIssueComponentList
    {
        return $this->componentList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return WorkOrderIssue
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): WorkOrderIssue
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
     * @return WorkOrderIssue
     */
    public function setInternalId(string $internalId): WorkOrderIssue
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
     * @return WorkOrderIssue
     */
    public function setExternalId(string $externalId): WorkOrderIssue
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
