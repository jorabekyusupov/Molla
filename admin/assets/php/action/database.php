<?
    class DB {
        public $__connect;
        public function __construct()
        {
            $this->__connect = new mysqli('s29oj5odr85rij2o.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'reussjwwoklyujz4', 'j66i01l0m6cb4ybj', 'bj360w17jfok253q');
        }
        function getConnect()
        {
            if (!$this->__connect -> connect_error) {
                return $this->__connect;
            }
            else {
            echo "Connection Error".$this->__connect->connect_error; 
            }
        }




    }




?>