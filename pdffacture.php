<?php
require_once('fpdf.php');
require_once('C:\xampp\htdocs\projet web\config.php');

class FacturePDF extends FPDF
{
    function Header()
    {
        // En-tête personnalisé
        $this->SetFillColor(255, 165, 0); // Couleur de fond
        $this->SetTextColor(255); // Couleur du texte
        $this->SetFont('Arial','B',15);
        $this->Cell(80);
        $this->Cell(70,10,'Liste des factures',2,0,'C', true);
        $this->Ln(20);

        // Connexion à la base de données
        $pdo = config::getConnexion();
        if (!$pdo) {
            die('Erreur de connexion à la base de données');
        }

        // Récupération des données
        $query = "SELECT email, numero FROM facture";
        $result = $pdo->query($query);
        if (!$result) {
            die('Erreur lors de la récupération des données');
        }

        // Affichage des données
        $header = array('email', 'numero');
        $this->SetFillColor(176, 224, 230); // Couleur de fond
        $this->SetTextColor(0); // Couleur du texte
        $this->SetFont('Arial', 'B', 12);
        foreach($header as $col) {
            $this->Cell(40, 7, $col, 1, 0, 'C', true);
        }
        $this->Ln();
        $this->SetFont('Arial', '', 12);
        while ($row = $result->fetch()) {
            $this->Cell(60, 7, $row['email'], 1);
            $this->Cell(40, 7, $row['numero'], 1);
           
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
$pdf = new FacturePDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Output();
?>
