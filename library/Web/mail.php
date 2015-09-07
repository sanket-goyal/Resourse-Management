<?php
class Web_Mail extends Zend_Mail {
    //To send the mail by using Zend Mail
    public function mail($hrMailId, $iteeMailId) {
        $mail = new Zend_Mail();
        $mail -> setBodyText('This is the text of the mail.')
              -> setFrom($hrMailId['email'], 'Sender HR');
        foreach ($iteeMailId as $iteeId) {
            $mail -> addTo($iteeId['email'], 'Some Recipient');
        }
        $mail -> setSubject('Appraisal Form') 
              -> send();
        $mail -> clearFrom();
    }

}
