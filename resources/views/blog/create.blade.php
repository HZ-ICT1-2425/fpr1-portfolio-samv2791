<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a id="active" href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('blog.store')}}" method="POST">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>
            <input type="text" class="input" name="title">
        </div>

        <div class="field">
            <label for="slug" class="label">Slug</label>
            <input type="text" class="input" name="slug">
        </div>

        <div class="field">
            <label for="body" class="label">Body</label>
            <input type="text" class="input" name="body">
        </div>

        <button type="submit" class="button has-background-success">Create</button>
    </form>
</x-main>
