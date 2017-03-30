<?php 

require 'model/contact.php';

if (isRequestPost()) {

    if (isFormValid()) {
        
        $message = createMessage(requestPost('username'), requestPost('email'), requestPost('message'));
        saveMessage($message);
        
        setFlash('Your message was sent');
        redirect("/index.php?page=contact");
    } 
    
    setFlash('Fill the fields');
}

$messages = findAllMessages();


?>