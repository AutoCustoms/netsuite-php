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

class CustomRecordTypeOnlineForms {
    /**
     * @var string
     */
    protected string $onlineFormName;

    /**
     * @var string
     */
    protected string $isOnline;

    /**
     * @var string
     */
    protected string $templateName;

    static $paramtypesmap = array(
        "onlineFormName" => "string",
        "isOnline" => "string",
        "templateName" => "string",
    );

    /**
     * @param string $onlineFormName
     * @return CustomRecordTypeOnlineForms
     */
    public function setOnlineFormName(string $onlineFormName): CustomRecordTypeOnlineForms
    {
        $this->onlineFormName = $onlineFormName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOnlineFormName(): string
    {
        return $this->onlineFormName;
    }

    /**
     * @param string $isOnline
     * @return CustomRecordTypeOnlineForms
     */
    public function setIsOnline(string $isOnline): CustomRecordTypeOnlineForms
    {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsOnline(): string
    {
        return $this->isOnline;
    }

    /**
     * @param string $templateName
     * @return CustomRecordTypeOnlineForms
     */
    public function setTemplateName(string $templateName): CustomRecordTypeOnlineForms
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplateName(): string
    {
        return $this->templateName;
    }

}
