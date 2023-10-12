</main>
<footer>
    <div class="logo">
        <a href="./">
            <img src="./app/img/nav_logo.png" alt="Halles Of Games">
        </a>
    </div>
    <div class="footer-items">
        <a href="https://www.facebook.com/hallesofgames">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/hallesofgames/">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://www.tiktok.com/@hallesofgames">
            <i class="fa-brands fa-tiktok"></i>
        </a>
    </div>
    <div class="footer-items">
        <a href="#">
            À propos
        </a>
        <a href="#">
            Mentions Légales
        </a>
        <a href="#">
            Conditions Générales d'Utilisation
        </a>
    </div>
    <button id="back-to-top-btn">⬆️</button>
</footer>
</body>
<script src="./app/js/main.js?v=<?= time(); ?>"></script>
<?= $page_title == '' ? '<script src="./app/js/index.js?v=' . time() . '"></script>' : ''; ?>
<?= $page_title == 'Programme' ? '<script src="./app/js/program.js?v=' . time() . '"></script>' : ''; ?>

</html>