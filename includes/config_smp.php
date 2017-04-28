<?php
// COMPANY INFORMATION
define('COMPANY_LOGO', 'images/logo_smp.png');
define('COMPANY_LOGO_WIDTH', '356');
define('COMPANY_LOGO_HEIGHT', '95');
define('COMPANY_NAME','SIMPLY OBSEQUES');
define('COMPANY_ADDRESS_1','91 Boulevard de Port-Royal');
define('COMPANY_ADDRESS_2','');
define('COMPANY_COUNTY','PARIS');
define('COMPANY_POSTCODE','75013');

define('COMPANY_NUMBER','Company No: 48486468'); // Company registration number
define('COMPANY_VAT', 'Company VAT: 468546846'); // Company TAX/VAT number

// EMAIL DETAILS
define('EMAIL_FROM', 'sales@domain.com'); // Email address invoice emails will be sent from
define('EMAIL_NAME', 'SIMPLY OBSEQUES'); // Email from address
define('EMAIL_SUBJECT', 'Invoice subject'); // Invoice email subject
define('EMAIL_BODY_INVOICE', 'Invoice body'); // Invoice email body
define('EMAIL_BODY_QUOTE', 'Invoice body'); // Invoice email body
define('EMAIL_BODY_RECEIPT', 'Invoice body'); // Invoice email body

// OTHER SETTINFS
define('INVOICE_PREFIX', 'SSJ'); // Prefix at start of invoice - leave empty '' for no prefix
define('INVOICE_INITIAL_VALUE', '1000'); // Initial invoice order number (start of increment)
define('INVOICE_THEME', '#222222'); // Theme colour, this sets a colour theme for the PDF generate invoice
define('TIMEZONE', 'Europe/London'); // Timezone - See for list of Timezone's http://php.net/manual/en/function.date-default-timezone-set.php
define('DATE_FORMAT', 'DD/MM/YYYY'); // DD/MM/YYYY or MM/DD/YYYY
define('CURRENCY', '€'); // Currency symbol
define('ENABLE_VAT', true); // Enable TAX/VAT
define('VAT_INCLUDED', false); // Is VAT included or excluded?
define('VAT_RATE', '20'); // This is the percentage value

define('PAYMENT_DETAILS', 'Company Name Ltd<br>Sort Code: 00-00-00<br>Account Number: 12345678'); // Payment information
define('FOOTER_NOTE', 'http://www.yourdomain.co.uk/');


?>