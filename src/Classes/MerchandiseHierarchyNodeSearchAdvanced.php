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

class MerchandiseHierarchyNodeSearchAdvanced extends SearchRecord {
    /**
     * @var MerchandiseHierarchyNodeSearch
     */
    protected MerchandiseHierarchyNodeSearch $criteria;

    /**
     * @var MerchandiseHierarchyNodeSearchRow
     */
    protected MerchandiseHierarchyNodeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "MerchandiseHierarchyNodeSearch",
        "columns" => "MerchandiseHierarchyNodeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param MerchandiseHierarchyNodeSearch $criteria
     * @return MerchandiseHierarchyNodeSearchAdvanced
     */
    public function setCriteria(MerchandiseHierarchyNodeSearch $criteria): MerchandiseHierarchyNodeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearch
     */
    public function getCriteria(): MerchandiseHierarchyNodeSearch
    {
        return $this->criteria;
    }

    /**
     * @param MerchandiseHierarchyNodeSearchRow $columns
     * @return MerchandiseHierarchyNodeSearchAdvanced
     */
    public function setColumns(MerchandiseHierarchyNodeSearchRow $columns): MerchandiseHierarchyNodeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return MerchandiseHierarchyNodeSearchRow
     */
    public function getColumns(): MerchandiseHierarchyNodeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return MerchandiseHierarchyNodeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): MerchandiseHierarchyNodeSearchAdvanced
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
     * @return MerchandiseHierarchyNodeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): MerchandiseHierarchyNodeSearchAdvanced
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
