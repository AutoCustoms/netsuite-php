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

class SolutionSearchAdvanced extends SearchRecord {
    /**
     * @var SolutionSearch
     */
    protected SolutionSearch $criteria;

    /**
     * @var SolutionSearchRow
     */
    protected SolutionSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SolutionSearch",
        "columns" => "SolutionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SolutionSearch $criteria
     * @return SolutionSearchAdvanced
     */
    public function setCriteria(SolutionSearch $criteria): SolutionSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SolutionSearch
     */
    public function getCriteria(): SolutionSearch
    {
        return $this->criteria;
    }

    /**
     * @param SolutionSearchRow $columns
     * @return SolutionSearchAdvanced
     */
    public function setColumns(SolutionSearchRow $columns): SolutionSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SolutionSearchRow
     */
    public function getColumns(): SolutionSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SolutionSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SolutionSearchAdvanced
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
     * @return SolutionSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SolutionSearchAdvanced
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
