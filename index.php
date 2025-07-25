<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bioarc Cannabis Genetics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @font-face {
        font-family: 'Helvetica Neue';
        src: url('fonts/HelveticaNeueBold.otf') format('opentype');
        font-weight: bold;
        font-style: normal;
    }
    @font-face {
        font-family: 'Helvetica Neue';
        src: url('fonts/HelveticaNeueLight.otf') format('opentype');
        font-weight: 300;
        font-style: normal;
    }
    html, body {
        height: 100%;
        margin: 0;
        font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif;
    }
    body {
        height: 100vh;
        width: 100vw;
        overflow: hidden;
    }
    .bg {
        background-image: url('background.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100vw;
        position: relative;
    }
    .bg::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: rgba(0,0,0,0.18); /* lighter overlay for closer match */
        z-index: 1;
    }
    .content {
        position: absolute;
        top: 28%;
        left: 10%;
        color: #fff;
        max-width: 100%;
        z-index: 2;
    }
    .content h1 {
        font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 4.9em;
        line-height: 1.1;
        letter-spacing: 1px;
        margin-bottom: 0.6em;
        margin-top: 0;
        text-shadow: 0 2px 8px rgba(0,0,0,0.18);
    }
    .content p, .content .info {
        font-family: 'Helvetica Neue', Arial, Helvetica, sans-serif;
        font-weight: 300;
        font-size: 1.4em;
        line-height: 1.7;
        margin: 0.3em 5;
    }
    .content .info {
        font-weight: 5;
        font-size: 1em;
        margin-top: 1em;
    }
    .content a {
        color: #fff;
        text-decoration: underline;
    }
    .content a:hover {
        text-decoration: underline;
    }
    .logo {
        position: absolute;
        top: 38px;
        left: 95px;
        bottom: auto;
        right: auto;
        z-index: 2;
        display: flex;
        align-items: center;
    }
    .logo img {
        height: 90px;
        margin: 0;
    }
    @media (max-width: 900px) {
        .content, .logo {
            max-width: 100%;
            left: 5%;
        }
        .content h1 {
            font-size: 2em;
        }
    }
    @media (max-width: 1024px) {
        .content {
            left: 13%;
        }
        .logo {
            left: 5%;
        }
    }
    /* iPhone 14 Pro Max */
    @media (max-width: 430px) {
        .logo {
            left: 18px;
        }
    }

    /* iPad Mini & iPad Air (portrait) */
    @media (min-width: 431px) and (max-width: 1023px) {
        .logo {
            left: 32px;
        }
    }

    /* iPad Pro 12.9" (portrait, 1024px wide) */
    @media (min-width: 1024px) and (max-width: 1100px) {
        .logo {
            left: 44px; /* Adjust as needed for perfect alignment */
        }
    }
    /* iPhone SE (375 x 667) */
    @media (max-width: 375px) {
        .logo { left: 10px; }
        .content { left: 10px; max-width: 95%; }
        .content h1 { font-size: 1.1em; }
        .logo img { height: 38px; }
    }

    /* iPhone 12 Pro (390 x 844) */
    @media (min-width: 376px) and (max-width: 389px) {
        .logo { left: 12px; }
        .content { left: 12px; max-width: 95%; }
        .content h1 { font-size: 1.2em; }
        .logo img { height: 40px; }
    }

    /* iPhone XR (414 x 896) */
    @media (min-width: 390px) and (max-width: 414px) {
        .logo { left: 14px; }
        .content { left: 14px; max-width: 95%; }
        .content h1 { font-size: 1.3em; }
        .logo img { height: 44px; }
    }

    /* iPhone 14 Pro Max (center content) */
    @media (min-width: 415px) and (max-width: 430px) {
        .logo { left: 18px; }
        .content {
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            max-width: 95%;
            text-align: center;
        }
        .content h1 { font-size: 1.4em; }
        .logo img { height: 48px; }
    }
    </style>
</head>
<body>
    <div class="bg">
        <div class="content">
            <h1>Building great<br>
            Cannabis Brands starts<br>
            with great Genetics</h1>
            <p>A unique suite of Proprietary<br>Cannabis Strains<br>
            Development of IP – New Strains – California Breeding<br>
            Agronomics Applied – Cultivation Rollout Western Australia</p>
            <p class="info">
                Bioarc Australia Pty. Ltd.<br>
                For more information: <a href="mailto:info@bioarc.global" class="email-link">info@bioarc.global</a>
            </p>
        </div>
        <div class="logo">
            <img src="logo.png" alt="bioarc logo" />
        </div>
    </div>
</body>
</html>