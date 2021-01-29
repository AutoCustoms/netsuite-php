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

class CustomerStatusSearchAdvanced extends SearchRecord {
    /**
     * @var CustomerStatusSearch
     */
    protected CustomerStatusSearch $criteria;

    /**
     * @var CustomerStatusSearchRow
     */
    protected CustomerStatusSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CustomerStatusSearch",
        "columns" => "CustomerStatusSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CustomerStatusSearch $criteria
     * @return CustomerStatusSearchAdvanced
     */
    public function setCriteria(CustomerStatusSearch $criteria): CustomerStatusSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CustomerStatusSearch
     */
    public function getCriteria(): CustomerStatusSearch
    {
        return $this->criteria;
    }

    /**
     * @param CustomerStatusSearchRow $columns
     * @return CustomerStatusSearchAdvanced
     */
    public function setColumns(CustomerStatusSearchRow $columns): CustomerStatusSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CustomerStatusSearchRow
     */
    public function getColumns(): CustomerStatusSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CustomerStatusSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CustomerStatusSearchAdvanced
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
     * @return CustomerStatusSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CustomerStatusSearchAdvanced
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
