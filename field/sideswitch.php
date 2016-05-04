<?php
class SideswitchField extends BaseField {
	static public $fieldname = 'sideswitch';
	static public $assets = array(
		'js' => array(
			'script.js',
		),
		'css' => array(
			'style.min.css',
		)
	);

	// Connecting PHP to Javascript
	public function element() {
		$element = parent::element();
		$element->data('field', self::$fieldname);
		return $element;
	}
}