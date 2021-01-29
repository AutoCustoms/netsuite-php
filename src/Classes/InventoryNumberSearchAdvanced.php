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

class InventoryNumberSearchAdvanced extends SearchRecord {
    /**
     * @var InventoryNumberSearch
     */
    protected InventoryNumberSearch $criteria;

    /**
     * @var InventoryNumberSearchRow
     */
    protected InventoryNumberSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "InventoryNumberSearch",
        "columns" => "InventoryNumberSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param InventoryNumberSearch $criteria
     * @return InventoryNumberSearchAdvanced
     */
    public function setCriteria(InventoryNumberSearch $criteria): InventoryNumberSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return InventoryNumberSearch
     */
    public function getCriteria(): InventoryNumberSearch
    {
        return $this->criteria;
    }

    /**
     * @param InventoryNumberSearchRow $columns
     * @return InventoryNumberSearchAdvanced
     */
    public function setColumns(InventoryNumberSearchRow $columns): InventoryNumberSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return InventoryNumberSearchRow
     */
    public function getColumns(): InventoryNumberSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return InventoryNumberSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): InventoryNumberSearchAdvanced
    {
        $this->savedSearchId = $savedSearchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchId(): string
    {
        return $this->savedSearchId;
    }

    /**
     * @param string $savedSearchScriptId
     * @return InventoryNumberSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): InventoryNumberSearchAdvanced
    {
        $this->savedSearchScriptId = $savedSearchScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSavedSearchScriptId(): string
    {
        return $this->savedSearchScriptId;
    }

}
