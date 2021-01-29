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

class CustomRecordTypeTabs {
    /**
     * @var string
     */
    protected string $tabTitle;

    /**
     * @var RecordRef
     */
    protected RecordRef $tabParent;

    /**
     * @var LanguageValueList
     */
    protected LanguageValueList $tabTitleLanguageValueList;

    static $paramtypesmap = array(
        "tabTitle" => "string",
        "tabParent" => "RecordRef",
        "tabTitleLanguageValueList" => "LanguageValueList",
    );

    /**
     * @param string $tabTitle
     * @return CustomRecordTypeTabs
     */
    public function setTabTitle(string $tabTitle): CustomRecordTypeTabs
    {
        $this->tabTitle = $tabTitle;
        return $this;
    }

    /**
     * @return string
     */
    public function getTabTitle(): string
    {
        return $this->tabTitle;
    }

    /**
     * @param RecordRef $tabParent
     * @return CustomRecordTypeTabs
     */
    public function setTabParent(RecordRef $tabParent): CustomRecordTypeTabs
    {
        $this->tabParent = $tabParent;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTabParent(): RecordRef
    {
        return $this->tabParent;
    }

    /**
     * @param LanguageValueList $tabTitleLanguageValueList
     * @return CustomRecordTypeTabs
     */
    public function setTabTitleLanguageValueList(LanguageValueList $tabTitleLanguageValueList): CustomRecordTypeTabs
    {
        $this->tabTitleLanguageValueList = $tabTitleLanguageValueList;
        return $this;
    }

    /**
     * @return LanguageValueList
     */
    public function getTabTitleLanguageValueList(): LanguageValueList
    {
        return $this->tabTitleLanguageValueList;
    }

}
