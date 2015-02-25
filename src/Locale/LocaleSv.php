<?php namespace Fisharebest\Localization;

/**
 * Class LocaleSv - Swedish
 *
 * @author        Greg Roach <fisharebest@gmail.com>
 * @copyright (c) 2015 Greg Roach
 * @license       GPLv3+
 */
class LocaleSv extends Locale {
	/** {@inheritdoc} */
	public function collation() {
		return 'swedish_ci';
	}

	/** {@inheritdoc} */
	public function endonym() {
		return 'svenska';
	}

	/** {@inheritdoc} */
	protected function endonymSortable() {
		return 'SVENSKA';
	}

	/** {@inheritdoc} */
	public function language() {
		return new LanguageSv;
	}

	/** {@inheritdoc} */
	public function numberSymbols() {
		return array(
			self::GROUP    => self::NBSP,
			self::DECIMAL  => self::COMMA,
			self::NEGATIVE => self::MINUS_SIGN,
		);
	}

	/** {@inheritdoc} */
	protected function percentFormat() {
		return '%s' . self::NBSP . self::PERCENT;
	}
}
