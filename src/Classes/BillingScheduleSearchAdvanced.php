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

class BillingScheduleSearchAdvanced extends SearchRecord {
    /**
     * @var BillingScheduleSearch
     */
    protected BillingScheduleSearch $criteria;

    /**
     * @var BillingScheduleSearchRow
     */
    protected BillingScheduleSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "BillingScheduleSearch",
        "columns" => "BillingScheduleSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param BillingScheduleSearch $criteria
     * @return BillingScheduleSearchAdvanced
     */
    public function setCriteria(BillingScheduleSearch $criteria): BillingScheduleSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return BillingScheduleSearch
     */
    public function getCriteria(): BillingScheduleSearch
    {
        return $this->criteria;
    }

    /**
     * @param BillingScheduleSearchRow $columns
     * @return BillingScheduleSearchAdvanced
     */
    public function setColumns(BillingScheduleSearchRow $columns): BillingScheduleSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return BillingScheduleSearchRow
     */
    public function getColumns(): BillingScheduleSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return BillingScheduleSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): BillingScheduleSearchAdvanced
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
     * @return BillingScheduleSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): BillingScheduleSearchAdvanced
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
