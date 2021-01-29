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

class AssemblyUnbuild extends Record {
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
    protected float $built;

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
     * @var RecordRef
     */
    protected RecordRef $billOfMaterialsRevision;

    /**
     * @var string
     */
    protected string $serialNumbers;

    /**
     * @var InventoryDetail
     */
    protected InventoryDetail $inventoryDetail;

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
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "built" => "float",
        "quantity" => "float",
        "units" => "RecordRef",
        "total" => "float",
        "billOfMaterials" => "RecordRef",
        "billOfMaterialsRevision" => "RecordRef",
        "serialNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "binNumbers" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "memo" => "string",
        "componentList" => "AssemblyComponentList",
        "accountingBookDetailList" => "AccountingBookDetailList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return AssemblyUnbuild
     */
    public function setCreatedDate(string $createdDate): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setLastModifiedDate(string $lastModifiedDate): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setCustomForm(RecordRef $customForm): AssemblyUnbuild
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
     * @param string $tranDate
     * @return AssemblyUnbuild
     */
    public function setTranDate(string $tranDate): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setPostingPeriod(RecordRef $postingPeriod): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setTranId(string $tranId): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setItem(RecordRef $item): AssemblyUnbuild
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
     * @param float $built
     * @return AssemblyUnbuild
     */
    public function setBuilt(float $built): AssemblyUnbuild
    {
        $this->built = $built;
        return $this;
    }

    /**
     * @return float
     */
    public function getBuilt(): float
    {
        return $this->built;
    }

    /**
     * @param float $quantity
     * @return AssemblyUnbuild
     */
    public function setQuantity(float $quantity): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setUnits(RecordRef $units): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setTotal(float $total): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): AssemblyUnbuild
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
     * @param RecordRef $billOfMaterialsRevision
     * @return AssemblyUnbuild
     */
    public function setBillOfMaterialsRevision(RecordRef $billOfMaterialsRevision): AssemblyUnbuild
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
     * @param string $serialNumbers
     * @return AssemblyUnbuild
     */
    public function setSerialNumbers(string $serialNumbers): AssemblyUnbuild
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
     * @param InventoryDetail $inventoryDetail
     * @return AssemblyUnbuild
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail): AssemblyUnbuild
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
     * @param string $binNumbers
     * @return AssemblyUnbuild
     */
    public function setBinNumbers(string $binNumbers): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setSubsidiary(RecordRef $subsidiary): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setDepartment(RecordRef $department): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setClass(RecordRef $class): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setLocation(RecordRef $location): AssemblyUnbuild
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
     * @param string $memo
     * @return AssemblyUnbuild
     */
    public function setMemo(string $memo): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setComponentList(AssemblyComponentList $componentList): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setAccountingBookDetailList(AccountingBookDetailList $accountingBookDetailList): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setInternalId(string $internalId): AssemblyUnbuild
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
     * @return AssemblyUnbuild
     */
    public function setExternalId(string $externalId): AssemblyUnbuild
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
