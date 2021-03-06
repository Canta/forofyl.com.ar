<?php
/**
*
* @package phpBB Statistics
* @version $Id: stats.php 162 2010-12-11 13:29:18Z marc1706 $
* @copyright (c) 2009 - 2010 Marc Alexander(marc1706) www.m-a-styles.de, (c) TheUniqueTiger - Nayan Ghosh
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @based on: Forum Statistics by TheUniqueTiger - Nayan Ghosh
* @translator (c) ( Marc Alexander - http://www.m-a-styles.de ), thomas.d
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(	
	'STATS'								=> 'phpBB Statistiken',	
	'STATS_EXPLAIN'						=> 'Öffne phpBB Statistiken',
	'STATS_BASIC'						=> 'Basis Statistiken',
	'STATS_BASIC_BASIC'					=> 'Basis Forum-Statistiken',
	'STATS_BASIC_ADVANCED'				=> 'Erweiterte Forum-Statistiken',
	'STATS_BASIC_MISCELLANEOUS'			=> 'Verschiedene Statistiken',
	'STATS_ACTIVITY'					=> 'Forum Aktivität',
	'STATS_ACTIVITY_FORUMS'				=> 'Statistiken Forum',
	'STATS_ACTIVITY_TOPICS'				=> 'Statistiken Themen',
	'STATS_ACTIVITY_USERS'				=> 'Statistiken Benutzer',
	'STATS_CONTRIBUTIONS'				=> 'Forum Anhänge',
	'STATS_CONTRIBUTIONS_ATTACHMENTS'	=> 'Dateianhänge Statistiken',
	'STATS_CONTRIBUTIONS_POLLS'			=> 'Umfragen Statistiken',
	'STATS_PERIODIC'					=> 'Periodische Statistiken',
	'STATS_PERIODIC_DAILY'				=> 'Tägliche Statistiken',
	'STATS_PERIODIC_MONTHLY'			=> 'Monatliche Statistiken',
	'STATS_PERIODIC_HOURLY'				=> 'Stündliche Statistiken',
	'STATS_SETTINGS'					=> 'Statistiken Einstellungen',
	'STATS_SETTINGS_BOARD'				=> 'Statistiken Board-Einstellungen',
	'STATS_SETTINGS_PROFILE'			=> 'Statistiken Profil-Einstellungen',
	'STATS_ADDONS'						=> 'Add-Ons',
	'STATS_ADDONS_MISCELLANEOUS'		=> 'hide',	
	'STATS_DISABLED'					=> ' sind zur Zeit deaktiviert',
	
	'TOTALS'							=> 'Gesamt',
	'OVERALL'							=> 'Übersicht',
	'NONE'								=> 'Keine',
	'LIMIT_PROMPT'						=> 'Anzahl der Top %s, die angezeigt werden sollen',
	'GB'								=> 'GB',
	'AS_ON'								=> 'von %s',
	'DAMAGED_ADDON'						=> 'Das Add-On %1$s ist beschädigt. Die folgenden Variablen existieren nicht: %2$s. Bitte kontaktiere den Autor des Add-Ons.',
	'ADDON_DISABLED'					=> 'Das gewählte Add-On ist zur Zeit deaktiviert.<br /><br />',
	'ADDON_DISABLED_TITLE'				=> 'Add-On deaktiviert.',
	'NO_ADDONS'							=> 'Zur Zeit sind keine Add-Ons installiert.<br /><br />',
	'NO_ADDONS_TITLE'					=> 'Keine installierten Add-Ons',
	
	//basic stats
	'TOTAL_POSTS'						=> 'Gesamt Beiträge',
	'TOTAL_TOPICS'						=> 'Gesamt Themen',
	'TOTAL_USERS'						=> 'Gesamt User',
	'TOTAL_FORUM_CAT'					=> 'Gesamt Kategorien',
	'TOTAL_FORUM_POST'					=> 'Gesamt Foren mit Beiträgen',
	'TOTAL_FORUM_LINK'					=> 'Gesamt Foren-Links',
	'TOTAL_FORUMS'						=> 'Gesamt Foren',
	'TOTAL_ATTACHMENTS'					=> 'Gesamt Anhänge',
	'TOTAL_POLLS'						=> 'Gesamt Umfragen',
	'TOTAL_VIEWS'						=> 'Gesamt Zugriffe auf Themen',
	'TOPICS_GLOBAL'						=> 'Globale Themen',
	'TOPICS_ANNOUNCE'					=> 'Bekanntmachungen',
	'TOPICS_STICKY'						=> 'Wichtige Themen',
	'TOPICS_NORMAL'						=> 'Normale Themen',
	'TOPICS_UNAPPROVED'					=> 'Nicht freigegebene Themen',
	'UNAPPROVED_POSTS'					=> 'Nicht freigegebene Beiträge',
	'USERS_INACTIVE'					=> 'Inaktive Benutzer',
	'USERS_INACTIVE_EXPLAIN'			=> 'Benutzer, die nicht in den vergangenen %d Tagen angemeldet waren',
	'USERS_ACTIVE'						=> 'Aktive Benutzer',
	'USERS_ACTIVE_EXPLAIN'				=> 'Benutzer, die mindestens einmal angemeldet waren in den vergangenen %d Tagen',
	'USERS_TOTAL_BOTS'					=> 'Registrierte Bots',
	'USERS_VISITED_BOTS'				=> 'Bots, die hier waren',
	'AVG_FILES_DAY'						=> 'Durchschnitt Anhänge Tag',
	'AVERAGES'							=> 'Durchschnitt',
	//advanced stats
	'BOARD_BACKGROUND'					=> 'Board Basis',
	'START_DATE'						=> 'Board Startdatum',
	'BOARD_AGE'							=> 'Board Alter',
	'SECOND'							=> 'Sekunde',
	'SECONDS'							=> 'Sekunden',
	'MINUTE'							=> 'Minute',
	'MINUTES'							=> 'Minuten',
	'HOUR'								=> 'Stunde',
	'HOURS'								=> 'Stunden',
	'DAY'								=> 'Tag',
	'DAYS'								=> 'Tage',
	'MONTH'								=> 'Monat',
	'MONTHS'							=> 'Monate',
	'YEAR'								=> 'Jahr',
	'YEARS'								=> 'Jahre',
	'BOARD_VERSION'						=> 'Board Version',
	'GZIP_COMPRESSION'					=> 'GZip Kompression',
	'ON'								=> 'An',
	'OFF'								=> 'Aus',
	'DATABASE'							=> 'Datenbank',
	'DATABASE_SIZE'						=> 'Datenbank Größe',
	'DATABASE_INFO'						=> 'Datenbank Info',
	'FILESYSTEM'						=> 'Dateisystem',
	'ATTACHMENTS_TOTAL'					=> 'Gesamt Anhänge',
	'ATTACHMENTS_SIZE'					=> 'Gesamt Anhänge Größe',
	'AVATARS_TOTAL'						=> 'Gesamt Avatars',
	'AVATARS_SIZE'						=> 'Gesamt Avatars Größe',
	'CACHED_FILES_TOTAL'				=> 'Gesamt Dateien im Cache',
	'CACHED_FILES_SIZE'					=> 'Gesamt Cache Größe',
	'INSTALLED_COMPONENTS'				=> 'Installierte Komponenten',
	'STYLES'							=> 'Styles',
	'IMAGESETS'							=> 'Grafiksammlungen',
	'TEMPLATES'							=> 'Templates',
	'THEMES'							=> 'Themes',
	'LANG_PACKS'						=> 'Sprachpakete',
	'BY'								=> 'von',
	'BOARD_VERSION_SECURE'				=> '3.x.x',
	'SORT_BY_PROMPT'					=> 'Sortiere installierte Komponenten anhand von',
	
	// miscellaneous stats
	'SMILEY'							=> 'Smilies',
	'SMILEY_COUNT'						=> 'Gesamt Smilies',
	'SMILEY_POST_COUNT'					=> 'Smilies, die beim Verfassen eines Beitrages angezeigt werden',
	'TOP_SMILIES_BY_URL'				=> 'Top %d Smilies',
	'TOP_BBCODES'						=> 'Top %d BBCodes',
	'TOP_ICONS'							=> 'Top %d Beitrags-Symbole',
	'WARNING_COUNT'						=> 'Gesamt Verwarnungen',
	'OWN_WARNINGS_COUNT'				=> 'Gesamt erhaltene Verwarnungen',
	'WARNINGS_PER_USER'					=> 'Durchschnitt Verwarnungen pro Benutzer',
	'WARNINGS_PER_DAY'					=> 'Durchschnitt Verwarnungen pro Tag',
	'BBCODE'							=> 'BBCodes',
	'BBCODE_COUNT'						=> 'Gesamt BBCodes',
	'BBCODE_COUNT_CUSTOM'				=> 'Anzahl benutzerdefinierter BBCodes',
	'ICONS'								=> 'Beitrags-Symbole',
	'COMPONENTS_NAME'					=> 'Name',
	'COMPONENTS_ID'						=> 'ID',
	'COMPONENTS_AUTHOR'					=> 'Copyright/Autor',
	'RECOUNT_PROGRESS'					=> '<br />%1$d von %2$d Beiträgen wurden durchsucht. Bitte warte bis das Skript fertig ist.<br /><br />',
	
	//activity - forums
	'COUNT'								=> 'Anzahl',
	'PERCENT'							=> 'Prozent',
	'TOP_FORUMS_BY_TOPICS'				=> 'Top %d Foren (Themen)',
	'TOP_FORUMS_BY_POSTS'				=> 'Top %d Foren (Beiträge)',
	'TOP_FORUMS_BY_POLLS'				=> 'Top %d Foren (Umfragen)',
	'TOP_FORUMS_BY_STICKY'				=> 'Top %d Foren (Wichtige Themen)',
	'TOP_FORUMS_BY_VIEWS'				=> 'Top %d Foren (Zugriffe)',
	'TOP_FORUMS_BY_PARTICIPATION'		=> 'Top %d Foren (Benutzerbeteiligung)',
	'TOP_FORUMS_BY_SUBSCRIPTIONS'		=> 'Top %d Foren (Beobachten)',
	//activity - topics
	'TOP_TOPICS_BY_POSTS'				=> 'Top %d Themen (Beiträge)',
	'TOP_TOPICS_BY_POSTS_PCT_EXPLAIN'	=> 'Prozentualer Anteil der Beiträge in diesem Thema an den Gesamt-Beiträgen.',
	'TOP_TOPICS_BY_POSTS_BAR_EXPLAIN'	=> 'Der gezeigte Balken vergleicht mit dem Thema mit den meisten Beiträgen.',
	'TOP_TOPICS_BY_VIEWS_PCT_EXPLAIN'	=> 'Prozentualer Anteil der angesehenen Themen verglichen mit Gesamt angesehene Themen.',
	'TOP_TOPICS_BY_PARTICIPATION'		=> 'Top %d Themen (Benutzerbeteiligung)',
	'TOP_TOPICS_BY_ATTACHMENTS'			=> 'Top %d Themen (Anhänge)',
	'TOP_TOPICS_BY_VIEWS'				=> 'Top %d Themen (Zugriffe)',
	'TOP_TOPICS_BY_BOOKMARKS'			=> 'Top %d Themen (Lesezeichen)',
	'TOP_TOPICS_BY_SUBSCRIPTIONS'		=> 'Top %d Themen (Beobachten)',
	//activity - users
	'MEMBERS'							=> 'Mitglieder',
	'TOTAL_MEMBERS'						=> 'Gesamt Mitglieder',
	'TOTAL_REG_USERS'					=> 'Gesamt registrierte Benutzer',
	'MOST_ONLINE'						=> 'Meiste Benutzer online',
	'INCLUDING_BOTS'					=> 'incl. Bots',
	'TOTAL_ONLINE'						=> 'Gesamt Benutzer online',
	'ONLINE_ON'							=> 'am',
	'TOTAL_HIDDEN'						=> 'Gesamt unsichtbare Benutzer online',
	'TOTAL_MEMBERS_ONLINE'				=> 'Total members online',
	'TOP_USERS_BY_POSTS'				=> 'Top %d Benutzer (Beiträge)',
	'TOP_USERS_BY_TOPICS'				=> 'Top %d Benutzer (Themen)',
	'TOP_FRIENDS'						=> 'Top %d Freunde',
	'TOP_FOES'							=> 'Top %d ignorierte Mitglieder',
	'TOP_USERS_BY_RECENT_POSTS'			=> 'Top %1$d Benutzer (Beiträge in den letzten %2$d Tagen)',
	'RECENT_POSTS_DAYS_LIMIT_PROMPT'	=> 'Anzahl Tage zur Berechnung neuer Beiträge',
	'WHO_IS_ONLINE_EXPLAIN'				=> 'basierend auf aktive Benutzer während der letzten %d Minuten',
	'RANKS_POSTS'						=> 'Ränge (Spezial-Ränge basieren auf der Anzahl Beiträge)',
	'RANKS'								=> 'Ränge',
	'RANK_MIN_POSTS'					=> 'Minimum Beiträge',
	'MEMBER_COUNT'						=> 'Anzahl Mitglieder',
	'DELETED_USERS'						=> 'Anzahl gelöschter Benutzer',
	//contributions - attachments
	'ATTACHMENTS_ORPHAN'			=> 'verwaiste Anhänge',
	'ATTACHMENTS_ORPHAN_SIZE'		=> 'verwaiste Anhänge Größe',
	'ATTACHMENTS_OR_USERS'			=> 'Anhänge/Benutzer',
	'RECENT_ATTACHMENTS'			=> 'Neueste %d Anhänge',
	'ATTACH_ON'						=> 'an',
	'ATTACH_DETAILS'				=> 'Details',	
	'TOP_ATTACHMENTS_BY_FILETYPE'	=> 'Top %d Anhang-Dateitypen (nach Erweiterung)',
	'ATTACHMENT_FILETYPES'			=> 'Anhänge Dateitypen',
	'TOP_ATTACHMENTS_BY_FILESIZE'	=> 'Top %d Anhänge (Dateigröße)',
	'TOP_ATTACHMENTS_BY_DOWNLOAD'	=> 'Top %d Anhänge (Download)',
	'TOP_USERS_BY_ATTACHMENTS'		=> 'Top %d Benutzer (Anhänge)',
	'TOTAL_DOWNLOADS'				=> 'Gesamt Anhang-Downloads',
	'TOTAL_DOWNLOADS_SIZE'			=> 'Gesamt Downloads Größe',
	//contributions - polls
	'TOTAL_OPEN_POLLS'				=> 'Gesamt offene Umfragen',
	'TOTAL_POLL_VOTES'				=> 'Gesamt Umfragen votes',
	'RECENT_POLLS'					=> 'Neueste %d Umfragen',
	'POLLS'							=> 'Umfragen',	
	'TOP_POLLS_BY_VOTES'			=> 'Top %d Umfragen (votes)',
	'TOTAL_POLLS_VOTED'				=> 'Gesamt Umfragen, in welchen du abgestimmt hast',
	'TOTAL_ACCESSIBLE_POLLS'		=> 'Gesamt Umfragen, auf die du zugreifen darfst',
	//periodic - daily, monthly
	'JANUARY'						=> 'Januar',
	'FEBRUARY'						=> 'Februar',
	'MARCH'							=> 'März',
	'APRIL'							=> 'April',
	'MAY'							=> 'Mai',
	'JUNE'							=> 'Juni',
	'JULY'							=> 'Juli',
	'AUGUST'						=> 'August',
	'SEPTEMBER' 					=> 'September',
	'OCTOBER'						=> 'Oktober',
	'NOVEMBER'						=> 'November',
	'DECEMBER'						=> 'Dezember',
	'PERIODIC_DAY'					=> 'Tag',
	'PERIODIC_MONTH'				=> 'Monat',
	'AVG_POSTS_DAY'					=> 'Durchschnitt Beiträge Tag',	
	'AVG_TOPICS_DAY'				=> 'Durchschnitt Themen Tag',
	'AVG_USER_REGS_DAY'				=> 'Durchschnitt Registrierungen Tag',
	'AVG_POSTS_MONTH'				=> 'Durchschnitt Beiträge Monat',	
	'AVG_TOPICS_MONTH'				=> 'Durchschnitt Themen Monat',
	'AVG_USER_REGS_MONTH'			=> 'Durchschnitt Registrierungen Monat',
	'TOTAL_USER_REGS'				=> 'Gesamt registrierte Benutzer',
	'STATS_MONTH_EXPLAIN'	=> 'Diese Statistiken beziehen sich auf den Monat <strong>%s</strong>',
	'STATS_YEAR_EXPLAIN'	=> 'Diese Statistiken beziehen sich auf das Jahr <strong>%s</strong>',
	'USER_REGS'						=> 'Benutzer Registrierungen',
	'SHOW_STATS_FOR_MONTH'			=> 'Zeige Statistiken für den ausgewählten Monat',
	'SHOW_STATS_FOR_YEAR'			=> 'Zeige Statistiken für das ausgewählte Jahr',
	'ALL'							=> 'Alle',
	//periodic- hourly
	'SELECT_TIME_PERIOD'			=> 'Wähle Periode',
	'PERCENT_OF_TOTAL'				=> '%% von Gesamt Forum %s',
	'PERIODIC_HOUR'					=> 'Stunde',
	'HOURLY_STATS_EXPLAIN'			=> 'Statistiken für <strong>%s</strong>',
	//settings - board
	'OVERRIDE_STYLE_EXPLAIN'		=> 'Die Board-Administration hat festgelegt, dass der Benutzer-Style vom Standard-Style überschrieben wird.',
	'DEFAULT_STYLE_EXPLAIN'			=> 'Der Standard-Style ist <strong>%1$s (%2$s)</strong>, mit welchem Benutzer-Styles überschrieben werden (incl. Bots).',
	'STYLE'							=> 'Style',
	'USERS_INCL_BOTS'				=> 'Benutzer die diesen Style verwenden (incl. Bots)',
	'LANGUAGES_BY_USERS'			=> 'Sprachen (nach Benutzer-Standard)',
	'LANGUAGE'						=> 'Sprache',
	'TIMEZONES_BY_USERS' 			=> 'Zeitzonen (nach Benutzer-Standard)',
	'TIMEZONE'						=> 'Zeitzone',
	'LEGEND_BOLD_ITALIC'			=> 'Das Element in Fettschrift hat den höchsten Wert. Das Element in kursiver Schrift entspricht der Benutzergruppe, der du angehörst.',
	'SINGLE_LANG_EXPLAIN'			=> 'Es ist nur ein Sprachpaket im Forum installiert, welches von allen Benutzern verwendet wird..',
	'DEFAULT_LANG_EXPLAIN'			=> 'Das Standard-Sprachpaket ist <strong>%1$s (%2$s)</strong>.',
	//settings - profile
	'AGE_RANGES'					=> 'Benutzer nach Altersgruppen',
	'AGE_RANGE'						=> 'Altersgruppen',
	'SEL_AGE_INTERVAL_PROMPT'		=> 'Altersgruppenschritte auswählen',
	'USERS_WITH_BIRTHDAY'			=> 'Benutzer, welche ihren Geburtstag eingetragen haben', 
	'USERS_WITH_LOCATION'			=> 'Benutzer, welche ihren Wohnort eingetragen haben',
	'USER_LOCATIONS'				=> 'Benutzer Wohnorte',
	'TOP_USER_LOCATIONS'			=> 'Top %d Benutzer Wohnorte',
	'CUSTOM_PROFILE_FIELD'			=> 'Benutzerdefiniertes Profilfeld',
	'CPF_TOP_X'						=> 'Top %1$d %2$s',
	'TOTAL_VALUES_SET_PROMPT'		=> 'Gesamt Benutzer, die %s eingestellt haben',
	'DEFAULT'						=> 'default',
	
	// viewonline
	'VIEWING_STATS'						=> 'Betrachtet phpBB Statistics',
	
	// error message
	'STATS_NOT_ENABLED'					=> 'phpBB Statistiken sind zur Zeit deaktiviert.',
));
?>