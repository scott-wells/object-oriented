<?php

class Author {

	public $authorId;
	public $authorAvatarUrl;
	public $authorActivationToken;
	public $authorEmail;
	public $authorHash;
	public $authorUsername;



	public function setAuthorId($authorId) {
		$this->authorId = $authorId;
	}

	public function getAuthorId() {
		return $this->authorId;
	}


	public function setAuthorAvatarUrl($authorAvatarURL) {
		$this->authorAvatarUrl = $authorAvatarURL;
	}

	public function getAuthorAvatarUrl() {
		return $this->authorAvatarUrl;
	}


	public function setAuthorActivationToken($authorActivationToken) {
		$this->authorActivationToken = $authorActivationToken;
	}

	public function getAuthorActivationToken() {
		return $this->authorActivationToken;
	}


	public function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;
	}

	public function getAuthorEmail() {
		return $this->authorEmail;
	}


	public function setAuthorHash($authorHash) {
		$this->authorHash = $authorHash;
	}

	public function getAuthorHash() {
		return $this->authorHash;
	}


	public function setAuthorUsername($authorUsername) {
		$this->authorUsername = $authorUsername;
	}

	public function getAuthorUsername() {
		return $this->authorUsername;
	}
}