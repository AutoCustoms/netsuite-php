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

class NoteSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $author;

    /**
     * @var SearchBooleanField
     */
    protected SearchBooleanField $direction;

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
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $note;

    /**
     * @var SearchDateField
     */
    protected SearchDateField $noteDate;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $noteType;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $title;

    /**
     * @var SearchCustomFieldList
     */
    protected SearchCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "author" => "SearchMultiSelectField",
        "direction" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "note" => "SearchStringField",
        "noteDate" => "SearchDateField",
        "noteType" => "SearchMultiSelectField",
        "title" => "SearchStringField",
        "customFieldList" => "SearchCustomFieldList",
    );

    /**
     * @param SearchMultiSelectField $author
     * @return NoteSearchBasic
     */
    public function setAuthor(SearchMultiSelectField $author): NoteSearchBasic
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getAuthor(): SearchMultiSelectField
    {
        return $this->author;
    }

    /**
     * @param SearchBooleanField $direction
     * @return NoteSearchBasic
     */
    public function setDirection(SearchBooleanField $direction): NoteSearchBasic
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getDirection(): SearchBooleanField
    {
        return $this->direction;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return NoteSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): NoteSearchBasic
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
     * @return NoteSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): NoteSearchBasic
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
     * @param SearchMultiSelectField $internalId
     * @return NoteSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): NoteSearchBasic
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
     * @return NoteSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): NoteSearchBasic
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
     * @param SearchStringField $note
     * @return NoteSearchBasic
     */
    public function setNote(SearchStringField $note): NoteSearchBasic
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNote(): SearchStringField
    {
        return $this->note;
    }

    /**
     * @param SearchDateField $noteDate
     * @return NoteSearchBasic
     */
    public function setNoteDate(SearchDateField $noteDate): NoteSearchBasic
    {
        $this->noteDate = $noteDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNoteDate(): SearchDateField
    {
        return $this->noteDate;
    }

    /**
     * @param SearchMultiSelectField $noteType
     * @return NoteSearchBasic
     */
    public function setNoteType(SearchMultiSelectField $noteType): NoteSearchBasic
    {
        $this->noteType = $noteType;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getNoteType(): SearchMultiSelectField
    {
        return $this->noteType;
    }

    /**
     * @param SearchStringField $title
     * @return NoteSearchBasic
     */
    public function setTitle(SearchStringField $title): NoteSearchBasic
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getTitle(): SearchStringField
    {
        return $this->title;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return NoteSearchBasic
     */
    public function setCustomFieldList(SearchCustomFieldList $customFieldList): NoteSearchBasic
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
