<?php 
/* 
This is a pluck language file. You can find pluck at http://www.pluck-cms.org/.
If you want to help us, please start a new translation on http://www.pluck-cms.org/dev/translate/
The translation will be included in the next release of pluck.

Note: if you translate, please note the use of capitals: use them sparely.

pluck is licensed under the GNU General Public License, and thus open source.
This language file is also licensed under the GPL.
See docs/COPYING for the full license text.

------------------------------------------------
Language		Finnish
Translated by           maxtuska (4.6) and Sami-Pekka Hallikas (4.7)
------------------------------------------------
*/

//Name of the language (in English!)
$language = "Finnish";


//----------------
//Translation data

//General
$lang['general']['404']            = '404: tiedostoa ei löydy';
$lang['general']['not_found']      = 'Sivua ei löydy.';
$lang['general']['copyright']      = 'pluck © 2005-2008 <a href=\"http://www.somp.nl\" target=\"_blank\">somp</a>. pluck on lisensoitu GNU yleisten termistöjen alaisuuteen.';
$lang['general']['save']           = 'Tallenna';
$lang['general']['save_exit']      = 'Tallenna ja poistu';
$lang['general']['cancel']         = 'Peruuta';
$lang['general']['other_options']  = 'muut asetukset';
$lang['general']['title']          = 'otsikko';
$lang['general']['contents']       = 'sisältö';
$lang['general']['choose']         = 'valitse...';
$lang['general']['back']           = 'takaisin';
$lang['general']['upload_failed']  = 'Upload epäonnistui.';
$lang['general']['admin_center']   = 'ylläpitokeskus';
$lang['general']['changing_rank']  = 'Vaihda järjestystä...';
$lang['general']['insert']         = 'lisää';
$lang['general']['dont_display']   = 'Älä näytä';
$lang['general']['upload']         = 'Upload';
$lang['general']['change_title']   = 'vaihda otsikko';
$lang['general']['images']         = 'kuvat';
$lang['general']['not_valid_file'] = 'Asennus keskeytyi: antamasi tiedosto ei ole sopiva.';
$lang['general']['none']           = 'none';
$lang['general']['description']    = 'selite/kuvateksti';
$lang['general']['nothing_yet']    = 'ei vielä mitään...';
$lang['general']['send']           = 'Lähetä';
$lang['general']['name']           = 'Nimi:';
$lang['general']['email']          = 'Sähköposti:';
$lang['general']['message']        = 'Viesti:';
$lang['general']['website']        = 'Website:';

//Login
$lang['login']['not']               = 'Et ole kirjaantunut sisään';
$lang['login']['not_message']       = 'Et ole kirjaantunut sisään! Odota hetki ...';
$lang['login']['title']             = 'Kirjaudu sisään';
$lang['login']['password']          = 'Salasana';
$lang['login']['correct']           = 'Kirjautuu sisään...';
$lang['login']['incorrect']         = 'Väärä salasana.';
$lang['login']['too_many_attempts'] = 'Olet yrittänyt liian monta kertaa. Odota 5 minuuttia että saat yrittää uudelleen.';
$lang['login']['log_out']           = 'Kirjaudu ulos';

//Install
$lang['install']['not']          = 'not installed';
$lang['install']['not_message']  = 'pluck hasn\'t been installed yet. A moment, please...';
$lang['install']['already']      = 'pluck has already been installed. A moment, please...';
$lang['install']['title']        = 'installation';
$lang['install']['welcome']      = 'Welcome! Before you can setup your new website, you have to install pluck.';
$lang['install']['start']        = 'Start the installation...';
$lang['install']['step_1']       = 'step 1';
$lang['install']['step_2']       = 'step 2';
$lang['install']['step_3']       = 'step 3';
$lang['install']['writable']     = 'Check if the displayed files and directories are writable, by clicking on the link "Refresh". If you\'re sure the files are writable, you can proceed to the next step.';
$lang['install']['good']         = 'Good';
$lang['install']['refresh']      = 'Refresh';
$lang['install']['proceed']      = 'Proceed...';
$lang['install']['homepage']     = 'Here you can edit the homepage of your website. Choose a title and edit the contents.';
$lang['install']['success']      = 'pluck has been successfully installed!';
$lang['install']['manage']       = 'manage your website';
$lang['install']['general_info'] = 'Please give some general information about you and your website.';

//Update
$lang['update']['up_to_date'] = 'pluck on ajantasalla';
$lang['update']['available']  = 'päivitys saatavilla';
$lang['update']['urgent']     = '<strong>kiireellinen</strong> päivitys saatavilla';
$lang['update']['failed']     = 'tarkistus epäonnistui';

//Trashcan
$lang['trashcan']['title']          = 'roskakori';
$lang['trashcan']['items_in_trash'] = 'tiedostoja roskakorissa';
$lang['trashcan']['move_to_trash']  = 'siirrä tiedostoja roskakoriin';
$lang['trashcan']['moving_item']    = 'Siirtää tiedostoja roskakoriin...';
$lang['trashcan']['same_name']      = 'Tiedostoa ei voida siirtää roskakoriin : roskakorissa on jo samanniminen tiedosto.';
$lang['trashcan']['message']        = 'Poistetut tiedostot on listattu täällä. Voit katsella, palauttaa ja poistaa niitä roskakorista.';
$lang['trashcan']['empty']          = 'tyhjä roskakori';
$lang['trashcan']['empty_confirm']  = 'Oletko varma, että haluat tyhjentää roskakorin? Ota huomioon, että kaikki tiedostot menetetään.';
$lang['trashcan']['view_item']      = 'katso tiedostoa';
$lang['trashcan']['delete_item']    = 'poista tiedosto roskakorista';
$lang['trashcan']['deleting']       = 'Poistaa tiedostoa roskakorista...';
$lang['trashcan']['restore_item']   = 'palauta tiedosto';
$lang['trashcan']['restoring']      = 'Palauttaa tiedostoa roskakorista...';
$lang['trashcan']['same_page_name'] = 'Sivua ei voi palauttaa roskakorista : saman niminen sivu on jo olemassa.';

//Start
$lang['start']['title']   = 'aloita';
$lang['start']['welcome'] = 'Tarvetuloa ylläpitokeskukseen.';
$lang['start']['manage']  = 'Voit muokata weppisivustoasi täällä. Valitse toiminto ruudun yläreunasta.';
$lang['start']['more']    = 'lisää...';
$lang['start']['website'] = 'katso sivustoasi';
$lang['start']['result']  = 'tarkista miltä sivusto näyttää';
$lang['start']['people']  = 'kaikki ihmiset jotka ovat auttaneet pluckin kehityksessä';
$lang['start']['help']    = 'tarvitsetko apua?';
$lang['start']['love']    = 'autamme sinua mielellämme';

//Credits
$lang['credits']['title']          = 'krediitit';
$lang['credits']['message']        = 'Kiitoksemme menevät seuraaville henkilöille, auttaessanne pluckin kehitystyötä';
$lang['credits']['project_leader'] = 'projektin johtaja';
$lang['credits']['developers']     = 'main developers';
$lang['credits']['contributions']  = 'contributions';
$lang['credits']['translation']    = 'kääntäjät';
$lang['credits']['more']           = 'lisää kiitoksia';
$lang['credits']['tinymce']        = 'for making the excellent TinyMCE-editor used in pluck';
$lang['credits']['maxgtar']        = 'for making MaxgTar, used in the automatic theme and module installer';
$lang['credits']['lytebox']        = 'for developing LyteBox, used in pluck to serve the images in your albums with flair';
$lang['credits']['tango']          = 'for designing the wonderful icons used in the pluck administration center';
$lang['credits']['slik']           = 'for designing the "Silk" icons, also used in pluck';

//Page
$lang['page']['title']        = 'sivut';
$lang['page']['message']      = 'Täällä voit hallinnoida, editoida ja poistaa sivuja..';
$lang['page']['change_order'] = 'vaihda sivun järjestystä';
$lang['page']['top']          = 'Tämä sivu on jo ensimmäisenä, joten sen järjestystä ei voi vaihtaa.';
$lang['page']['last']         = 'Tämä sivu on jo viimeisenä, joten sen järjestystä ei voi vaihtaa.';

//Newpage and Editpage
$lang['page']['new']         = 'uusi sivu';
$lang['page']['view']        = 'näytä sivu';
$lang['page']['edit']        = 'muokkaa sivua';
$lang['page']['items']       = 'Näitä voit käyttää sivulla:';
$lang['page']['insert_link'] = 'lisää linkki';
$lang['page']['modules']     = 'Valitse mitä moduuleita haluat sivulla olevan, ja missä järjestyksessä.';
$lang['page']['options']     = 'muita sivun asetuksia';
$lang['page']['in_menu']     = 'näytä sivu valikossa';
$lang['page']['sub_page']    = 'alasivu sivulle';
$lang['page']['name_exists'] = 'Sivu samalla otsikkoa on jo olemassa.<br />Valitse toinen otsikko.';

//Editmeta
$lang['editmeta']['title']    = 'muokkaa sivun tietoja';
$lang['editmeta']['message']  = 'Voit antaa jotain tietoja tästä sivusta, saadaksesi parempia hakukone tuloksia.';
$lang['editmeta']['keywords'] = 'avainsanat';
$lang['editmeta']['comma']    = 'erotettuina pilkulla';
$lang['editmeta']['changing'] = 'Vaihdan sivun tietoja...';

//Images
$lang['images']['title']    = 'hallitse kuvia';
$lang['images']['message']  = 'Voit lähettää kuviasi joita voit käyttää sivulla. Tuetut tiedostotmuodot: JPG, PNG ja GIF.';
$lang['images']['uploaded'] = 'lähetetyt kuvat';
$lang['images']['name']     = 'Nimi:';
$lang['images']['size']     = 'Koko:';
$lang['images']['type']     = 'Tyyppi:';
$lang['images']['bytes']    = 'byteä';
$lang['images']['success']  = 'Upload onnistui!';

//Modules
$lang['modules']['title']   = 'moduulit';
$lang['modules']['message'] = 'Pluckille on useita moduuleita saatavilla, voit laajentaa sivujesi toimintaa dynamisella sisällöllä.';

//Options
$lang['options']['title']          = 'asetukset';
$lang['options']['message']        = 'Voit määritellä pluckin asetukset tarpeesi mukaan.';
$lang['options']['settings_descr'] = 'vaihda yleisiä asetuksia, kuten sivuston nimeä tai sähköpostiosoitettasi';
$lang['options']['modules_descr']  = 'hallitse moduuleita ja sisällytä niitä sivustollesi';
$lang['options']['themes_descr']   = 'muuta sivustosi ulkoasua';
$lang['options']['lang_descr']     = 'valitse kieli jota pluck käyttää';
$lang['options']['pass_descr']     = 'on suositeltavaa muuttaa salasanaa säännöllisesti';

//Settings
$lang['settings']['title']             = 'yleiset asetukset';
$lang['settings']['message']           = 'Muuta yleisiä asetuksia, kuten esimerkiksi sivustosi otsikkoa ja sähköpostiasi';
$lang['settings']['choose_title']      = 'valitse sivullesi otsikko täällä';
$lang['settings']['email']             = 'sähköposti';
$lang['settings']['email_descr']       = 'sähköpostiasi käytetään, jotta vierailijat voivat ottaa sinuun yhteyttä lomakkeen avulla.';
$lang['settings']['xhtml_mode']        = 'Käynnistä XHTML Yhteensopivuus tila (saattaa olla hidas)';
$lang['settings']['changing_settings'] = 'Vaihdetaan yleisiä asetuksia...';
$lang['settings']['fill_name']         = 'Sivustosi nimi ei voi olla tyhjä, sinun on annettava joku nimi.';
$lang['settings']['email_invalid']     = 'Antamasi sähköpostiosoite ei ole oikea!';

//Modules_manage
$lang['modules_manage']['title']             = 'hallitse moduuleita';
$lang['modules_manage']['message']           = 'Hallitse moduuleita täällä. Poista käyttämättömät moduulit tai tutki uusia moduuleita rikastuttaaksesi sivustosi toimivuutta. Voit myös lisätä moduuleita sivustollesi valitsemalla <i>Lisää moduuleita sivustollesi</i>.';
$lang['modules_manage']['add']               = 'Lisää moduuleita sivustollesi...';
$lang['modules_manage']['install']           = 'Asenna moduuli...';
$lang['modules_manage']['information']       = 'moduulitiedot';
$lang['modules_manage']['uninstall']         = 'poista moduuli';
$lang['modules_manage']['uninstall_confirm'] = 'Oletko varma että haluat poistaa tämän moduulin? Huomaa että moduulin asetukset poistetaan myös.';
$lang['modules_manage']['version']           = 'versio';
$lang['modules_manage']['author']            = 'tekijä';
$lang['modules_manage']['website']           = 'sivusto';
$lang['modules_manage']['not_compatible']    = 'Tämä moduuli ei ole yhteensopiva tämän pluck version kanssa.';

//Modules_addtosite
$lang['modules_addtosite']['title']        = 'lisää moduuleita sivustolle';
$lang['modules_addtosite']['message']      = 'Konfiguroi täällä sivustosi alueet joilla haluat moduulit näytettävän. Nämä asetukset ovat teemakohtaisia : jos vaihdat teemaa sinun tulee tehdä konfigrointi uudelleen. Ota huomioon, että nämä asetukset vaikuttavat kaikkiin sivustosi sivuihin.';
$lang['modules_addtosite']['choose_order'] = 'Valitse järjestys, jossa moduulit näytetään.';

//Installmodule
$lang['modules_install']['title']   = 'asenna moduuleita';
$lang['modules_install']['message'] = 'Täällä voit asentaa uusia moduuleita. Varmista ensin, että olet ladannut moduulin / moduuleita.';
$lang['modules_install']['too_big'] = 'Moduulitiedosto on liian suuri; Suurin sallittu tiedostokoko on 2MB.';
$lang['modules_install']['success'] = 'Moduuli asennettu onnistuneesti.';

//Theme
$lang['theme']['title']  = 'valitse teema';
$lang['theme']['choose'] = 'Täällä voit valita asennetuista teemoista sen jota haluat käytettävän.';
$lang['theme']['saved']  = 'Teema asetukset tallennettu.';

//Themeuninstall
$lang['theme_uninstall']['title']             = 'poista teema';
$lang['theme_uninstall']['message']           = 'Täällä voit poistaa teemoja. Aktiivinen teema ei ole listattuna täällä.';
$lang['theme_uninstall']['uninstall_confirm'] = 'Haluatko varmasti poistaa teeman';

//Themeinstall
$lang['theme_install']['title']         = 'asenna teema';
$lang['theme_install']['message']       = 'Täällä voit asentaa uusia teemoja. Varmista, että olet ladannut teeman / teemoja ensin.';
$lang['theme_install']['return']        = 'takaisin <a href="?action=theme">teema sivulle</a>';
$lang['theme_install']['not_supported'] = 'teemojen ja moduulien asennus ei ole tuettu tällä palvelimella, sinun täytyy tehdä asennus manuaalisesti.';
$lang['theme_install']['success']       = 'teema asennettu';
$lang['theme_install']['too_big']       = 'Teematiedosto on liian suuri; Suurin sallittu tiedostokoko on 1MB.';

//Language
$lang['language']['title']  = 'language settings';
$lang['language']['choose'] = 'Choose the language that will be used by pluck.';
$lang['language']['saved']  = 'Kieliasetukset on tallennettu.';

//Changepass
$lang['changepass']['title']       = 'vaihda salasana';
$lang['changepass']['message']     = 'Täällä voit muuttaa salasanaasi jota käytät kirjautuessasi <i>pluckin</i>  ylläpitosivulle. On suositeltavaa muuttaa salasanaa säännöllisesti.';
$lang['changepass']['old']         = 'vanha salasana';
$lang['changepass']['new']         = 'uusi salasana';
$lang['changepass']['repeat']      = 'uudelleen';
$lang['changepass']['cant_change'] = 'Salasanaa ei voi vaihta, annoit vanhan salasanan väärin.';
$lang['changepass']['different']   = 'Annoit kaksi eri salasanaa!';
$lang['changepass']['empty']       = 'Uusi salasana ei voi olla tyhjä.';
$lang['changepass']['changed']     = 'Salasana vaihdettu.';

//Albums.
$lang['albums']['title']          = 'albumit';
$lang['albums']['descr']          = 'käytä albumeita näyttääksesi vierailijoille suosikkikuvasi';
$lang['albums']['message']        = 'Täällä voit hallita kuva albumeitasi. Käytä albumeita näyttääksesi vierailijoille suosikkikuvasi. Lisää albumeita sivustollesi valitsemalla "lisää albumi" kun editoit sivua.';
$lang['albums']['edit_albums']    = 'editoi albumeita';
$lang['albums']['new_album']      = 'uusi albumi';
$lang['albums']['choose_name']    = 'anna uudelle albumille nimi ja sitten paina "tallenna"';
$lang['albums']['delete_album']   = 'poista albumi';
$lang['albums']['edit_album']     = 'muokkaa albumia';
$lang['albums']['album_message1'] = 'Käytä tätä sivua lisätäksesi, poistaaksesi ja editoidaksesi albumisi kuvia. JPG-, PNG- ja GIF-kuvat ovat tuettuja.';
$lang['albums']['album_message2'] = 'siirrä uusi kuva täällä. anna otsikko ja kuvateksti sekä laatu joilla kuviasi käsitellään. mitä suurempi laatu sitä suurempi on tiedostokoko.';
$lang['albums']['edit_images']    = 'muokkaa kuvia';
$lang['albums']['new_image']      = 'uusi kuva';
$lang['albums']['quality']        = 'laatu (1-100)';
$lang['albums']['edit_image']     = 'muokkaa kuva';
$lang['albums']['doesnt_exist']   = 'Valittua albumia ei ole.';
$lang['albums']['name_exist']     = 'Saman niminen albumi on jo olemassa.';
$lang['albums']['image_exist']    = 'Saman niminen kuva on jo olemassa.';
$lang['albums']['change_order']   = 'vaihda kuvien järjestystä';
$lang['albums']['already_top']    = 'Kuva on jo ensimmäinen, järjestystä ei voi vaihtaa.';
$lang['albums']['already_last']   = 'Kuva on jo viimeinen, järjestystä ei voi vaihtaa.';
$lang['albums']['delete_image']   = 'poista kuva';

//Blog.
$lang['blog']['title']                  = 'blogi';
$lang['blog']['main_message']           = 'Täällä voit luoda uusia aiheita / posteja eri kategorioille. Postit järjestetään automaattisesti päiväyksen mukaan.';
$lang['blog']['descr']                  = 'käytä blogia kirjoittaaksesi uutisia tai artikkeleita vieraillesi.';
$lang['blog']['categories']             = 'kategoriat';
$lang['blog']['category']               = 'kategoria';
$lang['blog']['choose_cat']             = 'Valitse kategoria...';
$lang['blog']['no_cat']                 = 'Ei kategoriaa';
$lang['blog']['new_cat']                = 'uusi kategoria';
$lang['blog']['new_cat_message']        = 'anna kategorialle ensin nimi ja klikkaa sitten "tallenna"';
$lang['blog']['delete_cat']             = 'poista kategoria';
$lang['blog']['posts']                  = 'kaikki postit';
$lang['blog']['new_post']               = 'kirjoita uusi posti';
$lang['blog']['edit_post']              = 'muokkaa postia';
$lang['blog']['delete_post']            = 'poista posti';
$lang['blog']['at']                     = ' - ';
$lang['blog']['in']                     = ' - ';
$lang['blog']['posted_by']              = 'kirjoitti';
$lang['blog']['reactions']              = 'reatiota';
$lang['blog']['reaction']               = 'reaktio';
$lang['blog']['edit_reactions']         = 'muokkaa reaktioita';
$lang['blog']['edit_reactions_message'] = 'Täällä voit editoida vierailijoiden reaktioita posteissa.';
$lang['blog']['edit_reaction']          = 'muokkaa reaktiota';
$lang['blog']['delete_reaction']        = 'poista reaktio';
$lang['blog']['name']                   = 'nimi';
$lang['blog']['email']                  = 'sähköposti';
$lang['blog']['website']                = 'website';
$lang['blog']['message']                = 'viesti';
$lang['blog']['html_not_allowed']       = 'HTML-koodi ei ole sallittu.';
$lang['blog']['no_reactions']           = 'ei vastauksia';

//Contact form.
$lang['contactform']['module_name']  = 'yhteyslomake';
$lang['contactform']['module_intro'] = 'yhteyslomakkeella voi antaa vierailijoillesi mahdollisuuden lähettää sinulle viestin';
$lang['contactform']['fields']       = 'Et antanut tarvittavia tietoja oikein.';
$lang['contactform']['email_title']  = 'Viesti sivustolta';
$lang['contactform']['been_send']    = 'Viestisi on lähetetty onnistuneesti.';
$lang['contactform']['not_send']     = 'Viestiäsi ei voida lähettää, tapahtui virhe.';

//View site link
$lang['viewsite']['module_name']  = 'katso sivustoasi';
$lang['viewsite']['module_intro'] = 'Tehty esitelläksemme uudet koukut (new hooks). Lisää suoran linkin sivustolle admin valikkoon.';
$lang['viewsite']['message']      = 'katso sivustoasi';
?>