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

class TaxTypeNexusAccounts {
    /**
     * @var RecordRef
     */
    protected RecordRef $nexus;

    /**
     * @var RecordRef
     */
    protected RecordRef $payablesAccount;

    /**
     * @var RecordRef
     */
    protected RecordRef $receivablesAccount;

    static $paramtypesmap = array(
        "nexus" => "RecordRef",
        "payablesAccount" => "RecordRef",
        "receivablesAccount" => "RecordRef",
    );

    /**
     * @param RecordRef $nexus
     * @return TaxTypeNexusAccounts
     */
    public function setNexus(RecordRef $nexus): TaxTypeNexusAccounts
    {
        $this->nexus = $nexus;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getNexus(): RecordRef
    {
        return $this->nexus;
    }

    /**
     * @param RecordRef $payablesAccount
     * @return TaxTypeNexusAccounts
     */
    public function setPayablesAccount(RecordRef $payablesAccount): TaxTypeNexusAccounts
    {
        $this->payablesAccount = $payablesAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPayablesAccount(): RecordRef
    {
        return $this->payablesAccount;
    }

    /**
     * @param RecordRef $receivablesAccount
     * @return TaxTypeNexusAccounts
     */
    public function setReceivablesAccount(RecordRef $receivablesAccount): TaxTypeNexusAccounts
    {
        $this->receivablesAccount = $receivablesAccount;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getReceivablesAccount(): RecordRef
    {
        return $this->receivablesAccount;
    }

}
