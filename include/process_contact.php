<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // chemin vers autoload.php de Composer

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupérer les données et nettoyer
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validation simple
    if (!$name || !$email || !$message) {
        echo json_encode([
            'success' => false,
            'message' => 'Tous les champs sont requis.'
        ]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            'success' => false,
            'message' => 'Adresse email invalide.'
        ]);
        exit;
    }

    // Configurer PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';          // ou ton serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'ndongovalin@gmail.com';  // ton email
        $mail->Password = 'tqwz ackw meuz kwdv'; // mot de passe ou mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataires
        $mail->setFrom($email, $name);
        $mail->addAddress('ndongovalin@gmail.com', 'AlexValinndongo');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message depuis le formulaire de contact';
        $mail->Body    = "<strong>Nom:</strong> {$name}<br>
                          <strong>Email:</strong> {$email}<br>
                          <strong>Message:</strong><br>{$message}";

        $mail->send();

        echo json_encode([
            'success' => true,
            'message' => 'Votre message a été envoyé avec succès !'
        ]);
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => "Erreur lors de l'envoi du message : {$mail->ErrorInfo}"
        ]);
    }

} else {
    echo json_encode([
        'success' => false,
        'message' => 'Méthode non autorisée.'
    ]);
}
?>
