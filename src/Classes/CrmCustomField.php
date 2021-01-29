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

class CrmCustomField extends CustomFieldType {
    /**
     * @var string
     */
    protected string $label;

    /**
     * @var RecordRef
     */
    protected RecordRef $owner;

    /**
     * @var string
     */
    protected string $description;

    /**
     * @var RecordRef
     */
    protected RecordRef $selectRecordType;

    /**
     * @var bool
     */
    protected bool $storeValue;

    /**
     * @var bool
     */
    protected bool $showInList;

    /**
     * @var bool
     */
    protected bool $globalSearch;

    /**
     * @var bool
     */
    protected bool $isParent;

    /**
     * @var RecordRef
     */
    protected RecordRef $insertBefore;

    /**
     * @var RecordRef
     */
    protected RecordRef $subtab;

    /**
     * @var CustomizationDisplayType
     */
    protected CustomizationDisplayType $displayType;

    /**
     * @var int
     */
    protected int $displayWidth;

    /**
     * @var int
     */
    protected int $displayHeight;

    /**
     * @var string
     */
    protected string $help;

    /**
     * @var RecordRef
     */
    protected RecordRef $parentSubtab;

    /**
     * @var string
     */
    protected string $linkText;

    /**
     * @var bool
     */
    protected bool $isMandatory;

    /**
     * @var bool
     */
    protected bool $checkSpelling;

    /**
     * @var int
     */
    protected int $maxLength;

    /**
     * @var float
     */
    protected float $minValue;

    /**
     * @var float
     */
    protected float $maxValue;

    /**
     * @var bool
     */
    protected bool $defaultChecked;

    /**
     * @var string
     */
    protected string $defaultValue;

    /**
     * @var bool
     */
    protected bool $isFormula;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultSelection;

    /**
     * @var CustomizationDynamicDefault
     */
    protected CustomizationDynamicDefault $dynamicDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchDefault;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchCompareField;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceList;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceFrom;

    /**
     * @var RecordRef
     */
    protected RecordRef $sourceFilterBy;

    /**
     * @var RecordRef
     */
    protected RecordRef $customSegment;

    /**
     * @var bool
     */
    protected bool $appliesToTask;

    /**
     * @var bool
     */
    protected bool $appliesToMfgProjectTask;

    /**
     * @var bool
     */
    protected bool $appliesToProjectTask;

    /**
     * @var bool
     */
    protected bool $appliesToPhoneCall;

    /**
     * @var bool
     */
    protected bool $appliesToEvent;

    /**
     * @var bool
     */
    protected bool $appliesToCase;

    /**
     * @var bool
     */
    protected bool $appliesToCampaign;

    /**
     * @var bool
     */
    protected bool $appliesPerKeyword;

    /**
     * @var bool
     */
    protected bool $appliesToSolution;

    /**
     * @var bool
     */
    protected bool $appliesToIssue;

    /**
     * @var bool
     */
    protected bool $availableExternally;

    /**
     * @var bool
     */
    protected bool $availableToSso;

    /**
     * @var bool
     */
    protected bool $showIssueChanges;

    /**
     * @var CrmCustomFieldFilterList
     */
    protected CrmCustomFieldFilterList $filterList;

    /**
     * @var CustomizationAccessLevel
     */
    protected CustomizationAccessLevel $accessLevel;

    /**
     * @var CustomizationSearchLevel
     */
    protected CustomizationSearchLevel $searchLevel;

    /**
     * @var CustomFieldRoleAccessList
     */
    protected CustomFieldRoleAccessList $roleAccessList;

    /**
     * @var CustomFieldDepartmentAccessList
     */
    protected CustomFieldDepartmentAccessList $deptAccessList;

    /**
     * @var CustomFieldSubAccessList
     */
    protected CustomFieldSubAccessList $subAccessList;

    /**
     * @var CustomFieldTranslationsList
     */
    protected CustomFieldTranslationsList $translationsList;

    /**
     * @var string
     */
    protected string $internalId;

    static $paramtypesmap = array(
        "label" => "string",
        "owner" => "RecordRef",
        "description" => "string",
        "selectRecordType" => "RecordRef",
        "storeValue" => "boolean",
        "showInList" => "boolean",
        "globalSearch" => "boolean",
        "isParent" => "boolean",
        "insertBefore" => "RecordRef",
        "subtab" => "RecordRef",
        "displayType" => "CustomizationDisplayType",
        "displayWidth" => "integer",
        "displayHeight" => "integer",
        "help" => "string",
        "parentSubtab" => "RecordRef",
        "linkText" => "string",
        "isMandatory" => "boolean",
        "checkSpelling" => "boolean",
        "maxLength" => "integer",
        "minValue" => "float",
        "maxValue" => "float",
        "defaultChecked" => "boolean",
        "defaultValue" => "string",
        "isFormula" => "boolean",
        "defaultSelection" => "RecordRef",
        "dynamicDefault" => "CustomizationDynamicDefault",
        "searchDefault" => "RecordRef",
        "searchCompareField" => "RecordRef",
        "sourceList" => "RecordRef",
        "sourceFrom" => "RecordRef",
        "sourceFilterBy" => "RecordRef",
        "customSegment" => "RecordRef",
        "appliesToTask" => "boolean",
        "appliesToMfgProjectTask" => "boolean",
        "appliesToProjectTask" => "boolean",
        "appliesToPhoneCall" => "boolean",
        "appliesToEvent" => "boolean",
        "appliesToCase" => "boolean",
        "appliesToCampaign" => "boolean",
        "appliesPerKeyword" => "boolean",
        "appliesToSolution" => "boolean",
        "appliesToIssue" => "boolean",
        "availableExternally" => "boolean",
        "availableToSso" => "boolean",
        "showIssueChanges" => "boolean",
        "filterList" => "CrmCustomFieldFilterList",
        "accessLevel" => "CustomizationAccessLevel",
        "searchLevel" => "CustomizationSearchLevel",
        "roleAccessList" => "CustomFieldRoleAccessList",
        "deptAccessList" => "CustomFieldDepartmentAccessList",
        "subAccessList" => "CustomFieldSubAccessList",
        "translationsList" => "CustomFieldTranslationsList",
        "internalId" => "string",
    );

    /**
     * @param string $label
     * @return CrmCustomField
     */
    public function setLabel(string $label): CrmCustomField
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param RecordRef $owner
     * @return CrmCustomField
     */
    public function setOwner(RecordRef $owner): CrmCustomField
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getOwner(): RecordRef
    {
        return $this->owner;
    }

    /**
     * @param string $description
     * @return CrmCustomField
     */
    public function setDescription(string $description): CrmCustomField
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param RecordRef $selectRecordType
     * @return CrmCustomField
     */
    public function setSelectRecordType(RecordRef $selectRecordType): CrmCustomField
    {
        $this->selectRecordType = $selectRecordType;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSelectRecordType(): RecordRef
    {
        return $this->selectRecordType;
    }

    /**
     * @param bool $storeValue
     * @return CrmCustomField
     */
    public function setStoreValue(bool $storeValue): CrmCustomField
    {
        $this->storeValue = $storeValue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getStoreValue(): bool
    {
        return $this->storeValue;
    }

    /**
     * @param bool $showInList
     * @return CrmCustomField
     */
    public function setShowInList(bool $showInList): CrmCustomField
    {
        $this->showInList = $showInList;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowInList(): bool
    {
        return $this->showInList;
    }

    /**
     * @param bool $globalSearch
     * @return CrmCustomField
     */
    public function setGlobalSearch(bool $globalSearch): CrmCustomField
    {
        $this->globalSearch = $globalSearch;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGlobalSearch(): bool
    {
        return $this->globalSearch;
    }

    /**
     * @param bool $isParent
     * @return CrmCustomField
     */
    public function setIsParent(bool $isParent): CrmCustomField
    {
        $this->isParent = $isParent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsParent(): bool
    {
        return $this->isParent;
    }

    /**
     * @param RecordRef $insertBefore
     * @return CrmCustomField
     */
    public function setInsertBefore(RecordRef $insertBefore): CrmCustomField
    {
        $this->insertBefore = $insertBefore;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInsertBefore(): RecordRef
    {
        return $this->insertBefore;
    }

    /**
     * @param RecordRef $subtab
     * @return CrmCustomField
     */
    public function setSubtab(RecordRef $subtab): CrmCustomField
    {
        $this->subtab = $subtab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSubtab(): RecordRef
    {
        return $this->subtab;
    }

    /**
     * @param CustomizationDisplayType $displayType
     * @return CrmCustomField
     */
    public function setDisplayType(CustomizationDisplayType $displayType): CrmCustomField
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * @return CustomizationDisplayType
     */
    public function getDisplayType(): CustomizationDisplayType
    {
        return $this->displayType;
    }

    /**
     * @param int $displayWidth
     * @return CrmCustomField
     */
    public function setDisplayWidth(int $displayWidth): CrmCustomField
    {
        $this->displayWidth = $displayWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayWidth(): int
    {
        return $this->displayWidth;
    }

    /**
     * @param int $displayHeight
     * @return CrmCustomField
     */
    public function setDisplayHeight(int $displayHeight): CrmCustomField
    {
        $this->displayHeight = $displayHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisplayHeight(): int
    {
        return $this->displayHeight;
    }

    /**
     * @param string $help
     * @return CrmCustomField
     */
    public function setHelp(string $help): CrmCustomField
    {
        $this->help = $help;
        return $this;
    }

    /**
     * @return string
     */
    public function getHelp(): string
    {
        return $this->help;
    }

    /**
     * @param RecordRef $parentSubtab
     * @return CrmCustomField
     */
    public function setParentSubtab(RecordRef $parentSubtab): CrmCustomField
    {
        $this->parentSubtab = $parentSubtab;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParentSubtab(): RecordRef
    {
        return $this->parentSubtab;
    }

    /**
     * @param string $linkText
     * @return CrmCustomField
     */
    public function setLinkText(string $linkText): CrmCustomField
    {
        $this->linkText = $linkText;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkText(): string
    {
        return $this->linkText;
    }

    /**
     * @param bool $isMandatory
     * @return CrmCustomField
     */
    public function setIsMandatory(bool $isMandatory): CrmCustomField
    {
        $this->isMandatory = $isMandatory;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMandatory(): bool
    {
        return $this->isMandatory;
    }

    /**
     * @param bool $checkSpelling
     * @return CrmCustomField
     */
    public function setCheckSpelling(bool $checkSpelling): CrmCustomField
    {
        $this->checkSpelling = $checkSpelling;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCheckSpelling(): bool
    {
        return $this->checkSpelling;
    }

    /**
     * @param int $maxLength
     * @return CrmCustomField
     */
    public function setMaxLength(int $maxLength): CrmCustomField
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->maxLength;
    }

    /**
     * @param float $minValue
     * @return CrmCustomField
     */
    public function setMinValue(float $minValue): CrmCustomField
    {
        $this->minValue = $minValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getMinValue(): float
    {
        return $this->minValue;
    }

    /**
     * @param float $maxValue
     * @return CrmCustomField
     */
    public function setMaxValue(float $maxValue): CrmCustomField
    {
        $this->maxValue = $maxValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxValue(): float
    {
        return $this->maxValue;
    }

    /**
     * @param bool $defaultChecked
     * @return CrmCustomField
     */
    public function setDefaultChecked(bool $defaultChecked): CrmCustomField
    {
        $this->defaultChecked = $defaultChecked;
        return $this;
    }

    /**
     * @return bool
     */
    public function getDefaultChecked(): bool
    {
        return $this->defaultChecked;
    }

    /**
     * @param string $defaultValue
     * @return CrmCustomField
     */
    public function setDefaultValue(string $defaultValue): CrmCustomField
    {
        $this->defaultValue = $defaultValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }

    /**
     * @param bool $isFormula
     * @return CrmCustomField
     */
    public function setIsFormula(bool $isFormula): CrmCustomField
    {
        $this->isFormula = $isFormula;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsFormula(): bool
    {
        return $this->isFormula;
    }

    /**
     * @param RecordRef $defaultSelection
     * @return CrmCustomField
     */
    public function setDefaultSelection(RecordRef $defaultSelection): CrmCustomField
    {
        $this->defaultSelection = $defaultSelection;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultSelection(): RecordRef
    {
        return $this->defaultSelection;
    }

    /**
     * @param CustomizationDynamicDefault $dynamicDefault
     * @return CrmCustomField
     */
    public function setDynamicDefault(CustomizationDynamicDefault $dynamicDefault): CrmCustomField
    {
        $this->dynamicDefault = $dynamicDefault;
        return $this;
    }

    /**
     * @return CustomizationDynamicDefault
     */
    public function getDynamicDefault(): CustomizationDynamicDefault
    {
        return $this->dynamicDefault;
    }

    /**
     * @param RecordRef $searchDefault
     * @return CrmCustomField
     */
    public function setSearchDefault(RecordRef $searchDefault): CrmCustomField
    {
        $this->searchDefault = $searchDefault;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchDefault(): RecordRef
    {
        return $this->searchDefault;
    }

    /**
     * @param RecordRef $searchCompareField
     * @return CrmCustomField
     */
    public function setSearchCompareField(RecordRef $searchCompareField): CrmCustomField
    {
        $this->searchCompareField = $searchCompareField;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchCompareField(): RecordRef
    {
        return $this->searchCompareField;
    }

    /**
     * @param RecordRef $sourceList
     * @return CrmCustomField
     */
    public function setSourceList(RecordRef $sourceList): CrmCustomField
    {
        $this->sourceList = $sourceList;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceList(): RecordRef
    {
        return $this->sourceList;
    }

    /**
     * @param RecordRef $sourceFrom
     * @return CrmCustomField
     */
    public function setSourceFrom(RecordRef $sourceFrom): CrmCustomField
    {
        $this->sourceFrom = $sourceFrom;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFrom(): RecordRef
    {
        return $this->sourceFrom;
    }

    /**
     * @param RecordRef $sourceFilterBy
     * @return CrmCustomField
     */
    public function setSourceFilterBy(RecordRef $sourceFilterBy): CrmCustomField
    {
        $this->sourceFilterBy = $sourceFilterBy;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSourceFilterBy(): RecordRef
    {
        return $this->sourceFilterBy;
    }

    /**
     * @param RecordRef $customSegment
     * @return CrmCustomField
     */
    public function setCustomSegment(RecordRef $customSegment): CrmCustomField
    {
        $this->customSegment = $customSegment;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomSegment(): RecordRef
    {
        return $this->customSegment;
    }

    /**
     * @param bool $appliesToTask
     * @return CrmCustomField
     */
    public function setAppliesToTask(bool $appliesToTask): CrmCustomField
    {
        $this->appliesToTask = $appliesToTask;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToTask(): bool
    {
        return $this->appliesToTask;
    }

    /**
     * @param bool $appliesToMfgProjectTask
     * @return CrmCustomField
     */
    public function setAppliesToMfgProjectTask(bool $appliesToMfgProjectTask): CrmCustomField
    {
        $this->appliesToMfgProjectTask = $appliesToMfgProjectTask;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToMfgProjectTask(): bool
    {
        return $this->appliesToMfgProjectTask;
    }

    /**
     * @param bool $appliesToProjectTask
     * @return CrmCustomField
     */
    public function setAppliesToProjectTask(bool $appliesToProjectTask): CrmCustomField
    {
        $this->appliesToProjectTask = $appliesToProjectTask;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToProjectTask(): bool
    {
        return $this->appliesToProjectTask;
    }

    /**
     * @param bool $appliesToPhoneCall
     * @return CrmCustomField
     */
    public function setAppliesToPhoneCall(bool $appliesToPhoneCall): CrmCustomField
    {
        $this->appliesToPhoneCall = $appliesToPhoneCall;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToPhoneCall(): bool
    {
        return $this->appliesToPhoneCall;
    }

    /**
     * @param bool $appliesToEvent
     * @return CrmCustomField
     */
    public function setAppliesToEvent(bool $appliesToEvent): CrmCustomField
    {
        $this->appliesToEvent = $appliesToEvent;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToEvent(): bool
    {
        return $this->appliesToEvent;
    }

    /**
     * @param bool $appliesToCase
     * @return CrmCustomField
     */
    public function setAppliesToCase(bool $appliesToCase): CrmCustomField
    {
        $this->appliesToCase = $appliesToCase;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToCase(): bool
    {
        return $this->appliesToCase;
    }

    /**
     * @param bool $appliesToCampaign
     * @return CrmCustomField
     */
    public function setAppliesToCampaign(bool $appliesToCampaign): CrmCustomField
    {
        $this->appliesToCampaign = $appliesToCampaign;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToCampaign(): bool
    {
        return $this->appliesToCampaign;
    }

    /**
     * @param bool $appliesPerKeyword
     * @return CrmCustomField
     */
    public function setAppliesPerKeyword(bool $appliesPerKeyword): CrmCustomField
    {
        $this->appliesPerKeyword = $appliesPerKeyword;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesPerKeyword(): bool
    {
        return $this->appliesPerKeyword;
    }

    /**
     * @param bool $appliesToSolution
     * @return CrmCustomField
     */
    public function setAppliesToSolution(bool $appliesToSolution): CrmCustomField
    {
        $this->appliesToSolution = $appliesToSolution;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToSolution(): bool
    {
        return $this->appliesToSolution;
    }

    /**
     * @param bool $appliesToIssue
     * @return CrmCustomField
     */
    public function setAppliesToIssue(bool $appliesToIssue): CrmCustomField
    {
        $this->appliesToIssue = $appliesToIssue;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAppliesToIssue(): bool
    {
        return $this->appliesToIssue;
    }

    /**
     * @param bool $availableExternally
     * @return CrmCustomField
     */
    public function setAvailableExternally(bool $availableExternally): CrmCustomField
    {
        $this->availableExternally = $availableExternally;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableExternally(): bool
    {
        return $this->availableExternally;
    }

    /**
     * @param bool $availableToSso
     * @return CrmCustomField
     */
    public function setAvailableToSso(bool $availableToSso): CrmCustomField
    {
        $this->availableToSso = $availableToSso;
        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailableToSso(): bool
    {
        return $this->availableToSso;
    }

    /**
     * @param bool $showIssueChanges
     * @return CrmCustomField
     */
    public function setShowIssueChanges(bool $showIssueChanges): CrmCustomField
    {
        $this->showIssueChanges = $showIssueChanges;
        return $this;
    }

    /**
     * @return bool
     */
    public function getShowIssueChanges(): bool
    {
        return $this->showIssueChanges;
    }

    /**
     * @param CrmCustomFieldFilterList $filterList
     * @return CrmCustomField
     */
    public function setFilterList(CrmCustomFieldFilterList $filterList): CrmCustomField
    {
        $this->filterList = $filterList;
        return $this;
    }

    /**
     * @return CrmCustomFieldFilterList
     */
    public function getFilterList(): CrmCustomFieldFilterList
    {
        return $this->filterList;
    }

    /**
     * @param CustomizationAccessLevel $accessLevel
     * @return CrmCustomField
     */
    public function setAccessLevel(CustomizationAccessLevel $accessLevel): CrmCustomField
    {
        $this->accessLevel = $accessLevel;
        return $this;
    }

    /**
     * @return CustomizationAccessLevel
     */
    public function getAccessLevel(): CustomizationAccessLevel
    {
        return $this->accessLevel;
    }

    /**
     * @param CustomizationSearchLevel $searchLevel
     * @return CrmCustomField
     */
    public function setSearchLevel(CustomizationSearchLevel $searchLevel): CrmCustomField
    {
        $this->searchLevel = $searchLevel;
        return $this;
    }

    /**
     * @return CustomizationSearchLevel
     */
    public function getSearchLevel(): CustomizationSearchLevel
    {
        return $this->searchLevel;
    }

    /**
     * @param CustomFieldRoleAccessList $roleAccessList
     * @return CrmCustomField
     */
    public function setRoleAccessList(CustomFieldRoleAccessList $roleAccessList): CrmCustomField
    {
        $this->roleAccessList = $roleAccessList;
        return $this;
    }

    /**
     * @return CustomFieldRoleAccessList
     */
    public function getRoleAccessList(): CustomFieldRoleAccessList
    {
        return $this->roleAccessList;
    }

    /**
     * @param CustomFieldDepartmentAccessList $deptAccessList
     * @return CrmCustomField
     */
    public function setDeptAccessList(CustomFieldDepartmentAccessList $deptAccessList): CrmCustomField
    {
        $this->deptAccessList = $deptAccessList;
        return $this;
    }

    /**
     * @return CustomFieldDepartmentAccessList
     */
    public function getDeptAccessList(): CustomFieldDepartmentAccessList
    {
        return $this->deptAccessList;
    }

    /**
     * @param CustomFieldSubAccessList $subAccessList
     * @return CrmCustomField
     */
    public function setSubAccessList(CustomFieldSubAccessList $subAccessList): CrmCustomField
    {
        $this->subAccessList = $subAccessList;
        return $this;
    }

    /**
     * @return CustomFieldSubAccessList
     */
    public function getSubAccessList(): CustomFieldSubAccessList
    {
        return $this->subAccessList;
    }

    /**
     * @param CustomFieldTranslationsList $translationsList
     * @return CrmCustomField
     */
    public function setTranslationsList(CustomFieldTranslationsList $translationsList): CrmCustomField
    {
        $this->translationsList = $translationsList;
        return $this;
    }

    /**
     * @return CustomFieldTranslationsList
     */
    public function getTranslationsList(): CustomFieldTranslationsList
    {
        return $this->translationsList;
    }

    /**
     * @param string $internalId
     * @return CrmCustomField
     */
    public function setInternalId(string $internalId): CrmCustomField
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
