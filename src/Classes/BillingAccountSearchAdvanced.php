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

class BillingAccountSearchAdvanced extends SearchRecord {
    /**
     * @var BillingAccountSearch
     */
    protected BillingAccountSearch $criteria;

    /**
     * @var BillingAccountSearchRow
     */
    protected BillingAccountSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "BillingAccountSearch",
        "columns" => "BillingAccountSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param BillingAccountSearch $criteria
     * @return BillingAccountSearchAdvanced
     */
    public function setCriteria(BillingAccountSearch $criteria): BillingAccountSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return BillingAccountSearch
     */
    public function getCriteria(): BillingAccountSearch
    {
        return $this->criteria;
    }

    /**
     * @param BillingAccountSearchRow $columns
     * @return BillingAccountSearchAdvanced
     */
    public function setColumns(BillingAccountSearchRow $columns): BillingAccountSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return BillingAccountSearchRow
     */
    public function getColumns(): BillingAccountSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return BillingAccountSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): BillingAccountSearchAdvanced
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
     * @return BillingAccountSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): BillingAccountSearchAdvanced
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
