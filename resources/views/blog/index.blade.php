<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a id="active" href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>
    <div class="blogMain">
        <article id="blogHeader">
            <h1 style="margin-bottom: 55px;">Blog</h1>
            <a href="{{route('blog.create')}}" class="button has-background-primary">Create Post</a>
        </article>
        @foreach($posts as $post)
            <br>
            <a href="{{route('blog.show', ['blog' => $post])}}">
                <div class="box">
                    <h1>{{$post->title}}</h1>
                    <h1>{{$post->slug}}</h1>
                </div>
            </a>
            <br>
            @endforeach
            </article>
    </div>
</x-main>
