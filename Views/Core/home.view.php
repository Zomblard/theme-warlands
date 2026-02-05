<?php

use CMW\Controller\Users\UsersSessionsController;
use CMW\Utils\Website;

Website::setTitle('Accueil');
Website::setDescription("page d'accueil de CraftMyWebsite");
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
                            <div class="text-5xl md:text-9xl font-black tracking-tight font-alata">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M7 5h16v4h-1v1h-6a1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H9.62c-.38 0-.73.22-.9.56l-2.45 4.89c-.17.34-.51.55-.89.55H2s-3 0 1-6c0 0 3-4-1-4V5h1l.5-1h3zm7 7v-1a1 1 0 0 0-1-1h-1s-1 1 0 2a2 2 0 0 1-2-2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1"/></svg>
                                    Déploiement
                                </a>
                                <a href="#store"
                                   class="flex gap-2 items-center h-12 px-6 bg-transparent text-white font-semibold tracking-wide
                            border border-white/25 transition duration-300
                            hover:border-white/45 hover:bg-white/5
                            hover:shadow-[0_0_18px_rgba(255,105,0,.20)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.5 8.75v2.5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2.5m-4 0v4.489M1.5 10h7M3.534 6.66c.755 0 1.425-.362 1.846-.922a2.305 2.305 0 0 0 3.692 0a2.308 2.308 0 0 0 4.154-1.385c0-.616-.461-2.53-2.308-3.27c-2.864-.442-4.48-.446-7.384 0c-1.846.74-2.308 2.654-2.308 3.27A2.31 2.31 0 0 0 3.534 6.66"/></svg>
                                    Boutique
                                </a>
                            </div>

                            <div class="mt-5 text-sm text-white/70 font-mono">
                                IP: <span class="text-white/90">wlmc.fr</span> • VERSION: <span class="text-white/90">1.21.x</span>
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
        <div class="bg-neutral-950 h-4 w-full top-0 z-20 absolute" style="box-shadow: 0px -20px 30px #FF6900;"></div>
        <div class="relative w-full z-10">
            <!-- Center content -->
            <div class="mx-auto max-w-5xl px-6">
                <div class="min-h-[70vh] flex pt-8 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#03712F] bg-[#05190D]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            <div class="flex items-center gap-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 20.962q-3.014-.895-5.007-3.651T5 11.1V5.692l7-2.615l7 2.615V11.1q0 3.454-1.993 6.21T12 20.963m0-1.062q2.6-.825 4.3-3.3t1.7-5.5V6.375l-6-2.23l-6 2.23V11.1q0 3.025 1.7 5.5t4.3 3.3m0-7.88"/></svg>
                                <span>ZONE SÉCURISER</span>
                            </div>

                        </div>

                        <!-- Title / logo -->
                        <div class="mt-12">
                            <div class="text-3xl md:text-5xl font-black tracking-tight font-alata">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">LA</span>
                                <span class="text-[#05DF72] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> BASE</span>
                            </div>

                            <div class="mt-8 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Votre sanctuaire. Un lieu où le JcJ est interdit et où se forge la stratégie.
                                </div>
                                <div class="text-lg md:text-xl text-white/90">
                                    Gérez votre inventaire, progressez et préparez-vous au monde hostile qui vous attend.
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="mt-12 flex items-center justify-center gap-4">
                                <a href="#deploy"
                                   class="flex gap-2 items-center h-12 px-6 bg-[#FF6900] text-black font-bold tracking-wide
                            transition duration-300 hover:shadow-[0_0_22px_rgba(255,105,0,.55)]
                            hover:translate-y-[-1px]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M7 5h16v4h-1v1h-6a1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H9.62c-.38 0-.73.22-.9.56l-2.45 4.89c-.17.34-.51.55-.89.55H2s-3 0 1-6c0 0 3-4-1-4V5h1l.5-1h3zm7 7v-1a1 1 0 0 0-1-1h-1s-1 1 0 2a2 2 0 0 1-2-2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1"/></svg>
                                    Déploiement
                                </a>
                                <a href="#store"
                                   class="flex gap-2 items-center h-12 px-6 bg-transparent text-white font-semibold tracking-wide
                            border border-white/25 transition duration-300
                            hover:border-white/45 hover:bg-white/5
                            hover:shadow-[0_0_18px_rgba(255,105,0,.20)]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.5 8.75v2.5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2.5m-4 0v4.489M1.5 10h7M3.534 6.66c.755 0 1.425-.362 1.846-.922a2.305 2.305 0 0 0 3.692 0a2.308 2.308 0 0 0 4.154-1.385c0-.616-.461-2.53-2.308-3.27c-2.864-.442-4.48-.446-7.384 0c-1.846.74-2.308 2.654-2.308 3.27A2.31 2.31 0 0 0 3.534 6.66"/></svg>
                                    Boutique
                                </a>
                            </div>

                            <div class="mt-5 text-sm text-white/70 font-mono">
                                IP: <span class="text-white/90">wlmc.fr</span> • VERSION: <span class="text-white/90">1.21.x</span>
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
    <section id="continent" class="min-h-screen bg-neutral-950"></section>
    <section id="wiki" class="min-h-screen bg-black"></section>
    <section id="gameplay" class="min-h-screen bg-neutral-950"></section>
</main>