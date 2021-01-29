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

class AssemblyBuild extends Record {
    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var string
     */
    protected string $expirationDate;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

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
    protected string $tranId;

    /**
     * @var RecordRef
     */
    protected RecordRef $item;

    /**
     * @var float
     */
    protected float $buildable;

    /**
     * @var float
     */
    protected float $quantity;

    /**
     * @var RecordRef
     */
    protected RecordRef $units;

    /**
     * @var float
     */
    protected float $total;

    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterials;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var string
     */
    protected string $binNumbers;

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
    protected RecordRef $billOfMaterialsRevision;

    /**
     * @var string
     */
    protected string $memo;

    /**
     * @var AssemblyComponentList
     */
    protected AssemblyComponentList $componentList;

    /**
     * @var AccountingBookDetailList
     */
    protected AccountingBookDetailList $accountingBookDetailList;

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
        "expirationDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "buildable" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "total" => "float",
        "billOfMaterials" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbers" => "string",
        "binNumbers" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "billOfMaterialsRevision" => "RecordRef",
        "memo" => "string",
        "componentList" => "AssemblyComponentList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return AssemblyBuild
     */
    public function setCreatedDate(string $createdDate): AssemblyBuild
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
     * @param string $expirationDate
     * @return AssemblyBuild
     */
    public function setExpirationDate(string $expirationDate): AssemblyBuild
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }

    /**
     * @param string $lastModifiedDate
     * @return AssemblyBuild
     */
    public function setLastModifiedDate(string $lastModifiedDate): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setCustomForm(RecordRef $customForm): AssemblyBuild
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
     * @param RecordRef $createdFrom
     * @return AssemblyBuild
     */
    public function setCreatedFrom(RecordRef $createdFrom): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setTranDate(string $tranDate): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setPostingPeriod(RecordRef $postingPeriod): AssemblyBuild
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
     * @param string $tranId
     * @return AssemblyBuild
     */
    public function setTranId(string $tranId): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setItem(RecordRef $item): AssemblyBuild
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
     * @param float $buildable
     * @return AssemblyBuild
     */
    public function setBuildable(float $buildable): AssemblyBuild
    {
        $this->buildable = $buildable;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuildable(): float
    {
        return $this->buildable;
    }

    /**
     * @param float $quantity
     * @return AssemblyBuild
     */
    public function setQuantity(float $quantity): AssemblyBuild
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param RecordRef $units
     * @return AssemblyBuild
     */
    public function setUnits(RecordRef $units): AssemblyBuild
    {
        $this->units = $units;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnits(): RecordRef
    {
        return $this->units;
    }

    /**
     * @param float $total
     * @return AssemblyBuild
     */
    public function setTotal(float $total): AssemblyBuild
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param RecordRef $billOfMaterials
     * @return AssemblyBuild
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): AssemblyBuild
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials(): RecordRef
    {
        return $this->billOfMaterials;
    }

    /**
     * @param InventoryDetail $inventoryDetail
     * @return AssemblyBuild
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): AssemblyBuild
    {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * @return InventoryDetail
     */
    public function getInventoryDetail(): InventoryDetail
    {
        return $this->inventoryDetail;
    }

    /**
     * @param string $serialNumbers
     * @return AssemblyBuild
     */
    public function setSerialNumbers(string $serialNumbers): AssemblyBuild
    {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerialNumbers(): string
    {
        return $this->serialNumbers;
    }

    /**
     * @param string $binNumbers
     * @return AssemblyBuild
     */
    public function setBinNumbers(string $binNumbers): AssemblyBuild
    {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getBinNumbers(): string
    {
        return $this->binNumbers;
    }

    /**
     * @param RecordRef $subsidiary
     * @return AssemblyBuild
     */
    public function setSubsidiary(RecordRef $subsidiary): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setDepartment(RecordRef $department): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setClass(RecordRef $class): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setLocation(RecordRef $location): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setRevision(RecordRef $revision): AssemblyBuild
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
     * @param RecordRef $billOfMaterialsRevision
     * @return AssemblyBuild
     */
    public function setBillOfMaterialsRevision(RecordRef $billOfMaterialsRevision): AssemblyBuild
    {
        $this->billOfMaterialsRevision = $billOfMaterialsRevision;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterialsRevision(): RecordRef
    {
        return $this->billOfMaterialsRevision;
    }

    /**
     * @param string $memo
     * @return AssemblyBuild
     */
    public function setMemo(string $memo): AssemblyBuild
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
     * @param AssemblyComponentList $componentList
     * @return AssemblyBuild
     */
    public function setComponentList(AssemblyComponentList $componentList): AssemblyBuild
    {
        $this->componentList = $componentList;
        return $this;
    }

    /**
     * @return AssemblyComponentList
     */
    public function getComponentList(): AssemblyComponentList
    {
        return $this->componentList;
    }

    /**
     * @param AccountingBookDetailList $accountingBookDetailList
     * @return AssemblyBuild
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): AssemblyBuild
    {
        $this->accountingBookDetailList = $accountingBookDetailList;
        return $this;
    }

    /**
     * @return AccountingBookDetailList
     */
    public function getAccountingBookDetailList(): AccountingBookDetailList
    {
        return $this->accountingBookDetailList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return AssemblyBuild
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setInternalId(string $internalId): AssemblyBuild
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
     * @return AssemblyBuild
     */
    public function setExternalId(string $externalId): AssemblyBuild
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
