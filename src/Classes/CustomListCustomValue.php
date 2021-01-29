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

class CustomListCustomValue {
    /**
     * @var string
     */
    protected string $value;

    /**
     * @var string
     */
    protected string $abbreviation;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var int
     */
    protected int $valueId;

    /**
     * @var LanguageValueList
     */
    protected LanguageValueList $valueLanguageValueList;

    static $paramtypesmap = array(
        "value" => "string",
        "abbreviation" => "string",
        "isInactive" => "boolean",
        "valueId" => "integer",
        "valueLanguageValueList" => "LanguageValueList",
    );

    /**
     * @param string $value
     * @return CustomListCustomValue
     */
    public function setValue(string $value): CustomListCustomValue
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $abbreviation
     * @return CustomListCustomValue
     */
    public function setAbbreviation(string $abbreviation): CustomListCustomValue
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }

    /**
     * @param bool $isInactive
     * @return CustomListCustomValue
     */
    public function setIsInactive(bool $isInactive): CustomListCustomValue
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param int $valueId
     * @return CustomListCustomValue
     */
    public function setValueId(int $valueId): CustomListCustomValue
    {
        $this->valueId = $valueId;
        return $this;
    }

    /**
     * @return int
     */
    public function getValueId(): int
    {
        return $this->valueId;
    }

    /**
     * @param LanguageValueList $valueLanguageValueList
     * @return CustomListCustomValue
     */
    public function setValueLanguageValueList(LanguageValueList $valueLanguageValueList): CustomListCustomValue
    {
        $this->valueLanguageValueList = $valueLanguageValueList;
        return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getValueLanguageValueList(): LanguageValueList
    {
        return $this->valueLanguageValueList;
    }

}
