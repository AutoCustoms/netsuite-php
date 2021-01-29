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

class BudgetCategory extends Record {
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $budgetType;

    /**
     * @var bool
     */
    protected bool $isInactive;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "name" => "string",
        "budgetType" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
    );

    /**
     * @param string $name
     * @return BudgetCategory
     */
    public function setName(string $name): BudgetCategory
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param bool $budgetType
     * @return BudgetCategory
     */
    public function setBudgetType(bool $budgetType): BudgetCategory
    {
        $this->budgetType = $budgetType;
        return $this;
    }

    /**
     * @return bool
     */
    public function getBudgetType(): bool
    {
        return $this->budgetType;
    }

    /**
     * @param bool $isInactive
     * @return BudgetCategory
     */
    public function setIsInactive(bool $isInactive): BudgetCategory
    {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsInactive(): bool
    {
        return $this->isInactive;
    }

    /**
     * @param string $internalId
     * @return BudgetCategory
     */
    public function setInternalId(string $internalId): BudgetCategory
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternalId(): string
    {
        return $this->internalId;
    }

}
