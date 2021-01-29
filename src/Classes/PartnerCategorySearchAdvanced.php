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

class PartnerCategorySearchAdvanced extends SearchRecord {
    /**
     * @var PartnerCategorySearch
     */
    protected PartnerCategorySearch $criteria;

    /**
     * @var PartnerCategorySearchRow
     */
    protected PartnerCategorySearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PartnerCategorySearch",
        "columns" => "PartnerCategorySearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PartnerCategorySearch $criteria
     * @return PartnerCategorySearchAdvanced
     */
    public function setCriteria(PartnerCategorySearch $criteria): PartnerCategorySearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PartnerCategorySearch
     */
    public function getCriteria(): PartnerCategorySearch
    {
        return $this->criteria;
    }

    /**
     * @param PartnerCategorySearchRow $columns
     * @return PartnerCategorySearchAdvanced
     */
    public function setColumns(PartnerCategorySearchRow $columns): PartnerCategorySearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PartnerCategorySearchRow
     */
    public function getColumns(): PartnerCategorySearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PartnerCategorySearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PartnerCategorySearchAdvanced
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
     * @return PartnerCategorySearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PartnerCategorySearchAdvanced
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
