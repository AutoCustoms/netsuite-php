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

class CustomRecordTypeSublists {
    /**
     * @var RecordRef
     */
    protected RecordRef $recordSearch;

    /**
     * @var string
     */
    protected string $recordDescr;

    /**
     * @var LanguageValueList
     */
    protected LanguageValueList $recordDescrLanguageValueList;

    /**
     * @var RecordRef
     */
    protected RecordRef $recordTab;

    /**
     * @var string
     */
    protected string $recordId;

    static $paramtypesmap = array(
        "recordSearch" => "RecordRef",
        "recordDescr" => "string",
        "recordDescrLanguageValueList" => "LanguageValueList",
        "recordTab" => "RecordRef",
        "recordId" => "string",
    );

    /**
     * @param RecordRef $recordSearch
     * @return CustomRecordTypeSublists
     */
    public function setRecordSearch(RecordRef $recordSearch): CustomRecordTypeSublists
    {
        $this->recordSearch = $recordSearch;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordSearch(): RecordRef
    {
        return $this->recordSearch;
    }

    /**
     * @param string $recordDescr
     * @return CustomRecordTypeSublists
     */
    public function setRecordDescr(string $recordDescr): CustomRecordTypeSublists
    {
        $this->recordDescr = $recordDescr;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordDescr(): string
    {
        return $this->recordDescr;
    }

    /**
     * @param LanguageValueList $recordDescrLanguageValueList
     * @return CustomRecordTypeSublists
     */
    public function setRecordDescrLanguageValueList(LanguageValueList $recordDescrLanguageValueList): CustomRecordTypeSublists
    {
        $this->recordDescrLanguageValueList = $recordDescrLanguageValueList;
        return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getRecordDescrLanguageValueList(): LanguageValueList
    {
        return $this->recordDescrLanguageValueList;
    }

    /**
     * @param RecordRef $recordTab
     * @return CustomRecordTypeSublists
     */
    public function setRecordTab(RecordRef $recordTab): CustomRecordTypeSublists
    {
        $this->recordTab = $recordTab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecordTab(): RecordRef
    {
        return $this->recordTab;
    }

    /**
     * @param string $recordId
     * @return CustomRecordTypeSublists
     */
    public function setRecordId(string $recordId): CustomRecordTypeSublists
    {
        $this->recordId = $recordId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecordId(): string
    {
        return $this->recordId;
    }

}
