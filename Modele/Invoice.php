<?php

class Invoice{
    
    
    function __construct(){
   
   }    
    function getInvoices() {

	// Connect to the database
        
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('.$mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	// the query
    $query = "SELECT * 
		FROM invoices i
		JOIN customers c
		ON c.invoice = i.invoice
		WHERE i.invoice = c.invoice
		ORDER BY i.invoice";

	// mysqli select query
	$results = $mysqli->query($query);

	// mysqli select query
	if($results) {

		print '<table class="table table-striped table-bordered" id="data-table" cellspacing="0"><thead><tr>

				<th><h4>Document N°</h4></th>
				<th><h4>Client</h4></th>
				<th><h4>émission</h4></th>
				<th><h4>échéance</h4></th>
				<th><h4>Type</h4></th>
				<th><h4>Statut</h4></th>
				<th><h4>Action</h4></th>

			  </tr></thead><tbody>';

		while($row = $results->fetch_assoc()) {

			print '
				<tr>
					<td>'.$row["invoice"].'</td>
					<td>'.$row["name"].'</td>
				    <td>'.$row["invoice_date"].'</td>
				    <td>'.$row["invoice_due_date"].'</td>
				    <td>'.$row["invoice_type"].'</td>
				';

				if($row['status'] == "Commande/Devis"){
					print '<td><span class="label label-info">'.$row['status'].'|</span></td>';
				} elseif ($row['status'] == "Paye"){
					print '<td><span class="label label-success">'.$row['status'].'|</span></td>';
				}

			print '
				    <td><a href="invoice-edit.php?id='.$row["invoice"].'" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> <a href="#" data-invoice-id="'.$row['invoice'].'" data-email="'.$row['email'].'" data-invoice-type="'.$row['invoice_type'].'" data-custom-email="'.$row['custom_email'].'" class="btn btn-success btn-xs email-invoice"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a> <a href="/invoices/'.$row["invoice"].'.pdf" class="btn btn-info btn-xs" target="_blank"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a> <a data-invoice-id="'.$row['invoice'].'" class="btn btn-danger btn-xs delete-invoice"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
			    </tr>
			';

		}

		print '</tr></tbody></table>';

	} else {

		echo "<p>pas de factures à afficher.</p>";

	}

	// Frees the memory associated with a result
	$results->free();

	// close connection 
	$mysqli->close();

}

// Initial invoice number
    function getInvoiceId() {

	// Connect to the database
	$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

	// output any connection error
	if ($mysqli->connect_error) {
	    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

	$query = "SELECT invoice FROM invoices ORDER BY invoice DESC LIMIT 1";

	if ($result = $mysqli->query($query)) {

		$row_cnt = $result->num_rows;

	    $row = mysqli_fetch_assoc($result);

	    //var_dump($row);

	    if($row_cnt == 0){
			echo INVOICE_INITIAL_VALUE;
		} else {
			echo $row['invoice'] + 1; 
		}

	    // Frees the memory associated with a result
		$result->free();

		// close connection 
		$mysqli->close();
	}
	
}


}