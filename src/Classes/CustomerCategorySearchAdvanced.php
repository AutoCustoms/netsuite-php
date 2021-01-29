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

class CustomerCategorySearchAdvanced extends SearchRecord {
    /**
     * @var CustomerCategorySearch
     */
    protected CustomerCategorySearch $criteria;

    /**
     * @var CustomerCategorySearchRow
     */
    protected CustomerCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CustomerCategorySearch",
        "columns" => "CustomerCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CustomerCategorySearch $criteria
     * @return CustomerCategorySearchAdvanced
     */
    public function setCriteria(CustomerCategorySearch $criteria): CustomerCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CustomerCategorySearch
     */
    public function getCriteria(): CustomerCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param CustomerCategorySearchRow $columns
     * @return CustomerCategorySearchAdvanced
     */
    public function setColumns(CustomerCategorySearchRow $columns): CustomerCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CustomerCategorySearchRow
     */
    public function getColumns(): CustomerCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CustomerCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CustomerCategorySearchAdvanced
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
     * @return CustomerCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CustomerCategorySearchAdvanced
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
