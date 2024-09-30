<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Validation basique des données
    if (!empty($nom) && !empty($email) && !empty($telephone) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        // Adresse email où vous souhaitez recevoir les informations
        $to = "universgroup2014.com"; // Remplacez par votre adresse email
        $subject = "Nouvelle inscription à la newsletter";

        // Corps de l'email
        $message = "Nouvelle inscription à la newsletter:\n\n";
        $message .= "Nom: $nom\n";
        $message .= "Email: $email\n";
        $message .= "Téléphone: $telephone\n";

        // En-têtes de l'email
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // Envoyer l'email
        if (mail($to, $subject, $message, $headers)) {
            echo "Inscription réussie ! Merci de vous être inscrit.";
        } else {
            echo "Erreur lors de l'envoi de l'inscription.";
        }
    } else {
        echo "Veuillez remplir correctement tous les champs.";
    }
}
?>
