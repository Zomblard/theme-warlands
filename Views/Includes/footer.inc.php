<?php

use CMW\Utils\Website;

?>
</body>

<footer class="mt-auto z-50 bg-gray-300 py-2 text-center">
    <p>Copyright © <?= date('Y') ?> - Par <a href="https://craftmywebsite.fr" class="text-blue-600 hover:text-blue-500" target="_blank">CraftMyWebsite</a> pour <?= Website::getWebsiteName() ?></p>
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