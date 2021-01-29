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

class ExpenseCategorySearchAdvanced extends SearchRecord {
    /**
     * @var ExpenseCategorySearch
     */
    protected ExpenseCategorySearch $criteria;

    /**
     * @var ExpenseCategorySearchRow
     */
    protected ExpenseCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ExpenseCategorySearch",
        "columns" => "ExpenseCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ExpenseCategorySearch $criteria
     * @return ExpenseCategorySearchAdvanced
     */
    public function setCriteria(ExpenseCategorySearch $criteria): ExpenseCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ExpenseCategorySearch
     */
    public function getCriteria(): ExpenseCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param ExpenseCategorySearchRow $columns
     * @return ExpenseCategorySearchAdvanced
     */
    public function setColumns(ExpenseCategorySearchRow $columns): ExpenseCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ExpenseCategorySearchRow
     */
    public function getColumns(): ExpenseCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ExpenseCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ExpenseCategorySearchAdvanced
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
     * @return ExpenseCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ExpenseCategorySearchAdvanced
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
