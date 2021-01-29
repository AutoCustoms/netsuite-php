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

class EntityTaxRegistrationSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $address;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $nexusCountry;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $taxRegistrationNumber;

    static $paramtypesmap = array(
        "address" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "nexusCountry" => "SearchColumnEnumSelectField[]",
        "taxRegistrationNumber" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnSelectField[] $address
     * @return EntityTaxRegistrationSearchRowBasic
     */
    public function setAddress(SearchColumnSelectField $address): EntityTaxRegistrationSearchRowBasic
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param SearchColumnLongField[] $id
     * @return EntityTaxRegistrationSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): EntityTaxRegistrationSearchRowBasic
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param SearchColumnEnumSelectField[] $nexusCountry
     * @return EntityTaxRegistrationSearchRowBasic
     */
    public function setNexusCountry(SearchColumnEnumSelectField $nexusCountry): EntityTaxRegistrationSearchRowBasic
    {
        $this->nexusCountry[] = $nexusCountry;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getNexusCountry(): array
    {
        return $this->nexusCountry;
    }

    /**
     * @param SearchColumnStringField[] $taxRegistrationNumber
     * @return EntityTaxRegistrationSearchRowBasic
     */
    public function setTaxRegistrationNumber(SearchColumnStringField $taxRegistrationNumber): EntityTaxRegistrationSearchRowBasic
    {
        $this->taxRegistrationNumber[] = $taxRegistrationNumber;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTaxRegistrationNumber(): array
    {
        return $this->taxRegistrationNumber;
    }

}
