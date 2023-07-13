<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $articles = [
        [   
            "id" => 1,
            "argument" => "2050",
            "author" => "Valerio Gualerzi",
            "title" => "Una vecchia gloria punk contro le polveri sottili",
            "photo" => "https://picsum.photos/600",
            "body" => "Niente targhe alterne, niente blocchi del traffico o domeniche ecologiche. La carta che ha deciso di giocare New York nel tentativo di migliorare la qualità della sua aria è quella di sensibilizzare gli automobilisti convincendoli a spegnere il motore quando sono fermi.

            In base ai dati forniti dalla stessa amministrazione cittadina, automobili, camion e furgoni sarebbero infatti responsabili dell'11% delle polveri sottili presenti nell'aria della metropoli e del 27% dell'inquinamento da diossido d'azoto.
            
            Per la campagna, sui cui in una recente conferenza stampa il sindaco della Grande Mela Bill de Blasio ha annunciato di voler investire un milione di dollari, è stato arruolato Billy Idol, una vecchia gloria del punk britannico (conosciuta a dire il vero più che altro per la sua successiva fortunata virata sul pop). Chi non è più giovanissimo ricorderà ad esempio le sue hit Eyes without a face, o Rebel yell.
            
            La spiegazione sta nell'assonanza che in inglese hanno il nome della rockstar e l'atto di lasciare il motore inutilmente e pigramente acceso. Idol (idolo, ovviamente un nome d'arte) quando viene pronunciato suona molto simile infatti a idling un neologismo derivato da idle (aggettivo che descrive lo stare inattivi, oziosi) con cui si indica lo stare fermi con il motore acceso.
            
            Per Billy, ormai uscito dai radar del grande showbusiness, un bel colpo di fortuna con un improvviso ritorno di popolarità grazie al suo faccione che campeggierà su manifesti affissi sui grandi cartelloni pubblicitari e sulle fiancate dei taxi, affiancato dal perentorio monito \"Billy never idles. Neither should you”, che sarebbe come dire \"Billy non lascia mai il motore acceso, fai lo stesso anche tu\".
            
            Il problema dell'idling a New York, così come in moltre altre grandi città, riguarda soprattutto i camion e i furgoni impegnati nelle consegne di vari tipi di merce che lasciano il motore accesso mentro sono in sosta, spesso in doppia fila. Per questo l'amministrazione cittadina ha deciso di integrare la campagna pubblictaria con una serie di divieti e di multe salate a chi non rispetta l'obbligo di spegnere il motore.
            
            Confermando poi la passione tutta americana per risolvere i problemi attraverso il ricorso alla delazione, il governo di New York ha stabilito anche premi in denaro (87,5 dollari per la precisione) per chi segnala veicoli commerciali o mezzi pubblici che restano con il motore acceso. Possibilità che non si applica ai conducenti di auto private, anche se in teoria il divieto di non sostare per oltre 3 minuti (che scendono a 1 minuto nei pressi di una scuola) con il motore acceso."
        ],
        [
            "id"=> 2,
            "argument" => "A piccole dosi",
            "author" => "Maurizio Paganelli",
            "title" => "Cambio rotta, racconto climatico in Piemonte",
            "photo" => "https://picsum.photos/601",
            "body" => "Sembra che noi umani per avere una identità - parola complessa e di non facile interpretazione - dobbiamo entrare in una narrazione. Narrando ci definiamo in svariati modi. Ci identifichiamo e ci “relazioniamo” a seconda della nostra storia e delle nostre esperienze. E mutiamo nel tempo. Per cui è meglio parlare di varie identità che ci caratterizzano. Raccontiamo, fin dall’inizio dei secoli, chi siamo all’Altro. E noi, ogni singolo Io-Me, siamo tante cose: «Sono vasto. Contengo moltitudini», come scriveva Walt Whitman e come poi cantava Bob Dylan. Affermava Alberto Moravia, «le cose cominciano ad esistere a partire dal momento che vengono dette e soprattutto scritte».
            C’è tutto questo e molto altro nel progetto europeo “Cambio rotta” delle non profit piemontesi CrescereInsieme e World Friends. (https://world-friends.it/italia/cambio-rotta/).
            Cambiamento climatico e migrazioni, tra i 17 obiettivi di Sviluppo Sostenibile 2030 - target 12 e 13 - sono al centro dell’impegno del team di giovani che sta portando avanti il progetto nelle province di Asti, Alessandria e Vercelli con un confronto tra Nord e Sud del mondo, tra Piemonte (Italia) e Kajado, terra dei Maasai. (Kenya).
            «In Cambio Rotta, vogliamo parlare dei cambiamenti climatici sul nostro territorio – ha spiegato Monica Gallone, responsabile del progetto per la cooperativa CrescereInsieme - andando ad approfondire, per esempio, le questioni legate a siccità, crisi idrica, acqua come risorsa comune, le ripercussioni in agricoltura anche dal punto di vista del lavoro e della manodopera. Su questi argomenti serve un ragionamento e vogliamo farlo con i giovani under 35, puntando a valorizzare le loro idee e sensibilità. L’obiettivo è di raccontare in modo efficace ciò che capita a livello locale: il cambiamento climatico è qualcosa di portata globale ma agisce a livello locale e vogliamo capire meglio gli effetti sociali e ambientali che si stanno verificando anche qui, in Piemonte».
            Così si sono create e realizzate con successo varie tappe. Prima la Living Library, la libreria vivente condotta dall’antropologo-attore Marco Pollarolo."
        ],
        [
            "id"=> 3,
            "argument" => "Antenne",
            "author" => "Aldo Fontanarosa, Leandro Palestini",
            "title" => "Pirati digitali, boom di razzie. Pronta legge",
            "photo" => "https://picsum.photos/602",
            "body" => "I PIRATI calcio e delle serie tv aumentano le loro razzie. E il Senato italiano - per tutta risposta - spinge la nuova legge anti-pezzotto a un passo dal varo definitivo. I siti illegali saranno oscurati in 30 minuti; inasprite sanzioni e pene.
            Dunque i pirati sono scatenati in Italia. Nel 2022, l’Ipsos conta infiniti atti illegali nel Paese: ben 345 milioni. È come se tutti gli italiani avessero rubato 6 partite o film nell’anno, neonati inclusi.
            
            L’indagine dell’Ipsos - commissionata dalla Fapav, la Federazione che tutela le industrie del settore - stila anche la classifica dei contenuti sottratti illegalmente. Sono, nell’ordine, i film, le serie tv, i programmi evento (tipo X-Factor) e ovviamente il calcio in diretta.
            
            Il profilo dei pirati lascia a bocca aperta. Molti di loro sono adulti; hanno un lavoro (dunque potrebbero pagare un abbonamento alle tv a pagamento); e a volte sono laureati. Queste persone (in maggioranza di sesso maschile) sono ben consapevoli che il pezzotto è un’arma illegale e la pirateria, un reato. Eppure moltiplicano le razzie, nella convinzione che non saranno scoperte; e nel caso lo fossero, di non rischiare niente. Dazn - che sta garantendo entrate importanti ai club della Serie A - fa due conti. Le emittenti fuorilegge - assicura l’ad Stefano Azzi - ci sfilano dalla tasca 800 mila euro al giorno e 24 milioni al mese.
            
            Andrea Duilio, numero uno di Sky Italia, si appella quindi ai senatori perché varino entro l’estate il disegno di legge anti-pezzotto che la Camera ha approvato in prima lettura il 24 marzo. E spingono anche Andrea Abodi (ministro per lo Sport), il deputato Federico Mollicone (tra i padri delle nuove norme), il commissario dell’AgCom Massimiliano Capitanio, il presidente di Anica Francesco Rutelli.
            
            In questo clima, si mettono una mano sulla coscienza i senatori della Commissione Giustizia. In particolare Forza Italia che ritira gli emendamenti al testo già licenziato dalla Camera, a suo parere migliorativi. E così il disegno di legge approderà in aula a Palazzo Madama entro l’estate per il via libera definitivo. Le nuove norme assegnano al Garante - all’AgCom - il potere di oscurare emittenti, siti, app pirata, tempo 30 minuti. I ladri di contenuti editoriali rischiano sanzioni fino a 258.228 euro e il carcere, fino a 3 anni. "
        ],
        [
            "id"=> 4,
            "argument" => "Articolo 9",
            "author" => "Tomaso Montanari",
            "title" => "Se chiude la Biblioteca Nazionale di Firenze",
            "photo" => "https://picsum.photos/603",
            "body" => "Grazie all’encomiabile, assidua campagna di mobilitazione promossa dall’Associazione Lettori della Biblioteca Nazionale Centrale di Firenze ho appreso che quest’ultima, che è la più importante biblioteca italiana, potrebbe presto smettere di funzionare. Potrebbe chiudere, almeno in parte.

            Ad affermarlo è lo stesso direttore, Luca Bellingeri, in una intervista concessa alla «Nazione»: «Il rischio reale è che nell'arco di 3-4 anni la nostra biblioteca non sia più in grado di funzionare e che debba rinunciare almeno ad alcune delle sue attività istituzionali. Purtroppo c’è una soglia sotto cui non si può scendere e a mio avviso siamo molto vicini a questo momento».
            
            La causa? Lo smontaggio sistematico dello Stato attraverso il blocco del turn-over che, dall’inizio degli anni Novanta ha progressivamente e condannato intere generazioni al precariato o all’emigrazione e contemporaneamente distrutto quelli che Antonio Gramsci chiamava «servizi culturali pubblici».
            
            La colpa? Indistinguibilmente dei governi di centrodestra e di centrosinistra, egualmente responsabili.
            
            E, da ultimo, della retorica della valorizzazione di Dario Franceschini, che ha puntato tutto su ciò che può far cassa, condannando a morte il resto.
            
            Colpa di una destra che parla a sproposito di ‘identità nazionale’ per dare qualche nobile pennellata alla sua caccia al nero e al diverso, ma ignora cosa sia una Biblioteca, appunto, nazionale. Colpa di una sinistra che ha tradito su tutta la linea e che ha fatto del sospetto per chi legge e studia (i «gufi» e i «professoroni») una bandiera. Colpa di una classe dirigente (fatta di giornalisti, professori, imprenditori) del tutto disinteressata alla sorte del patrimonio culturale.
            
            Per combattere il primo squadrismo fascista, Nello Rosselli fondò proprio a Firenze una piccola biblioteca per ragazzi, nel popolare quartiere di San Frediano. Un secolo dopo, con un nuovo fascismo squadrista che dilaga e conquista il governo, la Biblioteca Nazionale di Firenze rischia di chiudere per colpa delle politiche attuate da chi avrebbe dovuto raccogliere l’eredità dei Rosselli.
            
            È fin troppo evidente che c’è un nesso tra le biblioteche che chiudono e il razzismo e il fascismo che avanzano. Ed è anche evidente che far funzionare la Biblioteca nazionale è più antifascista che chiamare i cittadini in piazza a cantare Bella Ciao contro Salvini.
            
            O la Sinistra lo capisce, e ricomincia da qui, oppure ogni richiamo all’antifascismo, per non dire ogni discorso sulla leadership, sulle alleanze, sulle piattaforme sarà drammaticamente vano."
        ],
        [
            "id"=> 5,
            "argument" => "Asiaticom",
            "author" => "Raimondo Bultrini",
            "title" => "Thich Nhat Nahn, apostolo di franchezza",
            "photo" => "https://picsum.photos/604",
            "body" => "Mentre si accavallano le voci sulle precarie condizioni di salute del celebre monaco buddhista Thich Nhat Hanh, vorrei offrire a chi legge un vecchio articolo di 15 anni fa nel quale ne presento il pensiero racchiuso in uno dei suoi molti libri che mi fu chiesto di recensire per La Repubblica. Buone e serene feste a tutti.

            Le battaglie di un apostolo zen
            di Raimondo Bultrini, Rubrica \"Cultura\" 22 aprile 2005
            (Nella foto copertina del libro L'unica nostra arma è la pace. Il coraggio di costruire un mondo senza conflitti: Mondadori)
            
            «Un giorno stavo piantando un chiodo con il martello. La mano destra non era molto attenta e invece di colpire il chiodo il martello si è abbattuto su un dito della mano sinistra. La destra allora ha messo subito giù il martello e si è presa cura in modo molto tenero della mano sinistra…». Da bravo maestro zen il celebre monaco vietnamita Thich Nhat Hanh usa un paradosso per descrivere la sollecitudine con cui un uomo saggio dovrebbe comportarsi verso il prossimo e il diverso.
            
            Cresciuto tra le guerre dei francesi prima e degli americani poi contro il suo popolo, ha sperimentato fin da bambino le rivoluzionarie potenzialità della filosofia buddista contro uomini distratti dal desiderio di possesso e di dominio degli uni sugli altri. Esiliato dal suo paese per 39 anni perché chiedeva ad entrambi i contendenti di riporre le armi, è stato riaccolto dai comunisti di Hanoi solo pochi mesi fa. Un premio alla pazienza di quest¿uomo dalla testa rasata e le orecchie appuntite come un Jedi che usa il semplice respiro al posto delle spade laser per sconfiggere le Forze del Male, ovvero «le emozioni negative della rabbia, dell'egoismo, della gelosia e l'invidia» che – come ha scritto nei suoi cento libri pubblicati in tutte le lingue – sono all’origine dei conflitti individuali e delle guerre.
            
            Residente abitualmente (oggi vive nel suo monastero in Vietnam, ndr) in una campagna nel Sud della Francia dove istruisce i suoi studenti al rispetto della natura e dei codici di comportamento consapevoli, Thich Nhat Hanh è in Italia da oggi per un seminario di cinque giorni nella Pineta di Castelfusano con un migliaio di partecipanti già prenotati da tutt’Italia. Il giorno 28 guiderà a Roma una «camminata in meditazione» dall’Arco di Costantino al Campidoglio dove sarà ricevuto dal sindaco Walter Veltroni. La stessa sera terrà una conferenza pubblica all’Auditorium Parco della Musica con un titolo che racchiude il significato del suo apostolato non violento.
            
            Non sono pochi coloro che, dopo aver ascoltato gli insegnamenti dell’anziano monaco buddhista, hanno radicalmente trasformato le loro esistenze per intraprendere un percorso interiore centrato sulla consapevolezza dell’esperienza come veicolo del sapere, a cominciare dal modo di respirare, camminare e mangiare. «Se ci concediamo di vivere nella presenza mentale – scrive nel suo ultimo saggio L’Unica nostra arma è la Pace (Oscar Mondadori) – scopriremo che vivere una vita semplice e consumare di meno sono le vere condizioni per essere felici». Esattamente il contrario dell’andamento di un’economia mondiale basata sulla produzione di merci «fabbricate – scrive – per non durare a lungo».
            
            Ma la componente filosofica degli insegnamenti di Thich Naht Hanh è solo una parte del decalogo di consigli estremamente pratici basati sull’attenzione ai più minuscoli dettagli dell’agire quotidiano che trasformano «una passeggiata, la fila alla Posta o l’attesa a un semaforo rosso» in altrettante occasioni di crescita interiore, specialmente se l’attenzione della mente è rivolta in maniera appropriata «a placare i pensieri che inseguono i desideri, siano essi di potere o di sesso spesso all’origine della sofferenza e dell’insoddisfazione». «Inspirando, calmo il mio corpo, espirando sorrido», è scritto in uno dei suoi manuali di istruzioni per la consapevolezza basati sul solo «vero potere dell’uomo», ovvero la presenza mentale, la concentrazione «qui ed ora» come antidoto alle tensioni create dall’assillo degli errori passati e dalle paure di ciò che potrebbe accadere in futuro.
            
            Thich Naht Hanh divenne celebre negli anni ‘60 quando – costretto a restare in esilio in America dopo i suoi appelli alla pace incondizionata – convinse Martin Luther King (che lo propose per il Nobel) a battersi per il ritiro delle truppe Usa dal Vietnam: «Spendete migliaia di dollari per sconfiggere la violenza all’esterno – disse in un celebre discorso al Senato Usa – ma non avete fatto nulla per diminuire la violenza nelle vostre famiglie e nelle scuole».
            
            Apostolo di franchezza, il monaco zen sorprese i suoi stessi fratelli di fede con argomenti estremi come quelli contro ogni «verità assoluta». «Se crediamo che il buddismo sia l’unica via verso la felicità – ha scritto nel suo ultimo saggio – esercitiamo una sorta di violenza, visto che discriminiamo ed escludiamo coloro che seguono altri sentieri spirituali».
            
            Già durante l¿invasione francese del Vietnam creò un caso religioso e politico (l’80 per cento del paese è buddista) abbandonando la quiete dei monasteri per praticare quella che definì «la compassione in azione». Assieme al primo nucleo dei suoi studenti fondò ospedali da campo e gruppi di lavoro per curare e aiutare indistintamente tutte le vittime della guerra. Decine di monaci e laici dei suoi gruppi di resistenza non violenta ribattezzati «I Piccoli corpi di Pace» vennero uccisi mentre si davano da fare per ricostruire ospedali e villaggi distrutti portando assistenza alle vittime di tutti i fronti, dai vietcong comunisti ai filoamericani del Sud.
            
            Se Thich Naht Hanh non ha ancora rivevuto il Nobel della Pace come il suo grande estimatore il Dalai Lama è stato anche a causa della sua severa e spregiudicata equidistanza da ogni parte in causa. «Sono in tanti a saper scrivere una lettera di protesta – ha detto più volte ai militanti pacifisti – ma non molti di noi sanno scrivere una lettera d’amore».
            
            Nell’ultimo libro racconta di un «amico che vive nell’Europa centrale ed è un attivista in campo ambientalista. E’ molto arrabbiato e infelice con i genitori, gli amici, la società, inquina il suo corpo e la mente con la nicotina, l’alcol e i giudizi negativi sugli altri. Non sa come fare la pace dentro di sé. Sarà anche un militante del movimento per la protezione dell’ambiente, ma non certo della protezione di sé stesso. Dubito davvero molto – è il suo commento – che avrà successo nei suoi intenti». E aggiunge: «Se non sai gestire la rabbia e la violenza dentro di te, è impossibile che tu sappia aiutare qualcun altro», scrive. Compito della mente – dice – è di distinguere sempre più chiaramente i diversi semi che vogliamo innaffiare. «Se daremo acqua e concime ai semi dell’odio e della rabbia non raccoglieremo mai i fiori della compassione e della generosità»."
        ],
        [
            "id"=> 6,
            "argument" => "Beauty & Consumi",
            "author" => "Monica Rubino",
            "title" => "Dal boom sui social alla scarpa \"Lola\":il fenomeno \"Silvia-Negozio Paolo Ricci",
            "photo" => "https://picsum.photos/605",
            "body" => "Quella scarpiera era l’oggetto dei suoi desideri di bambina. All’interno la nonna Lola custodiva le sue eleganti scarpe, modelli anni Cinquanta fatti a mano con sapienza e dedizione artigianale. La piccola Silvia era l’unica nipotina ad avere accesso alle scarpe di nonna Lola. Non ci giocava ma si limitava a contemplarle. Era una bimba ma già in lei si era accesa la scintilla della moda e il gusto per lo stile (da quando aveva imparato a camminare pretendeva di scegliersi le scarpe da sola). Una scintilla che, crescendo, è diventata il fuoco che l’ha resa una stilista appassionata. Oggi Silvia Marmorini è una bellissima donna,  proprietaria di una raffinata boutique - il Negozio Paolo Ricci di Arezzo - e star dei social con i suoi oltre 40mila follower su Instagram. Nel 2022 ha disegnato una scarpa dal design inconfondibile e divenuta ormai iconica che, non a caso, si chiama proprio “Lola” in onore di sua nonna.

            Lola rappresenta la sintesi di tre modelli delle scarpe di nonna Lola rimaste impresse nella memoria di Silvia. È una calzatura raffinatissima, dal sapore vintage plasmato però sulle esigenze della donna contemporanea. Il tacco da 7 cm è montato in asse con la schiena ed è pensato per camminare a passo svelto persino sui sanpietrini (“per una camminata alla bersagliera”, scherza Silvia).
            La Lola si adatta ad ogni outfit – dal classico al più sportivo – ed è un concentrato di femminilità con la sua punta stondata e il piccolo oblò che lascia intravedere le dita del piede. È proposta in diverse combinazioni di colore ed è prodotta dall’azienda Lenora di Desenzano del Garda, che realizza scarpe di lusso con una lavorazione artigianale, attenta al minimo dettaglio (dalla scelta dei pellami ai micro-aghi usati per le impunture) e che ha realizzato una linea di calzature ad hoc per Silvia.

            Il progetto della scarpa “Lola”, infatti, è solo uno dei tanti della vulcanica proprietaria del Negozio Paolo Ricci. Non bisogna dimenticare anche un’altra sua creazione: lo stivaletto “Silvia” che porta il suo nome. In nappa nera da guanteria, morbidissimo, con un tacco grintoso e ultra-femminile, decorato da un charm placcato oro 18 carati con zirconi, sprigiona sensualità in ogni suo aspetto. Disegnato da Silvia e prodotto sempre da Lenora, si può indossare con le calze o senza, per 12 mesi all’anno."
        ],
        [
            "id"=> 7,
            "argument" => "BlogMotori",
            "author" => "Vincenzo Borgomeo",
            "title" => "Lambretta Junior, gli appasionati ringraziano",
            "photo" => "https://picsum.photos/606",
            "body" => "Nella storia della Lambretta un posto speciale spetta alla serie Junior, destinata ad un pubblico più giovane e con un prezzo di vendita più contenuto rispetto alle tradizionali versioni LI e TV. Uno scooter strategico per fare concorrenza a sua maestà Vespa visto che agli inizi degli anni Sessanta, quando la Innocenti compì un salto tecnologico nella costruzione della Lambretta, era proprio questo l’intento del suo due ruote con telaio a scocca portante. Ed è proprio a questo modello che Vittorio Tessera dedica l’ultima sua fatica letteraria con un libro dal nome didascalico: “Lambretta Junior” (Giorgio Nada Editore, formato: 26x25 cm, 120 pagine, testo italiano-inglese, 38 euro).

            Il titolo è un inno al modello Junior prodotto in diverse cilindrate, dalla più piccola 50 cc, dedicata ai giovani quattordicenni, alle più performanti 100 e 125, rivolte a chi voleva sfruttare il perfetto bilanciamento della Lambretta che la rendeva una “quasi moto”.  Inizialmente, nei primi mesi del 1964, fu offerta nella sola cilindrata di 100 cc, destinata in prevalenza ai mercati esteri; poi, alla fine del 1964, venne allargata la gamma con i modelli di 50 cc e 125 cc. Una caratterizzazione sportiva che portò la Lambretta a proporre nel 1966 anche la nuova 125 4 marce, più brillante e veloce e poi, nel 1968, la 50 DL con i cofani ridisegnati e le ruote da 10 pollici.
            
            Ecco nel libro c’è spazio per tutto questo, anche per l’ultima versione prodotta, la 50 Special con alcune migliorie estetiche e nuovi colori. Quest’ultimo modello è rimasto in produzione fino alla chiusura dello stabilimento nel maggio 1971. E visto che in totale sono stati prodotti 167.784 esemplari nelle tre cilindrate, la Junior conta ancora oggi tanti appassionati. A loro è dedicata la straordinaria ricerca fotografica del libro, realizzata grazie alla preziosa collaborazione dello Studio Zabban, fotografo ufficiale Innocenti dal 1957 al 1968.
            
            Tanti gli aspetti inediti della storia della Lambretta, legati alla produzione, alla tecnica, alla pubblicità e a molto altro ancora. Un patrimonio storico riscoperto dall’autore grazie alla diretta collaborazione della famiglia Innocenti che ha aperto per l’occasione i cassetti del suo passato."
        ],
        [
            "id"=> 8,
            "argument" => "Bloooog!",
            "author" => "Fabrizio Bocca",
            "title" => "Un saluto a tutti gli amici e i frequentatori di questo grande e unico Bar Sport",
            "photo" => "https://picsum.photos/607",
            "body" => "Si chiude qui. Lo scrivo una domenica sera, questa, nell’ora canonica delle mille partite che abbiamo visto e poi discusso insieme. Ma non sto parlando di una partita o di uno dei tanti campionati che abbiamo vissuto. E’ il modo migliore e più diretto – un po’ crudo, lo ammetto – per dire che siamo arrivati al capolinea, che bisogna scendere tutti dal tram perché la corsa si ferma.

            Bloooog! – la parola blog urlata come Gooool! – termina la sua avventura su Repubblica perché fatalmente arriva quel momento di svolta nella vita di ognuno di noi. Ci sono tanti anni di lavoro sulle spalle e dunque l’alt diventa inevitabile, giusto, sano, rispettoso e doveroso verso i giovani che ora percorreranno la tua stessa strada. Per me non è assolutamente un dramma, capita a tutti, lo trovo naturale. Possiamo anche dire che è solo un cambio di prospettiva o di status. Punto e a capo.
          
            Bloooog! è nato 14 anni fa, nel 2008, così quasi per caso, per sperimentare le nuove forme di comunicazione. Inizialmente solo un piccolo blog poi, strada facendo, sempre qualcosa di più, un sito internet e soprattutto una grande comunità di persone abituata a incontrarsi qui per parlare di calcio ma in realtà per parlare di tutto, della vita, del mondo. E poi per farsi compagnia, socializzare, fare amicizia e a volte litigare, perché no.
          
            Non faccio nomi perché sarebbe impossibile citarne almeno un numero sufficiente, tanti sono e sono stati delle vere e proprie colonne, guide eccezionali che possono accompagnarci nel mondo di Bloooog! assai meglio di me. Qualcuno, in un lasso di tempo così lungo, purtroppo ci ha anche lasciato. Non posso non mandare un pensiero a Riccardo, che tanto ha voluto dire per noi. E che tanto ci ha insegnato e lasciato.
          
            Qualche tempo fa abbiamo tagliato il traguardo del milione di commenti pubblicati, ogni tanto ci faccio un’immersione dentro. E’ un mondo immenso e straordinario ma non saprei assolutamente dargli ordine o logica perché ho sempre pensato a Bloooog! come a qualcosa che ti accompagna giorno per giorno, che va vissuto sul momento. Come il caffè o l’aperitivo scorrendo il quotidiano sportivo sul bancone di questo Bar Sport, guardando la partita sulla tv appesa al muro, la classifica di Serie A in bacheca e gli amici accanto per discutere.
          
             Già, perché ho sempre concepito Bloooog! come un Bar Sport virtuale aperto 24 ore su 24, dove le persone si incontrano parlando delle partite, dove ci si conosce sempre meglio, dove vizi e virtù si amplificano, un posto con le porte aperte sulla piazza del paese e dove il tempo è scandito dai calendari, dagli orari rituali e poi via via sempre più impazziti delle partite. Seguire il calcio così come viene, senza deformarlo, ma raccontandolo semplicemente e crudamente dal proprio punto di vista, prendendo sempre posizione, con sincerità, senza trucchi o effetti speciali. Partigianamente e da tifosi certo, l’anima vera del calcio è questa. Un posto libero, senza barriere, dove le parole scorrono meravigliosamente e senza eccessive formalità. Bloooog! ha sempre avuto, magari senza inizialmente rendersene conto, un profondo, democratico e paritario spirito social. Soprattutto il posto non delle mie chiacchiere ma dei vostri pensieri, siete stati voi a fare di questo Bar Sport qualcosa di speciale e unico.
          
            Vi ringrazio tutti col cuore, siamo stati così tanto insieme che sarà inevitabile ritrovarsi. Ringrazio Repubblica, il mio giornale, per avermi permesso di fare questo.
          
            Beh, adesso ci siamo. Adesso esco davvero da quella porta. E casomai non vi rivedessi, buon pomeriggio, buonasera e buonanotte."
        ]
    ];
    return view('home', ['articoli' => $articles]);
})->name('home');

Route::get('/servizi', function(){
    return view('servizi');
})->name('servizi');

Route::get('/chi-siamo', function(){
    return view('chisiamo');
})->name('chisiamo');

Route::get('/explode/{id}', function($id){
    $articles = [
        [   
            "id" => 1,
            "argument" => "2050",
            "author" => "Valerio Gualerzi",
            "title" => "Una vecchia gloria punk contro le polveri sottili",
            "photo" => "https://picsum.photos/600",
            "body" => "Niente targhe alterne, niente blocchi del traffico o domeniche ecologiche. La carta che ha deciso di giocare New York nel tentativo di migliorare la qualità della sua aria è quella di sensibilizzare gli automobilisti convincendoli a spegnere il motore quando sono fermi.

            In base ai dati forniti dalla stessa amministrazione cittadina, automobili, camion e furgoni sarebbero infatti responsabili dell'11% delle polveri sottili presenti nell'aria della metropoli e del 27% dell'inquinamento da diossido d'azoto.
            
            Per la campagna, sui cui in una recente conferenza stampa il sindaco della Grande Mela Bill de Blasio ha annunciato di voler investire un milione di dollari, è stato arruolato Billy Idol, una vecchia gloria del punk britannico (conosciuta a dire il vero più che altro per la sua successiva fortunata virata sul pop). Chi non è più giovanissimo ricorderà ad esempio le sue hit Eyes without a face, o Rebel yell.
            
            La spiegazione sta nell'assonanza che in inglese hanno il nome della rockstar e l'atto di lasciare il motore inutilmente e pigramente acceso. Idol (idolo, ovviamente un nome d'arte) quando viene pronunciato suona molto simile infatti a idling un neologismo derivato da idle (aggettivo che descrive lo stare inattivi, oziosi) con cui si indica lo stare fermi con il motore acceso.
            
            Per Billy, ormai uscito dai radar del grande showbusiness, un bel colpo di fortuna con un improvviso ritorno di popolarità grazie al suo faccione che campeggierà su manifesti affissi sui grandi cartelloni pubblicitari e sulle fiancate dei taxi, affiancato dal perentorio monito \"Billy never idles. Neither should you”, che sarebbe come dire \"Billy non lascia mai il motore acceso, fai lo stesso anche tu\".
            
            Il problema dell'idling a New York, così come in moltre altre grandi città, riguarda soprattutto i camion e i furgoni impegnati nelle consegne di vari tipi di merce che lasciano il motore accesso mentro sono in sosta, spesso in doppia fila. Per questo l'amministrazione cittadina ha deciso di integrare la campagna pubblictaria con una serie di divieti e di multe salate a chi non rispetta l'obbligo di spegnere il motore.
            
            Confermando poi la passione tutta americana per risolvere i problemi attraverso il ricorso alla delazione, il governo di New York ha stabilito anche premi in denaro (87,5 dollari per la precisione) per chi segnala veicoli commerciali o mezzi pubblici che restano con il motore acceso. Possibilità che non si applica ai conducenti di auto private, anche se in teoria il divieto di non sostare per oltre 3 minuti (che scendono a 1 minuto nei pressi di una scuola) con il motore acceso."
        ],
        [
            "id"=> 2,
            "argument" => "A piccole dosi",
            "author" => "Maurizio Paganelli",
            "title" => "Cambio rotta, racconto climatico in Piemonte",
            "photo" => "https://picsum.photos/601",
            "body" => "Sembra che noi umani per avere una identità - parola complessa e di non facile interpretazione - dobbiamo entrare in una narrazione. Narrando ci definiamo in svariati modi. Ci identifichiamo e ci “relazioniamo” a seconda della nostra storia e delle nostre esperienze. E mutiamo nel tempo. Per cui è meglio parlare di varie identità che ci caratterizzano. Raccontiamo, fin dall’inizio dei secoli, chi siamo all’Altro. E noi, ogni singolo Io-Me, siamo tante cose: «Sono vasto. Contengo moltitudini», come scriveva Walt Whitman e come poi cantava Bob Dylan. Affermava Alberto Moravia, «le cose cominciano ad esistere a partire dal momento che vengono dette e soprattutto scritte».
            C’è tutto questo e molto altro nel progetto europeo “Cambio rotta” delle non profit piemontesi CrescereInsieme e World Friends. (https://world-friends.it/italia/cambio-rotta/).
            Cambiamento climatico e migrazioni, tra i 17 obiettivi di Sviluppo Sostenibile 2030 - target 12 e 13 - sono al centro dell’impegno del team di giovani che sta portando avanti il progetto nelle province di Asti, Alessandria e Vercelli con un confronto tra Nord e Sud del mondo, tra Piemonte (Italia) e Kajado, terra dei Maasai. (Kenya).
            «In Cambio Rotta, vogliamo parlare dei cambiamenti climatici sul nostro territorio – ha spiegato Monica Gallone, responsabile del progetto per la cooperativa CrescereInsieme - andando ad approfondire, per esempio, le questioni legate a siccità, crisi idrica, acqua come risorsa comune, le ripercussioni in agricoltura anche dal punto di vista del lavoro e della manodopera. Su questi argomenti serve un ragionamento e vogliamo farlo con i giovani under 35, puntando a valorizzare le loro idee e sensibilità. L’obiettivo è di raccontare in modo efficace ciò che capita a livello locale: il cambiamento climatico è qualcosa di portata globale ma agisce a livello locale e vogliamo capire meglio gli effetti sociali e ambientali che si stanno verificando anche qui, in Piemonte».
            Così si sono create e realizzate con successo varie tappe. Prima la Living Library, la libreria vivente condotta dall’antropologo-attore Marco Pollarolo."
        ],
        [
            "id"=> 3,
            "argument" => "Antenne",
            "author" => "Aldo Fontanarosa, Leandro Palestini",
            "title" => "Pirati digitali, boom di razzie. Pronta legge",
            "photo" => "https://picsum.photos/602",
            "body" => "I PIRATI calcio e delle serie tv aumentano le loro razzie. E il Senato italiano - per tutta risposta - spinge la nuova legge anti-pezzotto a un passo dal varo definitivo. I siti illegali saranno oscurati in 30 minuti; inasprite sanzioni e pene.
            Dunque i pirati sono scatenati in Italia. Nel 2022, l’Ipsos conta infiniti atti illegali nel Paese: ben 345 milioni. È come se tutti gli italiani avessero rubato 6 partite o film nell’anno, neonati inclusi.
            
            L’indagine dell’Ipsos - commissionata dalla Fapav, la Federazione che tutela le industrie del settore - stila anche la classifica dei contenuti sottratti illegalmente. Sono, nell’ordine, i film, le serie tv, i programmi evento (tipo X-Factor) e ovviamente il calcio in diretta.
            
            Il profilo dei pirati lascia a bocca aperta. Molti di loro sono adulti; hanno un lavoro (dunque potrebbero pagare un abbonamento alle tv a pagamento); e a volte sono laureati. Queste persone (in maggioranza di sesso maschile) sono ben consapevoli che il pezzotto è un’arma illegale e la pirateria, un reato. Eppure moltiplicano le razzie, nella convinzione che non saranno scoperte; e nel caso lo fossero, di non rischiare niente. Dazn - che sta garantendo entrate importanti ai club della Serie A - fa due conti. Le emittenti fuorilegge - assicura l’ad Stefano Azzi - ci sfilano dalla tasca 800 mila euro al giorno e 24 milioni al mese.
            
            Andrea Duilio, numero uno di Sky Italia, si appella quindi ai senatori perché varino entro l’estate il disegno di legge anti-pezzotto che la Camera ha approvato in prima lettura il 24 marzo. E spingono anche Andrea Abodi (ministro per lo Sport), il deputato Federico Mollicone (tra i padri delle nuove norme), il commissario dell’AgCom Massimiliano Capitanio, il presidente di Anica Francesco Rutelli.
            
            In questo clima, si mettono una mano sulla coscienza i senatori della Commissione Giustizia. In particolare Forza Italia che ritira gli emendamenti al testo già licenziato dalla Camera, a suo parere migliorativi. E così il disegno di legge approderà in aula a Palazzo Madama entro l’estate per il via libera definitivo. Le nuove norme assegnano al Garante - all’AgCom - il potere di oscurare emittenti, siti, app pirata, tempo 30 minuti. I ladri di contenuti editoriali rischiano sanzioni fino a 258.228 euro e il carcere, fino a 3 anni. "
        ],
        [
            "id"=> 4,
            "argument" => "Articolo 9",
            "author" => "Tomaso Montanari",
            "title" => "Se chiude la Biblioteca Nazionale di Firenze",
            "photo" => "https://picsum.photos/603",
            "body" => "Grazie all’encomiabile, assidua campagna di mobilitazione promossa dall’Associazione Lettori della Biblioteca Nazionale Centrale di Firenze ho appreso che quest’ultima, che è la più importante biblioteca italiana, potrebbe presto smettere di funzionare. Potrebbe chiudere, almeno in parte.

            Ad affermarlo è lo stesso direttore, Luca Bellingeri, in una intervista concessa alla «Nazione»: «Il rischio reale è che nell'arco di 3-4 anni la nostra biblioteca non sia più in grado di funzionare e che debba rinunciare almeno ad alcune delle sue attività istituzionali. Purtroppo c’è una soglia sotto cui non si può scendere e a mio avviso siamo molto vicini a questo momento».
            
            La causa? Lo smontaggio sistematico dello Stato attraverso il blocco del turn-over che, dall’inizio degli anni Novanta ha progressivamente e condannato intere generazioni al precariato o all’emigrazione e contemporaneamente distrutto quelli che Antonio Gramsci chiamava «servizi culturali pubblici».
            
            La colpa? Indistinguibilmente dei governi di centrodestra e di centrosinistra, egualmente responsabili.
            
            E, da ultimo, della retorica della valorizzazione di Dario Franceschini, che ha puntato tutto su ciò che può far cassa, condannando a morte il resto.
            
            Colpa di una destra che parla a sproposito di ‘identità nazionale’ per dare qualche nobile pennellata alla sua caccia al nero e al diverso, ma ignora cosa sia una Biblioteca, appunto, nazionale. Colpa di una sinistra che ha tradito su tutta la linea e che ha fatto del sospetto per chi legge e studia (i «gufi» e i «professoroni») una bandiera. Colpa di una classe dirigente (fatta di giornalisti, professori, imprenditori) del tutto disinteressata alla sorte del patrimonio culturale.
            
            Per combattere il primo squadrismo fascista, Nello Rosselli fondò proprio a Firenze una piccola biblioteca per ragazzi, nel popolare quartiere di San Frediano. Un secolo dopo, con un nuovo fascismo squadrista che dilaga e conquista il governo, la Biblioteca Nazionale di Firenze rischia di chiudere per colpa delle politiche attuate da chi avrebbe dovuto raccogliere l’eredità dei Rosselli.
            
            È fin troppo evidente che c’è un nesso tra le biblioteche che chiudono e il razzismo e il fascismo che avanzano. Ed è anche evidente che far funzionare la Biblioteca nazionale è più antifascista che chiamare i cittadini in piazza a cantare Bella Ciao contro Salvini.
            
            O la Sinistra lo capisce, e ricomincia da qui, oppure ogni richiamo all’antifascismo, per non dire ogni discorso sulla leadership, sulle alleanze, sulle piattaforme sarà drammaticamente vano."
        ],
        [
            "id"=> 5,
            "argument" => "Asiaticom",
            "author" => "Raimondo Bultrini",
            "title" => "Thich Nhat Nahn, apostolo di franchezza",
            "photo" => "https://picsum.photos/604",
            "body" => "Mentre si accavallano le voci sulle precarie condizioni di salute del celebre monaco buddhista Thich Nhat Hanh, vorrei offrire a chi legge un vecchio articolo di 15 anni fa nel quale ne presento il pensiero racchiuso in uno dei suoi molti libri che mi fu chiesto di recensire per La Repubblica. Buone e serene feste a tutti.

            Le battaglie di un apostolo zen
            di Raimondo Bultrini, Rubrica \"Cultura\" 22 aprile 2005
            (Nella foto copertina del libro L'unica nostra arma è la pace. Il coraggio di costruire un mondo senza conflitti: Mondadori)
            
            «Un giorno stavo piantando un chiodo con il martello. La mano destra non era molto attenta e invece di colpire il chiodo il martello si è abbattuto su un dito della mano sinistra. La destra allora ha messo subito giù il martello e si è presa cura in modo molto tenero della mano sinistra…». Da bravo maestro zen il celebre monaco vietnamita Thich Nhat Hanh usa un paradosso per descrivere la sollecitudine con cui un uomo saggio dovrebbe comportarsi verso il prossimo e il diverso.
            
            Cresciuto tra le guerre dei francesi prima e degli americani poi contro il suo popolo, ha sperimentato fin da bambino le rivoluzionarie potenzialità della filosofia buddista contro uomini distratti dal desiderio di possesso e di dominio degli uni sugli altri. Esiliato dal suo paese per 39 anni perché chiedeva ad entrambi i contendenti di riporre le armi, è stato riaccolto dai comunisti di Hanoi solo pochi mesi fa. Un premio alla pazienza di quest¿uomo dalla testa rasata e le orecchie appuntite come un Jedi che usa il semplice respiro al posto delle spade laser per sconfiggere le Forze del Male, ovvero «le emozioni negative della rabbia, dell'egoismo, della gelosia e l'invidia» che – come ha scritto nei suoi cento libri pubblicati in tutte le lingue – sono all’origine dei conflitti individuali e delle guerre.
            
            Residente abitualmente (oggi vive nel suo monastero in Vietnam, ndr) in una campagna nel Sud della Francia dove istruisce i suoi studenti al rispetto della natura e dei codici di comportamento consapevoli, Thich Nhat Hanh è in Italia da oggi per un seminario di cinque giorni nella Pineta di Castelfusano con un migliaio di partecipanti già prenotati da tutt’Italia. Il giorno 28 guiderà a Roma una «camminata in meditazione» dall’Arco di Costantino al Campidoglio dove sarà ricevuto dal sindaco Walter Veltroni. La stessa sera terrà una conferenza pubblica all’Auditorium Parco della Musica con un titolo che racchiude il significato del suo apostolato non violento.
            
            Non sono pochi coloro che, dopo aver ascoltato gli insegnamenti dell’anziano monaco buddhista, hanno radicalmente trasformato le loro esistenze per intraprendere un percorso interiore centrato sulla consapevolezza dell’esperienza come veicolo del sapere, a cominciare dal modo di respirare, camminare e mangiare. «Se ci concediamo di vivere nella presenza mentale – scrive nel suo ultimo saggio L’Unica nostra arma è la Pace (Oscar Mondadori) – scopriremo che vivere una vita semplice e consumare di meno sono le vere condizioni per essere felici». Esattamente il contrario dell’andamento di un’economia mondiale basata sulla produzione di merci «fabbricate – scrive – per non durare a lungo».
            
            Ma la componente filosofica degli insegnamenti di Thich Naht Hanh è solo una parte del decalogo di consigli estremamente pratici basati sull’attenzione ai più minuscoli dettagli dell’agire quotidiano che trasformano «una passeggiata, la fila alla Posta o l’attesa a un semaforo rosso» in altrettante occasioni di crescita interiore, specialmente se l’attenzione della mente è rivolta in maniera appropriata «a placare i pensieri che inseguono i desideri, siano essi di potere o di sesso spesso all’origine della sofferenza e dell’insoddisfazione». «Inspirando, calmo il mio corpo, espirando sorrido», è scritto in uno dei suoi manuali di istruzioni per la consapevolezza basati sul solo «vero potere dell’uomo», ovvero la presenza mentale, la concentrazione «qui ed ora» come antidoto alle tensioni create dall’assillo degli errori passati e dalle paure di ciò che potrebbe accadere in futuro.
            
            Thich Naht Hanh divenne celebre negli anni ‘60 quando – costretto a restare in esilio in America dopo i suoi appelli alla pace incondizionata – convinse Martin Luther King (che lo propose per il Nobel) a battersi per il ritiro delle truppe Usa dal Vietnam: «Spendete migliaia di dollari per sconfiggere la violenza all’esterno – disse in un celebre discorso al Senato Usa – ma non avete fatto nulla per diminuire la violenza nelle vostre famiglie e nelle scuole».
            
            Apostolo di franchezza, il monaco zen sorprese i suoi stessi fratelli di fede con argomenti estremi come quelli contro ogni «verità assoluta». «Se crediamo che il buddismo sia l’unica via verso la felicità – ha scritto nel suo ultimo saggio – esercitiamo una sorta di violenza, visto che discriminiamo ed escludiamo coloro che seguono altri sentieri spirituali».
            
            Già durante l¿invasione francese del Vietnam creò un caso religioso e politico (l’80 per cento del paese è buddista) abbandonando la quiete dei monasteri per praticare quella che definì «la compassione in azione». Assieme al primo nucleo dei suoi studenti fondò ospedali da campo e gruppi di lavoro per curare e aiutare indistintamente tutte le vittime della guerra. Decine di monaci e laici dei suoi gruppi di resistenza non violenta ribattezzati «I Piccoli corpi di Pace» vennero uccisi mentre si davano da fare per ricostruire ospedali e villaggi distrutti portando assistenza alle vittime di tutti i fronti, dai vietcong comunisti ai filoamericani del Sud.
            
            Se Thich Naht Hanh non ha ancora rivevuto il Nobel della Pace come il suo grande estimatore il Dalai Lama è stato anche a causa della sua severa e spregiudicata equidistanza da ogni parte in causa. «Sono in tanti a saper scrivere una lettera di protesta – ha detto più volte ai militanti pacifisti – ma non molti di noi sanno scrivere una lettera d’amore».
            
            Nell’ultimo libro racconta di un «amico che vive nell’Europa centrale ed è un attivista in campo ambientalista. E’ molto arrabbiato e infelice con i genitori, gli amici, la società, inquina il suo corpo e la mente con la nicotina, l’alcol e i giudizi negativi sugli altri. Non sa come fare la pace dentro di sé. Sarà anche un militante del movimento per la protezione dell’ambiente, ma non certo della protezione di sé stesso. Dubito davvero molto – è il suo commento – che avrà successo nei suoi intenti». E aggiunge: «Se non sai gestire la rabbia e la violenza dentro di te, è impossibile che tu sappia aiutare qualcun altro», scrive. Compito della mente – dice – è di distinguere sempre più chiaramente i diversi semi che vogliamo innaffiare. «Se daremo acqua e concime ai semi dell’odio e della rabbia non raccoglieremo mai i fiori della compassione e della generosità»."
        ],
        [
            "id"=> 6,
            "argument" => "Beauty & Consumi",
            "author" => "Monica Rubino",
            "title" => "Dal boom sui social alla scarpa \"Lola\":il fenomeno \"Silvia-Negozio Paolo Ricci",
            "photo" => "https://picsum.photos/605",
            "body" => "Quella scarpiera era l’oggetto dei suoi desideri di bambina. All’interno la nonna Lola custodiva le sue eleganti scarpe, modelli anni Cinquanta fatti a mano con sapienza e dedizione artigianale. La piccola Silvia era l’unica nipotina ad avere accesso alle scarpe di nonna Lola. Non ci giocava ma si limitava a contemplarle. Era una bimba ma già in lei si era accesa la scintilla della moda e il gusto per lo stile (da quando aveva imparato a camminare pretendeva di scegliersi le scarpe da sola). Una scintilla che, crescendo, è diventata il fuoco che l’ha resa una stilista appassionata. Oggi Silvia Marmorini è una bellissima donna,  proprietaria di una raffinata boutique - il Negozio Paolo Ricci di Arezzo - e star dei social con i suoi oltre 40mila follower su Instagram. Nel 2022 ha disegnato una scarpa dal design inconfondibile e divenuta ormai iconica che, non a caso, si chiama proprio “Lola” in onore di sua nonna.

            Lola rappresenta la sintesi di tre modelli delle scarpe di nonna Lola rimaste impresse nella memoria di Silvia. È una calzatura raffinatissima, dal sapore vintage plasmato però sulle esigenze della donna contemporanea. Il tacco da 7 cm è montato in asse con la schiena ed è pensato per camminare a passo svelto persino sui sanpietrini (“per una camminata alla bersagliera”, scherza Silvia).
            La Lola si adatta ad ogni outfit – dal classico al più sportivo – ed è un concentrato di femminilità con la sua punta stondata e il piccolo oblò che lascia intravedere le dita del piede. È proposta in diverse combinazioni di colore ed è prodotta dall’azienda Lenora di Desenzano del Garda, che realizza scarpe di lusso con una lavorazione artigianale, attenta al minimo dettaglio (dalla scelta dei pellami ai micro-aghi usati per le impunture) e che ha realizzato una linea di calzature ad hoc per Silvia.

            Il progetto della scarpa “Lola”, infatti, è solo uno dei tanti della vulcanica proprietaria del Negozio Paolo Ricci. Non bisogna dimenticare anche un’altra sua creazione: lo stivaletto “Silvia” che porta il suo nome. In nappa nera da guanteria, morbidissimo, con un tacco grintoso e ultra-femminile, decorato da un charm placcato oro 18 carati con zirconi, sprigiona sensualità in ogni suo aspetto. Disegnato da Silvia e prodotto sempre da Lenora, si può indossare con le calze o senza, per 12 mesi all’anno."
        ],
        [
            "id"=> 7,
            "argument" => "BlogMotori",
            "author" => "Vincenzo Borgomeo",
            "title" => "Lambretta Junior, gli appasionati ringraziano",
            "photo" => "https://picsum.photos/606",
            "body" => "Nella storia della Lambretta un posto speciale spetta alla serie Junior, destinata ad un pubblico più giovane e con un prezzo di vendita più contenuto rispetto alle tradizionali versioni LI e TV. Uno scooter strategico per fare concorrenza a sua maestà Vespa visto che agli inizi degli anni Sessanta, quando la Innocenti compì un salto tecnologico nella costruzione della Lambretta, era proprio questo l’intento del suo due ruote con telaio a scocca portante. Ed è proprio a questo modello che Vittorio Tessera dedica l’ultima sua fatica letteraria con un libro dal nome didascalico: “Lambretta Junior” (Giorgio Nada Editore, formato: 26x25 cm, 120 pagine, testo italiano-inglese, 38 euro).

            Il titolo è un inno al modello Junior prodotto in diverse cilindrate, dalla più piccola 50 cc, dedicata ai giovani quattordicenni, alle più performanti 100 e 125, rivolte a chi voleva sfruttare il perfetto bilanciamento della Lambretta che la rendeva una “quasi moto”.  Inizialmente, nei primi mesi del 1964, fu offerta nella sola cilindrata di 100 cc, destinata in prevalenza ai mercati esteri; poi, alla fine del 1964, venne allargata la gamma con i modelli di 50 cc e 125 cc. Una caratterizzazione sportiva che portò la Lambretta a proporre nel 1966 anche la nuova 125 4 marce, più brillante e veloce e poi, nel 1968, la 50 DL con i cofani ridisegnati e le ruote da 10 pollici.
            
            Ecco nel libro c’è spazio per tutto questo, anche per l’ultima versione prodotta, la 50 Special con alcune migliorie estetiche e nuovi colori. Quest’ultimo modello è rimasto in produzione fino alla chiusura dello stabilimento nel maggio 1971. E visto che in totale sono stati prodotti 167.784 esemplari nelle tre cilindrate, la Junior conta ancora oggi tanti appassionati. A loro è dedicata la straordinaria ricerca fotografica del libro, realizzata grazie alla preziosa collaborazione dello Studio Zabban, fotografo ufficiale Innocenti dal 1957 al 1968.
            
            Tanti gli aspetti inediti della storia della Lambretta, legati alla produzione, alla tecnica, alla pubblicità e a molto altro ancora. Un patrimonio storico riscoperto dall’autore grazie alla diretta collaborazione della famiglia Innocenti che ha aperto per l’occasione i cassetti del suo passato."
        ],
        [
            "id"=> 8,
            "argument" => "Bloooog!",
            "author" => "Fabrizio Bocca",
            "title" => "Un saluto a tutti gli amici e i frequentatori di questo grande e unico Bar Sport",
            "photo" => "https://picsum.photos/607",
            "body" => "Si chiude qui. Lo scrivo una domenica sera, questa, nell’ora canonica delle mille partite che abbiamo visto e poi discusso insieme. Ma non sto parlando di una partita o di uno dei tanti campionati che abbiamo vissuto. E’ il modo migliore e più diretto – un po’ crudo, lo ammetto – per dire che siamo arrivati al capolinea, che bisogna scendere tutti dal tram perché la corsa si ferma.

            Bloooog! – la parola blog urlata come Gooool! – termina la sua avventura su Repubblica perché fatalmente arriva quel momento di svolta nella vita di ognuno di noi. Ci sono tanti anni di lavoro sulle spalle e dunque l’alt diventa inevitabile, giusto, sano, rispettoso e doveroso verso i giovani che ora percorreranno la tua stessa strada. Per me non è assolutamente un dramma, capita a tutti, lo trovo naturale. Possiamo anche dire che è solo un cambio di prospettiva o di status. Punto e a capo.
          
            Bloooog! è nato 14 anni fa, nel 2008, così quasi per caso, per sperimentare le nuove forme di comunicazione. Inizialmente solo un piccolo blog poi, strada facendo, sempre qualcosa di più, un sito internet e soprattutto una grande comunità di persone abituata a incontrarsi qui per parlare di calcio ma in realtà per parlare di tutto, della vita, del mondo. E poi per farsi compagnia, socializzare, fare amicizia e a volte litigare, perché no.
          
            Non faccio nomi perché sarebbe impossibile citarne almeno un numero sufficiente, tanti sono e sono stati delle vere e proprie colonne, guide eccezionali che possono accompagnarci nel mondo di Bloooog! assai meglio di me. Qualcuno, in un lasso di tempo così lungo, purtroppo ci ha anche lasciato. Non posso non mandare un pensiero a Riccardo, che tanto ha voluto dire per noi. E che tanto ci ha insegnato e lasciato.
          
            Qualche tempo fa abbiamo tagliato il traguardo del milione di commenti pubblicati, ogni tanto ci faccio un’immersione dentro. E’ un mondo immenso e straordinario ma non saprei assolutamente dargli ordine o logica perché ho sempre pensato a Bloooog! come a qualcosa che ti accompagna giorno per giorno, che va vissuto sul momento. Come il caffè o l’aperitivo scorrendo il quotidiano sportivo sul bancone di questo Bar Sport, guardando la partita sulla tv appesa al muro, la classifica di Serie A in bacheca e gli amici accanto per discutere.
          
             Già, perché ho sempre concepito Bloooog! come un Bar Sport virtuale aperto 24 ore su 24, dove le persone si incontrano parlando delle partite, dove ci si conosce sempre meglio, dove vizi e virtù si amplificano, un posto con le porte aperte sulla piazza del paese e dove il tempo è scandito dai calendari, dagli orari rituali e poi via via sempre più impazziti delle partite. Seguire il calcio così come viene, senza deformarlo, ma raccontandolo semplicemente e crudamente dal proprio punto di vista, prendendo sempre posizione, con sincerità, senza trucchi o effetti speciali. Partigianamente e da tifosi certo, l’anima vera del calcio è questa. Un posto libero, senza barriere, dove le parole scorrono meravigliosamente e senza eccessive formalità. Bloooog! ha sempre avuto, magari senza inizialmente rendersene conto, un profondo, democratico e paritario spirito social. Soprattutto il posto non delle mie chiacchiere ma dei vostri pensieri, siete stati voi a fare di questo Bar Sport qualcosa di speciale e unico.
          
            Vi ringrazio tutti col cuore, siamo stati così tanto insieme che sarà inevitabile ritrovarsi. Ringrazio Repubblica, il mio giornale, per avermi permesso di fare questo.
          
            Beh, adesso ci siamo. Adesso esco davvero da quella porta. E casomai non vi rivedessi, buon pomeriggio, buonasera e buonanotte."
        ]
    ];
    foreach($articles as $article) {
        if($id == $article['id']){
            return view('explode', ['articolo' => $article]);
        };
    }
})->name('explode');
