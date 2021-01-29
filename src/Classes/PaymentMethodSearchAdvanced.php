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

class PaymentMethodSearchAdvanced extends SearchRecord {
    /**
     * @var PaymentMethodSearch
     */
    protected PaymentMethodSearch $criteria;

    /**
     * @var PaymentMethodSearchRow
     */
    protected PaymentMethodSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PaymentMethodSearch",
        "columns" => "PaymentMethodSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PaymentMethodSearch $criteria
     * @return PaymentMethodSearchAdvanced
     */
    public function setCriteria(PaymentMethodSearch $criteria): PaymentMethodSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PaymentMethodSearch
     */
    public function getCriteria(): PaymentMethodSearch
    {
        return $this->criteria;
    }

    /**
     * @param PaymentMethodSearchRow $columns
     * @return PaymentMethodSearchAdvanced
     */
    public function setColumns(PaymentMethodSearchRow $columns): PaymentMethodSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PaymentMethodSearchRow
     */
    public function getColumns(): PaymentMethodSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PaymentMethodSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PaymentMethodSearchAdvanced
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
     * @return PaymentMethodSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PaymentMethodSearchAdvanced
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
