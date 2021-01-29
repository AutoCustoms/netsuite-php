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

class PricingGroupSearchAdvanced extends SearchRecord {
    /**
     * @var PricingGroupSearch
     */
    protected PricingGroupSearch $criteria;

    /**
     * @var PricingGroupSearchRow
     */
    protected PricingGroupSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PricingGroupSearch",
        "columns" => "PricingGroupSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PricingGroupSearch $criteria
     * @return PricingGroupSearchAdvanced
     */
    public function setCriteria(PricingGroupSearch $criteria): PricingGroupSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PricingGroupSearch
     */
    public function getCriteria(): PricingGroupSearch
    {
        return $this->criteria;
    }

    /**
     * @param PricingGroupSearchRow $columns
     * @return PricingGroupSearchAdvanced
     */
    public function setColumns(PricingGroupSearchRow $columns): PricingGroupSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PricingGroupSearchRow
     */
    public function getColumns(): PricingGroupSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PricingGroupSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PricingGroupSearchAdvanced
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
     * @return PricingGroupSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PricingGroupSearchAdvanced
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
