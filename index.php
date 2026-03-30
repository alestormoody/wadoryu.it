<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Karate Wadō-ryū - L'Arte della Strada Armoniosa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            hinomaru: '#BC002D',
            'hinomaru-dark': '#8B0020',
          },
          fontFamily: {
            display: ['Playfair Display', 'serif'],
            body: ['Lora', 'serif'],
            ui: ['Outfit', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Lora:ital,wght@0,400;0,600;1,400&family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    html { scroll-behavior: smooth; }

    body { font-family: 'Lora', serif; overflow-x: hidden; }

    h1, h2, h3, h4 { font-family: 'Playfair Display', serif; }

    /* Hero background image layer */
    .hero-bg {
      position: absolute; inset: 0;
      background-image: url('bg.jpg');
      background-size: cover; background-position: center;
      opacity: 0.28; transform: scale(1.04);
    }

    /* Hinomaru decorative disc */
    .hero-disc {
      position: absolute; border-radius: 50%;
      width: min(65vw, 680px); height: min(65vw, 680px);
      top: 50%; left: 50%; transform: translate(-50%, -50%);
      border: 1px solid rgba(188,0,45,0.18);
      pointer-events: none;
    }
    .hero-disc::before {
      content: ''; position: absolute; inset: 32px;
      border-radius: 50%; border: 1px solid rgba(188,0,45,0.10);
    }
    .hero-disc::after {
      content: ''; position: absolute; inset: 64px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(188,0,45,0.07) 0%, transparent 70%);
    }

    /* Section heading accent line */
    .section-heading::after {
      content: ''; display: block;
      width: 44px; height: 3px;
      background: #BC002D; margin-top: 16px;
    }

    /* Kata grid */
    .kata-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 1px; background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.08);
      margin: 40px 0;
    }
    .kata-card {
      background: rgba(255,255,255,0.06);
      padding: 18px 12px; text-align: center;
      font-family: 'Outfit', sans-serif;
      font-size: 0.88rem; font-weight: 600;
      color: rgba(255,255,255,0.88);
      letter-spacing: 0.02em;
      transition: background 0.2s, color 0.2s;
      cursor: default; position: relative;
    }
    .kata-card::before {
      content: ''; position: absolute;
      top: 0; left: 0; right: 0; height: 2px;
      background: #BC002D;
      transform: scaleX(0); transition: transform 0.25s;
    }
    .kata-card:hover { background: #BC002D; color: #fff; }
    .kata-card:hover::before { transform: scaleX(1); }

    @keyframes heroIn {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-animate { animation: heroIn 1.1s ease-out both; }

    @keyframes slideUp {
      from { transform: translateY(100%); }
      to   { transform: translateY(0); }
    }
    .cookie-banner { display: none; }
    .cookie-banner.show { display: block; animation: slideUp 0.4s ease-out; }

    @media (max-width: 768px) {
      .hero-disc { display: none; }
    }
  </style>
</head>

<body>
  <!-- Cookie Banner -->
  <div id="cookieBanner" class="cookie-banner fixed bottom-0 left-0 right-0 z-50 bg-neutral-900 border-t-2 border-hinomaru px-6 py-5">
    <div class="max-w-6xl mx-auto flex flex-wrap items-center gap-5">
      <p class="flex-1 min-w-[220px] font-ui text-sm text-white/80 leading-relaxed">
        <strong class="text-white">Cookie e Tracciamento</strong> — Utilizziamo cookie per analizzare come utilizzi il nostro sito.
        <a href="/cookies.php" target="_blank" class="text-hinomaru underline">Scopri di più</a> ·
        <a href="/privacy.php" target="_blank" class="text-hinomaru underline">Privacy Policy</a>
      </p>
      <div class="flex gap-3">
        <button id="acceptCookies" class="font-ui text-xs font-bold tracking-widest uppercase px-5 py-2.5 bg-hinomaru text-white border-2 border-hinomaru hover:bg-hinomaru-dark transition-colors cursor-pointer">Accetta</button>
        <button id="rejectCookies" class="font-ui text-xs font-bold tracking-widest uppercase px-5 py-2.5 bg-transparent text-white/70 border-2 border-white/25 hover:border-white/60 hover:text-white transition-colors cursor-pointer">Rifiuta</button>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav class="fixed top-0 left-0 right-0 z-40 h-[70px] bg-white backdrop-blur-md border-b-2 border-hinomaru flex items-center">
    <div class="max-w-6xl w-full mx-auto px-8 flex justify-between items-center">
      <a href="#" class="font-display font-black text-2xl text-neutral-900 no-underline tracking-tight">
        Karate <span class="text-hinomaru">Wadō-ryū</span>
      </a>
      <button id="menu-btn" class="lg:hidden flex flex-col gap-[5px] p-1 bg-transparent border-0 cursor-pointer">
        <span class="block w-6 h-0.5 bg-neutral-900 transition-all"></span>
        <span class="block w-6 h-0.5 bg-neutral-900 transition-all"></span>
        <span class="block w-6 h-0.5 bg-neutral-900 transition-all"></span>
      </button>
      <ul class="hidden lg:flex gap-9 list-none m-0 p-0">
        <li><a href="#storia-karate" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Storia</a></li>
        <li><a href="#storia-wado" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Wadō-Ryū</a></li>
        <li><a href="#famiglia-otsuka" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Famiglia Ōtsuka</a></li>
        <li><a href="#kata" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Kata</a></li>
        <li><a href="#kihon" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Kihon</a></li>
        <li><a href="#libri" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase text-neutral-600 no-underline hover:text-hinomaru transition-colors">Libri</a></li>
      </ul>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-white border-b-2 border-hinomaru px-8 py-4">
      <ul class="list-none m-0 p-0 flex flex-wrap gap-x-6 gap-y-3">
        <li><a href="#storia-karate" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Storia</a></li>
        <li><a href="#storia-wado" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Wadō-Ryū</a></li>
        <li><a href="#famiglia-otsuka" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Famiglia Ōtsuka</a></li>
        <li><a href="#kata" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Kata</a></li>
        <li><a href="#kihon" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Kihon</a></li>
        <li><a href="#libri" onclick="document.getElementById('mobile-menu').classList.add('hidden')" class="font-ui text-xs font-bold tracking-widest uppercase text-neutral-700 no-underline hover:text-hinomaru">Libri</a></li>
      </ul>
    </div>
  </nav>

  <script>
    document.getElementById('menu-btn').addEventListener('click', () => {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script>

  <!-- Hero -->
  <header class="relative mt-[70px] min-h-[calc(100vh-70px)] bg-neutral-950 flex items-center justify-center overflow-hidden">
    <div class="hero-bg"></div>
    <div class="hero-disc"></div>
    <div class="hero-animate relative z-10 text-center px-6 max-w-4xl">
      <span class="font-ui text-[0.7rem] font-light tracking-[0.5em] uppercase text-hinomaru block mb-5">和道流 · Via dell'Armonia</span>
      <h1 class="font-display font-black text-white leading-[0.88] tracking-[-3px] mb-3" style="font-size: clamp(3.5rem,11vw,7.5rem)">
        Karate <em class="text-hinomaru not-italic">Wadō</em>-ryū
      </h1>
      <div class="w-14 h-[3px] bg-hinomaru mx-auto my-7"></div>
      <p class="font-body italic text-white/70 mb-12 mx-auto" style="font-size: clamp(1rem,2.5vw,1.3rem); max-width:580px">
        Armonia, Tradizione e Disciplina — l'Arte che nasce dall'Unione tra Karate e Jujutsu
      </p>
      <div class="flex gap-4 justify-center flex-wrap">
        <a href="#storia-wado" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase px-9 py-3.5 bg-hinomaru text-white border-2 border-hinomaru hover:bg-transparent hover:text-white hover:border-white transition-all no-underline">Scopri lo Stile</a>
        <a href="#kata" class="font-ui text-[0.78rem] font-bold tracking-[0.12em] uppercase px-9 py-3.5 bg-transparent text-white border-2 border-white/50 hover:border-white transition-all no-underline">I Kata</a>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main>

    <!-- Storia del Karate -->
    <section id="storia-karate" class="py-24 border-b border-neutral-100">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase text-hinomaru block mb-4">Origini</span>
        <h2 class="font-display font-black text-neutral-900 section-heading mb-12" style="font-size: clamp(2rem,5vw,3rem)">Origini del Karate</h2>
        <div class="max-w-3xl space-y-5 font-body text-[1.05rem] leading-[1.85] text-neutral-700">
          <p>Il karate ha origine nel Regno delle Ryukyu (oggi Okinawa), un arcipelago situato tra il Giappone e Taiwan, dove le arti marziali locali vennero influenzate dalle tecniche di combattimento cinesi. Durante il XIV secolo, il Regno delle Ryukyu instaurò stretti legami commerciali e culturali con la Cina, favorendo il trasferimento di conoscenze, inclusi gli stili di arti marziali come il Kung-Fu Shaolin e il White Crane. Queste influenze si fusero con le pratiche locali, dando vita a una forma unica di combattimento chiamata <em>Tōde</em> ("mano cinese") o <em>Te</em> ("mano").</p>
          <p>Nel XVII secolo, dopo l'invasione del Regno delle Ryukyu da parte del dominio giapponese di Satsuma, gli abitanti di Okinawa furono privati dell'uso delle armi. Questo divieto spinse gli aristocratici locali a sviluppare tecniche di combattimento a mani nude come forma di autodifesa e resistenza. Le pratiche segrete combinavano movimenti fluidi con tecniche di attacco e difesa derivate sia dalle tradizioni cinesi che dalle arti marziali indigene.</p>
          <p>Durante il XVIII secolo, il karate si evolse ulteriormente nelle tre principali città di Okinawa: Shuri, Naha e Tomari. Da queste aree nacquero tre stili distinti: Shuri-te, caratterizzato da movimenti veloci e lineari; Naha-te, focalizzato su tecniche più lente e potenti; e Tomari-te, una combinazione dei due. Questi stili formarono la base dei moderni sistemi di karate.</p>
          <p>Nel XIX secolo, maestri come Matsumura Sōkon e Itosu Ankō contribuirono alla codifica del karate attraverso lo sviluppo dei kata (forme) e l'introduzione della disciplina nelle scuole pubbliche di Okinawa. Itosu Ankō fu particolarmente influente nel rendere il karate accessibile a un pubblico più ampio, semplificando le tecniche per i principianti e creando i kata Pinan (Heian), oggi praticati in tutto il mondo.</p>
          <p>Nel XX secolo, Gichin Funakoshi portò il karate nella terraferma giapponese, trasformandolo in un'arte marziale moderna. Funakoshi introdusse uniformi, cinture colorate e un sistema di gradi per renderlo più comprensibile agli studenti giapponesi. Inoltre, modificò il nome da <em>Tōde</em> ("mano cinese") a <em>Karate</em> ("mano vuota") per eliminare le connotazioni cinesi e adattarlo al contesto culturale giapponese.</p>
          <p>Oggi il karate è praticato in tutto il mondo come arte marziale, disciplina sportiva e metodo di autodifesa. È stato incluso nel programma olimpico a Tokyo 2020 e continua a essere uno sport di riferimento a livello internazionale. La sua filosofia enfatizza la disciplina, la crescita personale e l'idea che "non esiste primo attacco nel karate", promuovendo la pace e la moderazione anche in situazioni di conflitto.</p>
        </div>
      </div>
    </section>

    <!-- Storia Wado -->
    <section id="storia-wado" class="py-24 bg-neutral-50 border-b border-neutral-100">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase text-hinomaru block mb-4">Lo Stile</span>
        <h2 class="font-display font-black text-neutral-900 section-heading mb-12" style="font-size: clamp(2rem,5vw,3rem)">Il Karate Wadō-ryū</h2>
        <div class="max-w-3xl space-y-5 font-body text-[1.05rem] leading-[1.85] text-neutral-700">
          <p>Il Wadō-ryū, uno dei principali stili di karate giapponese, fu sviluppato da Hironori Ōtsuka nel corso degli anni Trenta. La sua formalizzazione avvenne progressivamente, con registrazioni e riconoscimenti tra il 1934 e il 1939, periodo in cui il nome Wadō-ryū si consolidò in modo ufficiale. Il termine significa "Via dell'Armonia" (<em>Wa</em> per armonia, <em>Dō</em> per via) e riflette un approccio che integra il karate di matrice okinawense con principi del jujutsu Shindō Yōshin-ryū [1][2].</p>
          <p>Hironori Ōtsuka (1892–1982), nato in una famiglia di samurai, iniziò il suo percorso marziale studiando lo Shindō Yōshin-ryū jujutsu sotto il maestro Nakayama Tatsusaburō. Questo stile di jujutsu si concentrava su movimenti agili e sull'uso dell'energia dell'avversario per neutralizzarlo, un principio che influenzò profondamente la visione di Ōtsuka [2]. Nel 1922, Ōtsuka incontrò Gichin Funakoshi, il fondatore dello Shotokan karate, e iniziò a studiare il karate di Okinawa. Tuttavia, Ōtsuka percepì che il karate poteva essere arricchito integrando i principi del jujutsu, dando così origine a un approccio unico [3].</p>
          <p>Il Wadō-ryū si distingue dagli altri stili di karate per l'enfasi sul <em>tai sabaki</em> (movimenti evasivi del corpo), che consente al praticante di evitare gli attacchi invece di bloccarli frontalmente. Questo approccio riduce l'uso della forza bruta e promuove movimenti fluidi e naturali. Inoltre, lo stile include tecniche avanzate come leve articolari (<em>kansetsu waza</em>) e proiezioni (<em>nage waza</em>), elementi derivati dal jujutsu [1][3].</p>
          <p>Un'altra caratteristica distintiva del Wadō-ryū è la sua enfasi sull'armonia tra mente e corpo. Secondo Ōtsuka, il vero significato del karate non risiede nella vittoria o nella sconfitta, ma nel miglioramento personale e nella ricerca dell'equilibrio interiore. Questa filosofia si riflette anche nei kata (forme) dello stile, che combinano movimenti eleganti con tecniche pratiche per sviluppare concentrazione, disciplina e abilità marziali [2].</p>
          <p>Nel dopoguerra il Wadō-ryū si è diffuso in tutto il mondo grazie all'opera diretta di Ōtsuka e dei suoi allievi. Nel 1964 nacque la Japan Karate Federation (JKF), che riconobbe il Wadō-ryū tra i principali stili, contribuendo ulteriormente alla sua diffusione internazionale. Oggi è praticato da milioni di persone ed è riconosciuto come uno stile che incarna l'essenza delle arti marziali giapponesi: armonia, rispetto e crescita personale [3].</p>
        </div>
      </div>
    </section>

    <!-- Famiglia Otsuka -->
    <section id="famiglia-otsuka" class="py-24 border-b border-neutral-100">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase text-hinomaru block mb-4">Il Fondatore</span>
        <h2 class="font-display font-black text-neutral-900 section-heading mb-12" style="font-size: clamp(2rem,5vw,3rem)">La Famiglia Ōtsuka</h2>
        <div class="max-w-3xl space-y-5 font-body text-[1.05rem] leading-[1.85] text-neutral-700">
          <p>Hironori Ōtsuka (1892–1982), fondatore del Wadō-ryū, proveniva da una famiglia di samurai, una classe sociale che per secoli incarnò i valori di disciplina, onore e abilità marziale. Fin dalla giovane età, Ōtsuka fu introdotto alle arti marziali tradizionali giapponesi, iniziando lo studio dello Shindō Yōshin-ryū jujutsu sotto la guida del maestro Nakayama Tatsusaburō. Questo stile di jujutsu si concentrava su movimenti fluidi, leve articolari e l'uso dell'energia dell'avversario per neutralizzarlo, principi che avrebbero influenzato profondamente la sua visione marziale [1].</p>
          <p>La famiglia Ōtsuka era nota per il suo impegno nel preservare le tradizioni giapponesi, e questo contesto culturale fornì a Hironori una solida base per sviluppare il suo approccio unico alle arti marziali. Dopo aver padroneggiato il jujutsu, Ōtsuka ampliò il suo repertorio studiando il karate di Okinawa sotto Gichin Funakoshi, il fondatore dello Shotokan karate. Tuttavia, Ōtsuka percepì che il karate tradizionale poteva essere ulteriormente arricchito integrando i principi del jujutsu, dando vita a un sistema che combinava forza, velocità e strategia con movimenti naturali ed evasivi [2][3].</p>
          <p>Dopo anni di studio e sperimentazione, Hironori Ōtsuka definì progressivamente il Wadō-ryū nel corso degli anni Trenta, con passaggi formali tra il 1934 e il 1939. Il nome dello stile rifletteva la sua filosofia: <em>Wa</em> ("armonia") e <em>Dō</em> ("via"), sottolineando l'importanza di trovare equilibrio tra mente e corpo. Lo stile non solo incorporava tecniche di attacco e difesa del karate tradizionale, ma anche principi avanzati come il <em>tai sabaki</em> (movimenti evasivi) e le proiezioni (<em>nage waza</em>) derivati dal jujutsu [3].</p>
          <p>La famiglia Ōtsuka continuò a svolgere un ruolo significativo nella diffusione del Wadō-ryū. Dopo la morte di Hironori Ōtsuka nel 1982, la leadership dello stile passò ai suoi successori, i quali hanno mantenuto e sviluppato l'eredità del fondatore. Nel corso dei decenni, diversi membri della famiglia Ōtsuka hanno contribuito alla guida dello stile. Attualmente, Kazutaka Ōtsuka ricopre un ruolo centrale nel guidare il Wadō-ryū e nel promuovere i principi fondamentali dello stile a livello internazionale [1][3].</p>
          <p>Oggi la famiglia Ōtsuka è considerata una delle più influenti nel panorama delle arti marziali giapponesi. Il loro contributo non si limita alla creazione del Wadō-ryū ma rappresenta un esempio di dedizione alla filosofia marziale e alla ricerca dell'armonia interiore ed esteriore.</p>
        </div>
      </div>
    </section>

    <!-- Kata -->
    <section id="kata" class="py-24 bg-neutral-950">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase block mb-4" style="color:#FF6B6B">Forme</span>
        <h2 class="font-display font-black text-white section-heading mb-10" style="font-size: clamp(2rem,5vw,3rem)">I Kata del Wadō-ryū</h2>
        <p class="max-w-3xl font-body text-[1.05rem] leading-[1.85] text-white/75 mb-2">I kata sono sequenze codificate di movimenti che rappresentano tecniche di attacco e difesa. Nel Wadō-ryū, i kata riflettono l'armonia tra forza e fluidità, combinando principi di karate e jujutsu. Nel tempo, organizzazioni e scuole hanno mantenuto un nucleo storico comune, con differenze su nomenclatura, ordine di studio e interpretazione tecnica.</p>
        <div class="kata-grid">
          <div class="kata-card">Pinan Shodan</div>
          <div class="kata-card">Pinan Nidan</div>
          <div class="kata-card">Pinan Sandan</div>
          <div class="kata-card">Pinan Yondan</div>
          <div class="kata-card">Pinan Godan</div>
          <div class="kata-card">Kushanku</div>
          <div class="kata-card">Naihanchi</div>
          <div class="kata-card">Seishan</div>
          <div class="kata-card">Chinto</div>
          <div class="kata-card">Bassai</div>
          <div class="kata-card">Jion</div>
          <div class="kata-card">Jitte</div>
          <div class="kata-card">Rohai</div>
          <div class="kata-card">Niseishi</div>
        </div>
        <h3 class="font-display font-bold text-[#E8A0A0] text-xl mt-10 mb-5">Descrizione dei Kata Principali</h3>
        <ul class="max-w-3xl space-y-3 font-body text-[1.02rem] leading-[1.85] text-white/75 list-disc list-inside">
          <li><b class="text-[#FFB0B0]">Pinan Shodan - Godan:</b> Una serie di cinque kata creati da Anko Itosu per introdurre i principi fondamentali del karate. Questi kata enfatizzano la fluidità dei movimenti e la coordinazione tra attacco e difesa [1][2].</li>
          <li><b class="text-[#FFB0B0]">Kushanku:</b> Uno dei kata più antichi, originario di Okinawa, caratterizzato da tecniche avanzate come calci alti e movimenti evasivi. Il nome deriva dal maestro cinese Kūsankū [3].</li>
          <li><b class="text-[#FFB0B0]">Naihanchi:</b> Un kata basato su tecniche di combattimento a distanza ravvicinata e movimenti laterali in kiba-dachi (posizione del cavaliere). È noto anche come Tekki nello Shotokan [4].</li>
          <li><b class="text-[#FFB0B0]">Seishan:</b> Conosciuto come "13 mani", questo kata combina movimenti circolari e lineari, enfatizzando equilibrio e precisione [5].</li>
          <li><b class="text-[#FFB0B0]">Chinto:</b> Creato da Matsumura Sōkon, include tecniche di equilibrio avanzate come la posizione della gru e calci volanti [5].</li>
          <li><b class="text-[#FFB0B0]">Bassai:</b> Un kata dinamico che enfatizza la forza esplosiva e il controllo della respirazione. Il nome significa "penetrare una fortezza" [6].</li>
          <li><b class="text-[#FFB0B0]">Jion:</b> Un kata che rappresenta la serenità e la forza interiore. Include tecniche di parata e contrattacco in rapida successione [6].</li>
          <li><b class="text-[#FFB0B0]">Jitte:</b> Significa "10 mani" ed è progettato per affrontare più avversari contemporaneamente. Include tecniche di blocco potenti [6].</li>
          <li><b class="text-[#FFB0B0]">Rohai:</b> Conosciuto per le sue posizioni uniche e movimenti eleganti, rappresenta la calma sotto pressione [6].</li>
          <li><b class="text-[#FFB0B0]">Niseishi:</b> Tradotto come "24 passi", questo kata combina movimenti fluidi con tecniche esplosive [6].</li>
        </ul>
      </div>
    </section>

    <!-- Kihon -->
    <section id="kihon" class="py-24 bg-neutral-50 border-b border-neutral-100">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase text-hinomaru block mb-4">Fondamenta</span>
        <h2 class="font-display font-black text-neutral-900 section-heading mb-12" style="font-size: clamp(2rem,5vw,3rem)">I Kihon (Tecniche Fondamentali)</h2>
        <div class="max-w-3xl font-body text-[1.05rem] leading-[1.85] text-neutral-700">
          <p class="mb-5">I kihon, che in giapponese significa "fondamenta" o "basi", rappresentano l'essenza del karate. Nel Wadō-ryū, i kihon non sono solo esercizi tecnici, ma un mezzo per comprendere i principi di armonia (<em>wa</em>) e movimento fluido (<em>tai sabaki</em>), che sono alla base dello stile. Essi includono pugni, calci, parate e movimenti fondamentali che sviluppano precisione, velocità, potenza e controllo.</p>
          <h3 class="font-display font-bold text-hinomaru text-xl mt-10 mb-5">Le Tecniche Fondamentali del Kihon</h3>
          <ul class="space-y-3 list-disc list-inside">
            <li><b class="text-neutral-900">Pugni (<em>Tsuki</em>):</b> Tecniche come il <em>gyaku tsuki</em> (pugno inverso) e il <em>oi tsuki</em> (pugno avanzato) insegnano a generare potenza attraverso la rotazione dell'anca e il trasferimento del peso corporeo [1].</li>
            <li><b class="text-neutral-900">Calci (<em>Geri</em>):</b> Tecniche come il <em>mae geri</em> (calcio frontale), <em>yoko geri</em> (calcio laterale) e <em>mawashi geri</em> (calcio circolare) enfatizzano equilibrio, flessibilità e precisione [2].</li>
            <li><b class="text-neutral-900">Parate (<em>Uke</em>):</b> Parate come il <em>gedan barai</em> (parata bassa), <em>age uke</em> (parata alta) e <em>soto uke</em> (parata esterna) sono progettate per deviare gli attacchi in modo efficiente [3].</li>
            <li><b class="text-neutral-900">Movimenti del corpo (<em>Tai Sabaki</em>):</b> Movimenti evasivi che consentono di evitare gli attacchi invece di affrontarli direttamente. Questo principio deriva dal jujutsu ed è centrale nel Wadō-ryū [4].</li>
            <li><b class="text-neutral-900">Posizioni (<em>Dachi</em>):</b> Posizioni come il <em>zenkutsu dachi</em> (posizione avanzata), il <em>kokutsu dachi</em> (posizione arretrata) e il <em>kiba dachi</em> (posizione del cavaliere) garantiscono stabilità ed equilibrio durante l'esecuzione delle tecniche [5].</li>
          </ul>
          <h3 class="font-display font-bold text-hinomaru text-xl mt-10 mb-5">I Kihon Kumite del Wadō-ryū</h3>
          <p class="mb-4">I <strong>Kihon Kumite</strong> sono esercizi codificati di combattimento prestabilito che combinano le tecniche fondamentali con i principi di distanza (<em>maai</em>) e tempismo (<em>kiai</em>). Essi rappresentano un ponte tra la pratica individuale dei kihon e l'applicazione pratica nelle situazioni di combattimento. Nel Wadō-ryū, ci sono dieci Kihon Kumite principali:</p>
          <ol class="space-y-3 list-decimal list-inside">
            <li><b class="text-neutral-900">Kihon Kumite 1:</b> Introduce il concetto di difesa simultanea e contrattacco con movimenti fluidi.</li>
            <li><b class="text-neutral-900">Kihon Kumite 2:</b> Enfatizza l'uso del <em>tai sabaki</em> per evitare un attacco diretto e rispondere con tecniche combinate [6].</li>
            <li><b class="text-neutral-900">Kihon Kumite 3:</b> Sviluppa la capacità di bloccare e contrattaccare utilizzando leve articolari.</li>
            <li><b class="text-neutral-900">Kihon Kumite 4:</b> Introduce tecniche avanzate di proiezione (<em>nage waza</em>) integrate con parate.</li>
            <li><b class="text-neutral-900">Kihon Kumite 5:</b> Combina movimenti evasivi con attacchi multipli a diverse altezze.</li>
            <li><b class="text-neutral-900">Kihon Kumite 6–10:</b> Approfondiscono i principi di timing, distanza e fluidità nei movimenti difensivi e offensivi.</li>
          </ol>
          <h3 class="font-display font-bold text-hinomaru text-xl mt-10 mb-5">L'Importanza dei Kihon nel Karate Wadō-ryū</h3>
          <p>La pratica dei kihon non è solo un esercizio tecnico, ma anche un modo per sviluppare la connessione tra mente e corpo. Attraverso la ripetizione costante delle tecniche fondamentali, i praticanti migliorano consapevolezza spaziale, coordinazione motoria e capacità di reagire rapidamente agli stimoli esterni. I <strong>Kihon Kumite</strong>, in particolare, aiutano a comprendere come applicare i principi del Wadō-ryū in situazioni dinamiche, enfatizzando l'armonia tra difesa e attacco.</p>
        </div>
      </div>
    </section>

    <!-- Libri -->
    <section id="libri" class="py-24">
      <div class="max-w-6xl mx-auto px-8">
        <span class="font-ui text-[0.68rem] font-bold tracking-[0.35em] uppercase text-hinomaru block mb-4">Approfondimenti</span>
        <h2 class="font-display font-black text-neutral-900 section-heading mb-12" style="font-size: clamp(2rem,5vw,3rem)">Libri Consigliati</h2>
        <div class="max-w-3xl font-body text-[1.05rem] leading-[1.85] text-neutral-700">
          <p class="mb-6">La letteratura sul Wadō-ryū e sul karate tradizionale offre una vasta gamma di testi che approfondiscono la storia, le tecniche e la filosofia di queste arti marziali. Ecco alcuni libri essenziali per praticanti e appassionati.</p>
          <ul class="space-y-4 list-disc list-inside">
            <li><b class="text-neutral-900">"Karate-do Kyohan: The Master Text" – Gichin Funakoshi:</b> Un'opera fondamentale scritta dal fondatore del karate Shotokan. Questo libro esplora i principi filosofici e tecnici del karate, fornendo una base solida per comprendere l'evoluzione delle arti marziali giapponesi [1].</li>
            <li><b class="text-neutral-900">"Mastering Martial Arts: The Path of Wado Ryu Karate-Do" – Hironori Ōtsuka:</b> Un testo scritto dal fondatore del Wadō-ryū, che illustra la filosofia dello stile, le tecniche fondamentali e i kata. Include una panoramica storica sulla fusione tra karate di Okinawa e jujutsu giapponese [5].</li>
            <li><b class="text-neutral-900">"Wado Ryu Karate and Jujutsu" – Mark Edward Cody:</b> Un testo completo che esplora le origini, le tecniche e i kata del Wadō-ryū. È uno dei pochi libri scritti in inglese che analizza tutti i diciassette kata dello stile con dettagli precisi sui movimenti e sulle applicazioni pratiche [2].</li>
            <li><b class="text-neutral-900">"Wado-Ryu Karate: The Complete Art Uncovered" – Frank Johnson:</b> Considerato uno dei testi più completi sul Wadō-ryū, questo libro include oltre 1.100 fotografie che illustrano le tecniche, i kihon kumite, i kata e le difese avanzate. È un'opera ideale per chi vuole approfondire ogni aspetto dello stile [4].</li>
            <li><b class="text-neutral-900">"Shindo Yoshin Ryu: History and Technique" – Tobin Threadgill:</b> Sebbene non specifico per il Wadō-ryū, questo libro analizza le radici dello Shindō Yōshin-ryū jujutsu, una delle principali influenze nello sviluppo dello stile. È utile per comprendere il contesto storico e tecnico del Wadō-ryū [6].</li>
          </ul>
          <div class="mt-10 pt-8 border-t border-neutral-200">
            <h3 class="font-display font-bold text-neutral-500 text-base mb-4">Fonti</h3>
            <ol class="space-y-2 list-decimal list-inside text-sm text-neutral-500">
              <li>Funakoshi, Gichin. <i>Karate-do Kyohan: The Master Text</i>. Kodansha International, 1973. ISBN: 978-4-7700-0901-4.</li>
              <li>Cody, Mark Edward. <i>Wado Ryu Karate and Jujutsu</i>. Tuttle Publishing, 2008. ISBN: 978-0-8048-3875-3.</li>
              <li>Japan Karatedo Federation Wado-Kai (JKF Wadōkai), pagine ufficiali su storia e programma tecnico: https://www.karatedo.co.jp/wado/w_eng/ (consultato il 30/03/2026).</li>
              <li>Johnson, Frank. <i>Wado-Ryu Karate: The Complete Art Uncovered</i>. 2013. ISBN: 978-1-49080-693-5.</li>
              <li>Ōtsuka, Hironori. <i>Mastering Martial Arts: The Path of Wado Ryu Karate-Do</i>. Kodansha International, 1996.</li>
              <li>Threadgill, Tobin et al. <i>Shindo Yoshin Ryu: History and Technique</i>. 2004.</li>
              <li>Wado-Ryu Karate-Do Renmei, sito ufficiale (storia e materiali): https://www.wado-ryu.jp/en/ (consultato il 30/03/2026).</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-neutral-950 border-t-[3px] border-hinomaru pt-16 pb-8">
    <div class="max-w-6xl mx-auto px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-14">
        <div>
          <h3 class="font-display font-bold text-white text-base mb-4">Chi Siamo</h3>
          <p class="font-ui text-sm text-white/55 leading-relaxed">Karate Wadō-Ryū è dedicato alla diffusione dello stile Wadō-Ryū, combinando tradizione e innovazione. La nostra missione è promuovere l'armonia tra mente e corpo attraverso il karate.</p>
        </div>
        <div>
          <h3 class="font-display font-bold text-white text-base mb-4">Link Utili</h3>
          <ul class="list-none p-0 m-0 space-y-2">
            <li><a href="#storia-karate" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">Storia del Karate</a></li>
            <li><a href="#storia-wado" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">Storia del Wadō-Ryū</a></li>
            <li><a href="#kata" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">I Kata</a></li>
            <li><a href="#libri" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">Libri Consigliati</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-display font-bold text-white text-base mb-4">Legale</h3>
          <ul class="list-none p-0 m-0 space-y-2">
            <li><a href="/privacy.php" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">Privacy Policy</a></li>
            <li><a href="/cookies.php" class="font-ui text-sm text-white/55 no-underline hover:text-hinomaru transition-colors">Cookie Policy</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-display font-bold text-white text-base mb-4">Seguici</h3>
          <p class="font-ui text-sm text-white/55 leading-relaxed mb-4">Rimani aggiornato sulle nostre attività e novità.</p>
          <a href="https://www.instagram.com/wadoryu.it" aria-label="Instagram" class="text-white/55 hover:text-hinomaru transition-colors text-xl no-underline">
            <i class="fa-brands fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="border-t border-white/10 pt-6 text-center font-ui text-xs text-white/35">
        © 2025 Karate Wadō-Ryū — Tutti i diritti riservati
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