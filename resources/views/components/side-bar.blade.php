<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                            autocomplete="on">
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                        <ul>
                            @if ($recentPosts)
                                @forelse ($recentPosts as $recentPost)

                                    <li><a href="/posts/{{ $recentPost->slug }}">
                                            <h5>{{ $recentPost->title }}</h5>
                                            <span>{{ $recentPost->formattedPublishedAt }}</span>
                                        </a></li>
                                @empty

                                @endforelse
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Categories</h2>
                    </div>
                    <div class="content">
                        <ul>
                            @forelse ($categories as $category)
                                <li><a href="/posts/category/{{ $category->id }}"> - {{ $category->name }}</a></li>
                            @empty
                                <p>No categories found</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">PSD</a></li>
                            <li><a href="#">Responsive</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>