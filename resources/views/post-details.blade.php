<x-layout title="Posts">
    <!-- Page Content -->
    <x-top-banner>
        <h4>Post Details</h4>
        <h2>Single blog post</h2>
    </x-top-banner>

    <x-call-to-action></x-call-to-action>

    <section class="blog-posts grid-system">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="all-blog-posts">
                        <div class="row">
                            <x-post-list :posts='$posts' :details=true class="col-lg-12"></x-post-list>

                            <x-comment-list :comments='$comments' ></x-comment-list>

                            {{-- Begin Comment form --}}
                            <div class="col-lg-12">
                                <div class="sidebar-item submit-comment">
                                    <div class="sidebar-heading">
                                        <h2>Your comment</h2>
                                    </div>
                                    <div class="content">
                                        <form id="comment" action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="name" type="text" id="name" placeholder="Your name"
                                                            required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <fieldset>
                                                        <input name="email" type="text" id="email"
                                                            placeholder="Your email" required="">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <fieldset>
                                                        <input name="subject" type="text" id="subject"
                                                            placeholder="Subject">
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <textarea name="message" rows="6" id="message"
                                                            placeholder="Type your comment" required=""></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-lg-12">
                                                    <fieldset>
                                                        <button type="submit" id="form-submit"
                                                            class="main-button">Submit</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End Comment form --}}
                        </div>
                    </div>
                </div>


                <x-side-bar :categories='$categories' :tags='$tags' :recentPosts='$recentPosts'></x-side-bar>

            </div>
        </div>
    </section>
</x-layout>
