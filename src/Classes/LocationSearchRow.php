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

class LocationSearchRow extends SearchRow {
    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $basic;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $addressJoin;

    /**
     * @var AddressSearchRowBasic
     */
    protected AddressSearchRowBasic $returnAddressJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "LocationSearchRowBasic",
        "addressJoin" => "AddressSearchRowBasic",
        "returnAddressJoin" => "AddressSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param LocationSearchRowBasic $basic
     * @return LocationSearchRow
     */
    public function setBasic(LocationSearchRowBasic $basic): LocationSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getBasic(): LocationSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param AddressSearchRowBasic $addressJoin
     * @return LocationSearchRow
     */
    public function setAddressJoin(AddressSearchRowBasic $addressJoin): LocationSearchRow
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
     * @param AddressSearchRowBasic $returnAddressJoin
     * @return LocationSearchRow
     */
    public function setReturnAddressJoin(AddressSearchRowBasic $returnAddressJoin): LocationSearchRow
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
     * @param EmployeeSearchRowBasic $userJoin
     * @return LocationSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): LocationSearchRow
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
     * @return LocationSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): LocationSearchRow
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
