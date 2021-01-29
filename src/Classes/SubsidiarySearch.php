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

class SubsidiarySearch extends SearchRecord {
    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $basic;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $addressJoin;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $defaultAdvanceToApplyAccountJoin;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $returnAddressJoin;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $shippingAddressJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SubsidiarySearchBasic",
        "addressJoin" => "AddressSearchBasic",
        "defaultAdvanceToApplyAccountJoin" => "AccountSearchBasic",
        "returnAddressJoin" => "AddressSearchBasic",
        "shippingAddressJoin" => "AddressSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param SubsidiarySearchBasic $basic
     * @return SubsidiarySearch
     */
    public function setBasic(SubsidiarySearchBasic $basic): SubsidiarySearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getBasic(): SubsidiarySearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AddressSearchBasic $addressJoin
     * @return SubsidiarySearch
     */
    public function setAddressJoin(AddressSearchBasic $addressJoin): SubsidiarySearch
    {
        $this->addressJoin = $addressJoin;
        return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getAddressJoin(): AddressSearchBasic
    {
        return $this->addressJoin;
    }

    /**
     * @param AccountSearchBasic $defaultAdvanceToApplyAccountJoin
     * @return SubsidiarySearch
     */
    public function setDefaultAdvanceToApplyAccountJoin(AccountSearchBasic $defaultAdvanceToApplyAccountJoin): SubsidiarySearch
    {
        $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin(): AccountSearchBasic
    {
        return $this->defaultAdvanceToApplyAccountJoin;
    }

    /**
     * @param AddressSearchBasic $returnAddressJoin
     * @return SubsidiarySearch
     */
    public function setReturnAddressJoin(AddressSearchBasic $returnAddressJoin): SubsidiarySearch
    {
        $this->returnAddressJoin = $returnAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getReturnAddressJoin(): AddressSearchBasic
    {
        return $this->returnAddressJoin;
    }

    /**
     * @param AddressSearchBasic $shippingAddressJoin
     * @return SubsidiarySearch
     */
    public function setShippingAddressJoin(AddressSearchBasic $shippingAddressJoin): SubsidiarySearch
    {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin(): AddressSearchBasic
    {
        return $this->shippingAddressJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return SubsidiarySearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): SubsidiarySearch
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
     * @return SubsidiarySearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): SubsidiarySearch
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
