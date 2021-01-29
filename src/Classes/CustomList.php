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

class CustomList extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var bool
     */
    protected bool $isOrdered;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isMatrixOption;

    /**
     * @var string
     */
    protected string $scriptId;

    /**
     * @var bool
     */
    protected bool $convertToCustomRecord;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var CustomListCustomValueList
     */
    protected CustomListCustomValueList $customValueList;

    /**
     * @var CustomListTranslationsList
     */
    protected CustomListTranslationsList $translationsList;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "name" => "string",
        "owner" => "RecordRef",
        "isOrdered" => "boolean",
        "description" => "string",
        "isMatrixOption" => "boolean",
        "scriptId" => "string",
        "convertToCustomRecord" => "boolean",
        "isInactive" => "boolean",
        "customValueList" => "CustomListCustomValueList",
        "translationsList" => "CustomListTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param string $name
     * @return CustomList
     */
    public function setName(string $name): CustomList
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
     * @param RecordRef $owner
     * @return CustomList
     */
    public function setOwner(RecordRef $owner): CustomList
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner(): RecordRef
    {
        return $this->owner;
    }

    /**
     * @param bool $isOrdered
     * @return CustomList
     */
    public function setIsOrdered(bool $isOrdered): CustomList
    {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOrdered(): bool
    {
        return $this->isOrdered;
    }

    /**
     * @param string $description
     * @return CustomList
     */
    public function setDescription(string $description): CustomList
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
     * @param bool $isMatrixOption
     * @return CustomList
     */
    public function setIsMatrixOption(bool $isMatrixOption): CustomList
    {
        $this->isMatrixOption = $isMatrixOption;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMatrixOption(): bool
    {
        return $this->isMatrixOption;
    }

    /**
     * @param string $scriptId
     * @return CustomList
     */
    public function setScriptId(string $scriptId): CustomList
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
     * @param bool $convertToCustomRecord
     * @return CustomList
     */
    public function setConvertToCustomRecord(bool $convertToCustomRecord): CustomList
    {
        $this->convertToCustomRecord = $convertToCustomRecord;
        return $this;
    }

    /**
     * @return bool
     */
    public function getConvertToCustomRecord(): bool
    {
        return $this->convertToCustomRecord;
    }

    /**
     * @param bool $isInactive
     * @return CustomList
     */
    public function setIsInactive(bool $isInactive): CustomList
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
     * @param CustomListCustomValueList $customValueList
     * @return CustomList
     */
    public function setCustomValueList(CustomListCustomValueList $customValueList): CustomList
    {
        $this->customValueList = $customValueList;
        return $this;
    }

    /**
     * @return CustomListCustomValueList
     */
    public function getCustomValueList(): CustomListCustomValueList
    {
        return $this->customValueList;
    }

    /**
     * @param CustomListTranslationsList $translationsList
     * @return CustomList
     */
    public function setTranslationsList(CustomListTranslationsList $translationsList): CustomList
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return CustomListTranslationsList
     */
    public function getTranslationsList(): CustomListTranslationsList
    {
        return $this->translationsList;
    }

    /**
     * @param string $internalId
     * @return CustomList
     */
    public function setInternalId(string $internalId): CustomList
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
