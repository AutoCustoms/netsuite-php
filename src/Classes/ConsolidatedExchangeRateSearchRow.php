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

class ConsolidatedExchangeRateSearchRow extends SearchRow {
    /**
     * @var ConsolidatedExchangeRateSearchRowBasic
     */
    protected ConsolidatedExchangeRateSearchRowBasic $basic;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $fromSubsidiaryJoin;

    /**
     * @var AccountingPeriodSearchRowBasic
     */
    protected AccountingPeriodSearchRowBasic $periodJoin;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $toSubsidiaryJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    static $paramtypesmap = array(
        "basic" => "ConsolidatedExchangeRateSearchRowBasic",
        "fromSubsidiaryJoin" => "SubsidiarySearchRowBasic",
        "periodJoin" => "AccountingPeriodSearchRowBasic",
        "toSubsidiaryJoin" => "SubsidiarySearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * @param ConsolidatedExchangeRateSearchRowBasic $basic
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function setBasic(ConsolidatedExchangeRateSearchRowBasic $basic): ConsolidatedExchangeRateSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ConsolidatedExchangeRateSearchRowBasic
     */
    public function getBasic(): ConsolidatedExchangeRateSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SubsidiarySearchRowBasic $fromSubsidiaryJoin
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function setFromSubsidiaryJoin(SubsidiarySearchRowBasic $fromSubsidiaryJoin): ConsolidatedExchangeRateSearchRow
    {
        $this->fromSubsidiaryJoin = $fromSubsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getFromSubsidiaryJoin(): SubsidiarySearchRowBasic
    {
        return $this->fromSubsidiaryJoin;
    }

    /**
     * @param AccountingPeriodSearchRowBasic $periodJoin
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function setPeriodJoin(AccountingPeriodSearchRowBasic $periodJoin): ConsolidatedExchangeRateSearchRow
    {
        $this->periodJoin = $periodJoin;
        return $this;
    }

    /**
     * @return AccountingPeriodSearchRowBasic
     */
    public function getPeriodJoin(): AccountingPeriodSearchRowBasic
    {
        return $this->periodJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $toSubsidiaryJoin
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function setToSubsidiaryJoin(SubsidiarySearchRowBasic $toSubsidiaryJoin): ConsolidatedExchangeRateSearchRow
    {
        $this->toSubsidiaryJoin = $toSubsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getToSubsidiaryJoin(): SubsidiarySearchRowBasic
    {
        return $this->toSubsidiaryJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ConsolidatedExchangeRateSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ConsolidatedExchangeRateSearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

}
