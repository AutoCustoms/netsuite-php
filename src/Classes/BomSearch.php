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

class BomSearch extends SearchRecord {
    /**
     * @var BomSearchBasic
     */
    protected BomSearchBasic $basic;

    /**
     * @var AssemblyItemBomSearchBasic
     */
    protected AssemblyItemBomSearchBasic $assemblyItemJoin;

    /**
     * @var BomRevisionSearchBasic
     */
    protected BomRevisionSearchBasic $revisionJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $transactionJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "BomSearchBasic",
        "assemblyItemJoin" => "AssemblyItemBomSearchBasic",
        "revisionJoin" => "BomRevisionSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param BomSearchBasic $basic
     * @return BomSearch
     */
    public function setBasic(BomSearchBasic $basic): BomSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return BomSearchBasic
     */
    public function getBasic(): BomSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AssemblyItemBomSearchBasic $assemblyItemJoin
     * @return BomSearch
     */
    public function setAssemblyItemJoin(AssemblyItemBomSearchBasic $assemblyItemJoin): BomSearch
    {
        $this->assemblyItemJoin = $assemblyItemJoin;
        return $this;
    }

    /**
     * @return AssemblyItemBomSearchBasic
     */
    public function getAssemblyItemJoin(): AssemblyItemBomSearchBasic
    {
        return $this->assemblyItemJoin;
    }

    /**
     * @param BomRevisionSearchBasic $revisionJoin
     * @return BomSearch
     */
    public function setRevisionJoin(BomRevisionSearchBasic $revisionJoin): BomSearch
    {
        $this->revisionJoin = $revisionJoin;
        return $this;
    }

    /**
     * @return BomRevisionSearchBasic
     */
    public function getRevisionJoin(): BomRevisionSearchBasic
    {
        return $this->revisionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return BomSearch
     */
    public function setTransactionJoin(TransactionSearchBasic $transactionJoin): BomSearch
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
     * @return BomSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): BomSearch
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
