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

class ItemDemandPlanSearchAdvanced extends SearchRecord {
    /**
     * @var ItemDemandPlanSearch
     */
    protected ItemDemandPlanSearch $criteria;

    /**
     * @var ItemDemandPlanSearchRow
     */
    protected ItemDemandPlanSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ItemDemandPlanSearch",
        "columns" => "ItemDemandPlanSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ItemDemandPlanSearch $criteria
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setCriteria(ItemDemandPlanSearch $criteria): ItemDemandPlanSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ItemDemandPlanSearch
     */
    public function getCriteria(): ItemDemandPlanSearch
    {
        return $this->criteria;
    }

    /**
     * @param ItemDemandPlanSearchRow $columns
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setColumns(ItemDemandPlanSearchRow $columns): ItemDemandPlanSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ItemDemandPlanSearchRow
     */
    public function getColumns(): ItemDemandPlanSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ItemDemandPlanSearchAdvanced
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
     * @return ItemDemandPlanSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ItemDemandPlanSearchAdvanced
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
