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

class LocationSearch extends SearchRecord {
    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $basic;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $addressJoin;

    /**
     * @var AddressSearchBasic
     */
    protected AddressSearchBasic $returnAddressJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "LocationSearchBasic",
        "addressJoin" => "AddressSearchBasic",
        "returnAddressJoin" => "AddressSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param LocationSearchBasic $basic
     * @return LocationSearch
     */
    public function setBasic(LocationSearchBasic $basic): LocationSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getBasic(): LocationSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param AddressSearchBasic $addressJoin
     * @return LocationSearch
     */
    public function setAddressJoin(AddressSearchBasic $addressJoin): LocationSearch
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
     * @param AddressSearchBasic $returnAddressJoin
     * @return LocationSearch
     */
    public function setReturnAddressJoin(AddressSearchBasic $returnAddressJoin): LocationSearch
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
     * @param EmployeeSearchBasic $userJoin
     * @return LocationSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): LocationSearch
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
     * @return LocationSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): LocationSearch
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
