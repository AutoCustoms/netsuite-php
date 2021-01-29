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

class BomRevisionSearch extends SearchRecord {
    /**
     * @var BomRevisionSearchBasic
     */
    protected BomRevisionSearchBasic $basic;

    /**
     * @var BomSearchBasic
     */
    protected BomSearchBasic $billOfMaterialsJoin;

    /**
     * @var BomRevisionComponentSearchBasic
     */
    protected BomRevisionComponentSearchBasic $componentJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BomRevisionSearchBasic",
        "billOfMaterialsJoin" => "BomSearchBasic",
        "componentJoin" => "BomRevisionComponentSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param BomRevisionSearchBasic $basic
     * @return BomRevisionSearch
     */
    public function setBasic(BomRevisionSearchBasic $basic): BomRevisionSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BomRevisionSearchBasic
     */
    public function getBasic(): BomRevisionSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param BomSearchBasic $billOfMaterialsJoin
     * @return BomRevisionSearch
     */
    public function setBillOfMaterialsJoin(BomSearchBasic $billOfMaterialsJoin): BomRevisionSearch
    {
        $this->billOfMaterialsJoin = $billOfMaterialsJoin;
        return $this;
    }

    /**
     * @return BomSearchBasic
     */
    public function getBillOfMaterialsJoin(): BomSearchBasic
    {
        return $this->billOfMaterialsJoin;
    }

    /**
     * @param BomRevisionComponentSearchBasic $componentJoin
     * @return BomRevisionSearch
     */
    public function setComponentJoin(BomRevisionComponentSearchBasic $componentJoin): BomRevisionSearch
    {
        $this->componentJoin = $componentJoin;
        return $this;
    }

    /**
     * @return BomRevisionComponentSearchBasic
     */
    public function getComponentJoin(): BomRevisionComponentSearchBasic
    {
        return $this->componentJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return BomRevisionSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): BomRevisionSearch
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin(): TransactionSearchBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return BomRevisionSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): BomRevisionSearch
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
