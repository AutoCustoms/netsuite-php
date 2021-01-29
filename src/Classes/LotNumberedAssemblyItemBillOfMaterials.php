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

class LotNumberedAssemblyItemBillOfMaterials {
    /**
     * @var RecordRef
     */
    protected RecordRef $billOfMaterials;

    /**
     * @var string
     */
    protected string $currentRevision;

    /**
     * @var bool
     */
    protected bool $masterDefault;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $defaultForLocationList;

    /**
     * @var string
     */
    protected string $inactive;

    /**
     * @var string
     */
    protected string $memo;

    static $paramtypesmap = array(
        "billOfMaterials" => "RecordRef",
        "currentRevision" => "string",
        "masterDefault" => "boolean",
        "defaultForLocationList" => "RecordRefList",
        "inactive" => "string",
        "memo" => "string",
    );

    /**
     * @param RecordRef $billOfMaterials
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setBillOfMaterials(RecordRef $billOfMaterials): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->billOfMaterials = $billOfMaterials;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials(): RecordRef
    {
        return $this->billOfMaterials;
    }

    /**
     * @param string $currentRevision
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setCurrentRevision(string $currentRevision): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->currentRevision = $currentRevision;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrentRevision(): string
    {
        return $this->currentRevision;
    }

    /**
     * @param bool $masterDefault
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setMasterDefault(bool $masterDefault): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->masterDefault = $masterDefault;
        return $this;
    }

    /**
     * @return bool
     */
    public function getMasterDefault(): bool
    {
        return $this->masterDefault;
    }

    /**
     * @param RecordRefList $defaultForLocationList
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setDefaultForLocationList(RecordRefList $defaultForLocationList): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->defaultForLocationList = $defaultForLocationList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getDefaultForLocationList(): RecordRefList
    {
        return $this->defaultForLocationList;
    }

    /**
     * @param string $inactive
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setInactive(string $inactive): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->inactive = $inactive;
        return $this;
    }

    /**
     * @return string
     */
    public function getInactive(): string
    {
        return $this->inactive;
    }

    /**
     * @param string $memo
     * @return LotNumberedAssemblyItemBillOfMaterials
     */
    public function setMemo(string $memo): LotNumberedAssemblyItemBillOfMaterials
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * @return string
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

}
