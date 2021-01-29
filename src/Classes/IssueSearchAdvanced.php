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

class IssueSearchAdvanced extends SearchRecord {
    /**
     * @var IssueSearch
     */
    protected IssueSearch $criteria;

    /**
     * @var IssueSearchRow
     */
    protected IssueSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "IssueSearch",
        "columns" => "IssueSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param IssueSearch $criteria
     * @return IssueSearchAdvanced
     */
    public function setCriteria(IssueSearch $criteria): IssueSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return IssueSearch
     */
    public function getCriteria(): IssueSearch
    {
        return $this->criteria;
    }

    /**
     * @param IssueSearchRow $columns
     * @return IssueSearchAdvanced
     */
    public function setColumns(IssueSearchRow $columns): IssueSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return IssueSearchRow
     */
    public function getColumns(): IssueSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return IssueSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): IssueSearchAdvanced
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
     * @return IssueSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): IssueSearchAdvanced
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
