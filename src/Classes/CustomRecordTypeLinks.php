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

class CustomRecordTypeLinks {
    /**
     * @var RecordRef
     */
    protected RecordRef $linkCenter;

    /**
     * @var RecordRef
     */
    protected RecordRef $linkSection;

    /**
     * @var string
     */
    protected string $linkLabel;

    static $paramtypesmap = array(
        "linkCenter" => "RecordRef",
        "linkSection" => "RecordRef",
        "linkLabel" => "string",
    );

    /**
     * @param RecordRef $linkCenter
     * @return CustomRecordTypeLinks
     */
    public function setLinkCenter(RecordRef $linkCenter): CustomRecordTypeLinks
    {
        $this->linkCenter = $linkCenter;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLinkCenter(): RecordRef
    {
        return $this->linkCenter;
    }

    /**
     * @param RecordRef $linkSection
     * @return CustomRecordTypeLinks
     */
    public function setLinkSection(RecordRef $linkSection): CustomRecordTypeLinks
    {
        $this->linkSection = $linkSection;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLinkSection(): RecordRef
    {
        return $this->linkSection;
    }

    /**
     * @param string $linkLabel
     * @return CustomRecordTypeLinks
     */
    public function setLinkLabel(string $linkLabel): CustomRecordTypeLinks
    {
        $this->linkLabel = $linkLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkLabel(): string
    {
        return $this->linkLabel;
    }

}
