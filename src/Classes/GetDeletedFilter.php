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

class GetDeletedFilter {
    /**
     * @var SearchDateField
     */
    protected SearchDateField $deletedDate;

    /**
     * @var SearchEnumMultiSelectField
     */
    protected SearchEnumMultiSelectField $type;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $scriptId;

    static $paramtypesmap = array(
        "deletedDate" => "SearchDateField",
        "type" => "SearchEnumMultiSelectField",
        "scriptId" => "SearchStringField",
    );

    /**
     * @param SearchDateField $deletedDate
     * @return GetDeletedFilter
     */
    public function setDeletedDate(SearchDateField $deletedDate): GetDeletedFilter
    {
        $this->deletedDate = $deletedDate;
        return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDeletedDate(): SearchDateField
    {
        return $this->deletedDate;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return GetDeletedFilter
     */
    public function setType(SearchEnumMultiSelectField $type): GetDeletedFilter
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType(): SearchEnumMultiSelectField
    {
        return $this->type;
    }

    /**
     * @param SearchStringField $scriptId
     * @return GetDeletedFilter
     */
    public function setScriptId(SearchStringField $scriptId): GetDeletedFilter
    {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScriptId(): SearchStringField
    {
        return $this->scriptId;
    }

}
