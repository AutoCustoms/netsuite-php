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

class ItemAccountingBookDetail {
    /**
     * @var RecordRef
     */
    protected RecordRef $accountingBook;

    /**
     * @var RecordRef
     */
    protected RecordRef $createRevenuePlansOn;

    /**
     * @var RecordRef
     */
    protected RecordRef $revenueRecognitionRule;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecForecastRule;

    /**
     * @var RecordRef
     */
    protected RecordRef $revRecSchedule;

    /**
     * @var bool
     */
    protected bool $sameAsPrimaryRevRec;

    /**
     * @var RecordRef
     */
    protected RecordRef $amortizationTemplate;

    /**
     * @var bool
     */
    protected bool $sameAsPrimaryAmortization;

    static $paramtypesmap = array(
        "accountingBook" => "RecordRef",
        "createRevenuePlansOn" => "RecordRef",
        "revenueRecognitionRule" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "revRecSchedule" => "RecordRef",
        "sameAsPrimaryRevRec" => "boolean",
        "amortizationTemplate" => "RecordRef",
        "sameAsPrimaryAmortization" => "boolean",
    );

    /**
     * @param RecordRef $accountingBook
     * @return ItemAccountingBookDetail
     */
    public function setAccountingBook(RecordRef $accountingBook): ItemAccountingBookDetail
    {
        $this->accountingBook = $accountingBook;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAccountingBook(): RecordRef
    {
        return $this->accountingBook;
    }

    /**
     * @param RecordRef $createRevenuePlansOn
     * @return ItemAccountingBookDetail
     */
    public function setCreateRevenuePlansOn(RecordRef $createRevenuePlansOn): ItemAccountingBookDetail
    {
        $this->createRevenuePlansOn = $createRevenuePlansOn;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCreateRevenuePlansOn(): RecordRef
    {
        return $this->createRevenuePlansOn;
    }

    /**
     * @param RecordRef $revenueRecognitionRule
     * @return ItemAccountingBookDetail
     */
    public function setRevenueRecognitionRule(RecordRef $revenueRecognitionRule): ItemAccountingBookDetail
    {
        $this->revenueRecognitionRule = $revenueRecognitionRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevenueRecognitionRule(): RecordRef
    {
        return $this->revenueRecognitionRule;
    }

    /**
     * @param RecordRef $revRecForecastRule
     * @return ItemAccountingBookDetail
     */
    public function setRevRecForecastRule(RecordRef $revRecForecastRule): ItemAccountingBookDetail
    {
        $this->revRecForecastRule = $revRecForecastRule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecForecastRule(): RecordRef
    {
        return $this->revRecForecastRule;
    }

    /**
     * @param RecordRef $revRecSchedule
     * @return ItemAccountingBookDetail
     */
    public function setRevRecSchedule(RecordRef $revRecSchedule): ItemAccountingBookDetail
    {
        $this->revRecSchedule = $revRecSchedule;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRevRecSchedule(): RecordRef
    {
        return $this->revRecSchedule;
    }

    /**
     * @param bool $sameAsPrimaryRevRec
     * @return ItemAccountingBookDetail
     */
    public function setSameAsPrimaryRevRec(bool $sameAsPrimaryRevRec): ItemAccountingBookDetail
    {
        $this->sameAsPrimaryRevRec = $sameAsPrimaryRevRec;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSameAsPrimaryRevRec(): bool
    {
        return $this->sameAsPrimaryRevRec;
    }

    /**
     * @param RecordRef $amortizationTemplate
     * @return ItemAccountingBookDetail
     */
    public function setAmortizationTemplate(RecordRef $amortizationTemplate): ItemAccountingBookDetail
    {
        $this->amortizationTemplate = $amortizationTemplate;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getAmortizationTemplate(): RecordRef
    {
        return $this->amortizationTemplate;
    }

    /**
     * @param bool $sameAsPrimaryAmortization
     * @return ItemAccountingBookDetail
     */
    public function setSameAsPrimaryAmortization(bool $sameAsPrimaryAmortization): ItemAccountingBookDetail
    {
        $this->sameAsPrimaryAmortization = $sameAsPrimaryAmortization;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSameAsPrimaryAmortization(): bool
    {
        return $this->sameAsPrimaryAmortization;
    }

}
