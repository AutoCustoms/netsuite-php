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

class FileSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableWithoutLogin;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $created;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $dateViewed;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $description;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $documentSize;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnEnumSelectField[]
     */
    protected array $fileType;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $folder;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $hits;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $hostedPath;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $isAvailable;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $modified;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $url;

    static $paramtypesmap = array(
        "availableWithoutLogin" => "SearchColumnBooleanField[]",
        "created" => "SearchColumnDateField[]",
        "dateViewed" => "SearchColumnDateField[]",
        "description" => "SearchColumnStringField[]",
        "documentSize" => "SearchColumnLongField[]",
        "externalId" => "SearchColumnSelectField[]",
        "fileType" => "SearchColumnEnumSelectField[]",
        "folder" => "SearchColumnSelectField[]",
        "hits" => "SearchColumnLongField[]",
        "hostedPath" => "SearchColumnStringField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isAvailable" => "SearchColumnBooleanField[]",
        "modified" => "SearchColumnDateField[]",
        "name" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "url" => "SearchColumnStringField[]",
    );

    /**
     * @param SearchColumnBooleanField[] $availableWithoutLogin
     * @return FileSearchRowBasic
     */
    public function setAvailableWithoutLogin(SearchColumnBooleanField $availableWithoutLogin): FileSearchRowBasic
    {
        $this->availableWithoutLogin[] = $availableWithoutLogin;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableWithoutLogin(): array
    {
        return $this->availableWithoutLogin;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return FileSearchRowBasic
     */
    public function setCreated(SearchColumnDateField $created): FileSearchRowBasic
    {
        $this->created[] = $created;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreated(): array
    {
        return $this->created;
    }

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return FileSearchRowBasic
     */
    public function setDateViewed(SearchColumnDateField $dateViewed): FileSearchRowBasic
    {
        $this->dateViewed[] = $dateViewed;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed(): array
    {
        return $this->dateViewed;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return FileSearchRowBasic
     */
    public function setDescription(SearchColumnStringField $description): FileSearchRowBasic
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
     * @param SearchColumnLongField[] $documentSize
     * @return FileSearchRowBasic
     */
    public function setDocumentSize(SearchColumnLongField $documentSize): FileSearchRowBasic
    {
        $this->documentSize[] = $documentSize;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDocumentSize(): array
    {
        return $this->documentSize;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return FileSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): FileSearchRowBasic
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
     * @param SearchColumnEnumSelectField[] $fileType
     * @return FileSearchRowBasic
     */
    public function setFileType(SearchColumnEnumSelectField $fileType): FileSearchRowBasic
    {
        $this->fileType[] = $fileType;
        return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFileType(): array
    {
        return $this->fileType;
    }

    /**
     * @param SearchColumnSelectField[] $folder
     * @return FileSearchRowBasic
     */
    public function setFolder(SearchColumnSelectField $folder): FileSearchRowBasic
    {
        $this->folder[] = $folder;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFolder(): array
    {
        return $this->folder;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return FileSearchRowBasic
     */
    public function setHits(SearchColumnLongField $hits): FileSearchRowBasic
    {
        $this->hits[] = $hits;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits(): array
    {
        return $this->hits;
    }

    /**
     * @param SearchColumnStringField[] $hostedPath
     * @return FileSearchRowBasic
     */
    public function setHostedPath(SearchColumnStringField $hostedPath): FileSearchRowBasic
    {
        $this->hostedPath[] = $hostedPath;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHostedPath(): array
    {
        return $this->hostedPath;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return FileSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): FileSearchRowBasic
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
     * @param SearchColumnBooleanField[] $isAvailable
     * @return FileSearchRowBasic
     */
    public function setIsAvailable(SearchColumnBooleanField $isAvailable): FileSearchRowBasic
    {
        $this->isAvailable[] = $isAvailable;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAvailable(): array
    {
        return $this->isAvailable;
    }

    /**
     * @param SearchColumnDateField[] $modified
     * @return FileSearchRowBasic
     */
    public function setModified(SearchColumnDateField $modified): FileSearchRowBasic
    {
        $this->modified[] = $modified;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModified(): array
    {
        return $this->modified;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return FileSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): FileSearchRowBasic
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
     * @param SearchColumnSelectField[] $owner
     * @return FileSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): FileSearchRowBasic
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
     * @param SearchColumnStringField[] $url
     * @return FileSearchRowBasic
     */
    public function setUrl(SearchColumnStringField $url): FileSearchRowBasic
    {
        $this->url[] = $url;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl(): array
    {
        return $this->url;
    }

}
