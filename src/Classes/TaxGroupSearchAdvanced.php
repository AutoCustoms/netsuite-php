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

class TaxGroupSearchAdvanced extends SearchRecord {
    /**
     * @var TaxGroupSearch
     */
    protected TaxGroupSearch $criteria;

    /**
     * @var TaxGroupSearchRow
     */
    protected TaxGroupSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "TaxGroupSearch",
        "columns" => "TaxGroupSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param TaxGroupSearch $criteria
     * @return TaxGroupSearchAdvanced
     */
    public function setCriteria(TaxGroupSearch $criteria): TaxGroupSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return TaxGroupSearch
     */
    public function getCriteria(): TaxGroupSearch
    {
        return $this->criteria;
    }

    /**
     * @param TaxGroupSearchRow $columns
     * @return TaxGroupSearchAdvanced
     */
    public function setColumns(TaxGroupSearchRow $columns): TaxGroupSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return TaxGroupSearchRow
     */
    public function getColumns(): TaxGroupSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return TaxGroupSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): TaxGroupSearchAdvanced
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
     * @return TaxGroupSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): TaxGroupSearchAdvanced
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
