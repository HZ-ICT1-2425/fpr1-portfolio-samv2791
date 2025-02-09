<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a id="active" href="<?=route('faq')?>">FAQ</a></li>
        <li><a href="<?=route('blog')?>">Blog</a></li>
    </x-slot:navbar>
<div>
    <h1>FAQ</h1>
    <!-- FAQ QUESTION ONE -->
    <section class="faq">
        <details>
            <summary>How can you print a document from your laptop at HZ?</summary>
            <ol>
                <li>Go to <a href="https://hz.mynetpay.nl/" target="_blank">https://hz.mynetpay.nl/</a></li>
                <li>Log in using your HZ username and password</li>
                <li>Click "Web Print"</li>
                <li>Select a printer</li>
                <li>Select and upload your files</li>
                <li>At the selected printer, complete the print using your HZ card</li>
            </ol>
        </details>
    </section>
    <!-- FAQ QUESTION TWO -->
    <section class="faq">
        <details>
            <summary>How can you scan a document and send it to your laptop at HZ?</summary>
            <ol>
                <li>Log on to a printer using your HZ card or username and password</li>
                <li>Select the "scan" option</li>
                <li>Place the original on the feeder or glass plate</li>
                <li>(Optional) Press "change settings" and select "2-sided" for duplex mode</li>
                <li>Press "start"</li>
                <li>When done, remember to log out</li>
            </ol>
        </details>
    </section>
    <!-- FAQ QUESTION THREE -->
    <section class="faq">
        <details>
            <summary>How can I buy something on the HZ web shop?</summary>
            <ol>
                <li>Go to <a href="https://webshop.hz.nl/" target="_blank">https://webshop.hz.nl/</a></li>
                <li>Log in to your HZ account</li>
                <li>Select your desired product(s)</li>
                <li>Go to your cart</li>
                <li>Check out</li>
            </ol>
        </details>
    </section>
    <!-- FAQ QUESTION FOUR -->
    <section class="faq">
        <details>
            <summary>How can you book a project space?</summary>
            <ol>
                <li>Go to <a href="https://hzuniversity.topdesk.net/tas/public/ssp/"
                             target="_blank">https://hzuniversity.topdesk.net/tas/public/ssp/</a></li>
                <li>Click "Reservations"</li>
                <li>Click "Reserve a meeting or project room"</li>
                <li>Select the date you wish to reserve a room on</li>
                <li>Drag your mouse to select a time frame to reserve the room for</li>
                <li>Click "Next" and fill in the requested information</li>
                <li>Click "Confirm reservation"</li>
            </ol>
        </details>
    </section>
    <!-- FAQ QUESTION FIVE -->
    <section class="faq">
        <details>
            <summary>What are the instructions if you want to park your car at the HZ parking lot?</summary>
            <ol>
                <li>Know that HZ Middelburg no longer has its own car parking area</li>
                <li>Navigate to the parking garage at "Kousteensedijk" (8 minutes from HZ)</li>
                <li>Keep your entrance ticket with you all (school)day</li>
                <li>When leaving, drop by the JRCZ reception and show your entrance ticket</li>
                <li>You will be given a leaving ticket to exit the garage so you can go back home</li>
                <li>ALTERNATIVELY -> park somewhere else nearby the school (most likely paid parking)</li>
            </ol>
        </details>
    </section>
    <!-- FAQ QUESTION SIX -->
    <section class="faq">
        <details>
            <summary>How do you enrol for courses on Osiris?</summary>
            <ol>
                <li>Go to <a href="https://hz.osiris-student.nl/"
                             target="_blank">https://hz.osiris-student.nl/</a></li>
                <li>On the left-hand side, click the enrol button (the one with the pencil)</li>
                <li>Click "COURSE"</li>
                <li>Use the search bar to find the course you wish to enrol in</li>
                <li>Select the course (make sure you choose the right one if multiple are available)</li>
                <li>Click "CONFIRM ENROLMENT"</li>
            </ol>
        </details>
    </section>
</div>
</x-main>
