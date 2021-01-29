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

class AccountLocalizations {
    /**
     * @var RecordRef
     */
    protected RecordRef $accountingContext;

    /**
     * @var string
     */
    protected string $acctNumber;

    /**
     * @var string
     */
    protected string $acctName;

    /**
     * @var string
     */
    protected string $legalName;

    /**
     * @var Language
     */
    protected Language $locale;

    static $paramtypesmap = array(
        "accountingContext" => "RecordRef",
        "acctNumber" => "string",
        "acctName" => "string",
        "legalName" => "string",
        "locale" => "Language",
    );

    /**
     * @param RecordRef $accountingContext
     * @return AccountLocalizations
     */
    public function setAccountingContext(RecordRef $accountingContext): AccountLocalizations
    {
        $this->accountingContext = $accountingContext;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingContext(): RecordRef
    {
        return $this->accountingContext;
    }

    /**
     * @param string $acctNumber
     * @return AccountLocalizations
     */
    public function setAcctNumber(string $acctNumber): AccountLocalizations
    {
        $this->acctNumber = $acctNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcctNumber(): string
    {
        return $this->acctNumber;
    }

    /**
     * @param string $acctName
     * @return AccountLocalizations
     */
    public function setAcctName(string $acctName): AccountLocalizations
    {
        $this->acctName = $acctName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAcctName(): string
    {
        return $this->acctName;
    }

    /**
     * @param string $legalName
     * @return AccountLocalizations
     */
    public function setLegalName(string $legalName): AccountLocalizations
    {
        $this->legalName = $legalName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegalName(): string
    {
        return $this->legalName;
    }

    /**
     * @param Language $locale
     * @return AccountLocalizations
     */
    public function setLocale(Language $locale): AccountLocalizations
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return Language
     */
    public function getLocale(): Language
    {
        return $this->locale;
    }

}
