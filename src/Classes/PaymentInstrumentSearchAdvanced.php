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

class PaymentInstrumentSearchAdvanced extends SearchRecord {
    /**
     * @var PaymentInstrumentSearch
     */
    protected PaymentInstrumentSearch $criteria;

    /**
     * @var PaymentInstrumentSearchRow
     */
    protected PaymentInstrumentSearchRow $columns;

    /**
     * @var string
     */
    protected string $savedSearchId;

    /**
     * @var string
     */
    protected string $savedSearchScriptId;

    static $paramtypesmap = array(
        "criteria" => "PaymentInstrumentSearch",
        "columns" => "PaymentInstrumentSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );

    /**
     * @param PaymentInstrumentSearch $criteria
     * @return PaymentInstrumentSearchAdvanced
     */
    public function setCriteria(PaymentInstrumentSearch $criteria): PaymentInstrumentSearchAdvanced
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearch
     */
    public function getCriteria(): PaymentInstrumentSearch
    {
        return $this->criteria;
    }

    /**
     * @param PaymentInstrumentSearchRow $columns
     * @return PaymentInstrumentSearchAdvanced
     */
    public function setColumns(PaymentInstrumentSearchRow $columns): PaymentInstrumentSearchAdvanced
    {
        $this->columns = $columns;
        return $this;
    }

    /**
     * @return PaymentInstrumentSearchRow
     */
    public function getColumns(): PaymentInstrumentSearchRow
    {
        return $this->columns;
    }

    /**
     * @param string $savedSearchId
     * @return PaymentInstrumentSearchAdvanced
     */
    public function setSavedSearchId(string $savedSearchId): PaymentInstrumentSearchAdvanced
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
     * @return PaymentInstrumentSearchAdvanced
     */
    public function setSavedSearchScriptId(string $savedSearchScriptId): PaymentInstrumentSearchAdvanced
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
