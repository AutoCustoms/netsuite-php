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

class VendorSubsidiaryRelationshipSearch extends SearchRecord {
    /**
     * @var VendorSubsidiaryRelationshipSearchBasic
     */
    protected VendorSubsidiaryRelationshipSearchBasic $basic;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $subsidiaryJoin;

    /**
     * @var VendorSearchBasic
     */
    protected VendorSearchBasic $vendorJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "VendorSubsidiaryRelationshipSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "vendorJoin" => "VendorSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param VendorSubsidiaryRelationshipSearchBasic $basic
     * @return VendorSubsidiaryRelationshipSearch
     */
    public function setBasic(VendorSubsidiaryRelationshipSearchBasic $basic): VendorSubsidiaryRelationshipSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return VendorSubsidiaryRelationshipSearchBasic
     */
    public function getBasic(): VendorSubsidiaryRelationshipSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return VendorSubsidiaryRelationshipSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin): VendorSubsidiaryRelationshipSearch
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
     * @param VendorSearchBasic $vendorJoin
     * @return VendorSubsidiaryRelationshipSearch
     */
    public function setVendorJoin(VendorSearchBasic $vendorJoin): VendorSubsidiaryRelationshipSearch
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchBasic
     */
    public function getVendorJoin(): VendorSearchBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return VendorSubsidiaryRelationshipSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): VendorSubsidiaryRelationshipSearch
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
