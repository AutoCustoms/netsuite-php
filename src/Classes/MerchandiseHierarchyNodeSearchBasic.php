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

class MerchandiseHierarchyNodeSearchBasic extends SearchRecordBasic {
    /**
     * @var SearchStringField
     */
    protected SearchStringField $description;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $externalId;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $externalIdString;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $hierarchyLevel;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $hierarchyVersion;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $internalId;

    /**
     * @var SearchLongField
     */
    protected SearchLongField $internalIdNumber;

    /**
     * @var SearchStringField
     */
    protected SearchStringField $name;

    /**
     * @var SearchMultiSelectField
     */
    protected SearchMultiSelectField $parentNode;

    static $paramtypesmap = array(
        "description" => "SearchStringField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "hierarchyLevel" => "SearchMultiSelectField",
        "hierarchyVersion" => "SearchMultiSelectField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "name" => "SearchStringField",
        "parentNode" => "SearchMultiSelectField",
    );

    /**
     * @param SearchStringField $description
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setDescription(SearchStringField $description): MerchandiseHierarchyNodeSearchBasic
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription(): SearchStringField
    {
        return $this->description;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setExternalId(SearchMultiSelectField $externalId): MerchandiseHierarchyNodeSearchBasic
    {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId(): SearchMultiSelectField
    {
        return $this->externalId;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setExternalIdString(SearchStringField $externalIdString): MerchandiseHierarchyNodeSearchBasic
    {
        $this->externalIdString = $externalIdString;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString(): SearchStringField
    {
        return $this->externalIdString;
    }

    /**
     * @param SearchMultiSelectField $hierarchyLevel
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setHierarchyLevel(SearchMultiSelectField $hierarchyLevel): MerchandiseHierarchyNodeSearchBasic
    {
        $this->hierarchyLevel = $hierarchyLevel;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getHierarchyLevel(): SearchMultiSelectField
    {
        return $this->hierarchyLevel;
    }

    /**
     * @param SearchMultiSelectField $hierarchyVersion
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setHierarchyVersion(SearchMultiSelectField $hierarchyVersion): MerchandiseHierarchyNodeSearchBasic
    {
        $this->hierarchyVersion = $hierarchyVersion;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getHierarchyVersion(): SearchMultiSelectField
    {
        return $this->hierarchyVersion;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setInternalId(SearchMultiSelectField $internalId): MerchandiseHierarchyNodeSearchBasic
    {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId(): SearchMultiSelectField
    {
        return $this->internalId;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setInternalIdNumber(SearchLongField $internalIdNumber): MerchandiseHierarchyNodeSearchBasic
    {
        $this->internalIdNumber = $internalIdNumber;
        return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber(): SearchLongField
    {
        return $this->internalIdNumber;
    }

    /**
     * @param SearchStringField $name
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setName(SearchStringField $name): MerchandiseHierarchyNodeSearchBasic
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName(): SearchStringField
    {
        return $this->name;
    }

    /**
     * @param SearchMultiSelectField $parentNode
     * @return MerchandiseHierarchyNodeSearchBasic
     */
    public function setParentNode(SearchMultiSelectField $parentNode): MerchandiseHierarchyNodeSearchBasic
    {
        $this->parentNode = $parentNode;
        return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParentNode(): SearchMultiSelectField
    {
        return $this->parentNode;
    }

}
