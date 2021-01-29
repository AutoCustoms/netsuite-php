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

class BomSearchRow extends SearchRow {
    /**
     * @var BomSearchRowBasic
     */
    protected BomSearchRowBasic $basic;

    /**
     * @var AssemblyItemBomSearchRowBasic
     */
    protected AssemblyItemBomSearchRowBasic $assemblyItemJoin;

    /**
     * @var BomRevisionSearchRowBasic
     */
    protected BomRevisionSearchRowBasic $revisionJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $transactionJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BomSearchRowBasic",
        "assemblyItemJoin" => "AssemblyItemBomSearchRowBasic",
        "revisionJoin" => "BomRevisionSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param BomSearchRowBasic $basic
     * @return BomSearchRow
     */
    public function setBasic(BomSearchRowBasic $basic): BomSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BomSearchRowBasic
     */
    public function getBasic(): BomSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AssemblyItemBomSearchRowBasic $assemblyItemJoin
     * @return BomSearchRow
     */
    public function setAssemblyItemJoin(AssemblyItemBomSearchRowBasic $assemblyItemJoin): BomSearchRow
    {
        $this->assemblyItemJoin = $assemblyItemJoin;
        return $this;
    }

    /**
     * @return AssemblyItemBomSearchRowBasic
     */
    public function getAssemblyItemJoin(): AssemblyItemBomSearchRowBasic
    {
        return $this->assemblyItemJoin;
    }

    /**
     * @param BomRevisionSearchRowBasic $revisionJoin
     * @return BomSearchRow
     */
    public function setRevisionJoin(BomRevisionSearchRowBasic $revisionJoin): BomSearchRow
    {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * @return BomRevisionSearchRowBasic
     */
    public function getRevisionJoin(): BomRevisionSearchRowBasic
    {
        return $this->revisionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return BomSearchRow
     */
    public function setTransactionJoin(TransactionSearchRowBasic $transactionJoin): BomSearchRow
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
     * @return BomSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): BomSearchRow
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
