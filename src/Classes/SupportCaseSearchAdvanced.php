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

class SupportCaseSearchAdvanced extends SearchRecord {
    /**
     * @var SupportCaseSearch
     */
    protected SupportCaseSearch $criteria;

    /**
     * @var SupportCaseSearchRow
     */
    protected SupportCaseSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SupportCaseSearch",
        "columns" => "SupportCaseSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SupportCaseSearch $criteria
     * @return SupportCaseSearchAdvanced
     */
    public function setCriteria(SupportCaseSearch $criteria): SupportCaseSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SupportCaseSearch
     */
    public function getCriteria(): SupportCaseSearch
    {
        return $this->criteria;
    }

    /**
     * @param SupportCaseSearchRow $columns
     * @return SupportCaseSearchAdvanced
     */
    public function setColumns(SupportCaseSearchRow $columns): SupportCaseSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SupportCaseSearchRow
     */
    public function getColumns(): SupportCaseSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SupportCaseSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SupportCaseSearchAdvanced
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
     * @return SupportCaseSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SupportCaseSearchAdvanced
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
