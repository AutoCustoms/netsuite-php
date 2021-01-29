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

class SalesTaxItemSearchAdvanced extends SearchRecord {
    /**
     * @var SalesTaxItemSearch
     */
    protected SalesTaxItemSearch $criteria;

    /**
     * @var SalesTaxItemSearchRow
     */
    protected SalesTaxItemSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SalesTaxItemSearch",
        "columns" => "SalesTaxItemSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SalesTaxItemSearch $criteria
     * @return SalesTaxItemSearchAdvanced
     */
    public function setCriteria(SalesTaxItemSearch $criteria): SalesTaxItemSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SalesTaxItemSearch
     */
    public function getCriteria(): SalesTaxItemSearch
    {
        return $this->criteria;
    }

    /**
     * @param SalesTaxItemSearchRow $columns
     * @return SalesTaxItemSearchAdvanced
     */
    public function setColumns(SalesTaxItemSearchRow $columns): SalesTaxItemSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchRow
     */
    public function getColumns(): SalesTaxItemSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SalesTaxItemSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SalesTaxItemSearchAdvanced
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
     * @return SalesTaxItemSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SalesTaxItemSearchAdvanced
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
