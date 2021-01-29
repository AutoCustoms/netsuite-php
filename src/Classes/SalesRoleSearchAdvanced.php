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

class SalesRoleSearchAdvanced extends SearchRecord {
    /**
     * @var SalesRoleSearch
     */
    protected SalesRoleSearch $criteria;

    /**
     * @var SalesRoleSearchRow
     */
    protected SalesRoleSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SalesRoleSearch",
        "columns" => "SalesRoleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SalesRoleSearch $criteria
     * @return SalesRoleSearchAdvanced
     */
    public function setCriteria(SalesRoleSearch $criteria): SalesRoleSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SalesRoleSearch
     */
    public function getCriteria(): SalesRoleSearch
    {
        return $this->criteria;
    }

    /**
     * @param SalesRoleSearchRow $columns
     * @return SalesRoleSearchAdvanced
     */
    public function setColumns(SalesRoleSearchRow $columns): SalesRoleSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SalesRoleSearchRow
     */
    public function getColumns(): SalesRoleSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SalesRoleSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SalesRoleSearchAdvanced
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
     * @return SalesRoleSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SalesRoleSearchAdvanced
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
