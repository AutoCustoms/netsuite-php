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

class ChargeSearchAdvanced extends SearchRecord {
    /**
     * @var ChargeSearch
     */
    protected ChargeSearch $criteria;

    /**
     * @var ChargeSearchRow
     */
    protected ChargeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "ChargeSearch",
        "columns" => "ChargeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param ChargeSearch $criteria
     * @return ChargeSearchAdvanced
     */
    public function setCriteria(ChargeSearch $criteria): ChargeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return ChargeSearch
     */
    public function getCriteria(): ChargeSearch
    {
        return $this->criteria;
    }

    /**
     * @param ChargeSearchRow $columns
     * @return ChargeSearchAdvanced
     */
    public function setColumns(ChargeSearchRow $columns): ChargeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return ChargeSearchRow
     */
    public function getColumns(): ChargeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return ChargeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): ChargeSearchAdvanced
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
     * @return ChargeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): ChargeSearchAdvanced
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
