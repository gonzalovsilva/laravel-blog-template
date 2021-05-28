<x-layout title="Posts">
    <!-- Page Content -->
    <x-top-banner>
        <h4>Recent Posts</h4>
        <h2>Our Recent Blog Entries</h2>
    </x-top-banner>

    <x-call-to-action></x-call-to-action>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            @if ($posts->total())
                                <x-post-list :posts='$posts' :pagination=true class="col-lg-6"></x-post-list>
                            @else
                                <div class="col-lg-12">
                                    @switch($filter)
                                        @case('category')
                                            <p>No posts found in this category</p>
                                        @break
                                        @case('tag')
                                            <p>No posts found with this tag</p>
                                        @break

                                    @endswitch
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <x-side-bar :id='$id' :categories='$categories' :tags='$tags' :recentPosts='$recentPosts'></x-side-bar>
            </div>
        </div>
    </section>
</x-layout>
