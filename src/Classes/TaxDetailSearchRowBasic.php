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

class TaxDetailSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnStringField[]
     */
    protected array $account;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $details;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $lineNumber;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxAmount;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxBasis;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxCode;

    /**
     * @var SearchColumnDoubleField[]
     */
    protected array $taxRate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $taxType;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $tranId;

    static $paramtypesmap = array(
        "account" => "SearchColumnStringField[]",
        "details" => "SearchColumnStringField[]",
        "lineNumber" => "SearchColumnLongField[]",
        "taxAmount" => "SearchColumnDoubleField[]",
        "taxBasis" => "SearchColumnDoubleField[]",
        "taxCode" => "SearchColumnSelectField[]",
        "taxRate" => "SearchColumnDoubleField[]",
        "taxType" => "SearchColumnSelectField[]",
        "tranId" => "SearchColumnLongField[]",
    );

    /**
     * @param SearchColumnStringField[] $account
     * @return TaxDetailSearchRowBasic
     */
    public function setAccount(SearchColumnStringField $account): TaxDetailSearchRowBasic
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccount(): array
    {
        return $this->account;
    }

    /**
     * @param SearchColumnStringField[] $details
     * @return TaxDetailSearchRowBasic
     */
    public function setDetails(SearchColumnStringField $details): TaxDetailSearchRowBasic
    {
        $this->details[] = $details;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @param SearchColumnLongField[] $lineNumber
     * @return TaxDetailSearchRowBasic
     */
    public function setLineNumber(SearchColumnLongField $lineNumber): TaxDetailSearchRowBasic
    {
        $this->lineNumber[] = $lineNumber;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getLineNumber(): array
    {
        return $this->lineNumber;
    }

    /**
     * @param SearchColumnDoubleField[] $taxAmount
     * @return TaxDetailSearchRowBasic
     */
    public function setTaxAmount(SearchColumnDoubleField $taxAmount): TaxDetailSearchRowBasic
    {
        $this->taxAmount[] = $taxAmount;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxAmount(): array
    {
        return $this->taxAmount;
    }

    /**
     * @param SearchColumnDoubleField[] $taxBasis
     * @return TaxDetailSearchRowBasic
     */
    public function setTaxBasis(SearchColumnDoubleField $taxBasis): TaxDetailSearchRowBasic
    {
        $this->taxBasis[] = $taxBasis;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxBasis(): array
    {
        return $this->taxBasis;
    }

    /**
     * @param SearchColumnSelectField[] $taxCode
     * @return TaxDetailSearchRowBasic
     */
    public function setTaxCode(SearchColumnSelectField $taxCode): TaxDetailSearchRowBasic
    {
        $this->taxCode[] = $taxCode;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxCode(): array
    {
        return $this->taxCode;
    }

    /**
     * @param SearchColumnDoubleField[] $taxRate
     * @return TaxDetailSearchRowBasic
     */
    public function setTaxRate(SearchColumnDoubleField $taxRate): TaxDetailSearchRowBasic
    {
        $this->taxRate[] = $taxRate;
        return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getTaxRate(): array
    {
        return $this->taxRate;
    }

    /**
     * @param SearchColumnSelectField[] $taxType
     * @return TaxDetailSearchRowBasic
     */
    public function setTaxType(SearchColumnSelectField $taxType): TaxDetailSearchRowBasic
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getTaxType(): array
    {
        return $this->taxType;
    }

    /**
     * @param SearchColumnLongField[] $tranId
     * @return TaxDetailSearchRowBasic
     */
    public function setTranId(SearchColumnLongField $tranId): TaxDetailSearchRowBasic
    {
        $this->tranId[] = $tranId;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getTranId(): array
    {
        return $this->tranId;
    }

}
