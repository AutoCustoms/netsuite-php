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

class LandedCostSummary {
    /**
     * @var RecordRef
     */
    protected RecordRef $category;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var LandedCostSource
     */
    protected LandedCostSource $source;

    /**
     * @var RecordRef
     */
    protected RecordRef $transaction;

    static $paramtypesmap = array(
        "category" => "RecordRef",
        "amount" => "float",
        "source" => "LandedCostSource",
        "transaction" => "RecordRef",
    );

    /**
     * @param RecordRef $category
     * @return LandedCostSummary
     */
    public function setCategory(RecordRef $category): LandedCostSummary
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory(): RecordRef
    {
        return $this->category;
    }

    /**
     * @param float $amount
     * @return LandedCostSummary
     */
    public function setAmount(float $amount): LandedCostSummary
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param LandedCostSource $source
     * @return LandedCostSummary
     */
    public function setSource(LandedCostSource $source): LandedCostSummary
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return LandedCostSource
     */
    public function getSource(): LandedCostSource
    {
        return $this->source;
    }

    /**
     * @param RecordRef $transaction
     * @return LandedCostSummary
     */
    public function setTransaction(RecordRef $transaction): LandedCostSummary
    {
        $this->transaction = $transaction;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction(): RecordRef
    {
        return $this->transaction;
    }

}
