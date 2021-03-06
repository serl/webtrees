<?php namespace Fisharebest\Localization\Territory;

/**
 * Class AbstractTerritory - Representation of the territory KR - Republic of Korea.
 *
 * @author    Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license   GPLv3+
 */
class TerritoryKr extends AbstractTerritory implements TerritoryInterface {
	public function code() {
		return 'KR';
	}

	public function firstDay() {
		return 0;
	}
}
