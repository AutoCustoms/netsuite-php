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

class SalesTaxItemSearchRow extends SearchRow {
    /**
     * @var SalesTaxItemSearchRowBasic
     */
    protected SalesTaxItemSearchRowBasic $basic;

    /**
     * @var TaxTypeSearchRowBasic
     */
    protected TaxTypeSearchRowBasic $taxTypeJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SalesTaxItemSearchRowBasic",
        "taxTypeJoin" => "TaxTypeSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param SalesTaxItemSearchRowBasic $basic
     * @return SalesTaxItemSearchRow
     */
    public function setBasic(SalesTaxItemSearchRowBasic $basic): SalesTaxItemSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchRowBasic
     */
    public function getBasic(): SalesTaxItemSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param TaxTypeSearchRowBasic $taxTypeJoin
     * @return SalesTaxItemSearchRow
     */
    public function setTaxTypeJoin(TaxTypeSearchRowBasic $taxTypeJoin): SalesTaxItemSearchRow
    {
        $this->taxTypeJoin = $taxTypeJoin;
        return $this;
    }

    /**
     * @return TaxTypeSearchRowBasic
     */
    public function getTaxTypeJoin(): TaxTypeSearchRowBasic
    {
        return $this->taxTypeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return SalesTaxItemSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): SalesTaxItemSearchRow
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin(): EmployeeSearchRowBasic
    {
        return $this->userJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return SalesTaxItemSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): SalesTaxItemSearchRow
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
