<?php

namespace Edu\Cnm\Friends;

class Friend {
	private $name;
	private $stubborness;
	public function __construct(string $newName, float $newStubborness) {
		$this->setName($newName);
		$this->setStubborness($newStubborness);
	}

	/**
	 * @return mixed
	 */
	public function getName() :string {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getStubborness() :float {
		return $this->stubborness;
	}

	/**
	 * @param mixed $name
	 */
	public function setName($newName) :string {
		$this->name = $newName;
	}

	/**
	 * @param mixed $stubborness
	 */
	public function setStubborness($newStubborness) :float {
		$this->stubborness = $newStubborness;
	}

	public function argue() :void {
		echo ("I AM RITE");
	}
}