<?php
/**
 * @copyright	Copyright 2006-2013, Miles Johnson - http://milesj.me
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under the MIT License
 * @link		http://milesj.me/code/php/transit
 */

namespace mjohnson\transit\transformers;

/**
 * Scale the image based on a percentage.
 *
 * @package	mjohnson.transit.transformers
 */
class ScaleTransformer extends TransformerAbstract {

	/**
	 * Configuration.
	 *
	 * @access protected
	 * @var array
	 */
	protected $_config = array(
		'percent' => .5,
		'quality' => 100,
		'overwrite' => false
	);

	/**
	 * Calculate the transformation options and process.
	 *
	 * @access public
	 * @return string
	 */
	public function transform() {
		$config = $this->_config;
		$width = round($this->_width * $config['percent']);
		$height = round($this->_height * $config['percent']);

		return $this->process(array(
			'dest_w'	=> $width,
			'dest_h'	=> $height,
			'quality'	=> $config['quality'],
			'overwrite'	=> $config['overwrite']
		));
	}

}