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

class PromotionCodeSearchAdvanced extends SearchRecord {
    /**
     * @var PromotionCodeSearch
     */
    protected PromotionCodeSearch $criteria;

    /**
     * @var PromotionCodeSearchRow
     */
    protected PromotionCodeSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PromotionCodeSearch",
        "columns" => "PromotionCodeSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PromotionCodeSearch $criteria
     * @return PromotionCodeSearchAdvanced
     */
    public function setCriteria(PromotionCodeSearch $criteria): PromotionCodeSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PromotionCodeSearch
     */
    public function getCriteria(): PromotionCodeSearch
    {
        return $this->criteria;
    }

    /**
     * @param PromotionCodeSearchRow $columns
     * @return PromotionCodeSearchAdvanced
     */
    public function setColumns(PromotionCodeSearchRow $columns): PromotionCodeSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PromotionCodeSearchRow
     */
    public function getColumns(): PromotionCodeSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PromotionCodeSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PromotionCodeSearchAdvanced
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
     * @return PromotionCodeSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PromotionCodeSearchAdvanced
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
