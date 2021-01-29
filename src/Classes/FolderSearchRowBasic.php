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

class FolderSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $class;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $department;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $folderSize;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $group;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isInactive;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $lastModifiedDate;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $location;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $numFiles;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $subsidiary;

    static $paramtypesmap = array(
        "class" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "folderSize" => "SearchColumnLongField[]",
        "group" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "numFiles" => "SearchColumnLongField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
    );

    /**
     * @param SearchColumnSelectField[] $class
     * @return FolderSearchRowBasic
     */
    public function setClass(SearchColumnSelectField $class): FolderSearchRowBasic
    {
        $this->class[] = $class;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return FolderSearchRowBasic
     */
    public function setDepartment(SearchColumnSelectField $department): FolderSearchRowBasic
    {
        $this->department[] = $department;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment(): array
    {
        return $this->department;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return FolderSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): FolderSearchRowBasic
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return FolderSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): FolderSearchRowBasic
    {
        $this->externalId[] = $externalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId(): array
    {
        return $this->externalId;
    }

    /**
     * @param SearchColumnLongField[] $folderSize
     * @return FolderSearchRowBasic
     */
    public function setFolderSize(SearchColumnLongField $folderSize): FolderSearchRowBasic
    {
        $this->folderSize[] = $folderSize;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getFolderSize(): array
    {
        return $this->folderSize;
    }

    /**
     * @param SearchColumnSelectField[] $group
     * @return FolderSearchRowBasic
     */
    public function setGroup(SearchColumnSelectField $group): FolderSearchRowBasic
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getGroup(): array
    {
        return $this->group;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return FolderSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): FolderSearchRowBasic
    {
        $this->internalId[] = $internalId;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId(): array
    {
        return $this->internalId;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return FolderSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): FolderSearchRowBasic
    {
        $this->isInactive[] = $isInactive;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive(): array
    {
        return $this->isInactive;
    }

    /**
     * @param SearchColumnDateField[] $lastModifiedDate
     * @return FolderSearchRowBasic
     */
    public function setLastModifiedDate(SearchColumnDateField $lastModifiedDate): FolderSearchRowBasic
    {
        $this->lastModifiedDate[] = $lastModifiedDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModifiedDate(): array
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return FolderSearchRowBasic
     */
    public function setLocation(SearchColumnSelectField $location): FolderSearchRowBasic
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return FolderSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): FolderSearchRowBasic
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param SearchColumnLongField[] $numFiles
     * @return FolderSearchRowBasic
     */
    public function setNumFiles(SearchColumnLongField $numFiles): FolderSearchRowBasic
    {
        $this->numFiles[] = $numFiles;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getNumFiles(): array
    {
        return $this->numFiles;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return FolderSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): FolderSearchRowBasic
    {
        $this->owner[] = $owner;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner(): array
    {
        return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $parent
     * @return FolderSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): FolderSearchRowBasic
    {
        $this->parent[] = $parent;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getParent(): array
    {
        return $this->parent;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return FolderSearchRowBasic
     */
    public function setSubsidiary(SearchColumnSelectField $subsidiary): FolderSearchRowBasic
    {
        $this->subsidiary[] = $subsidiary;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary(): array
    {
        return $this->subsidiary;
    }

}
