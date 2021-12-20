<?php

namespace Pimcore\Model\DataObject\OnlineShopVoucherToken;

use Pimcore\Model\DataObject;

/**
 * @method DataObject\OnlineShopVoucherToken|false current()
 * @method DataObject\OnlineShopVoucherToken[] load()
 * @method DataObject\OnlineShopVoucherToken[] getData()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "EF_OSVT";
protected $className = "OnlineShopVoucherToken";


/**
* Filter by tokenId (Token ID)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByTokenId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("tokenId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by token (Token)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByToken ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("token")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by voucherSeries (Voucher Series)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByVoucherSeries ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("voucherSeries")->addListingFilter($this, $data, $operator);
	return $this;
}



}
