<x-main>
    <x-slot:navbar>
        <li><a id="active" class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>
    <div>
        <h1 id="titleHome">ICT to me</h1>
        <img id=indexIMG2 src="{{asset('images/genericICTpicture.png')}}" alt="ICT picture">
        <!-- FIRST SET OF TEXT -->
        <article class="textHome">
            <h3>Past ICT experience</h3>
            <p>
                Looking at my prior ICT experience, I've practically come into this study as good as empty handed.
                Though I've of course been aware of the field and its components, I've never really worked with
                coding or anything related to it myself. It's something I've honestly had an interest for somewhere
                in the back of my mind for many years, but the task of actually learning how to do it has always
                been quite daunting to me due to its sheer size. By following
                <a href="https://hz.nl/en/study-programmes/it" target="_blank">the HBO-ICT study</a>,
                I hope to overcome this hurdle and learn something I think will be fun and exciting.
            </p>
        </article>
        <!-- SECOND SET OF TEXT -->
        <article class="textHome">
            <h3>Why study ICT?</h3>
            <p>
                Last year, I spent my days at the HZ University over in Vlissingen following their
                <a href="https://hz.nl/en/study-programmes/international-business" target="_blank">International
                    Business (IB) course</a>.
                I'd study and make assignments for topics such as market research,
                interculteral competence and export management, but never really enjoyed doing so. Looking back on
                why I initially decided to study IB, my main driver was the fact it had to do with economics, which
                was a topic I was quite good at in secondary school. I never really took the time to consider
                whether or not I would actually like studying IB, which ended up not being the case. I'd say it took
                me only until the end of the first quarter to realise IB wasn't what I wanted to do, and the other
                quarters certainly didn't help change my mind on that. I ended up finishing the year for the sake of
                getting my propedeuse, but I actively looked for something new to do after, which eventually brought
                me to HBO-ICT, a study that actually seemed to peek my interests, even with my lack of experience.
            </p>
        </article>
        <!-- HZ LOGO IMG-->
        <img id="indexIMG1" src="{{asset('/images/logoHZ.png')}}" alt="HZ logo">
        <!-- THIRD SET OF TEXT-->
        <article class="textHome">
            <h3>My current opinion on HZ HBO-ICT</h3>
            <p>
                So far, I think this study is quite entertaining. It's a bit tough to form a truly solid opinion at
                this moment in time considering we've just started the academic year, but I can at least say I
                haven't had any complaints regarding it thus far. Comparing it to my previous study at HZ, what
                makes HBO-ICT more appealing to me is:
            <ul>
                <li>The general topic and learning of it being more direct; If I'm trying to do or learn something
                    coding related, I can instantly see how it's going by simply running my code.
                </li>
                <li>The field of ICT being more fitting for me; with the type of person I am and the personality I
                    have, I don't think I could've ever been a real international businessman. I feel like ICT is
                    way better for me.
                </li>
                <li>The fact I'm doing something I actually enjoy; It has been way easier for me to concentrate and
                    work on school in comparison to last year, as I'm having more fun doing so.
                </li>
            </ul>
            That being said, it did take me a bit of effort to learn the basics of HTML / CSS to make this website
            (especially considering my lack of former experience), but it has certainly been a fun experience, at
            least up until now.
            </p>
        </article>
    </div>
</x-main>
