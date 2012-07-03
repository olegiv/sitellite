<?php

// BEGIN KEEPOUT CHECKING
// Add these lines to the very top of any file you don't want people to
// be able to access directly.
if (! defined ('SAF_VERSION')) {
  header ('HTTP/1.1 404 Not Found');
	echo "<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\">\n"
		. "<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>\n"
		. "The requested URL " . $PHP_SELF . " was not found on this server.<p>\n<hr>\n"
		. $_SERVER['SERVER_SIGNATURE'] . "</body></html>";
	exit;
}
// END KEEPOUT CHECKING

$this->lang_hash['nl'] = array (
	'All rights reserved.' => 'Alle rechten voorbehouden.',
	'Documentation' => 'Documentatie',
	'top' => 'top',
	'Copyright' => 'Copyright',
	'Click here to read the software license agreement.' => 'Klik hier om de software licentieovereenkomst te lezen.',
	'Powered by Sitellite 5.0 Content Management System' => 'Powered by Sitellite 5.0 Content Management Systeem',
	'About Sitellite' => 'Over Sitellite',
	'Sitellite Community' => 'Sitellite Gemeenschap',
	'Support' => 'Ondersteunen',
	'Close Window' => 'Scherm sluiten',
	'Sitellite Example Website' => 'Sitellite Voorbeeld Website',
	'Conditions' => 'Voorwaarden',
	'Contact Us' => 'Contact',
	'Disclaimer' => 'Disclaimer',
	'Email' => 'e-mail',
	'Name' => 'Naam',
	'Phone' => 'Telefoon',
	'Privacy' => 'Privacy',
	'Return to Top' => 'Terug naar boven',
	'Search our help files' => 'Zoek in onze helpbestanden',
	'Site Map' => 'Sitemap',
	'Sitellite 5.0 Example Website' => 'Sitellite 5.0 Voorbeeld Website',
	'Sitellite CMS' => 'Sitellite CMS',
	'AM/PM' => 'AM / PM',
	'Access' => 'Toegang',
	'Access Levels' => 'Toegang niveaus',
	'Account' => 'Account',
	'Add' => 'Toevoegen',
	'Address' => 'Adres',
	'Address Line 2' => 'Adresregel 2',
	'An auto-saved edit of this form has been found from a previous editing session.  Would you like to continue from your previous editing session, or start from the currently saved version?' => 'Een eerder automatisch opgeslagen formulier uit uw vorige editing sessie is gevonden. Wilt u met dit formulier doorgaan of met de thans opgeslagen versie?',
	'An error occurred' => 'Er is een fout opgetreden',
	'April' => 'april',
	'Are you sure you want to remove these items?' => 'Weet u zeker dat u deze items wilt verwijderen?',
	'August' => 'augustus',
	'Browse by %s' => 'Blader door% s',
	'Cancel' => 'Annuleren',
	'Cell #' => 'Mobiel #',
	'Choose' => 'Kiezen',
	'City' => 'Plaats',
	'Clear' => 'Opschonen',
	'Company' => 'Bedrijf/Organisatie',
	'Contact' => 'Contact',
	'Country' => 'Land',
	'Date Last Modified' => 'Datum laatste aanpassing',
	'Date Registered' => 'Datum geregistreerd',
	'Day' => 'dag',
	'December' => 'december',
	'Default Value' => 'Standaardwaarde',
	'Delete' => 'Verwijderen',
	'Description' => 'Beschrijving',
	'Description may not be empty.' => 'Beschrijving kan niet leeg zijn.',
	'Disabled' => 'Geblokkeerd',
	'Display Name' => 'Weergavenaam',
	'Display name may not be empty.' => 'Weergave naam mag niet leeg zijn.',
	'Displaying' => 'Tonen',
	'Download' => 'Downloaden',
	'Edit' => 'Edit',
	'Email could not sent.  Please verify that your mail daemon is functioning correctly.' => 'E-mail kon niet worden verzonden. Controleer of uw e-mail server goed functioneert.',
	'Empty' => 'Leeg',
	'Fax #' => 'Faxnummer',
	'February' => 'februari',
	'First Name' => 'Voornaam',
	'Highlighting Search Terms' => 'Zoektermen benadrukken',
	'Hour' => 'Uur',
	'Instructions' => 'Instructies',
	'Instructions may not be empty.' => 'Instructies mag niet leeg zijn.',
	'Is admin?' => 'Is admin?',
	'Jabber ID' => 'Jabber ID',
	'January' => 'januari',
	'July' => 'juli',
	'June' => 'juni',
	'Last Name' => 'Achternaam',
	'March' => 'maart',
	'May' => 'mei',
	'Minute' => 'minuut',
	'Month' => 'maand',
	'Next' => 'Volgende',
	'No' => 'Nee',
	'No date selected.' => 'Geen datum gekozen.',
	'No email address set.  Please check your form settings.' => 'Geen e-mailadres ingesteld. Controleer uw formulier instellingen.',
	'November' => 'november',
	'October' => 'oktober',
	'Oops!  The following information must be corrected in order to continue:' => 'Oeps! De volgende gegevens moeten worden gecorrigeerd om door te gaan:',
	'Oops! The following field was not filled in correctly:' => 'Oeps! Het volgende veld is niet correct ingevuld:',
	'Password' => 'Wachtwoord',
	'Password must not be empty.' => 'Wachtwoord mag niet leeg zijn.',
	'Passwords do not match.' => 'Wachtwoorden komen niet overeen.',
	'Phone #' => 'Telefoonnummer',
	'Please enter the words you see below' => 'Vul de woorden in die u hieronder ziet',
	'Please fix this before continuing.' => 'Pas aan voordat u verdergaat.',
	'Please type the letters and numbers you see above in the field below' => 'Typ de letters en cijfers die u hierboven ziet in het onderstaande veld',
	'Position' => 'Positie',
	'Postal/Zip Code' => 'Postcode',
	'Preference Name' => 'Voorkeur naam',
	'Preference name may not be empty.' => 'Voorkeursnaam mag niet leeg zijn.',
	'Previous' => 'Vorige',
	'Profile' => 'Profiel',
	'Province/State' => 'Provincie',
	'Public' => 'Openbaar',
	'Read' => 'Lezen',
	'Remove' => 'Verwijderen',
	'Resources' => 'Resources',
	'Restore your previous editing session' => 'Herstel uw vorige sessie',
	'Retrieve values from function' => 'Ophalen functiewaarden',
	'Role' => 'Rol',
	'Role name must not be empty.' => 'Rol naam mag niet leeg zijn.',
	'Role same should only contains alphanumeric characters or underscores.' => 'Rol hetzelfde mag alleen alfanumerieke karakters of onderstrepingstekens bevatten.',
	'SMS #' => 'SMS #',
	'Save' => 'Opslaan',
	'Search Again' => 'Opnieuw zoeken',
	'Select All' => 'Alles selecteren',
	'Select Date' => 'Datum selecteren',
	'September' => 'september',
	'Show All' => 'Alles laten',
	'Signature (for comments)' => 'Handtekening (voor reacties)',
	'Snippet name' => 'Snippet naam',
	'Sorry, no action file names with &quot;..&quot; in them.' => 'Sorry, geen actie bestandsnamen met ".." in hen.',
	'Sorry, the action file you have specified could not be found.' => 'Sorry, de actie bestand dat u hebt opgegeven kan niet worden gevonden.',
	'Start from the currently saved version' => 'Start van de thans opgeslagen versie',
	'Statuses' => 'Statussen',
	'Team' => 'Team',
	'Team name may not be empty.' => 'Team-naam mag niet leeg zijn.',
	'The &quot;{name}&quot; field exceeds its maximum size of {length}.' => 'De "(naam)" veld overschrijdt de maximale grootte van (lengte).',
	'The following information has been sent from' => 'De volgende informatie is verzonden',
	'This page is a placeholder for the following external resource' => 'Deze pagina is een tijdelijke aanduiding voor de volgende externe bron',
	'Undo Clear' => 'Ongedaan maken',
	'Update' => 'Bijwerken',
	'Username' => 'Gebruikersnaam',
	'Username already in use.' => 'Gebruikersnaam is al in gebruik.',
	'Username must not be empty.' => 'Gebruikersnaam mag niet leeg zijn.',
	'Values (one-per-line)' => 'Waarden (een-per-regel)',
	'Verify Password' => 'Verifieer wachtwoord',
	'View Current' => 'toon huidige',
	'View current file' => 'Bekijk het huidige bestand',
	'Web Site' => 'Website',
	'Write' => 'Schrijven',
	'Year' => 'Jaar',
	'Yes' => 'Ja',
	'Your password must be at least eight characters in length.' => 'Uw wachtwoord moet minimaal acht tekens lang zijn.',
	'Your password must contain at least one lowercase letter.' => 'Uw wachtwoord moet ten minste een kleine letter bevatten.',
	'Your password must contain at least one number.' => 'Uw wachtwoord moet ten minste een nummer bevatten.',
	'Your password must contain at least one symbol.' => 'Uw wachtwoord moet ten minste een symbool bevatten.',
	'Your password must contain at least one uppercase letter.' => 'Uw wachtwoord moet ten minste een hoofdletter bevatten.',
	'from' => 'van',
	'items' => 'items',
	'of' => 'van',
	'to' => 'tot',
	'Build by' => 'Gemaakt door',
	'More Testimonials' => 'Meer testimonials',
	'Powered by' => 'Powered by',
	'Template design by' => 'Ontwerp',
	'Preview' => 'Voorbeeld',
	'day' => 'dag',
	'month' => 'maand',
	'shortday' => 'verkorte dageergave',
	'shortmonth' => 'verkorte maandweergave',
	'Are you sure you want to delete the selected items?' => 'Weet u zeker dat u de geselecteerde items wilt verwijderen?',
	'Add Item' => 'Item toevoegen',
	'Delete Selected' => 'Geselecteerde verwijderen',
	'The fields marked below were not filled in correctly' => 'De velden hieronder zijn niet correct ingevuld',
	'The following fields were not filled in correctly' => 'De volgende velden zijn niet correct ingevuld',
);

?>