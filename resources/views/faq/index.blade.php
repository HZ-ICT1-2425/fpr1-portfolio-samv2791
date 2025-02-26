<x-main>
    <x-slot:navbar>
        <li><a class="navfirst" href="<?=route('home')?>">Home</a></li>
        <li><a href="<?=route('profile')?>">Profile</a></li>
        <li><a href="<?=route('dashboard')?>">Dashboard</a></li>
        <li><a id="active" href="<?=route('faq.index')?>">FAQ</a></li>
        <li><a href="<?=route('blog.index')?>">Blog</a></li>
    </x-slot:navbar>
    <div>
        <h1 class="title" style="color: black">FAQ</h1>
        <a class="button has-background-success" style="margin-left: 25px" href="{{route('faq.create')}}">Create</a>
        @foreach($faqs as $faq)
            <x-faqBox :faq="$faq"></x-faqBox>
        @endforeach
    </div>
</x-main>
