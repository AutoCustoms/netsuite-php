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

class NoteSearchRowBasic extends SearchRowBasic {
    /**
     * @var SearchColumnSelectField[]
     */
    protected array $author;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $direction;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $externalId;

    /**
     * @var SearchColumnSelectField[]
     */
    protected array $internalId;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $note;

    /**
     * @var SearchColumnDateField[]
     */
    protected array $noteDate;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $noteType;

    /**
     * @var SearchColumnStringField[]
     */
    protected array $title;

    /**
     * @var SearchColumnCustomFieldList
     */
    protected SearchColumnCustomFieldList $customFieldList;

    static $paramtypesmap = array(
        "author" => "SearchColumnSelectField[]",
        "direction" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "note" => "SearchColumnStringField[]",
        "noteDate" => "SearchColumnDateField[]",
        "noteType" => "SearchColumnStringField[]",
        "title" => "SearchColumnStringField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );

    /**
     * @param SearchColumnSelectField[] $author
     * @return NoteSearchRowBasic
     */
    public function setAuthor(SearchColumnSelectField $author): NoteSearchRowBasic
    {
        $this->author[] = $author;
        return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getAuthor(): array
    {
        return $this->author;
    }

    /**
     * @param SearchColumnStringField[] $direction
     * @return NoteSearchRowBasic
     */
    public function setDirection(SearchColumnStringField $direction): NoteSearchRowBasic
    {
        $this->direction[] = $direction;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDirection(): array
    {
        return $this->direction;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return NoteSearchRowBasic
     */
    public function setExternalId(SearchColumnSelectField $externalId): NoteSearchRowBasic
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
     * @param SearchColumnSelectField[] $internalId
     * @return NoteSearchRowBasic
     */
    public function setInternalId(SearchColumnSelectField $internalId): NoteSearchRowBasic
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
     * @param SearchColumnStringField[] $note
     * @return NoteSearchRowBasic
     */
    public function setNote(SearchColumnStringField $note): NoteSearchRowBasic
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNote(): array
    {
        return $this->note;
    }

    /**
     * @param SearchColumnDateField[] $noteDate
     * @return NoteSearchRowBasic
     */
    public function setNoteDate(SearchColumnDateField $noteDate): NoteSearchRowBasic
    {
        $this->noteDate[] = $noteDate;
        return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNoteDate(): array
    {
        return $this->noteDate;
    }

    /**
     * @param SearchColumnStringField[] $noteType
     * @return NoteSearchRowBasic
     */
    public function setNoteType(SearchColumnStringField $noteType): NoteSearchRowBasic
    {
        $this->noteType[] = $noteType;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNoteType(): array
    {
        return $this->noteType;
    }

    /**
     * @param SearchColumnStringField[] $title
     * @return NoteSearchRowBasic
     */
    public function setTitle(SearchColumnStringField $title): NoteSearchRowBasic
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTitle(): array
    {
        return $this->title;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return NoteSearchRowBasic
     */
    public function setCustomFieldList(SearchColumnCustomFieldList $customFieldList): NoteSearchRowBasic
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
