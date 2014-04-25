<?php
/**
 * PHP Server Monitor
 * Monitor your servers and websites.
 *
 * This file is part of PHP Server Monitor.
 * PHP Server Monitor is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PHP Server Monitor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PHP Server Monitor.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package     phpservermon
 * @author      nerdalertdk
 * @copyright   Copyright (c) 2008-2014 Pepijn Over <pep@neanderthal-technology.com>
 * @license     http://www.gnu.org/licenses/gpl.txt GNU GPL v3
 * @version     Release: @package_version@
 * @link        http://www.phpservermonitor.org/
 **/

$sm_lang = array(
	'name' => 'Dansk - Danish',
	'locale' => array('da_DK.UTF-8', 'da_DK', 'danish', 'danish-dk'),
	'system' => array(
		'title' => 'Server Monitor',
		'install' => 'Installere',
		'action' => 'Action',
		'save' => 'Gem',
		'edit' => 'Redigere',
		'delete' => 'Slet',
		'date' => 'Dato',
		'message' => 'Besked',
		'yes' => 'Ja',
		'no' => 'Nej',
		'insert' => 'Indsæt',
		'add_new' => 'Tilføj ny',
		'update_available' => 'En ny version ({version}) er tilgængelig på <a href="http://www.phpservermonitor.org" target="_blank">http://www.phpservermonitor.org</a>.',
		'back_to_top' => 'Til toppen',
		'go_back' => 'Tilbage',
		'ok' => 'OK',
		'cancel' => 'Annuller',
		// date/time format according the strftime php function format parameter http://php.net/manual/function.strftime.php
		'short_day_format' => '%B %e',
		'long_day_format' => '%B %e, %Y',
		'yesterday_format' => 'Igår %k:%M',
		'other_day_format' => '%A %k:%M',
		'never' => 'Aldrig',
		'hours_ago' => '%d timer siden',
		'an_hour_ago' => 'omkring en time siden',
		'minutes_ago' => '%d minutter siden',
		'a_minute_ago' => 'omkring et minut siden',
		'seconds_ago' => '%d sekunder siden',
		'a_second_ago' => 'et sekund siden',
	),
	'menu' => array(
		'config' => 'Indstillinger',
		'server' => 'Servere',
		'server_log' => 'Log',
		'server_status' => 'Status',
		'server_update' => 'Opdatere',
		'user' => 'Brugere',
		'help' => 'Hjælp',
	),
	'users' => array(
		'user' => 'Bruger',
		'name' => 'Navn',
		'user_name' => 'Brugernavn',
		'password' => 'Adgangskode',
		'password_repeat' => 'Adgangskode igen',
		'password_leave_blank' => 'Udfyldes hvis du vil skifte kode',
		'level' => 'Level',
		'level_10' => 'Administrator',
		'level_20' => 'Bruger',
		'level_description' => '<b>Administratore</b> har fuld adgang: De kan styre servere, brugere og indstillingere.<br/><b>Brugere</b> kan kun se og køre opdatere for servere som er tildelt til dem.',
		'mobile' => 'Mobil',
		'email' => 'Email',
		'delete_title' => 'Slet bruger',
		'delete_message' => 'Er du sikker på du vil slette bruger \'%1\'?',
		'deleted' => 'Bruger slettet.',
		'updated' => 'Bruger opdateret.',
		'inserted' => 'Bruger tilføjet.',
		'profile' => 'Profil',
		'profile_updated' => 'Din profil er opdateret.',
		'error_user_name_bad_length' => 'Brugernavn skal være mellem 2 til 64 tegn.',
		'error_user_name_invalid' => 'Brugernavn må kun indholde alfabetiske tegn (a-z, A-Z), tal (0-9) og (_).',
		'error_user_name_exists' => 'Det valgte brugernavn findes allerede.',
		'error_user_email_bad_length' => 'Email addresser skal være mellem 5 til 255 tegn.',
		'error_user_email_invalid' => 'Den valgte email er ugyldig.',
		'error_user_level_invalid' => 'Det angivet bruger niveau er ugyldig.',
		'error_user_no_match' => 'Brugeren findes ikke.',
		'error_user_password_invalid' => 'Den indtastede adgangskode er ugyldig.',
		'error_user_password_no_match' => 'De to adgangskode er ikke ens.',
	),
	'log' => array(
		'title' => 'Logposter',
		'type' => 'Type',
		'status' => 'Status',
		'email' => 'Email',
		'sms' => 'SMS',
		'no_logs' => 'Intet i loggen',
	),
	'servers' => array(
		'server' => 'Server',
		'status' => 'Status',
		'label' => 'Label',
		'domain' => 'Domæne/IP',
		'port' => 'Port',
		'type' => 'Type',
		'type_website' => 'Hjemmeside',
		'type_service' => 'Tjeneste',
		'pattern' => 'Søge streng/mønster',
		'pattern_description' => 'Hvis dette mønster ikke findes på hjemmesiden, vil serveren blive markeret offline. Regulære udtryk er tilladt.',
		'last_check' => 'Sidst kontrolleret',
		'last_online' => 'Sidst online',
		'monitoring' => 'Overvågning',
		'no_monitoring' => 'Ingen overvågning',
		'email' => 'Email',
		'send_email' => 'Send Email',
		'sms' => 'SMS',
		'send_sms' => 'Send SMS',
		'delete_title' => 'Slet server',
		'delete_message' => 'Er du sikker på du vil slette server \'%1\'?',
		'deleted' => 'Server slettet.',
		'updated' => 'Server opdateret.',
		'inserted' => 'Server tilføjet.',
		'latency' => 'Latency',
		'latency_max' => 'Latency (maksimum)',
		'latency_min' => 'Latency (minimum)',
		'latency_avg' => 'Latency (gennemsnitlig)',
		'uptime' => 'Oppetid',
		'year' => 'År',
		'month' => 'Måned',
		'week' => 'Uge',
		'day' => 'Dag',
		'hour' => 'Time',
		'warning_threshold' => 'Advarsel grænse',
		'warning_threshold_description' => 'Antal af fejl før status skifter til offline.',
		'chart_last_week' => 'Sidste uge',
		'chart_history' => 'Historie',
		// Charts date format according jqPlot date format  http://www.jqplot.com/docs/files/plugins/jqplot-dateAxisRenderer-js.html
		'chart_day_format' => '%d-%m-%Y',
		'chart_long_date_format' => '%d-%m-%Y %H:%M:%S',
		'chart_short_date_format' => '%d/%m %H:%M',
		'chart_short_time_format' => '%H:%M',
	),
	'config' => array(
		'general' => 'Generelt',
		'language' => 'Sprog',
		'show_update' => 'Opdateringer',
		'email_status' => 'Tillad at sende mail',
		'email_from_email' => 'Email fra adresse',
		'email_from_name' => 'Email fra navn',
		'email_smtp' => 'Aktiver SMTP',
		'email_smtp_host' => 'SMTP vært',
		'email_smtp_port' => 'SMTP port',
		'email_smtp_username' => 'SMTP brugernavn',
		'email_smtp_password' => 'SMTP adgangskode',
		'email_smtp_noauth' => 'Efterladt blank hvis det ikke er opkrævet',
		'sms_status' => 'Tillad at sende SMS beskeder',
		'sms_gateway' => 'SMS Gateway',
		'sms_gateway_mosms' => 'Mosms',
		'sms_gateway_mollie' => 'Mollie',
		'sms_gateway_spryng' => 'Spryng',
		'sms_gateway_inetworx' => 'Inetworx',
		'sms_gateway_clickatell' => 'Clickatell',
        'sms_gateway_textmarketer' => 'Textmarketer',
		'sms_gateway_smsit' => 'Smsit',
		'sms_gateway_username' => 'Gateway brugernavn/apikey',
		'sms_gateway_password' => 'Gateway adgangskode',
		'sms_from' => 'Afsenders navn.',
		'alert_type' => 'Vælg hvornår du vil modtage besked.<br/>',
       'alert_type_description' => '<b>Status ændring:</b> '.
		    'Du vil modtage en notifcation når en server har en ændring i status. Fra online -> offline eller offline -> online.<br/>'.
		    '<br /><b>Offline:</b> '.
		    'Du vil modtage en meddelelse, når en server går offline for * kun første gang *. for eksempel, '.
		    'Hvis dit cronjob køre hvert kvatere og din server går ned kl 01 og kommer først op kl 06 '.
		    ' så vil du kun modtage en mail kl 01.<br/>'.
		    '<br><b>Altid:</b> '.
		    'Du vil modtage en besked, hver gang scriptet kører og et websted er nede, selvom site har været '.
		    'offline i flere timer.',
		'alert_type_status' => 'Status ændret',
		'alert_type_offline' => 'Offline',
		'alert_type_always' => 'Altid',
		'log_status' => 'Log status',
		'log_status_description' => 'Hvis log status er sat til TRUE, vil monitoren logge hændelsen hver gang status ændre sig.',
		'log_email' => 'Log mails sendt af systemet',
		'log_sms' => 'Log SMS sendt af systemet',
		'updated' => 'Indstillingerne er blevet opdateret.',
		'nochanges' => 'The configuration didn\'t change.',
		'tab_email' => 'Email',
		'tab_sms' => 'SMS',
		'tab_log' => 'Log',
		'settings_email' => 'Email indstillinger',
		'settings_sms' => 'SMS indstillinger',
		'settings_notification' => 'Meddelelse indstillinger',
		'settings_log' => 'Log indstillinger',
		'auto_refresh' => 'Genopfriske automatisk',
		'auto_refresh_servers' =>
			'Genopfriske automatisk server sider.<br/>'.
			'<span class="small">'.
			'Tid i sekunder, Hvis 0 vil siden ikke genopfriske automatisk'.
			'</span>',
		'seconds' => 'sekunder',
		'test' => 'Test',
		'test_email' => 'An email will be sent to the address specified in your user profile.',
		'test_sms' => 'An SMS will be sent to the phone number specified in your user profile.',
		'send' => 'Send',
		'test_message' => 'Test message',
		'email_sent' => 'Email sent',
		'email_error' => 'Error in email sending',
		'sms_sent' => 'Sms sent',
		'sms_error' => 'Error in sms sending',
	),
	// for newlines in the email messages use <br/>
	'notifications' => array(
		'off_sms' => 'Server \'%LABEL%\' is DOWN: ip=%IP%, port=%PORT%. Fejl=%ERROR%',
		'off_email_subject' => 'VIGTIG: Server \'%LABEL%\' is DOWN',
		'off_email_body' => "Det lykkedes ikke at oprette forbindelse til følgende server:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Fejl: %ERROR%<br/>Date: %DATE%",
		'on_sms' => 'Server \'%LABEL%\' is RUNNING: ip=%IP%, port=%PORT%',
		'on_email_subject' => 'VIGTIG: Server \'%LABEL%\' is RUNNING',
		'on_email_body' => "Server '%LABEL%' køre igen:<br/><br/>Server: %LABEL%<br/>IP: %IP%<br/>Port: %PORT%<br/>Dato: %DATE%",
	),
	'login' => array(
		'welcome_usermenu' => 'Velkommen, %user_name%',
		'title_sign_in' => 'Log ind',
		'title_forgot' => 'Glemt adgangskode?',
		'title_reset' => 'Nulstil din adgangskode',
		'submit' => 'Indsend',
		'remember_me' => 'Husk kode',
		'login' => 'Log ind',
		'logout' => 'Log ud',
		'username' => 'Brugernavn',
		'password' => 'Adgangskode',
		'password_repeat' => 'Skriv adgangskode igen',
		'password_forgot' => 'Glemt adgangskode?',
		'password_reset' => 'Nulstil adgangskode',
		'password_reset_email_subject' => 'Nulstil din adgangskode for PHP Server Monitor',
		'password_reset_email_body' => 'Brug venligst følgende link for at nulstille din adgangskode. Bemærk det udløber på 1 time.<br/><br/>%link%',
		'error_user_incorrect' => 'Det angivet brugernavn kunne ikke findes.',
		'error_login_incorrect' => 'Oplysningerne stemmer ikke overens.',
		'error_login_passwords_nomatch' => 'De angivet adgangskoder matcher ikke.',
		'error_reset_invalid_link' => 'Følgende link er ugyldigt.',
		'success_password_forgot' => 'En e-mail er blevet sendt til dig med oplysninger om, hvordan du nulstiller din adgangskode.',
		'success_password_reset' => 'Dit password er blevet nulstillet. venligst log ind.',
	),
);