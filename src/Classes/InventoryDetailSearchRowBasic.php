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

class InventoryDetailSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $binNumber;

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
    protected array $inventoryNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $quantity;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $status;

    static $paramtypesmap = array(
        "binNumber" => "SearchColumnSelectField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "inventoryNumber" => "SearchColumnSelectField[]",
        "quantity" => "SearchColumnDoubleField[]",
        "status" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $binNumber
     * @return InventoryDetailSearchRowBasic
     */
    public function setBinNumber(SearchColumnSelectField $binNumber): InventoryDetailSearchRowBasic
    {
        $this->binNumber[] = $binNumber;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBinNumber(): array
    {
        return $this->binNumber;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return InventoryDetailSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): InventoryDetailSearchRowBasic
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
     * @return InventoryDetailSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): InventoryDetailSearchRowBasic
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
     * @param SearchColumnSelectField[] $inventoryNumber
     * @return InventoryDetailSearchRowBasic
     */
    public function setInventoryNumber(SearchColumnSelectField $inventoryNumber): InventoryDetailSearchRowBasic
    {
        $this->inventoryNumber[] = $inventoryNumber;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInventoryNumber(): array
    {
        return $this->inventoryNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $quantity
     * @return InventoryDetailSearchRowBasic
     */
    public function setQuantity(SearchColumnDoubleField $quantity): InventoryDetailSearchRowBasic
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
     * @param SearchColumnSelectField[] $status
     * @return InventoryDetailSearchRowBasic
     */
    public function setStatus(SearchColumnSelectField $status): InventoryDetailSearchRowBasic
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getStatus(): array
    {
        return $this->status;
    }

}
