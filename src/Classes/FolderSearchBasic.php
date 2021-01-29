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

class FolderSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $class;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $department;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $group;

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
    protected SearchBooleanField $isTopLevel;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $lastModifiedDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $location;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $numFiles;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $predecessor;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $private;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $size;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $subsidiary;

    static $paramtypesmap = array(
        "class" => "SearchMultiSelectField",
        "department" => "SearchMultiSelectField",
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "group" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "isTopLevel" => "SearchBooleanField",
        "lastModifiedDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "numFiles" => "SearchLongField",
        "owner" => "SearchMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "predecessor" => "SearchMultiSelectField",
        "private" => "SearchBooleanField",
        "size" => "SearchLongField",
        "subsidiary" => "SearchMultiSelectField",
    );

    /**
     * @param SearchMultiSelectField $class
     * @return FolderSearchBasic
     */
    public function setClass(SearchMultiSelectField $class): FolderSearchBasic
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass(): SearchMultiSelectField
    {
        return $this->class;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return FolderSearchBasic
     */
    public function setDepartment(SearchMultiSelectField $department): FolderSearchBasic
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment(): SearchMultiSelectField
    {
        return $this->department;
    }

    /**
     * @param SearchStringField $description
     * @return FolderSearchBasic
     */
    public function setDescription(SearchStringField $description): FolderSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return FolderSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): FolderSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return FolderSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): FolderSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $group
     * @return FolderSearchBasic
     */
    public function setGroup(SearchMultiSelectField $group): FolderSearchBasic
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getGroup(): SearchMultiSelectField
    {
        return $this->group;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return FolderSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): FolderSearchBasic
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
     * @return FolderSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): FolderSearchBasic
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
     * @return FolderSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): FolderSearchBasic
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
     * @param SearchBooleanField $isTopLevel
     * @return FolderSearchBasic
     */
    public function setIsTopLevel(SearchBooleanField $isTopLevel): FolderSearchBasic
    {
        $this->isTopLevel = $isTopLevel;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsTopLevel(): SearchBooleanField
    {
        return $this->isTopLevel;
    }

    /**
     * @param SearchDateField $lastModifiedDate
     * @return FolderSearchBasic
     */
    public function setLastModifiedDate(SearchDateField $lastModifiedDate): FolderSearchBasic
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModifiedDate(): SearchDateField
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return FolderSearchBasic
     */
    public function setLocation(SearchMultiSelectField $location): FolderSearchBasic
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation(): SearchMultiSelectField
    {
        return $this->location;
    }

    /**
     * @param SearchStringField $name
     * @return FolderSearchBasic
     */
    public function setName(SearchStringField $name): FolderSearchBasic
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
     * @param SearchLongField $numFiles
     * @return FolderSearchBasic
     */
    public function setNumFiles(SearchLongField $numFiles): FolderSearchBasic
    {
        $this->numFiles = $numFiles;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getNumFiles(): SearchLongField
    {
        return $this->numFiles;
    }

    /**
     * @param SearchMultiSelectField $owner
     * @return FolderSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): FolderSearchBasic
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
     * @param SearchMultiSelectField $parent
     * @return FolderSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): FolderSearchBasic
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent(): SearchMultiSelectField
    {
        return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $predecessor
     * @return FolderSearchBasic
     */
    public function setPredecessor(SearchMultiSelectField $predecessor): FolderSearchBasic
    {
        $this->predecessor = $predecessor;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getPredecessor(): SearchMultiSelectField
    {
        return $this->predecessor;
    }

    /**
     * @param SearchBooleanField $private
     * @return FolderSearchBasic
     */
    public function setPrivate(SearchBooleanField $private): FolderSearchBasic
    {
        $this->private = $private;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPrivate(): SearchBooleanField
    {
        return $this->private;
    }

    /**
     * @param SearchLongField $size
     * @return FolderSearchBasic
     */
    public function setSize(SearchLongField $size): FolderSearchBasic
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getSize(): SearchLongField
    {
        return $this->size;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return FolderSearchBasic
     */
    public function setSubsidiary(SearchMultiSelectField $subsidiary): FolderSearchBasic
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary(): SearchMultiSelectField
    {
        return $this->subsidiary;
    }

}
