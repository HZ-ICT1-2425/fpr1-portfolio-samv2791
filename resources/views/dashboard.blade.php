<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a id="active" href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog')?>">Blog</a></li>
    </x-slot:navbar>
    <!-- CONTAINERS FOR FLEXBOX -->
    <div class="container3">
        <div class="container2">
            <article class="dashboardSummary">
                <h1>Personal Dashboard</h1>
                <h3>Current progression summary</h3>
                <p>Total credits: 60</p>
                <p>Credits obtained: 0</p>
                <p>Credits lost: 0</p>
                <p>Possible credits: 60</p>
                <p>NBSA: false</p>
            </article>
            <!-- TABLE OTHER -->
            <table class="quarterOther">
                <tr>
                    <th colspan="6" id="tableTop">Other</th>
                </tr>
                <tr>
                    <th id="courseOther">Course</th>
                    <th id="ecs">ECs</th>
                    <th id="assessmentOther">Assessment</th>
                    <th id="weight">Weight</th>
                    <th id="grade">Grade</th>
                    <th id="finalgrade">Final grade</th>
                </tr>
                <tr>
                    <td id="courseOther">Business Consultancy basics</td>
                    <td id="ecs">2.5</td>
                    <td id="assessmentOther">Video assignment</td>
                    <td id="weight">100%</td>
                    <td id="grade" class="finalGradePassed">6.5</td>
                    <td id="finalgrade" class="finalGradePassed">6.5</td>
                </tr>
                <tr>
                    <td id="courseOther">Personal Professional Development Exploration</td>
                    <td id="ecs">12.5</td>
                    <td id="assessmentOther">Interview</td>
                    <td id="weight">100%</td>
                    <td id="grade" class="finalGradeFailed">4.5</td>
                    <td id="finalgrade" class="finalGradeFailed">4.5</td>
                </tr>
                <tr>
                    <td id="courseOther">IT Personality- projectweek 1</td>
                    <td id="ecs">1.25</td>
                    <td id="assessmentOther">Portfolio</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
                <tr>
                    <td id="courseOther">IT Personality International week</td>
                    <td id="ecs">1.25</td>
                    <td id="assessmentOther">Portfolio</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
                <tr>
                    <td id="courseOther">IT Personality 1</td>
                    <td id="ecs">1.25</td>
                    <td id="assessmentOther">Portfolio</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
                <tr>
                    <td id="courseOther">IT Personality 2</td>
                    <td id="ecs">1.25</td>
                    <td id="assessmentOther">Portfolio</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
            </table>
        </div>
        <!-- TABLE Q1 -->
        <div class="container">
            <table class="quarterOne">
                <tr>
                    <th colspan="6" id="tableTop">Quarter One</th>
                </tr>
                <tr>
                    <th id="course">Course</th>
                    <th id="ecs">ECs</th>
                    <th id="assessment">Assessment</th>
                    <th id="weight">Weight</th>
                    <th id="grade">Grade</th>
                    <th id="finalgrade">Final grade</th>
                </tr>
                <tr>
                    <td id="course">Program- & Career Orientation</td>
                    <td id="ecs">2.5</td>
                    <td id="assessment">Website assessment</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
                <tr>
                    <td id="course">Computer Science Basics</td>
                    <td id="ecs">5</td>
                    <td id="assessment">Written exam</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
                <tr>
                    <td id="course">Programming Basics</td>
                    <td id="ecs">5</td>
                    <td id="assessment">Case study exam</td>
                    <td id="weight">100%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade">-</td>
                </tr>
            </table>
            <!-- TABLE Q2 -->
            <table class="quarterTwo">
                <tr>
                    <th colspan="6" id="tableTop">Quarter Two</th>
                </tr>
                <tr>
                    <th id="course">Course</th>
                    <th id="ecs">ECs</th>
                    <th id="assessmentQ2">Assessment</th>
                    <th id="weight">Weight</th>
                    <th id="grade">Grade</th>
                    <th id="finalgrade">Final grade</th>
                </tr>
                <tr>
                    <td rowspan="2" id="course">Object-Oriented Programming</td>
                    <td rowspan="2" id="ecs">10</td>
                    <td id="assessmentQ2">Individual presentation</td>
                    <td id="weight">50%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade" rowspan="2">-</td>
                </tr>
                <tr>
                    <!-- quarter 2-->
                    <!-- Object-Oriented Programming</td> -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ2">Written knowledge test</td>
                    <td id="weight">50%</td>
                    <td id="grade">-</td>
                </tr>
            </table>
            <!-- TABLE Q3 -->
            <table class="quarterThree">
                <tr>
                    <th colspan="6" id="tableTop">Quarter Three</th>
                </tr>
                <tr>
                    <th id="courseQ3">Course</th>
                    <th id="ecs">ECs</th>
                    <th id="assessmentQ3">Assessment</th>
                    <th id="weight">Weight</th>
                    <th id="grade">Grade</th>
                    <th id="finalgrade">Final grade</th>
                </tr>
                <tr>
                    <td rowspan="4" id="courseQ3">Framework project 1</td>
                    <td rowspan="4" id="ecs">10</td>
                    <td id="assessmentQ3">Case study exam</td>
                    <td id="weight">50%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade" rowspan="4">-</td>
                </tr>
                <tr>
                    <!-- quarter 3-->
                    <!-- Framework project 1 -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ3">Database exam</td>
                    <td id="weight">12.5%</td>
                    <td id="grade">-</td>
                </tr>
                <tr>
                    <!-- quarter 3-->
                    <!-- Framework project 1 -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ3">Group presentation</td>
                    <td id="weight">25%</td>
                    <td id="grade">-</td>
                </tr>
                <tr>
                    <!-- quarter 3-->
                    <!-- Framework project 1 -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ3">Group portfolio</td>
                    <td id="weight">12.5%</td>
                    <td id="grade">-</td>
                </tr>
            </table>
            <!-- TABLE Q4 -->
            <table class="quarterFour">
                <tr>
                    <th colspan="6" id="tableTop">Quarter Four</th>
                </tr>
                <tr>
                    <th id="courseQ4">Course</th>
                    <th id="ecs">ECs</th>
                    <th id="assessmentQ4">Assessment</th>
                    <th id="weight">Weight</th>
                    <th id="grade">Grade</th>
                    <th id="finalgrade">Final grade</th>
                </tr>
                <tr>
                    <td rowspan="3" id="courseQ4">Framework project 2</td>
                    <td rowspan="3" id="ecs">10</td>
                    <td id="assessmentQ4">Final portfolio</td>
                    <td id="weight">25%</td>
                    <td id="grade">-</td>
                    <td id="finalgrade" rowspan="3">-</td>
                </tr>
                <tr>
                    <!-- quarter 4-->
                    <!-- Framework project 2 -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ4">Acceptance report</td>
                    <td id="weight">25%</td>
                    <td id="grade">-</td>
                </tr>
                <tr>
                    <!-- quarter 4-->
                    <!-- Framework project 2 -->
                    <!-- 10 ECs -->
                    <td id="assessmentQ4">Development Portfolio</td>
                    <td id="weight">50%</td>
                    <td id="grade">-</td>
                </tr>
            </table>
        </div>
        </article>
    </div>
</x-main>
