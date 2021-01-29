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

class ItemSupplyPlanSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $orderCreated;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $orderDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $orderType;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityUom;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $receiptDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $units;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "item" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "orderCreated" => "SearchColumnBooleanField[]",
        "orderDate" => "SearchColumnDateField[]",
        "orderType" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "quantityUom" => "SearchColumnDoubleField[]",
        "receiptDate" => "SearchColumnDateField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "units" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): ItemSupplyPlanSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): ItemSupplyPlanSearchRowBasic
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
     * @param SearchColumnSelectField[] $item
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): ItemSupplyPlanSearchRowBasic
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
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): ItemSupplyPlanSearchRowBasic
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
     * @param SearchColumnSelectField[] $location
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): ItemSupplyPlanSearchRowBasic
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
     * @param SearchColumnStringField[] $memo
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): ItemSupplyPlanSearchRowBasic
    {
        $this->memo[] = $memo;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo(): array
    {
        return $this->memo;
    }

    /**
     * @param SearchColumnBooleanField[] $orderCreated
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setOrderCreated(SearchColumnBooleanField $orderCreated): ItemSupplyPlanSearchRowBasic
    {
        $this->orderCreated[] = $orderCreated;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getOrderCreated(): array
    {
        return $this->orderCreated;
    }

    /**
     * @param SearchColumnDateField[] $orderDate
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setOrderDate(SearchColumnDateField $orderDate): ItemSupplyPlanSearchRowBasic
    {
        $this->orderDate[] = $orderDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getOrderDate(): array
    {
        return $this->orderDate;
    }

    /**
     * @param SearchColumnSelectField[] $orderType
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setOrderType(SearchColumnSelectField $orderType): ItemSupplyPlanSearchRowBasic
    {
        $this->orderType[] = $orderType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOrderType(): array
    {
        return $this->orderType;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): ItemSupplyPlanSearchRowBasic
    {
        $this->quantity[] = $quantity;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantity(): array
    {
        return $this->quantity;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityUom
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setQuantityUom(SearchColumnDoubleField $quantityUom): ItemSupplyPlanSearchRowBasic
    {
        $this->quantityUom[] = $quantityUom;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityUom(): array
    {
        return $this->quantityUom;
    }

    /**
     * @param SearchColumnDateField[] $receiptDate
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setReceiptDate(SearchColumnDateField $receiptDate): ItemSupplyPlanSearchRowBasic
    {
        $this->receiptDate[] = $receiptDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getReceiptDate(): array
    {
        return $this->receiptDate;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): ItemSupplyPlanSearchRowBasic
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
     * @param SearchColumnSelectField[] $units
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setUnits(SearchColumnSelectField $units): ItemSupplyPlanSearchRowBasic
    {
        $this->units[] = $units;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getUnits(): array
    {
        return $this->units;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return ItemSupplyPlanSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): ItemSupplyPlanSearchRowBasic
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
