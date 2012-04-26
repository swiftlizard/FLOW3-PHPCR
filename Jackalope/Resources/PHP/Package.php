<?php
namespace Jackalope;

use TYPO3\FLOW3\Package\Package as BasePackage;

/**
 * FLOW3 Package Bootstrap for the Jackalope package
 */
class Package extends BasePackage {

	/**
	 * @var boolean
	 */
	protected $protected = TRUE;

	/**
	 * Disable object management for this package.
	 * @var boolean
	 */
	protected $objectManagementEnabled = FALSE;

}

?>
