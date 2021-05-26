<div class="owl-banner owl-carousel">
    @if ($randomPosts)
        @foreach ($randomPosts as $randomPost)

            <div class="item">
                <img src="/images/banner-item-01.jpg" alt="">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>Fashion</span>
                        </div>
                        <a href="/posts/{{ $randomPost->slug }}">
                            <h4>{{ $randomPost->title }}</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">{{ $randomPost->user->name }}</a></li>
                            <li><a href="#">{{ $randomPost->formattedPublishedAt }}</a></li>
                            <li><a href="#">12 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
