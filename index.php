<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Karate Wadō-ryū</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }

    /* Cookie Banner Styles */
    .cookie-banner {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background: rgba(17, 24, 39, 0.95);
      border-top: 1px solid #4b5563;
      padding: 20px;
      z-index: 1000;
      display: none;
      backdrop-filter: blur(4px);
    }

    .cookie-banner.show {
      display: block;
    }

    .cookie-banner-content {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .cookie-banner-text {
      flex: 1;
      min-width: 200px;
      font-size: 14px;
      color: #d1d5db;
      line-height: 1.5;
    }

    .cookie-banner-text a {
      color: #3b82f6;
      text-decoration: underline;
      transition: color 0.2s;
    }

    .cookie-banner-text a:hover {
      color: #60a5fa;
    }

    .cookie-banner-buttons {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }

    .cookie-btn {
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      transition: all 0.2s;
      white-space: nowrap;
    }

    .cookie-btn-accept {
      background-color: #3b82f6;
      color: white;
    }

    .cookie-btn-accept:hover {
      background-color: #2563eb;
    }

    .cookie-btn-reject {
      background-color: transparent;
      color: #d1d5db;
      border: 1px solid #6b7280;
    }

    .cookie-btn-reject:hover {
      background-color: rgba(107, 114, 128, 0.1);
      border-color: #9ca3af;
    }

    @media (max-width: 768px) {
      .cookie-banner-content {
        flex-direction: column;
        gap: 15px;
      }

      .cookie-banner-buttons {
        width: 100%;
      }

      .cookie-btn {
        flex: 1;
      }
    }
  </style>
</head>

<body class="bg-gray-900 text-gray-100">
  <!-- Cookie Consent Banner -->
  <div id="cookieBanner" class="cookie-banner">
    <div class="cookie-banner-content">
      <div class="cookie-banner-text">
        <strong>🍪 Cookie e Tracciamento</strong><br>
        Utilizziamo cookie per analizzare come utilizzi il nostro sito (indirizzo IP, browser, sistema operativo). 
        Puoi accettare, rifiutare o <a href="/cookies.php" target="_blank">scoprire di più</a>. 
        Leggi la nostra <a href="/privacy.php" target="_blank">Privacy Policy</a> per maggiori dettagli.
      </div>
      <div class="cookie-banner-buttons">
        <button class="cookie-btn cookie-btn-accept" id="acceptCookies">Accetta</button>
        <button class="cookie-btn cookie-btn-reject" id="rejectCookies">Rifiuta</button>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="bg-gray-700 p-4 fixed w-full top-0 z-10">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Logo -->
      <h1 class="text-2xl font-bold text-white">Karate Wadō-ryū</h1>
  
      <!-- Hamburger Button -->
      <button id="menu-btn" class="block lg:hidden text-white focus:outline-none">
        <div class="space-y-2">
          <span class="block w-8 h-1 bg-white"></span>
          <span class="block w-8 h-1 bg-white"></span>
          <span class="block w-8 h-1 bg-white"></span>
        </div>
      </button>
  
      <!-- Desktop Menu -->
      <ul class="hidden lg:flex space-x-6 text-white">
        <li><a href="#storia-karate" class="hover:text-gray-300">Storia</a></li>
        <li><a href="#storia-wado" class="hover:text-gray-300">Wadō-Ryū</a></li>
        <li><a href="#famiglia-otsuka" class="hover:text-gray-300">Famiglia Ōtsuka</a></li>
        <li><a href="#kata" class="hover:text-gray-300">Kata</a></li>
        <li><a href="#kihon" class="hover:text-gray-300">Kihon</a></li>
        <li><a href="#libri" class="hover:text-gray-300">Libri</a></li>
      </ul>
    </div>
  
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden absolute right-0 top-full bg-gray-700 w-full text-center">
      <ul class="flex flex-row p-4 text-white">
        <li><a href="#storia-karate" class="hover:text-gray-300 flex-1 text-center p-2">Storia</a></li>
        <li><a href="#storia-wado" class="hover:text-gray-300 flex-1 text-center p-2">Wadō-Ryū</a></li>
        <li><a href="#famiglia-otsuka" class="hover:text-gray-300 flex-1 text-center p-2">Famiglia Ōtsuka</a></li>
        <li><a href="#kata" class="hover:text-gray-300 flex-1 text-center p-2">Kata</a></li>
        <li><a href="#kihon" class="hover:text-gray-300 flex-1 text-center p-2">Kihon</a></li>
        <li><a href="#libri" class="hover:text-gray-300 flex-1 text-center p-2">Libri</a></li>
      </ul>
    </div>
  </nav>
  
  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
  
    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
  

  <!-- Hero Section -->
  <header class="bg-cover bg-center h-screen flex items-center justify-center text-center"
    style="background-image: url('bg.jpg');">
    <div class="bg-black bg-opacity-60 p-8 rounded-lg">
      <h1 class="text-5xl font-extrabold">Karate Wadō-ryū</h1>
      <p class="text-lg mt-2 text-gray-300">Armonia, Tradizione e Disciplina</p>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto py-16 px-6">
    <section id="storia-karate" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">Origini del Karate</h2>
      <p class="text-lg leading-relaxed text-gray-300">
        Il karate ha origine nel Regno delle Ryukyu (oggi Okinawa), un arcipelago situato tra il Giappone e Taiwan, dove
        le arti marziali locali vennero influenzate dalle tecniche di combattimento cinesi. Durante il XIV secolo, il
        Regno delle Ryukyu instaurò stretti legami commerciali e culturali con la Cina, favorendo il trasferimento di
        conoscenze, inclusi gli stili di arti marziali come il Kung-Fu Shaolin e il White Crane. Queste influenze si
        fusero con le pratiche locali, dando vita a una forma unica di combattimento chiamata *Tōde* ("mano cinese") o
        *Te* ("mano").
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Nel XVII secolo, dopo l'invasione del Regno delle Ryukyu da parte del dominio giapponese di Satsuma, gli
        abitanti di Okinawa furono privati dell'uso delle armi. Questo divieto spinse gli aristocratici locali a
        sviluppare tecniche di combattimento a mani nude come forma di autodifesa e resistenza. Le pratiche segrete
        combinavano movimenti fluidi con tecniche di attacco e difesa derivate sia dalle tradizioni cinesi che dalle
        arti marziali indigene.
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Durante il XVIII secolo, il karate si evolse ulteriormente nelle tre principali città di Okinawa: Shuri, Naha e
        Tomari. Da queste aree nacquero tre stili distinti: Shuri-te, caratterizzato da movimenti veloci e lineari;
        Naha-te, focalizzato su tecniche più lente e potenti; e Tomari-te, una combinazione dei due. Questi stili
        formarono la base dei moderni sistemi di karate.
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Nel XIX secolo, maestri come Matsumura Sōkon e Itosu Ankō contribuirono alla codifica del karate attraverso lo
        sviluppo dei kata (forme) e l'introduzione della disciplina nelle scuole pubbliche di Okinawa. Itosu Ankō fu
        particolarmente influente nel rendere il karate accessibile a un pubblico più ampio, semplificando le tecniche
        per i principianti e creando i kata Pinan (Heian), oggi praticati in tutto il mondo.
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Nel XX secolo, Gichin Funakoshi portò il karate nella terraferma giapponese, trasformandolo in un'arte marziale
        moderna. Funakoshi introdusse uniformi, cinture colorate e un sistema di gradi per renderlo più comprensibile
        agli studenti giapponesi. Inoltre, modificò il nome da *Tōde* ("mano cinese") a *Karate* ("mano vuota") per
        eliminare le connotazioni cinesi e adattarlo al contesto culturale giapponese.
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Oggi il karate è praticato in tutto il mondo come arte marziale, disciplina sportiva e metodo di autodifesa.
        E' stato incluso nel programma olimpico a Tokyo 2020 e continua a essere uno sport di riferimento a livello
        internazionale. La sua filosofia enfatizza la disciplina, la crescita personale e l'idea che "non esiste primo
        attacco nel karate", promuovendo la pace e la moderazione anche in situazioni di conflitto.
      </p>
    </section>


    <section id="storia-wado" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">Il Karate Wadō-ryū</h2>
      <p class="text-lg leading-relaxed text-gray-300">
        Il Wadō-ryū, uno dei principali stili di karate giapponese, fu sviluppato da Hironori Ōtsuka nel corso degli
        anni Trenta. La sua formalizzazione avvenne progressivamente, con registrazioni e riconoscimenti tra il 1934 e
        il 1939, periodo in cui il nome Wadō-ryū si consolidò in modo ufficiale. Il termine significa "Via
        dell'Armonia" (*Wa* per armonia, *Dō* per via) e riflette un approccio che integra il karate di matrice
        okinawense con principi del jujutsu Shindō Yōshin-ryū [1][2].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Hironori Ōtsuka (1892–1982), nato in una famiglia di samurai, iniziò il suo percorso marziale studiando lo
        Shindō Yōshin-ryū jujutsu sotto il maestro Nakayama Tatsusaburō. Questo stile di jujutsu si concentrava su
        movimenti agili e sull'uso dell'energia dell'avversario per neutralizzarlo, un principio che influenzò
        profondamente la visione di Ōtsuka [2]. Nel 1922, Ōtsuka incontrò Gichin Funakoshi, il fondatore dello Shotokan
        karate, e iniziò a studiare il karate di Okinawa. Tuttavia, Ōtsuka percepì che il karate poteva essere
        arricchito integrando i principi del jujutsu, dando così origine a un approccio unico [3].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Il Wadō-ryū si distingue dagli altri stili di karate per l'enfasi sul *tai sabaki* (movimenti evasivi del
        corpo), che consente al praticante di evitare gli attacchi invece di bloccarli frontalmente. Questo approccio
        riduce l'uso della forza bruta e promuove movimenti fluidi e naturali. Inoltre, lo stile include tecniche
        avanzate come leve articolari (*kansetsu waza*) e proiezioni (*nage waza*), elementi derivati dal jujutsu
        [1][3].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Un'altra caratteristica distintiva del Wadō-ryū è la sua enfasi sull'armonia tra mente e corpo. Secondo Ōtsuka,
        il vero significato del karate non risiede nella vittoria o nella sconfitta, ma nel miglioramento personale e
        nella ricerca dell'equilibrio interiore. Questa filosofia si riflette anche nei kata (forme) dello stile, che
        combinano movimenti eleganti con tecniche pratiche per sviluppare concentrazione, disciplina e abilità marziali
        [2].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Nel dopoguerra il Wadō-ryū si è diffuso in tutto il mondo grazie all'opera diretta di Ōtsuka e dei suoi
        allievi. Nel 1964 nacque la Japan Karate Federation (JKF), che riconobbe il Wadō-ryū tra i principali stili,
        contribuendo ulteriormente alla sua diffusione internazionale. Oggi è praticato da milioni di persone ed è
        riconosciuto come uno stile che incarna l'essenza delle arti marziali giapponesi: armonia, rispetto e crescita
        personale [3].
      </p>

    </section>


    <section id="famiglia-otsuka" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">La Famiglia Ōtsuka</h2>
      <p class="text-lg leading-relaxed text-gray-300">
        Hironori Ōtsuka (1892–1982), fondatore del Wadō-ryū, proveniva da una famiglia di samurai, una classe sociale
        che per secoli incarnò i valori di disciplina, onore e abilità marziale. Fin dalla giovane età, Ōtsuka fu
        introdotto alle arti marziali tradizionali giapponesi, iniziando lo studio dello Shindō Yōshin-ryū jujutsu sotto
        la guida del maestro Nakayama Tatsusaburō. Questo stile di jujutsu si concentrava su movimenti fluidi, leve
        articolari e l'uso dell'energia dell'avversario per neutralizzarlo, principi che avrebbero influenzato
        profondamente la sua visione marziale [1].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        La famiglia Ōtsuka era nota per il suo impegno nel preservare le tradizioni giapponesi, e questo contesto
        culturale fornì a Hironori una solida base per sviluppare il suo approccio unico alle arti marziali. Dopo aver
        padroneggiato il jujutsu, Ōtsuka ampliò il suo repertorio studiando il karate di Okinawa sotto Gichin Funakoshi,
        il fondatore dello Shotokan karate. Tuttavia, Ōtsuka percepì che il karate tradizionale poteva essere
        ulteriormente arricchito integrando i principi del jujutsu, dando vita a un sistema che combinava forza,
        velocità e strategia con movimenti naturali ed evasivi [2][3].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Dopo anni di studio e sperimentazione, Hironori Ōtsuka definì progressivamente il Wadō-ryū nel corso degli anni
        Trenta, con passaggi formali tra il 1934 e il 1939. Il nome dello stile rifletteva la sua filosofia: *Wa*
        ("armonia") e *Dō* ("via"), sottolineando l'importanza di trovare equilibrio tra mente e corpo. Lo stile non
        solo incorporava tecniche di attacco e difesa del karate tradizionale, ma anche principi avanzati come il *tai
        sabaki* (movimenti evasivi) e le proiezioni (*nage waza*) derivati dal jujutsu [3].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        La famiglia Ōtsuka continuò a svolgere un ruolo significativo nella diffusione del Wadō-ryū. Dopo la morte di
        Hironori Ōtsuka nel 1982, la leadership dello stile passò ai suoi successori, i quali hanno mantenuto e sviluppato
        l'eredità del fondatore. Nel corso dei decenni, diversi membri della famiglia Ōtsuka hanno contribuito alla guida
        dello stile. Attualmente, Kazutaka Ōtsuka ricopre un ruolo centrale nel guidare il Wadō-ryū e nel promuovere i
        principi fondamentali dello stile a livello internazionale [1][3].
      </p>
      <p class="text-lg leading-relaxed text-gray-300 mt-4">
        Oggi la famiglia Ōtsuka è considerata una delle più influenti nel panorama delle arti marziali giapponesi. Il
        loro contributo non si limita alla creazione del Wadō-ryū ma rappresenta un esempio di dedizione alla filosofia
        marziale e alla ricerca dell'armonia interiore ed esteriore.
      </p>
    </section>


    <section id="kata" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">I Kata del Wadō-ryū</h2>
      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        I kata sono sequenze codificate di movimenti che rappresentano tecniche di attacco e difesa. Nel Wadō-ryū, i
        kata riflettono l'armonia tra forza e fluidità, combinando principi di karate e jujutsu. Nel tempo,
        organizzazioni e scuole hanno mantenuto un nucleo storico comune, con differenze su nomenclatura, ordine di
        studio e interpretazione tecnica.
      </p>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Kata Tradizionali -->
        <div class="p-4 bg-gray-800 rounded-lg">Pinan Shodan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Pinan Nidan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Pinan Sandan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Pinan Yondan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Pinan Godan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Kushanku</div>
        <div class="p-4 bg-gray-800 rounded-lg">Naihanchi</div>
        <div class="p-4 bg-gray-800 rounded-lg">Seishan</div>
        <div class="p-4 bg-gray-800 rounded-lg">Chinto</div>

        <!-- Kata Moderni -->
        <div class="p-4 bg-gray-800 rounded-lg">Bassai</div>
        <div class="p-4 bg-gray-800 rounded-lg">Jion</div>
        <div class="p-4 bg-gray-800 rounded-lg">Jitte</div>
        <div class="p-4 bg-gray-800 rounded-lg">Rohai</div>
        <div class="p-4 bg-gray-800 rounded-lg">Niseishi</div>
      </div>

      <!-- Descrizioni dei Kata -->
      <h3 class="text-xl font-semibold text-gray-500 mt-8 mb-4">Descrizione dei Kata Principali</h3>
      <ul class="list-disc list-inside text-lg leading-relaxed text-gray-300">
        <li><b>Pinan Shodan - Godan:</b> Una serie di cinque kata creati da Anko Itosu per introdurre i principi
          fondamentali del karate. Questi kata enfatizzano la fluidità dei movimenti e la coordinazione tra attacco e
          difesa [1][2].</li>
        <li><b>Kushanku:</b> Uno dei kata più antichi, originario di Okinawa, caratterizzato da tecniche avanzate come
          calci alti e movimenti evasivi. Il nome deriva dal maestro cinese Kūsankū [3].</li>
        <li><b>Naihanchi:</b> Un kata basato su tecniche di combattimento a distanza ravvicinata e movimenti laterali in
          kiba-dachi (posizione del cavaliere). È noto anche come Tekki nello Shotokan [4].</li>
        <li><b>Seishan:</b> Conosciuto come "13 mani", questo kata combina movimenti circolari e lineari, enfatizzando
          equilibrio e precisione [5].</li>
        <li><b>Chinto:</b> Creato da Matsumura Sōkon, include tecniche di equilibrio avanzate come la posizione della
          gru e calci volanti [5].</li>

        <!-- Kata Moderni -->
        <li><b>Bassai:</b> Un kata dinamico che enfatizza la forza esplosiva e il controllo della respirazione. Il nome
          significa "penetrare una fortezza" [6].</li>
        <li><b>Jion:</b> Un kata che rappresenta la serenità e la forza interiore. Include tecniche di parata e
          contrattacco in rapida successione [6].</li>
        <li><b>Jitte:</b> Significa "10 mani" ed è progettato per affrontare più avversari contemporaneamente. Include
          tecniche di blocco potenti [6].</li>
        <li><b>Rohai:</b> Conosciuto per le sue posizioni uniche e movimenti eleganti, rappresenta la calma sotto
          pressione [6].</li>
        <li><b>Niseishi:</b> Tradotto come "24 passi", questo kata combina movimenti fluidi con tecniche esplosive [6].
        </li>
      </ul>

    </section>


    <section id="kihon" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">I Kihon (Tecniche Fondamentali)</h2>
      <p class="text-lg leading-relaxed text-gray-300">
        I kihon, che in giapponese significa "fondamenta" o "basi", rappresentano l'essenza del karate. Nel Wadō-ryū, i kihon non sono solo esercizi tecnici, ma un mezzo per comprendere i principi di armonia (*wa*) e movimento fluido (*tai sabaki*), che sono alla base dello stile. Essi includono pugni, calci, parate e movimenti fondamentali che sviluppano precisione, velocità, potenza e controllo.
      </p>
    
      <!-- Descrizione dettagliata delle tecniche -->
      <h3 class="text-xl font-semibold text-gray-500 mt-8 mb-4">Le Tecniche Fondamentali del Kihon</h3>
      <ul class="list-disc list-inside text-lg leading-relaxed text-gray-300">
        <li><b>Pugni (*Tsuki*):</b> Tecniche come il *gyaku tsuki* (pugno inverso) e il *oi tsuki* (pugno avanzato) insegnano a generare potenza attraverso la rotazione dell'anca e il trasferimento del peso corporeo [1].</li>
        <li><b>Calci (*Geri*):</b> Tecniche come il *mae geri* (calcio frontale), *yoko geri* (calcio laterale) e *mawashi geri* (calcio circolare) enfatizzano equilibrio, flessibilità e precisione [2].</li>
        <li><b>Parate (*Uke*):</b> Parate come il *gedan barai* (parata bassa), *age uke* (parata alta) e *soto uke* (parata esterna) sono progettate per deviare gli attacchi in modo efficiente [3].</li>
        <li><b>Movimenti del corpo (*Tai Sabaki*):</b> Movimenti evasivi che consentono di evitare gli attacchi invece di affrontarli direttamente. Questo principio deriva dal jujutsu ed è centrale nel Wadō-ryū [4].</li>
        <li><b>Posizioni (*Dachi*):</b> Posizioni come il *zenkutsu dachi* (posizione avanzata), il *kokutsu dachi* (posizione arretrata) e il *kiba dachi* (posizione del cavaliere) garantiscono stabilità ed equilibrio durante l'esecuzione delle tecniche [5].</li>
      </ul>
    
      <!-- Kihon Kumite -->
      <h3 class="text-xl font-semibold text-gray-500 mt-8 mb-4">I Kihon Kumite del Wadō-ryū</h3>
      <p class="text-lg leading-relaxed text-gray-300">
        I **Kihon Kumite** sono esercizi codificati di combattimento prestabilito che combinano le tecniche fondamentali con i principi di distanza (*maai*) e tempismo (*kiai*). Essi rappresentano un ponte tra la pratica individuale dei kihon e l'applicazione pratica nelle situazioni di combattimento. Nel Wadō-ryū, ci sono dieci Kihon Kumite principali:
      </p>
      <ul class="list-decimal list-inside text-lg leading-relaxed text-gray-300">
        <li><b>Kihon Kumite 1:</b> Introduce il concetto di difesa simultanea e contrattacco con movimenti fluidi.</li>
        <li><b>Kihon Kumite 2:</b> Enfatizza l'uso del *tai sabaki* per evitare un attacco diretto e rispondere con tecniche combinate [6].</li>
        <li><b>Kihon Kumite 3:</b> Sviluppa la capacità di bloccare e contrattaccare utilizzando leve articolari.</li>
        <li><b>Kihon Kumite 4:</b> Introduce tecniche avanzate di proiezione (*nage waza*) integrate con parate.</li>
        <li><b>Kihon Kumite 5:</b> Combina movimenti evasivi con attacchi multipli a diverse altezze.</li>
        <li><b>Kihon Kumite 6–10:</b> Approfondiscono i principi di timing, distanza e fluidità nei movimenti difensivi e offensivi.</li>
      </ul>
    
      <!-- Importanza dei Kihon -->
      <h3 class="text-xl font-semibold text-gray-500 mt-8 mb-4">L'Importanza dei Kihon nel Karate Wadō-ryū</h3>
      <p class="text-lg leading-relaxed text-gray-300">
        La pratica dei kihon non è solo un esercizio tecnico, ma anche un modo per sviluppare la connessione tra mente e corpo. Attraverso la ripetizione costante delle tecniche fondamentali, i praticanti migliorano consapevolezza spaziale, coordinazione motoria e capacità di reagire rapidamente agli stimoli esterni. I **Kihon Kumite**, in particolare, aiutano a comprendere come applicare i principi del Wadō-ryū in situazioni dinamiche, enfatizzando l'armonia tra difesa e attacco.
      </p>
    
    </section>
    

    <section id="libri" class="mb-16">
      <h2 class="text-4xl font-bold text-gray-500 mb-4">Libri Consigliati</h2>
      <p class="text-lg leading-relaxed text-gray-300 mb-6">
        La letteratura sul Wadō-ryū e sul karate tradizionale offre una vasta gamma di testi che approfondiscono la
        storia, le tecniche e la filosofia di queste arti marziali. Ecco alcuni libri essenziali per praticanti e
        appassionati.
      </p>
      <ul class="list-disc list-inside text-lg leading-relaxed text-gray-300">
        <!-- Libri Classici -->
        <li><b>"Karate-do Kyohan: The Master Text" – Gichin Funakoshi:</b> Un'opera fondamentale scritta dal fondatore del karate
          Shotokan. Questo libro esplora i principi filosofici e tecnici del karate, fornendo una base solida per
          comprendere l'evoluzione delle arti marziali giapponesi [1].</li>
        <li><b>"Mastering Martial Arts: The Path of Wado Ryu Karate-Do" – Hironori Ōtsuka:</b> Un testo scritto dal fondatore del Wadō-ryū, che illustra la
          filosofia dello stile, le tecniche fondamentali e i kata. Include una panoramica storica sulla fusione tra karate di Okinawa e jujutsu giapponese [5].</li>

        <!-- Libri Specifici sul Wadō-ryū -->
        <li><b>"Wado Ryu Karate and Jujutsu" – Mark Edward Cody:</b> Un testo completo che esplora le origini, le tecniche e
          i kata del Wadō-ryū. È uno dei pochi libri scritti in inglese che analizza tutti i diciassette kata dello
          stile con dettagli precisi sui movimenti e sulle applicazioni pratiche [2].</li>
        <li><b>"Wado-Ryu Karate: The Complete Art Uncovered" – Frank Johnson:</b> Considerato uno dei testi più completi
          sul Wadō-ryū, questo libro include oltre 1.100 fotografie che illustrano le tecniche, i kihon kumite, i kata e
          le difese avanzate. È un'opera ideale per chi vuole approfondire ogni aspetto dello stile [4].</li>

        <!-- Libri Storici -->
        <li><b>"Shindo Yoshin Ryu: History and Technique" – Tobin Threadgill:</b> Sebbene non specifico per il Wadō-ryū,
          questo libro analizza le radici dello Shindō Yōshin-ryū jujutsu, una delle principali influenze nello sviluppo
          dello stile. È utile per comprendere il contesto storico e tecnico del Wadō-ryū [6].</li>
      </ul>

      <!-- Fonti -->
      <div class="mt-8 text-gray-400">
        <h3 class="text-xl font-semibold">Fonti:</h3>
        <ol class="list-decimal list-inside">
          <li>Funakoshi, Gichin. <i>Karate-do Kyohan: The Master Text</i>. Kodansha International, 1973. ISBN: 978-4-7700-0901-4.
          </li>
          <li>Cody, Mark Edward. <i>Wado Ryu Karate and Jujutsu</i>. Tuttle Publishing, 2008. ISBN: 978-0-8048-3875-3.</li>
          <li>Japan Karatedo Federation Wado-Kai (JKF Wadōkai), pagine ufficiali su storia e programma tecnico:
            https://www.karatedo.co.jp/wado/w_eng/ (consultato il 30/03/2026).</li>
          <li>Johnson, Frank. <i>Wado-Ryu Karate: The Complete Art Uncovered</i>. 2013. ISBN: 978-1-49080-693-5.</li>
          <li>Ōtsuka, Hironori. <i>Mastering Martial Arts: The Path of Wado Ryu Karate-Do</i>. Kodansha International, 1996.</li>
          <li>Threadgill, Tobin et al. <i>Shindo Yoshin Ryu: History and Technique</i>. 2004.</li>
          <li>Wado-Ryu Karate-Do Renmei, sito ufficiale (storia e materiali): https://www.wado-ryu.jp/en/
            (consultato il 30/03/2026).</li>
        </ol>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-10">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Colonna 1: Informazioni sul sito -->
        <div>
          <h3 class="text-lg font-semibold text-gray-500 mb-4">Chi Siamo</h3>
          <p class="text-sm leading-relaxed">
            Karate Wadō-Ryū è dedicato alla diffusione dello stile Wadō-Ryū, combinando tradizione e innovazione. La
            nostra missione è promuovere l'armonia tra mente e corpo attraverso il karate.
          </p>
        </div>

        <!-- Colonna 2: Link utili -->
        <div>
          <h3 class="text-lg font-semibold text-gray-500 mb-4">Link Utili</h3>
          <ul class="text-sm space-y-2">
            <li><a href="#storia-karate" class="hover:text-gray-400">Storia del Karate</a></li>
            <li><a href="#storia-wado" class="hover:text-gray-400">Storia del Wadō-Ryū</a></li>
            <li><a href="#kata" class="hover:text-gray-400">I Kata</a></li>
            <li><a href="#libri" class="hover:text-gray-400">Libri Consigliati</a></li>
          </ul>
        </div>

        <!-- Colonna 3: Contatti -->
        <div>
          <h3 class="text-lg font-semibold text-gray-500 mb-4">Contatti</h3>
          <ul class="text-sm space-y-2">
            <li><a href="/privacy.php" class="text-gray-400 hover:text-gray-300">Privacy Policy</a></li>
            <li><a href="/cookies.php" class="text-gray-400 hover:text-gray-300">Cookie Policy</a></li>
          </ul>
        </div>

        <!-- Colonna 4: Social Media -->
        <div>
          <h3 class="text-lg font-semibold text-gray-500 mb-4">Seguici</h3>
          <p class="text-sm leading-relaxed mb-4">
            Rimani aggiornato sulle nostre attività e novità seguendoci sui social media.
          </p>
          <div class="flex space-x-4">
            <!-- <a href="#" aria-label="Facebook" class="hover:text-gray-400"><i class="fab fa-facebook fa-lg"></i></a> -->
            <a href="https://www.instagram.com/wadoryu.it" aria-label="Instagram" class="hover:text-gray-400">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <!-- <a href="#" aria-label="Twitter" class="hover:text-gray-400"><i class="fab fa-twitter fa-lg"></i></a> -->
            <!-- <a href="#" aria-label="YouTube" class="hover:text-gray-400"><i class="fab fa-youtube fa-lg"></i></a> -->
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="mt-10 text-center border-t border-gray-700 pt-5">
        © 2025 Karate Wadō-Ryū | Tutti i diritti riservati
      </div>
    </div>
  </footer>

  <!-- Cookie Banner Script -->
  <script>
    // Cookie Banner Management
    (function() {
      const CONSENT_KEY = 'wadoryu_consent';
      const CONSENT_VALUE = 'accepted';
      const REJECT_VALUE = 'rejected';
      const CONSENT_EXPIRY = 365; // 1 year in days

      const banner = document.getElementById('cookieBanner');
      const acceptBtn = document.getElementById('acceptCookies');
      const rejectBtn = document.getElementById('rejectCookies');

      // Set a cookie
      function setCookie(name, value, days) {
        const expires = new Date();
        expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
      }

      // Get a cookie
      function getCookie(name) {
        const nameEQ = name + "=";
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
          let cookie = cookies[i].trim();
          if (cookie.indexOf(nameEQ) === 0) {
            return cookie.substring(nameEQ.length);
          }
        }
        return null;
      }

      // Check if user has already made a choice
      function hasUserConsented() {
        return getCookie(CONSENT_KEY) !== null;
      }

      // Show banner only if user hasn't made a choice yet
      function showBanner() {
        if (!hasUserConsented()) {
          banner.classList.add('show');
        }
      }

      // Accept cookies
      function acceptCookies() {
        setCookie(CONSENT_KEY, CONSENT_VALUE, CONSENT_EXPIRY);
        localStorage.setItem('consent_timestamp', Date.now());
        
        // Initialize tracking
        initializeTracking();
        
        // Hide banner
        banner.classList.remove('show');
      }

      // Reject cookies
      function rejectCookies() {
        setCookie(CONSENT_KEY, REJECT_VALUE, CONSENT_EXPIRY);
        localStorage.setItem('consent_timestamp', Date.now());
        
        // Hide banner without tracking
        banner.classList.remove('show');
      }

      // Initialize tracking if consent is given
      function initializeTracking() {
        const consent = getCookie(CONSENT_KEY);
        
        if (consent === CONSENT_VALUE) {
          // User has consented to tracking
          // The PHP backend will track visitor data if this consent is present
          console.log('Tracking enabled with user consent');
        }
      }

      // Event listeners
      acceptBtn.addEventListener('click', acceptCookies);
      rejectBtn.addEventListener('click', rejectCookies);

      // Show banner on page load
      document.addEventListener('DOMContentLoaded', function() {
        showBanner();
        initializeTracking();
      });

      // Fallback for if DOM is already loaded
      if (document.readyState === 'interactive' || document.readyState === 'complete') {
        showBanner();
        initializeTracking();
      }
    })();
  </script>

</body>

</html>

<?php
        // Check user consent before tracking
        $hasConsent = false;
        
        // Check if consent cookie exists (set by JavaScript after user choice)
        if (isset($_COOKIE['wadoryu_consent'])) {
            $hasConsent = ($_COOKIE['wadoryu_consent'] === 'accepted');
        }
        
        // If user has consented, track the visit
        if ($hasConsent) {
            $visitors_file = 'visitors.json';
            $salt = "e2d374189a281870f5b4e49d83f4a758"; // Usa lo stesso salt del file esistente
            
            // Carica o inizializza i dati
            if (file_exists($visitors_file)) {
                $stats = json_decode(file_get_contents($visitors_file), true);
                $salt = $stats['salt']; // Mantieni lo stesso salt
            } else {
                $stats = [
                    'total_visits' => 0,
                    'unique_visitors' => 0,
                    'visitors_by_country' => [],
                    'unique_ips' => [],
                    'salt' => $salt
                ];
            }

            // Anonimizzazione IP
            $client_ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
            $anon_ip = hash('sha256', $salt . substr($client_ip, 0, strrpos($client_ip, '.')));

            // Geolocalizzazione
            $country = '__Unknown';
            if ($client_ip !== '0.0.0.0') {
                $url = "http://ip-api.com/json/{$client_ip}?fields=country";
                $response = @file_get_contents($url);
                if ($response) {
                    $data = json_decode($response, true);
                    $country = $data['country'] ?? '__Unknown';
                }
            }

            // Aggiornamento visite
            $stats['total_visits']++;

            // Gestione visitatori unici
            $now = new DateTime();
            if (!isset($stats['unique_ips'][$anon_ip])) {
                $stats['unique_visitors']++;
                $stats['unique_ips'][$anon_ip] = [
                    'first_seen' => $now->format('c'),
                    'last_seen' => $now->format('c'),
                    'country' => $country,
                    'visits' => 1
                ];
            } else {
                $stats['unique_ips'][$anon_ip]['last_seen'] = $now->format('c');
                $stats['unique_ips'][$anon_ip]['visits']++;
            }

            // Aggiornamento paesi
            $stats['visitors_by_country'][$country] = ($stats['visitors_by_country'][$country] ?? 0) + 1;

            // Pulizia dati vecchi (12 mesi)
            $retention = new DateInterval('P1Y');
            foreach ($stats['unique_ips'] as $hash => $data) {
                $last_seen = new DateTime($data['last_seen']);
                $expiry_date = (clone $last_seen)->add($retention);
                if ($expiry_date < $now) {
                    unset($stats['unique_ips'][$hash]);
                    $stats['unique_visitors']--;
                }
            }

            // Salvataggio con file locking
            $fp = fopen($visitors_file, 'c');
            if ($fp) {
                flock($fp, LOCK_EX);
                ftruncate($fp, 0);
                fwrite($fp, json_encode($stats, JSON_PRETTY_PRINT));
                flock($fp, LOCK_UN);
                fclose($fp);
            }
        }
        ?>