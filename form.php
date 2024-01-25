<?php 
    $data = array();
    $email = $_POST['email'];

    include('email.php');
    include('config.php');

    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail cli';
    $mail->addAddress($email); 
    
    if($mail->send()){
        $result = mysqli_query($conect, "INSERT INTO emails(email) VALUE('$email')");
        $data['su'] = true;
        die(json_encode($data));
    }else{
        $data['fal'] = true;
    }
   
    die(json_encode($data));

?>