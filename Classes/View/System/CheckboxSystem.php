<?php
namespace TYPO3\CMS\Vidi\View\System;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Vidi\Domain\Model\Content;
use TYPO3\CMS\Vidi\View\AbstractComponentView;

/**
 * View for rendering a checkbox.
 * @todo remove me in version 0.6 + 2 versions
 */
class CheckboxSystem extends AbstractComponentView {

	/**
	 * Returns a checkbox for the grids.
	 *
	 * @param Content $object
	 * @param  int $offset
	 * @return string
	 */
	public function render(Content $object = NULL, $offset = 0) {
		return '';
	}
}
