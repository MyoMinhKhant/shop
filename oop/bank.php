<?php
        class Bank{
        	public $account_no;
        	public $name;
        	public $amount;
        	public $account_type=array();

        	function __construct($account_no,$name,$amount,$account_type){
        		$this->account_no=$account_no;
        		$this->name=$name;
        		$this->amount=$amount;
        		try{
                          if(is_array($account_type)){
        		$this->account_type=$account_type;
        	}else{
        		throw new Exception("Account Type must be Array");
        		
        	}


        	}
        	catch(Exception $e){
        		echo $e->getMessage();
        	}
}
        	function __destruct(){
        		echo "<br> This is destructor method of Bank Class";
        	}
        	function check_balance(){
        		echo "<br>Your Balance is $this->amount";
        	}
        	function make_deposite($amount){
        		$this->amount+=$amount;
        		$this->check_balance();
        	}

        	function make_withdraw($amount){
        		if($this->amount<$amount){
        			echo "Your available is not enough!";

        		}else{
        			$this->amount-=$amount;
        			$this->check_balance();
        		}
        	}

        	public static function showMessage(){
        		echo "<br> This is static method of Bank Class";
        	}
        } 

        $account1=new Bank("1001","Mg Mg",120000,array('sav','cur'));
        var_dump($account1);
/*        $account1->account_no="1001";
        $account1->name="U mYO";
        $account1->amount="120000";*/
        $account1->check_balance();
        $account1->make_deposite(50000);
        $account1->make_withdraw(5000000);
        $account1->make_withdraw(1000000);

?>