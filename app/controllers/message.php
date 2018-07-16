<?php
    require_once('phpmailer/PHPMailer.php');

    // Inicia a classe PHPMailer
    var_dump($mail);die();
    $mail = new PHPMailer();
    // Define os dados do servidor e tipo de conexão
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.dominio.net"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
    $mail->Username = 'cristolandiaportoseguro@gmail.com'; // Usuário do servidor SMTP
    $mail->Password = 'cfcPS2018'; // Senha do servidor SMTP
    // Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    }

    $mail->From = $email; // Seu e-mail
    $mail->FromName = $name; // Seu nome
    // Define os destinatário(s)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('cristolandiaportoseguro@gmail.com', 'CFCPS');
    //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
    //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
    // Define os dados técnicos da Mensagem
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    //$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
    // Define a mensagem (Texto e Assunto)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
        $assunto = $_POST['assunto'];
    }
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $message = $_POST['message'];
    }

    $mail->Subject  = $assunto; // Assunto da mensagem
    $mail->Body = $message;
    // Define os anexos (opcional)
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail
    $enviado = $mail->Send();
    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultado
    if ($enviado) {
      echo "E-mail enviado com sucesso!";
      header('Location: ../views/index.php');
    } else {
      echo "Não foi possível enviar o e-mail.";
      echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
    }




















    // if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
    //     $assunto = $_POST['assunto'];
    // }
    // if (isset($_POST['message']) && !empty($_POST['message'])) {
    //     $message = $_POST['message'];
    // }
    // if (isset($_POST['name']) && !empty($_POST['name'])) {
    //     $name = $_POST['name'];
    // }
    // if (isset($_POST['email']) && !empty($_POST['email'])) {
    //     $email = $_POST['email'];
    // }
    // $mail = new PHPMailer;
    // var_dump($mail); die();
    //
    // $mail->isSMTP();
    // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = 'tls';
    // $mail->Username = 'cristolandiaportoseguro@gmail.com';
    // $mail->Password = 'cfcPS2018';
    // $mail->Port = 587;
    //
    // $mail->setFrom('cristolandiaportoseguro@gmail.com', 'CFCPSBA');
    // $mail->addAddress($email);
    //
    // $mail->isHTML(true);
    //
    // $mail->Subject = $assunto;
    // $mail->Body    = nl2br($message);
    // $mail->AltBody = nl2br(strip_tags($message));
    //
    // if(!$mail->send()) {
    //     echo 'Não foi possível enviar a mensagem.<br>';
    //     echo 'Erro: ' . $mail->ErrorInfo;
    // } else {
    //     header('Location: ../views/index.php');
    // }

?>
