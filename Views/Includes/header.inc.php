<?php

use CMW\Controller\Users\UsersController;
use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\MenusModel;
use CMW\Utils\Website;

$menus = MenusModel::getInstance();
?>
<header id="siteHeader"
        class="fixed top-0 left-0 right-0 z-50 transition-[background-color,backdrop-filter,box-shadow] duration-300">
    <div class="mx-auto max-w-7xl px-6">
        <div class="h-20 flex items-center justify-between gap-6">
            <!-- 1) Logo + text (2 lines) -->
            <a href="#" class="flex items-center gap-4 group">
                <div class="h-10 w-10 bg-[#FF6900]/90 grid place-items-center text-black font-black tracking-widest
                      transition duration-300 group-hover:bg-[#FF6900] group-hover:shadow-[0_0_18px_rgba(255,105,0,.55)]">
                    WL
                </div>
                <div class="leading-tight">
                    <div class="font-extrabold tracking-wide">WarLands</div>
                    <div class="text-sm text-white/70 group-hover:text-white/90 transition">wlmc.fr</div>
                </div>
            </a>

            <!-- 2) Menu center -->
            <nav class="hidden md:flex items-center gap-8 text-sm tracking-[0.25em]">
                <a class="text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="#base">BASE</a>
                <a class="text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="#continent">CONTINENT</a>
                <a class="text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="#wiki">WIKI</a>
                <a class="text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="#gameplay">GAMEPLAY</a>
            </nav>

            <!-- 3) User button -->
            <div class="flex items-center gap-3">
                <button
                    class="h-11 px-5 bg-white/0 text-white border border-white/20
                   transition duration-300 hover:border-white/40 hover:bg-white/5
                   hover:shadow-[0_0_18px_rgba(255,105,0,.18)]"
                >
                    Connexion
                </button>
            </div>
        </div>
    </div>
</header>

