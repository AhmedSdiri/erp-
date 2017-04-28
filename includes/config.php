<?php
// Debugging
ini_set('error_reporting', E_ALL);

// DATABASE INFORMATION
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'medusedb');
define('DATABASE_USER', 'root');
define('DATABASE_PASS', '');

// CONNECT TO THE DATABASE
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);

// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo.png');
define('COMPANY_LOGO_WIDTH', '356');
define('COMPANY_LOGO_HEIGHT', '95');
define('COMPANY_NAME','Lutece Intl');
define('COMPANY_ADDRESS_1','91 Boulevard de Port-Royal');
define('COMPANY_ADDRESS_2','');
define('COMPANY_ADDRESS_3','Paris');
define('COMPANY_COUNTY','PARIS');
define('COMPANY_POSTCODE','75013');

define('COMPANY_NUMBER','Entreprise: 48486468'); // Company registration number
define('COMPANY_VAT', 'TVA: 468546846'); // Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'pflutece@orange.fr'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'Lutece Intl'); // Email from address
define('EMAIL_SUBJECT', 'Lutece Intl'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Nouvelle devis reçu de Lutece Intl'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Nouveau bon de commande reçu de Lutece Intl'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Nouvelle facture reçue de Lutece Intl'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'SSJ'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1000'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Europe/Paris'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', '€'); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '20'); // This is the percentage value

define('PAYMENT_DETAILS', 'Lutece Intl<br>Code: 00-00-00<br>Numéro de compte: 12345678'); // Payment information
define('FOOTER_NOTE', 'http://www.pflutece.com/');


?>