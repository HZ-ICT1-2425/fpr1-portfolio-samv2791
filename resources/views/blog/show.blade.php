<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a id="active" href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>

    <h1 class="title">{{$post->title}}</h1>
    <span class="blogSubText">{{$post->slug}}</span>
    <br>
    <span class="blogMainText">{{$post->body}}</span>
    <br>
    <a href="{{route('blog.edit', ['blog' => $post])}}" class="button has-background-success">Edit</a>
    <form action="{{route('blog.destroy', ['blog' => $post])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="button has-background-danger">Delete</button>
    </form>
</x-main>
