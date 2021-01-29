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

class ItemAccountMappingSearchAdvanced extends SearchRecord {
    /**
     * @var ItemAccountMappingSearch
     */
    protected ItemAccountMappingSearch $criteria;

    /**
     * @var ItemAccountMappingSearchRow
     */
    protected ItemAccountMappingSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ItemAccountMappingSearch",
        "columns" => "ItemAccountMappingSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ItemAccountMappingSearch $criteria
     * @return ItemAccountMappingSearchAdvanced
     */
    public function setCriteria(ItemAccountMappingSearch $criteria): ItemAccountMappingSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ItemAccountMappingSearch
     */
    public function getCriteria(): ItemAccountMappingSearch
    {
        return $this->criteria;
    }

    /**
     * @param ItemAccountMappingSearchRow $columns
     * @return ItemAccountMappingSearchAdvanced
     */
    public function setColumns(ItemAccountMappingSearchRow $columns): ItemAccountMappingSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ItemAccountMappingSearchRow
     */
    public function getColumns(): ItemAccountMappingSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ItemAccountMappingSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ItemAccountMappingSearchAdvanced
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
     * @return ItemAccountMappingSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ItemAccountMappingSearchAdvanced
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
