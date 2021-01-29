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

class VendorSubsidiaryRelationshipSearchAdvanced extends SearchRecord {
    /**
     * @var VendorSubsidiaryRelationshipSearch
     */
    protected VendorSubsidiaryRelationshipSearch $criteria;

    /**
     * @var VendorSubsidiaryRelationshipSearchRow
     */
    protected VendorSubsidiaryRelationshipSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "VendorSubsidiaryRelationshipSearch",
        "columns" => "VendorSubsidiaryRelationshipSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param VendorSubsidiaryRelationshipSearch $criteria
     * @return VendorSubsidiaryRelationshipSearchAdvanced
     */
    public function setCriteria(VendorSubsidiaryRelationshipSearch $criteria): VendorSubsidiaryRelationshipSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return VendorSubsidiaryRelationshipSearch
     */
    public function getCriteria(): VendorSubsidiaryRelationshipSearch
    {
        return $this->criteria;
    }

    /**
     * @param VendorSubsidiaryRelationshipSearchRow $columns
     * @return VendorSubsidiaryRelationshipSearchAdvanced
     */
    public function setColumns(VendorSubsidiaryRelationshipSearchRow $columns): VendorSubsidiaryRelationshipSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return VendorSubsidiaryRelationshipSearchRow
     */
    public function getColumns(): VendorSubsidiaryRelationshipSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return VendorSubsidiaryRelationshipSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): VendorSubsidiaryRelationshipSearchAdvanced
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
     * @return VendorSubsidiaryRelationshipSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): VendorSubsidiaryRelationshipSearchAdvanced
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
