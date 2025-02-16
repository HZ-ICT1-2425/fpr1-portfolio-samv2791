<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a id="active" href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog')?>">Blog</a></li>
    </x-slot:navbar>
    <img id="myprofileIMG1" src="{{asset('images/myprofileMe.jpg')}}" type="image/jpg" alt="Picture of me">
    <div>
        <section class="myprofileBody">
            <h1>Sam Verdoorn</h1>
            <h3>Who Am I?</h3>
            <!-- FIRST SET OF TEXT, WHO AM I-->
            <p id="myprofileToptext">
                My name is Sam Verdoorn, I'm 19 years old and live in Sluiskil. At this moment
                in time I'm unemployed, though I plan to bring change to that in the near future. I used my driving
                exam picture cause I genuinely couldn't find any other (recent) full body pictures of myself. As for
                some of my characteristics, I'd say I'm:
            </p>
            <!-- CHARACTERISTICS LIST FOR TEXT 1-->
            <ul id="myprofileList">
                <li>Straightforward</li>
                <li>Easy-going</li>
                <li>Laid back</li>
                <li>Creative</li>
                <li>A bad planner</li>
            </ul>
            <!-- SECOND SET OF TEXT, HOBBIES AND INTERESTS-->
            <h3>Hobbies and Interest</h3>
            <article class="profileLowertext">
                <p>
                    One of my favourite pass time activities has to be playing video games, something I've been doing
                    for who knows how many years now and something I can (USUALLY) find relaxation in. My favorite
                    game genres to play mostly depend on who I'm with; When with friends, we usually play FPS or RTS
                    games, on my own, I'm more interested in roguelikes, 2d fighters
                </p>
                <p>beat em ups and certain indie games. Outside of gaming, I enjoy staying in bed till unreasonable</p>
                <p>times whenever I get the chance to do so and occassionaly read books when </p>
                <p>I come across a good one. I also like cats! check out </p>
                <p id="profileWorkaround"> some cat pictures of my own.</p>
            </article>
            <!-- CAT IMAGE COLLECTION -->
            <img id="myprofileIMG2" src="{{asset('images/myprofileCat2.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (1)">
            <img id="myprofileIMG3" src="{{asset('images/myprofileCat1.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (2)">
            <img id="myprofileIMG4" src="{{asset('images/myprofileCat4.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (3)">
            <img id="myprofileIMG5" src="{{asset('images/myprofileCat5.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (4)">
            <img id="myprofileIMG6" src="{{asset('images/myprofileCat8.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (5)">
            <img id="myprofileIMG7" src="{{asset('images/myprofileCat3.jpeg')}}" type="image/jpeg"
                 alt="Picture of my cat (6)">
            <img id="myprofileIMG9" src="{{asset('images/myprofileCat6.jpg')}}" type="image/jpg"
                 alt="Picture of my cat (7)">
        </section>
    </div>
</x-main>
