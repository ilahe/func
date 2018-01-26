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
						<h1>Blog Post</h1>
					</div>
				</div>
			</div>
		</section>

		<div class="container">

			<div class="row">

				@foreach($find as $find)

				<div class="col-lg-9">
					<div class="blog-posts single-post">

						<article class="post post-large blog-single-post">
							<div class="post-image">
								<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
									<div>
										<div class="img-thumbnail d-block">
											<img class="img-fluid" src="img/blog/blog-image-1.jpg" alt="">
										</div>
									</div>

								</div>
							</div>

							<div class="post-date">
								<span class="day">{{$find->created_at}}</span>
								<span class="month">{{$find->created_at}}</span>
							</div>

							<div class="post-content">

								<h2><a href="">{{$blog->name}}</a></h2>

								<div class="post-meta">
									<span><i class="fa fa-user"></i> By <a href="#">{{$blog->author->name}}</a> </span>
									<span><i class="fa fa-tag"></i>@foreach ($blog->tag as $tag)<a href="#">{{$tag->name}},</a>@endforeach</span>
									<span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
								</div>

								<p>{{$blog->info}}</p>		

								<div class="post-block post-share">
									<h3 class="heading-primary"><i class="fa fa-share"></i>Share this post</h3>

									<!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style ">
										<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
										<a class="addthis_button_tweet"></a>
										<a class="addthis_button_pinterest_pinit"></a>
										<a class="addthis_counter addthis_pill_style"></a>
									</div>
									<script type="text/javascript" src="../../../s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
									<!-- AddThis Button END -->

								</div>

								<div class="post-block post-author clearfix">
									<h3 class="heading-primary"><i class="fa fa-user"></i>Author</h3>
									<div class="img-thumbnail d-block">
										<a href="blog-post.html">
											<img src="img/avatars/avatar.jpg" alt="">
										</a>
									</div>
									<p><strong class="name"><a href="#">John Doe</a></strong></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
								</div>

								<div class="post-block post-comments clearfix">
									<h3 class="heading-primary"><i class="fa fa-comments"></i>Comments (3)</h3>

									<ul class="comments">
										<li>
											<div class="comment">
												<div class="img-thumbnail d-none d-sm-block">
													<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
												</div>
												<div class="comment-block">
													<div class="comment-arrow"></div>
													<span class="comment-by">
														<strong>John Doe</strong>
														<span class="float-right">
															<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
														</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
													<span class="date float-right">November 12, 2017 at 1:38 pm</span>
												</div>
											</div>

											<ul class="comments reply">
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<span class="date float-right">November 12, 2017 at 1:38 pm</span>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-thumbnail d-none d-sm-block">
															<img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
														</div>
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-right">
																	<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
																</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<span class="date float-right">November 12, 2017 at 1:38 pm</span>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment">
												<div class="img-thumbnail d-none d-sm-block">
													<img class="avatar" alt="" src="img/avatars/avatar.jpg">
												</div>
												<div class="comment-block">
													<div class="comment-arrow"></div>
													<span class="comment-by">
														<strong>John Doe</strong>
														<span class="float-right">
															<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
														</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<span class="date float-right">November 12, 2017 at 1:38 pm</span>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<div class="img-thumbnail d-none d-sm-block">
													<img class="avatar" alt="" src="img/avatars/avatar.jpg">
												</div>
												<div class="comment-block">
													<div class="comment-arrow"></div>
													<span class="comment-by">
														<strong>John Doe</strong>
														<span class="float-right">
															<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
														</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<span class="date float-right">November 12, 2017 at 1:38 pm</span>
												</div>
											</div>
										</li>
									</ul>

								</div>

								<div class="post-block post-leave-comment">
									<h3 class="heading-primary">Leave a comment</h3>

									<form action="#" method="post">
										<div class="form-row">
											<div class="form-group col-lg-6">
												<label>Your name *</label>
												<input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
											</div>
											<div class="form-group col-lg-6">
												<label>Your email address *</label>
												<input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<label>Comment *</label>
												<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="Post Comment" class="btn btn-primary btn-lg" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>

							</div>
						</article>

					</div>
				</div>

				@endforeach

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