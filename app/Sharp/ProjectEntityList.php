<?php

namespace App\Sharp;

use App\Models\Project;
use Code16\Sharp\EntityList\Containers\EntityListDataContainer;
use Code16\Sharp\EntityList\EntityListQueryParams;
use Code16\Sharp\EntityList\SharpEntityList;

class ProjectEntityList extends SharpEntityList
{
    /**
    * Build list containers using ->addDataContainer()
    *
    * @return void
    */
    public function buildListDataContainers()
    {
        $this->addDataContainer(
            EntityListDataContainer::make('name')
                ->setLabel('Name')
                ->setSortable()
                ->setHtml()
        );
    }

    /**
    * Build list layout using ->addColumn()
    *
    * @return void
    */

    public function buildListLayout()
    {
        $this->addColumn('name', 12);
    }

    /**
    * Build list config
    *
    * @return void
    */
    public function buildListConfig()
    {
        $this->setInstanceIdAttribute('id')
            ->setSearchable()
            ->setDefaultSort('name', 'asc')
            ->setPaginated();
    }

    /**
    * Retrieve all rows data as array.
    *
    * @param EntityListQueryParams $params
    * @return array
    */
    public function getListData(EntityListQueryParams $params)
    {
        return $this->transform(Project::all());
    }
}
