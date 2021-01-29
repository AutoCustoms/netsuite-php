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

class CustomerSearchAdvanced extends SearchRecord {
    /**
     * @var CustomerSearch
     */
    protected CustomerSearch $criteria;

    /**
     * @var CustomerSearchRow
     */
    protected CustomerSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CustomerSearch",
        "columns" => "CustomerSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CustomerSearch $criteria
     * @return CustomerSearchAdvanced
     */
    public function setCriteria(CustomerSearch $criteria): CustomerSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CustomerSearch
     */
    public function getCriteria(): CustomerSearch
    {
        return $this->criteria;
    }

    /**
     * @param CustomerSearchRow $columns
     * @return CustomerSearchAdvanced
     */
    public function setColumns(CustomerSearchRow $columns): CustomerSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CustomerSearchRow
     */
    public function getColumns(): CustomerSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CustomerSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CustomerSearchAdvanced
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
     * @return CustomerSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CustomerSearchAdvanced
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
