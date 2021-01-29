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

class InventoryNumberSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnDateField[]
     */
    protected array $expirationDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $inventoryNumber;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isonhand;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $item;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $memo;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityavailable;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityintransit;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityonhand;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantityonorder;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "expirationDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryNumber" => "SearchColumnStringField[]",
        "isonhand" => "SearchColumnBooleanField[]",
        "item" => "SearchColumnSelectField[]",
        "location" => "SearchColumnSelectField[]",
        "memo" => "SearchColumnStringField[]",
        "quantityavailable" => "SearchColumnDoubleField[]",
        "quantityintransit" => "SearchColumnDoubleField[]",
        "quantityonhand" => "SearchColumnDoubleField[]",
        "quantityonorder" => "SearchColumnDoubleField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnDateField[] $expirationDate
     * @return InventoryNumberSearchRowBasic
     */
    public function setExpirationDate(SearchColumnDateField $expirationDate): InventoryNumberSearchRowBasic
    {
        $this->expirationDate[] = $expirationDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getExpirationDate(): array
    {
        return $this->expirationDate;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return InventoryNumberSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): InventoryNumberSearchRowBasic
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
     * @return InventoryNumberSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): InventoryNumberSearchRowBasic
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
     * @param SearchColumnStringField[] $inventoryNumber
     * @return InventoryNumberSearchRowBasic
     */
    public function setInventoryNumber(SearchColumnStringField $inventoryNumber): InventoryNumberSearchRowBasic
    {
        $this->inventoryNumber[] = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInventoryNumber(): array
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnBooleanField[] $isonhand
     * @return InventoryNumberSearchRowBasic
     */
    public function setIsonhand(SearchColumnBooleanField $isonhand): InventoryNumberSearchRowBasic
    {
        $this->isonhand[] = $isonhand;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsonhand(): array
    {
        return $this->isonhand;
    }

    /**
     * @param SearchColumnSelectField[] $item
     * @return InventoryNumberSearchRowBasic
     */
    public function setItem(SearchColumnSelectField $item): InventoryNumberSearchRowBasic
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
     * @param SearchColumnSelectField[] $location
     * @return InventoryNumberSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): InventoryNumberSearchRowBasic
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
     * @return InventoryNumberSearchRowBasic
     */
    public function setMemo(SearchColumnStringField $memo): InventoryNumberSearchRowBasic
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
     * @param SearchColumnDoubleField[] $quantityavailable
     * @return InventoryNumberSearchRowBasic
     */
    public function setQuantityavailable(SearchColumnDoubleField $quantityavailable): InventoryNumberSearchRowBasic
    {
        $this->quantityavailable[] = $quantityavailable;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityavailable(): array
    {
        return $this->quantityavailable;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityintransit
     * @return InventoryNumberSearchRowBasic
     */
    public function setQuantityintransit(SearchColumnDoubleField $quantityintransit): InventoryNumberSearchRowBasic
    {
        $this->quantityintransit[] = $quantityintransit;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityintransit(): array
    {
        return $this->quantityintransit;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityonhand
     * @return InventoryNumberSearchRowBasic
     */
    public function setQuantityonhand(SearchColumnDoubleField $quantityonhand): InventoryNumberSearchRowBasic
    {
        $this->quantityonhand[] = $quantityonhand;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityonhand(): array
    {
        return $this->quantityonhand;
    }

    /**
     * @param SearchColumnDoubleField[] $quantityonorder
     * @return InventoryNumberSearchRowBasic
     */
    public function setQuantityonorder(SearchColumnDoubleField $quantityonorder): InventoryNumberSearchRowBasic
    {
        $this->quantityonorder[] = $quantityonorder;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getQuantityonorder(): array
    {
        return $this->quantityonorder;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return InventoryNumberSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): InventoryNumberSearchRowBasic
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
