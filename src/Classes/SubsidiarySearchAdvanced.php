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

class SubsidiarySearchAdvanced extends SearchRecord {
    /**
     * @var SubsidiarySearch
     */
    protected SubsidiarySearch $criteria;

    /**
     * @var SubsidiarySearchRow
     */
    protected SubsidiarySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SubsidiarySearch",
        "columns" => "SubsidiarySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SubsidiarySearch $criteria
     * @return SubsidiarySearchAdvanced
     */
    public function setCriteria(SubsidiarySearch $criteria): SubsidiarySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SubsidiarySearch
     */
    public function getCriteria(): SubsidiarySearch
    {
        return $this->criteria;
    }

    /**
     * @param SubsidiarySearchRow $columns
     * @return SubsidiarySearchAdvanced
     */
    public function setColumns(SubsidiarySearchRow $columns): SubsidiarySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SubsidiarySearchRow
     */
    public function getColumns(): SubsidiarySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SubsidiarySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SubsidiarySearchAdvanced
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
     * @return SubsidiarySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SubsidiarySearchAdvanced
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
