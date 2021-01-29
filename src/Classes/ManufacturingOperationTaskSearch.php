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

class ManufacturingOperationTaskSearch extends SearchRecord {
    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected ManufacturingOperationTaskSearchBasic $basic;

    /**
     * @var ManufacturingOperationTaskSearchBasic
     */
    protected ManufacturingOperationTaskSearchBasic $predecessorJoin;

    /**
     * @var EmployeeSearchBasic
     */
    protected EmployeeSearchBasic $userJoin;

    /**
     * @var TransactionSearchBasic
     */
    protected TransactionSearchBasic $workOrderJoin;

    /**
     * @var CustomSearchJoin[]
     */
    protected array $customSearchJoin;

    static $paramtypesmap = array(
        "basic" => "ManufacturingOperationTaskSearchBasic",
        "predecessorJoin" => "ManufacturingOperationTaskSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "workOrderJoin" => "TransactionSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * @param ManufacturingOperationTaskSearchBasic $basic
     * @return ManufacturingOperationTaskSearch
     */
    public function setBasic(ManufacturingOperationTaskSearchBasic $basic): ManufacturingOperationTaskSearch
    {
        $this->basic = $basic;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getBasic(): ManufacturingOperationTaskSearchBasic
    {
        return $this->basic;
    }

    /**
     * @param ManufacturingOperationTaskSearchBasic $predecessorJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setPredecessorJoin(ManufacturingOperationTaskSearchBasic $predecessorJoin): ManufacturingOperationTaskSearch
    {
        $this->predecessorJoin = $predecessorJoin;
        return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchBasic
     */
    public function getPredecessorJoin(): ManufacturingOperationTaskSearchBasic
    {
        return $this->predecessorJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin): ManufacturingOperationTaskSearch
    {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin(): EmployeeSearchBasic
    {
        return $this->userJoin;
    }

    /**
     * @param TransactionSearchBasic $workOrderJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setWorkOrderJoin(TransactionSearchBasic $workOrderJoin): ManufacturingOperationTaskSearch
    {
        $this->workOrderJoin = $workOrderJoin;
        return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getWorkOrderJoin(): TransactionSearchBasic
    {
        return $this->workOrderJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return ManufacturingOperationTaskSearch
     */
    public function setCustomSearchJoin(CustomSearchJoin $customSearchJoin): ManufacturingOperationTaskSearch
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
