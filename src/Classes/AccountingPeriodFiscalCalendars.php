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

class AccountingPeriodFiscalCalendars {
    /**
     * @var RecordRef
     */
    protected RecordRef $fiscalCalendar;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    static $paramtypesmap = array(
        "fiscalCalendar" => "RecordRef",
        "parent" => "RecordRef",
    );

    /**
     * @param RecordRef $fiscalCalendar
     * @return AccountingPeriodFiscalCalendars
     */
    public function setFiscalCalendar(RecordRef $fiscalCalendar): AccountingPeriodFiscalCalendars
    {
        $this->fiscalCalendar = $fiscalCalendar;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar(): RecordRef
    {
        return $this->fiscalCalendar;
    }

    /**
     * @param RecordRef $parent
     * @return AccountingPeriodFiscalCalendars
     */
    public function setParent(RecordRef $parent): AccountingPeriodFiscalCalendars
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

}
