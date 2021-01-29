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

class InboundShipmentSearchAdvanced extends SearchRecord {
    /**
     * @var InboundShipmentSearch
     */
    protected InboundShipmentSearch $criteria;

    /**
     * @var InboundShipmentSearchRow
     */
    protected InboundShipmentSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "InboundShipmentSearch",
        "columns" => "InboundShipmentSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param InboundShipmentSearch $criteria
     * @return InboundShipmentSearchAdvanced
     */
    public function setCriteria(InboundShipmentSearch $criteria): InboundShipmentSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return InboundShipmentSearch
     */
    public function getCriteria(): InboundShipmentSearch
    {
        return $this->criteria;
    }

    /**
     * @param InboundShipmentSearchRow $columns
     * @return InboundShipmentSearchAdvanced
     */
    public function setColumns(InboundShipmentSearchRow $columns): InboundShipmentSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return InboundShipmentSearchRow
     */
    public function getColumns(): InboundShipmentSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return InboundShipmentSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): InboundShipmentSearchAdvanced
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
     * @return InboundShipmentSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): InboundShipmentSearchAdvanced
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
