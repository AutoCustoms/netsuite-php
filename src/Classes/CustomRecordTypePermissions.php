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

class CustomRecordTypePermissions {
    /**
     * @var RecordRef
     */
    protected RecordRef $permittedRole;

    /**
     * @var CustomRecordTypePermissionsPermittedLevel
     */
    protected CustomRecordTypePermissionsPermittedLevel $permittedLevel;

    /**
     * @var CustomRecordTypePermissionsRestriction
     */
    protected CustomRecordTypePermissionsRestriction $restriction;

    /**
     * @var RecordRef
     */
    protected RecordRef $defaultForm;

    /**
     * @var bool
     */
    protected bool $restrictForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchForm;

    /**
     * @var RecordRef
     */
    protected RecordRef $searchResults;

    /**
     * @var RecordRef
     */
    protected RecordRef $listView;

    /**
     * @var bool
     */
    protected bool $listViewRestricted;

    /**
     * @var RecordRef
     */
    protected RecordRef $dashboardView;

    /**
     * @var bool
     */
    protected bool $restrictDashboardView;

    /**
     * @var RecordRef
     */
    protected RecordRef $sublistView;

    /**
     * @var bool
     */
    protected bool $restrictSublistView;

    static $paramtypesmap = array(
        "permittedRole" => "RecordRef",
        "permittedLevel" => "CustomRecordTypePermissionsPermittedLevel",
        "restriction" => "CustomRecordTypePermissionsRestriction",
        "defaultForm" => "RecordRef",
        "restrictForm" => "boolean",
        "searchForm" => "RecordRef",
        "searchResults" => "RecordRef",
        "listView" => "RecordRef",
        "listViewRestricted" => "boolean",
        "dashboardView" => "RecordRef",
        "restrictDashboardView" => "boolean",
        "sublistView" => "RecordRef",
        "restrictSublistView" => "boolean",
    );

    /**
     * @param RecordRef $permittedRole
     * @return CustomRecordTypePermissions
     */
    public function setPermittedRole(RecordRef $permittedRole): CustomRecordTypePermissions
    {
        $this->permittedRole = $permittedRole;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getPermittedRole(): RecordRef
    {
        return $this->permittedRole;
    }

    /**
     * @param CustomRecordTypePermissionsPermittedLevel $permittedLevel
     * @return CustomRecordTypePermissions
     */
    public function setPermittedLevel(CustomRecordTypePermissionsPermittedLevel $permittedLevel): CustomRecordTypePermissions
    {
        $this->permittedLevel = $permittedLevel;
        return $this;
    }

    /**
     * @return CustomRecordTypePermissionsPermittedLevel
     */
    public function getPermittedLevel(): CustomRecordTypePermissionsPermittedLevel
    {
        return $this->permittedLevel;
    }

    /**
     * @param CustomRecordTypePermissionsRestriction $restriction
     * @return CustomRecordTypePermissions
     */
    public function setRestriction(CustomRecordTypePermissionsRestriction $restriction): CustomRecordTypePermissions
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * @return CustomRecordTypePermissionsRestriction
     */
    public function getRestriction(): CustomRecordTypePermissionsRestriction
    {
        return $this->restriction;
    }

    /**
     * @param RecordRef $defaultForm
     * @return CustomRecordTypePermissions
     */
    public function setDefaultForm(RecordRef $defaultForm): CustomRecordTypePermissions
    {
        $this->defaultForm = $defaultForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDefaultForm(): RecordRef
    {
        return $this->defaultForm;
    }

    /**
     * @param bool $restrictForm
     * @return CustomRecordTypePermissions
     */
    public function setRestrictForm(bool $restrictForm): CustomRecordTypePermissions
    {
        $this->restrictForm = $restrictForm;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictForm(): bool
    {
        return $this->restrictForm;
    }

    /**
     * @param RecordRef $searchForm
     * @return CustomRecordTypePermissions
     */
    public function setSearchForm(RecordRef $searchForm): CustomRecordTypePermissions
    {
        $this->searchForm = $searchForm;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchForm(): RecordRef
    {
        return $this->searchForm;
    }

    /**
     * @param RecordRef $searchResults
     * @return CustomRecordTypePermissions
     */
    public function setSearchResults(RecordRef $searchResults): CustomRecordTypePermissions
    {
        $this->searchResults = $searchResults;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSearchResults(): RecordRef
    {
        return $this->searchResults;
    }

    /**
     * @param RecordRef $listView
     * @return CustomRecordTypePermissions
     */
    public function setListView(RecordRef $listView): CustomRecordTypePermissions
    {
        $this->listView = $listView;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getListView(): RecordRef
    {
        return $this->listView;
    }

    /**
     * @param bool $listViewRestricted
     * @return CustomRecordTypePermissions
     */
    public function setListViewRestricted(bool $listViewRestricted): CustomRecordTypePermissions
    {
        $this->listViewRestricted = $listViewRestricted;
        return $this;
    }

    /**
     * @return bool
     */
    public function getListViewRestricted(): bool
    {
        return $this->listViewRestricted;
    }

    /**
     * @param RecordRef $dashboardView
     * @return CustomRecordTypePermissions
     */
    public function setDashboardView(RecordRef $dashboardView): CustomRecordTypePermissions
    {
        $this->dashboardView = $dashboardView;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDashboardView(): RecordRef
    {
        return $this->dashboardView;
    }

    /**
     * @param bool $restrictDashboardView
     * @return CustomRecordTypePermissions
     */
    public function setRestrictDashboardView(bool $restrictDashboardView): CustomRecordTypePermissions
    {
        $this->restrictDashboardView = $restrictDashboardView;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictDashboardView(): bool
    {
        return $this->restrictDashboardView;
    }

    /**
     * @param RecordRef $sublistView
     * @return CustomRecordTypePermissions
     */
    public function setSublistView(RecordRef $sublistView): CustomRecordTypePermissions
    {
        $this->sublistView = $sublistView;
        return $this;
    }

    /**
     * @return RecordRef
     */
    public function getSublistView(): RecordRef
    {
        return $this->sublistView;
    }

    /**
     * @param bool $restrictSublistView
     * @return CustomRecordTypePermissions
     */
    public function setRestrictSublistView(bool $restrictSublistView): CustomRecordTypePermissions
    {
        $this->restrictSublistView = $restrictSublistView;
        return $this;
    }

    /**
     * @return bool
     */
    public function getRestrictSublistView(): bool
    {
        return $this->restrictSublistView;
    }

}
