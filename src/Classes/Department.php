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

class Department extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $includeChildren;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var ClassTranslationList
     */
    protected ClassTranslationList $classTranslationList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $subsidiaryList;

    /**
     * @var CustomFieldList
     */
    protected CustomFieldList $customFieldList;

    /**
     * @var string
     */
    protected string $internalId;

    /**
     * @var string
     */
    protected string $externalId;

    static $paramtypesmap = array(
        "name" => "string",
        "includeChildren" => "boolean",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "classTranslationList" => "ClassTranslationList",
        "subsidiaryList" => "RecordRefList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Department
     */
    public function setName(string $name): Department
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param bool $includeChildren
     * @return Department
     */
    public function setIncludeChildren(bool $includeChildren): Department
    {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeChildren(): bool
    {
        return $this->includeChildren;
    }

    /**
     * @param RecordRef $parent
     * @return Department
     */
    public function setParent(RecordRef $parent): Department
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent(): RecordRef
    {
        return $this->parent;
    }

    /**
     * @param bool $isInactive
     * @return Department
     */
    public function setIsInactive(bool $isInactive): Department
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
     * @param ClassTranslationList $classTranslationList
     * @return Department
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList): Department
    {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * @return ClassTranslationList
     */
    public function getClassTranslationList(): ClassTranslationList
    {
        return $this->classTranslationList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return Department
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList): Department
    {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList(): RecordRefList
    {
        return $this->subsidiaryList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return Department
     */
    public function setCustomFieldList(CustomFieldList $customFieldList): Department
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList(): CustomFieldList
    {
        return $this->customFieldList;
    }

    /**
     * @param string $internalId
     * @return Department
     */
    public function setInternalId(string $internalId): Department
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

    /**
     * @param string $externalId
     * @return Department
     */
    public function setExternalId(string $externalId): Department
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

}
