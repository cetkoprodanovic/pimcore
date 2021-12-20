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

namespace Pimcore\Model\Asset\Image\Thumbnail\Config\Listing;

use Pimcore\Model\Asset\Image\Thumbnail\Config;

/**
 * @internal
 *
 * @property \Pimcore\Model\Asset\Image\Thumbnail\Config\Listing $model
 */
class Dao extends Config\Dao
{
    /**
     * @return array
     */
    public function loadList()
    {
        $configs = [];

        foreach ($this->loadIdList() as $name) {
            $configs[] = Config::getByName($name);
        }

        $this->model->setThumbnails($configs);

        return $configs;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return count($this->loadIdList());
    }
}