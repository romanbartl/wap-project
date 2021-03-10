<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;
use App\Models\State;
use App\Models\Genre;
use App\Models\Language;
use App\Models\Item;
use App\Models\Store;

class TitleTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(['state_name' => 'USA']);
        // TODO
        
        $title = Title::create(['title_name' => 'Vykoupení z věznice Shawshank', 'price' => 20, 'description' => 'Strach dělá z lidí vězně. Naděje jim dává křídla. Film natočený podle novely Stephena Kinga. Strhující příběh o přátelství, naději a moudrosti s velmi výraznými hereckými i charakterovými osobnostmi. Andy Dufresne (Tim Robbins) přichází do vězení v Shawshanku jako nový vězeň podezřelý z vraždy. Spřátelí se s doživotně odsouzeným Redem (Morgan Freeman) a společně se snaží přežít v nelidském prostředí vězeňského systému. Odmítají upadnout do rezignace a dodávají naději sobě i spoluvězňům. Film získal mnoho ocenění filmové kritiky a díky svému hluboce humánnímu poselství, skvělým hereckým výkonům a působivému zpracování byl 7 x nominován na Oscara - za nejlepší film, herce v hlavní roli (Morgan Freeman), nejlepší scénář, kameru, hudbu, střih a zvuk.', 'year' => '1994', 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'), Genre::getGenreIdByUrl('krimi')]);
        
        $title = Title::create(['title_name' => 'Forrest Gump', 'price' => 25, 'description' => 'Zemeckisův film je brilantním shrnutím dosavadních režisérových poznatků o možnostech "comicsového" vyprávění. Formálně i obsahově nejméně konvenční z jeho snímků přesvědčuje komediálními gagy i naléhavě patetickým tónem. Jeho hrdinou je prosťáček Forrest Gump, typický obyčejný muž, který od dětství dělal, co se mu řeklo. Do života si tak odnesl několik ponaučení své pečlivé maminky a osvědčené pravidlo, jež se mu hodí mnohokrát v nejrůznějších situacích: Když se dostaneš do problémů, utíkej. Forrest proutíká školou, jako hráč amerického fotbalu i univerzitou, potom peklem vietnamské války a zoufalstvím nad matčinou smrtí. Vždycky je totiž někdo nebo něco, co po něm skutečně či obrazně "hází kameny". Nakonec však Forrest poznává, že jsou i jiná řešení situací než útěk. Svůj život spojuje s kamarádkou ze školy Jenny, která pro něj zůstane provždycky jedinou láskou, s přítelem z vojny, černochem Bubbou, který dá směr jeho úvahám o lovu krevet a s poručíkem Taylorem, jemuž ve Vietnamu zachrání život. Forrestova životní pouť od 50. do 80. let je koncipovaná jako totálně "bezelstné" vyprávění hrdiny, neschopného obecnějšího hodnocení situace. Forrest jako sportovec i jako válečný hrdina se setkává se slavnými lidmi, které nakonec vždycky někdo zastřelí (J. F. Kennedy, J. Lennon). Také jeho bližní umírají, ale on sám zůstává. Empiricky se dopracovává od impulsivního útěku před životem k úvahám o lidském osudu a o Bohu. Soukromý hrdinův osud zároveň postihuje třicet let poválečných amerických dějin.', 'year' => 1994, 'type' => 'movie', 'state_id' => 1]);       
        $title->genres()->sync([Genre::getGenreIdByUrl('komedie'), Genre::getGenreIdByUrl('romanticky'), Genre::getGenreIdByUrl('drama')]);

        $title = Title::create(['title_name' => 'Zelená míle', 'price' => 30, 'description' => 'Na začátku příběhu se potkáme se starým mužem Paulem Edgecombem (Dabbs Greer). Žije v domově s pečovatelskou službou a právě se dojatě dívá na starý film s Fredem Astairem. Snad až příliš dojatě, protože jedna ze sester ho musí zkontrolovat, když slyší všechny ty vzlyky. Paul je tak naměkko, že jí začne vypravovat svůj příběh starý 60 let, který ještě nikomu nevypravoval. Kolem roku 1935 v Louisianě, mladý Paul (teď už Tom Hanks) pracuje jako dozorce ve vězení pro těžké zločince, kteří jsou odsud posíláni na smrt. Paul není jen "zaměstnancem", ale bystrým pozorovatelem, který citlivě vnímá rázovité postavy těžkých zločinců i jejich osudy. Setkává se například s s černým obrem Johnem, který má ruce jako lopaty a je obviněn z vraždy dvou dětí. Nemůže uvěřit, že člověk, který se bojí spát potmě by byl schopen tak hrůzného činu. Je tu také hluboce věřící Arlen, a bláznivý psychopat zvaný Divoký Bill, ale je tu také ta hrůzostrašná chodba, natřená na zeleno, které všichni říkají "Zelená míle", je to cesta, na konci které čeká smrt, pokud se nestane zázrak.', 'year' => 1999, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'), Genre::getGenreIdByUrl('krimi'), Genre::getGenreIdByUrl('mysteriozni')]);

        $title = Title::create(['title_name' => 'Přelet nad kukaččím hnízdem', 'price' => 24, 'description' => 'Když svobodomyslný malý podvodníček Randle P. McMurphy (Jack Nicholson) přichází do státní psychiatrické nemocnice, jeho nakažlivý odpor k disciplíně otřese rutinou celého zařízení. On je jednou stranou nastávající války. Uhlazená, chladně monstrózní sestra Ratchedová (Louise Fletcher) druhou. V sázce je osud všech pacientů na oddělení... Tato elektrizující adaptace bestselleru Kena Keseyho získala všech pět hlavních Oscarů za rok 1975: Nejlepší film (produkce Saul Zaentz a Michael Douglas), herec (Nicholson), herečka (Fletcher), režisér (Miloš Forman) a adaptovaný scénář (Lawrence Hauben a Bo Goldman). Divoký, spalující film s vynikajícím hereckým obsazením, čítajícím mj. Brada Dourifa, Dannyho DeVita a debutujícího Christophera Lloyda, si je plně zaslouží.', 'year' => 1975, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama')]);
        
        $title = Title::create(['title_name' => 'Sedm', 'price' => 15, 'description' => 'Dva policisté (Brad Pitt a Morgan Freeman) jsou na stopě geniálního vraha, zodpovědného za sérii děsivých vražd, jejichž oběti spojuje sedm smrtelných hříchů. V jedné z rolí tohoto kvalitního trhilleru, zasazeného do temného města nasáklého bolestí a zkázou, uvidíte také Gwyneth Paltrow. David Fincher (Klub rváčů, Zodiac, Podivuhodný případ Benjamina Buttona) s dokonalou znalostí našich nejhlubších obav pevně svírá otěže akce – fyzické, psychické i spirituální – neodvratně směřující k rozuzlení, které do hloubi otřese i tou nejzatvrzelejší duší.', 'year' => 1995, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('krimi'),Genre::getGenreIdByUrl('mysteriozni'),Genre::getGenreIdByUrl('thriller')]);
        
        $title = Title::create(['title_name' => 'Schindlerův seznam', 'price' => 30, 'description' => 'Hluboce šokující, nemilosrdné drama o noční můře holocaustu, založené na skutečných událostech. Na záchranu 1100 životů obětoval Oskar Schindler veškeré své jmění... Polský Krakov 1939. Židovská obec je vystavována stále se zvyšujícímu tlaku ze strany nacistů. Do této vřavy vstupuje obchodník Oskar Schindler, člen Nacistické strany, velký svůdník a muže vydělávající na válečném utrpení, který dokázal najít v sobě člověka a zachránit ty, kterým už zdánlivě nebylo pomoci... Film Stevena Spielberga je stěžejní dílo světové kinematografie a vítěz sedmi Oscarů, včetně ocenění za Nejlepší film roku a Nejlepší režii.', 'year' => 1993, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('zivotopisny')]);
        
        $title = Title::create(['title_name' => 'Kmotr', 'price' => 13, 'description' => 'Gangsterské drama Kmotr, natočené podle stejnojmenného bestselleru Maria Puza, patří mezi přelomová díla tzv. Nového Hollywoodu, a to jak komerčně, tak umělecky. Příběh newyorské mafiánské rodiny Corleonů, jíž tvrdou rukou šéfuje starý don Vito (Marlon Brando), se odehrává v letech 1945 - 55 a zaznamenává prudký rozmach organizovaného zločinu po skončení druhé světové války. V epických, rozmáchlých obrazech před divákem ožívají osudy italsko-americké rodiny, jež svůj blahobyt založila na hazardu, prostituci, vydírání a zastrašování. Tehdy mladý režisér Francis Ford Coppola, který byl poněkud překvapivě pověřen společností Paramount realizací jednoho z jejích stěžejních projektů (své nepochybně sehrálo i jeho italsko-americké zázemí), musel redukovat některé motivy rozsáhlé předlohy, ovšem podařilo se mu věrně zachovat jejího ducha - přesný popis fungování zločinecké organizace, zachycení její hierarchie, začlenění do tehdejšího společenského vývoje i často kritizované zdůrazňování rodinné soudržnosti. Pevnou dramatickou stavbu scénáře (na němž Coppola spolupracoval s autorem předlohy) podpořilo i režijní ztvárnění, jež čerpalo především z klasických vypravěčských praktik hollywoodských děl 30. let (např. Jih proti Severu), okořeněných soudobým příklonem k realismu, zejména v zobrazování násilí a sexu. Snímek získal tři Oscary - za nejlepší film, scénář podle předlohy a mužský herecký výkon v hlavní roli (Marlon Brando, který svou cenu odmítl převzít). Pro úspěch filmu, který se stal diváckým hitem nejen ve Spojených státech, ale i ve zbytku světa (kromě např. tehdejšího Československa, kde se kvůli údajné glorifikaci zločinu a násilí nesměl promítat, ač Puzova kniha v českém překladu vyšla), bylo klíčové herecké obsazení hlavních úloh dona Vita Corleona a jeho nejmladšího syna Michaela. Vedení Paramountu nesouhlasilo s Marlonem Brandem, na němž mu vedle jeho dobře známé pověsti "obtížného a nespolehlivého herce, jehož poslední filmy byly propadáky", vadilo hlavně to, že je na roli mafiánského patriarchy příliš mladý (v době příprav filmu mu bylo 47 let), a ještě větší odpor dávalo najevo vůči Al Pacinovi, jenž se jim zdál málo známý, příliš obyčejný a především malý. Coppola s oběma herci natočil testy, jež nakonec šéfy Paramountu přesvědčily. Se stejnou pečlivostí režisér obsadil i další role, nejstaršího Corleonova syna, prchlivého Sonnyho (James Caan), jeho slabošského bratra Freda (John Cazale) a conseglieriho Toma Hagena (Robert Duvall). Úlohy Corleonových "vojáků" a dalších gangsterů ztělesnili vesměs málo známí představitelé, kteří dokonale typově odpovídali svým postavám (např. Richard Castellano jako Clemenza nebo Al Lettieri jako Sollozzo). V kreaci Michaelovy neitalské dívky Kay Adamsové zaujala budoucí múza Woodyho Allena Diane Keatonová a Corleonovu týranou dceru Connii ztělesnila pozdější Stalloneova partnerka z Rockyho, Coppolova mladší sestra Talia Shireová. Téměř tříhodinový snímek (který uvádíme, stejně jako další díly trilogie, ve dvou částech) vrcholí slavnou scénou křtu Michaelova synovce (představovaného Coppolovou dcerou Sofií), prostříhaného krvavým vyřizováním účtů s ostatními mafiánskými rodinami, jež znamenalo upevnění moci Corleonova klanu, ale také definitivní převzetí "rodinné firmy" zprvu zdráhavým Michaelem, který se stává důstojným nástupcem zemřelého otce.', 'year' => 1972, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'), Genre::getGenreIdByUrl('krimi')]);
        
        $title = Title::create(['title_name' => 'Nedotknutelní', 'price' => 25, 'description' => 'Ochrnutý a bohatý aristokrat Philippe si za svého nového opatrovníka vybere Drisse, živelného mladíka z předměstí, kterého právě propustili z vězení. Jinými slovy - najde si na tuto práci tu nejméně vhodnou osobu. Podaří se jim však propojit nemožné: Vivaldiho a populární hudbu, serióznost a žoviální vtípky, luxusní obleky a tepláky. Bláznivým, zábavným, silným, neočekávaným a hlavně „nedotknutelným“, přesně takovým se stane jejich přátelství… Komedie s dramatickou zápletkou o tom, že ani od krku po prsty u nohou nepohyblivý člověk odkázaný na pomoc druhých, nemusí ztratit smysl života. A o tom, že i nejméně pravděpodobné spojení melancholického multimilionáře a extrovertního recidivisty může humorně zapůsobit na diváka a může se z něj stát kasovní trhák.', 'year' => 2011, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('komedie'), Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('zivotopisny')]);
        
        $title = Title::create(['title_name' => 'Dvanáct rozhněvaných mužů', 'price' => 24, 'description' => 'Dramatický příběh natočený původně jako televizní film, což ovlivnilo jeho výraz, který se zdánlivě vymyká filmové praxi, neboť se celý odehrává v průběhu devadesáti minut v uzavřené soudní síni. Dvanáct porotců má jednomyslně rozhodnout o vině či nevině mladého muže, který je obviněn z vraždy svého otce. Porotci jsou průměrní Američané s obyčejnými zájmy a zaměstnáním. V průběžném hlasování jedenáct hlasuje za vinu, jenom porotce číslo 8, architekt Davis, je proti. Vyslovuje vážné výhrady k průběhu soudního jednání a kritizuje i způsob šetření celého případu. Scénář neklade důraz na to, zda je obžalovaný vinen nebo ne, je to spíš autorská úvaha o možnostech hájit své názory, o pochybnostech v soudní síni, o zodpovědnosti za vlastní výroky. V tomto smyslu film daleko přesahuje rámec vlastní zápletky a stává se zobecněným obrazem uspěchané civilizace. Realizační tým vytvořil nezvyklé dramatické napětí v omezených prostorových dimenzích, mistrovsky odhalil duševní pochody jednotlivých aktérů rokování poroty, kde sebemenší detail nabývá hodnoty symbolu. Lumetovy pečlivé kompozice a silný důraz na všechny repliky jsou téměř dokonalé. Vynikající scénář, vysoká realizační profesionalita a perfektně diferencované herecké výkony jednotlivých postav přispěly k vysoké a trvalé hodnotě tohoto nezvyklého díla. Za zmínku stojí, že porotce číslo 11 hrál Jiří Voskovec. Film byl v roce 1957 nominován na Oscara', 'year' =>  1957, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('krimi')]);
        
        $title = Title::create(['title_name' => 'Pelíšky', 'price' => 15, 'description' => 'Příběhy jedné historické generace - stárnoucích rodičů, dospívající mládeže a malých dětí. Děj je zasazen do konce šedesátých let - podzim 67 až léto 68 s krátkým epilogem přesahujícím do let sedmdesátých. Pražská vilová čtvrť Hanspaulka, jemná poetika a humorná nadsázka jsou charakteristické pro mozaikové vyprávění paralelních životních osudů tří generací mužů a žen ve zvláštním období našich dějin v roce 1968.', 'year' => 1999, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('komedie')]);
       
        $title = Title::create(['title_name' => 'Terminátor 2: Den zúčtování', 'price' => 30, 'description' => 'Deset let po neúspěšném pokusu zabít Sarah Connorovou, matku budoucího vůdce lidstva ve válce proti strojům, se do Los Angeles vrací z budoucnosti nový Terminátor, typ T-1000, aby zlikvidoval už narozeného Johna Connora. Dospělý Connor v roce 2029 na svoji ochranu posílá do minulosti druhého terminátora T-800. Oba stroje nezávisle na sobě pátrají po malém Johnovi. Chlapec zjišťuje, že T-800 je naprogramován na jeho ochranu a s jeho pomocí osvobodí svou matku z psychiatrického ústavu, kde je léčena z údajné schizofrenie. T-800 oběma vysvětluje, co přinese budoucnost. Tu je však možné změnit...a při tom všem hrdiny stíhá nemilosrdný a zřejmě nezničitelný T-1000.', 'year' => 1991, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('akcni'),Genre::getGenreIdByUrl('sci-fy'),Genre::getGenreIdByUrl('thriller')]);

        $title = Title::create(['title_name' => 'Kmotr II', 'price' => 25, 'description' => 'Jsme větší než U. S. Steel. Al Pacino a Robert De Niro v hlavních rolích pokračování slavné mafiánské ságy, oceněné šesti Oscary. Mimořádný úspěch Kmotra (1972) ve světových kinech logicky vedl k okamžitým úvahám o natočení pokračování, k němuž koneckonců vybízel i relativně otevřený konec originálu. Coppola, který tímto snímkem získal v Hollywoodu nesmírný respekt, ovšem nejdřív svého vlivu využil k realizaci osobního projektu Rozhovor (vyznamenaného mj. Zlatou palmou na MFF v Cannes, ale komerčně neúspěšného). Scénář Kmotra II, jenž je znovu společným dílem autora původní předlohy a režiséra, rozvíjí dvě dějové linie. Další osudy nového kmotra Michaela Corleona (Al Pacino), ovládajícího své impérium z rozsáhlého sídla v nevadském Lake Tahoe. A začátky mladého Vita Corleona (Robert De Niro) v New Yorku 20. let, jež jsou obsaženy i v Puzově původní knize. Michael musí čelit nejen svým konkurentům z podsvětí, zejména Hymanu Rothovi (pozoruhodná kreace slavného hereckého pedagoga Lee Strasberga), který využívá informací zhrzeného Michaelova bratra Freda (John Cazale), ale také zvýšenému zájmu orgánů spravedlnosti, jež v průběhu druhé poloviny 50. let, kdy se Kmotr II odehrává, zintenzivnily svou kampaň proti organizovanému zločinu. Michael své obchodní zájmy uhájí, přes nedobrovolné opuštění hazardních aktivit na revoluční Kubě, ovšem cena je vysoká. Předčasně zestárlý, zahořklý kmotr je ještě nelítostnějším šéfem než jeho otec, ale rodinné vazby, tvořící páteř prvního filmu, zmizely. Michael zůstává osamocený. Bez bratra, kterého nechal zabít, i bez manželky, která od něho odešla. Kmotr II je stejně výjimečným dílem jako originál, na který navazuje. Mnozí dokonce tvrdí, že lepším. Coppola se tu jako režisér představuje ve špičkové formě, navíc posílené neotřesitelným postavením režisérské hvězdy. Už nemusel bojovat o výši rozpočtu jako v případě prvního filmu (který se z finančních důvodů měl původně odehrávat v současnosti), ani o herce, jež hodlal angažovat. Ve všem měl naprosto volnou ruku. Prozřetelným se ukázalo obsazení málo známého Roberta De Nira jako mladého Vita Corleona, jehož elektrizující herectví tu získává na přesvědčivosti také citlivým využitím sicilského dialektu, který v raných scénách nahrazuje angličtinu. Jeho osud v nové zemi, kam musel uprchnout ze sicilské vesničky, jež mu dala jméno, ostře kontrastuje s údělem jeho syna. Vito buduje svoji pozici prakticky z ničeho, dokáže využít každé příležitosti, neštítí se násilných prostředků, pokud je považuje za nutné a efektivní, ale základem je pro něho rodina. Pokračování Kmotra se stalo prvním "sequelem", který získal Cenu Akademie za nejlepší film. Nezůstalo ovšem u jediného Oscara. Kmotr II v tomto ohledu překonal originál celkem se šesti soškami; další cenu mu Akademie udělila za nejlepší režii (ta Coppolovi v prvním případě unikla ve prospěch Boba Fosseho za Kabaret), scénář, výpravu, hudbu (slavný italský skladatel Nino Rota, opominutý u prvního dílu kvůli zařazení již použitých motivů z jiného filmu, tady spolupracoval s režisérovým otcem Carminem Coppolou) a konečně za fenomenální De Nirův výkon ve vedlejší roli.', 'year' => 1974, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('krimi')]);
        
        $title = Title::create(['title_name' => 'Pulp Fiction: Historky z podsvětí', 'price' => 25, 'description' => 'Nejkultovnější z kultovních filmů 90. let je autorskou Biblí Quentina Tarantina, který v tomto opusu definoval základní prvky své režisérské poetiky a vytvořil dílo rozněcující náročné kritiky na festivalu v Cannes, levicové a pravicové intelektuály i zedníky dopřávající si po těžké šichtě trochu oddychu. Pulp Fiction je multižánrovým opusem, který přetéká fetišistickými detaily a popkulturními odkazy a zároveň dokonale funguje jako svrchovaně napínavý film rozvržený do inovativní příběhové struktury. Chcete vidět homosexuální znásilnění sbližující dva nepřátele na život a na smrt?', 'year' => 1994, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('krimi'),Genre::getGenreIdByUrl('drama')]);
        
        $title = Title::create(['title_name' => 'Pán prstenů: Společenstvo Prstenu', 'price' => 20, 'description' => 'Hlavním hrdinou je hobit Frodo Pytlík, který se ve své vlastní domovině zvané Středozemě dostal do samotného centra bitvy mytických proporcí. Bude muset během svého putování prokázat, že moc přátelství a individuální odvahy dokáže úspěšně čelit i těm nejničivějším silám temnoty. Frodova dobrodružství odstartuje dar jeho příbuzného Bilba. Od něj získá magický prsten, který Froda postaví do soboje se silami zla reprezentovanými krutovládcem Sauronem. Ten touží za každou cenu získat prsten, protože je pro něj zdrojem neomezené moci, jedině s jeho pomocí se mu může podařit zotročit lid Středozemě a stát se jeho neomezeným pánem. Ve snaze čelit Sauronovým temným plánům, se musí Frodo spojit se několika dalšími bytostmi. Vytvoří s nimi takzvané Společenstvo složené z jeho přátel, čaroděje, elfa, trpaslíka a dalších pomocníků, se kterými se vydá na cestu na jejímž konci doufají, že se jim podaří prsten jednou provždy zničit. Jejich cesta však prokáže, že nejenom magické prsteny, ale také sounáležitost všech živých bytostí mohou dokázat netušené věci. Musí však čelit nejen nebezpečím, která na ně číhají na územích ovládaných Sauronem, ale i rozkladné moci samotného prstenu.', 'year' => 2001, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('fantasy'),Genre::getGenreIdByUrl('dobrodruzny'),Genre::getGenreIdByUrl('akcni')]);

        $title = Title::create(['title_name' => 'Tenkrát na Západě', 'price' => 20, 'description' => 'Opuštěná železniční stanice, na které tři muži trpělivě čekají na příjezd vlaku, je legendárním prologem jednoho z nejslavnějších westernů v historii světové kinematografie. Ty tři poslal bezcitný modrooký pistolník Frank, aby se postarali o muže, který si říká Harmonika a chce si s Frankem vyřídit nějaké staré účty. V okamžiku, kdy na malém nádraží dojde k nevyhnutelné přestřelce, vyvraždí Frank se svými muži rodinu farmáře McBaina, a to jen chvíli předtím, než sem dorazí McBainova novomanželka Jill. Dalšími "figurami" ve hře se stávají bandita Čejen, na kterého se Frank pokusil vyvraždění McBainovy rodiny hodit a nemocí zmrzačený milionář Morton, pro kterého Frank pracuje. Tihle všichni mezi sebou rozehrají složitou hru plnou úskoků, intrik, podrazů a rychle letících kulek, hru kde jde nejen o vyprahlý kus pustiny, který by se díky blížící se železnici mohl stát zlatým dolem. Jde také o lásku, o chlapskou čest a pomstu. Frank totiž kdysi zavraždil Harmonikovi staršího bratra a mlčenlivý muž je odhodlán se pomstít. Aby se mohl stát vykonavatelem dávno odpřisáhlé odplaty, musí dokonce Frankovi zachránit život, když se ho pokusí zabít jeho vlastní lidé poštvaní Mortonem, který se cítí ohrožen Frankovou nenasytností a bezcitností. Slunce pálí, nízko nad zemí žene vítr všudypřítomný prach a jednotlivé postavy nevyhnutelně kráčí vstříc svému osudu.', 'year' => 1968, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('western'),Genre::getGenreIdByUrl('dobrodruzny')]);
        
        $title = Title::create(['title_name' => 'Pán prstenů: Návrat krále', 'price' => 25, 'description' => 'Nadchází čas rozhodující bitvy o přežití Středozemě. Putování jednotlivých členů Společenstva prstenu se dostává do poslední a rozhodující fáze. Čaroděj Gandalf, elf Legolas a trpaslík Gimli spěchají s dědicem trůnu Aragornem na pomoc zemi Gondor, která odolává ohromnému Sauronovu vojsku. Hobiti Frodo a Sam se v doprovodu Gluma snaží dostat hluboko do země Mordor, kde musí v ohních Hory osudu zničit magický Prsten moci. Jedině tak bude síla mocného pána temnot Saurona zlomena. Podaří se jim naplnit poslání Společenstva a zachránit Středozem? A za jakou cenu?', 'year' => 2003, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('fantasy'),Genre::getGenreIdByUrl('dobrodruzny'),Genre::getGenreIdByUrl('akcni')]);
        
        $title = Title::create(['title_name' => 'Mlčení jehňátek', 'price' => 24, 'description' => 'Clarice Starlingová, nadaná studentka akademie FBI, je přidělena agentu Crawfordovi vyšetřujícímu případ masového vraha Buffalo Billa, který své oběti stahuje z kůže. Clarice navštíví v baltimorské vězeňské nemocnici bývalého vynikajícího psychiatra Hannibala Lectera, odsouzeného na doživotí za sérii brutálních vražd a kanibalismus, který by o vrahovi mohl něco vědět. Odsouzený psychiatr Clarice zároveň děsí a fascinuje. Když je masovým vrahem unesena dcera senátorky Martinové, nabídne Clarice Lecterovi přijatelnější vězeňské podmínky výměnou za informaci, vedoucí k dopadení Buffalo Billa...', 'year' => 1991, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('krimi'),Genre::getGenreIdByUrl('thriller'),Genre::getGenreIdByUrl('drama')]);
        
        $title = Title::create(['title_name' => 'Temný rytíř', 'price' => 15, 'description' => 'Christian Bale se pod režijní taktovkou Christophera Nolana vrací v roli Bruce Waynea, který v kostýmu netopýřího muže Batmana pokračuje v boji se zločinem ve městě Gotham. A jeho nejnebezpečnějším protivníkem je král zločinců Joker (Heath Ledger). Akční dobrodružná fantasy v režii Christophera Nolana navazuje na film Batman začíná a Christian Bale si v ní zopakoval roli Batmana/Bruce Waynea v nekončícím boji se zločinem. Wayne v kostýmu netopýřího muže jde spolu s poručíkem Jamesem Gordonem (Gary Oldman) z Gothamské policie po králi zločinců Jokerovi známého podle symbolu - hrací karty s žolíkem - kterou zanechává na místech činu. Vtipálek s prořízlou tváří (Heath Ledger) má tentokrát v plánu Batmanovi dokázat, že slova Gotham a mír nikdy nebudou stát v jedné větě vedle sebe. Na uvolněné místo po bývalém králi místní mafie usedá Sal Maroni (Eric Roberts) a přebírá vládu nad většinou gangů v Gothamu. Na scéně se rovněž objevuje nový státní návladní Harvey Dent (Aaron Eckhart), který by rozdanými kartami (i s žolíkem v balíčku) mohl pořádně zamíchat...', 'year' => 2008, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('akcni'),Genre::getGenreIdByUrl('krimi'),Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('thriller')]);
        
        $title = Title::create(['title_name' => 'Gran Torino', 'price' => 30, 'description' => 'Film vypráví příběh neústupného válečného veterána Walta Kowalského, který si s přibývajícím věkem uvědomuje, že na nový svět už nestačí. Musí se konfrontovat jak se sousedy rozličného etnického původu, tak se svými hluboce zakořeněnými předsudky. Všechny staré sousedy postupně nahradili imigranti, kterými Walt ze srdce pohrdá. Podzim svého života tak spíš přežívá než dožívá. Až do oné noci, kdy se mu někdo pokusí ukrást jeho chloubu – nablýskaný sporťák Gran Torino. Elegantní tvary auta zapůsobí na Waltova neprůbojného souseda Thaa, který si krádeží snaží získat respekt v partě mladých výtržníků. Thaova rodina trvá na tom, aby si chlapec u Walta svůj nerozvážný čin odpracoval. Walt nakonec podlehne a vyzve mladíka k tomu, aby své aktivity nasměroval ve prospěch okolí. Díky Thaovi a jeho dobrosrdečné rodině Walt prozře a snad poprvé v životě se na své sousedy dívá bez předsudků. Veterán postupně odkryje i tu část duše, kterou skrývá již od války...', 'year' => 2008, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama')]);
        
        $title = Title::create(['title_name' => 'Matrix', 'price' => 20, 'description' => 'Uvěříte neuvěřitelnému! Představte si, že vaše realita je jen iluzí a vaše nejtemnější noční můry jsou ve skutečnosti pravdivé. Představte si, že vaše současnost je vlastně minulostí a to budoucí se děje právě teď. Když si to dokážete představit, potom se budete cítit jako hrdina snímku Matrix Thomas Anderson (Keanu Reeves). A věřte, že to nebude příjemný pocit. Anderson je normální mladý muž, který se jen snaží přežít v každodenním shonu moderního velkoměsta. A má všechny předpoklady aby se mu to povedlo: dobré přátele, milující rodinu a perspektivní práci v multinárodní počítačové společnosti Meta Cortech. Jednoho dne, nebo lépe řečeno noci, se však do jeho spokojeného mozku zakousne strašlivá noční můra. Zdá se mu, že byl proti své vůli vložen v podobě dat do počítače a všechno to, co až dosud považoval za svůj osud, je jen vírem dat okolo několika tištěných spojů. Má pocit, že mu byla jeho mysl ukradena a uvězněna v obřím Matrix počítače budoucnosti. Začíná vážně pochybovat o své každodenní skutečnosti. Byl skutečně vhozen do stroje? Kdo je za to zodpovědný? Je tam s ním zavřeno i těch několik stovek lidí, které zná? Nebo jsou to jen projekce, které mají udržet zdání reality? A pak je tu otázka nejdůležitější: pokud je to všechno pravda, co se stane, až jeho věznitelé přijdou na to, že ji zná?', 'year' => 1999, 'type' => 'movie', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('akcni'),Genre::getGenreIdByUrl('sci-fy')]);

        $title = Title::create(['title_name' => 'Černobyl', 'price' => 30, 'description' => 'Černobyl, pětidílná minisérie z koprodukce společností HBO a Sky, rekonstruuje příběh o jaderné havárii z roku 1986, jedné z nejhorších katastrof v historii způsobených člověkem, a o obětech, které byly učiněny pro záchranu Evropy před nepředstavitelnou pohromou. Dne 26. dubna 1986 otřásla jadernou elektrárnou v Černobylu na Ukrajině mohutná exploze, která uvolnila nebezpečné radioaktivní látky nejen na ukrajinském, běloruském a ruském území tehdejšího Sovětského svazu, ale také do oblastí Skandinávie a západní Evropy. Jared Harris ztvárňuje Valerije Legasova, předního sovětského jaderného fyzika, který vedl vyšetřování tragické události. Stellan Skarsgård hraje sovětského místopředsedu vlády Borise Ščerbinu, kterého Kreml pověřil vedením vládní komise zjišťující okolnosti havárie. Emily Watsonová představuje jadernou fyzičku Ulanu Khomyukovou, která chce odhalit tajemství kolem černobylského neštěstí.', 'year' => 2019, 'type' => 'serial', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('historicky')]);

        $title = Title::create(['title_name' => 'Bratrstvo neohrožených', 'price' => 20, 'description' => 'Bratrstvo neohrožených představuje zásadní počin v historii HBO i televize samotné. Jedná se o desetidílnou minisérii natočenou na motivy bestselleru spisovatele Stephena E. Ambroseho, jenž pojednává o elitní jednotce americké armády z 2. světové války známé jako Easy Company. Minisérie začíná v přísném výcvikovém táboře v Georgii v roce 1942 a vypráví o pozoruhodných úspěších této dobrovolnické střelecké roty, která se časného rána v osudný den "D" roku 1944 účastnila výsadku ve Francii. Stála v čele operace Market-Garden a prodělala ofenzívu na Rýně, zaútočila na nacisty v Bastogne i v Bulge a v roce 1945 pomáhala dobýt Hitlerovo "nedobytné" Orlí hnízdo v Berchtesgaden.', 'year' => 2001, 'type' => 'serial', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('historicky'),Genre::getGenreIdByUrl('valecny')]);

        $title = Title::create(['title_name' => 'Narcos', 'price' => 30, 'description' => 'Na konci 70. let dvacátého století se nechvalně proslulý zločinec Pablo Escobar poprvé zapojil do ilegální výroby kokainu. V červenci 1992 se mu podařilo uprchnout z vězení La Catedral, které kolumbijská vláda postavila podle Escobarových vlastních požadavků výměnou za to, že se vzdá úřadům a „odpyká” si tam trest nanejvýše pěti let odnětí svobody. Mezítím se Pablo Escobar stal legendárním drogovým baronem a narkoteroristou. Drsný kriminální seriál Narcos je inspirovaný skutečností a odehrává se v krutém a nemilosrdném světě kolumbisjkých drogových gangů. Jeho hlavním hrdinou je Steve Murphy (Boyd Holbrook). Agent DEA, amerického úřadu pro boj proti drogám, má za úkol dostat Escobara (Wagner Moura) a zničit jeho kartel Medellín. Murphymu pomáhá agent Javier Peña (Pedro Pascal), ale když oba dorazí do Kolumbie, zjišťují, že Escobar má mnohem závažnější problémy než nějakou DEA.', 'year' => 2015, 'type' => 'serial', 'state_id' => 1]);
        $title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('krimi'),Genre::getGenreIdByUrl('zivotopisny')]);


        //$title = Title::create(['title_name' => '', 'price' => 30, 'description' => '', 'year' => 2019, 'type' => 'serial', 'state_id' => 1]);
        //$title->genres()->sync([Genre::getGenreIdByUrl('drama'),Genre::getGenreIdByUrl('historicky')]);

        Language::create(['language' => 'Český']);
        Language::create(['language' => 'Anglický']);
        Language::create(['language' => 'Francouzský']);
        Language::create(['language' => 'Slovenský']);


        $titles = Title::get();
        $languages = Language::get();
        $stores = Store::get();

        foreach ($titles as $title) {
            foreach ($stores as $store) {
                foreach ($languages as $language) {
                    for ($i = 0; $i < 5; $i++) {
                        Item::create([
                            'language_id' => $language->id,
                            'store_id' => $store->id,
                            'title_id' => $title->id
                        ]);
                    }
                }
            }
        }
    }
}
