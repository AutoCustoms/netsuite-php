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

class GlobalAccountMappingSearchRow extends SearchRow {
    /**
     * @var GlobalAccountMappingSearchRowBasic
     */
    protected GlobalAccountMappingSearchRowBasic $basic;

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
        "basic" => "GlobalAccountMappingSearchRowBasic",
        "classJoin" => "ClassificationSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "destinationAccountJoin" => "AccountSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "sourceAccountJoin" => "AccountSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param GlobalAccountMappingSearchRowBasic $basic
     * @return GlobalAccountMappingSearchRow
     */
    public function setBasic(GlobalAccountMappingSearchRowBasic $basic): GlobalAccountMappingSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return GlobalAccountMappingSearchRowBasic
     */
    public function getBasic(): GlobalAccountMappingSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ClassificationSearchRowBasic $classJoin
     * @return GlobalAccountMappingSearchRow
     */
    public function setClassJoin(ClassificationSearchRowBasic $classJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setDepartmentJoin(DepartmentSearchRowBasic $departmentJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setDestinationAccountJoin(AccountSearchRowBasic $destinationAccountJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setLocationJoin(LocationSearchRowBasic $locationJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setSourceAccountJoin(AccountSearchRowBasic $sourceAccountJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setSubsidiaryJoin(SubsidiarySearchRowBasic $subsidiaryJoin): GlobalAccountMappingSearchRow
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
     * @return GlobalAccountMappingSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): GlobalAccountMappingSearchRow
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
