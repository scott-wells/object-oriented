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
	public function __construct($authorId, string $authorAvatarUrl, $authorActivationToken, string $authorEmail, $authorHash, string $authorUsername) {
		try {
			$this->setAuthorId($authorId);
			$this->setAuthorAvatarUrl($authorAvatarUrl);
			$this->setAuthorActivationToken($authorActivationToken);
			$this->setAuthorEmail($authorEmail);
			$this->setAuthorHash($authorHash);
			$this->setAuthorUsername($authorUsername);
		}
			//determine what exception type was thrown
		catch(\InvalidArgumentException || \RangeException || \TypeError || \Exception $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}



	/**
	 * mutator method author id
	 *
	 * @param string|Uuid $authorId id of this Author
	 * @throws \RangeException if $authorId is not positive
	 * @throws \TypeError if $authorId is not a uuid or string
	 **/
	private function setAuthorId(string $authorId) : void {
		try {
			$uuid = self::validateUuid($authorId);
		} catch(\InvalidArgumentException || \RangeException || \TypeError || \Exception $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
		// convert and store the author id
		$this->authorId = $uuid;
	}

	/**
	 * accessor method for author id
	 *
	 * @return Uuid value of author id
	 **/
	private function getAuthorId() : Uuid {
		return $this->authorId;
	}



	/**
	 * mutator method author avatar url
	 *
	 * @param string $authorAvatarURL
	 * @throws \InvalidArgumentException if $authorAvatarUrl is not a string or insecure
	 * @throws \TypeError if $authorAvatarUrl is not a string
	 **/
	private function setAuthorAvatarUrl(string $authorAvatarURL) : void {
		// verify the url is secure
		$authorAvatarURL = trim($authorAvatarURL);
		$authorAvatarURL = filter_var($authorAvatarURL, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($authorAvatarURL) === true) {
			throw(new \InvalidArgumentException("url is empty or insecure"));
		}

		// store the url
		$this->authorAvatarUrl = $authorAvatarURL;
	}

	/**
	 * accessor method for author url
	 *
	 * @return string value of author url
	 **/
	private function getAuthorAvatarUrl() {
		return $this->authorAvatarUrl;
	}



	/**
	 * mutator method for activation token
	 *
	 * @param $authorActivationToken
	 * @throws \InvalidArgumentException if $authorActivationToken is not a string or insecure
	 * @throws \TypeError if $authorActivationToken is not a string
	 **/
	private function setAuthorActivationToken(string  $authorActivationToken) : void {
		//verify the token is secure
		$authorActivationToken = trim($authorActivationToken);
		$authorActivationToken = filter_var($authorActivationToken, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($authorActivationToken) === true) {
			throw(new \InvalidArgumentException("token is empty or insecure"));
		}

		//store the activation token
		$this->authorActivationToken = $authorActivationToken;
	}

	/**
	 * accessor method for author id
	 *
	 * @return string value of author activation token
	 **/
	private function getAuthorActivationToken() {
		return $this->authorActivationToken;
	}


	/**
	 * mutator for author email
	 *
	 * @param $authorEmail
	 **/
	private function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;
	}

	/**
	 * accessor method for author id
	 *
	 * @return string value of author email
	 **/
	private function getAuthorEmail() {
		return $this->authorEmail;
	}


	private function setAuthorHash($authorHash) {
		$this->authorHash = $authorHash;
	}

	/**
	 * accessor method for author id
	 *
	 * @return string value of author hashed password
	 **/
	private function getAuthorHash() {
		return $this->authorHash;
	}


	private function setAuthorUsername($authorUsername) {
		$this->authorUsername = $authorUsername;
	}

	/**
	 * accessor method for author id
	 *
	 * @return string value of author username
	 **/
	private function getAuthorUsername() {
		return $this->authorUsername;
	}
}

