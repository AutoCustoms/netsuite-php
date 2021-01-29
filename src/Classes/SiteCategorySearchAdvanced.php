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

class SiteCategorySearchAdvanced extends SearchRecord {
    /**
     * @var SiteCategorySearch
     */
    protected SiteCategorySearch $criteria;

    /**
     * @var SiteCategorySearchRow
     */
    protected SiteCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "SiteCategorySearch",
        "columns" => "SiteCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param SiteCategorySearch $criteria
     * @return SiteCategorySearchAdvanced
     */
    public function setCriteria(SiteCategorySearch $criteria): SiteCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return SiteCategorySearch
     */
    public function getCriteria(): SiteCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param SiteCategorySearchRow $columns
     * @return SiteCategorySearchAdvanced
     */
    public function setColumns(SiteCategorySearchRow $columns): SiteCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return SiteCategorySearchRow
     */
    public function getColumns(): SiteCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return SiteCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): SiteCategorySearchAdvanced
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
     * @return SiteCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): SiteCategorySearchAdvanced
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
