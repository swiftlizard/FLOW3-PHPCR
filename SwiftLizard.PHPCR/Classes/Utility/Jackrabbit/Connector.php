<?php
namespace SwiftLizard\PHPCR\Utility\Jackrabbit;
/*                                                                          *
* This script belongs to the FLOW3 package "SwiftLizard.PHPCR".             *
*                                                                           *
* It is free software; you can redistribute it and/or modify it under       *
* the terms of the GNU General Public License, either version 3 of the      *
* License, or (at your option) any later version.                           *
*                                                                           *
* The TYPO3 project - inspiring people to share!                            *
*                                                                           */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * Utility Class to connect to Jackrabbit CR
 * @FLOW3\Scope("singleton")
 * @author chris zepernick <chris@swift-lizard.com>
 */
class Connector{

	/**
	 * @var array
	 */
	protected $settings = array();


	/**
	 * @var array<\Jackalope\SessionInterface>
	 */
	private $jackrabbitSession;

	/**
	 * @var \Jackalope\Repository
	 */
	private $repository;

	/**
	 * @var array<\PHPCR\SimpleCredentials>
	 */
	private $credentials;

	/**
	 * Injects the FLOW3 settings, only the persistence part is kept for further use
	 *
	 * @param array $settings
	 * @return void
	 */
	public function injectSettings(array $settings) {
		$this->settings = $settings['Jackrabbit'];
	}

	/**
	 * Helper for connecting to jackrabbit cr
	 * @param string $workspace, the name of the workspace to use
	 * @return \Jackalope\SessionInterface
	 */
	public function connectToJackrabbitServer($workspace = 'default'){

		if(!(isset($this->jackrabbitSession[$workspace]) && $this->jackrabbitSession[$workspace] instanceof \Jackalope\SessionInterface)){
			// init repository
			if(!$this->repository instanceof \Jackalope\Repository){
				$this->repository = \Jackalope\RepositoryFactoryJackrabbit::getRepository(
					array(
					     'jackalope.jackrabbit_uri' => $this->settings['host']
					)
				);
			}

			// init credentials for workspace
			if(! ( isset($this->credentials[$workspace]) && ($this->credentials[$workspace] instanceof \PHPCR\SimpleCredentials) ) ){
				$this->credentials[$workspace] = new \PHPCR\SimpleCredentials(
					$this->settings['workspaces'][$workspace]['user'],
					$this->settings['workspaces'][$workspace]['password']
				);
			}

			// login and get session
			$this->jackrabbitSession[$workspace] = $this->repository->login(
				$this->credentials[$workspace],
				$workspace
			);
		}

		return $this->jackrabbitSession[$workspace];
	}

	/**
	 * Helper to get an existing session dirctly
	 * returns false if no session is found otherwise \Jackalope\SessionInterface
	 *
	 * @param $workspace
	 * @return bool / \Jackalope\SessionInterface
	 */
	public function getJackrabbitSessionByWorkspace($workspace){
		if(isset($this->jackrabbitSession[$workspace]) && ($this->jackrabbitSession[$workspace] instanceof \Jackalope\SessionInterface)){
			return $this->jackrabbitSession[$workspace];
		}else{
			return false;
		}
	}

}
