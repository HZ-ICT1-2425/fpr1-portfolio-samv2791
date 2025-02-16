<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a id="active" href="<?=route('blog')?>">Blog</a></li>
    </x-slot:navbar>
    <div class="blogMain">
        <article id="blogHeader">
            <h1 style="margin-bottom: 55px;">Blog</h1>
        </article>
        <!-- FIRST BLOG POST (STUDY CHOICE)-->
        <article id="blogContent">
            <section id="blogLink">
                <a href="{{route('blogPage', ['id' => 1])}}">
                    <section>
                        <hr id="blogMainHrTop">
                        <img id="blogIMG" src="{{asset('images/blogStudyChoice.jpg')}}"
                             alt="Image about making choices">
                        <h3>Study Choice</h3>
                        <p>I went a bit more into detail regarding my study choice and expectations, click to read
                            more.</p><br>
                    </section>
                </a>
            </section>
            <!-- SECOND BLOG POST (SWOT ANALYSIS)-->
            <section id="blogLink">
                <a href="{{route('blogPage', ['id' => 2])}}">
                    <section>
                        <hr>
                        <img id="blogIMG" src="{{asset('images/blogSWOT.png')}}" alt="Image of SWOT table">
                        <h3>Personal SWOT Analysis</h3>
                        <p>I made a small SWOT analysis about myself, click to read more.</p><br>
                    </section>
                </a>
                <!-- THIRD BLOG POST (FORMER PROGRAMMING EXPERIENCE)-->
            </section>
            <section id="blogLink">
                <a href="{{route('blogPage', ['id' => 3])}}">
                    <section>
                        <hr id="yaya">
                        <img id="blogIMG" src="{{asset('images/blogExperience.jpeg')}}" alt="Image about experience">
                        <h3>Former Programming Experience</h3>
                        <p>I wrote about what I would say is my only somewhat former experience with programming, click
                            to read more.</p><br>
                    </section>
                </a>
            </section>
            <!-- FOURTH BLOG POST (FEEDBACK)-->
            <section id="blogLink">
                <a href="{{route('blogPage', ['id' => 4])}}">
                    <section>
                        <hr>
                        <img id="blogIMG" src="{{asset('images/blogFeedback.png')}}" alt="Image of feedback">
                        <h3>First Feedback</h3>
                        <p>I got my first bit of feedback, click to read more.</p><br>
                    </section>
                </a>
            </section>
            <!-- FIFTH BLOG POST (ICT)-->
            <section id="blogLink">
                <a href="{{route('blogPage', ['id' => 5])}}">
                    <section>
                        <hr>
                        <img id="blogIMG" src="{{asset('images/blogICT.jpg')}}" alt="Image about ICT components">
                        <h3>ICT</h3>
                        <p>I went over HBO-ICT in terms of the IT field of work, click to read more.</p><br>
                        <hr id="blogMainHrEnd">
                    </section>
                </a>
            </section>
        </article>
    </div>
</x-main>
