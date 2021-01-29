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

class CustomRecordTypeFieldList {
    /**
     * @var CustomRecordCustomField[]
     */
    protected array $customField;

    /**
     * @var bool
     */
    protected bool $replaceAll;

    static $paramtypesmap = array(
        "customField" => "CustomRecordCustomField[]",
        "replaceAll" => "boolean",
    );

    /**
     * @param CustomRecordCustomField[] $customField
     * @return CustomRecordTypeFieldList
     */
    public function setCustomField(CustomRecordCustomField $customField): CustomRecordTypeFieldList
    {
        $this->customField[] = $customField;
        return $this;
    }

    /**
     * @return CustomRecordCustomField[]
     */
    public function getCustomField(): array
    {
        return $this->customField;
    }

    /**
     * @param bool $replaceAll
     * @return CustomRecordTypeFieldList
     */
    public function setReplaceAll(bool $replaceAll): CustomRecordTypeFieldList
    {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * @return bool
     */
    public function getReplaceAll(): bool
    {
        return $this->replaceAll;
    }

}
