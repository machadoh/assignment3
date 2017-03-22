<?php
	// This is the file for the parent class

	class ParentClass {
    private $n;
    private $y;
    private $s;
		
    public function __construct($n, $y, $s) {
      $this->name    = $n;
      $this->role    = $y;
      $this->country  = $s;
    }
		public function getName(){
			return $this->name;
		}
		
		public function setName($newname){
			$this->name = $newname;
		}
		
		public function getrole(){
			return $this->role;
		}
		
		public function setrole($newrole){
			$this->role = $newrole;
		}
		
		public function getcountry(){
			return $this->country;
		}
		
		public function setcountry($newcountry){
			$this->country = $newcountry;
		}
		
		public function __toString(){
			return $this->getName() . " is a " . $this->getrole() . " who lives atcountry " . $this.getcountry();
		}
	}
