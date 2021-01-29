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

class CustomRecordTypeChildren {
    /**
     * @var string
     */
    protected string $childDescr;

    /**
     * @var RecordRef
     */
    protected RecordRef $childTab;

    static $paramtypesmap = array(
        "childDescr" => "string",
        "childTab" => "RecordRef",
    );

    /**
     * @param string $childDescr
     * @return CustomRecordTypeChildren
     */
    public function setChildDescr(string $childDescr): CustomRecordTypeChildren
    {
        $this->childDescr = $childDescr;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildDescr(): string
    {
        return $this->childDescr;
    }

    /**
     * @param RecordRef $childTab
     * @return CustomRecordTypeChildren
     */
    public function setChildTab(RecordRef $childTab): CustomRecordTypeChildren
    {
        $this->childTab = $childTab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getChildTab(): RecordRef
    {
        return $this->childTab;
    }

}
