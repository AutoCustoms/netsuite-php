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

class PartnerSearchAdvanced extends SearchRecord {
    /**
     * @var PartnerSearch
     */
    protected PartnerSearch $criteria;

    /**
     * @var PartnerSearchRow
     */
    protected PartnerSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PartnerSearch",
        "columns" => "PartnerSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PartnerSearch $criteria
     * @return PartnerSearchAdvanced
     */
    public function setCriteria(PartnerSearch $criteria): PartnerSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PartnerSearch
     */
    public function getCriteria(): PartnerSearch
    {
        return $this->criteria;
    }

    /**
     * @param PartnerSearchRow $columns
     * @return PartnerSearchAdvanced
     */
    public function setColumns(PartnerSearchRow $columns): PartnerSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PartnerSearchRow
     */
    public function getColumns(): PartnerSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PartnerSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PartnerSearchAdvanced
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
     * @return PartnerSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PartnerSearchAdvanced
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
