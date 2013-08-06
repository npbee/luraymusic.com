@extends('layouts.master')

@section('content')

<div class="media">

    <div class="media__content">
        <img src="assets/images/album/the-wilder/cover-thumb.jpg">
        <iframe width="100%" height="385" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F7979835&amp;color=dcb18f&amp;auto_play=false&amp;show_artwork=false"></iframe>
        <nav class="tabs-nav">
            <ul>
                <li><a href="#info">INFO</a></li>
                <li><a href="#lyrics">LYRICS</a></li>
                <li><a href="#credits">CREDITS</a></li>
            </ul>
        </nav>
    </div>

    <div class="media__text tabs">

        <section id="info" class="tabs__content tab-active">

            <h1>THE WILDER</h1>

            <p>Luray is helmed by Washington, D.C.-based singer/songwriter Shannon Carey who creates banjo-inspired indie rock fused with classic country and folk on the debut The Wilder, available on August 27th. Recorded in Eau Claire, Wisconsin with her brother/producer Sean Carey (of S. Carey and Bon Iver), The Wilder became a family affair with the addition of brother Colin Carey (vibes, drums) and husband Gabriel Wisniewski (electric guitar).</p>

            <p>The Wilder creates strange and lovely bedfellows of sound - banjos, vibes, pedal steel, and ambient vocals make up this once bluegrass-picking songwriter's newly roused approach to making music. The end result is somewhere between the likes of Iron & Wine and Emmylou Harris. Inspired by her travels, Luray is named after the Virginia town at the foothills of the Shenandoah Mountains. I am a wanderer and a traveler by nature. I resonate with certain places and become quicly attached. Luray was like that,” Shannon explains. “It's tall grass, wildflowers, and rolling green hills hit me at a time when I was experiencing a lot of change and loss. I discovered these songs were within me, and was coaxing them into form. The lush life in the Shenandoah Valley in early spring helped convince me that the songs were worth writing.”</p>

            <p>With roots in a musical family, Shannon Carey began writing songs at an early age. Though originally from Wisconsin, she rediscovered her love of music and took up the banjo while living in Northern California in 2006. The banjo's rich history in bluegrass provided an immediate tradition from which to draw inspiration, and the community of musicians that came with it offered fertile ground for collaboration. First featured on backing vocals for S. Carey's debut album, All We Grow, Shannon soon returned to songwriting and performing full-time. Taking the banjo beyond bluegrass and into moodier and fresher territory is at the heart of her soon-to-be released debut album, The Wilder.</p>

            <p>Luray live includes Shannon Carey on banjo and vocals, Sarah Gilberg on keyboard and backing vocals, Gabriel Wisniewski on electric guitar, C.J. Wolfe on drums, and Brian Cruse on bass.</p>

            <h2>PRESS:</h2>

            <blockquote class="album-quote">
                <p>The Wilder is an exquisite collection of post-bluegrass Americana and chamber folk that is both delicately refined and, thanks to the prominence of Carey's rich banjo backing, unpretentiously rustic.</p>
                <p class="source italic"><a href="http://www.directcurrentmusic.com/music-news-new-music/luray-the-wilder.html">Direct Current Music</a></p>
            </blockquote>

            <blockquote class="album-quote">
                <p>Haunting, ephemeral, and just a little rustic...</p>
                <p class="source italic"><a href="http://www.utne.com/utne-reader-music-sampler.aspx#axzz2Y1Xt33Gd">Utne Reader</a></p>
            </blockquote>

            <h2>PURCHASE:</h2>

        </section>

        <section id="lyrics" class="tabs__content">
            LYRICS
        </section>

        <section id="credits" class="tabs__content">
            CREDITS
        </section>

    </div>

</div>

@stop

@section('footer')
    @include('_partials.footer')
@stop

