<?php

class Password{


    public $lines;

    public $decryptedLines = [];

    function __construct()
    {
        $this -> getLines();
        $this -> decrypt();
    }

    public function getLines(){
        $passwordFile = fopen("password.txt", "r") or die ("unable");
        $password = fread($passwordFile, filesize("password.txt"));
        $this -> lines = explode("\n", $password);
    }
    public function decrypt(){
        foreach($this -> lines as $line){

            $words = str_split($line, 1);
            $index = 1;
            $decryptedLine = "";
            foreach ($words as $word){
                switch($index){
                    case $index % 5 == 1 : 
                        $decryptedLine = $decryptedLine . chr(ord($word) -5) ;
                        break;
                    case $index % 5 == 2 : 
                        $decryptedLine = $decryptedLine . chr(ord($word) +14);
                        break;
                    case $index % 5 == 3 : 
                        $decryptedLine = $decryptedLine . chr(ord($word) -31);
                        break;
                    case $index % 5 == 4 : 
                        $decryptedLine = $decryptedLine . chr(ord($word) +9);
                        break;
                    case $index % 5 == 0 : 
                        $decryptedLine = $decryptedLine . chr(ord($word) -3);
                        break;
                }

                $index = $index + 1;
            }
            
            array_push($this -> decryptedLines, $decryptedLine);
        }
    }

    public function getPassword($userPass){
        foreach($this -> decryptedLines as $line){
            if($userPass == $line){
                return true;
            }
        }
        return false;
    }
}
?>