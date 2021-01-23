<?php

interface iPillage {
    function emptyBankAccount() ; 
    function burnDocuments(); 
} 

class Executive extends Employee implements iPillage
 {
    private $totalStockOptions;
    function emptyBankAccount() {
        echo "Call CFO to ttransfer fundsto swiss Bank";
    }
    function burnDocuments() {
        echo "torch the office !!!";
    }  
 }

 class Assistant extends Employee implements iPillage
{
    function takeMemo() {
        echo "Taking memo...";
    }
    function emptyBankAccount()
    {
     echo "Go on shopping";
    }
    function burnDocuments() {
        echo "Start small fire in the trash can";
    } 

}
        ?>
