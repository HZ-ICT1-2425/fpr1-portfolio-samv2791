<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a id="active" href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>

    <h1 class="title">Create FAQ</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <br>
    @endif

    <form action="{{route('faq.store')}}" method="POST">
        @csrf
        <div class="field">
            <label for="question" class="label">Question</label>
            <input type="text" name="question" class="input" value="{{old('question') ? old('question') : null}}">
        </div>

        <div class="field">
            <label for="answer" class="label">Answer</label>
            <input type="text" name="answer" class="input" value="{{old('answer') ? old('answer') : null}}">
        </div>

        <div class="field">
            <label for="link" class="label">Link</label>
            <input type="text" name="link" class="input" value="{{old('link') ? old('link') : null}}">
        </div>

        <button type="submit" class="button has-background-success">Create</button>
    </form>
</x-main>
