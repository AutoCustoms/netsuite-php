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

class GetCurrencyRateResult {
    /**
     * @var Status
     */
    protected Status $status;

    /**
     * @var CurrencyRateList
     */
    protected CurrencyRateList $currencyRateList;

    static $paramtypesmap = array(
        "status" => "Status",
        "currencyRateList" => "CurrencyRateList",
    );

    /**
     * @param Status $status
     * @return GetCurrencyRateResult
     */
    public function setStatus(Status $status): GetCurrencyRateResult
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @param CurrencyRateList $currencyRateList
     * @return GetCurrencyRateResult
     */
    public function setCurrencyRateList(CurrencyRateList $currencyRateList): GetCurrencyRateResult
    {
        $this->currencyRateList = $currencyRateList;
        return $this;
    }

    /**
     * @return CurrencyRateList
     */
    public function getCurrencyRateList(): CurrencyRateList
    {
        return $this->currencyRateList;
    }

}
