<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
    public $n;
    public $y;
    public $s;
		
    public function __construct($name, $role, $country) {
      $this->name   = $name;
      $this->role   = $role;
      $this->country = $country;
    }
    public function getOldName() {
      return parent::getName();
    }
		
    public function updateName($newName) {
      echo "<!-- Setting name to " . $newName . "-->";
      $this->name = $newName;
    }
		
		 public function getOldrole() {
      return parent::getrole();
    }
		
		public function updaterole($newrole) {
      echo $this->getName() . " passed another role. he is now a " . $newrole();
      $this->role = $newrole;
    }
		
		 public function getOldcountry() {
      return parent::getcountry();
    }
		
		public function updatecountry($newcountry) {
      echo "<!-- Setting country to " . $newcountry . "-->";
      $this->country = $newcountry;
    }
		
		public function __toString(){
			return $this->getName() . " is a " . $this->getrole() . " who lives at " . $this->getcountry();
		}
		
	}
