<?php namespace wcf\acp\page;

use wcf\page\SortablePage;

class BranchListPage extends SortablePage
{
    public $activeMenuItem = 'wcf.acp.menu.link.clan.branch.list';

    public $defaultSortField = 'displayOrder';

    public $neededPermissions = ['admin.clan.branch.canManageBranches'];

    public $objectListClassName = 'wcf\data\branch\BranchList';

    public $templateName = 'branchList';

    public $validSortFields = ['branchID', 'displayOrder', 'name'];

    public function assignVariables()
    {
        parent::assignVariables(); // TODO: Change the autogenerated stub
    }

    public function getActiveMenuItem()
    {
        return $this->activeMenuItem;
    }
}