<?php

/**
 * Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2014
 * @package    syncCto
 * @license    GNU/LGPL 
 * @filesource
 */

$GLOBALS['TL_LANG']['XPL']['apiKey']['0']            = array('ctoCommunication API Key', 'Der API Key ist für die Verschlüsselung bei der Synchronisation von zwei Contao-Installationen zuständig.<br /><br />Der Schlüssel wird immer in den allgemeinen Einstellungen des Clients generiert und muss von dort kopiert und in das dafür bereitgestellte Feld auf dem Server eingefügt werden.');
$GLOBALS['TL_LANG']['XPL']['security']['0']          = array('Verschlüsselungs-Engine', 'syncCto bietet standardmäßig drei Arten der Synchronisation an. Zwei mit einer Verschlüsselung und eine ohne.<br /><br />Die Synchronisation ohne Verschlüsselung ist nur bei internen Projekten zu empfehlen da sonst Angriffe von außen nicht auszuschließen sind.');
$GLOBALS['TL_LANG']['XPL']['folder_blacklist']['0']  = array('Allgemein - Pfad Anfang', 'Jeder Eintrag geht vom TL_ROOT aus. Wenn Sie zum Beispiel "assets/css" angeben, wird nur der Ordner "TL_ROOT/assests/css/" ignoriert aber nicht die Ordner die zum Beipsiel unter "system/modules/my_extension/assets/css/" liegen.');
$GLOBALS['TL_LANG']['XPL']['folder_blacklist']['1']  = array('Allgemein - Pfad Ende', 'Jeder Eintrag wird automatisch am ende mit einem * versehen. Wenn Sie also zum Beispiel "assets/css" eintrage, würder das System neben dem "assets/css" auch den "assets/css3pie" ignorieren. Daher sollten Sie nach jedem Ordner einen "/" angeben.');
$GLOBALS['TL_LANG']['XPL']['folder_blacklist']['2']  = array('Alle .github auslassen', 'Wenn Sie einen Ordner auslassen wollen, der an jeder stelle auftaucht, können Sie diesen mit Hilfe des "*" Platzhalte eintragen. So würde */.github/ alle github Ordner auslassen. Außer dem in TL_ROOT, dieser müsste mit .github/ direkt angegeben werdem. ');
$GLOBALS['TL_LANG']['XPL']['folder_blacklist']['3']  = array('Alle Ordner mit Datum', 'Wenn Sie zum Beispiel Ordner mit forlaufenden Nummer nicht übertragen wollen, können Sie dies mit dem "*" Platzhalter machen oder einfach den Ordner ohne Zahlen und "/" am Ende angeben. Beispiel "backup/file_", dieser Eintrag würde alle Ordner im Backup Verzeichnis  ignorieren sofern dieser mit "file_" anfangen.');
$GLOBALS['TL_LANG']['XPL']['folder_blacklist']['4']  = array('Platzhalter', 'Anbei eine Liste der Platzhalter: <br /> "?"  Ein belibeges Zeichen <br /> "*"  Belibege viele Zeichen');