<?php
include "core/commandeC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			<th style="width: 20%">Date </th>
			<th style="width: 15%"> Reference</th>

			<th style="width: 15%"> Reference produit</th>
			<th style="width: 15%"> Prix</th>
			<th style="width: 15%"> quantite</th>
		</tr>
		<?php
		$commande1C=new commandeC();
		$listecommandes=$commande1C->getcommande();
		foreach($listecommandes as $row) {
			?>
			<tr>
				<td> <?php echo $row['date'];?> </td>
			<td> <?php echo $row['id'];?> </td>

			<td> <?php echo $row['ref_prod'];?> </td>
			<td> <?php echo $row['prixtotal'];?> </td>
			<td> <?php echo $row['quantite_prod'];?> </td>
		</tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>