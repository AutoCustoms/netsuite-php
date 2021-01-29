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

class RevRecTemplateSearchAdvanced extends SearchRecord {
    /**
     * @var RevRecTemplateSearch
     */
    protected RevRecTemplateSearch $criteria;

    /**
     * @var RevRecTemplateSearchRow
     */
    protected RevRecTemplateSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "RevRecTemplateSearch",
        "columns" => "RevRecTemplateSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param RevRecTemplateSearch $criteria
     * @return RevRecTemplateSearchAdvanced
     */
    public function setCriteria(RevRecTemplateSearch $criteria): RevRecTemplateSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return RevRecTemplateSearch
     */
    public function getCriteria(): RevRecTemplateSearch
    {
        return $this->criteria;
    }

    /**
     * @param RevRecTemplateSearchRow $columns
     * @return RevRecTemplateSearchAdvanced
     */
    public function setColumns(RevRecTemplateSearchRow $columns): RevRecTemplateSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return RevRecTemplateSearchRow
     */
    public function getColumns(): RevRecTemplateSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return RevRecTemplateSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): RevRecTemplateSearchAdvanced
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
     * @return RevRecTemplateSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): RevRecTemplateSearchAdvanced
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
