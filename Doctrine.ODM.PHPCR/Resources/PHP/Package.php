<?php
namespace Doctrine\ODM\PHPCR;

use TYPO3\FLOW3\Package\Package as BasePackage;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
* FLOW3 Package Bootstrap for the Doctrine ODM PHPCR  package
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

	/**
	 * @param \TYPO3\FLOW3\Core\Bootstrap $bootstrap
	 */
	public function boot(\TYPO3\FLOW3\Core\Bootstrap $bootstrap){
		AnnotationRegistry::registerFile(
			$this->packagePath.'Classes/Mapping/Annotations/DoctrineAnnotations.php'
		);
	}

}

?>
