<?php

use CMW\Controller\Users\UsersSessionsController;
use CMW\Utils\Website;

Website::setTitle('War Lands - Minecraft Tactical Survival');
Website::setDescription("WarLands est un serveur Minecraft PvPvE unique : bases sécurisées, continent hostile, loot, économie, PvP, mobs, progression et survie stratégique.");
?>

<main>
    <section
        class="relative min-h-screen flex items-center"
        style="
        background-image:url('https://wlmc.fr/Public/Themes/Warlands/Assets/Img/bg.webp');
        background-size:cover;
        background-position:center;"
    >
        <div class="absolute inset-0 hero-grid"></div>

        <div class="relative w-full z-10">
            <!-- Top left / right stats -->
            <div class="mx-auto px-6">
                <div class="flex items-start justify-between text-xs md:text-sm font-mono tracking-wide">
                    <div class="space-y-1 text-orange-500/80">
                        <div>SYS.STATUS: <span>OPPÉRATIONNEL</span></div>
                        <div>CONN.QUALITÉ: <span>SECURE</span></div>
                        <div>MENACE.NIVEAU: <span class="text-red-700">ÉLEVER</span></div>
                    </div>
                    <div class="space-y-1 text-right text-green-500/80">
                        <div>JOUEURS.EN.LIGNE: <span>247</span></div>
                        <div>SERVER.TICK: <span>20 TPS</span></div>
                        <div>REGION: <span>FRANCE</span></div>
                    </div>
                </div>
            </div>

            <!-- Center content -->
            <div class="mx-auto max-w-5xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#923B04] bg-[#1F0F07]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            TACTICAL SURVIVAL • PvPvE • MINECRAFT EVOLVED • NO MODS
                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-5xl md:text-9xl font-extrabold tracking-wide">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">War</span>
                                <span class="text-[#FF6900] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> Lands</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Préparez-vous en sécurité. Déployez-vous dans le chaos. Extrayez-vous avec gloire.
                                </div>
                                <div class="text-lg md:text-xl text-[#FF6900] font-semibold">
                                    Ce n'est pas juste Minecraft. C'est la guerre.
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="mt-12 flex items-center justify-center gap-4">
                                <a href="#deploy"
                                   class="flex gap-2 items-center h-12 px-6 bg-[#FF6900] text-black font-bold tracking-wide
                            transition duration-300 hover:shadow-[0_0_22px_rgba(255,105,0,.55)]
                            hover:translate-y-[-1px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M7 5h16v4h-1v1h-6a1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H9.62c-.38 0-.73.22-.9.56l-2.45 4.89c-.17.34-.51.55-.89.55H2s-3 0 1-6c0 0 3-4-1-4V5h1l.5-1h3zm7 7v-1a1 1 0 0 0-1-1h-1s-1 1 0 2a2 2 0 0 1-2-2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1"/></svg>
                                    Déploiement
                                </a>
                                <a href="#store"
                                   class="flex gap-2 items-center h-12 px-6 bg-transparent text-white font-semibold tracking-wide
                            border border-white/25 transition duration-300
                            hover:border-white/45 hover:bg-white/5
                            hover:shadow-[0_0_18px_rgba(255,105,0,.20)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.5 8.75v2.5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2.5m-4 0v4.489M1.5 10h7M3.534 6.66c.755 0 1.425-.362 1.846-.922a2.305 2.305 0 0 0 3.692 0a2.308 2.308 0 0 0 4.154-1.385c0-.616-.461-2.53-2.308-3.27c-2.864-.442-4.48-.446-7.384 0c-1.846.74-2.308 2.654-2.308 3.27A2.31 2.31 0 0 0 3.534 6.66"/></svg>
                                    Boutique
                                </a>
                            </div>

                            <div class="mt-5 text-sm text-white/70 font-mono">
                                IP: <span class="text-white/90">play.wlmc.fr</span> • VERSION: <span class="text-white/90">1.21.x</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll hint -->
            <div class="absolute bottom-8 left-0 right-0 flex justify-center">
                <a href="#base" class="text-[#FF6900] font-mono tracking-widest bounce-soft hover:opacity-90 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="currentColor"><path d="M12 5a1 1 0 0 0-1 1v4a1 1 0 1 0 2 0V6a1 1 0 0 0-1-1"/><path fill-rule="evenodd" d="M4 8a8 8 0 1 1 16 0v8a8 8 0 1 1-16 0zm14 0v8a6 6 0 0 1-12 0V8a6 6 0 1 1 12 0" clip-rule="evenodd"/></g></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Dummy sections -->
    <section id="base" class="relative min-h-screen flex items-center"
             style="
        background-image:url('https://wlmc.fr/Public/Themes/Warlands/Assets/Img/camp.webp');
        background-size:cover;
        background-position:center;">
        <div class="absolute inset-0 img-filter"></div>
        <div class="bg-neutral-950 h-2 w-full top-0 z-20 absolute" style="box-shadow: 0px -20px 30px #FF6900;"></div>
        <div class="relative w-full z-10">
            <!-- Center content -->
            <div class="mx-auto max-w-7xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#03712F] bg-[#05190D]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#05DF72" d="M12 20.962q-3.014-.895-5.007-3.651T5 11.1V5.692l7-2.615l7 2.615V11.1q0 3.454-1.993 6.21T12 20.963m0-1.062q2.6-.825 4.3-3.3t1.7-5.5V6.375l-6-2.23l-6 2.23V11.1q0 3.025 1.7 5.5t4.3 3.3m0-7.88"/></svg>
                                <span class="text-[#05DF72]">ZONE SÉCURISER</span>
                            </div>

                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-3xl md:text-5xl font-black tracking-tight">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">LA</span>
                                <span class="text-[#05DF72] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> /BASE</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Votre sanctuaire. Un lieu où le JcJ est interdit et où se forge la stratégie.
                                </div>
                                <div class="text-lg md:text-xl text-white/90">
                                    Gérez votre inventaire, progressez et préparez-vous au monde hostile qui vous attend.
                                </div>
                            </div>

                            <div class="lg:grid grid-cols-3 gap-8 mt-8 text-left">
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 48 48"><g fill="none" stroke="#05DF72" stroke-linejoin="round" stroke-width="4"><path d="M6 9.256L24.009 4L42 9.256v10.778A26.32 26.32 0 0 1 24.003 45A26.32 26.32 0 0 1 6 20.029z"/><path stroke-linecap="round" d="m15 23l7 7l12-12"/></g></svg>
                                    <h3 class="text-xl mt-4">PvP DÉSACTIVER</h3>
                                    <p class="text-xs mt-2">Sécurité totale. Concentrez-vous sur la préparation sans crainte.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#00D3F3" d="M6.5 10h-2v7h2zm6 0h-2v7h2zm8.5 9H2v2h19zm-2.5-9h-2v7h2zm-7-6.74L16.71 6H6.29zm0-2.26L2 6v2h19V6z"/></svg>
                                    <h3 class="text-xl mt-4">BANQUE SÉCURISÉ</h3>
                                    <p class="text-xs mt-2">Déposer, Retirer, mettez en sécurité vos fonds communs</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="#50A2FF" d="M17 6a1 1 0 1 0 0 2h1.586L14 12.586l-3.793-3.793a1 1 0 0 0-1.414 0l-6.5 6.5a1 1 0 1 0 1.414 1.414L9.5 10.914l3.793 3.793a1 1 0 0 0 1.414 0L20 9.414V11a1 1 0 1 0 2 0V7a1 1 0 0 0-1-1z"/></g></svg>
                                    <h3 class="text-xl mt-4">PROGRESSION</h3>
                                    <p class="text-xs mt-2">Débloquez des compétences, améliorez votre équipement.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="none" stroke="#C27AFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 20c0-1.742-1.67-3.223-4-3.773M15 20c0-2.21-2.686-4-6-4s-6 1.79-6 4m12-7a4 4 0 0 0 0-8m-6 8a4 4 0 1 1 0-8a4 4 0 0 1 0 8"/></svg>
                                    <h3 class="text-xl mt-4">COMMUNAUTÉ</h3>
                                    <p class="text-xs mt-2">Formez des équipes, partagez des stratégies.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="none" stroke="#FDC700" stroke-linejoin="round" stroke-width="1.5" d="M10.691 4.562a6.19 6.19 0 0 1 6.545-1.42c.378.141.45.62.165.906l-2.787 2.787a1.037 1.037 0 0 0 0 1.467l1.084 1.084a1.037 1.037 0 0 0 1.467 0L19.953 6.6c.285-.285.764-.212.905.165a6.187 6.187 0 0 1-7.696 8.058c-.396-.128-.84-.054-1.134.24L6.481 20.61a2.186 2.186 0 1 1-3.09-3.09l5.547-5.548c.294-.294.368-.738.24-1.134a6.19 6.19 0 0 1 1.513-6.276Z"/></svg>
                                    <h3 class="text-xl mt-4">ATELIER</h3>
                                    <p class="text-xs mt-2">Fabriquez, modifiez et personnalisez votre équipement.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#03712F] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="#08AD5A"><path d="M13 6h-2v1a1 1 0 1 0 2 0z"/><path fill-rule="evenodd" d="M6 2v2h1v3a5 5 0 0 0 5 5a5 5 0 0 0-5 5v3H6v2h12v-2h-1v-3a5 5 0 0 0-5-5a5 5 0 0 0 5-5V4h1V2zm3 2h6v3a3 3 0 1 1-6 0zm0 13v3h6v-3a3 3 0 1 0-6 0" clip-rule="evenodd"/></g></svg>
                                    <h3 class="text-xl mt-4">REPOS</h3>
                                    <p class="text-xs mt-2">Planifiez votre prochain déploiement.</p>
                                </div>
                            </div>

                            <div class="inline-block px-5 py-2 mt-12 border border-[#03712F] bg-[#05190D]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 15H6l7-14v8h5l-7 14z"/></svg>
                                    <span>La base est votre fondation. Maîtrisez-la avant de vous déployer.</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="conti" class="relative min-h-screen flex items-center"
             style="
        background-image:url('https://wlmc.fr/Public/Themes/Warlands/Assets/Img/conti.webp');
        background-size:cover;
        background-position:center;">
        <div class="absolute inset-0 img-filter"></div>
        <div class="bg-neutral-950 h-2 w-full top-0 z-20 absolute" style="box-shadow: 0px -20px 30px #03712F;"></div>
        <div class="relative w-full z-10">
            <!-- Center content -->
            <div class="mx-auto max-w-7xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#8C1B22] bg-[#1F0B0F]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#ff6467" d="M2.725 21q-.275 0-.5-.137t-.35-.363t-.137-.488t.137-.512l9.25-16q.15-.25.388-.375T12 3t.488.125t.387.375l9.25 16q.15.25.138.513t-.138.487t-.35.363t-.5.137zm1.725-2h15.1L12 6zM12 18q.425 0 .713-.288T13 17t-.288-.712T12 16t-.712.288T11 17t.288.713T12 18m0-3q.425 0 .713-.288T13 14v-3q0-.425-.288-.712T12 10t-.712.288T11 11v3q0 .425.288.713T12 15m0-2.5"/></svg>
                                <span class="text-[#ff6467]">ZONE HOSTILE</span>
                            </div>
                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-3xl md:text-5xl font-black tracking-tight">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">LE</span>
                                <span class="text-[#FF6900] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> /CONTINENT</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Un désert sans foi ni loi où règne le PvPvE. Chaque déploiement est chronométré.
                                </div>
                                <div class="text-lg md:text-xl text-white/90">
                                    Chaque décision compte. Mourir signifie perdre son équipement et son argent.
                                </div>
                            </div>

                            <div class="mt-8 inline-block px-5 py-2 border border-[#8C1B22] bg-[#1F0B0F]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2.3em" height="2.3em" viewBox="0 0 24 24"><path fill="#ff6467" d="M12 20a7 7 0 0 1-7-7a7 7 0 0 1 7-7a7 7 0 0 1 7 7a7 7 0 0 1-7 7m7.03-12.61l1.42-1.42c-.45-.51-.9-.97-1.41-1.41L17.62 6c-1.55-1.26-3.5-2-5.62-2a9 9 0 0 0-9 9a9 9 0 0 0 9 9c5 0 9-4.03 9-9c0-2.12-.74-4.07-1.97-5.61M11 14h2V8h-2m4-7H9v2h6z"/></svg>
                                    <div>
                                        <p class="text-[#ff6467] text-lg">30:00 LIMITE DE DÉPLOIEMENT</p>
                                        <p class="text-[#ff6467] text-sm">Extraire avant qu'il ne soit trop tard, ou tout perdre.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:grid grid-cols-3 gap-8 mt-8 text-left">
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#FF6467" d="M12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m.005-3q-2.082 0-3.543-1.457T7 12.005T8.457 8.46T11.995 7t3.544 1.457T17 11.995t-1.457 3.544T12.005 17M12 16q1.65 0 2.825-1.175T16 12t-1.175-2.825T12 8T9.175 9.175T8 12t1.175 2.825T12 16m0-3q-.402 0-.701-.299T11 12t.299-.701T12 11t.701.299T13 12t-.299.701T12 13"/></svg>
                                    <h3 class="text-xl mt-4">ZONES DE CONTRÔLE</h3>
                                    <p class="text-xs mt-2">Capturez et tenez les points stratégiques.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none" stroke="#FDC700" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m14 13l-8.381 8.38a1 1 0 0 1-3.001-3L11 9.999m4.973-5.972A13 13 0 0 0 5.902 2.373c-1.398.342-1.092 2.158.277 2.601a19.9 19.9 0 0 1 5.822 3.024m4 4.001a19.9 19.9 0 0 1 3.024 5.824c.444 1.369 2.26 1.676 2.603.278A13 13 0 0 0 20 8.069"/><path d="M18.352 3.352a1.205 1.205 0 0 0-1.704 0l-5.296 5.296a1.205 1.205 0 0 0 0 1.704l2.296 2.296a1.205 1.205 0 0 0 1.704 0l5.296-5.296a1.205 1.205 0 0 0 0-1.704z"/></g></svg>
                                    <h3 class="text-xl mt-4">ZONES MINIÈRES</h3>
                                    <p class="text-xs mt-2">Des ressources rares apparaissent ici. Risque élevé.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd"><path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="#C27AFF" d="M12 2a9 9 0 0 1 5.5 16.125c-.34.262-.5.59-.5.875a2 2 0 0 1-2 2v-1a1 1 0 1 0-2 0v1h-2v-1a1 1 0 1 0-2 0v1a2 2 0 0 1-2-2c0-.284-.16-.613-.5-.875A9 9 0 0 1 12 2M8.5 9a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5m7 0a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5"/></g></svg>
                                    <h3 class="text-xl mt-4">ZONES ÉVÉNEMENTIELLES</h3>
                                    <p class="text-xs mt-2">Rencontres dynamiques. Combats de boss. Défis JcE.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 512 512"><path fill="#FF8904" d="M166 16c-7.844 0-15 7.353-15 15v30h15v30h-60c-68.24 0-75.004 53.136-75 75v270c.002 11.74-15 30-15 30v30h480v-30s-15.002-18.26-15-30V166c.004-21.864-6.76-75-75-75h-60V61h15V31c0-7.647-7.156-15-15-15zm72.03 45c1.045-.007 2.032 0 2.97 0h30c15 0 45 0 45 30H196c0-28.125 26.376-29.89 42.03-30M121 151h270c19.21 0 30 10.98 30 30v240c0 8.467-7.733 15-15 15H106c-7.267 0-15-6.533-15-15V181c0-19.02 10.79-30 30-30m30 30s-30 21.842-30 60v105h60V241c0-38.158-30-60-30-60m105 0s-30 21.842-30 60v105h60V241c0-38.158-30-60-30-60m105 0s-30 21.842-30 60v105h60V241c0-38.158-30-60-30-60M121 361v30h60v-30zm105 0v30h60v-30zm105 0v30h60v-30z"/></svg>
                                    <h3 class="text-xl mt-4">BUTIN</h3>
                                    <p class="text-xs mt-2">Fouillez et trouver du butin sur tout le continent</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#09AD5B" d="M15.999 8.5h2c0-2.837-2.755-4.131-5-4.429V2h-2v2.071c-2.245.298-5 1.592-5 4.429c0 2.706 2.666 4.113 5 4.43v4.97c-1.448-.251-3-1.024-3-2.4h-2c0 2.589 2.425 4.119 5 4.436V22h2v-2.07c2.245-.298 5-1.593 5-4.43s-2.755-4.131-5-4.429V6.1c1.33.239 3 .941 3 2.4m-8 0c0-1.459 1.67-2.161 3-2.4v4.799c-1.371-.253-3-1.002-3-2.399m8 7c0 1.459-1.67 2.161-3 2.4v-4.8c1.33.239 3 .941 3 2.4"/></svg>
                                    <h3 class="text-xl mt-4">COMMERCE</h3>
                                    <p class="text-xs mt-2">Échangez avec les PNJ et les joueurs.</p>
                                </div>
                                <div class="border border-[#27272A] bg-[#27272A]/30 hover:border-[#8C1B22] hover:bg-[#05190D]/50 px-4 py-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24"><path fill="#00D3F3" d="M7 21v-2h4v-3.1q-1.225-.275-2.187-1.037T7.4 12.95q-1.875-.225-3.137-1.637T3 8V7q0-.825.588-1.412T5 5h2V3h10v2h2q.825 0 1.413.588T21 7v1q0 1.9-1.263 3.313T16.6 12.95q-.45 1.15-1.412 1.913T13 15.9V19h4v2zm0-10.2V7H5v1q0 .95.55 1.713T7 10.8m10 0q.9-.325 1.45-1.088T19 8V7h-2z"/></svg>
                                    <h3 class="text-xl mt-4">QUÊTES</h3>
                                    <p class="text-xs mt-2">Accomplissez des missions. Gagnez des récompenses uniques.</p>
                                </div>
                            </div>

                            <div class="inline-block px-5 py-2 mt-12 border border-[#8C1B22] bg-[#1F0B0F]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M11 2v2.07A8 8 0 0 0 4.07 11H2v2h2.07A8 8 0 0 0 11 19.93V22h2v-2.07A8 8 0 0 0 19.93 13H22v-2h-2.07A8 8 0 0 0 13 4.07V2m-2 4.08V8h2V6.09c2.5.41 4.5 2.41 4.92 4.91H16v2h1.91c-.41 2.5-2.41 4.5-4.91 4.92V16h-2v1.91C8.5 17.5 6.5 15.5 6.08 13H8v-2H6.09C6.5 8.5 8.5 6.5 11 6.08M12 11a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1"/></svg>
                                    <span>Le Continent est impitoyable. Seuls les plus préparés survivent.</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cycle" class="relative min-h-screen flex items-center bg-neutral-950">
        <div class="absolute inset-0 img-filter"></div>
        <div class="bg-neutral-950 h-2 w-full top-0 z-20 absolute" style="box-shadow: 0px -20px 30px #8C1B22;"></div>
        <div class="relative w-full z-10">
            <!-- Center content -->
            <div class="mx-auto max-w-7xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#046A7D] bg-[#081B20]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#01B3CF" fill-rule="evenodd" d="M2 11.946C2 9.193 4.276 7 7.035 7a5.07 5.07 0 0 1 4.12 2.1L12 10.283l.846-1.181A5.06 5.06 0 0 1 16.965 7C19.725 7 22 9.193 22 11.946v.108C22 14.807 19.724 17 16.965 17a5.06 5.06 0 0 1-4.12-2.1L12 13.717l-.846 1.181A5.06 5.06 0 0 1 7.035 17C4.275 17 2 14.807 2 12.054zm8.77.054l-1.242-1.735A3.06 3.06 0 0 0 7.035 9C5.338 9 4 10.34 4 11.946v.108C4 13.66 5.338 15 7.035 15c1 0 1.93-.477 2.493-1.265zm2.46 0l1.242 1.735A3.06 3.06 0 0 0 16.965 15C18.662 15 20 13.66 20 12.054v-.108C20 10.34 18.662 9 16.965 9c-1 0-1.93.477-2.493 1.265z" clip-rule="evenodd"/></svg>
                                <span class="text-[#01B3CF]">BOUCLE INFINIE DE JEU TACTIQUE</span>
                            </div>
                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-3xl md:text-5xl font-black tracking-tight">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">LE</span>
                                <span class="text-[#01B3CF] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> CYCLE</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Un cycle continu de préparation, de déploiement, de survie et de progression
                                </div>
                                <div class="text-lg md:text-xl text-white/90">
                                    Chaque mission est une leçon. Chaque extraction vous rend plus fort.
                                </div>
                            </div>

                            <div class="lg:grid grid-cols-14 items-center gap-8 mt-8 text-left">
                                <div class="col-span-2 border border-[#064A58] bg-[#081B20]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#009BF3]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 32 32"><path fill="currentColor" d="m14 20.18l-3.59-3.59L9 18l5 5l9-9l-1.41-1.42z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2M12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">PRÉPARER</h3>
                                    <p class="mt-2 text-[#00C5BC]">ÉTAPE 1</p>
                                    <p class="text-xs mt-2">Choisissez votre équipement, planifiez votre stratégie, formez votre escouade</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#662D07] bg-[#22130A]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#FE4822]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="currentColor" d="M21.2 10.95L12 23L2.78 10.96l.09-.08c.21-.21.46-.38.71-.52l7.15 9.33L8.58 13l.66-1.19L12 20.38l2.73-8.58l.67 1.2l-2.13 6.69l7.14-9.34c.25.15.49.29.69.5zM5 9c1.5 0 2.81.86 3.5 2.1A3.97 3.97 0 0 1 12 9c1.5 0 2.8.85 3.5 2.09A3.93 3.93 0 0 1 19 9c1.09 0 2.09.42 2.81 1.14C20.94 5.5 16.88 2 12 2c-4.91 0-8.97 3.5-9.84 8.17C2.89 9.45 3.89 9 5 9"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">DÉPLOYER</h3>
                                    <p class="mt-2 text-[#FF8904]">ÉTAPE 2</p>
                                    <p class="text-xs mt-2">Pénétrez sur le continent hostile avec un compte à rebours de 30 minutes.</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#62161B] bg-[#210C0F]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#F83475]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10Z"/><path stroke-linecap="round" d="M2 12h3m14 0h3M12 22v-3m0-14V2"/><path stroke-linecap="round" stroke-linejoin="round" d="M10 12h4m-2 2v-4"/></g></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">SURVIVRE</h3>
                                    <p class="mt-2 text-[#DB6467]">ÉTAPE 3</p>
                                    <p class="text-xs mt-2">Accomplissez les objectifs, combattez les ennemis, collectez des ressources</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#452068] bg-[#190F24]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#8358FF]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 13V7Q6.5 7 4.75 8.75T3 13zm4 4V7h-2v8H3v2zm2-3.2l6-.6V12h-6zM13 22H3v-2h10zm2-3H3q-.825 0-1.412-.587T1 17v-4q0-3.35 2.325-5.675T9 5h6v5h5l1-2h2v7l-8 .8zm4-15H3V2h16zm-4 9.8V12zM13 17"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">EXTRAIRE</h3>
                                    <p class="mt-2 text-[#C27AFF]">ÉTAPE 4</p>
                                    <p class="text-xs mt-2">Retournez à la base avant la fin du temps imparti ou vous perdrez tout. Prudence</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#065025] bg-[#081C12]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#00C55D]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M17 6a1 1 0 1 0 0 2h1.586L14 12.586l-3.793-3.793a1 1 0 0 0-1.414 0l-6.5 6.5a1 1 0 1 0 1.414 1.414L9.5 10.914l3.793 3.793a1 1 0 0 0 1.414 0L20 9.414V11a1 1 0 1 0 2 0V7a1 1 0 0 0-1-1z"/></g></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">ÉVOLUER</h3>
                                    <p class="mt-2 text-[#05D044]">ÉTAPE 5</p>
                                    <p class="text-xs mt-2">Débloquez des améliorations, améliorez votre équipement, devenez plus fort</p>
                                </div>
                            </div>

                            <div class="inline-block px-5 py-2 mt-12 border border-[#046A7D] bg-[#081B20]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M6.876 15.124A6.002 6.002 0 0 0 17.658 14h2.09a8.003 8.003 0 0 1-14.316 2.568L3 19v-6h6zm10.249-6.249A6.004 6.004 0 0 0 6.34 10H4.25a8.005 8.005 0 0 1 14.32-2.57L21 5v6h-6z"/></svg>
                                    <span>Le cycle se répète. Chaque cycle vous rend plus fort.</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cycle" class="relative min-h-screen flex items-center bg-neutral-950">
        <div class="absolute inset-0 img-filter"></div>
        <div class="bg-neutral-950 h-2 w-full top-0 z-20 absolute" style="box-shadow: 0px -20px 30px #01B3CF;"></div>
        <div class="relative w-full z-10">
            <!-- Center content -->
            <div class="mx-auto max-w-7xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#046A7D] bg-[#081B20]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="#01B3CF" fill-rule="evenodd" d="M2 11.946C2 9.193 4.276 7 7.035 7a5.07 5.07 0 0 1 4.12 2.1L12 10.283l.846-1.181A5.06 5.06 0 0 1 16.965 7C19.725 7 22 9.193 22 11.946v.108C22 14.807 19.724 17 16.965 17a5.06 5.06 0 0 1-4.12-2.1L12 13.717l-.846 1.181A5.06 5.06 0 0 1 7.035 17C4.275 17 2 14.807 2 12.054zm8.77.054l-1.242-1.735A3.06 3.06 0 0 0 7.035 9C5.338 9 4 10.34 4 11.946v.108C4 13.66 5.338 15 7.035 15c1 0 1.93-.477 2.493-1.265zm2.46 0l1.242 1.735A3.06 3.06 0 0 0 16.965 15C18.662 15 20 13.66 20 12.054v-.108C20 10.34 18.662 9 16.965 9c-1 0-1.93.477-2.493 1.265z" clip-rule="evenodd"/></svg>
                                <span class="text-[#01B3CF]">BOUCLE INFINIE DE JEU TACTIQUE</span>
                            </div>
                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-3xl md:text-5xl font-black tracking-tight">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">LE</span>
                                <span class="text-[#01B3CF] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> CYCLE</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Un cycle continu de préparation, de déploiement, de survie et de progression
                                </div>
                                <div class="text-lg md:text-xl text-white/90">
                                    Chaque mission est une leçon. Chaque extraction vous rend plus fort.
                                </div>
                            </div>

                            <div class="lg:grid grid-cols-14 items-center gap-8 mt-8 text-left">
                                <div class="col-span-2 border border-[#064A58] bg-[#081B20]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#009BF3]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 32 32"><path fill="currentColor" d="m14 20.18l-3.59-3.59L9 18l5 5l9-9l-1.41-1.42z"/><path fill="currentColor" d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2M12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">PRÉPARER</h3>
                                    <p class="mt-2 text-[#00C5BC]">ÉTAPE 1</p>
                                    <p class="text-xs mt-2">Choisissez votre équipement, planifiez votre stratégie, formez votre escouade</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#662D07] bg-[#22130A]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#FE4822]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="currentColor" d="M21.2 10.95L12 23L2.78 10.96l.09-.08c.21-.21.46-.38.71-.52l7.15 9.33L8.58 13l.66-1.19L12 20.38l2.73-8.58l.67 1.2l-2.13 6.69l7.14-9.34c.25.15.49.29.69.5zM5 9c1.5 0 2.81.86 3.5 2.1A3.97 3.97 0 0 1 12 9c1.5 0 2.8.85 3.5 2.09A3.93 3.93 0 0 1 19 9c1.09 0 2.09.42 2.81 1.14C20.94 5.5 16.88 2 12 2c-4.91 0-8.97 3.5-9.84 8.17C2.89 9.45 3.89 9 5 9"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">DÉPLOYER</h3>
                                    <p class="mt-2 text-[#FF8904]">ÉTAPE 2</p>
                                    <p class="text-xs mt-2">Pénétrez sur le continent hostile avec un compte à rebours de 30 minutes.</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#62161B] bg-[#210C0F]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#F83475]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10Z"/><path stroke-linecap="round" d="M2 12h3m14 0h3M12 22v-3m0-14V2"/><path stroke-linecap="round" stroke-linejoin="round" d="M10 12h4m-2 2v-4"/></g></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">SURVIVRE</h3>
                                    <p class="mt-2 text-[#DB6467]">ÉTAPE 3</p>
                                    <p class="text-xs mt-2">Accomplissez les objectifs, combattez les ennemis, collectez des ressources</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#452068] bg-[#190F24]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#8358FF]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 13V7Q6.5 7 4.75 8.75T3 13zm4 4V7h-2v8H3v2zm2-3.2l6-.6V12h-6zM13 22H3v-2h10zm2-3H3q-.825 0-1.412-.587T1 17v-4q0-3.35 2.325-5.675T9 5h6v5h5l1-2h2v7l-8 .8zm4-15H3V2h16zm-4 9.8V12zM13 17"/></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">EXTRAIRE</h3>
                                    <p class="mt-2 text-[#C27AFF]">ÉTAPE 4</p>
                                    <p class="text-xs mt-2">Retournez à la base avant la fin du temps imparti ou vous perdrez tout. Prudence</p>
                                </div>
                                <div class="hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4em" height="4em" viewBox="0 0 24 24"><path fill="#4A5565" d="M14 16.94v-4H5.08l-.03-2.01H14V6.94l5 5Z"/></svg>
                                </div>
                                <div class="col-span-2 border border-[#065025] bg-[#081C12]/90 px-4 py-6 h-full">
                                    <div class="flex items-center justify-center h-16 w-16 bg-[#00C55D]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><g fill="none"><path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M17 6a1 1 0 1 0 0 2h1.586L14 12.586l-3.793-3.793a1 1 0 0 0-1.414 0l-6.5 6.5a1 1 0 1 0 1.414 1.414L9.5 10.914l3.793 3.793a1 1 0 0 0 1.414 0L20 9.414V11a1 1 0 1 0 2 0V7a1 1 0 0 0-1-1z"/></g></svg>
                                    </div>
                                    <h3 class="text-xl mt-4">ÉVOLUER</h3>
                                    <p class="mt-2 text-[#05D044]">ÉTAPE 5</p>
                                    <p class="text-xs mt-2">Débloquez des améliorations, améliorez votre équipement, devenez plus fort</p>
                                </div>
                            </div>

                            <div class="inline-block px-5 py-2 mt-12 border border-[#046A7D] bg-[#081B20]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                                <div class="flex items-center gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M6.876 15.124A6.002 6.002 0 0 0 17.658 14h2.09a8.003 8.003 0 0 1-14.316 2.568L3 19v-6h6zm10.249-6.249A6.004 6.004 0 0 0 6.34 10H4.25a8.005 8.005 0 0 1 14.32-2.57L21 5v6h-6z"/></svg>
                                    <span>Le cycle se répète. Chaque cycle vous rend plus fort.</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>