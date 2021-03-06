<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\Metadata\Predefined\Listing;

use Pimcore\Model;

/**
 * @internal
 *
 * @property \Pimcore\Model\Metadata\Predefined\Listing $model
 */
class Dao extends Model\Metadata\Predefined\Dao
{
    /**
     * Loads a list of predefined metadata definitions for the specicified parameters, returns an array of
     * Metadata\Predefined elements
     *
     * @return \Pimcore\Model\Metadata\Predefined[]
     */
    public function loadList()
    {
        $properties = [];
        foreach ($this->loadIdList() as $id) {
            $properties[] = Model\Metadata\Predefined::getById($id);
        }

        $this->model->setDefinitions($properties);

        return $properties;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return count($this->loadList());
    }
}
