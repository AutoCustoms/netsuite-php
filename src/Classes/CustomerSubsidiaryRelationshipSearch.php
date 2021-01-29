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

class CustomerSubsidiaryRelationshipSearch extends SearchRecord {
    /**
     * @var CustomerSubsidiaryRelationshipSearchBasic
     */
    protected CustomerSubsidiaryRelationshipSearchBasic $basic;

    /**
     * @var CustomerSearchBasic
     */
    protected CustomerSearchBasic $customerJoin;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $subsidiaryJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "CustomerSubsidiaryRelationshipSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param CustomerSubsidiaryRelationshipSearchBasic $basic
     * @return CustomerSubsidiaryRelationshipSearch
     */
    public function setBasic(CustomerSubsidiaryRelationshipSearchBasic $basic): CustomerSubsidiaryRelationshipSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return CustomerSubsidiaryRelationshipSearchBasic
     */
    public function getBasic(): CustomerSubsidiaryRelationshipSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return CustomerSubsidiaryRelationshipSearch
     */
    public function setCustomerJoin(CustomerSearchBasic $customerJoin): CustomerSubsidiaryRelationshipSearch
    {
        $this->customerJoin = $customerJoin;
        return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin(): CustomerSearchBasic
    {
        return $this->customerJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return CustomerSubsidiaryRelationshipSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin): CustomerSubsidiaryRelationshipSearch
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return CustomerSubsidiaryRelationshipSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): CustomerSubsidiaryRelationshipSearch
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
