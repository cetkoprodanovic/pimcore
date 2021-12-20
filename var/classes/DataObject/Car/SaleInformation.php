<?php

namespace Pimcore\Model\DataObject\Car;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class SaleInformation extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['SaleInformation'];


protected $SaleInformation = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation|null
*/
public function getSaleInformation()
{
	if(!$this->SaleInformation && \Pimcore\Model\DataObject::doGetInheritedValues($this->getObject())) { 
		try {
			$brickContainer = $this->getObject()->getValueFromParent("saleInformation");
			if(!empty($brickContainer)) {
				//check if parent object has brick, and if so, create an empty brick to enable inheritance
				$parentBrick = $this->getObject()->getValueFromParent("saleInformation")->getSaleInformation();
				if (!empty($parentBrick)) {
					$brickType = "\\Pimcore\\Model\\DataObject\\Objectbrick\\Data\\" . ucfirst($parentBrick->getType());
					$brick = new $brickType($this->getObject());
					$brick->setFieldname("saleInformation");
					$this->setSaleInformation($brick);
					return $brick;
				}
			}
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	return $this->SaleInformation;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\SaleInformation $SaleInformation
* @return \Pimcore\Model\DataObject\Car\SaleInformation
*/
public function setSaleInformation($SaleInformation)
{
	$this->SaleInformation = $SaleInformation;
	return $this;
}

}

