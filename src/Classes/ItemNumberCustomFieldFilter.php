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

class ItemNumberCustomFieldFilter {
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
     * @var bool
     */
    protected bool $fldFilterNotNull;

    /**
     * @var bool
     */
    protected bool $fldfilterNull;

    /**
     * @var RecordRef
     */
    protected RecordRef $fldCompareField;

    static $paramtypesmap = array(
        "fldFilter" => "RecordRef",
        "fldFilterChecked" => "boolean",
        "fldFilterCompareType" => "CustomizationFilterCompareType",
        "fldFilterVal" => "string",
        "fldFilterNotNull" => "boolean",
        "fldfilterNull" => "boolean",
        "fldCompareField" => "RecordRef",
    );

    /**
     * @param RecordRef $fldFilter
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilter(RecordRef $fldFilter): ItemNumberCustomFieldFilter
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
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterChecked(bool $fldFilterChecked): ItemNumberCustomFieldFilter
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
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterCompareType(CustomizationFilterCompareType $fldFilterCompareType): ItemNumberCustomFieldFilter
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
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterVal(string $fldFilterVal): ItemNumberCustomFieldFilter
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
     * @param bool $fldFilterNotNull
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldFilterNotNull(bool $fldFilterNotNull): ItemNumberCustomFieldFilter
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

    /**
     * @param bool $fldfilterNull
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldfilterNull(bool $fldfilterNull): ItemNumberCustomFieldFilter
    {
        $this->fldfilterNull = $fldfilterNull;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFldfilterNull(): bool
    {
        return $this->fldfilterNull;
    }

    /**
     * @param RecordRef $fldCompareField
     * @return ItemNumberCustomFieldFilter
     */
    public function setFldCompareField(RecordRef $fldCompareField): ItemNumberCustomFieldFilter
    {
        $this->fldCompareField = $fldCompareField;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFldCompareField(): RecordRef
    {
        return $this->fldCompareField;
    }

}
