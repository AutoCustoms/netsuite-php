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

class CustomListSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isInactive;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isOrdered;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $scriptId;

    static $paramtypesmap = array(
        "description" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isOrdered" => "SearchBooleanField",
        "name" => "SearchStringField",
        "owner" => "SearchMultiSelectField",
        "scriptId" => "SearchStringField",
    );

    /**
     * @param SearchStringField $description
     * @return CustomListSearchBasic
     */
    public function setDescription(SearchStringField $description): CustomListSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CustomListSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CustomListSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return CustomListSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CustomListSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return CustomListSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): CustomListSearchBasic
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive(): SearchBooleanField
    {
        return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isOrdered
     * @return CustomListSearchBasic
     */
    public function setIsOrdered(SearchBooleanField $isOrdered): CustomListSearchBasic
    {
        $this->isOrdered = $isOrdered;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsOrdered(): SearchBooleanField
    {
        return $this->isOrdered;
    }

    /**
     * @param SearchStringField $name
     * @return CustomListSearchBasic
     */
    public function setName(SearchStringField $name): CustomListSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return CustomListSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): CustomListSearchBasic
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getOwner(): SearchMultiSelectField
    {
        return $this->owner;
    }

    /**
     * @param SearchStringField $scriptId
     * @return CustomListSearchBasic
     */
    public function setScriptId(SearchStringField $scriptId): CustomListSearchBasic
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScriptId(): SearchStringField
    {
        return $this->scriptId;
    }

}
