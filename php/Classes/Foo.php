<?php

class Author {

	use ValidateDate;
	use ValidateUuid;
	/**
	 * id for this Author; this is the primary key
	 * @var Uuid $authorId
	 **/
	private $authorId;
	/**
	 * url for the author's avatar photo; this is a string
	 * @var $authorAvatarUrl
	 **/
	private $authorAvatarUrl;
	/**
	 * temporary password sent to author's email for validation; this is a string
	 * @var $authorActivationToken
	 **/
	private $authorActivationToken;
	/**
	 * author's email; this is a string with a special character
	 * @var $authorEmail
	 **/
	private $authorEmail;
	/**
	 * returns hashed characters for author's password; this is a string
	 * @var $authorHash
	 **/
	private $authorHash;
	/**
	 * author's username; this is a string
	 * @var $authorUsername
	 **/
	private $authorUsername;

	/**
	 * @param string|Uuid $authorId id of this Author
	 * @param string $authorAvatarUrl url for the author's avatar photo
	 * @param string $authorActivationToken temporary password sent to author's email for validation
	 * @param string $authorEmail author's email
	 * @param string $authorHash returns hashed characters for author's password
	 * @param string $authorUsername author's username
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g. strings too long, negative integers, etc)
	 * @throws \TypeError if data type violate type hints
	 * @throws \Exception if some other exception occurs
	 **/
//	public function __construct($authorId, string $authorAvatarUrl, $authorActivationToken, string $authorEmail, $authorHash, string $authorUsername) {
//		try {
//			$this->setAuthorId($authorId);
//		}
//	}

	private function setAuthorId($authorId) {
		$this->authorId = $authorId;
	}

	private function getAuthorId() {
		return $this->authorId;
	}


	private function setAuthorAvatarUrl($authorAvatarURL) {
		$this->authorAvatarUrl = $authorAvatarURL;
	}

	private function getAuthorAvatarUrl() {
		return $this->authorAvatarUrl;
	}


	private function setAuthorActivationToken($authorActivationToken) {
		$this->authorActivationToken = $authorActivationToken;
	}

	private function getAuthorActivationToken() {
		return $this->authorActivationToken;
	}


	private function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;
	}

	private function getAuthorEmail() {
		return $this->authorEmail;
	}


	private function setAuthorHash($authorHash) {
		$this->authorHash = $authorHash;
	}

	private function getAuthorHash() {
		return $this->authorHash;
	}


	private function setAuthorUsername($authorUsername) {
		$this->authorUsername = $authorUsername;
	}

	private function getAuthorUsername() {
		return $this->authorUsername;
	}
}

