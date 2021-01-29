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

class CustomRecordTypeForms {
    /**
     * @var string
     */
    protected string $formEdit;

    /**
     * @var string
     */
    protected string $formName;

    /**
     * @var bool
     */
    protected bool $formPref;

    static $paramtypesmap = array(
        "formEdit" => "string",
        "formName" => "string",
        "formPref" => "boolean",
    );

    /**
     * @param string $formEdit
     * @return CustomRecordTypeForms
     */
    public function setFormEdit(string $formEdit): CustomRecordTypeForms
    {
        $this->formEdit = $formEdit;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormEdit(): string
    {
        return $this->formEdit;
    }

    /**
     * @param string $formName
     * @return CustomRecordTypeForms
     */
    public function setFormName(string $formName): CustomRecordTypeForms
    {
        $this->formName = $formName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormName(): string
    {
        return $this->formName;
    }

    /**
     * @param bool $formPref
     * @return CustomRecordTypeForms
     */
    public function setFormPref(bool $formPref): CustomRecordTypeForms
    {
        $this->formPref = $formPref;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFormPref(): bool
    {
        return $this->formPref;
    }

}
