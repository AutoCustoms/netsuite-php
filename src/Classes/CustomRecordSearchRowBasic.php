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

class CustomRecordSearchRowBasic extends SearchRowBasic {
    /**
     * @var RecordRef
     */
    protected RecordRef $recType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $altName;

    /**
     * @var SearchColumnBooleanField[]
     */
    protected array $availableOffline;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $created;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnLongField[]
     */
    protected array $id;

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
    protected array $lastModified;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $lastModifiedBy;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $name;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $owner;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $parent;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "recType" => "RecordRef",
        "altName" => "SearchColumnStringField[]",
        "availableOffline" => "SearchColumnBooleanField[]",
        "created" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "id" => "SearchColumnLongField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModified" => "SearchColumnDateField[]",
        "lastModifiedBy" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param RecordRef $recType
     * @return CustomRecordSearchRowBasic
     */
    public function setRecType(RecordRef $recType): CustomRecordSearchRowBasic
    {
        $this->recType = $recType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecType(): RecordRef
    {
        return $this->recType;
    }

    /**
     * @param SearchColumnStringField[] $altName
     * @return CustomRecordSearchRowBasic
     */
    public function setAltName(SearchColumnStringField $altName): CustomRecordSearchRowBasic
    {
        $this->altName[] = $altName;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAltName(): array
    {
        return $this->altName;
    }

    /**
     * @param SearchColumnBooleanField[] $availableOffline
     * @return CustomRecordSearchRowBasic
     */
    public function setAvailableOffline(SearchColumnBooleanField $availableOffline): CustomRecordSearchRowBasic
    {
        $this->availableOffline[] = $availableOffline;
        return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableOffline(): array
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return CustomRecordSearchRowBasic
     */
    public function setCreated(SearchColumnDateField $created): CustomRecordSearchRowBasic
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
     * @param SearchColumnSelectField[] $externalId
     * @return CustomRecordSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): CustomRecordSearchRowBasic
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
     * @param SearchColumnLongField[] $id
     * @return CustomRecordSearchRowBasic
     */
    public function setId(SearchColumnLongField $id): CustomRecordSearchRowBasic
    {
        $this->id[] = $id;
        return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getId(): array
    {
        return $this->id;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return CustomRecordSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): CustomRecordSearchRowBasic
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
     * @return CustomRecordSearchRowBasic
     */
    public function setIsInactive(SearchColumnBooleanField $isInactive): CustomRecordSearchRowBasic
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
     * @param SearchColumnDateField[] $lastModified
     * @return CustomRecordSearchRowBasic
     */
    public function setLastModified(SearchColumnDateField $lastModified): CustomRecordSearchRowBasic
    {
        $this->lastModified[] = $lastModified;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastModified(): array
    {
        return $this->lastModified;
    }

    /**
     * @param SearchColumnSelectField[] $lastModifiedBy
     * @return CustomRecordSearchRowBasic
     */
    public function setLastModifiedBy(SearchColumnSelectField $lastModifiedBy): CustomRecordSearchRowBasic
    {
        $this->lastModifiedBy[] = $lastModifiedBy;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLastModifiedBy(): array
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return CustomRecordSearchRowBasic
     */
    public function setName(SearchColumnStringField $name): CustomRecordSearchRowBasic
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
     * @return CustomRecordSearchRowBasic
     */
    public function setOwner(SearchColumnSelectField $owner): CustomRecordSearchRowBasic
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
     * @return CustomRecordSearchRowBasic
     */
    public function setParent(SearchColumnSelectField $parent): CustomRecordSearchRowBasic
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
     * @param SearchColumnCustomFieldList $customFieldList
     * @return CustomRecordSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): CustomRecordSearchRowBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList(): SearchColumnCustomFieldList
    {
        return $this->customFieldList;
    }

}
