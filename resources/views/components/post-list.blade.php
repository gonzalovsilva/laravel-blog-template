@if ($posts)
    @foreach ($posts as $post)
        <div {{ $attributes }}>
            <div class="blog-post">
                <div class="blog-thumb">
                    <img src="/images/blog-thumb-01.jpg" alt="">
                </div>
                <div class="down-content">
                    <span>Lifestyle</span>
                    @if ($details)
                        <h4>{{ $post->title }}</h4>
                    @else
                        <a href="/posts/{{ $post->slug }}">
                            <h4>{{ $post->title }}</h4>
                        </a>
                    @endif
                    <ul class="post-info">
                        <li><a href="#">{{ $post->user->name }}</a></li>
                        <li><a href="#">{{ $post->formattedPublishedAt }}</a></li>
                        <li><a href="#">12 Comments</a></li>
                    </ul>
                    @if ($details)
                        <p>{{ $post->body }}</p>
                    @else
                        <p>{{ $post->excerpt }}</p>
                    @endif
                    <div class="post-options">
                        <div class="row">
                            @if ($details)
                            <div class="col-lg-6">
                            @else
                            <div class="col-lg-12">
                            @endif
                            <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Best Templates</a>,</li>
                                <li><a href="#">TemplateMo</a></li>
                            </ul>
                        </div>
                        @if ($details)
                            <div class="col-6">
                                <ul class="post-share">
                                    <li><i class="fa fa-share-alt"></i></li>
                                    <li><a href="#">Facebook</a>,</li>
                                    <li><a href="#"> Twitter</a></li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    @if ($pagination)
        <div class="col-lg-12">
            {{ $posts->links('pagination.custom') }}
        </div>
    @endif
@endif
