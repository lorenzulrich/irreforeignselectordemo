<?php
namespace Visol\Irreforeignselectordemo\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Lorenz Ulrich <lorenz.ulrich@visol.ch>, visol digitale Dienstleistungen GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * CityRelation
 */
class CityRelation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Address
	 *
	 * @var \Visol\Irreforeignselectordemo\Domain\Model\Address
	 */
	protected $address;

	/**
	 * City
	 *
	 * @var \Visol\Irreforeignselectordemo\Domain\Model\City
	 */
	protected $city;

	/**
	 * @return \Visol\Irreforeignselectordemo\Domain\Model\Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @param \Visol\Irreforeignselectordemo\Domain\Model\Address $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * @return \Visol\Irreforeignselectordemo\Domain\Model\City
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param \Visol\Irreforeignselectordemo\Domain\Model\City $city
	 */
	public function setCity($city) {
		$this->city = $city;
	}

}