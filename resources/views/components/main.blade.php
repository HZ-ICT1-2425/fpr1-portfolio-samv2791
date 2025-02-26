<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<body>
<!-- TOP SCREEN NAVBAR -->
<nav class="navbar">
    <ul>
        {{$navbar}}
    </ul>
</nav>
<!-- FIRST ASIDE MENU (IMPORTANT LINKS)-->
<aside>
    <div>
        <ul>
            <h3 id="asideHeader">Important Links</h3>
            <hr>
            <li>
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf"
                   target="_blank">CE Regulations</a></li>
            <li>
                <a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
                   target="_blank">Implementation Regulations</a></li>
            <li><a href="https://learn.hz.nl/course/view.php?id=23602" target="_blank">PCO Learn Environment</a>
            </li>
            <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">HBO-ICT Github</a></li>
            <li><a href="https://hz.osiris-student.nl/voortgang" target="_blank">Study Progress</a></li>
        </ul>
    </div>
</aside>

<main>
    {{$slot}}
</main>
<!-- SECOND ASIDE MENU (SOCIAL LINKS)-->
<aside class="aside2">
    <div>
        <ul>
            <h3 id="asideHeader">Social Links</h3>
            <hr>
            <li><a href="https://www.instagram.com/samvd19980_/" target="_blank">Instagram</a></li>
            <li><a href="https://linkedin.com/in/sam-verdoorn-625489291" target="_blank">LinkedIn</a></li>
            <li><a href="https://www.youtube.com/@svd6279" target="_blank">Youtube</a></li>
            <li><a href="https://x.com/rataccount55125" target="_blank">Twitter</a></li>
            <li><a href="https://github.com/samv2791" target="_blank">Github</a></li>
            <li><a href="https://pinterest.com/samvd12345/" target="_blank">Pinterest</a></li>
        </ul>
    </div>
</aside>

<footer>
    <div>
        <marquee>
            <p>&copy; 2024 Sam Verdoorn. All rights reserved</p>
        </marquee>
    </div>
</footer>
</body>
</html>
