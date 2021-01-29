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

class CouponCodeSearchAdvanced extends SearchRecord {
    /**
     * @var CouponCodeSearch
     */
    protected CouponCodeSearch $criteria;

    /**
     * @var CouponCodeSearchRow
     */
    protected CouponCodeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "CouponCodeSearch",
        "columns" => "CouponCodeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param CouponCodeSearch $criteria
     * @return CouponCodeSearchAdvanced
     */
    public function setCriteria(CouponCodeSearch $criteria): CouponCodeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return CouponCodeSearch
     */
    public function getCriteria(): CouponCodeSearch
    {
        return $this->criteria;
    }

    /**
     * @param CouponCodeSearchRow $columns
     * @return CouponCodeSearchAdvanced
     */
    public function setColumns(CouponCodeSearchRow $columns): CouponCodeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return CouponCodeSearchRow
     */
    public function getColumns(): CouponCodeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return CouponCodeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): CouponCodeSearchAdvanced
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
     * @return CouponCodeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): CouponCodeSearchAdvanced
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
