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
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Soundcloud</a>
                    <a href="#">YouTube</a>
                    <a href="#">Bandcamp</a>
                </p>
            </div>
        </section>

    </div>



@stop