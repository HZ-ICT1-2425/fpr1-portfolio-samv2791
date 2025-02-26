<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    private $data = [
        [
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => '
    Go to https://hz.mynetpay.nl/
    Log in using your HZ username and password
    Click "Web Print"
    Select a printer
    Select and upload your files
    At the selected printer, complete the print using your HZ card
',
            'link' => 'https://google.com',
        ],
        [
            'question' => 'How can you scan a document and send it to your laptop at HZ?',
            'answer' => '
    Log on to a printer using your HZ card or username and password
    Select the "scan" option
    Place the original on the feeder or glass plate
    (Optional) Press "change settings" and select "2-sided" for duplex mode
    Press "start"
    When done, remember to log out
',
            'link' => 'https://amazon.com',
        ],
        [
            'question' => 'How can I buy something on the HZ web shop?',
            'answer' => '
    Go to https://webshop.hz.nl/
    Log in to your HZ account
    Select your desired product(s)
    Go to your cart
    Check out
',
            'link' => 'https://spotify.com',
        ],
        [
            'question' => 'How can you book a project space?',
            'answer' => '
    Go to https://hzuniversity.topdesk.net/tas/public/ssp/
    Click "Reservations"
    Click "Reserve a meeting or project room"
    Select the date you wish to reserve a room on
    Drag your mouse to select a time frame to reserve the room for
    Click "Next" and fill in the requested information
    Click "Confirm reservation"
',
            'link' => 'https://instagram.com',
        ],
        [
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => '
    Know that HZ Middelburg no longer has its own car parking area
    Navigate to the parking garage at "Kousteensedijk" (8 minutes from HZ)
    Keep your entrance ticket with you all (school)day
    When leaving, drop by the JRCZ reception and show your entrance ticket
    You will be given a leaving ticket to exit the garage so you can go back home
    ALTERNATIVELY -> park somewhere else nearby the school (most likely paid parking)
',
            'link' => 'https://hz.nl',
        ],
        [
            'question' => 'How do you enrol for courses on Osiris?',
            'answer' => '
    Go to https://hz.osiris-student.nl/
    On the left-hand side, click the enrol button (the one with the pencil)
    Click "COURSE"
    Use the search bar to find the course you wish to enrol in
    Select the course (make sure you choose the right one if multiple are available)
    Click "CONFIRM ENROLMENT"
',
            'link' => 'https://youtube.com',
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $faq) {
            Faq::create($faq);
        }
    }
}
