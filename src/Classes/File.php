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

class File extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var FileAttachFrom
     */
    protected FileAttachFrom $attachFrom;

    /**
     * @var string
     */
    protected string $mediaTypeName;

    /**
     * @var MediaType
     */
    protected MediaType $fileType;

    protected $content;
    /**
     * @var RecordRef
     */
    protected RecordRef $folder;

    /**
     * @var float
     */
    protected float $fileSize;

    /**
     * @var string
     */
    protected string $url;

    /**
     * @var string
     */
    protected string $urlComponent;

    /**
     * @var RecordRef
     */
    protected RecordRef $mediaFile;

    /**
     * @var TextFileEncoding
     */
    protected TextFileEncoding $textFileEncoding;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var FileEncoding
     */
    protected FileEncoding $encoding;

    /**
     * @var string
     */
    protected string $altTagCaption;

    /**
     * @var bool
     */
    protected bool $isOnline;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $class;

    /**
     * @var bool
     */
    protected bool $bundleable;

    /**
     * @var string
     */
    protected string $department;

    /**
     * @var bool
     */
    protected bool $hideInBundle;

    /**
     * @var bool
     */
    protected bool $isPrivate;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var string
     */
    protected string $caption;

    /**
     * @var RecordRef
     */
    protected RecordRef $storeDisplayThumbnail;

    /**
     * @var string
     */
    protected string $siteDescription;

    /**
     * @var string
     */
    protected string $featuredDescription;

    /**
     * @var string
     */
    protected string $lastModifiedDate;

    /**
     * @var string
     */
    protected string $createdDate;

    /**
     * @var FileSiteCategoryList
     */
    protected FileSiteCategoryList $siteCategoryList;

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
        "attachFrom" => "FileAttachFrom",
        "mediaTypeName" => "string",
        "fileType" => "MediaType",
        "content" => "base64Binary",
        "folder" => "RecordRef",
        "fileSize" => "float",
        "url" => "string",
        "urlComponent" => "string",
        "mediaFile" => "RecordRef",
        "textFileEncoding" => "TextFileEncoding",
        "description" => "string",
        "encoding" => "FileEncoding",
        "altTagCaption" => "string",
        "isOnline" => "boolean",
        "isInactive" => "boolean",
        "class" => "string",
        "bundleable" => "boolean",
        "department" => "string",
        "hideInBundle" => "boolean",
        "isPrivate" => "boolean",
        "owner" => "RecordRef",
        "caption" => "string",
        "storeDisplayThumbnail" => "RecordRef",
        "siteDescription" => "string",
        "featuredDescription" => "string",
        "lastModifiedDate" => "dateTime",
        "createdDate" => "dateTime",
        "siteCategoryList" => "FileSiteCategoryList",
        "internalId" => "string",
        "externalId" => "string",
    );

    /**
     * @param string $name
     * @return File
     */
    public function setName(string $name): File
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
     * @param FileAttachFrom $attachFrom
     * @return File
     */
    public function setAttachFrom(FileAttachFrom $attachFrom): File
    {
        $this->attachFrom = $attachFrom;
        return $this;
    }

    /**
     * @return FileAttachFrom
     */
    public function getAttachFrom(): FileAttachFrom
    {
        return $this->attachFrom;
    }

    /**
     * @param string $mediaTypeName
     * @return File
     */
    public function setMediaTypeName(string $mediaTypeName): File
    {
        $this->mediaTypeName = $mediaTypeName;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaTypeName(): string
    {
        return $this->mediaTypeName;
    }

    /**
     * @param MediaType $fileType
     * @return File
     */
    public function setFileType(MediaType $fileType): File
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return MediaType
     */
    public function getFileType(): MediaType
    {
        return $this->fileType;
    }

    /**
     * @param RecordRef $folder
     * @return File
     */
    public function setFolder(RecordRef $folder): File
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFolder(): RecordRef
    {
        return $this->folder;
    }

    /**
     * @param float $fileSize
     * @return File
     */
    public function setFileSize(float $fileSize): File
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * @return float
     */
    public function getFileSize(): float
    {
        return $this->fileSize;
    }

    /**
     * @param string $url
     * @return File
     */
    public function setUrl(string $url): File
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $urlComponent
     * @return File
     */
    public function setUrlComponent(string $urlComponent): File
    {
        $this->urlComponent = $urlComponent;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlComponent(): string
    {
        return $this->urlComponent;
    }

    /**
     * @param RecordRef $mediaFile
     * @return File
     */
    public function setMediaFile(RecordRef $mediaFile): File
    {
        $this->mediaFile = $mediaFile;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getMediaFile(): RecordRef
    {
        return $this->mediaFile;
    }

    /**
     * @param TextFileEncoding $textFileEncoding
     * @return File
     */
    public function setTextFileEncoding(TextFileEncoding $textFileEncoding): File
    {
        $this->textFileEncoding = $textFileEncoding;
        return $this;
    }

    /**
     * @return TextFileEncoding
     */
    public function getTextFileEncoding(): TextFileEncoding
    {
        return $this->textFileEncoding;
    }

    /**
     * @param string $description
     * @return File
     */
    public function setDescription(string $description): File
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
     * @param FileEncoding $encoding
     * @return File
     */
    public function setEncoding(FileEncoding $encoding): File
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * @return FileEncoding
     */
    public function getEncoding(): FileEncoding
    {
        return $this->encoding;
    }

    /**
     * @param string $altTagCaption
     * @return File
     */
    public function setAltTagCaption(string $altTagCaption): File
    {
        $this->altTagCaption = $altTagCaption;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltTagCaption(): string
    {
        return $this->altTagCaption;
    }

    /**
     * @param bool $isOnline
     * @return File
     */
    public function setIsOnline(bool $isOnline): File
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
     * @param bool $isInactive
     * @return File
     */
    public function setIsInactive(bool $isInactive): File
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
     * @param string $class
     * @return File
     */
    public function setClass(string $class): File
    {
        $this->class = $class;
        return $this;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param bool $bundleable
     * @return File
     */
    public function setBundleable(bool $bundleable): File
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
     * @param string $department
     * @return File
     */
    public function setDepartment(string $department): File
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param bool $hideInBundle
     * @return File
     */
    public function setHideInBundle(bool $hideInBundle): File
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
     * @param bool $isPrivate
     * @return File
     */
    public function setIsPrivate(bool $isPrivate): File
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
     * @param RecordRef $owner
     * @return File
     */
    public function setOwner(RecordRef $owner): File
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
     * @param string $caption
     * @return File
     */
    public function setCaption(string $caption): File
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }

    /**
     * @param RecordRef $storeDisplayThumbnail
     * @return File
     */
    public function setStoreDisplayThumbnail(RecordRef $storeDisplayThumbnail): File
    {
        $this->storeDisplayThumbnail = $storeDisplayThumbnail;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getStoreDisplayThumbnail(): RecordRef
    {
        return $this->storeDisplayThumbnail;
    }

    /**
     * @param string $siteDescription
     * @return File
     */
    public function setSiteDescription(string $siteDescription): File
    {
        $this->siteDescription = $siteDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getSiteDescription(): string
    {
        return $this->siteDescription;
    }

    /**
     * @param string $featuredDescription
     * @return File
     */
    public function setFeaturedDescription(string $featuredDescription): File
    {
        $this->featuredDescription = $featuredDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getFeaturedDescription(): string
    {
        return $this->featuredDescription;
    }

    /**
     * @param string $lastModifiedDate
     * @return File
     */
    public function setLastModifiedDate(string $lastModifiedDate): File
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedDate(): string
    {
        return $this->lastModifiedDate;
    }

    /**
     * @param string $createdDate
     * @return File
     */
    public function setCreatedDate(string $createdDate): File
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param FileSiteCategoryList $siteCategoryList
     * @return File
     */
    public function setSiteCategoryList(FileSiteCategoryList $siteCategoryList): File
    {
        $this->siteCategoryList = $siteCategoryList;
        return $this;
    }

    /**
     * @return FileSiteCategoryList
     */
    public function getSiteCategoryList(): FileSiteCategoryList
    {
        return $this->siteCategoryList;
    }

    /**
     * @param string $internalId
     * @return File
     */
    public function setInternalId(string $internalId): File
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
     * @return File
     */
    public function setExternalId(string $externalId): File
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
