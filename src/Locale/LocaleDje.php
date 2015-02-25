<?php namespace Fisharebest\Localization;

/**
 * Class LocaleDje - Zarma
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleDje extends Locale {
	/** {@inheritdoc} */
	public function endonym() {
		return 'Zarmaciine';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'ZARMACIINE';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageDje;
	}

	/** {@inheritdoc} */
	public function numberSymbols() {
		return array(
			self::GROUP => self::NBSP,
		);
	}
}
