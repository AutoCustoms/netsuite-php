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

class ItemRevisionSearchAdvanced extends SearchRecord {
    /**
     * @var ItemRevisionSearch
     */
    protected ItemRevisionSearch $criteria;

    /**
     * @var ItemRevisionSearchRow
     */
    protected ItemRevisionSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ItemRevisionSearch",
        "columns" => "ItemRevisionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ItemRevisionSearch $criteria
     * @return ItemRevisionSearchAdvanced
     */
    public function setCriteria(ItemRevisionSearch $criteria): ItemRevisionSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ItemRevisionSearch
     */
    public function getCriteria(): ItemRevisionSearch
    {
        return $this->criteria;
    }

    /**
     * @param ItemRevisionSearchRow $columns
     * @return ItemRevisionSearchAdvanced
     */
    public function setColumns(ItemRevisionSearchRow $columns): ItemRevisionSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ItemRevisionSearchRow
     */
    public function getColumns(): ItemRevisionSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ItemRevisionSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ItemRevisionSearchAdvanced
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
     * @return ItemRevisionSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ItemRevisionSearchAdvanced
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
