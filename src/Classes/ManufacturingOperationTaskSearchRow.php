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

class ManufacturingOperationTaskSearchRow extends SearchRow {
    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected ManufacturingOperationTaskSearchRowBasic $basic;

    /**
     * @var ManufacturingOperationTaskSearchRowBasic
     */
    protected ManufacturingOperationTaskSearchRowBasic $predecessorJoin;

    /**
     * @var EmployeeSearchRowBasic
     */
    protected EmployeeSearchRowBasic $userJoin;

    /**
     * @var TransactionSearchRowBasic
     */
    protected TransactionSearchRowBasic $workOrderJoin;

    /**
     * @var CustomSearchRowBasic[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingOperationTaskSearchRowBasic",
        "predecessorJoin" => "ManufacturingOperationTaskSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "workOrderJoin" => "TransactionSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $basic
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setBasic(ManufacturingOperationTaskSearchRowBasic $basic): ManufacturingOperationTaskSearchRow
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getBasic(): ManufacturingOperationTaskSearchRowBasic
    {
        return $this->basic;
    }

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $predecessorJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setPredecessorJoin(ManufacturingOperationTaskSearchRowBasic $predecessorJoin): ManufacturingOperationTaskSearchRow
    {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getPredecessorJoin(): ManufacturingOperationTaskSearchRowBasic
    {
        return $this->predecessorJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin): ManufacturingOperationTaskSearchRow
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
     * @param TransactionSearchRowBasic $workOrderJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setWorkOrderJoin(TransactionSearchRowBasic $workOrderJoin): ManufacturingOperationTaskSearchRow
    {
        $this->workOrderJoin = $workOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getWorkOrderJoin(): TransactionSearchRowBasic
    {
        return $this->workOrderJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return ManufacturingOperationTaskSearchRow
     */
    public function setCustomSearchJoin(CustomSearchRowBasic $customSearchJoin): ManufacturingOperationTaskSearchRow
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
