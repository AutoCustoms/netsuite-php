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

class EntityTaxRegistrationSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $address;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $nexusCountry;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $taxRegistrationNumber;

    static $paramtypesmap = array(
        "address" => "SearchMultiSelectField",
        "id" => "SearchLongField",
        "nexusCountry" => "SearchEnumMultiSelectField",
        "taxRegistrationNumber" => "SearchStringField",
    );

    /**
     * @param SearchMultiSelectField $address
     * @return EntityTaxRegistrationSearchBasic
     */
    public function setAddress(SearchMultiSelectField $address): EntityTaxRegistrationSearchBasic
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAddress(): SearchMultiSelectField
    {
        return $this->address;
    }

    /**
     * @param SearchLongField $id
     * @return EntityTaxRegistrationSearchBasic
     */
    public function setId(SearchLongField $id): EntityTaxRegistrationSearchBasic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId(): SearchLongField
    {
        return $this->id;
    }

    /**
     * @param SearchEnumMultiSelectField $nexusCountry
     * @return EntityTaxRegistrationSearchBasic
     */
    public function setNexusCountry(SearchEnumMultiSelectField $nexusCountry): EntityTaxRegistrationSearchBasic
    {
        $this->nexusCountry = $nexusCountry;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getNexusCountry(): SearchEnumMultiSelectField
    {
        return $this->nexusCountry;
    }

    /**
     * @param SearchStringField $taxRegistrationNumber
     * @return EntityTaxRegistrationSearchBasic
     */
    public function setTaxRegistrationNumber(SearchStringField $taxRegistrationNumber): EntityTaxRegistrationSearchBasic
    {
        $this->taxRegistrationNumber = $taxRegistrationNumber;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTaxRegistrationNumber(): SearchStringField
    {
        return $this->taxRegistrationNumber;
    }

}
