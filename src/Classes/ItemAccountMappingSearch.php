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

class ItemAccountMappingSearch extends SearchRecord {
    /**
     * @var ItemAccountMappingSearchBasic
     */
    protected ItemAccountMappingSearchBasic $basic;

    /**
     * @var ClassificationSearchBasic
     */
    protected ClassificationSearchBasic $classJoin;

    /**
     * @var DepartmentSearchBasic
     */
    protected DepartmentSearchBasic $departmentJoin;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $destinationAccountJoin;

    /**
     * @var LocationSearchBasic
     */
    protected LocationSearchBasic $locationJoin;

    /**
     * @var AccountSearchBasic
     */
    protected AccountSearchBasic $sourceAccountJoin;

    /**
     * @var SubsidiarySearchBasic
     */
    protected SubsidiarySearchBasic $subsidiaryJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemAccountMappingSearchBasic",
        "classJoin" => "ClassificationSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "destinationAccountJoin" => "AccountSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "sourceAccountJoin" => "AccountSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ItemAccountMappingSearchBasic $basic
     * @return ItemAccountMappingSearch
     */
    public function setBasic(ItemAccountMappingSearchBasic $basic): ItemAccountMappingSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemAccountMappingSearchBasic
     */
    public function getBasic(): ItemAccountMappingSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ClassificationSearchBasic $classJoin
     * @return ItemAccountMappingSearch
     */
    public function setClassJoin(ClassificationSearchBasic $classJoin): ItemAccountMappingSearch
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchBasic
     */
    public function getClassJoin(): ClassificationSearchBasic
    {
        return $this->classJoin;
    }

    /**
     * @param DepartmentSearchBasic $departmentJoin
     * @return ItemAccountMappingSearch
     */
    public function setDepartmentJoin(DepartmentSearchBasic $departmentJoin): ItemAccountMappingSearch
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchBasic
     */
    public function getDepartmentJoin(): DepartmentSearchBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param AccountSearchBasic $destinationAccountJoin
     * @return ItemAccountMappingSearch
     */
    public function setDestinationAccountJoin(AccountSearchBasic $destinationAccountJoin): ItemAccountMappingSearch
    {
        $this->destinationAccountJoin = $destinationAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getDestinationAccountJoin(): AccountSearchBasic
    {
        return $this->destinationAccountJoin;
    }

    /**
     * @param LocationSearchBasic $locationJoin
     * @return ItemAccountMappingSearch
     */
    public function setLocationJoin(LocationSearchBasic $locationJoin): ItemAccountMappingSearch
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchBasic
     */
    public function getLocationJoin(): LocationSearchBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param AccountSearchBasic $sourceAccountJoin
     * @return ItemAccountMappingSearch
     */
    public function setSourceAccountJoin(AccountSearchBasic $sourceAccountJoin): ItemAccountMappingSearch
    {
        $this->sourceAccountJoin = $sourceAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getSourceAccountJoin(): AccountSearchBasic
    {
        return $this->sourceAccountJoin;
    }

    /**
     * @param SubsidiarySearchBasic $subsidiaryJoin
     * @return ItemAccountMappingSearch
     */
    public function setSubsidiaryJoin(SubsidiarySearchBasic $subsidiaryJoin): ItemAccountMappingSearch
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
     * @return ItemAccountMappingSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ItemAccountMappingSearch
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
