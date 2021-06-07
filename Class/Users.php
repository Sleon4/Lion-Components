<?php

class Users {

	public function __construct(
		private string $users_name, 
		private string $users_last_name, 
		private int $users_age
	) {}

    public function getUsersName() {
        return $this->users_name;
    }

    public function setUsersName($users_name) {
        $this->users_name = $users_name;
        return $this;
    }

    public function getUsersLastName() {
        return $this->users_last_name;
    }

    public function setUsersLastName($users_last_name) {
        $this->users_last_name = $users_last_name;
        return $this;
    }

    public function getUsersAge() {
        return $this->users_age;
    }

    public function setUsersAge($users_age) {
        $this->users_age = $users_age;
        return $this;
    }

}