<?php
require_once('C:\xampp\htdocs\projet web\view\back\fpdf.php');
require_once('C:\xampp\htdocs\projet web\config.php');

class ReservationPDF extends FPDF
{
    function Header()
    {
        // En-tête personnalisé
        $this->SetFillColor(255, 165, 0); // Couleur de fond
        $this->SetTextColor(255); // Couleur du texte
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(70,10,'Liste des reservations',2,0,'C', true);
        $this->Ln(20);

        // Connexion à la base de données
        $pdo = config::getConnexion();
        if (!$pdo) {
            die('Erreur de connexion à la base de données');
        }

        // Récupération des données
        $query = "SELECT nom, email, date FROM reservation";
        $result = $pdo->query($query);
        if (!$result) {
            die('Erreur lors de la récupération des données');
        }

        // Affichage des données
        $header = array('Nom', 'Email', 'Date');
        $this->SetFillColor(176, 224, 230); // Couleur de fond
        $this->SetTextColor(0); // Couleur du texte
        $this->SetFont('Arial', 'B', 12);
        foreach($header as $col) {
            $this->Cell(40, 7, $col, 1, 0, 'C', true);
        }
        $this->Ln();
        $this->SetFont('Arial', '', 12);
        while ($row = $result->fetch()) {
            $this->Cell(40, 7, $row['nom'], 1);
            $this->Cell(60, 7, $row['email'], 1);
            $this->Cell(40, 7, $row['date'], 1);
            $this->Ln();
        }
    }

    function Footer()
    {
        // Pied de page personnalisé
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

// Instanciation de la classe et génération du PDF
$pdf = new ReservationPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Output();
?>

