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

class TaxDetailSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $account;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $lineNumber;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $taxAmount;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $taxBasis;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxCode;

    /**
     * @var SearchDoubleField
     */
    protected SearchDoubleField $taxRate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $taxType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $tranId;

    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "lineNumber" => "SearchLongField",
        "taxAmount" => "SearchDoubleField",
        "taxBasis" => "SearchDoubleField",
        "taxCode" => "SearchMultiSelectField",
        "taxRate" => "SearchDoubleField",
        "taxType" => "SearchMultiSelectField",
        "tranId" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $account
     * @return TaxDetailSearchBasic
     */
    public function setAccount(SearchMultiSelectField $account): TaxDetailSearchBasic
    {
        $this->account = $account;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAccount(): SearchMultiSelectField
    {
        return $this->account;
    }

    /**
     * @param SearchLongField $lineNumber
     * @return TaxDetailSearchBasic
     */
    public function setLineNumber(SearchLongField $lineNumber): TaxDetailSearchBasic
    {
        $this->lineNumber = $lineNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getLineNumber(): SearchLongField
    {
        return $this->lineNumber;
    }

    /**
     * @param SearchDoubleField $taxAmount
     * @return TaxDetailSearchBasic
     */
    public function setTaxAmount(SearchDoubleField $taxAmount): TaxDetailSearchBasic
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxAmount(): SearchDoubleField
    {
        return $this->taxAmount;
    }

    /**
     * @param SearchDoubleField $taxBasis
     * @return TaxDetailSearchBasic
     */
    public function setTaxBasis(SearchDoubleField $taxBasis): TaxDetailSearchBasic
    {
        $this->taxBasis = $taxBasis;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxBasis(): SearchDoubleField
    {
        return $this->taxBasis;
    }

    /**
     * @param SearchMultiSelectField $taxCode
     * @return TaxDetailSearchBasic
     */
    public function setTaxCode(SearchMultiSelectField $taxCode): TaxDetailSearchBasic
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxCode(): SearchMultiSelectField
    {
        return $this->taxCode;
    }

    /**
     * @param SearchDoubleField $taxRate
     * @return TaxDetailSearchBasic
     */
    public function setTaxRate(SearchDoubleField $taxRate): TaxDetailSearchBasic
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getTaxRate(): SearchDoubleField
    {
        return $this->taxRate;
    }

    /**
     * @param SearchMultiSelectField $taxType
     * @return TaxDetailSearchBasic
     */
    public function setTaxType(SearchMultiSelectField $taxType): TaxDetailSearchBasic
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTaxType(): SearchMultiSelectField
    {
        return $this->taxType;
    }

    /**
     * @param SearchMultiSelectField $tranId
     * @return TaxDetailSearchBasic
     */
    public function setTranId(SearchMultiSelectField $tranId): TaxDetailSearchBasic
    {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTranId(): SearchMultiSelectField
    {
        return $this->tranId;
    }

}
