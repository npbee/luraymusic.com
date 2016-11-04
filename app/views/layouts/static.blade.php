<!doctype html>
<html class="no-js">
    @include('_partials.head')

    <body class="{{ $bodyClass }}">
        <section class="main">
            {{ HTML::image('assets/images/logo.svg', 'logo', array('class' => 'logo'))}}
        </section>
        <section class="social">
            <a class="facebook" title="Facebook" href="https://www.facebook.com/Luraymusic" target="_blank">
                <span class="hide">Facebook</span>
                <?php echo file_get_contents("assets/images/logos/facebook.svg") ?>
            </a>
            <a class="twitter" title="Twitter" href="https://twitter.com/luray_who" target="_blank">
                <span class="hide">Twitter</span>
                <?php echo file_get_contents("assets/images/logos/twitter.svg") ?>
            </a>
            <a class="email" title="Email" href="mailto:luraywho@gmail.com" target="_blank">
                <span class="hide">Email</span>
                <?php echo file_get_contents("assets/images/logos/mail.svg") ?>
            </a>
            <a class="youtube" title="YouTube" href="http://www.youtube.com/user/Luraymusic?feature=watch" target="_blank">
                <span class="hide">YouTube</span>
                <?php echo file_get_contents("assets/images/logos/youtube.svg") ?>
            </a>
            <a class="bandcamp" title="Bandcamp" href="http://luray.bandcamp.com/" target="_blank">
                <span class="hide">Bandcamp</span>
                <?php echo file_get_contents("assets/images/logos/bandcamp.svg") ?>
            </a>
            <a class="bigcartel" title="Bigcartel" href="http://luray.bigcartel.com/" target="_blank">
                <span class="hide">Big Cartel</span>
                <?php echo file_get_contents("assets/images/logos/bigcartel.svg") ?>
            </a>
        </section>
    </body>
</html>
