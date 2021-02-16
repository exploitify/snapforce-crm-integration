<?php

$curl = curl_init('https://crm.snapforce.com/vintage/sf_receive_request.inc.php');
$api_key=<api key>;
$api_user = <api user>;

$fetchRecords = "format=xml&api_user=$api_user&api_key=$api_key&module=Leads&status=Active&method=fetchRecords";

// Tell cURL to fail if an error occurs:
curl_setopt($curl, CURLOPT_FAILONERROR, 1);

// Allow for redirects:
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

// Assign the returned data to a variable:
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// Set the timeout:
curl_setopt($curl, CURLOPT_TIMEOUT, 5);

// Use POST:
curl_setopt($curl, CURLOPT_POST, 1);

// Set the POST data:
curl_setopt($curl, CURLOPT_POSTFIELDS, $fetchRecords);

// Execute the transaction:
$r = curl_exec($curl);

// Close the connection:
curl_close($curl);

// print the results
print_r($r);
