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

class TaxDetails {
    /**
     * @var string
     */
    protected string $taxDetailsReference;

    /**
     * @var string
     */
    protected string $lineType;

    /**
     * @var string
     */
    protected string $lineName;

    /**
     * @var float
     */
    protected float $netAmount;

    /**
     * @var float
     */
    protected float $grossAmount;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxType;

    /**
     * @var RecordRef
     */
    protected RecordRef $taxCode;

    /**
     * @var float
     */
    protected float $taxBasis;

    /**
     * @var float
     */
    protected float $taxRate;

    /**
     * @var float
     */
    protected float $taxAmount;

    /**
     * @var string
     */
    protected string $calcDetail;

    static $paramtypesmap = array(
        "taxDetailsReference" => "string",
        "lineType" => "string",
        "lineName" => "string",
        "netAmount" => "float",
        "grossAmount" => "float",
        "taxType" => "RecordRef",
        "taxCode" => "RecordRef",
        "taxBasis" => "float",
        "taxRate" => "float",
        "taxAmount" => "float",
        "calcDetail" => "string",
    );

    /**
     * @param string $taxDetailsReference
     * @return TaxDetails
     */
    public function setTaxDetailsReference(string $taxDetailsReference): TaxDetails
    {
        $this->taxDetailsReference = $taxDetailsReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxDetailsReference(): string
    {
        return $this->taxDetailsReference;
    }

    /**
     * @param string $lineType
     * @return TaxDetails
     */
    public function setLineType(string $lineType): TaxDetails
    {
        $this->lineType = $lineType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineType(): string
    {
        return $this->lineType;
    }

    /**
     * @param string $lineName
     * @return TaxDetails
     */
    public function setLineName(string $lineName): TaxDetails
    {
        $this->lineName = $lineName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLineName(): string
    {
        return $this->lineName;
    }

    /**
     * @param float $netAmount
     * @return TaxDetails
     */
    public function setNetAmount(float $netAmount): TaxDetails
    {
        $this->netAmount = $netAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount(): float
    {
        return $this->netAmount;
    }

    /**
     * @param float $grossAmount
     * @return TaxDetails
     */
    public function setGrossAmount(float $grossAmount): TaxDetails
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount(): float
    {
        return $this->grossAmount;
    }

    /**
     * @param RecordRef $taxType
     * @return TaxDetails
     */
    public function setTaxType(RecordRef $taxType): TaxDetails
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxType(): RecordRef
    {
        return $this->taxType;
    }

    /**
     * @param RecordRef $taxCode
     * @return TaxDetails
     */
    public function setTaxCode(RecordRef $taxCode): TaxDetails
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTaxCode(): RecordRef
    {
        return $this->taxCode;
    }

    /**
     * @param float $taxBasis
     * @return TaxDetails
     */
    public function setTaxBasis(float $taxBasis): TaxDetails
    {
        $this->taxBasis = $taxBasis;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxBasis(): float
    {
        return $this->taxBasis;
    }

    /**
     * @param float $taxRate
     * @return TaxDetails
     */
    public function setTaxRate(float $taxRate): TaxDetails
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxRate(): float
    {
        return $this->taxRate;
    }

    /**
     * @param float $taxAmount
     * @return TaxDetails
     */
    public function setTaxAmount(float $taxAmount): TaxDetails
    {
        $this->taxAmount = $taxAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    /**
     * @param string $calcDetail
     * @return TaxDetails
     */
    public function setCalcDetail(string $calcDetail): TaxDetails
    {
        $this->calcDetail = $calcDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getCalcDetail(): string
    {
        return $this->calcDetail;
    }

}
