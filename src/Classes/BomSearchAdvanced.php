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

class BomSearchAdvanced extends SearchRecord {
    /**
     * @var BomSearch
     */
    protected BomSearch $criteria;

    /**
     * @var BomSearchRow
     */
    protected BomSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "BomSearch",
        "columns" => "BomSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param BomSearch $criteria
     * @return BomSearchAdvanced
     */
    public function setCriteria(BomSearch $criteria): BomSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return BomSearch
     */
    public function getCriteria(): BomSearch
    {
        return $this->criteria;
    }

    /**
     * @param BomSearchRow $columns
     * @return BomSearchAdvanced
     */
    public function setColumns(BomSearchRow $columns): BomSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return BomSearchRow
     */
    public function getColumns(): BomSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return BomSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): BomSearchAdvanced
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
     * @return BomSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): BomSearchAdvanced
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
