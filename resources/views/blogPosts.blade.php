<x-main>
    <x-slot:navbar>
            <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
            <li><a href="<?=route('profile')?>">Profile</a></li>
            <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
            <li><a href="<?=route('faq')?>">FAQ</a></li>
            <li><a href="<?=route('blog')?>">Blog</a></li>
    </x-slot:navbar>

    @if($id == 1)
        <div id="blogSubDisplay">
            <section class="blogSubText">
                <h1>BLOG: More on my study choice</h1>
                <h3>What do I actually expect from my new study?</h3>
                <p id="blogChoicefit">
                    On the home page of my website, I talked about why I made the choice to swap from
                    IB to ICT, but never elaborated on what I actually except from and after this study. Over the next
                    four years, I expect to first of all build up a lot of coding experience over multiple coding
                    languages by practicing them and creating project using them. Besides this, I expect to build up a
                    fair bit of real world experience through working with real problems and companies, whether that
                    just be through the study's courses or things like my future internship. Lastly, I expect to do up
                    new general skills related to the field of ICT such as effective time management (e.g. working in
                    sprints) and code review. As for what I plan to do after my study, I'm not fully certain yet, though
                    I expect that to change in the coming years as I'm working on all sorts of different things and
                    finding out which I truly enjoy
                </p>
                <p id="blogSubBottom"><a id="blogGoBack" href="{{route('blog')}}">More posts -></a></p>
            </section>
            <img src="{{asset('/images/blogStudyChoice.jpg')}}" id="blogSubImg" alt="Image about making choices">
        </div>
    @elseif($id == 2)
        <div id="blogSubDisplay">
            <section class="blogSubText">
                <h1>BLOG: Personal SWOT analysis</h1>
                <h3>I made a SWOT analysis regarding myself in view of my study</h3>
                <!-- STRENGTHS -->
                <p id="blogSWOTtop">Starting in chronological order with strengths, I found:
                <ul>
                    <li>I can be a hard worker under the right circumstances;</li>
                    <li>I can be a strong team player;</li>
                </ul>
                </p>
                <!-- WEAKNESSES -->
                <p> For my weaknesses, I found:
                <ul>
                    <li>I have practically zero prior coding experience</li>
                    <li>I sometimes procrastinate too much</li>
                </ul>
                </p>
                <!-- OPPORTUNITIES -->
                <p> For opportunities:
                <ul>
                    <li>Building up a solid IT skill set as well as experiencing what it is like to do work for real companies and solve real problems</li>
                </ul>
                </p>
                <!-- THREATS -->
                <p> And lastly, for threats:
                <ul>
                    <li id="blogSWOTfit">Failing to learn at a fast enough pace due to my lack of experience</li>
                </ul>
                </p>
                <p id="blogSubBottom"><a id="blogGoBack" href="{{route('blog')}}">More posts -></a></p>
            </section>
            <img src="{{asset('/images/blogSWOT.png')}}" id="blogSubImg" alt="Image of SWOT table">
            <div>
    @elseif($id == 3)
                    <div id="blogSubDisplay">
                        <section class="blogSubText">
                            <h1>BLOG: Former programming experience</h1>
                            <h3>A short story about my only prior programming experience</h3>
                            <p id="blogExperiencefit">
                                When thinking of former programming experience, the only thing that comes to
                                mind for me was the website I 'made' during my ICT classes in seconday school. One day we were given
                                the task to create a website to track the nearby weather, which we were supposed to do by using
                                local meters. The normal secondary school ICT lecture consisted of 2 hours of me and my friends
                                doing absolutely anything on the computers other than school work, which didn't change for this
                                project. Until the final moment, The couple weeks we had to complete our websites were spent on
                                making and filling in pointless forms with eachother and playing random games. As we were now
                                rapidly running out of time, we finally decided to get to work, though it didn't take long for us to
                                give up. We had done 0 practice and listened to barely anything our teacher had said over the weeks
                                and didn't understand what we were doing. Eventually, we figured out we could just steal templates
                                off the internet, change some things here and there and call it our own. At the end of it all, we
                                had completely unfunctional websites, but at least they looked nice. We ended up still getting
                                decent grades too so... moral of the story: work smarter not harder I guess
                            </p>
                            <p id="blogSubBottom"><a id="blogGoBack" href="{{route('blog')}}">More posts -></a></p>
                        </section>
                        <img src="{{asset('/images/blogExperience.jpeg')}}" id="blogSubImg" alt="Image about experience">
                    </div>
    @elseif($id == 4)
                    <div id="blogSubDisplay">
                        <section class="blogSubText">
                            <h1>BLOG: First feedback</h1>
                            <h3>I got feedback on my website</h3>
                            <p id="blogFeedbackfit">
                                This week I was given my first bit of feedback regarding my website. Both
                                teachers and students had a look at it and voiced their opinions and impressions. All in all, it was
                                quite well received, getting comments such as "nice layout" and "cool design", though the validity
                                of the positive feedback is questionable, seeing as people probably didn't want to offend me by
                                saying bad things. Looking at the actual feedback I received on my work, the two main things I heard
                                were to make an individual folder within VSCode for the five blog posts themselves and to work a bit
                                more on some of my code formatting (e.g. adding comments here and there, adding blank lines in my
                                css, organising things a bit). All in all, I'm quite content with the results of my websites first
                                showing. In the coming weeks, I plan to implement the received feedback and add some final touches
                                to my site for the final presentation of it.</li>
                                </ol>
                            </p>
                            <p id="blogSubBottom"><a href="{{route('blog')}}" id="blogGoBack">More posts -></a></p>
                        </section>
                        <img src="{{asset('/images/blogFeedback.png')}}" id="blogSubImg" alt="Image of feedback">
                    </div>
    @elseif($id == 5)
                    <div id="blogSubDisplay">
                        <section class="blogSubText">
                            <h1>BLOG: ICT</h1>
                            <h3>Insight into what HBO-ICT has to offer in the scope of the ICT field of work</h3>
                            <p id="blogICTfit">
                                The ICT field of work is a broad sector, consisting of many smaller subsectors such
                                as Software Engineering, IT Security, IT Support, Computer Programming and many more. The field has
                                been seeing rapid development, especially in more recent years, and has seen the creation of new
                                types of jobs and roles as a result. For the HBO-ICT programme, the main focuses in terms of
                                specialization are Business IT Consultancy, Software Engineering and Data Science, students being
                                required to choose one of the three in their third year after having built up their skills,
                                knowledge and preferences in the first and second. After completing your study at HZ, you can use
                                your (specialized) knowledge to get into various different jobs, some general ones being
                                IT-Consultancy, Data/Software/Cloud Engineering and Website Front/Back-end development. It is also
                                possible to contine your studies after HZ, further broadening your soft/hard skills and increasing
                                your job opportunity in the rapidly growing field of IT.</p>
                            <p id="blogSubBottom"><a id="blogGoBack" href="{{route('blog')}}">More posts -></a></p>
                        </section>
                        <img src="{{asset('/images/blogICT.jpg')}}" id="blogSubImg" alt="Image about ICT components">
                    </div>
    @endif
</x-main>
