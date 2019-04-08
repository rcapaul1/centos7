<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SERVER['HTTP_HOST']; ?> wurde bei hosttech
        registriert.</title>
    <link href="https://fonts.googleapis.com/css?family=Sintony:400,700"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180"
          href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg"
          color="#16131e">
    <link rel="shortcut icon" href="/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#16131e">
</head>
<body>
<?php

$url = parse_url('http://' . $_SERVER['HTTP_HOST'], PHP_URL_HOST);

preg_match('/(.+\.+.+)\.\d+-\d+-\d+-\d+\./', $url, $matches);

if (!empty($matches[1])) {
    $url = $matches[1];
}

$urlParts = explode(".", $url);

$tld = strtolower(end($urlParts));

switch ($tld) {
    case 'at':
        $contractor = 'at';
        $contactInfo = 'hosttech GmbH, Warwitzstrasse 9, A-5020 Salzburg<br>
                    Tel. 0720 511 333';
        $xsafeDomain = 'xsafe.at';
        $rpsDomain = 'restpostenserver.at';
        $wscDomain = 'website-creator.at';
        $where = 'in Österreich';
        $priceSpecial = 'EUR 2,79';
        break;
    case 'de':
        $contractor = 'de';
        $contactInfo = 'hosttech GmbH, Im Mediapark 8, D-50670 Köln<br>
                    Tel. 0221 82 82 93 35';
        $xsafeDomain = 'xsafe.eu';
        $rpsDomain = 'restpostenserver.eu';
        $wscDomain = 'mywebsite-creator.de';
        $where = 'in Deutschland';
        $priceSpecial = 'EUR 2,79';
        break;
    default:
        $contractor = 'ch';
        $contactInfo = 'hosttech GmbH, Seestrasse 15a, CH-8805 Richterswil<br>
                    Tel. 044 880 1000';
        $xsafeDomain = 'xsafe.ch';
        $rpsDomain = 'restpostenserver.ch';
        $wscDomain = 'website-creator.ch';
        $where = 'in der Schweiz';
        $priceSpecial = 'CHF 3.90';
}
?>
<div id="page">
    <header>
        <nav id="main-navigation">
            <div id="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="https://www.hosttech.<?php echo $contractor; ?>?utm_source=default-page"
               target="_blank" class="logo">
                <img src="img/logo.svg" alt="Webhosting by hosttech GmbH">
            </a>
            <ul class="nav">
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting?utm_source=default-page"
                       target="_blank">Webhosting</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/reseller?utm_source=default-page"
                       target="_blank">Reseller</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                       target="_blank">Website Creator</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/vserver/cloudserver?utm_source=default-page"
                       target="_blank">vServer</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/server?utm_source=default-page"
                       target="_blank">Server</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/domains?utm_source=default-page"
                       target="_blank">Domains</a>
                </li>
                <li>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions?utm_source=default-page"
                       target="_blank">Solutions</a>
                </li>
            </ul>
            <ul class="nav social-icons">
                <li>
                    <a href="https://www.facebook.com/hosttech?utm_source=default-page"
                       target="_blank">
                        <img src="/img/facebook.svg"
                             alt="hosttech auf Facebook">
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/hosttech_ISP?utm_source=default-page"
                       target="_blank">
                        <img src="/img/twitter.svg" alt="hosttech auf Twitter">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content">
            <div></div>
            <img src="img/we-love-to-host-you.svg" alt="We love to host you!">
            <div class="content-bottom">
                <h2>Hier entsteht eine neue Webseite!</h2>
                <p>Mit einem Webhosting von hosttech.</p>
            </div>
        </div>
        <div id="parallax-holder">

        </div>
    </header>
    <main>
        <div class="content two-halfs text-center">
            <div>
                <h3>Vielen Dank!</h3>
                <p>
                    Es freut uns, dass Sie sich für hosttech als Webhoster
                    entschieden haben. Was jetzt? Installieren Sie mit der
                    einfachen <b>1-Klick-Installation</b> ein CMS wie WordPress,
                    Joomla
                    oder Drupal oder gestalten Sie Ihre ganz eigene Seite mit
                    unserem <b><a
                                href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                                target="_blank">Website Baukasten</a></b>.
                </p>
                <p>
                    <a href="https://www.myhosttech.eu"
                       target="_blank">→
                        Login ins Kundencenter</a><br>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                       target="_blank">→ Webseiten Baukasten ausprobieren!</a>
                </p>
                <div class="videoWrapper">
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/NXFj8I_NMOc?rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=1"
                            frameborder="0" allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                </div>
            </div>
            <div>
                <h3>Liebe Besucher</h3>
                <p>
                    Hier entsteht die Website eines Kunden von hosttech. Wollen
                    auch Sie von den günstigen Preisen profitieren? Zum Beispiel
                    ein
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting?utm_source=default-page"
                       target="_blank">Webhosting</a> mit 30 GB Speicherplatz
                    und unlimiteren
                    E-Mail Adressen für <b>nur <?php echo $priceSpecial; ?></b>!
                    Oder gestalten Sie ihre Website gleich selbst mit dem
                    <b>Website Creator</b>!
                </p>
                <p>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting?utm_source=default-page"
                       target="_blank">→ Günstiges
                        Webhosting <?php echo $where; ?></a><br>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                       target="_blank">→ Eigene Webseite erstellen</a><br>
                    <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                       target="_blank">→ Homepage Baukasten testen</a><br>
                </p>
            </div>
        </div>
        <hr>
        <div class="content text-center">
            <h3>Weitere Angebote</h3>
            <div class="three-thirds">
                <div>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting?utm_source=default-page"
                               target="_blank">
                                <h4>Webhosting</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting/easy?utm_source=default-page"
                               target="_blank">
                                easyhosting
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/webhosting/premium?utm_source=default-page"
                               target="_blank">
                                premiumhosting
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/businessmail?utm_source=default-page"
                               target="_blank">
                                BusinessMail
                            </a>
                        </li>
                    </ul>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                               target="_blank">
                                <h4>Website Creator</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                               target="_blank">
                                Homepage Baukasten
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/websitecreator?utm_source=default-page"
                               target="_blank">
                                Online Shop Baukasten
                            </a>
                        </li>
                    </ul>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/reseller?utm_source=default-page"
                               target="_blank">
                                <h4>Reseller</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/reseller?utm_source=default-page"
                               target="_blank">
                                Webhosting Reselling
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/websitecreator?utm_source=default-page"
                               target="_blank">
                                Baukasten Reselling
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/domain-reselling?utm_source=default-page"
                               target="_blank">
                                Domain Reselling
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/server?utm_source=default-page"
                               target="_blank">
                                <h4>Server</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/server/rootserver?utm_source=default-page"
                               target="_blank">
                                Rootserver
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/server/businessserver?utm_source=default-page"
                               target="_blank">
                                Business Server
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/server/managedserver?utm_source=default-page"
                               target="_blank">
                                Managed Server
                            </a>
                        </li>
                    </ul>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/vserver/cloudserver?utm_source=default-page"
                               target="_blank">
                                <h4>vServer</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/vserver/cloudserver?utm_source=default-page"
                               target="_blank">
                                Cloud Server
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/vserver/managedcloudserver?utm_source=default-page"
                               target="_blank">
                                Managed Cloud Server
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/domains?utm_source=default-page"
                               target="_blank">
                                <h4>Domains</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/domains/preise?utm_source=default-page"
                               target="_blank">
                                Domain-Preise
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/domains/transfer?utm_source=default-page"
                               target="_blank">
                                Domain-Transfer
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/domain-reselling?utm_source=default-page"
                               target="_blank">
                                Grossabnehmer
                            </a>
                        </li>
                    </ul>
                    <ul class="more-links">
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions?utm_source=default-page"
                               target="_blank">
                                <h4>Solutions</h4>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/domain-reselling?utm_source=default-page"
                               target="_blank">
                                Domain Reselling
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/ssl-zertifikate?utm_source=default-page"
                               target="_blank">
                                SSL Zertifikate
                            </a>
                        </li>
                        <li>
                            <a href="https://www.hosttech.<?php echo $contractor; ?>/solutions/dns-server?utm_source=default-page"
                               target="_blank">
                                DNS Server
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="content text-center">
            <h3>Unsere Marken</h3>
            <div class="brands">
                <?php if ($contractor === 'ch') { ?>
                    <a href="https://www.pcvertrieb.ch?utm_source=default-page"
                       target="_blank">
                        <img src="/img/pcvertrieb.png" alt="pcvertrieb.ch">
                    </a>
                    <a href="https://www.offizieller-registrar.ch?utm_source=default-page"
                       target="_blank">
                        <img src="/img/registrar.png"
                             alt="Offizieller Registrar">
                    </a>
                    <a href="https://www.123transfer.ch?utm_source=default-page"
                       target="_blank">
                        <img src="/img/123transfer.png" alt="123Transfer">
                    </a>
                <?php } ?>
                <a href="https://www.<?php echo $xsafeDomain; ?>?utm_source=default-page"
                   target="_blank">
                    <img src="/img/xsafe.png" alt="xsafe Online Backup">
                </a>
                <a href="https://www.<?php echo $rpsDomain; ?>?utm_source=default-page"
                   target="_blank">
                    <img src="/img/restpostenserver.png"
                         alt="Günstige Respostenserver">
                </a>
                <a href="https://www.<?php echo $wscDomain; ?>?utm_source=default-page"
                   target="_blank">
                    <img src="/img/websitecreator.png"
                         alt="Homepage Baukasten: Website Creator">
                </a>
            </div>
        </div>
        <hr>
        <div class="content text-center">
            <p><b>&copy; 2005 - <?php echo date('Y') ?> hosttech GmbH</b></p>
            <p>
                <b><?php echo $contactInfo; ?></b>
            </p>
        </div>
    </main>
</div>
<script src="/js/script.js"></script>
</body>
</html>