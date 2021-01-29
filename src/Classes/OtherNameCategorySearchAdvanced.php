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

class OtherNameCategorySearchAdvanced extends SearchRecord {
    /**
     * @var OtherNameCategorySearch
     */
    protected OtherNameCategorySearch $criteria;

    /**
     * @var OtherNameCategorySearchRow
     */
    protected OtherNameCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "OtherNameCategorySearch",
        "columns" => "OtherNameCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param OtherNameCategorySearch $criteria
     * @return OtherNameCategorySearchAdvanced
     */
    public function setCriteria(OtherNameCategorySearch $criteria): OtherNameCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return OtherNameCategorySearch
     */
    public function getCriteria(): OtherNameCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param OtherNameCategorySearchRow $columns
     * @return OtherNameCategorySearchAdvanced
     */
    public function setColumns(OtherNameCategorySearchRow $columns): OtherNameCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return OtherNameCategorySearchRow
     */
    public function getColumns(): OtherNameCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return OtherNameCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): OtherNameCategorySearchAdvanced
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
     * @return OtherNameCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): OtherNameCategorySearchAdvanced
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
