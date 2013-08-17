@extends('layouts.master')

@section('content')

<div class="contact-block-big">

        <section>
            <div class="booking">
                <h1>Booking</h1>
                <p><a href="mailto:luray@luraymusic.com">luray@luraymusic.com</a></p>
            </div>

            <div class="publicity">
                <h1>Publicity</h1>
                <p><a href="http://www.thinkpress.net/index.php/clients/luray">Monica Hopman</a></p>
                <p><a href="mailto:monica@thinkpress.net">monica@thinkpress.net</a></p>
            </div>
        </section>

        <section>
            <div class="mailing-list">
                <h1>Mailing list</h1>
                <form action="http://luraymusic.us5.list-manage.com/subscribe/post?u=8da68ebf6c5070fcc364c1658&amp;id=64e96e37b2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <label for="mce-EMAIL"></label>
                    <input type="email" value="" name="EMAIL" class="text-input email" id="mce-EMAIL" placeholder="email address" required>
                    <input type="submit" value="submit" name="subscribe" id="mc-embedded-subscribe" class="button submit">
                </form>
            </div>

            <div class="social">
                <h1>Social</h1>
                <p>
                    <a class="facebook tooltip" title="facebook" data-icon="&#xe00e;" href="https://www.facebook.com/Luraymusic" target="_blank"><span class="hide">Facebook</span></a>
                    <a class="twitter" title="twitter" data-icon="&#xe00c;" href="https://twitter.com/luray_who" target="_blank"><span class="hide">Twitter</span></a>
                    <a class="soundcloud" title="soundcloud" data-icon="&#xe00d;" href="https://soundcloud.com/luraymusic" target="_blank"><span class="hide">Soundcloud</span></a>
                    <a class="youtube" title="youtube" data-icon="&#xe00b;" href="http://www.youtube.com/user/Luraymusic?feature=watch" target="_blank"><span class="hide">YouTube</span></a>
                    <a class="bandcamp" title="bandcamp" data-icon="&#xe00f;" href="http://luray.bandcamp.com/" target="_blank"><span class="hide">Bandcamp</span></a>
                </p>
            </div>
        </section>

    </div>

@section('footer')
    @include('_partials.footer-contact')
@stop



@stop