<?php 

$i = 0;
if( $nom = filter_input(INPUT_POST, 'prenom')){
	$nom = filter_input(INPUT_POST, 'prenom');
	$i++;
}

if( $prenom = filter_input(INPUT_POST, 'prenom')){
	$prenom = filter_input(INPUT_POST, 'prenom');
	$i++;
}
if($age = filter_input(INPUT_POST, 'age')){
	$age = filter_input(INPUT_POST, 'age');
	$i++;
}

if($service = filter_input(INPUT_POST, 'service')){
	$service = filter_input(INPUT_POST, 'service');
	$i++;
}

if($date = filter_input(INPUT_POST, 'date')){
	$date = filter_input(INPUT_POST, 'date');
	$i++;
}

require('fpdf.php');
class PDF extends FPDF {
	function Header() {
		$this->Cell(12);
	}

	function Footer() {
		$this->SetY(-15);
	}
}

setlocale(LC_TIME, 'fr_FR.utf8','fra');
date_default_timezone_set("Europe/Brussels");
$date = date('d/m/Y', time());
$pdf = new PDF();

define('EURO',chr(128));
$euro = EURO;

$commande = "idCommande";
$pdf->AliasNbPages("{pages}");
$pdf->AddPage();
$pdf->SetTitle(utf8_decode("Reservation N° : idCommande"));

// Cell(width, height, text, border, end line 0 : continue 1: new line, align : C / L / R);
$pdf->SetFont("Arial","B","15");
$pdf->Cell(120, 5,utf8_decode("Aérodrome d'Evreux"),0,0);
$pdf->Cell(69, 5, "Project X",0,1);

// "Ln" saut de ligne
$pdf->Ln(10);

$pdf->SetFont("Arial","",12);

$pdf->Cell(120, 5, "2, Rue de Damville, EVREUX",0 ,0);
$pdf->Cell(69, 5,"",0,1); //end of line

$pdf->Cell(120, 5, "France, EVREUX, 27220",0 ,0);
$pdf->Cell(35, 5,"Date",0,0);
$pdf->Cell(34, 5,$date,0,1); //end of line

$pdf->Cell(120, 5, utf8_decode("Tél: +33 6 00 00 00"),0 ,0);
$pdf->Cell(35, 5, utf8_decode("Commande N°"),0 ,0);
$pdf->Cell(34, 5,"idCommande",0,1); //end of line

$pdf->Cell(120, 5, utf8_decode("contact@aerodrome-evreux.fr"),0 ,0);
$pdf->Cell(35, 5, utf8_decode("Numéro Client"),0 ,0);
$pdf->Cell(34, 5, "idClient",0,1); //end of line

// Empty cell vertical space
$pdf->Cell(189, 10, "",0 ,1);

$pdf->Cell(60,10,utf8_decode("Récapitulatif de la réservation:"),0,1);

if ($i >= 1){			
$pdf->Cell(60,5,"Nom :",0,0);
$pdf->Cell(129,5,$nom,0,1);

	if($i >= 2){
		$pdf->Cell(60,5,utf8_decode("Prénom :"),0,0);
		$pdf->Cell(129,5,$prenom,0,1);
		
		if($i >= 3){	
			$pdf->Cell(60,5,utf8_decode("Âge :"),0,0);
			$pdf->Cell(129,5,$age,0,1);
			
			if($i >= 4){		
				$pdf->Cell(60,5,utf8_decode("Service réservé :"),0,0);
				$pdf->Cell(129,5,$service,0,1);
					
					if($i == 5){
						$pdf->Cell(60,5,utf8_decode("Date :"),0,0);
						$pdf->Cell(129,5,$date,0,1);
							}
						}
					}
				}
			}

						
$pdf->Ln(10);

$pdf->SetFont("Arial","B",12);

$pdf->Cell(130, 5, utf8_decode("Prestation réservée"),1,0);
$pdf->Cell(60, 5, "Prix TTC",1,1);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 1",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 2",0,0);
$pdf->Cell(35, 5, "257,78 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 3",0,0);
$pdf->Cell(35, 5, "87,65 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 4",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 5",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 6",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 7",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->SetFont("Arial","",12);

$pdf->Cell(130, 5, "Service 8",0,0);
$pdf->Cell(35, 5, "187,12 E",0,1, "R");

$pdf->SetFont("Arial","",10);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Date de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);

$pdf->Cell(20,5,"",0,0);
$pdf->Cell(50,5,utf8_decode("Heure de l'activité"),0,0);
$pdf->Cell(119,5, "",0,1);
$pdf->ln(2);

$pdf->Cell(130, 5, "",0,0);
$pdf->Cell(25, 5, "",0,0);
$pdf->Cell(35, 5, "",0,1, "R");

// Separater
$pdf->Ln(1);
$pdf->Cell(150,0,"",0,0);
$pdf->Cell(39,0,"",1,1, "R");

$pdf->SetFont("Arial","B",12);
$pdf->Cell(130, 5, "",0,0);
$pdf->Cell(25, 5, "Total TTC",0,0);
$pdf->Cell(35, 5, "xxx E",0 ,1, "R");

$pdf->Ln(1);
$pdf->Cell(150,0,"",0,0);
$pdf->Cell(39,0,"",1,1, "R");

$pdf->Output();
?>