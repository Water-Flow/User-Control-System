<?php 
// ************************************************************************************//
// * User Control Panel ( UCP )
// ************************************************************************************//
// * Author: DerStr1k3r
// ************************************************************************************//
// * Version: 2.1
// * 
// * Copyright (c) 2020 DerStr1k3r. All rights reserved.
// ************************************************************************************//
// * License Typ: GNU GPLv3
// ************************************************************************************// 
require_once("include/features.php");

secure_url();

// ************************************************************************************//
// * English Language Section - Main 
// ************************************************************************************//
define("SITESTAFF","Staff Tools");
define("DASHBOARD","Dashboard");
define("HOME_NOLOGGED","Home");
define("RULES","Rules");
define("USERPROFILE","User Profile");
define("USERACCOUNT","Account Tools");
define("USERPROFILECHANGE","User Profile Change");
define("USERSUPPORT","Support");
define("WELCOMETO","Welcome to");
define("STAFF_NEWSACP","News System");
define("STAFF_RULESACP","Rules System");
define("SITE_LOGOUT","Logout");
define("FAQ","FAQs");
define("LOADING","Please wait...");
define("NEWS","News: ");

// ************************************************************************************//
// * English Language Section - Message System 
// ************************************************************************************//
define("MSG_1","You should look first <a href='login.php'>login</a>!");
define("MSG_2","You are not a supporter!");
define("MSG_3","<b>You have successfully edited the account!</b><br><br><a href='staff_userchanged.php'>go back</a>");
define("MSG_4","<b>Your ticket has been sent!</b>");
define("MSG_5","<b>Your tweet was sent successfully!</b><br><br><a href='dashboard.php'>Back to the dashboard</a>");
define("MSG_6","<b>Your like in the tweet was successfully set!</b><br><br><a href='dashboard.php'>Back to the dashboard</a>");
define("MSG_7","<b>Your changes could not be saved!</b>");
define("MSG_8","<b>You have successfully edited your account!</b>");
define("MSG_9","<b>Your registration is complete!</b>");
define("MSG_10","<b>Please fill in both the username and the password field!</b>");
define("MSG_11","<b>Wrong password!</b>");
define("MSG_12","<b>No user found!</b>");
define("MSG_13","<b>E-Mail is not valid!</b>");
define("MSG_14","<b>Username is not valid!</b>");
define("MSG_15","<b>Password must be between 5 and 20 characters long!</b>");
define("MSG_16","<b>Account already exists</b>");
define("MSG_17","<b>Your logout was successful!</b>");
define("MSG_18","<b>Your news entry was not successful!</b>");
define("MSG_19","<b>Please fill in both the German title and the English title!</b>");
define("MSG_20","<b>Please fill in both the German content and the English content!</b>");
define("MSG_21","<b>Your news entry was successful!</b>");
define("MSG_22","<b>Your rules entry was successful!</b>");
define("MSG_23","<b>Your rules entry was not successful!</b>");
define("MSG_24","<b>Your faq entry was successful!</b>");
define("MSG_25","<b>Your faq entry was not successful!</b>");

// ************************************************************************************//
// * English Language Section - My Profile Change
// ************************************************************************************//
define("WHITELIST","For the whitelist");
define("TWITTER","For the upcoming Twitter module");
define("RPSERVER","UCP as well as for the game server");
define("MYPROFILENOTE","You have to fill in all fields with every change!");
define("SIGNATUR","Signature");
define("SIGNOTE","Your signature for your profile view!");
define("AVATAR","Avatar url");
define("AVANOTE","Your avatar picture for your profile!");
define("MYPROFILESAVE","Save");
define("CHANGE_MYPROFILE_DASHNOTE","Please note");
define("CHANGE_MYPROFILE_PASSWORD","Change Password");
define("CHANGE_MYPROFILE_SIGNATUR","Change signature");
define("CHANGE_MYPROFILE_USERNAME","Change username");
define("CHANGE_MYPROFILE_EMAIL","Change E-Mail address");
define("CHANGE_MYPROFILE_AVATAR","Change avatar");
define("CHANGE_MYPROFILE_AVATARNOTE","Drop files here or click to upload.");

// ************************************************************************************//
// * English Language Section - My Profile
// ************************************************************************************//
define("PLAYERID","Player ID");
define("PLAYERSOCIALCLUB","Social Club");
define("PLAYEREMAIL","E-Mail");
define("PLAYERBANNED","Banned");
define("PLAYERADMIN","Admin Level");
define("PLAYERWHITELISTED","Whitelisted");
define("PLAYERFIRSTLOGIN","First Login");
define("PLAYERNOTE1","From ".PROJECTNAME." every whitelist is held in our Teamspeak server.");
define("PLAYERNOTE2","Our statement");
define("PLAYERSIGNATURE","Signature");
define("PLAYERABOUTME","ABOUT ME");

// ************************************************************************************//
// * English Language Section - Dashboard
// ************************************************************************************//
define("DASHBOARDTWITTER","Tweet");
define("DASHBOARDTWITTERNOTE1","Your tweet has been sent!");
define("DASHBOARDTWITTERNOTE2","You deleted all tweets!");
define("DASHBOARDTWITTERNOTE3","Whats new ?");
define("DASHBOARDTWITTERNOTE4","Your Username");
define("DASHBOARDTWITTERNOTE5","Your tweet message");
define("READMORE","read more");
define("DASHBOARDUSERS","Registered users");
define("DASHBOARDSUPPORT","Support Tickets");
define("DASHBOARDCPUUSE","CPU Usage");
define("DASHBOARDCPUREALTIME","Real time");
define("DASHBOARDCPUUSEON","On");
define("DASHBOARDCPUUSEOFF","Off");

// ************************************************************************************//
// * English Language Section - FAQ System
// ************************************************************************************//
define("FAQ_HEADER","FAQ System");
define("FAQ_INFO","You have to fill in all fields!");
define("FAQ_TITLE_EN","Title English");
define("FAQ_TITLE_EN_TEXT","The English Title");
define("FAQ_TITLE_DE","Title German");
define("FAQ_TITLE_DE_TEXT","The German Title");
define("FAQ_CONTENT_EN","Content Englisch");
define("FAQ_CONTENT_EN_TEXT","The English Content");
define("FAQ_CONTENT_DE","Content German");
define("FAQ_CONTENT_DE_TEXT","The German Content");
define("FAQ_SAVE","Save");

// ************************************************************************************//
// * English Language Section - News System
// ************************************************************************************//
define("NEWS_HEADER","News System");
define("NEWS_INFO","You have to fill in all fields!");
define("NEWS_TITLE_EN","Title English");
define("NEWS_TITLE_EN_TEXT","The English Title");
define("NEWS_TITLE_DE","Title German");
define("NEWS_TITLE_DE_TEXT","The German Title");
define("NEWS_CONTENT_EN","Content Englisch");
define("NEWS_CONTENT_EN_TEXT","The English Content");
define("NEWS_CONTENT_DE","Content German");
define("NEWS_CONTENT_DE_TEXT","The German Content");
define("NEWS_SAVE","Save");

// ************************************************************************************//
// * English Language Section - Rules System
// ************************************************************************************//
define("RULES_HEADER","Rules System");
define("RULES_INFO","You have to fill in all fields!");
define("RULES_TITLE_EN","Title English");
define("RULES_TITLE_EN_TEXT","The English Title");
define("RULES_TITLE_DE","Title German");
define("RULES_TITLE_DE_TEXT","The German Title");
define("RULES_CONTENT_EN","Content Englisch");
define("RULES_CONTENT_EN_TEXT","The English Content");
define("RULES_CONTENT_DE","Content German");
define("RULES_CONTENT_DE_TEXT","The German Content");
define("RULES_SAVE","Save");

// ************************************************************************************//
// * English Language Section - Support
// ************************************************************************************//
define("SUPPORTUSERID", "Player ID");
define("SUPPORTINFO", "Your support ticket should be described as precisely as possible.");
define("SUPPORTUSERINFO1", "Enter your username");
define("SUPPORTUSERINFO2", "What bug did you find?");
define("SUPPORTUSERINFO3", "Your description should be described as precisely as possible.");
define("SUPPORTUSERNAME", "Username");
define("SUPPORTEMAIL", "E-Mail");
define("SUPPORTSUBJECT", "Subject");
define("SUPPORTMSG", "Message");
define("SUPPORTDATE", "Date");
define("SUPPORTSAVE","Save");
define("SUPPORTDELETEINFO","You have deleted all support tickets");
define("SUPPORTDELETE1","Now go back to the <a href='support.php'>Support Tickets</a>!");
define("SUPPORTDELETE2","Delete tickets");
define("SUPPORTADDTICKET1", "Now create your ticket!");
define("SUPPORTADDTICKET2", "click me");

// ************************************************************************************//
// * English Language Section - No Logged & Logged Section
// ************************************************************************************//
define("REGISTER", "Register");
define("LOGIN", "Login");
define("SOCIALCLUBNAME", "Social Club Name");
define("USERNAME", "Username");
define("EMAIL", "Email");
define("PASSWORD", "Password");
define("SUBMIT", "Submit");
define("LANGUAGE", "Language");
define("NOTE", "<b>Note:</b> Fields with <span class='pflichtfeld'>*</span> have to be filled out.");
define("NOTE2", "<b>Note:</b> The username and the social club name must be the same.");
define("INDEXTEXT", "We bring the roleplay to a new level, with our realistic handling, there are no limits!");

// ************************************************************************************//
// * English Language Section - Staff Member 
// ************************************************************************************//
define("STAFF_USERCAHNEGED","Player Changer");
define("STAFF_USERCONTROL","Playerlist");
define("STAFF_USERCONTROLUSERID","Player ID");
define("STAFF_USERCONTROLUSERNAME","Player Username");
define("STAFF_USERCONTROLSOCIALCLUB","Player Social Club");
define("STAFF_USERCONTROLEMAIL","Player E-Mail");
define("STAFF_USERCONTROLACCOUNTWHITELIST","Player Whitelisted");
define("STAFF_USERCONTROLOPTION","Settings");
define("STAFF_USERCONTROLSAVE","Save");

// ************************************************************************************//
// * English Language Section - Footer
// ************************************************************************************//
define("DISCORD","Join to Discord");
define("DISCORDURL","https://discord.gg/r8YQAVB");
define("TEAMSPEAK","Join to Teamspeak");
define("TEAMSPEAKURL","ts3server://xxxxxx?port=9987");
define("IMPRINT","Impressum");
define("IMPRINTURL","https://xxxxxx/impressum.html");

?>