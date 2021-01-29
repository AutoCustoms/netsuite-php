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

class ConsolidatedExchangeRateSearch extends SearchRecord {
    /**
     * @var ConsolidatedExchangeRateSearchBasic
     */
    protected ConsolidatedExchangeRateSearchBasic $basic;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $fromSubsidiaryJoin;

    /**
     * @var AccountingPeriodSearchBasic
     */
    protected AccountingPeriodSearchBasic $periodJoin;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $toSubsidiaryJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ConsolidatedExchangeRateSearchBasic",
        "fromSubsidiaryJoin" => "SubsidiarySearchBasic",
        "periodJoin" => "AccountingPeriodSearchBasic",
        "toSubsidiaryJoin" => "SubsidiarySearchBasic",
        "userJoin" => "EmployeeSearchBasic",
    );

    /**
     * @param ConsolidatedExchangeRateSearchBasic $basic
     * @return ConsolidatedExchangeRateSearch
     */
    public function setBasic(ConsolidatedExchangeRateSearchBasic $basic): ConsolidatedExchangeRateSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ConsolidatedExchangeRateSearchBasic
     */
    public function getBasic(): ConsolidatedExchangeRateSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SubsidiarySearchBasic $fromSubsidiaryJoin
     * @return ConsolidatedExchangeRateSearch
     */
    public function setFromSubsidiaryJoin(SubsidiarySearchBasic $fromSubsidiaryJoin): ConsolidatedExchangeRateSearch
    {
        $this->fromSubsidiaryJoin = $fromSubsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getFromSubsidiaryJoin(): SubsidiarySearchBasic
    {
        return $this->fromSubsidiaryJoin;
    }

    /**
     * @param AccountingPeriodSearchBasic $periodJoin
     * @return ConsolidatedExchangeRateSearch
     */
    public function setPeriodJoin(AccountingPeriodSearchBasic $periodJoin): ConsolidatedExchangeRateSearch
    {
        $this->periodJoin = $periodJoin;
        return $this;
    }

    /**
     * @return AccountingPeriodSearchBasic
     */
    public function getPeriodJoin(): AccountingPeriodSearchBasic
    {
        return $this->periodJoin;
    }

    /**
     * @param SubsidiarySearchBasic $toSubsidiaryJoin
     * @return ConsolidatedExchangeRateSearch
     */
    public function setToSubsidiaryJoin(SubsidiarySearchBasic $toSubsidiaryJoin): ConsolidatedExchangeRateSearch
    {
        $this->toSubsidiaryJoin = $toSubsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getToSubsidiaryJoin(): SubsidiarySearchBasic
    {
        return $this->toSubsidiaryJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ConsolidatedExchangeRateSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ConsolidatedExchangeRateSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

}
