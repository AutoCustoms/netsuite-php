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

class FileSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableWithoutLogin;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $created;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $dateViewed;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $documentSize;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $fileType;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $folder;

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
    protected SearchBooleanField $isAvailable;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $isLink;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $modified;

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
    protected SearchStringField $url;

    static $paramtypesmap = array(
        "availableWithoutLogin" => "SearchBooleanField",
        "created" => "SearchDateField",
        "dateViewed" => "SearchDateField",
        "description" => "SearchStringField",
        "documentSize" => "SearchLongField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "fileType" => "SearchEnumMultiSelectField",
        "folder" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isAvailable" => "SearchBooleanField",
        "isLink" => "SearchBooleanField",
        "modified" => "SearchDateField",
        "name" => "SearchStringField",
        "owner" => "SearchMultiSelectField",
        "url" => "SearchStringField",
    );

    /**
     * @param SearchBooleanField $availableWithoutLogin
     * @return FileSearchBasic
     */
    public function setAvailableWithoutLogin(SearchBooleanField $availableWithoutLogin): FileSearchBasic
    {
        $this->availableWithoutLogin = $availableWithoutLogin;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableWithoutLogin(): SearchBooleanField
    {
        return $this->availableWithoutLogin;
    }

    /**
     * @param SearchDateField $created
     * @return FileSearchBasic
     */
    public function setCreated(SearchDateField $created): FileSearchBasic
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getCreated(): SearchDateField
    {
        return $this->created;
    }

    /**
     * @param SearchDateField $dateViewed
     * @return FileSearchBasic
     */
    public function setDateViewed(SearchDateField $dateViewed): FileSearchBasic
    {
        $this->dateViewed = $dateViewed;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateViewed(): SearchDateField
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchStringField $description
     * @return FileSearchBasic
     */
    public function setDescription(SearchStringField $description): FileSearchBasic
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
     * @param SearchLongField $documentSize
     * @return FileSearchBasic
     */
    public function setDocumentSize(SearchLongField $documentSize): FileSearchBasic
    {
        $this->documentSize = $documentSize;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDocumentSize(): SearchLongField
    {
        return $this->documentSize;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return FileSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): FileSearchBasic
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
     * @return FileSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): FileSearchBasic
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
     * @param SearchEnumMultiSelectField $fileType
     * @return FileSearchBasic
     */
    public function setFileType(SearchEnumMultiSelectField $fileType): FileSearchBasic
    {
        $this->fileType = $fileType;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFileType(): SearchEnumMultiSelectField
    {
        return $this->fileType;
    }

    /**
     * @param SearchMultiSelectField $folder
     * @return FileSearchBasic
     */
    public function setFolder(SearchMultiSelectField $folder): FileSearchBasic
    {
        $this->folder = $folder;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getFolder(): SearchMultiSelectField
    {
        return $this->folder;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return FileSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): FileSearchBasic
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
     * @return FileSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): FileSearchBasic
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
     * @param SearchBooleanField $isAvailable
     * @return FileSearchBasic
     */
    public function setIsAvailable(SearchBooleanField $isAvailable): FileSearchBasic
    {
        $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsAvailable(): SearchBooleanField
    {
        return $this->isAvailable;
    }

    /**
     * @param SearchBooleanField $isLink
     * @return FileSearchBasic
     */
    public function setIsLink(SearchBooleanField $isLink): FileSearchBasic
    {
        $this->isLink = $isLink;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsLink(): SearchBooleanField
    {
        return $this->isLink;
    }

    /**
     * @param SearchDateField $modified
     * @return FileSearchBasic
     */
    public function setModified(SearchDateField $modified): FileSearchBasic
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getModified(): SearchDateField
    {
        return $this->modified;
    }

    /**
     * @param SearchStringField $name
     * @return FileSearchBasic
     */
    public function setName(SearchStringField $name): FileSearchBasic
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
     * @return FileSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): FileSearchBasic
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
     * @param SearchStringField $url
     * @return FileSearchBasic
     */
    public function setUrl(SearchStringField $url): FileSearchBasic
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getUrl(): SearchStringField
    {
        return $this->url;
    }

}
