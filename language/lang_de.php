<?php 
// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 1.4
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************// 
require_once("include/features.php");

secure_url();

// ************************************************************************************//
// * German Language Section - Main 
// ************************************************************************************//
define("SITETITLE","HIGH-LIFE | UCP");
define("SITESTAFF","Staff Tools");
define("PROJECTNAME","High-Life");
define("DASHBOARD","Dashboard");
define("RULES","Regelwerk");
define("USERPROFILE","User Profil");
define("USERPROFILECHANGE","User Profil bearbeiten");
define("USERSUPPORT","Support");
define("WELCOMETO","Willkommen bei");
define("STAFF_NEWSACP","News System");

// ************************************************************************************//
// * German Language Section - Message System 
// ************************************************************************************//
define("MSG_1","Sie sollten sich zuerst <a href='login.php'>".LOGIN."</a>!");
define("MSG_2","Du bist kein Supporter!");
define("MSG_3","<b>Du hast den Account erfolgreich bearbeitet!</b><br><br><a href='staff_userchanged.php'>Zurück</a>");
define("MSG_4","<b>Dein Ticket wurde gesendet!</b><br><br><a href='support.php'>Zurück</a>");
define("MSG_5","<b>Dein Tweet wurde erfolgreich gesendet!</b><br><br><a href='dashboard.php'>Zurück zum Dashboard</a>");
define("MSG_6","<b>Dein Like in den Tweet wurde erfolgreich gesetzt!</b><br><br><a href='dashboard.php'>Zurück zum Dashboard</a>");
define("MSG_7","<b>Deine Änderungen konnten nicht gespeichert werden!</b>");
define("MSG_8","<b>Du hast dein Account erfolgreich bearbeitet!</b>");
define("MSG_9","<b>Deine Registrierung ist abgeschlossen!</b>");
define("MSG_10","<b>Bitte füllen Sie sowohl den Benutzernamen als auch das Passwortfeld aus!</b>");
define("MSG_11","<b>Falsches Passwort!</b>");
define("MSG_12","<b>Kein Benutzer gefunden!</b>");
define("MSG_13","<b>Die E-Mail ist keine gültige!</b>");
define("MSG_14","<b>Username nicht gültig</b>");
define("MSG_15","<b>Das Passwort muss zwischen 5 und 20 Zeichen lang sein!</b>");
define("MSG_16","<b>Account schon vorhanden</b>");
define("MSG_17","<b>Dein Logout war erfolgreich!</b>");
define("MSG_18","<b>Dein News Eintrag war nicht erfolgreich!</b>");
define("MSG_19","<b>Bitte geben Sie sowohl den deutschen als auch den englischen Titel ein!</b>");
define("MSG_20","<b>Bitte füllen Sie sowohl den deutschen als auch den englischen Kontent aus!</b>");
define("MSG_21","<b>Dein News Eintrag war erfolgreich!</b>");

// ************************************************************************************//
// * German Language Section - My Profile Change
// ************************************************************************************//
define("WHITELIST","Für die Whitelist");
define("TWITTER","Für das kommende Twitter Modul");
define("RPSERVER","UCP sowie für den Game Server");
define("MYPROFILENOTE","Du musst bei jeder Änderung alle Felder ausfühlen!");
define("MYPROFILESAVE","Speichern");

// ************************************************************************************//
// * German Language Section - My Profile
// ************************************************************************************//
define("PLAYERID","Spieler ID");
define("PLAYERSOCIALCLUB","Social Club");
define("PLAYEREMAIL","E-Mail");
define("PLAYERBANNED","Gebannt");
define("PLAYERADMIN","Admin Level");
define("PLAYERWHITELISTED","Whitelistet");
define("PLAYERFIRSTLOGIN","Erster Login");
define("PLAYERNOTE1","Auf ".PROJECTNAME." wird jede Whitelist in unseren Teamspeak Server abgehalten.");
define("PLAYERNOTE2","Unser Motto");

// ************************************************************************************//
// * German Language Section - Dashboard
// ************************************************************************************//
define("DASHBOARDTWITTER","Twittern");
define("DASHBOARDTWITTERNOTE1","Dein Tweet wurde abgeschickt!");
define("DASHBOARDTWITTERNOTE2","Du hast alle Tweets gelöscht!");
define("DASHBOARDTWITTERNOTE3","Was gibt es Neues ?");
define("DASHBOARDTWITTERNOTE4","Dein Username");
define("DASHBOARDTWITTERNOTE5","Deine Tweet Nachricht");
define("READMORE","Lese mehr");

// ************************************************************************************//
// * German Language Section - News System
// ************************************************************************************//
define("NEWS_HEADER","News System");
define("NEWS_INFO","Du musst alle Felder ausfühlen!");
define("NEWS_TITLE_EN","Titel Englisch");
define("NEWS_TITLE_EN_TEXT","Der Englische Titel");
define("NEWS_TITLE_DE","Titel Deutsch");
define("NEWS_TITLE_DE_TEXT","Der Deutsche Titel");
define("NEWS_CONTENT_EN","Content Englisch");
define("NEWS_CONTENT_EN_TEXT","Der Englische Content");
define("NEWS_CONTENT_DE","Content Deutsch");
define("NEWS_CONTENT_DE_TEXT","Der Deutsche Content");
define("NEWS_SAVE","Speichern");

// ************************************************************************************//
// * German Language Section - Support
// ************************************************************************************//
define("SUPPORTUSERID", "Spieler ID");
define("SUPPORTINFO", "Dein Support Ticket sollte möglichst genau beschrieben werden.");
define("SUPPORTUSERINFO1", "Gebe dein Username ein");
define("SUPPORTUSERINFO2", "Welchen Bug hast du gefunden?");
define("SUPPORTUSERINFO3", "Deine Beschreibung sollte möglichst genau beschrieben sein.");
define("SUPPORTUSERNAME", "Username");
define("SUPPORTEMAIL", "E-Mail");
define("SUPPORTSUBJECT", "Betreff");
define("SUPPORTMSG", "E-Mail");
define("SUPPORTDATE", "Datum");
define("SUPPORTSAVE","Speichern");
define("SUPPORTDELETEINFO","Du hast alle Support Tickets gelöscht");
define("SUPPORTDELETE1","<b>Gehe nun zurück zu den <a href='support.php'>Support Tickets</a>!</b>");
define("SUPPORTDELETE2","Tickets löschen");
define("SUPPORTADDTICKET1", "Erstelle nun dein Ticket!");
define("SUPPORTADDTICKET2", "Klick mich");

// ************************************************************************************//
// * German Language Section - No Logged & Logged Section
// ************************************************************************************//
define("REGISTER", "Registrieren");
define("LOGIN", "Einloggen");
define("SOCIALCLUBNAME", "Social Club Name");
define("USERNAME", "Username");
define("EMAIL", "E-Mail");
define("PASSWORD", "Passwort");
define("SUBMIT", "Senden");
define("LANGUAGE", "Sprache");
define("NOTE", "<b>Hinweis:</b> Felder mit <span class='pflichtfeld'>*</span> müssen ausgefüllt werden.");
define("INDEXTEXT", "Wir Bringen Das Roleplay Auf Ein Neues Level, Mit Unserer Realistischen Handhabung, Sind Uns Keine Grenzen Gesetzt!");

// ************************************************************************************//
// * German Language Section - Staff Member 
// ************************************************************************************//
define("STAFF_USERCAHNEGED","Spieler bearbeiten");
define("STAFF_USERCONTROL","Spielerliste");
define("STAFF_USERCONTROLUSERID","Spieler ID");
define("STAFF_USERCONTROLUSERNAME","Spieler Username");
define("STAFF_USERCONTROLSOCIALCLUB","Spieler Social Club");
define("STAFF_USERCONTROLEMAIL","Spieler E-Mail");
define("STAFF_USERCONTROLACCOUNTWHITELIST","Spieler Whitelisted");
define("STAFF_USERCONTROLSAVE","Speichern");

// ************************************************************************************//
// * German Language Section - Footer
// ************************************************************************************//
define("DISCORD","Join to Discord");
define("DISCORDURL","https://discord.gg/xxxxxx");
define("TEAMSPEAK","Join to Teamspeak");
define("TEAMSPEAKURL","ts3server://xxxxxx?port=9987");
define("IMPRINT","Impressum");
define("IMPRINTURL","https://xxxxxx/impressum.html");

?>