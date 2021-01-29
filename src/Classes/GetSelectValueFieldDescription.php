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

class GetSelectValueFieldDescription {
    /**
     * @var RecordType
     */
    protected RecordType $recordType;

    /**
     * @var RecordRef
     */
    protected RecordRef $customRecordType;

    /**
     * @var RecordRef
     */
    protected RecordRef $customTransactionType;

    /**
     * @var string
     */
    protected string $sublist;

    /**
     * @var string
     */
    protected string $field;

    /**
     * @var RecordRef
     */
    protected RecordRef $customForm;

    /**
     * @var GetSelectValueFilter
     */
    protected GetSelectValueFilter $filter;

    /**
     * @var GetSelectFilterByFieldValueList
     */
    protected GetSelectFilterByFieldValueList $filterByValueList;

    static $paramtypesmap = array(
        "recordType" => "RecordType",
        "customRecordType" => "RecordRef",
        "customTransactionType" => "RecordRef",
        "sublist" => "string",
        "field" => "string",
        "customForm" => "RecordRef",
        "filter" => "GetSelectValueFilter",
        "filterByValueList" => "GetSelectFilterByFieldValueList",
    );

    /**
     * @param RecordType $recordType
     * @return GetSelectValueFieldDescription
     */
    public function setRecordType(RecordType $recordType): GetSelectValueFieldDescription
    {
        $this->recordType = $recordType;
        return $this;
    }

    /**
     * @return RecordType
     */
    public function getRecordType(): RecordType
    {
        return $this->recordType;
    }

    /**
     * @param RecordRef $customRecordType
     * @return GetSelectValueFieldDescription
     */
    public function setCustomRecordType(RecordRef $customRecordType): GetSelectValueFieldDescription
    {
        $this->customRecordType = $customRecordType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomRecordType(): RecordRef
    {
        return $this->customRecordType;
    }

    /**
     * @param RecordRef $customTransactionType
     * @return GetSelectValueFieldDescription
     */
    public function setCustomTransactionType(RecordRef $customTransactionType): GetSelectValueFieldDescription
    {
        $this->customTransactionType = $customTransactionType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomTransactionType(): RecordRef
    {
        return $this->customTransactionType;
    }

    /**
     * @param string $sublist
     * @return GetSelectValueFieldDescription
     */
    public function setSublist(string $sublist): GetSelectValueFieldDescription
    {
        $this->sublist = $sublist;
        return $this;
    }

    /**
     * @return string
     */
    public function getSublist(): string
    {
        return $this->sublist;
    }

    /**
     * @param string $field
     * @return GetSelectValueFieldDescription
     */
    public function setField(string $field): GetSelectValueFieldDescription
    {
        $this->field = $field;
        return $this;
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param RecordRef $customForm
     * @return GetSelectValueFieldDescription
     */
    public function setCustomForm(RecordRef $customForm): GetSelectValueFieldDescription
    {
        $this->customForm = $customForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm(): RecordRef
    {
        return $this->customForm;
    }

    /**
     * @param GetSelectValueFilter $filter
     * @return GetSelectValueFieldDescription
     */
    public function setFilter(GetSelectValueFilter $filter): GetSelectValueFieldDescription
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @return GetSelectValueFilter
     */
    public function getFilter(): GetSelectValueFilter
    {
        return $this->filter;
    }

    /**
     * @param GetSelectFilterByFieldValueList $filterByValueList
     * @return GetSelectValueFieldDescription
     */
    public function setFilterByValueList(GetSelectFilterByFieldValueList $filterByValueList): GetSelectValueFieldDescription
    {
        $this->filterByValueList = $filterByValueList;
        return $this;
    }

    /**
     * @return GetSelectFilterByFieldValueList
     */
    public function getFilterByValueList(): GetSelectFilterByFieldValueList
    {
        return $this->filterByValueList;
    }

}
