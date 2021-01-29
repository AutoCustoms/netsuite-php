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

class SalesTaxItemSearch extends SearchRecord {
    /**
     * @var SalesTaxItemSearchBasic
     */
    protected SalesTaxItemSearchBasic $basic;

    /**
     * @var TaxTypeSearchBasic
     */
    protected TaxTypeSearchBasic $taxTypeJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SalesTaxItemSearchBasic",
        "taxTypeJoin" => "TaxTypeSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param SalesTaxItemSearchBasic $basic
     * @return SalesTaxItemSearch
     */
    public function setBasic(SalesTaxItemSearchBasic $basic): SalesTaxItemSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SalesTaxItemSearchBasic
     */
    public function getBasic(): SalesTaxItemSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param TaxTypeSearchBasic $taxTypeJoin
     * @return SalesTaxItemSearch
     */
    public function setTaxTypeJoin(TaxTypeSearchBasic $taxTypeJoin): SalesTaxItemSearch
    {
        $this->taxTypeJoin = $taxTypeJoin;
        return $this;
    }

    /**
     * @return TaxTypeSearchBasic
     */
    public function getTaxTypeJoin(): TaxTypeSearchBasic
    {
        return $this->taxTypeJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return SalesTaxItemSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): SalesTaxItemSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return SalesTaxItemSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): SalesTaxItemSearch
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
