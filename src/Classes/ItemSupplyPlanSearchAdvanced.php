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

class ItemSupplyPlanSearchAdvanced extends SearchRecord {
    /**
     * @var ItemSupplyPlanSearch
     */
    protected ItemSupplyPlanSearch $criteria;

    /**
     * @var ItemSupplyPlanSearchRow
     */
    protected ItemSupplyPlanSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ItemSupplyPlanSearch",
        "columns" => "ItemSupplyPlanSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ItemSupplyPlanSearch $criteria
     * @return ItemSupplyPlanSearchAdvanced
     */
    public function setCriteria(ItemSupplyPlanSearch $criteria): ItemSupplyPlanSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ItemSupplyPlanSearch
     */
    public function getCriteria(): ItemSupplyPlanSearch
    {
        return $this->criteria;
    }

    /**
     * @param ItemSupplyPlanSearchRow $columns
     * @return ItemSupplyPlanSearchAdvanced
     */
    public function setColumns(ItemSupplyPlanSearchRow $columns): ItemSupplyPlanSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ItemSupplyPlanSearchRow
     */
    public function getColumns(): ItemSupplyPlanSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ItemSupplyPlanSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ItemSupplyPlanSearchAdvanced
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
     * @return ItemSupplyPlanSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ItemSupplyPlanSearchAdvanced
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
