<?php include 'navbar.php'; ?>

<style>
    .hero {
        background-image: url('images/IMG_Tavola disegno 1.png');
        background-size: cover;
        background-position: center;
        /* navbar height is 160px (80px top-bar + 80px main-nav) */
        height: 100%;
        width: 100%;
        display: flex;
        padding-bottom: 90px;
        align-items: center;
        color: white;
    }

    .hero .container {
        padding: 0 18.4%;
        width: 100%;
        margin-top: 130px;
    }

    .hero-content {
        max-width: 550px;
        padding-bottom: 60px;
    }

    .hero-content h1 {
        font-family: 'Exo', sans-serif;
        font-size: 58px;
        font-weight: 600; /* SemiBold */
        margin-bottom: 60px;
        line-height: 1.1;
    }

    .hero-content .subtitle {
        font-family: 'Exo', sans-serif;
        font-size: 19px;
        font-weight: 500; /* SemiBold */
        margin-bottom: 60px;
    }

    .hero-content .description {
        font-family: 'Exo', sans-serif;
        font-size: 14px;
        font-weight: 300; /* Light */
        line-height: 1.7;
        margin-bottom: 60px;
    }

    .hero-content .cta-link {
        font-family: 'Exo', sans-serif;
        color: white;
        text-decoration: underline;
        font-weight: 400; /* Regular */
        font-size: 14px;
    }

    .mobile-break {
        display: none;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .hero .container {
            padding: 0 10%;
        }
    }

    @media (max-width: 992px) {
        .hero .container {
            padding: 0 10%;
        }
        .hero-content h1 {
            font-size: 40px;
        }
        .hero-content .subtitle {
            font-size: 16px;
            margin-bottom: 80px;
        }
        .hero-content .description {
            font-size: 13px;
            margin-bottom: 60px;
        }
        .hero-content .cta-link {
            font-size: 13px;
        }
    }

    @media (max-width: 768px) {
        .hero {
            height: auto;
            padding-top: 20px;
            padding-bottom: 50px;
            background-size: cover;
            background-position: 72% ; /* Shifting image to the left and down */
        }
        .mobile-break {
            display: block;
        }
        .hero-content h1 {
            font-size: 35px;
        }
        .hero-content .subtitle {
            font-size: 15px;
            margin-bottom: 60px;
        }
        .hero .container {
            margin-top: 60px;
        }
    }
</style>

<main>
    <div class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Ai etica e<br class="mobile-break"> legale</h1>
                <p class="subtitle">Responsabilità, trasparenza e<br class="mobile-break"> conformità nell'uso<br class="mobile-break"> dell'intelligenza artificiale.</p>
                <p class="description">Il consorzio RAISE si impegna a<br class="mobile-break"> promuovere l'uso responsabile dell'IA,<br class="mobile-break"> garantendo un equilibrio tra<br class="mobile-break"> innovazione tecnologica e rispetto dei<br class="mobile-break"> diritti fondamentali. Scopri come le<br class="mobile-break"> nostre risorse pratiche possono<br class="mobile-break"> supportare la tua azienda nella<br class="mobile-break"> navigazione delle normative e dei<br class="mobile-break"> principi etici.</p>
                <a href="#" class="cta-link">Scopri di più</a>
            </div>
        </div>
    </div>
</main>

</body>
</html>








