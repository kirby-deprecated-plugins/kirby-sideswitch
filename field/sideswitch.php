<?php
// Rename "boiler" folder and "boiler.php" file to your field name
// Rename "Boiler" on line 6 to your field name
// Rename "boiler" on line 7 to your field name

class SideswitchField extends BaseField {
	static public $fieldname = 'sideswitch';
	static public $assets = array(
		'js' => array(
			'script.js',
		),
		'css' => array(
			'style.css',
		)
	);

	public function input() {
		// Load template with arguments
		$html = tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'field' => $this,
			'page' => $this->page()
		));
		return $html;
	}

	// Connecting PHP to Javascript - https://forum.getkirby.com/t/panel-field-javascript-click-does-not-work-after-save/3474/7
	public function element() {
		$element = parent::element();
		$element->data('field', self::$fieldname);
		return $element;
	}
}