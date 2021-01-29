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

class CampaignSearchAdvanced extends SearchRecord {
    /**
     * @var CampaignSearch
     */
    protected CampaignSearch $criteria;

    /**
     * @var CampaignSearchRow
     */
    protected CampaignSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CampaignSearch",
        "columns" => "CampaignSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CampaignSearch $criteria
     * @return CampaignSearchAdvanced
     */
    public function setCriteria(CampaignSearch $criteria): CampaignSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CampaignSearch
     */
    public function getCriteria(): CampaignSearch
    {
        return $this->criteria;
    }

    /**
     * @param CampaignSearchRow $columns
     * @return CampaignSearchAdvanced
     */
    public function setColumns(CampaignSearchRow $columns): CampaignSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CampaignSearchRow
     */
    public function getColumns(): CampaignSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CampaignSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CampaignSearchAdvanced
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
     * @return CampaignSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CampaignSearchAdvanced
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
