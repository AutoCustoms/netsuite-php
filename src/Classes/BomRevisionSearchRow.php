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

class BomRevisionSearchRow extends SearchRow {
    /**
     * @var BomRevisionSearchRowBasic
     */
    protected BomRevisionSearchRowBasic $basic;

    /**
     * @var BomSearchRowBasic
     */
    protected BomSearchRowBasic $billOfMaterialsJoin;

    /**
     * @var BomRevisionComponentSearchRowBasic
     */
    protected BomRevisionComponentSearchRowBasic $componentJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BomRevisionSearchRowBasic",
        "billOfMaterialsJoin" => "BomSearchRowBasic",
        "componentJoin" => "BomRevisionComponentSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param BomRevisionSearchRowBasic $basic
     * @return BomRevisionSearchRow
     */
    public function setBasic(BomRevisionSearchRowBasic $basic): BomRevisionSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BomRevisionSearchRowBasic
     */
    public function getBasic(): BomRevisionSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param BomSearchRowBasic $billOfMaterialsJoin
     * @return BomRevisionSearchRow
     */
    public function setBillOfMaterialsJoin(BomSearchRowBasic $billOfMaterialsJoin): BomRevisionSearchRow
    {
        $this->billOfMaterialsJoin = $billOfMaterialsJoin;
        return $this;
    }

    /**
     * @return BomSearchRowBasic
     */
    public function getBillOfMaterialsJoin(): BomSearchRowBasic
    {
        return $this->billOfMaterialsJoin;
    }

    /**
     * @param BomRevisionComponentSearchRowBasic $componentJoin
     * @return BomRevisionSearchRow
     */
    public function setComponentJoin(BomRevisionComponentSearchRowBasic $componentJoin): BomRevisionSearchRow
    {
        $this->componentJoin = $componentJoin;
        return $this;
    }

    /**
     * @return BomRevisionComponentSearchRowBasic
     */
    public function getComponentJoin(): BomRevisionComponentSearchRowBasic
    {
        return $this->componentJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return BomRevisionSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): BomRevisionSearchRow
    {
        $this->transactionJoin = $transactionJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin(): TransactionSearchRowBasic
    {
        return $this->transactionJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return BomRevisionSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): BomRevisionSearchRow
    {
        $this->customSearchJoin[] = $customSearchJoin;
        return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin(): array
    {
        return $this->customSearchJoin;
    }

}
