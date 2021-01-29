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

class PayrollItemSearchAdvanced extends SearchRecord {
    /**
     * @var PayrollItemSearch
     */
    protected PayrollItemSearch $criteria;

    /**
     * @var PayrollItemSearchRow
     */
    protected PayrollItemSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PayrollItemSearch",
        "columns" => "PayrollItemSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PayrollItemSearch $criteria
     * @return PayrollItemSearchAdvanced
     */
    public function setCriteria(PayrollItemSearch $criteria): PayrollItemSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PayrollItemSearch
     */
    public function getCriteria(): PayrollItemSearch
    {
        return $this->criteria;
    }

    /**
     * @param PayrollItemSearchRow $columns
     * @return PayrollItemSearchAdvanced
     */
    public function setColumns(PayrollItemSearchRow $columns): PayrollItemSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PayrollItemSearchRow
     */
    public function getColumns(): PayrollItemSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PayrollItemSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PayrollItemSearchAdvanced
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
     * @return PayrollItemSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PayrollItemSearchAdvanced
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
