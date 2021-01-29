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

class VendorSubsidiaryRelationshipSearchRow extends SearchRow {
    /**
     * @var VendorSubsidiaryRelationshipSearchRowBasic
     */
    protected VendorSubsidiaryRelationshipSearchRowBasic $basic;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $subsidiaryJoin;

    /**
     * @var VendorSearchRowBasic
     */
    protected VendorSearchRowBasic $vendorJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "VendorSubsidiaryRelationshipSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "vendorJoin" => "VendorSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param VendorSubsidiaryRelationshipSearchRowBasic $basic
     * @return VendorSubsidiaryRelationshipSearchRow
     */
    public function setBasic(VendorSubsidiaryRelationshipSearchRowBasic $basic): VendorSubsidiaryRelationshipSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return VendorSubsidiaryRelationshipSearchRowBasic
     */
    public function getBasic(): VendorSubsidiaryRelationshipSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return VendorSubsidiaryRelationshipSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin): VendorSubsidiaryRelationshipSearchRow
    {
        $this->subsidiaryJoin = $subsidiaryJoin;
        return $this;
    }

    /**
     * @return SubsidiarySearchRowBasic
     */
    public function getSubsidiaryJoin(): SubsidiarySearchRowBasic
    {
        return $this->subsidiaryJoin;
    }

    /**
     * @param VendorSearchRowBasic $vendorJoin
     * @return VendorSubsidiaryRelationshipSearchRow
     */
    public function setVendorJoin(VendorSearchRowBasic $vendorJoin): VendorSubsidiaryRelationshipSearchRow
    {
        $this->vendorJoin = $vendorJoin;
        return $this;
    }

    /**
     * @return VendorSearchRowBasic
     */
    public function getVendorJoin(): VendorSearchRowBasic
    {
        return $this->vendorJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return VendorSubsidiaryRelationshipSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): VendorSubsidiaryRelationshipSearchRow
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
