<?php
/** 
*
* ucp [Finnish [Fin]]
*
* @package language
* @copyright (c) 2006 phpBB Group 
* @author 2006-11-14 - Lurttinen@phpbbsuomi.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
    if (!defined('IN_PHPBB'))
    {
       exit;
    }

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'	=> 'Käyttämällä "%1$s" palvelua (jälkeenpäin "me", "meitä", "meidän", "%1$s", "%2$s"), sitoudut noudattamaan seuraavia ehtoja. Mikäli et hyväksy näitä ehtoja, älä rekisteröidy ja/tai käytä "%1$s"-palvelua. Me voimme muuttaa näitä ehtoja koska tahansa ja teemme parhaamme informoidaksemme sinua. On kuitenkin suositeltavaa lukea nämä ehdot säännöllisesti, koska "%1$s"-palvelun käyttö vaatii että hyväksyt nämä ehdot siinä muodossa, kuin ne on päivitetty tai korjattu.<br />
	<br />
	Keskustelufoorumimme käyttää phpBB-ohjelmistoa, (jälkeenpäin "he", "heidät", "heidän", "phpBB-ohjelmisto", "www.phpbb.com", "phpBB Group", "phpBB Tiimit"), joka on julkaistu "<a href="http://www.gnu.org/licenses/gpl.html">General Public License</a>"-lisenssillä (jälkeenpäin "GPL") ja se voidaan ladata osoitteesta <a href="http://www.phpbb.com/">www.phpbb.com</a>. phpBB-ohjelmisto luo vain ympäristön internet-keskustelulle ja GPL-lisenssi kieltää meitä rajoittamasta sivuston sisältöä ja toimintatapaa. Saadaksesi lisätietoa phpBB:stä vieraile osoitteessa: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a>.<br />
	<br />
	Suostut olemaan esittämättä loukkaavaa, vihamielistä, epämoraalista tai muutakaan materiaalia, joka voisi loukata voimassa olevia lakeja oli se sitten omassa maassasi, se maa, johon "%1$s"-palvelin on sijoitettu tai kansainvälisiä lakeja. Toimimalla tätä vastoin voidaan sinut välittömästi ja lopullisesti poistaa järjestelmän käyttäjistä ja tarvittaessa internet-yhteydentarjoajaasi otetaan yhteyttä. Kaikkien viestien IP-osoite tallennetaan näiden ehtojen noudattamisen tarkkailua varten. Hyväksyt, että "%1$s" on oikeus poistaa, muokata, siirtää ja sulkea mikä tahansa keskusteluketju tai viesti niin halutessamme. Suostut myös siihen, että kaikki yllä annettu tieto tallennetaan tietokantaan. Tätä tietoa ei anneta kolmannelle osapuolelle ilman suostumustasi, mutta "%1$s" tai phpBB ei ole vastuussa mahdollisen tietoturvamurron aiheuttamasta tietojen vuodosta ulkopuolisille tahoille.
	',

	'PRIVACY_POLICY'		=> 'Tämä vakuutus selittää yksityiskohtaisesti, miten  "%1$s" ja siihen liittyvät yritykset (jälkeenpäin "me", "meitä", "meidän", "%1$s", "%2$s") ja phpBB:n (jälkeenpäin "he", "heitä", "heidän", "phpBB-ohjelmisto", "www.phpbb.com", "phpBB Group", "phpBB Tiimit") käyttävät sinulta kerättyjä tietoja (jälkeenpäin "sinun tiedot").<br />
	<br />
	Tietojasi kerätään kahdella tavalla: Selaamalla "%1$s"-sivustoa. phpBB-ohjelmisto luo joitakin evästeitä, jotka ovat pieniä tekstitiedostoja. Nämä tiedostot ladataan selaimesi väliaikaisiin tiedostoihin. Ensimmäiset kaksi evästettä sisältävät tiedon käyttäjän yksilöimiseksi (jälkeenpäin "käyttäjän id") ja anonyymin session tunnisteen. (jälkeenpäin "istunto id") Saat automaattiseti myös kolmannen evästeen, kun olet selannut joitakin viestejä "%1$s"-sivustolla ja näitä käytetään tallentamaan lukemiasi vestiketjuja ja näin parantaen käyttökokemustasi.<br />
	<br />
	Saatamme myös luoda phpBB-ohjelmiston ulkopuolisen evästeen "%1$s"-sivustolta, Mutta se on tämän dokumentin ulkopuolella. Tämä on tarkoitettu vain niille sivuille, joilla on phpBB-ohjelmiston luomaa sisältöä. Toinen tapa, jolla keräämme tietoa on se, mitä lähetät. Tämä voi olla, mutta ei rajoita: Viestin lähettäminen anonyyminä käyttäjänä (Jälkeenpäin "anonyymit viestit"), rekisteröityminen "%1$s"-sivustolle (jälkeenpäin "omat tunnuksesi") ja lähettämäsi viestit rekisteröitymisen ja sisäänkirjautumisen jälkeen (jälkeenpäin "omat viestisi").<br />
	<br />
	Käyttäjätiliin tallennetaan ainakin nimesi (jälkeenpäin "käyttäjätunnuksesi"), henkilökohtainen salasana, jolla kirjaudut sisään (jälkeenpäin "salasanasi") ja henkilökohtainen toimiva sähköpostiosoite (jälkeenpäin "sähköpostiosoitteesi"). Käyttäjätilisi "%1$s"-sivustolla on suojattu sen maan tietoturvalailla, jossa palvelin sijaitsee. Kaikki muut tieto käyttäjätunnuksen, salasanan ja sähköpostiosoitteen lisäksi, joita vaadimme rekisteröityessä on meidän hallinnassamme. Kaikissa tapauksissa voit itse päättää mitkä tiedot ovat julkisesti näkyvillä. Voit myös liittyä ja poistua keskustelufoorumin postituslistalta koska tahansa haluat muokkaamalla omia asetuksiasi.<br />
	<br />
	Salasanasi on turvattu koodaamalla se yhdensuuntaisella menetelmällä. On kuitenkin suositeltavaa, että et käytä samaa salasanaa kaikilla käyttämilläsi sivustoilla. Salasanaasi voidaan käyttää kirjautumaan käyttäjätiliisi "%1$s"-sivustolla, joten pidä se huolella tallessa. Missään tapauksessa kukaan "%1$s"-sivustolta, phpBB tai muu kolmas osapuoli ei kysy sinulta salasanaasi. Mikäli unohdat salasanasi. Voit käyttää "unohdin salasanani" toimintoa phpBB-ohjelmistossa. Tämä toiminto pyytää sinua antamaan käyttäjätunnuksesi ja sähköpostiosoitteesi, jonka jälkeen phpBB-ohjelmisto luo uuden salasanan ja voit kirjautua jälleen sisään.<br />
	',
));

// Common language entries
$lang = array_merge($lang, array(
	'ACCOUNT_ACTIVE'				=> 'Käyttäjätunnuksesi on aktivoitu. Kiitoksia rekisteröitymisestä',
	'ACCOUNT_ACTIVE_ADMIN'			=> 'Käyttäjätunnus on aktivoitu',
	'ACCOUNT_ACTIVE_PROFILE'		=> 'Käyttäjätunnuksesi on aktivoitu uudelleen.',
	'ACCOUNT_ADDED'					=> 'Kiitoksia rekisteröitymisestä. Käyttäjätunnuksesi on luotu. Voit kirjautua sisään käyttämällä tunnustasi ja salasanaa.',
	'ACCOUNT_COPPA'					=> 'Käyttäjätunnuksesi on luotu, mutta vaativat vielä vahvistuksen. Ole hyvä ja katso sähköpostistasi lisätietoja.',
	'ACCOUNT_EMAIL_CHANGED'			=> 'Käyttäjätunnuksesi on päivitetty. Tämä keskustelufoorumi vaatii kuitenkin käyttäjätunnusten uudelleenaktivoinnin sähköpostiosoitteen vaihdon yhteydessä. Aktivointiavain on lähetetty uuteen sähköpostiosoitteeseesi. Ole hyvä ja tarkista sähköpostistasi lisäohjeita.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'	=> 'Käyttäjätunnuksesi on päivitetty. Tämä keskustelufoorumi vaatii kuitenkin käyttäjätunnusten uudelleenaktivoinnin ylläpidon taholta sähköpostiosoitteen vaihdon yhteydessä. Ylläpitäjille on lähetetty viesti ja saat tiedon, koska tunnuksesi on aktivoitu uudelleen.',
	'ACCOUNT_INACTIVE'				=> 'Käyttäjätunnuksesi on luotu, mutta vaativat vielä aktivoinnin. Aktivointiviesti on lähetetty antamaasi sähköpostiosoitteeseen. Ole hyvä ja tarkista sähköpostisi vahvistaaksesi käyttäjätunnuksesi.',
	'ACCOUNT_INACTIVE_ADMIN'		=> 'Käyttäjätunnuksesi on luotu, mutta vaativat vielä ylläpidon hyväksynnän. Ylläpidolle on lähetetty sähköpostia ja he kertovat sinulle, kun tunnukset on hyväksytty.',
	'ACTIVATION_EMAIL_SENT'			=> 'Aktivointiviesti on lähetetty sähköpostiisi',
	'ACTIVATION_EMAIL_SENT_ADMIN'	=> 'Aktivointiviesti on lähetetty ylläpitäjän sähköpostiosoitteeseen.',
	'ADD'							=> 'Lisää',
	'ADD_BCC'						=> 'Lisää [BCC]',
	'ADD_FOES'						=> 'Lisää uusia vihamiehiä',
	'ADD_FOES_EXPLAIN'				=> 'Voit lisätä useita käyttäjiä kerralla laittamalla nimet omalle rivilleen',
	'ADD_FOLDER'					=> 'Lisää kansio',
	'ADD_FRIENDS'					=> 'Lisää uusia ystäviä',
	'ADD_FRIENDS_EXPLAIN'			=> 'Voit lisätä useita käyttäjiä kerralla laittamalla nimet omalle rivilleen',
	'ADD_NEW_RULE'					=> 'Lisää uusi sääntö',
	'ADD_RULE'						=> 'Lisää sääntö',
	'ADD_TO'						=> 'Lisää [To]',
	'ADD_USERS_UCP_EXPLAIN'			=> 'Täällä voit lisätä uusia käyttäjiä ryhmään. Voit myös valita tuleeko tästä ryhmästä käyttäjän oletusryhmä. Lisää käyttäjätunnukset omille riveillensä.',
	'ADMIN_EMAIL'					=> 'Ylläpitäjät voivat lähettää minulle tietoa',
	'AGREE'							=> 'Hyväksyn ehdot',
	'ALLOW_PM'						=> 'Salli muiden käyttäjien lähettää minulle yksityisviestejä',
	'ALLOW_PM_EXPLAIN'				=> 'Huomaa, että ylläpitäjät ja valvojat voivat aina lähettää sinulle yksityisviestejä.',
	'ALREADY_ACTIVATED'				=> 'Olet jo aktivoinut tunnuksesi',
	'ATTACHMENTS_EXPLAIN'			=> 'Olet lähettänyt nämä liitetiedostot viestiesi mukana.',
	'ATTACHMENTS_DELETED'			=> 'Liitetiedostot poistettu',
	'ATTACHMENT_DELETED'			=> 'Liitetiedosto poistettu',
	'AVATAR_CATEGORY'				=> 'Kategoria',
	'AVATAR_EXPLAIN'				=> 'Maksimikoko; leveys %1$d pikseliä, korkeus %2$d pikseliä, tiedoston koko %3$.2f KiB.',
	'AVATAR_FEATURES_DISABLED'		=> 'Avatar-toiminnot ovat tällä hetkellä pois käytöstä.',
	'AVATAR_GALLERY'				=> 'Paikallinen galleria',
	'AVATAR_GENERAL_UPLOAD_ERROR'	=> 'En voinut siirtää avataria %s -hakemistoon',
	'AVATAR_NOT_ALLOWED'			=> 'Avatariasi ei voida näyttää, koska niiden käyttö on estetty.',
	'AVATAR_PAGE'					=> 'Sivu',
	'AVATAR_TYPE_NOT_ALLOWED'		=> 'Avatariasi ei voida näyttää, koska sen tyyppi on kielletty.',

	'BACK_TO_DRAFTS'			=> 'Palaa takaisin luonnoksiin',
	'BACK_TO_LOGIN'				=> 'Palaa takaisin kirjautumissivulle',
	'BIRTHDAY'					=> 'Syntymäpäivä',
	'BIRTHDAY_EXPLAIN'			=> 'Saat oman ikäsi näkyviin antamalla syntymävuotesi.',
	'BOARD_DATE_FORMAT'			=> 'Ajan näyttö',
	'BOARD_DATE_FORMAT_EXPLAIN'	=> 'Käytettävä syntaksi vastaa PHP:n <a href="http://www.php.net/date" onclick="this.target=\'_blank\';" title="Avautuu uuteen ikkunaan">date()</a> funktiota',
	'BOARD_DST'					=> 'Kesäaika käytössä',
	'BOARD_LANGUAGE'			=> 'Käytettävä kieli',
	'BOARD_STYLE'				=> 'Käytettävä tyyli',
	'BOARD_TIMEZONE'			=> 'Aikavyöhyke',
	'BOOKMARKS'					=> 'Kirjanmerkit',
	'BOOKMARKS_EXPLAIN'			=> 'Voit lisätä kirjanmerkin myöhempää tarkastelua varten. Voit poistaa kirjanmerkin laittamalla rastin sen vieressä olevaan ruutuun ja painamalla <em>Poista valitut kirjanmerkit</em> nappulaa.',
	'BOOKMARKS_DISABLED'		=> 'Kirjanmerkit ovat poissa käytöstä tällä keskustelufoorumilla',
	'BOOKMARKS_REMOVED'			=> 'Kirjanmerkit poistettu',

	'CANNOT_EDIT_MESSAGE_TIME'	=> 'Et voi enää muokata tai poistaa tätä viestiä',
	'CANNOT_MOVE_TO_SAME_FOLDER'=> 'Viestejä ei voida siirtää poistettavaan kansioon.',
	'CANNOT_MOVE_FROM_SPECIAL'	=> 'Viestejä ei voi siirtää lähtevien kansiosta.',
	'CANNOT_RENAME_FOLDER'		=> 'Tätä kansiota ei voi nimetä uudelleen.',
	'CANNOT_REMOVE_FOLDER'		=> 'Tätä kansiota ei voi poistaa.',
	'CHANGE_DEFAULT_GROUP'		=> 'Vaihda oletusryhmää',
	'CHANGE_PASSWORD'			=> 'Vaihda salasanaa',
    'CLICK_GOTO_FOLDER'         => '%1$sMene “%3$s” kansioon%2$s',
	'CLICK_RETURN_FOLDER'		=> '%1$sPalaa "%3$s" kansioon%2$s',
	'CONFIRMATION'				=> 'Vahvistuskoodi',
	'CONFIRM_CHANGES'			=> 'Varmista muutokset',	
	'CONFIRM_EMAIL'				=> 'Varmista sähköpostiosoite',
	'CONFIRM_EMAIL_EXPLAIN'		=> 'Sähköpostiosoite täytyy varmistaa vain, jos vaihdat sen.',
	'CONFIRM_EXPLAIN'			=> 'Keskustelufoorumin ylläpitäjät haluavat sinun syöttävän varmistuskoodin estääkseen automaattiset rekisteröitymiset. Koodi näkyy alapuolella olevassa kuvassa. Mikäli et jostain syystä näe kuvaa. Ota yhteyttä %skeskustelufoorumin ylläpitäjiin%s.',
	'VC_REFRESH'           		=> 'Anna uusi varmistuskoodi',
	'VC_REFRESH_EXPLAIN'     	=> 'Voit pyytää uuden varmistuskuva, jos tämä on liian hankala.',

	'CONFIRM_PASSWORD'			=> 'Varmista salasana',
	'CONFIRM_PASSWORD_EXPLAIN'	=> 'Salasana täytyy varmistaa vain, jos vaihdat sen.',
	'COPPA_BIRTHDAY'			=> 'Kerro meille koska olet syntynyt ennen kuin jatkat rekisteröitymistä',
	'COPPA_COMPLIANCE'			=> 'COPPA-vahvistus',
	'COPPA_EXPLAIN'				=> 'Huomaa. Käyttäjätunnuksesi luodaan, kun lähetät tämän lomakkeen. Tunnuksiasi ei kuitenkaan aktivoida ennen kuin vanhempasi tai huoltajasi antaa siihen suostumuksensa. Sinulle tulee tarvittava lomake toimintaohjeineen sähköpostiin.',
	'CREATE_FOLDER'				=> 'Lisää kansio...',
	'CURRENT_IMAGE'				=> 'Nykyinen kuva',
	'CURRENT_PASSWORD'			=> 'Nykyinen salasana',
	'CURRENT_PASSWORD_EXPLAIN'	=> 'Laita nykyinen salasanasi, jos haluat muuttaa käyttäjätunnustasi tai sähköpostiosoitettasi.',
	'CURRENT_CHANGE_PASSWORD_EXPLAIN' => 'Tietojen muuttaminen vahvistetaan nykyisellä salasanallasi.',
	'CUR_PASSWORD_EMPTY'		=> 'Et antanut nykyistä salasanaasi.',
	'CUR_PASSWORD_ERROR'		=> 'Antamasi salasana on virheellinen.',
	'CUSTOM_DATEFORMAT'			=> 'Mukautettu...',

	'DEFAULT_ACTION'			=> 'Oletustoimenpide',
	'DEFAULT_ACTION_EXPLAIN'	=> 'Tämä toiminto suoritetaan, jos mikään ylläolevista vaihtoehdoista ei päde',
	'DEFAULT_ADD_SIG'			=> 'Lisää allekirjoitus automaattisesti',
	'DEFAULT_BBCODE'			=> 'BBcode on aina päällä',
	'DEFAULT_NOTIFY'			=> 'Ilmoita aina vastauksista',
	'DEFAULT_SMILIES'			=> 'Hymiöt ovat aina päällä',
	'DEFINED_RULES'				=> 'määritä säännöt',
	'DELETED_TOPIC'				=> 'Viestiketju on poistettu',
	'DELETE_ATTACHMENT'			=> 'Poista liitetiedosto',
	'DELETE_ATTACHMENTS'		=> 'Poista liitetiedostot',
	'DELETE_ATTACHMENT_CONFIRM'	=> 'Haluatko varmasti poistaa tämän liitetiedoston?',
	'DELETE_ATTACHMENTS_CONFIRM'=> 'Haluatko varmasti poistaa nämä liitetiedostot?',
	'DELETE_AVATAR'				=> 'Poista kuva',
	'DELETE_COOKIES_CONFIRM'	=> 'Haluatko varmasti poistaa tämän keskustelufoorumin asettamat evästeet?',
	'DELETE_MARKED_PM'			=> 'Poista valitut viestit',
	'DELETE_MARKED_PM_CONFIRM'	=> 'Halautko varmasti poistaa kaikki valitut viestit?',
	'DELETE_OLDEST_MESSAGES'	=> 'Poista vanhimmat viestit',
	'DELETE_MESSAGE'			=> 'Poista viesti',
	'DELETE_MESSAGE_CONFIRM'	=> 'Haluatko varmasti poistaa tämän yksityisviestin?',
	'DELETE_MESSAGES_IN_FOLDER'	=> 'Poista kaikki viestit jotka ovat poistettavassa kansiossa',
	'DELETE_RULE'				=> 'Poista sääntö',
	'DELETE_RULE_CONFIRM'		=> 'Haluatko varmasti poistaa tämän säännön?',
	'DEMOTE_SELECTED'			=> 'Alenna valituista',
	'DISABLE_CENSORS'			=> 'Käytä sanojen sensurointia',
	'DISPLAY_GALLERY'			=> 'Näytä galleria',
	'DOMAIN_NO_MX_RECORD_EMAIL'	=> 'Antamallasi sähköpostin toimialueella ei ole kelvollista MX tietuetta.',
	'DOWNLOADS'					=> 'Lataukset',
	'DRAFTS_DELETED'			=> 'Kaikki valitut luonnokset on poistettu.',
	'DRAFTS_EXPLAIN'			=> 'Täällä voit katsoa, muokata ja poistaa valitsemiasi luonnoksia.',
	'DRAFT_UPDATED'				=> 'Luonnos on päivitetty.',

	'EDIT_DRAFT_EXPLAIN'		=> 'Täällä voit muokata luonnoksiasi. luonnoksissa ei ole mukana äänestystä tai liitetiedostoja.',
	'EMAIL_BANNED_EMAIL'		=> 'Antamasi sähköpostiosoitteen käyttäminen ei ole sallittu.',
	'EMAIL_INVALID_EMAIL'		=> 'Antamasi sähköpostiosoite on epäkelpo.',
	'EMAIL_REMIND'				=> 'Tämän täytyy olla sama sähköpostiosoite, jonka annoit rekisteröityessäsi.',
	'EMAIL_TAKEN_EMAIL'			=> 'Antamasi sähköpostiosoite on jo käytössä.',
	'EMPTY_DRAFT'				=> 'Sinun täyty antaa viesti lähettääksesi muutokset',
	'EMPTY_DRAFT_TITLE'			=> 'Sinun täytyy antaa luonnokselle otsikko',
	'EXPORT_AS_XML'				=> 'Vie XML tiedostoon',
	'EXPORT_AS_CSV'				=> 'Vie CSV tiedostoon',
	'EXPORT_AS_CSV_EXCEL'		=> 'Vie CSV (Excel) tiedostoon',
	'EXPORT_AS_TXT'				=> 'Vie TXT tiedostoon',
	'EXPORT_AS_MSG'				=> 'Vie MSG tiedostoon',
	'EXPORT_FOLDER'				=> 'Vie valitussa muodossa',

	'FIELD_REQUIRED'					=> 'Kenttä “%s” täytyy täyttää.',
	'FIELD_TOO_SHORT'					=> 'Kenttä "%1$s" on liian lyhyt. Vaaditaan vähintään %2$d merkkiä.',
	'FIELD_TOO_LONG'					=> 'Kenttä "%1$s" on liian pitkä. Merkkien maksimimäärä on %2$d kpl.',
	'FIELD_TOO_SMALL'					=> '"%1$s" arvo on liian matala. Minimi arvo on %2$d .',
	'FIELD_TOO_LARGE'					=> '"%1$s" arvo on liian suuri. Maksimi arvo on %2$d .',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'Kentässä “%s” on epäkelpoja merkkejä. Vain numerot ovat sallittuja.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'Kentässä “%s” on epäkelpoja merkkejä. Vain kirjoitusmerkit ovat sallittuja.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'Kentässä “%s” on epäkelpoja merkkejä. Vain kirjaimet, numerot, välilyönnit tai -+_[] merkit ovat sallittuja.',
	'FIELD_INVALID_DATE'				=> 'Kentässä “%s” on epäkelpo päivämäärä.',
    'FIELD_INVALID_VALUE'            	=> 'Kentässä “%s” on epäkelpo arvo.',

	'FOE_MESSAGE'				=> 'Vihamiehen lähettämä viesti',
	'FOES_EXPLAIN'				=> 'Vihamiehet ovat käyttäjiä joita ei huomioida. Näiden käyttäjien kirjoittamia viestejä ei näytetä ja yksityisviestit eivät ole sallittu. Huomaa, että et voi lisätä valvojia tai ylläpitäjiä listaan.',
	'FOES_UPDATED'				=> 'Vihamiehet ovat päivitetty',
	'FOLDER_ADDED'				=> 'Kansio lisätty',
	'FOLDER_MESSAGE_STATUS'		=> '%1$d - %2$d viestiä tallennettu',
	'FOLDER_NAME_EMPTY'			=> 'Tälle kansiolle on annettava nimi.',
	'FOLDER_NAME_EXIST'			=> '<strong>%s</strong> Kansio on jo olemassa',
	'FOLDER_OPTIONS'			=> 'Kansion vaihtoehdot',
	'FOLDER_RENAMED'			=> 'Kansion nimi vaihdettu',
	'FOLDER_REMOVED'			=> 'Kansio poistettu',
	'FOLDER_STATUS_MSG'			=> '%1$d%% tilasta käytössä (%2$d viestiä %3$d:sta tallennettu)',
	'FORWARD_PM'				=> 'Lähetä yksityisviesti eteenpäin',
	'FORCE_PASSWORD_EXPLAIN'	=> 'Vaihda salasanasi jatkaaksesi keskustelufoorumin selausta',
	'FRIEND_MESSAGE'			=> 'Ystävän lähettämä viesti',
	'FRIENDS'					=> 'Ystävät',
	'FRIENDS_EXPLAIN'			=> 'Ystävälista helpottaa yhteydenpitoa henkilöihin, joiden kanssa olet usein tekemisissä. Ystävien lähettämät viestit voidaan myös korostaa mikäli käytössä oleva tyyli tällaista toimintoa tukee.',
	'FRIENDS_OFFLINE'			=> 'Poissa',
	'FRIENDS_ONLINE'			=> 'Paikalla',
	'FRIENDS_UPDATED'			=> 'Ystävälista on päivitetty',
	'FULL_FOLDER_OPTION_CHANGED'=> 'Täyden kansion vaihtoehdot ovat päivitetty',
	'FWD_ORIGINAL_MESSAGE'		=> '-------- Alkuperäinen viesti --------',
	'FWD_SUBJECT'				=> 'Otsikko: %s',
	'FWD_DATE'					=> 'PVM: %s',
	'FWD_FROM'					=> 'Lähettäjä: %s',
	'FWD_TO'					=> 'Vastaanottaja: %s',

	'GLOBAL_ANNOUNCEMENT'		=> 'Yleistiedote',

	'HIDE_ONLINE'				=> 'Piilota paikallaolo',
	'HIDE_ONLINE_EXPLAIN'		=> 'Vaihtoehto "Ei" tulee voimaan, kun seuraavan kerran vierailet foorumilla.',
	'HOLD_NEW_MESSAGES'			=> 'Älä vastaanota uusia viestejä (Uudet viestit pidätetään, kunnes saat lisää tilaa)',
	'HOLD_NEW_MESSAGES_SHORT'	=> 'Uudet viestit pidätetään',

	'IF_FOLDER_FULL'			=> 'Jos kansio on täysi',
	'IMPORTANT_NEWS'			=> 'Tärkeät tiedotteet',
	'INVALID_USER_BIRTHDAY'			=> 'Antamasi päiväys ei ole kelvollinen syntymäpäivä.',
	'INVALID_CHARS_USERNAME'	=> 'Käyttäjätunnuksessa on kiellettyjä merkkejä.',
	'INVALID_CHARS_NEW_PASSWORD'=> 'Salasanassa ei ole vaadittuja merkkejä.',
    'ITEMS_REQUIRED'			=> 'Tähdellä merkityt kentät ovat pakollisia ja ne täytyy täyttää',

	'JOIN_SELECTED'				=> 'Liity valittuihin',

	'LANGUAGE'					=> 'Kieli',
	'LINK_REMOTE_AVATAR'		=> 'Linkitä toiselta sivustolta',
	'LINK_REMOTE_AVATAR_EXPLAIN'=> 'Kirjoita haluamasi avatar-kuvan osoite.',
	'LINK_REMOTE_SIZE'			=> 'Avatarin koko',
	'LINK_REMOTE_SIZE_EXPLAIN'	=> 'Määrittele avatarin leveys ja korkeus. Jätä tyhjäksi automaattista tunnistusta varten.',
	'LOGIN_EXPLAIN_UCP'			=> 'Ole hyvä ja kirjaudu sisään muokataksesi omia asetuksiasi',
	'LOGIN_REDIRECT'			=> 'Olet kirjautunut sisään.',
	'LOGOUT_FAILED'				=> 'Uloskirjautuminen ei onnistunut, koska pyyntösi ei vastannut istuntoa. Ole hyvä ja ota yhteys keskustelufoorumin ylläpitäjiin, mikäli tämä ongelma jatkuu.',
	'LOGOUT_REDIRECT'			=> 'Olet kirjautunut ulos.',

	'MARK_IMPORTANT'				=> 'Merkitse tärkeäksi',
	'MARKED_MESSAGE'				=> 'Merkitty viesti',
	'MAX_FOLDER_REACHED'			=> 'Olet lisännyt maksimimäärän kansioita',
	'MESSAGE_BY_AUTHOR'				=> 'Lähettäjä:',
	'MESSAGE_COLOURS'				=> 'Viestin värit',
	'MESSAGE_DELETED'				=> 'Viesti poistettu',
	'MESSAGE_HISTORY'				=> 'Viestihistoria',
	'MESSAGE_REMOVED_FROM_OUTBOX'	=> 'Viestin lähettäjä on poistanut tämän viestin ennen kuin se voitiin toimittaa perille',
	'MESSAGE_SENT_ON'				=> 'päivämäärä:',
	'MESSAGE_STORED'				=> 'Viestin lähetys onnistui',
	'MESSAGE_TO'					=> 'Vastaanottaja',
	'MESSAGES_DELETED'				=> 'Viestit on poistettu',
	'MOVE_DELETED_MESSAGES_TO'		=> 'Siirrä poistettavan kansion viestit',
	'MOVE_DOWN'						=> 'Siirrä alaspäin',
	'MOVE_MARKED_TO_FOLDER'			=> 'Siirrä valitut %s',
	'MOVE_PM_ERROR'					=> 'Viestien siirrossa tapahtui virhe, vain %1d / %2d viestistä on siirretty.',
	'MOVE_TO_FOLDER'				=> 'Siirrä kansioon',
	'MOVE_UP'						=> 'Siirrä ylöspäin',
	'NEW_EMAIL_CONFIRM_EMPTY'		=> 'Et varmistanut sähköpostiosoitettasi.',

	'NEW_EMAIL_ERROR'				=> 'Antamasi sähköpostiosoitteet eivät ole samanlaisia.',
	'NEW_FOLDER_NAME'				=> 'Uuden kansion nimi',
	'NEW_PASSWORD'					=> 'Salasana',
	'NEW_PASSWORD_CONFIRM_EMPTY'	=> 'Et varmistanut salasanaasi.',
	'NEW_PASSWORD_ERROR'			=> 'Antamasi salasanat eivät ole samanlaisia.',
	'NOTIFY_METHOD'					=> 'Ilmoitustapa',
	'NOTIFY_METHOD_BOTH'			=> 'kummatkin',
	'NOTIFY_METHOD_EMAIL'			=> 'Vain sähköposti',
	'NOTIFY_METHOD_EXPLAIN'			=> 'Tämän keskustelufoorumin kautta lähetettyjen viestien toimitustapa.',
	'NOTIFY_METHOD_IM'				=> 'Vain Jabber',
	'NOTIFY_ON_PM'					=> 'Ilmoita uusista yksityisviesteistä sähköpostilla',
 	'NOT_ADDED_FRIENDS_ANONYMOUS'	=> 'Et voi lisätä anonyymiä käyttäjää ystäväksi.',
	'NOT_ADDED_FRIENDS_BOTS'		=> 'Et voi lisätä botteja kaveriksesi.',
 	'NOT_ADDED_FRIENDS_FOES'		=> 'Et voi lisätä käyttäjiä ystäviksi, koska he ovat merkitty vihamiehiksi',
 	'NOT_ADDED_FRIENDS_SELF'		=> 'Et voi lisätä itseasi ystävälistalle',
 	'NOT_ADDED_FOES_MOD_ADMIN'		=> 'Et voi lisätä ylläpitäjiä tai valvojia vihamiehiksi.',
 	'NOT_ADDED_FOES_ANONYMOUS'		=> 'Et voi lisätä anonyymiä käyttäjää vihamieheksi.',
 	'NOT_ADDED_FOES_BOTS'			=> 'Et voi lisätä botteja vihamiehiksi.',
	'NOT_ADDED_FOES_FRIENDS'		=> 'Et voi lisätä käyttäjiä vihamiehiksi, jos he ovat merkitty ystäviksi.',
 	'NOT_ADDED_FOES_SELF'			=> 'Et voi lisätä itseäsi vihamieheksi.',
	'NOT_AGREE'						=> 'En hyväksy',
	'NOT_ENOUGH_SPACE_FOLDER'		=> 'Kohdekansio “%s” on täynnä. valitsemaasi toimenpidettä ei voitu suorittaa.',
	'NOT_MOVED_MESSAGE'				=> 'Sinulla on 1 kpl yksityisviestejä pidätettynä, koska kansiosi on täynnä.',
	'NOT_MOVED_MESSAGES'			=> 'Sinulla on %d kappaletta yksityisviestejä pidätettynä, koska kansiosi on täynnä.',
	'NO_ACTION_MODE'				=> 'Viestin toimintoa ei ole määritelty',
	'NO_AUTHOR'						=> 'Tälle viestille ei ole määritelty lähettäjää',
	'NO_AVATAR_CATEGORY'			=> 'Ei',

	'NO_AUTH_DELETE_MESSAGE'		=> 'Et voi poistaa yksityisviestejä.',
	'NO_AUTH_EDIT_MESSAGE'			=> 'Et voi muokata yksityisviestejä.',
	'NO_AUTH_FORWARD_MESSAGE'		=> 'Et voi lähettää yksityisviestejä eteenpäin.',
	'NO_AUTH_GROUP_MESSAGE'			=> 'Et voi lähettää yksityisviestejä käyttäjäryhmille.',
    'NO_AUTH_PASSWORD_REMINDER'     => 'Et voi pyytää uutta salasanaa.',
    'NO_AUTH_READ_HOLD_MESSAGE'     => 'Et voi lukea pidätettyjä yksityisviestejä.',
	'NO_AUTH_READ_MESSAGE'			=> 'Et voi lukea ykasityisviestejä.',
	'NO_AUTH_READ_REMOVED_MESSAGE'	=> 'Et voi lukea tätä yksitysiviestiä, koska lähettäjä on poistanut sen.',
	'NO_AUTH_SEND_MESSAGE'			=> 'Et voi lähettää yksityisviestejä.',
	'NO_AUTH_SIGNATURE'				=> 'Et voi lisätä allekirjoitusta',

	'NO_BCC_RECIPIENT'			=> 'Ei',
	'NO_BOOKMARKS'				=> 'Ei kirjanmerkkejä.',
	'NO_BOOKMARKS_SELECTED'		=> 'Et ole valinnut yhtään kirjanmerkkiä',
	'NO_EDIT_READ_MESSAGE'		=> 'Yksityisviestiä ei voi muokata, sillä vastaanottaja on jo lukenut sen.',
	'NO_EMAIL_USER'				=> 'Antamaasi sähköpostiosoitetta tai käyttäjätunnusta ei löytynyt',
	'NO_FOES'					=> 'Et ole määritellyt vihamiehiä',
	'NO_FRIENDS'				=> 'Et ole määritellyt ystäviä',
	'NO_FRIENDS_OFFLINE'		=> 'Ei ystäviä poissa',
	'NO_FRIENDS_ONLINE'			=> 'Ei ystäviä paikalla',
	'NO_GROUP_SELECTED'			=> 'Käyttäjäryhmää ei ole määritelty',
	'NO_IMPORTANT_NEWS'			=> 'Ei tärkeitä tiedotteita',
	'NO_MESSAGE'				=> 'Yksityisviestiä ei löytynyt',
	'NO_NEW_FOLDER_NAME'		=> 'Anna uuden kansion nimi',
	'NO_NEWER_PM'				=> 'Ei uudempia viestejä',
	'NO_OLDER_PM'				=> 'Ei vanhempia viestejä',
	'NO_PASSWORD_SUPPLIED'		=> 'Et voi kirjautua sisään ilman salasanaa.',
	'NO_RECIPIENT'				=> 'Vastaanottajaa ei ole määritelty',
	'NO_RULES_DEFINED'			=> 'Sääntöjä ei ole määritelty',
	'NO_SAVED_DRAFTS'			=> 'Ei tallennettuja luonnoksia',
	'NO_TO_RECIPIENT'			=> 'Ei',
	'NO_WATCHED_FORUMS'			=> 'Et seuraa yhtäkään keskustelualuetta.',
    'NO_WATCHED_SELECTED'       => 'Et valinnut yhtään seurannassa olevaa aluetta tai viestiä.',
	'NO_WATCHED_TOPICS'			=> 'Et seuraa yhtäkään viestiketjua.',

	'PASS_TYPE_ALPHA_EXPLAIN'	=> 'Salasanan pituus täytyy olla %1$d ja %2$d merkin väliltä. Siinä tulee olla ISOJA ja pieniä kirjaimia, sekä numeroita',
	'PASS_TYPE_ANY_EXPLAIN'		=> 'Pituuden täytyy olla %1$d ja %2$d merkin väliltä.',
	'PASS_TYPE_CASE_EXPLAIN'	=> 'Salasanan pituus täytyy olla %1$d ja %2$d merkin väliltä. Siinä tulee sekoittaa ISOJA ja pieniä kirjaimia',
	'PASS_TYPE_SYMBOL_EXPLAIN'	=> 'Salasanan pituus täytyy olla %1$d ja %2$d merkin väliltä. Siinä tulee olla ISOJA ja pieniä kirjaimia, sekä numeroita ja symboleita',
	'PASSWORD'					=> 'Salasana',
	'PASSWORD_ACTIVATED'		=> 'uusi salasanasi on aktivoitu',
	'PASSWORD_UPDATED'			=> 'salasanasi on lähetetty tiedoissasi olevaan sähköpostiosoitteeseen.',
	'PERMISSIONS_RESTORED'		=> 'Alkuperäiset oikeudet palautettu.',
	'PERMISSIONS_TRANSFERRED'	=> 'Oikeudet on siirretty käyttäjältä <strong>%s</strong> ja voit nyt selata keskustelufoorumia tämän käyttäjän oikeuksilla.<br />Huomaa, että ylläpitäjän oikeuksia ei ole siirretty. Voit vaihtaa omat oikeudet takaisin koska haluat.',
	'PM_DISABLED'				=> 'Yksityisviestit ovat poissa käytöstä.',
	'PM_FROM'					=> 'Lähettäjä',
	'PM_FROM_REMOVED_AUTHOR'	=> 'Tämän viestin on lähettänyt käyttäjä, jonka tunnuksia ei enää ole.',
	'PM_ICON'					=> 'Kuvake',
	'PM_INBOX'					=> 'Saapuneet',
	'PM_NO_USERS'				=> 'Pyytämääsi käyttäjää ei ole olemassa.',
	'PM_OUTBOX'					=> 'Lähtevät',
	'PM_SENTBOX'				=> 'Lähetetyt',
	'PM_SUBJECT'				=> 'Viestin otsikko',
	'PM_TO'						=> 'Lähetä',
	'PM_USERS_REMOVED_NO_PM'	=> 'Joitain käyttäjiä ei voitu lisätä vastaanottajiksi, koska he ovat ottaneet yksityisviestit pois käytöstä.',
	'POPUP_ON_PM'				=> 'Ilmoita uudet yksityisviestit ponnahdusikkunalla',
	'POST_EDIT_PM'				=> 'Muokkaa viestiä',
	'POST_FORWARD_PM'			=> 'Lähetä viesti eteenpäin',
	'POST_NEW_PM'				=> 'Lähetä viesti',
	'POST_PM_LOCKED'			=> 'Yksityisviestit ovat lukittuna',
	'POST_PM_POST'				=> 'Lainaa viestiä',
	'POST_QUOTE_PM'				=> 'Lainaa viestiä',
	'POST_REPLY_PM'				=> 'Vastaa viestiin',
	'PRINT_PM'					=> 'Tulostusnäkymä',
	'PREFERENCES_UPDATED'		=> 'Asetuksesi on päivitetty.',
	'PROFILE_INFO_NOTICE'		=> 'Huomaa, että nämä tiedot näkyvät myös muille käyttäjille. Ole varovainen antaessasi henkilökohtaista tietoa. Tähdellä (*) merkityt kentät ovat pakollisia.',
	'PROFILE_UPDATED'			=> 'Profiilisi on päivitetty.',

	'RECIPIENT'							=> 'Vastaanottaja',
	'RECIPIENTS'						=> 'Vastaanottajat',
	'REGISTRATION'						=> 'Rekisteröityminen',
	'RELEASE_MESSAGES'					=> '%sVapauta kaikki pidätetyt viestit%s... Viestit toimitetaan oikeisiin kansiooihin, mikäli tilaa on vapaana.',
	'REMOVE_ADDRESS'					=> 'Poista osoite',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Poista valitut kirjanmerkit',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM' => 'Haluatko varmasti poistaa valitut kirjanmerkit?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Poista valitut kirjanmerkit',
	'REMOVE_FOLDER'						=> 'Poista kansio',
	'REMOVE_FOLDER_CONFIRM'				=> 'Haluatko varmasti poistaa tämän kansion?',
	'RENAME'							=> 'Nimeä uudelleen',
	'RENAME_FOLDER'						=> 'Nimeä kansio uudelleen',
	'REPLIED_MESSAGE'					=> 'Vastasit viestiin',
	'REPLY_TO_ALL'						=> 'Vastaa lähettäjälle ja kaikille vastaanottajille.',
	'REPORT_PM'							=> 'Ilmoita yksityisviesti',
	'RESIGN_SELECTED'					=> 'Eroa valituista',
	'RETURN_FOLDER'						=> '%1$sPalaa edelliseen kansioon%2$s',
	'RETURN_UCP'						=> '%sPalaa omiin asetuksiin%s',
	'RULE_ADDED'						=> 'Sääntö lisätty',
	'RULE_ALREADY_DEFINED'				=> 'Tämä sääntö on jo määritelty',
	'RULE_DELETED'						=> 'sääntö poistettu',
	'RULE_LIMIT_REACHED'				=> 'Et voi luoda uutta YV-sääntöä. Sinulla on jo maksimimäärä sääntöjä käytössä.',
	'RULE_NOT_DEFINED'					=> 'Sääntöä ei ole määritelty oikein',
	'RULE_REMOVED_MESSAGE'				=> 'Yksityisviestien suodattimet ovat poistaneet yhden viestin.',
	'RULE_REMOVED_MESSAGES'				=> 'Yksityisviestien suodattimet ovat poistaneet %d viestiä.',

	'SAME_PASSWORD_ERROR'		=> 'Antamasi uusi salasana on sama, kuin nykyinen salasanasi',
	'SEARCH_YOUR_POSTS'			=> 'Katso omia viestejäsi',
	'SEND_PASSWORD'				=> 'Lähetä salasana',
	'SENT_AT'					=> 'Lähetetty',
	'SHOW_EMAIL'				=> 'Käyttäjät voivat ottaa minuun yhteyttä sähköpostilla',
	'SIGNATURE_EXPLAIN'			=> 'Voit lisätä allekirjoituksen kirjoittamasi viestin perään. Allekirjoituksen pituus on rajoitettu %d merkkiin',
	'SIGNATURE_PREVIEW'			=> 'Allekirjoituksesi näyttää tältä',
	'SIGNATURE_TOO_LONG'		=> 'Allekirjoituksesi on liian pitkä.',
	'SORT'						=> 'Järjestä',
	'SORT_COMMENT'				=> 'Tiedoston kommentti ',
	'SORT_DOWNLOADS'			=> 'Lataukset',
	'SORT_EXTENSION'			=> 'Tunniste',
	'SORT_FILENAME'				=> 'Tiedoston nimi',
	'SORT_POST_TIME'			=> 'Lähetyksen kellonaika',
	'SORT_SIZE'					=> 'Tiedoston koko',

	'TIMEZONE'					=> 'Aikavyöhyke',
	'TO'						=> 'Vastaanottaja',
	'TOO_MANY_RECIPIENTS'		=> 'Yritit lähettää yksityisviestin liian monelle vastaanottajalle.',
	'TOO_MANY_REGISTERS'		=> 'Olet yrittänyt rekisteröityä liian monta kertaa. Yritä myöhemmin uudestaan.',

	'UCP'						=> 'Omat asetukset',
	'UCP_ACTIVATE'				=> 'Aktivoi tunnukset',
	'UCP_ADMIN_ACTIVATE'		=> 'Huomaa, että antamasi sähköpostiosoitteen tulee olla toimiva, jotta tunnuksesi voidaan aktivoida. Ylläpitäjä tarkistaa tietosi ja ilmoittaa hyväksymisestä sähköpostilla.',
	'UCP_AIM'					=> 'AOL Instant Messenger',
	'UCP_ATTACHMENTS'			=> 'Liitetiedostot',
	'UCP_COPPA_BEFORE'			=> 'Ennen %s',
	'UCP_COPPA_ON_AFTER'		=> 'Samaan aikaan, tai jälkeen %s',
	'UCP_EMAIL_ACTIVATE'		=> 'Huomaa, että antamasi sähköpostiosoitteen tulee olla toimiva, jotta tunnuksesi voidaan aktivoida. Saat sähköpostin antamaasi osoitteeseen, jossa on mukana aktivointilinkki tunnuksellesi. Sinun täytyy klikata tuota linkkiä ennen kuin voit kirjautua sisään.',
	'UCP_ICQ'					=> 'ICQ numero',
	'UCP_JABBER'				=> 'Jabber osoite',

	'UCP_MAIN'					=> 'Yleiset',
	'UCP_MAIN_ATTACHMENTS'		=> 'Hallinnoi liitetiedostoja',
	'UCP_MAIN_BOOKMARKS'		=> 'Kirjanmerkit',
	'UCP_MAIN_DRAFTS'			=> 'Luonnokset',
	'UCP_MAIN_FRONT'			=> 'Etusivu',
	'UCP_MAIN_SUBSCRIBED'		=> 'Seuratut',

	'UCP_MSNM'					=> 'WL/MSN Messenger',
	'UCP_NO_ATTACHMENTS'		=> 'Et ole lähettänyt yhtään tiedostoa',

	'UCP_PREFS'					=> 'Asetukset',
	'UCP_PREFS_PERSONAL'		=> 'Omat asetukset',
	'UCP_PREFS_POST'			=> 'Viestien lähetys',
	'UCP_PREFS_VIEW'			=> 'Viestien näyttö',
	
	'UCP_PM'					=> 'Yksityisviestit',
	'UCP_PM_COMPOSE'			=> 'Kirjoita viesti',
	'UCP_PM_DRAFTS'				=> 'Luonnokset',
	'UCP_PM_OPTIONS'			=> 'Säännöt, kansiot ja asetukset',
	'UCP_PM_POPUP'				=> 'Yksityisviestit',
	'UCP_PM_POPUP_TITLE'		=> 'Ponnahdusikkuna',
	'UCP_PM_UNREAD'				=> 'Lukemattomat viestit',
	'UCP_PM_VIEW'				=> 'Näytä viestit',

	'UCP_PROFILE'				=> 'Profiili',
	'UCP_PROFILE_AVATAR'		=> 'Avatar',
	'UCP_PROFILE_PROFILE_INFO'	=> 'Profiilisi',
	'UCP_PROFILE_REG_DETAILS'	=> 'Kirjautuminen',
	'UCP_PROFILE_SIGNATURE'		=> 'Allekirjoitus',

	'UCP_USERGROUPS'			=> 'Käyttäjäryhmät',
	'UCP_USERGROUPS_MEMBER'		=> 'Jäsenyydet',
	'UCP_USERGROUPS_MANAGE'		=> 'Hallitse ryhmiä',

	'UCP_REGISTER_DISABLE'			=> 'Uuden tunnuksen luominen ei ole tällä hetkellä mahdollista.',
	'UCP_REMIND'					=> 'Lähetä salasana',
	'UCP_RESEND'					=> 'Lähetä aktivointiviesti',
	'UCP_WELCOME'					=> 'Tervetuloa omiin asetuksiin. Täällä voit tarkastella ja muokata omaa profiiliasi, asetuksiasi, seurattuja keskustelualueita ja viestiketjuja. Voit lähettää yksityisviestejä toisille käyttäjille mikäli tämä toiminto on käytössä. Muista lukea tärkeät tiedotteet, ennen kuin jatkat eteenpäin.',
	'UCP_YIM'						=> 'Yahoo Messenger',
	'UCP_ZEBRA'						=> 'Ystävät ja vihamiehet',
	'UCP_ZEBRA_FOES'				=> 'Vihamiehet',
	'UCP_ZEBRA_FRIENDS'				=> 'Ystävät',
	'UNDISCLOSED_RECIPIENT'			=> 'Vastaanottajaa ei kerrottu',
	'UNKNOWN_FOLDER'				=> 'Tuntematon kansio',
	'UNWATCH_MARKED'				=> 'Lopeta seuranta',
	'UPLOAD_AVATAR_FILE'			=> 'Siirrä omalta koneeltasi',
	'UPLOAD_AVATAR_URL'				=> 'Kopioi osoitteesta',
	'UPLOAD_AVATAR_URL_EXPLAIN'		=> 'Anna avatar-kuvan osoite. Kuva kopioidaan tämän sivuston palvelimelle.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'	=> 'Käyttäjätunnuksessa täytyy olla vähintään %1$d merkkiä ja maksimissaan %2$d merkkiä. Voit käyttää vain kirjaimia ja numeroita',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'=> 'Käyttäjätunnuksen pituus täytyy olla %1$d ja %2$d merkin väliltä ja siinä tulee olla kirjaimia, numeroita ,välilyöntejä tai -+_[] merkkejä.',
	'USERNAME_ASCII_EXPLAIN'		=> 'Käyttäjätunnuksen pituus täytyy olla %1$d ja %2$d merkin väliltä ja käyttää ainoastaan ASCII merkkejä, eli ei symboleja',
	'USERNAME_LETTER_NUM_EXPLAIN'	=> 'Käyttäjätunnuksen pituus täytyy olla %1$d ja %2$d merkin väliltä ja käyttää ainoastaan kirjaimia ja numeroita',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'=> 'Käyttäjätunnuksen pituus täytyy olla %1$d ja %2$d merkin väliltä ja käyttää kirjaimia, numeroita, välilyöntiä tai -+_[] merkkejä.',
	'USERNAME_CHARS_ANY_EXPLAIN'	=> 'Pituuden täytyy olla %1$d ja %2$d merkin väliltä.',
	'USERNAME_TAKEN_USERNAME'		=> 'Valitsemasi käyttäjätunnus on jo olemassa. Ole hyvä ja valitse toinen.',
	'USERNAME_DISALLOWED_USERNAME'	=> 'Antamasi käyttäjätunnus on porttikiellossa.',
	'USER_NOT_FOUND_OR_INACTIVE'	=> 'Antamaasi käyttäjätunnusta ei löytynyt, tai ne kuuluvat vahvistamattomalle käyttäjälle.',

	'VIEW_AVATARS'				=> 'Näytä avatarit',
	'VIEW_EDIT'					=> 'Katso/muokkaa',
	'VIEW_FLASH'				=> 'Näytä Flash animaatiot',
	'VIEW_IMAGES'				=> 'Näytä viesteihin liitetyt kuvat',
	'VIEW_NEXT_HISTORY'			=> 'Seuraava yksityisviesti taaksepäin',
	'VIEW_NEXT_PM'				=> 'Seuraava yksityisviesti',
	'VIEW_PM'					=> 'Näytä viesti',
	'VIEW_PM_INFO'				=> 'viestin yksityiskohdat',
	'VIEW_PM_MESSAGE'			=> '1 viesti',
	'VIEW_PM_MESSAGES'			=> '%d viestiä',
	'VIEW_PREVIOUS_HISTORY'		=> 'Näytä edellinen yksityisviesti',
	'VIEW_PREVIOUS_PM'			=> 'Edellinen yksityisviesti',
	'VIEW_SIGS'					=> 'Näytä allekirjoitukset',
	'VIEW_SMILIES'				=> 'Näytä hymiöt kuvina',
	'VIEW_TOPICS_DAYS'			=> 'Näytä viestiketjut aikaväliltä',
	'VIEW_TOPICS_DIR'			=> 'Viestiketjujen suunta',
	'VIEW_TOPICS_KEY'			=> 'Lajittele viestiketjut',
	'VIEW_POSTS_DAYS'			=> 'Näytä viestit aikaväliltä',
	'VIEW_POSTS_DIR'			=> 'Viestien suunta',
	'VIEW_POSTS_KEY'			=> 'Lajittele viestit',

	'WATCHED_EXPLAIN'			=> 'Alapuolella olevat alueet ja viestiketjut ovat seurannassa. Saat ilmoituksen aina uusista viesteistä. Voit lopettaa seurannan valitsemalla haluamasi ketjun tai alueen ja klikkaamalla <em>Lopeta seuranta</em> nappulaa.',
	'WATCHED_FORUMS'			=> 'Seuratut alueet',
	'WATCHED_TOPICS'			=> 'Seuratut viestiketjut',
	'WRONG_ACTIVATION'			=> 'Antamasi aktivointiavain ei täsmää tietokannassa olevan kanssa',

	'YOUR_DETAILS'				=> 'Oma aktiivisuus',
	'YOUR_FOES'					=> 'Vihamiehesi',
	'YOUR_FOES_EXPLAIN'			=> 'Valitse käyttäjätunnus ja klikkaa lähetä poistaaksesi sen',
	'YOUR_FRIENDS'				=> 'Ystäväsi',
	'YOUR_FRIENDS_EXPLAIN'		=> 'Valitse käyttäjätunnus ja klikkaa lähetä poistaaksesi sen',
	'YOUR_WARNINGS'				=> 'Varoituksiesi taso',

	'PM_ACTION' => array(
		'PLACE_INTO_FOLDER'	=> 'Tallenna kansioon',
		'MARK_AS_READ'		=> 'Merkitse luetuksi',
		'MARK_AS_IMPORTANT'	=> 'Merkitse viesti',
		'DELETE_MESSAGE'	=> 'Poista viesti'
	),
	'PM_CHECK' => array(
		'SUBJECT'	=> 'Otsikko',
		'SENDER'	=> 'Lähettäjä',
		'MESSAGE'	=> 'Viesti',
		'STATUS'	=> 'Viestin tila',
		'TO'		=> 'Lähetetty käyttäjälle'
	),
	'PM_RULE' => array(
		'IS_LIKE'		=> 'On samanlainen',
		'IS_NOT_LIKE'	=> 'On erilainen',
		'IS'			=> 'On',
		'IS_NOT'		=> 'Ei ole',
		'BEGINS_WITH'	=> 'Alkaa',
		'ENDS_WITH'		=> 'Loppuu',
		'IS_FRIEND'		=> 'On ystävä',
		'IS_FOE'		=> 'On vihamies',
		'IS_USER'		=> 'On käyttäjä',
		'IS_GROUP'		=> 'On käyttäjäryhmässä',
		'ANSWERED'		=> 'Vastattu',
		'FORWARDED'		=> 'Lähetetty eteenpäin',
		'TO_GROUP'		=> 'Oletusryhmääni',
		'TO_ME'			=> 'itselleni'
	),


	'GROUPS_EXPLAIN'	=> 'Käyttäjäryhmät auttavat ylläpitoa hallinnoimaan käyttäjiä. Sinut laitetaan rekisteröityessäsi johonkin ryhmään ja tämä ryhmä on oletusryhmäsi. Tämä ryhmä määrittelee näkyvyytesi toisille käyttäjille, kuten simerkiksi käyttäjätunnuksen värin, avatarin, arvon, jne... Mikäli ylläpito on sallinut, voit vaihtaa oletusryhmääsi. Sinut voidaan myös liittää toisiin ryhmiin. Jotkut käyttäjäryhmät sallivat sinun nähdä piilotettuja alueita tai antavat lisää oikeuksia tietyille alueille.',
	'GROUP_LEADER'		=> 'valvojana',
	'GROUP_MEMBER'		=> 'Jäsenenä',
	'GROUP_PENDING'		=> 'Odottavat jäsenyydet',
	'GROUP_NONMEMBER'	=> 'et ole jäsenenä',
	'GROUP_DETAILS'		=> 'Ryhmän tiedot',

	'NO_LEADER'		=> 'Ei ryhmän valvojia',
	'NO_MEMBER'		=> 'Ei ryhmän jäsenyyksiä',
	'NO_PENDING'	=> 'Ei odottavia jäsenyyksiä',
	'NO_NONMEMBER'	=> 'Et ole jäsenenä',
));

?>