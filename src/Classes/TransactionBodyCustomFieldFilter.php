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

class TransactionBodyCustomFieldFilter {
    /**
     * @var RecordRef
     */
    protected RecordRef $fldFilter;

    /**
     * @var bool
     */
    protected bool $fldFilterChecked;

    /**
     * @var CustomizationFilterCompareType
     */
    protected CustomizationFilterCompareType $fldFilterCompareType;

    /**
     * @var string
     */
    protected string $fldFilterVal;

    /**
     * @var FldFilterSelList
     */
    protected FldFilterSelList $fldFilterSelList;

    /**
     * @var bool
     */
    protected bool $fldFilterNotNull;

    static $paramtypesmap = array(
        "fldFilter" => "RecordRef",
        "fldFilterChecked" => "boolean",
        "fldFilterCompareType" => "CustomizationFilterCompareType",
        "fldFilterVal" => "string",
        "fldFilterSelList" => "FldFilterSelList",
        "fldFilterNotNull" => "boolean",
    );

    /**
     * @param RecordRef $fldFilter
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilter(RecordRef $fldFilter): TransactionBodyCustomFieldFilter
    {
        $this->fldFilter = $fldFilter;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFldFilter(): RecordRef
    {
        return $this->fldFilter;
    }

    /**
     * @param bool $fldFilterChecked
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilterChecked(bool $fldFilterChecked): TransactionBodyCustomFieldFilter
    {
        $this->fldFilterChecked = $fldFilterChecked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFldFilterChecked(): bool
    {
        return $this->fldFilterChecked;
    }

    /**
     * @param CustomizationFilterCompareType $fldFilterCompareType
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilterCompareType(CustomizationFilterCompareType $fldFilterCompareType): TransactionBodyCustomFieldFilter
    {
        $this->fldFilterCompareType = $fldFilterCompareType;
        return $this;
    }

    /**
     * @return CustomizationFilterCompareType
     */
    public function getFldFilterCompareType(): CustomizationFilterCompareType
    {
        return $this->fldFilterCompareType;
    }

    /**
     * @param string $fldFilterVal
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilterVal(string $fldFilterVal): TransactionBodyCustomFieldFilter
    {
        $this->fldFilterVal = $fldFilterVal;
        return $this;
    }

    /**
     * @return string
     */
    public function getFldFilterVal(): string
    {
        return $this->fldFilterVal;
    }

    /**
     * @param FldFilterSelList $fldFilterSelList
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilterSelList(FldFilterSelList $fldFilterSelList): TransactionBodyCustomFieldFilter
    {
        $this->fldFilterSelList = $fldFilterSelList;
        return $this;
    }

    /**
     * @return FldFilterSelList
     */
    public function getFldFilterSelList(): FldFilterSelList
    {
        return $this->fldFilterSelList;
    }

    /**
     * @param bool $fldFilterNotNull
     * @return TransactionBodyCustomFieldFilter
     */
    public function setFldFilterNotNull(bool $fldFilterNotNull): TransactionBodyCustomFieldFilter
    {
        $this->fldFilterNotNull = $fldFilterNotNull;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFldFilterNotNull(): bool
    {
        return $this->fldFilterNotNull;
    }

}
