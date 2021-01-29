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

class Folder extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var RecordRef
     */
    protected RecordRef $department;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var bool
     */
    protected bool $isPrivate;

    /**
     * @var bool
     */
    protected bool $bundleable;

    /**
     * @var bool
     */
    protected bool $hideInBundle;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var RecordRef
     */
    protected RecordRef $group;

    /**
     * @var RecordRef
     */
    protected RecordRef $parent;

    /**
     * @var FolderFolderType
     */
    protected FolderFolderType $folderType;

    /**
     * @var RecordRef
     */
    protected RecordRef $class;

    /**
     * @var RecordRef
     */
    protected RecordRef $location;

    /**
     * @var RecordRef
     */
    protected RecordRef $subsidiary;

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
        "department" => "RecordRef",
        "description" => "string",
        "isInactive" => "boolean",
        "isPrivate" => "boolean",
        "bundleable" => "boolean",
        "hideInBundle" => "boolean",
        "isOnline" => "boolean",
        "group" => "RecordRef",
        "parent" => "RecordRef",
        "folderType" => "FolderFolderType",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return Folder
     */
    public function setName(string $name): Folder
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
     * @param RecordRef $department
     * @return Folder
     */
    public function setDepartment(RecordRef $department): Folder
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment(): RecordRef
    {
        return $this->department;
    }

    /**
     * @param string $description
     * @return Folder
     */
    public function setDescription(string $description): Folder
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
     * @param bool $isInactive
     * @return Folder
     */
    public function setIsInactive(bool $isInactive): Folder
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
     * @param bool $isPrivate
     * @return Folder
     */
    public function setIsPrivate(bool $isPrivate): Folder
    {
        $this->isPrivate = $isPrivate;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * @param bool $bundleable
     * @return Folder
     */
    public function setBundleable(bool $bundleable): Folder
    {
        $this->bundleable = $bundleable;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBundleable(): bool
    {
        return $this->bundleable;
    }

    /**
     * @param bool $hideInBundle
     * @return Folder
     */
    public function setHideInBundle(bool $hideInBundle): Folder
    {
        $this->hideInBundle = $hideInBundle;
        return $this;
    }

    /**
     * @return bool
     */
    public function getHideInBundle(): bool
    {
        return $this->hideInBundle;
    }

    /**
     * @param bool $isOnline
     * @return Folder
     */
    public function setIsOnline(bool $isOnline): Folder
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOnline(): bool
    {
        return $this->isOnline;
    }

    /**
     * @param RecordRef $group
     * @return Folder
     */
    public function setGroup(RecordRef $group): Folder
    {
        $this->group = $group;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getGroup(): RecordRef
    {
        return $this->group;
    }

    /**
     * @param RecordRef $parent
     * @return Folder
     */
    public function setParent(RecordRef $parent): Folder
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
     * @param FolderFolderType $folderType
     * @return Folder
     */
    public function setFolderType(FolderFolderType $folderType): Folder
    {
        $this->folderType = $folderType;
        return $this;
    }

    /**
     * @return FolderFolderType
     */
    public function getFolderType(): FolderFolderType
    {
        return $this->folderType;
    }

    /**
     * @param RecordRef $class
     * @return Folder
     */
    public function setClass(RecordRef $class): Folder
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass(): RecordRef
    {
        return $this->class;
    }

    /**
     * @param RecordRef $location
     * @return Folder
     */
    public function setLocation(RecordRef $location): Folder
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation(): RecordRef
    {
        return $this->location;
    }

    /**
     * @param RecordRef $subsidiary
     * @return Folder
     */
    public function setSubsidiary(RecordRef $subsidiary): Folder
    {
        $this->subsidiary = $subsidiary;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary(): RecordRef
    {
        return $this->subsidiary;
    }

    /**
     * @param string $internalId
     * @return Folder
     */
    public function setInternalId(string $internalId): Folder
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
     * @return Folder
     */
    public function setExternalId(string $externalId): Folder
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
