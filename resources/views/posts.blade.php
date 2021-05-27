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

                            <x-post-list :posts='$posts' :pagination=true class="col-lg-6"></x-post-list>

                        </div>
                    </div>
                </div>

                <x-side-bar :categories='$categories' :recentPosts='$recentPosts'></x-side-bar>

            </div>
        </div>
    </section>
</x-layout>
