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

class SubsidiarySearchRow extends SearchRow {
    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $basic;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $addressJoin;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $returnAddressJoin;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $shippingAddressJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "SubsidiarySearchRowBasic",
        "addressJoin" => "AddressSearchRowBasic",
        "defaultAdvanceToApplyAccountJoin" => "AccountSearchRowBasic",
        "returnAddressJoin" => "AddressSearchRowBasic",
        "shippingAddressJoin" => "AddressSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param SubsidiarySearchRowBasic $basic
     * @return SubsidiarySearchRow
     */
    public function setBasic(SubsidiarySearchRowBasic $basic): SubsidiarySearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getBasic(): SubsidiarySearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AddressSearchRowBasic $addressJoin
     * @return SubsidiarySearchRow
     */
    public function setAddressJoin(AddressSearchRowBasic $addressJoin): SubsidiarySearchRow
    {
        $this->addressJoin = $addressJoin;
        return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getAddressJoin(): AddressSearchRowBasic
    {
        return $this->addressJoin;
    }

    /**
     * @param AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin
     * @return SubsidiarySearchRow
     */
    public function setDefaultAdvanceToApplyAccountJoin(AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin): SubsidiarySearchRow
    {
        $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin(): AccountSearchRowBasic
    {
        return $this->defaultAdvanceToApplyAccountJoin;
    }

    /**
     * @param AddressSearchRowBasic $returnAddressJoin
     * @return SubsidiarySearchRow
     */
    public function setReturnAddressJoin(AddressSearchRowBasic $returnAddressJoin): SubsidiarySearchRow
    {
        $this->returnAddressJoin = $returnAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getReturnAddressJoin(): AddressSearchRowBasic
    {
        return $this->returnAddressJoin;
    }

    /**
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return SubsidiarySearchRow
     */
    public function setShippingAddressJoin(AddressSearchRowBasic $shippingAddressJoin): SubsidiarySearchRow
    {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin(): AddressSearchRowBasic
    {
        return $this->shippingAddressJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return SubsidiarySearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): SubsidiarySearchRow
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
     * @return SubsidiarySearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): SubsidiarySearchRow
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
