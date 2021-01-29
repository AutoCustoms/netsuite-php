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

class CustomSegment extends Record {
    /**
     * @var string
     */
    protected string $label;

    /**
     * @var string
     */
    protected string $scriptId;

    /**
     * @var string
     */
    protected string $recordScriptId;

    /**
     * @var RecordRef
     */
    protected RecordRef $recordType;

    /**
     * @var CustomizationFieldType
     */
    protected CustomizationFieldType $fieldType;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $showInList;

    /**
     * @var RecordRefList
     */
    protected RecordRefList $filteredByList;

    /**
     * @var bool
     */
    protected bool $hasGLImpact;

    /**
     * @var string
     */
    protected string $help;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isMandatory;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultSelection;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "label" => "string",
        "scriptId" => "string",
        "recordScriptId" => "string",
        "recordType" => "RecordRef",
        "fieldType" => "CustomizationFieldType",
        "isInactive" => "boolean",
        "showInList" => "boolean",
        "filteredByList" => "RecordRefList",
        "hasGLImpact" => "boolean",
        "help" => "string",
        "description" => "string",
        "isMandatory" => "boolean",
        "defaultSelection" => "RecordRef",
        "internalId" => "string",
    );

    /**
     * @param string $label
     * @return CustomSegment
     */
    public function setLabel(string $label): CustomSegment
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $scriptId
     * @return CustomSegment
     */
    public function setScriptId(string $scriptId): CustomSegment
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getScriptId(): string
    {
        return $this->scriptId;
    }

    /**
     * @param string $recordScriptId
     * @return CustomSegment
     */
    public function setRecordScriptId(string $recordScriptId): CustomSegment
    {
        $this->recordScriptId = $recordScriptId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordScriptId(): string
    {
        return $this->recordScriptId;
    }

    /**
     * @param RecordRef $recordType
     * @return CustomSegment
     */
    public function setRecordType(RecordRef $recordType): CustomSegment
    {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordType(): RecordRef
    {
        return $this->recordType;
    }

    /**
     * @param CustomizationFieldType $fieldType
     * @return CustomSegment
     */
    public function setFieldType(CustomizationFieldType $fieldType): CustomSegment
    {
        $this->fieldType = $fieldType;
        return $this;
    }

    /**
     * @return CustomizationFieldType
     */
    public function getFieldType(): CustomizationFieldType
    {
        return $this->fieldType;
    }

    /**
     * @param bool $isInactive
     * @return CustomSegment
     */
    public function setIsInactive(bool $isInactive): CustomSegment
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
     * @param bool $showInList
     * @return CustomSegment
     */
    public function setShowInList(bool $showInList): CustomSegment
    {
        $this->showInList = $showInList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowInList(): bool
    {
        return $this->showInList;
    }

    /**
     * @param RecordRefList $filteredByList
     * @return CustomSegment
     */
    public function setFilteredByList(RecordRefList $filteredByList): CustomSegment
    {
        $this->filteredByList = $filteredByList;
        return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getFilteredByList(): RecordRefList
    {
        return $this->filteredByList;
    }

    /**
     * @param bool $hasGLImpact
     * @return CustomSegment
     */
    public function setHasGLImpact(bool $hasGLImpact): CustomSegment
    {
        $this->hasGLImpact = $hasGLImpact;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHasGLImpact(): bool
    {
        return $this->hasGLImpact;
    }

    /**
     * @param string $help
     * @return CustomSegment
     */
    public function setHelp(string $help): CustomSegment
    {
        $this->help = $help;
        return $this;
    }

    /**
     * @return string
     */
    public function getHelp(): string
    {
        return $this->help;
    }

    /**
     * @param string $description
     * @return CustomSegment
     */
    public function setDescription(string $description): CustomSegment
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param bool $isMandatory
     * @return CustomSegment
     */
    public function setIsMandatory(bool $isMandatory): CustomSegment
    {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMandatory(): bool
    {
        return $this->isMandatory;
    }

    /**
     * @param RecordRef $defaultSelection
     * @return CustomSegment
     */
    public function setDefaultSelection(RecordRef $defaultSelection): CustomSegment
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultSelection(): RecordRef
    {
        return $this->defaultSelection;
    }

    /**
     * @param string $internalId
     * @return CustomSegment
     */
    public function setInternalId(string $internalId): CustomSegment
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

}
