@extends('frontend.app')


@section('icerik')

	<div role="main" class="main">

		<section class="page-header">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active">Blog</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h1>Medium Image</h1>
					</div>
				</div>
			</div>
		</section>

		<div class="container">

			<div class="row">
				<div class="col-lg-9">
					<div class="blog-posts">

						@foreach($blogs as $blog)

						<article class="post post-medium">
							<div class="row">

								<div class="col-lg-5">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
											<div>
												<div class="img-thumbnail d-block">
													<img class="img-fluid" src="img/blog/blog-image-1.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-7">

									<div class="post-content">

										<h2><a href="/blog-details/{{$blog->id}}">{{$blog->name}}</a></h2>
										<p>{{$blog->info_thumb}} [...]</p>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="post-meta">
										<span><i class="fa fa-calendar"></i> {{$blog->created_at->diffForHumans()}} </span>
										<span><i class="fa fa-user"></i> By <a href="#">{{$blog->author->name}}</a> </span>
										<span><i class="fa fa-tag"></i>@foreach ($blog->tag as $tag)<a href="#">{{$tag->name}},</a>@endforeach</span>
										<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block d-md-inline-block float-md-right mt-3 mt-md-0"><a href="/blog-details/{{$blog->id}}" class="btn btn-xs btn-primary">Read more...</a></span>
									</div>
								</div>
							</div>

						</article>

						@endforeach

						<ul class="pagination float-right">
							<li class="page-item"><a class="page-link" href="#">«</a></li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">»</a></li>
						</ul>

					</div>
				</div>

				<div class="col-lg-3">
					<aside class="sidebar">
					
						<form>
							<div class="input-group input-group-4">
								<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					
						<hr>
					
						<h4 class="heading-primary">Categories</h4>
						<ul class="nav nav-list flex-column mb-5">
							<li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
							<li class="nav-item">
								<a class="nav-link active" href="#">Photos (4)</a>
								<ul>
									<li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
									<li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
									<li class="nav-item"><a class="nav-link" href="#">People</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
						</ul>
					
						<div class="tabs mb-5">
							<ul class="nav nav-tabs">
								<li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
								<li class="nav-item"><a class="nav-link" href="#recentPosts" data-toggle="tab">Recent</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="popularPosts">
									<ul class="simple-post-list">
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Odiosters Nullam Vitae</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="tab-pane" id="recentPosts">
									<ul class="simple-post-list">
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-2.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-3.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Odiosters Nullam Vitae</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
										<li>
											<div class="post-image">
												<div class="img-thumbnail d-block">
													<a href="blog-post.html">
														<img src="img/blog/blog-thumb-1.jpg" alt="">
													</a>
												</div>
											</div>
											<div class="post-info">
												<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
												<div class="post-meta">
													 Jan 10, 2017
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					
						<hr>
					
						<h4 class="heading-primary">About Us</h4>
						<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
					
					</aside>
				</div>
			</div>

		</div>

	</div>

@endsection

@section('css')

@endsection

@section('js')

@endsection

