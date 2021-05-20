<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-Faq</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<?php

    // Riscrivere questa pagina del sito google
    // https://policies.google.com/faq.
    // Ci sono diverse domande con relative risposte.
    // Gestire il “Database” (array php) e la visualizzazione di queste domande e risposte con PHP.
    // La sezione 'Perché il mio account è associato a un paese?' la potete anche ignorare. L'importante è avere 3 - 4 sezioni di domanda e risposta.
    // Dedichiamoci alla parte dettagliata di CSS solo dopo aver risolto la parte di visualizzazione delle domande con PHP

    $faqs = [
        [
            "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",

            "answer" => "<p>La recente <a href='http://curia.europa.eu/juris/document/document.jsf?text=&amp;docid=152065&amp;amppageIndex=0&amp;doclang=it&amp;mode=lst&amp;dir=&amp;occ=first&amp;part=1&amp;cid=276332'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.</p>\n<p>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.</p>\n<p>Per presentare una richiesta di rimozione, compila questo <a href='https://support.google.com/legal/contact/lr_eudpa?product=websearch&amp;hl=it'>modulo web</a>. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.</p>\n<p>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.</p>\n<p>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.</p>",
            ],
            [
                "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",

                "answer" => "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>\n<p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>\n<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/'>Centro Google per la sicurezza online</a>.</p>\n<p><a href='https://privacy.google.com'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
            ],
            [
                "question" => "Perché il mio account è associato a un paese?",

                "answer" => "<p>Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>\n<ol><li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:<ol class='alpha' type='a'><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li><li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li><li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol>\n<p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</p>"
            ]
    ];

    $nav = [
    [
        "name" => "Introduzione",
        "link" => "https://policies.google.com/",
        "uri" => "/"
    ],
    [
        "name" => "Norme sulla privacy",
        "link" => "https://policies.google.com/privacy",
        "uri" => "/privacy"
    ],
    [
        "name" => "Termini di servizio",
        "link" => "https://policies.google.com/terms",
        "uri" => "/terms"
    ],
    [
        "name" => "Tecnologie",
        "link" => "https://policies.google.com/technologies",
        "uri" => "/technologies"
    ],
    [
        "name" => "Domande frequenti",
        "link" => "./index.php",
        "uri" => "/php-google-faq/index.php"
    ]
];
    ?>

<header>
    <div class="logo">
        <a href="https://www.google.com"><img src="./img/Google-logo.png" alt="Google"></a>
        <h3><a href="https://policies.google.com/?authuser=0">Privacy e termini</a></h3>
    </div>
    <div class="login">
        <a href="#"><i class="fas fa-ellipsis-v"></i></a>
        <a href="#"><img src="./img/avatar2.png" alt="User"></a>
    </div>
<nav>
    <ul>
        <?php foreach ($nav as $link) { ?>
        <li ><a <?php 
            if ($link["uri"] == $_SERVER['REQUEST_URI']) {
                echo "class='active'";
            }
            ?> href="<?php echo $link["link"] ?>"><?php echo $link["name"] ?></a></li>
        <?php } ?>
     </ul>
</nav>
</header>

<div class="container">
    <?php foreach ( $faqs as $faq ) {
    ?>
    <h2><?php echo $faq["question"] ?></h2>
    <?php echo $faq["answer"] ?>
    <?php } ?>
</div>

</body>
</html>