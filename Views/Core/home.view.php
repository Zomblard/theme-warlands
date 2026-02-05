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
        background-position:center;
      "
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
                <div class="min-h-[70vh] flex pt-24 justify-center text-center">
                    <div class="w-full">
                        <!-- Badge -->
                        <div class="inline-block px-5 py-2 border border-[#923B04] bg-[#1F0F07]/90
                          text-xs md:text-sm tracking-[0.25em] text-white/90
                          shadow-[0_0_24px_rgba(149,63,3,.22)]">
                            TACTICAL SURVIVAL • PvPvE • MINECRAFT EVOLVED
                        </div>

                        <!-- Title / logo -->
                        <div class="mt-8">
                            <div class="text-5xl md:text-7xl font-black tracking-tight">
                                <span class="text-white drop-shadow-[0_0_22px_rgba(255,255,255,.08)]">War</span>
                                <span class="text-[#FF6900] drop-shadow-[0_0_22px_rgba(255,105,0,.35)]"> Lands</span>
                            </div>

                            <div class="mt-6 space-y-2">
                                <div class="text-lg md:text-xl text-white/90">
                                    Prepare in safety. Deploy into chaos. Extract with glory.
                                </div>
                                <div class="text-lg md:text-xl text-[#FF6900] font-semibold">
                                    This is not just Minecraft. This is war.
                                </div>
                            </div>

                            <!-- CTA -->
                            <div class="mt-8 flex items-center justify-center gap-4">
                                <a href="#deploy"
                                   class="h-12 px-6 bg-[#FF6900] text-black font-bold tracking-wide
                            transition duration-300 hover:shadow-[0_0_22px_rgba(255,105,0,.55)]
                            hover:translate-y-[-1px]">
                                    Deploy Now
                                </a>
                                <a href="#store"
                                   class="h-12 px-6 bg-transparent text-white font-semibold tracking-wide
                            border border-white/25 transition duration-300
                            hover:border-white/45 hover:bg-white/5
                            hover:shadow-[0_0_18px_rgba(255,105,0,.20)]">
                                    Store
                                </a>
                            </div>

                            <div class="mt-5 text-sm text-white/70 font-mono">
                                IP: <span class="text-white/90">wlmc.fr</span> • VERSION: <span class="text-white/90">1.20.1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll hint -->
            <div class="absolute bottom-8 left-0 right-0 flex justify-center">
                <a href="#base" class="text-[#FF6900] font-mono tracking-widest bounce-soft hover:opacity-90 transition">
                    <i class="fa-solid fa-angles-down fa-xl"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Dummy sections -->
    <section id="base" class="min-h-screen bg-black"></section>
    <section id="continent" class="min-h-screen bg-neutral-950"></section>
    <section id="wiki" class="min-h-screen bg-black"></section>
    <section id="gameplay" class="min-h-screen bg-neutral-950"></section>
</main>