<?php
/**
 * @copyright	Copyright 2006-2013, Miles Johnson - http://milesj.me
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under the MIT License
 * @link		http://milesj.me/code/php/transit
 */

namespace Transit\Transformer;

use Transit\File;

/**
 * Interface for all transformers to implement.
 */
interface Transformer {

	/**
	 * Transform a file by running filters and returning a new File object.
	 *
	 * @access public
	 * @param \Transit\File $file
	 * @param boolean $self
	 * @return \Transit\File
	 */
	public function transform(File $file, $self = false);

}