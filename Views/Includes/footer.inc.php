<?php

use CMW\Utils\Website;

?>
</body>

<footer class="mt-auto mx-auto z-50 max-w-7xl w-full py-8 text-center">
    <div class="flex justify-between">
        <div class="text-left">
            <p>Copyright © <?= date('Y') ?> WarLands. Tous droits réservés.</p>
            <p>Nous ne sommes pas affiliés à Mojang AB.</p>
        </div>
        <div class="flex gap-8">
            <a href="" target="_blank">Discord</a>
            <a href="" target="_blank">Règles</a>
            <a href="" target="_blank">Wiki</a>
            <a href="" target="_blank">Support</a>
        </div>
    </div>
</footer>
</html>

<script>
    const header = document.getElementById("siteHeader");
    const onScroll = () => {
        const y = window.scrollY || 0;
        const t = Math.min(y / 180, 1); // speed of opacity ramp
        // Transparent at top -> more opaque when scrolling
        header.style.backgroundColor = `rgba(0,0,0,${0.05 + 0.75 * t})`;
        header.style.backdropFilter = t > 0.1 ? "blur(10px)" : "none";
        header.style.boxShadow = t > 0.25 ? "0 0 30px rgba(255,105,0,.08)" : "none";
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
</script>