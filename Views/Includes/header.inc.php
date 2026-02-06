<?php

use CMW\Controller\Core\PackageController;
use CMW\Controller\Users\UsersController;
use CMW\Controller\Users\UsersSessionsController;
use CMW\Manager\Env\EnvManager;
use CMW\Model\Core\MenusModel;
use CMW\Model\Shop\Cart\ShopCartItemModel;
use CMW\Utils\Website;

if (PackageController::isInstalled('Shop')) {
    $itemInCart = ShopCartItemModel::getInstance()->countItemsByUserId(UsersSessionsController::getInstance()->getCurrentUser()?->getId(), session_id());
}

$menus = MenusModel::getInstance();
?>
<header id="siteHeader"
        class="fixed top-0 left-0 right-0 z-50 transition-[background-color,backdrop-filter,box-shadow] duration-300">
    <div class="mx-auto max-w-7xl px-6">
        <div class="h-20 flex items-center justify-between gap-6">
            <!-- 1) Logo + text (2 lines) -->
            <a href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>" class="flex items-center gap-4 group">
                <img class="h-10 w-10" src="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/Warlands/Assets/Img/logo.png" alt="logo">
                <div class="leading-tight">
                    <div class="font-extrabold tracking-wide">WarLands</div>
                    <div class="text-sm text-white/70 group-hover:text-white/90 transition">wlmc.fr</div>
                </div>
            </a>

            <!-- 2) Menu center -->
            <nav class="hidden md:flex items-center gap-8 text-sm tracking-[0.25em]">
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>play"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4 2h16a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2m2 4v4h4v2H8v6h2v-2h4v2h2v-6h-2v-2h4V6h-4v4h-4V6z"/></svg>JOUER</a>
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>vote"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m18 13l3 3v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4l3-3h.83l2 2H6.78L5 17h14l-1.77-2h-1.91l2-2zm1 7v-1H5v1zm-7.66-5l-4.95-4.93a.996.996 0 0 1 0-1.41l6.37-6.37a.975.975 0 0 1 1.4.01l4.95 4.95c.39.39.39 1.02 0 1.41L12.75 15a.96.96 0 0 1-1.41 0m2.12-10.59L8.5 9.36l3.55 3.54L17 7.95z"/></svg> VOTER</a>
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>wiki"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M21.33 12.91c.09 1.55-.62 3.04-1.89 3.95l.77 1.49c.23.45.26.98.06 1.45c-.19.47-.58.84-1.06 1l-.79.25a1.69 1.69 0 0 1-1.86-.55L14.44 18c-.89-.15-1.73-.53-2.44-1.1c-.5.15-1 .23-1.5.23c-.88 0-1.76-.27-2.5-.79c-.53.16-1.07.23-1.62.22c-.79.01-1.57-.15-2.3-.45a4.1 4.1 0 0 1-2.43-3.61c-.08-.72.04-1.45.35-2.11c-.29-.75-.32-1.57-.07-2.33C2.3 7.11 3 6.32 3.87 5.82c.58-1.69 2.21-2.82 4-2.7c1.6-1.5 4.05-1.66 5.83-.37c.42-.11.86-.17 1.3-.17c1.36-.03 2.65.57 3.5 1.64c2.04.53 3.5 2.35 3.58 4.47c.05 1.11-.25 2.2-.86 3.13c.07.36.11.72.11 1.09m-5-1.41c.57.07 1.02.5 1.02 1.07a1 1 0 0 1-1 1h-.63c-.32.9-.88 1.69-1.62 2.29c.25.09.51.14.77.21c5.13-.07 4.53-3.2 4.53-3.25a2.59 2.59 0 0 0-2.69-2.49a1 1 0 0 1-1-1a1 1 0 0 1 1-1c1.23.03 2.41.49 3.33 1.3c.05-.29.08-.59.08-.89c-.06-1.24-.62-2.32-2.87-2.53c-1.25-2.96-4.4-1.32-4.4-.4c-.03.23.21.72.25.75a1 1 0 0 1 1 1c0 .55-.45 1-1 1c-.53-.02-1.03-.22-1.43-.56c-.48.31-1.03.5-1.6.56c-.57.05-1.04-.35-1.07-.9a.97.97 0 0 1 .88-1.1c.16-.02.94-.14.94-.77c0-.66.25-1.29.68-1.79c-.92-.25-1.91.08-2.91 1.29C6.75 5 6 5.25 5.45 7.2C4.5 7.67 4 8 3.78 9c1.08-.22 2.19-.13 3.22.25c.5.19.78.75.59 1.29c-.19.52-.77.78-1.29.59c-.73-.32-1.55-.34-2.3-.06c-.32.27-.32.83-.32 1.27c0 .74.37 1.43 1 1.83c.53.27 1.12.41 1.71.4q-.225-.39-.39-.81a1.038 1.038 0 0 1 1.96-.68c.4 1.14 1.42 1.92 2.62 2.05c1.37-.07 2.59-.88 3.19-2.13c.23-1.38 1.34-1.5 2.56-1.5m2 7.47l-.62-1.3l-.71.16l1 1.25zm-4.65-8.61a1 1 0 0 0-.91-1.03c-.71-.04-1.4.2-1.93.67c-.57.58-.87 1.38-.84 2.19a1 1 0 0 0 1 1c.57 0 1-.45 1-1c0-.27.07-.54.23-.76c.12-.1.27-.15.43-.15c.55.03 1.02-.38 1.02-.92"/></svg>WIKI</a>
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>map"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="m15 19.923l-6-2.1l-5 1.94V5.782l5-1.704l6 2.1l5-1.94v14.04zm-.5-1.22v-11.7l-5-1.745v11.7zm1 0L19 17.55V5.7l-3.5 1.304zM5 18.3l3.5-1.342v-11.7L5 6.45zM15.5 7.004v11.7zm-7-1.746v11.7z"/></svg>MAP</a>
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>news"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M16 3a2 2 0 0 1 1.995 1.85L18 5v5h1.5a1.5 1.5 0 0 1 1.493 1.356L21 11.5V19a3 3 0 0 1-2.824 2.995L18 22H5a2 2 0 0 1-1.995-1.85L3 20V5a2 2 0 0 1 1.85-1.995L5 3zm3 9h-1v8a1 1 0 0 0 1-1zm-3-7H5v15h11zm-5 8a1 1 0 0 1 .117 1.993L11 15H8a1 1 0 0 1-.117-1.993L8 13zm2-5a1 1 0 1 1 0 2H8a1 1 0 0 1 0-2z"/></g></svg>NEWS</a>
                <a class="flex items-center gap-1 text-white/80 hover:text-white transition hover:drop-shadow-[0_0_10px_rgba(255,105,0,.35)]" href="<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>shop"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M1.5 8.75v2.5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2.5m-4 0v4.489M1.5 10h7M3.534 6.66c.755 0 1.425-.362 1.846-.922a2.305 2.305 0 0 0 3.692 0a2.308 2.308 0 0 0 4.154-1.385c0-.616-.461-2.53-2.308-3.27c-2.864-.442-4.48-.446-7.384 0c-1.846.74-2.308 2.654-2.308 3.27A2.31 2.31 0 0 0 3.534 6.66"/></svg>BOUTIQUE</a>
            </nav>

            <!-- 3) User button -->
            <div class="flex items-center gap-3">
                <?php if (UsersController::isUserLogged()): ?>
                    <div class="relative group inline-block">
                        <button
                            class="h-11 px-3 bg-white/0 text-white border border-white/20 transition duration-300
               hover:border-white/40 hover:bg-white/5 hover:shadow-[0_0_18px_rgba(255,105,0,.18)]">
        <span class="flex items-center gap-2">
            <img alt="head" loading="lazy" width="28"
                 src="https://apiv2.craftmywebsite.fr/skins/3d/user=<?= UsersSessionsController::getInstance()->getCurrentUser()->getPseudo() ?>&headOnly=true">
            <?= UsersSessionsController::getInstance()->getCurrentUser()->getPseudo() ?>
        </span>
                        </button>

                        <!-- Dropdown -->
                        <div
                            class="absolute top-9 -right-5 mt-2 w-44 rounded-lg border border-white/20 bg-black/80 backdrop-blur
               opacity-0 invisible
               transition-all duration-200 delay-400
               group-hover:opacity-100 group-hover:visible group-hover:delay-0
               shadow-lg">
                            <?php if (UsersController::isAdminLogged()): ?>
                                <a href="/cmw-admin" target="_blank" class="flex items-center gap-2 px-4 py-2 text-sm text-white hover:bg-white/10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12h7c-.53 4.11-3.28 7.78-7 8.92zH5V6.3l7-3.11M12 1L3 5v6c0 5.55 3.84 10.73 9 12c5.16-1.27 9-6.45 9-12V5z"/></svg> Administration
                                </a>
                            <?php endif; ?>
                            <a href="/profile" class="flex items-center gap-2 px-4 py-2 text-sm text-white hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M19.9 12.66a1 1 0 0 1 0-1.32l1.28-1.44a1 1 0 0 0 .12-1.17l-2-3.46a1 1 0 0 0-1.07-.48l-1.88.38a1 1 0 0 1-1.15-.66l-.61-1.83a1 1 0 0 0-.95-.68h-4a1 1 0 0 0-1 .68l-.56 1.83a1 1 0 0 1-1.15.66L5 4.79a1 1 0 0 0-1 .48L2 8.73a1 1 0 0 0 .1 1.17l1.27 1.44a1 1 0 0 1 0 1.32L2.1 14.1a1 1 0 0 0-.1 1.17l2 3.46a1 1 0 0 0 1.07.48l1.88-.38a1 1 0 0 1 1.15.66l.61 1.83a1 1 0 0 0 1 .68h4a1 1 0 0 0 .95-.68l.61-1.83a1 1 0 0 1 1.15-.66l1.88.38a1 1 0 0 0 1.07-.48l2-3.46a1 1 0 0 0-.12-1.17ZM18.41 14l.8.9l-1.28 2.22l-1.18-.24a3 3 0 0 0-3.45 2L12.92 20h-2.56L10 18.86a3 3 0 0 0-3.45-2l-1.18.24l-1.3-2.21l.8-.9a3 3 0 0 0 0-4l-.8-.9l1.28-2.2l1.18.24a3 3 0 0 0 3.45-2L10.36 4h2.56l.38 1.14a3 3 0 0 0 3.45 2l1.18-.24l1.28 2.22l-.8.9a3 3 0 0 0 0 3.98m-6.77-6a4 4 0 1 0 4 4a4 4 0 0 0-4-4m0 6a2 2 0 1 1 2-2a2 2 0 0 1-2 2"/></svg> Paramètres
                            </a>
                            <a href="/shop/history" class="flex items-center gap-2 px-4 py-2 text-sm text-white hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-width="2"><rect width="14" height="17" x="5" y="4" rx="2"/><path stroke-linecap="round" d="M9 9h6m-6 4h6m-6 4h4"/></g></svg> Commandes
                            </a>
                            <a href="/minecraft/history" class="flex items-center gap-2 px-4 py-2 text-sm text-white hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 12 12"><path fill="currentColor" d="M2.25 1C1.56 1 1 1.56 1 2.25v1.162a1.5 1.5 0 0 0 .772 1.31l2.876 1.599a3 3 0 1 0 2.704 0l2.877-1.598A1.5 1.5 0 0 0 11 3.412V2.25C11 1.56 10.44 1 9.75 1zM2 2.25A.25.25 0 0 1 2.25 2H4v2.817l-1.743-.968A.5.5 0 0 1 2 3.412zm3 3.122V2h2v3.372l-1 .556zm3-.555V2h1.75a.25.25 0 0 1 .25.25v1.162a.5.5 0 0 1-.257.437zM8 9a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/></svg> Récompenses
                            </a>
                            <hr>
                            <a href="/logout" class="flex items-center gap-2 px-4 py-2 text-sm text-red-500 hover:bg-white/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h7v2H5v14h7v2zm11-4l-1.375-1.45l2.55-2.55H9v-2h8.175l-2.55-2.55L16 7l5 5z"/></svg> Déconnexion
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <button
                        class="h-11 px-3 bg-white/0 text-white border border-white/20 transition duration-300 hover:border-white/40 hover:bg-white/5 hover:shadow-[0_0_18px_rgba(255,105,0,.18)]">
                        Connexion
                    </button>
                <?php endif; ?>
                <?php if (PackageController::isInstalled('Shop')): ?>
                    <div>
                        <a href="<?= Website::getProtocol() ?>://<?= $_SERVER['SERVER_NAME'] ?><?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>shop/cart" class="inline-flex relative items-center p-3 text-sm font-medium text-center text-black hover:text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24"><path fill="white" d="M17 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2M1 2v2h2l3.6 7.59l-1.36 2.45c-.15.28-.24.61-.24.96a2 2 0 0 0 2 2h12v-2H7.42a.25.25 0 0 1-.25-.25q0-.075.03-.12L8.1 13h7.45c.75 0 1.41-.42 1.75-1.03l3.58-6.47c.07-.16.12-.33.12-.5a1 1 0 0 0-1-1H5.21l-.94-2M7 18c-1.11 0-2 .89-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2"/></svg>
                            <span class="sr-only">Articles</span>
                            <div class="inline-flex  absolute top-0 right-0 justify-center items-center font-bold w-5 h-5 bg-[#FF6900] text-white rounded-full border-1 border-gray-900"><?= $itemInCart ?></div>
                        </a>
                    </div>
                <?php endif; ?>
                <a href="" target="_blank" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.8em" height="1.8em" viewBox="0 0 24 24"><path fill="#7289DA" d="M19.27 5.33C17.94 4.71 16.5 4.26 15 4a.1.1 0 0 0-.07.03c-.18.33-.39.76-.53 1.09a16.1 16.1 0 0 0-4.8 0c-.14-.34-.35-.76-.54-1.09c-.01-.02-.04-.03-.07-.03c-1.5.26-2.93.71-4.27 1.33c-.01 0-.02.01-.03.02c-2.72 4.07-3.47 8.03-3.1 11.95c0 .02.01.04.03.05c1.8 1.32 3.53 2.12 5.24 2.65c.03.01.06 0 .07-.02c.4-.55.76-1.13 1.07-1.74c.02-.04 0-.08-.04-.09c-.57-.22-1.11-.48-1.64-.78c-.04-.02-.04-.08-.01-.11c.11-.08.22-.17.33-.25c.02-.02.05-.02.07-.01c3.44 1.57 7.15 1.57 10.55 0c.02-.01.05-.01.07.01c.11.09.22.17.33.26c.04.03.04.09-.01.11c-.52.31-1.07.56-1.64.78c-.04.01-.05.06-.04.09c.32.61.68 1.19 1.07 1.74c.03.01.06.02.09.01c1.72-.53 3.45-1.33 5.25-2.65c.02-.01.03-.03.03-.05c.44-4.53-.73-8.46-3.1-11.95c-.01-.01-.02-.02-.04-.02M8.52 14.91c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.84 2.12-1.89 2.12m6.97 0c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.83 2.12-1.89 2.12"/></svg>
                </a>
            </div>
        </div>
    </div>
</header>

