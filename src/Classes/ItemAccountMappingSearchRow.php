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

class ItemAccountMappingSearchRow extends SearchRow {
    /**
     * @var ItemAccountMappingSearchRowBasic
     */
    protected ItemAccountMappingSearchRowBasic $basic;

    /**
     * @var ClassificationSearchRowBasic
     */
    protected ClassificationSearchRowBasic $classJoin;

    /**
     * @var DepartmentSearchRowBasic
     */
    protected DepartmentSearchRowBasic $departmentJoin;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $destinationAccountJoin;

    /**
     * @var LocationSearchRowBasic
     */
    protected LocationSearchRowBasic $locationJoin;

    /**
     * @var AccountSearchRowBasic
     */
    protected AccountSearchRowBasic $sourceAccountJoin;

    /**
     * @var SubsidiarySearchRowBasic
     */
    protected SubsidiarySearchRowBasic $subsidiaryJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ItemAccountMappingSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "destinationAccountJoin" => "AccountSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "sourceAccountJoin" => "AccountSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ItemAccountMappingSearchRowBasic $basic
     * @return ItemAccountMappingSearchRow
     */
    public function setBasic(ItemAccountMappingSearchRowBasic $basic): ItemAccountMappingSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ItemAccountMappingSearchRowBasic
     */
    public function getBasic(): ItemAccountMappingSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin): ItemAccountMappingSearchRow
    {
        $this->classJoin = $classJoin;
        return $this;
    }

    /**
     * @return ClassificationSearchRowBasic
     */
    public function getClassJoin(): ClassificationSearchRowBasic
    {
        return $this->classJoin;
    }

    /**
     * @param DepartmentSearchRowBasic $departmentJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): ItemAccountMappingSearchRow
    {
        $this->departmentJoin = $departmentJoin;
        return $this;
    }

    /**
     * @return DepartmentSearchRowBasic
     */
    public function getDepartmentJoin(): DepartmentSearchRowBasic
    {
        return $this->departmentJoin;
    }

    /**
     * @param AccountSearchRowBasic $destinationAccountJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setDestinationAccountJoin(AccountSearchRowBasic $destinationAccountJoin): ItemAccountMappingSearchRow
    {
        $this->destinationAccountJoin = $destinationAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getDestinationAccountJoin(): AccountSearchRowBasic
    {
        return $this->destinationAccountJoin;
    }

    /**
     * @param LocationSearchRowBasic $locationJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): ItemAccountMappingSearchRow
    {
        $this->locationJoin = $locationJoin;
        return $this;
    }

    /**
     * @return LocationSearchRowBasic
     */
    public function getLocationJoin(): LocationSearchRowBasic
    {
        return $this->locationJoin;
    }

    /**
     * @param AccountSearchRowBasic $sourceAccountJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setSourceAccountJoin(AccountSearchRowBasic $sourceAccountJoin): ItemAccountMappingSearchRow
    {
        $this->sourceAccountJoin = $sourceAccountJoin;
        return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getSourceAccountJoin(): AccountSearchRowBasic
    {
        return $this->sourceAccountJoin;
    }

    /**
     * @param SubsidiarySearchRowBasic $subsidiaryJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin): ItemAccountMappingSearchRow
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
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ItemAccountMappingSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ItemAccountMappingSearchRow
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
