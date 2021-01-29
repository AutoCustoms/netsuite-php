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

class WinLossReasonSearchAdvanced extends SearchRecord {
    /**
     * @var WinLossReasonSearch
     */
    protected WinLossReasonSearch $criteria;

    /**
     * @var WinLossReasonSearchRow
     */
    protected WinLossReasonSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "WinLossReasonSearch",
        "columns" => "WinLossReasonSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param WinLossReasonSearch $criteria
     * @return WinLossReasonSearchAdvanced
     */
    public function setCriteria(WinLossReasonSearch $criteria): WinLossReasonSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return WinLossReasonSearch
     */
    public function getCriteria(): WinLossReasonSearch
    {
        return $this->criteria;
    }

    /**
     * @param WinLossReasonSearchRow $columns
     * @return WinLossReasonSearchAdvanced
     */
    public function setColumns(WinLossReasonSearchRow $columns): WinLossReasonSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return WinLossReasonSearchRow
     */
    public function getColumns(): WinLossReasonSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return WinLossReasonSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): WinLossReasonSearchAdvanced
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
     * @return WinLossReasonSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): WinLossReasonSearchAdvanced
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
