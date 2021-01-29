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

class VendorCategorySearchAdvanced extends SearchRecord {
    /**
     * @var VendorCategorySearch
     */
    protected VendorCategorySearch $criteria;

    /**
     * @var VendorCategorySearchRow
     */
    protected VendorCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "VendorCategorySearch",
        "columns" => "VendorCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param VendorCategorySearch $criteria
     * @return VendorCategorySearchAdvanced
     */
    public function setCriteria(VendorCategorySearch $criteria): VendorCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return VendorCategorySearch
     */
    public function getCriteria(): VendorCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param VendorCategorySearchRow $columns
     * @return VendorCategorySearchAdvanced
     */
    public function setColumns(VendorCategorySearchRow $columns): VendorCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return VendorCategorySearchRow
     */
    public function getColumns(): VendorCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return VendorCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): VendorCategorySearchAdvanced
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
     * @return VendorCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): VendorCategorySearchAdvanced
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
