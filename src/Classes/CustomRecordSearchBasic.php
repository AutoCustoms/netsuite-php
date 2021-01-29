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

class CustomRecordSearchBasic extends SearchRecordBasic {
    /**
     * @var RecordRef
     */
    protected RecordRef $recType;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $availableOffline;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $created;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $id;

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
     * @var SearchDateField
     */
    protected SearchDateField $lastModified;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $lastModifiedBy;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $owner;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parent;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "recType" => "RecordRef",
        "availableOffline" => "SearchBooleanField",
        "created" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "id" => "SearchLongField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "lastModified" => "SearchDateField",
        "lastModifiedBy" => "SearchMultiSelectField",
        "name" => "SearchStringField",
        "owner" => "SearchMultiSelectField",
        "parent" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param RecordRef $recType
     * @return CustomRecordSearchBasic
     */
    public function setRecType(RecordRef $recType): CustomRecordSearchBasic
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
     * @param SearchBooleanField $availableOffline
     * @return CustomRecordSearchBasic
     */
    public function setAvailableOffline(SearchBooleanField $availableOffline): CustomRecordSearchBasic
    {
        $this->availableOffline = $availableOffline;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getAvailableOffline(): SearchBooleanField
    {
        return $this->availableOffline;
    }

    /**
     * @param SearchDateField $created
     * @return CustomRecordSearchBasic
     */
    public function setCreated(SearchDateField $created): CustomRecordSearchBasic
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
     * @param SearchMultiSelectField $externalId
     * @return CustomRecordSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): CustomRecordSearchBasic
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
     * @param SearchLongField $id
     * @return CustomRecordSearchBasic
     */
    public function setId(SearchLongField $id): CustomRecordSearchBasic
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getId(): SearchLongField
    {
        return $this->id;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return CustomRecordSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
     */
    public function setIsInactive(SearchBooleanField $isInactive): CustomRecordSearchBasic
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
     * @param SearchDateField $lastModified
     * @return CustomRecordSearchBasic
     */
    public function setLastModified(SearchDateField $lastModified): CustomRecordSearchBasic
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastModified(): SearchDateField
    {
        return $this->lastModified;
    }

    /**
     * @param SearchMultiSelectField $lastModifiedBy
     * @return CustomRecordSearchBasic
     */
    public function setLastModifiedBy(SearchMultiSelectField $lastModifiedBy): CustomRecordSearchBasic
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLastModifiedBy(): SearchMultiSelectField
    {
        return $this->lastModifiedBy;
    }

    /**
     * @param SearchStringField $name
     * @return CustomRecordSearchBasic
     */
    public function setName(SearchStringField $name): CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
     */
    public function setOwner(SearchMultiSelectField $owner): CustomRecordSearchBasic
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
     * @return CustomRecordSearchBasic
     */
    public function setParent(SearchMultiSelectField $parent): CustomRecordSearchBasic
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
     * @param SearchCustomFieldList $customFieldList
     * @return CustomRecordSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): CustomRecordSearchBasic
    {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList(): SearchCustomFieldList
    {
        return $this->customFieldList;
    }

}
