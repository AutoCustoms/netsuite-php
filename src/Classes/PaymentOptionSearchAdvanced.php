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

class PaymentOptionSearchAdvanced extends SearchRecord {
    /**
     * @var PaymentOptionSearch
     */
    protected PaymentOptionSearch $criteria;

    /**
     * @var PaymentOptionSearchRow
     */
    protected PaymentOptionSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PaymentOptionSearch",
        "columns" => "PaymentOptionSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PaymentOptionSearch $criteria
     * @return PaymentOptionSearchAdvanced
     */
    public function setCriteria(PaymentOptionSearch $criteria): PaymentOptionSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PaymentOptionSearch
     */
    public function getCriteria(): PaymentOptionSearch
    {
        return $this->criteria;
    }

    /**
     * @param PaymentOptionSearchRow $columns
     * @return PaymentOptionSearchAdvanced
     */
    public function setColumns(PaymentOptionSearchRow $columns): PaymentOptionSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PaymentOptionSearchRow
     */
    public function getColumns(): PaymentOptionSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PaymentOptionSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PaymentOptionSearchAdvanced
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
     * @return PaymentOptionSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PaymentOptionSearchAdvanced
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
