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

class ItemGroup extends Record {
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
     * @var bool
     */
    protected bool $includeStartEndLines;

    /**
     * @var bool
     */
    protected bool $isVsoeBundle;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultItemShipMethod;

    /**
     * @var bool
     */
    protected bool $availableToPartners;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $itemId;

    /**
     * @var string
     */
    protected string $upcCode;

    /**
     * @var string
     */
    protected string $displayName;

    /**
     * @var string
     */
    protected string $vendorName;

    /**
     * @var RecordRef
     */
    protected RecordRef $issueProduct;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var bool
     */
    protected bool $includeChildren;

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
     * @var ShippingCarrier
     */
    protected ShippingCarrier $itemCarrier;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $itemShipMethodList;

    /**
     * @var bool
     */
    protected bool $printItems;

    /**
     * @var ItemMemberList
     */
    protected ItemMemberList $memberList;

    /**
     * @var TranslationList
     */
    protected TranslationList $translationsList;

    /**
     * @var ItemGroupHierarchyVersionsList
     */
    protected ItemGroupHierarchyVersionsList $hierarchyVersionsList;

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
        "includeStartEndLines" => "boolean",
        "isVsoeBundle" => "boolean",
        "defaultItemShipMethod" => "RecordRef",
        "availableToPartners" => "boolean",
        "isInactive" => "boolean",
        "itemId" => "string",
        "upcCode" => "string",
        "displayName" => "string",
        "vendorName" => "string",
        "issueProduct" => "RecordRef",
        "parent" => "RecordRef",
        "description" => "string",
        "subsidiaryList" => "RecordRefList",
        "includeChildren" => "boolean",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "itemCarrier" => "ShippingCarrier",
        "itemShipMethodList" => "RecordRefList",
        "printItems" => "boolean",
        "memberList" => "ItemMemberList",
        "translationsList" => "TranslationList",
        "hierarchyVersionsList" => "ItemGroupHierarchyVersionsList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $createdDate
     * @return ItemGroup
     */
    public function setCreatedDate(string $createdDate): ItemGroup
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
     * @return ItemGroup
     */
    public function setLastModifiedDate(string $lastModifiedDate): ItemGroup
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
     * @return ItemGroup
     */
    public function setCustomForm(RecordRef $customForm): ItemGroup
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
     * @param bool $includeStartEndLines
     * @return ItemGroup
     */
    public function setIncludeStartEndLines(bool $includeStartEndLines): ItemGroup
    {
        $this->includeStartEndLines = $includeStartEndLines;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeStartEndLines(): bool
    {
        return $this->includeStartEndLines;
    }

    /**
     * @param bool $isVsoeBundle
     * @return ItemGroup
     */
    public function setIsVsoeBundle(bool $isVsoeBundle): ItemGroup
    {
        $this->isVsoeBundle = $isVsoeBundle;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsVsoeBundle(): bool
    {
        return $this->isVsoeBundle;
    }

    /**
     * @param RecordRef $defaultItemShipMethod
     * @return ItemGroup
     */
    public function setDefaultItemShipMethod(RecordRef $defaultItemShipMethod): ItemGroup
    {
        $this->defaultItemShipMethod = $defaultItemShipMethod;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultItemShipMethod(): RecordRef
    {
        return $this->defaultItemShipMethod;
    }

    /**
     * @param bool $availableToPartners
     * @return ItemGroup
     */
    public function setAvailableToPartners(bool $availableToPartners): ItemGroup
    {
        $this->availableToPartners = $availableToPartners;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToPartners(): bool
    {
        return $this->availableToPartners;
    }

    /**
     * @param bool $isInactive
     * @return ItemGroup
     */
    public function setIsInactive(bool $isInactive): ItemGroup
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
     * @param string $itemId
     * @return ItemGroup
     */
    public function setItemId(string $itemId): ItemGroup
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemId(): string
    {
        return $this->itemId;
    }

    /**
     * @param string $upcCode
     * @return ItemGroup
     */
    public function setUpcCode(string $upcCode): ItemGroup
    {
        $this->upcCode = $upcCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpcCode(): string
    {
        return $this->upcCode;
    }

    /**
     * @param string $displayName
     * @return ItemGroup
     */
    public function setDisplayName(string $displayName): ItemGroup
    {
        $this->displayName = $displayName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @param string $vendorName
     * @return ItemGroup
     */
    public function setVendorName(string $vendorName): ItemGroup
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getVendorName(): string
    {
        return $this->vendorName;
    }

    /**
     * @param RecordRef $issueProduct
     * @return ItemGroup
     */
    public function setIssueProduct(RecordRef $issueProduct): ItemGroup
    {
        $this->issueProduct = $issueProduct;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getIssueProduct(): RecordRef
    {
        return $this->issueProduct;
    }

    /**
     * @param RecordRef $parent
     * @return ItemGroup
     */
    public function setParent(RecordRef $parent): ItemGroup
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
     * @param string $description
     * @return ItemGroup
     */
    public function setDescription(string $description): ItemGroup
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return ItemGroup
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): ItemGroup
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param bool $includeChildren
     * @return ItemGroup
     */
    public function setIncludeChildren(bool $includeChildren): ItemGroup
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRef $department
     * @return ItemGroup
     */
    public function setDepartment(RecordRef $department): ItemGroup
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
     * @return ItemGroup
     */
    public function setClass(RecordRef $class): ItemGroup
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
     * @return ItemGroup
     */
    public function setLocation(RecordRef $location): ItemGroup
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
     * @param ShippingCarrier $itemCarrier
     * @return ItemGroup
     */
    public function setItemCarrier(ShippingCarrier $itemCarrier): ItemGroup
    {
        $this->itemCarrier = $itemCarrier;
        return $this;
    }

    /**
     * @return ShippingCarrier
     */
    public function getItemCarrier(): ShippingCarrier
    {
        return $this->itemCarrier;
    }

    /**
     * @param RecordRefList $itemShipMethodList
     * @return ItemGroup
     */
    public function setItemShipMethodList(RecordRefList $itemShipMethodList): ItemGroup
    {
        $this->itemShipMethodList = $itemShipMethodList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getItemShipMethodList(): RecordRefList
    {
        return $this->itemShipMethodList;
    }

    /**
     * @param bool $printItems
     * @return ItemGroup
     */
    public function setPrintItems(bool $printItems): ItemGroup
    {
        $this->printItems = $printItems;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPrintItems(): bool
    {
        return $this->printItems;
    }

    /**
     * @param ItemMemberList $memberList
     * @return ItemGroup
     */
    public function setMemberList(ItemMemberList $memberList): ItemGroup
    {
        $this->memberList = $memberList;
        return $this;
    }

    /**
     * @return ItemMemberList
     */
    public function getMemberList(): ItemMemberList
    {
        return $this->memberList;
    }

    /**
     * @param TranslationList $translationsList
     * @return ItemGroup
     */
    public function setTranslationsList(TranslationList $translationsList): ItemGroup
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return TranslationList
     */
    public function getTranslationsList(): TranslationList
    {
        return $this->translationsList;
    }

    /**
     * @param ItemGroupHierarchyVersionsList $hierarchyVersionsList
     * @return ItemGroup
     */
    public function setHierarchyVersionsList(ItemGroupHierarchyVersionsList $hierarchyVersionsList): ItemGroup
    {
        $this->hierarchyVersionsList = $hierarchyVersionsList;
        return $this;
    }

    /**
     * @return ItemGroupHierarchyVersionsList
     */
    public function getHierarchyVersionsList(): ItemGroupHierarchyVersionsList
    {
        return $this->hierarchyVersionsList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return ItemGroup
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): ItemGroup
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
     * @return ItemGroup
     */
    public function setInternalId(string $internalId): ItemGroup
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
     * @return ItemGroup
     */
    public function setExternalId(string $externalId): ItemGroup
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
