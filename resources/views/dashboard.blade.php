<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a id="active" href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>


    <table class="table is-striped is-hoverable is-fullwidth">
        <thead>
        <tr>
            <th>Course Code</th>
            <th>Course Name</th>
            <th>Credits</th>
            <th>Test Type</th>
            <th>Weight</th>
            <th>Lowest Passing Grade</th>
            <th>Best Grade</th>
            <th>Final Grade</th>
            <th>Passed At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            @foreach($course->tests as $test)
                <tr>
                    <td>{{ $test->course->cu_code }}</td>
                    <td>{{ $test->course->name }}</td>
                    <td>{{ $test->course->credits }}</td>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->weighing_factor }}</td>
                    <td>{{ $test->lowest_passing_grade }}</td>
                    <td>{{ $test->best_grade }}</td>

                    <td>{{ $test->course->finalGrade }}</td>
                    <td>{{ $test->course->passed_at }}</td>
                </tr>
            @endforeach
        @endforeach
        </tbody>
    </table>
    <div class="box">
        <h1 class="is-size-4">Total ECs: {{$course->totalECs}}</h1>
        <div class="is-flex is-justify-content-center">
            <a href="{{route('tests.edit')}}" class="button has-background-warning">Edit</a>
        </div>
    </div>

</x-main>
