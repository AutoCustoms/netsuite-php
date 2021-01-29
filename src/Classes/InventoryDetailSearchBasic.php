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

class InventoryDetailSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $binNumber;

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
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $inventoryNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $quantity;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $status;

    static $paramtypesmap = array(
        "binNumber" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inventoryNumber" => "SearchMultiSelectField",
        "quantity" => "SearchDoubleField",
        "status" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $binNumber
     * @return InventoryDetailSearchBasic
     */
    public function setBinNumber(SearchMultiSelectField $binNumber): InventoryDetailSearchBasic
    {
        $this->binNumber = $binNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBinNumber(): SearchMultiSelectField
    {
        return $this->binNumber;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return InventoryDetailSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): InventoryDetailSearchBasic
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
     * @return InventoryDetailSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): InventoryDetailSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return InventoryDetailSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): InventoryDetailSearchBasic
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
     * @return InventoryDetailSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): InventoryDetailSearchBasic
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
     * @param SearchMultiSelectField $inventoryNumber
     * @return InventoryDetailSearchBasic
     */
    public function setInventoryNumber(SearchMultiSelectField $inventoryNumber): InventoryDetailSearchBasic
    {
        $this->inventoryNumber = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInventoryNumber(): SearchMultiSelectField
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchDoubleField $quantity
     * @return InventoryDetailSearchBasic
     */
    public function setQuantity(SearchDoubleField $quantity): InventoryDetailSearchBasic
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getQuantity(): SearchDoubleField
    {
        return $this->quantity;
    }

    /**
     * @param SearchMultiSelectField $status
     * @return InventoryDetailSearchBasic
     */
    public function setStatus(SearchMultiSelectField $status): InventoryDetailSearchBasic
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

}
