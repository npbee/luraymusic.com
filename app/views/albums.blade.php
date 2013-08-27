@extends('layouts.master')

@section('content')

<div class="media">

    <div class="media__content">
        <img src="assets/images/album/the-wilder/cover-thumb.jpg">
        <nav class="tab-nav">
            <ul>
                <li><a class="gamma tab-nav--active" href="#info">INFO</a></li><!--
                --><li><a class="gamma" href="#lyrics">LYRICS</a></li><!--
                --><li><a class="gamma" href="#credits">CREDITS</a></li>
            </ul>
        </nav>
        <noscript>
            <p>Please enable javascript to hear Luray tracks</p>
            <a href="https://soundcloud.com/luraymusic">https://soundcloud.com/luraymusic</a>
        </noscript>
        <iframe width="100%" height="387" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fusers%2F7979835&amp;color=dcb18f&amp;auto_play=false&amp;show_artwork=false"></iframe>


    </div>

    <div class="media__text tabs">

        <section id="info" class="tabs__content tab--active">

            <h1>THE WILDER (2013)</h1>

            <p>Luray is helmed by Washington, D.C.-based singer/songwriter Shannon Carey who creates banjo-inspired indie rock fused with classic country and folk on the debut The Wilder, available on August 27th. Recorded in Eau Claire, Wisconsin with her brother/producer Sean Carey (of S. Carey and Bon Iver), The Wilder became a family affair with the addition of brother Colin Carey (vibes, drums) and husband Gabriel Wisniewski (electric guitar).</p>

            <p>The Wilder creates strange and lovely bedfellows of sound - banjos, vibes, pedal steel, and ambient vocals make up this once bluegrass-picking songwriter's newly roused approach to making music. The end result is somewhere between the likes of Iron & Wine and Emmylou Harris. Inspired by her travels, Luray is named after the Virginia town at the foothills of the Shenandoah Mountains. I am a wanderer and a traveler by nature. I resonate with certain places and become quicly attached. Luray was like that,” Shannon explains. “It's tall grass, wildflowers, and rolling green hills hit me at a time when I was experiencing a lot of change and loss. I discovered these songs were within me, and was coaxing them into form. The lush life in the Shenandoah Valley in early spring helped convince me that the songs were worth writing.”</p>

            <p>With roots in a musical family, Shannon Carey began writing songs at an early age. Though originally from Wisconsin, she rediscovered her love of music and took up the banjo while living in Northern California in 2006. The banjo's rich history in bluegrass provided an immediate tradition from which to draw inspiration, and the community of musicians that came with it offered fertile ground for collaboration. First featured on backing vocals for S. Carey's debut album, All We Grow, Shannon soon returned to songwriting and performing full-time. Taking the banjo beyond bluegrass and into moodier and fresher territory is at the heart of her soon-to-be released debut album, The Wilder.</p>

            <p>Luray live includes Shannon Carey on banjo and vocals, Sarah Gilberg on keyboard and backing vocals, Gabriel Wisniewski on electric guitar, C.J. Wolfe on drums, and Brian Cruse on bass.</p>

            <h2>PRESS:</h2>

            @foreach($quotes as $quote)
                @if($quote->add_to_album_page == 1 && $quote->is_featured == 1)
                    <blockquote class="album-quote">
                        <p>{{ $quote->quote }}</p>
                        <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a>
                    </blockquote>
                @endif
            @endforeach

            @foreach($quotes as $quote)
                @if($quote->add_to_album_page == 1 && $quote->is_featured == 0)
                    <blockquote class="album-quote">
                        <p>{{ $quote->quote }}</p>
                        <p class="source italic"><a href="{{ $quote->url }}">{{ $quote->source }}</a>
                    </blockquote>
                @endif
            @endforeach

            <p>
                <a href="{{ URL::route('press') }}">Full Press Page</a>
            </p>

            <h2>PURCHASE:</h2>

            <ul class="purchase">
                <li><a target="_blank" class="bigcartel" href="http://luray.bigcartel.com/product/the-wilder-cd">{{ HTML::image('assets/images/logos/bigcartel.png', 'bigcartel logo')}}</a></li>
                <!-- <li><a class="amazon" href="#">{{ HTML::image('assets/images/logos/amazon.png', 'amazon logo')}}</a></li> -->
                <li><a class="itunes" href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewAlbum?id=662389920" target="_blank">{{ HTML::image('assets/images/logos/itunes.png', 'itunes logo')}}</a></li>
            </ul>

        </section>

        <section id="lyrics" class="tabs__content lyrics">

            <h1>LYRICS</h1>

            <article>
                <h2 class="gamma">The Wilder</h2>
                <p>two weeks and ten thousand miles</p>
                <p>if i could fly i’d think it over</p>
                <p>if i could see the landing ground</p>
                <p>you saw the side of me that’s red</p>
                <p>i just got tired of all the nodding</p>
                <p>it’s more than talking to myself</p>
                <p>is there anyone who knows the places we go, the path that we made</p>
                <p>the wilder below reminds me of home, he’d follow us in</p>
                <p>never knew the calls of birds</p>
                <p>weighed the size against the flora</p>
                <p>found there’s more than room for two</p>
                <p>there’s talk and i just get lost</p>
                <p>and all the words i’ve ever heard of</p>
                <p>just get caught up in my chest</p>
                <p>is there anyone who knows the places we go, the path that we made</p>
                <p>the wilder below reminds me of home, he’d follow us in</p>
                <p>make it all make sense make it all make sense</p>
                <p>is there anyone who knows the places we go, the path that we made</p>
                <p>the wilder below reminds me of home, he’d follow us in</p>
            </article>

            <article>
                <h2 class="gamma">What Becomes</h2>
                <p>here in the quiet of the oldest thing we know</p>
                <p>still in the science of the wider sea below</p>
                <p>what becomes</p>
                <p>what becomes</p>
                <p>what becomes</p>
                <p>here in the solid arc too broken for a view</p>
                <p>still in the shadow of the frozen pose of you</p>
                <p>what becomes</p>
                <p>what becomes</p>
                <p>what becomes</p>
                <p>here in the purest form the robin sails so low</p>
                <p>still in the knowledge of the hush before the close</p>
                <p>what becomes</p>
                <p>what becomes</p>
                <p>what becomes</p>
            </article>

            <article>
                <h2 class="gamma">Luray</h2>
                <p>there were dreams and stumbling awake </p>
                <p>and lines on a page where it all makes sense</p>
                <p>there were times when i was afraid </p>
                <p>and you were afraid, can we make it okay</p>
                <p>throw your arms around</p>
                <p>throw your arms around</p>
                <p>don’t leave me there</p>
                <p>don’t leave me there</p>
                <p>there were signs and snakes in the grass</p>
                <p>and phone calls that end without a word</p>
                <p>let’s say that i’ll pack the car </p>
                <p>and you’ll find a small hideaway</p>
                <p>throw your arms around</p>
                <p>throw your arms around</p>
                <p>don’t leave me there</p>
                <p>don’t leave me there</p>
                <p>ginny flower pick it up for me, carry it for me, keep it safe for me</p>
                <p>purple bonnet pick him up for me, carry him for me, keep him safe for me</p>
                <p>do you think we’ll ever go home again</p>
                <p>throw your arms around</p>
                <p>throw your arms around</p>
                <p>don’t leave me there</p>
                <p>don’t leave me there</p>
                <p>there were times when i was afraid </p>
                <p>and you were afraid, can we make it okay</p>
            </article>

            <article>
                <h2 class="gamma">Kalorama</h2>
                <p>at the end of the week it’s easy to fall</p>
                <p>for an invitation to pack it in and lay low</p>
                <p>in kalorama</p>
                <p>we’ll  take our time to settle on</p>
                <p>overpriced furniture let’s put it on the credit card</p>
                <p>in kalorama</p>
                <p>we’ll make a stockpile of firewood</p>
                <p>ignoring all the locals who don’t even think it’s cold</p>
                <p>in kalorama</p>
                <p>five miles as birds fly the leaves fall in pieces</p>
                <p>times i can still feel the crush of your fingers</p>
                <p>the way that dreams leave behind</p>
                <p>in kalorama, we’ll make it alright</p>
                <p>in kalorama come down from the fight</p>
                <p>take cover from the darkest night</p>
                <p>driving around there’s never enough </p>
                <p>parking on the sidewalk someone’s got a spot for me</p>
                <p>in kalorama</p>
                <p>the hardware store hasn’t opened since </p>
                <p>1982 and somehow that’s the way things are</p>
                <p>in kalorama </p>
                <p>five miles as birds fly the leaves fall in pieces   </p>
               <p>times i can still feel the crush of your fingers</p>
                <p>the way that dreams leave behind</p>
                <p>in kalorama, we’ll make it alright</p>
                <p>in kalorama come down from the fight</p>
                <p>take cover, take cover, take cover from the dark </p>
                <p>take cover from the darkest night</p>
            </article>

            <article>
                <h2 class="gamma">The Reins</h2>
                <p>i gave you an army to fight, the best i could gather in time</p>
                <p>but now that they’re falling in line i’m second guessing</p>
                <p>i gave you an army to fight, the last battle fresh in my mind</p>
                <p>i’ll try not to tremble in fear at all</p>
                <p>the last time i showed any fear at all i faltered</p>
                <p>i don’t wanna know what the use is, i don’t wanna know who was right</p>
                <p>i don’t wanna know what the truth is, the best part’s a secret</p>
                <p>i’ll know when it’s time</p>
                <p>we’ll walk up the drive hand in hand, your face with the usual dread</p>
                <p>you’ve already said your goodbyes to happy endings</p>
                <p>the day we drove west you could smile, like times when the song writes itself</p>
                <p>you’ve already seen where the bottom lies, </p>
                <p>you’ve already gone to the darkest i’ve imagined</p>
                <p>i don’t wanna know what the use is, i don’t wanna know who was right</p>
                <p>i don’t wanna know what the truth is, the best part’s a secret</p>
                <p>i’ll know when it’s time   i’ll know when it’s time,   i’ll know when it’s time</p>
                <p>i gave you an army to fight, the best i could gather in time</p>
                <p>but now that they’re falling in line i’m second guessing</p>
            </article>

            <article>
                <h2 class="gamma">Promise Of Lakes</h2>
                <p>what survives is the on-time</p>
                <p>throwing knives and battle scars</p>
                <p>ten degrees and getting cold, getting cold</p>
                <p>jesus christ and a hundred eyes</p>
                <p>want it all</p>
                <p>little star in the wrong hands</p>
                <p>want it all</p>
                <p>you can ask me how could i reach out for a clean start</p>
                <p>you can ask the stars with a speck of doubt from a deep starve</p>
                <p>the reason why we stay</p>
                <p>is the promise of lakes</p>
                <p>and the sun on your face</p>
                <p>the reason why we stay</p>
                <p>to your right is the dancing bear   </p>
                <p>good advice but the source unfair</p>
                <p>where we are is our last stop, the last stop</p>
                <p>passerbys get a stone stare     </p>
                <p>want it all</p>
                <p>tender leaves feel the smallest tear</p>
                <p>want it all </p>
                <p>you can ask me how could i reach out for a clean start</p>
                <p>you can ask the stars with a speck of doubt from a deep starve</p>
                <p>the reason why we stay</p>
                <p>is the promise of lakes</p>
                <p>the reason why we stay</p>
                <p>is the promise of lakes</p>
                <p>and the sun on your face</p>
                <p>the reason why we stay</p>
            </article>

            <article>
                <h2 class="gamma">Tidalground</h2>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>feet moving i’m swimming against the grain</p>
                <p>cut the line to the source and i’ll float away</p>
                <p>i’ve tried it before and somehow i never learned to pray, pray</p>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>upon a sea of reeds that wasn’t here before</p>
                <p>there is a sea of reeds that wasn’t here before</p>
                <p>there’s no telling when spring’s gone and summer’s come</p>
                <p>watch the moon to keep track or just write it down</p>
                <p>i’ll keep holding on for someone to tell me we were wrong, wrong</p>
                <p>new eyes will see lightning strike a tree at the perfect time</p>
                <p>bright eyes will see saturn in the east and will count its rings</p>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>beneath this tidal ground, i’ll follow you around</p>
                <p>upon a sea of reeds that wasn’t here before</p>
                <p>there is a sea of reeds that wasn’t here before</p>
            </article>

            <article>
                <h2 class="gamma">Already There</h2>
                <p>it’s the first night of the run i’m the only one who called</p>
                <p>the race seems won and i’m behind the gun</p>
                <p>your eyes sweeping round the room seems the burden falls on you</p>
                <p>the night is young and i’ve a long way to go</p>
                <p>it’s not the last point in the sky where i stop and stare</p>
                <p>trick of the eye the passing of time and i’m already there</p>
                <p>which direction to plot along i can only follow what comes</p>
                <p>trace a spiral and bend the arm of calm</p>
                <p>take the measure of a town, you can only gather what’s found</p>
                <p>the day is young and i’ve a long way to go</p>
                <p>it’s not the last point in the sky where i stop and stare</p>
                <p>trick of the eye the passing of time and i’m already there</p>
                <p>i return where i belong, try to capture the way that i longed</p>
                <p>for a foothold the winning vault arms aloft</p>
                <p>here’s a quiet building om for the first time i go it alone</p>
                <p>my heart is young and i’ve a long way to go</p>
                <p>it’s not the last point in the sky where i stop and stare</p>
                <p>trick of the eye the passing of time and i’m already there</p>
            </article>

            <article>
                <h2 class="gamma">Crying</h2>
                <p>mama said to take off your shoes</p>
                <p>you’ll get sand all over</p>
                <p>to tow the line it wasn’t easy</p>
                <p>the way that she scolded</p>
                <p>you gotta get over it</p>
                <p>crying is not allowed, it breaks you down if you wanna be a man</p>
                <p>like rain in the salty sea, your swollen tears are wasted on me</p>
                <p>fell down and that’s what she told you</p>
                <p>be a good soldier</p>
                <p>don’t let your blood get all over</p>
                <p>the wash was done sunday</p>
                <p>you’ll understand one day</p>
                <p>crying is not allowed, it breaks you down if you wanna be a man</p>
                <p>like rain in the salty sea, your swollen tears are wasted on me</p>
                <p>some days we’d find mama tired</p>
                <p>her face was all cloudy</p>
                <p>we’d hurry out the back before she noticed</p>
                <p>picking wildflowers</p>
                <p>she loved wildflowers</p>
                <p>crying is not allowed, it breaks you down if you wanna be a man</p>
                <p>like rain in the salty sea, your swollen tears are wasted on me</p>
            </article>

            <article>
                <h2 class="gamma">Lullaby</h2>
                <p>the sounds of this house are strange at this hour</p>
                <p>it’s so hard to get quiet</p>
                <p>you start to drift off and i shift you awake</p>
                <p>we’re back at the hardest part</p>
                <p>here in the south when the junebugs are out</p>
                <p>we lay side by side</p>
                <p>and every year on the longest day</p>
                <p>find no sleep at all</p>
                <p>even out here on our quiet street</p>
                <p>the city’s halo shines</p>
                <p>i curse the light and turn to you</p>
                <p>i feel your hand on my side</p>
                <p>here in the south when the junebugs are out</p>
                <p>we lay side by side</p>
                <p>and every year on the longest day</p>
                <p>find no sleep at all</p>
                <p>lying in bed i can feel you awake</p>
                <p>your fickle heart pounding</p>
                <p>i must admit i find solace in this</p>
                <p>you’re there to have and to hold</p>
                <p>here in the south when the junebugs are out</p>
                <p>we lay side by side</p>
                <p>and every year on the longest day</p>
                <p>find no sleep at all</p>
            </article>

        </section>

        <section id="credits" class="credits tabs__content">

            <h1>Album Credits</h1>

            <article>
                <p>Banjo, ukulele, vocals: Shannon Carey</p>
                <p>Keyboard, percussion, vocals, vibes: Sean Carey</p>
                <p>Guitar: Gabriel Wisniewski</p>
                <p>Percussion, vibes: Colin Carey</p>
                <p>Bass: Jeremy Boetcher</p>
                <p>Guitar: Nick Ball</p>
                <p>Pedal Steel: Ben Lester</p>
                <p>Vocals: Mike Noyce</p>
            </article>

            <article>
                <p>All songs written by Shannon Carey</p>
                <p>Produced and recorded by Sean Carey</p>
                <p>Mixed by Zach Hanson</p>
                <p>Mastered by Brian Joseph</p>
                <p>Album art by Katy Cowan (photo by Elizabeth Gramm)</p>
                <p>Album and website design by Nick Ball</p>
                <p>www.luraymusic.com</p>
            </article>

            <article>
                <p>Thank you, Sean, for giving so much to this project and for your love and patience. Thank you to my family and friends who played on the album; to Elizabeth, Nick, Zach, Brian, Kyle, and Katy; to Colin, Lisa, Laura, Stantonio and to my family; to my bandmates; and finally- to Gabriel.</p>
            </article>

        </section>

    </div>

</div>

@stop

@section('footer')
    @include('_partials.footer')
@stop

