<x-layout title="Welcome">
	<!-- Page Content -->
	<!-- Banner Starts Here -->
	<div class="main-banner header-text">
		<div class="container-fluid">

			<x-owl-carousel :randomPosts='$randomPosts'></x-owl-carousel>

		</div>
	</div>
	<!-- Banner Ends Here -->

	<x-call-to-action></x-call-to-action>

	<section class="blog-posts">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="all-blog-posts">
						<div class="row">

							<x-post-list :posts='$posts' class="col-lg-12"></x-post-list>

                            <div class="col-lg-12">
								<div class="main-button">
									<a href="{{ route('posts') }}">View All Posts</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<x-side-bar :categories='$categories' :recentPosts='$recentPosts'></x-side-bar>

			</div>
		</div>
	</section>
</x-layout>
