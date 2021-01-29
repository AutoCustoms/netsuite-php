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

class Preferences {
    /**
     * @var bool
     */
    protected bool $warningAsError;

    /**
     * @var bool
     */
    protected bool $disableMandatoryCustomFieldValidation;

    /**
     * @var bool
     */
    protected bool $disableSystemNotesForCustomFields;

    /**
     * @var bool
     */
    protected bool $ignoreReadOnlyFields;

    /**
     * @var bool
     */
    protected bool $runServerSuiteScriptAndTriggerWorkflows;

    static $paramtypesmap = array(
        "warningAsError" => "boolean",
        "disableMandatoryCustomFieldValidation" => "boolean",
        "disableSystemNotesForCustomFields" => "boolean",
        "ignoreReadOnlyFields" => "boolean",
        "runServerSuiteScriptAndTriggerWorkflows" => "boolean",
    );

    /**
     * @param bool $warningAsError
     * @return Preferences
     */
    public function setWarningAsError(bool $warningAsError): Preferences
    {
        $this->warningAsError = $warningAsError;
        return $this;
    }

    /**
     * @return bool
     */
    public function getWarningAsError(): bool
    {
        return $this->warningAsError;
    }

    /**
     * @param bool $disableMandatoryCustomFieldValidation
     * @return Preferences
     */
    public function setDisableMandatoryCustomFieldValidation(bool $disableMandatoryCustomFieldValidation): Preferences
    {
        $this->disableMandatoryCustomFieldValidation = $disableMandatoryCustomFieldValidation;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableMandatoryCustomFieldValidation(): bool
    {
        return $this->disableMandatoryCustomFieldValidation;
    }

    /**
     * @param bool $disableSystemNotesForCustomFields
     * @return Preferences
     */
    public function setDisableSystemNotesForCustomFields(bool $disableSystemNotesForCustomFields): Preferences
    {
        $this->disableSystemNotesForCustomFields = $disableSystemNotesForCustomFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDisableSystemNotesForCustomFields(): bool
    {
        return $this->disableSystemNotesForCustomFields;
    }

    /**
     * @param bool $ignoreReadOnlyFields
     * @return Preferences
     */
    public function setIgnoreReadOnlyFields(bool $ignoreReadOnlyFields): Preferences
    {
        $this->ignoreReadOnlyFields = $ignoreReadOnlyFields;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIgnoreReadOnlyFields(): bool
    {
        return $this->ignoreReadOnlyFields;
    }

    /**
     * @param bool $runServerSuiteScriptAndTriggerWorkflows
     * @return Preferences
     */
    public function setRunServerSuiteScriptAndTriggerWorkflows(bool $runServerSuiteScriptAndTriggerWorkflows): Preferences
    {
        $this->runServerSuiteScriptAndTriggerWorkflows = $runServerSuiteScriptAndTriggerWorkflows;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRunServerSuiteScriptAndTriggerWorkflows(): bool
    {
        return $this->runServerSuiteScriptAndTriggerWorkflows;
    }

}
