@extends('layouts.client')
@section('content')
<!--************************************
				Inner Banner Start
		*************************************-->
<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="tg-innerbannercontent">
					<h1>Authors</h1>
					<ol class="tg-breadcrumb">
						<li><a href="{{ route('home') }}">Trang chủ</a></li>
						<li><a href="{{ route('home.author') }}">Authors</a></li>
						<li class="tg-active">{{ $author->name }}</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!--************************************
				Inner Banner End
		*************************************-->
<!--************************************
				Main Start
		*************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
	<!--************************************
					Author Detail Start
			*************************************-->
	<div class="tg-sectionspace tg-haslayout">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="tg-authordetail">
						<figure class="tg-authorimg">
							<img src="{{ Storage::url($author->image) }}" alt="image description">
						</figure>
						<div class="tg-authorcontentdetail">
							<div class="tg-sectionhead">
								<h2><span>{{ $author->books()->count() }} Sách đã xuất bản</span>{{ $author->name }}</h2>
								<ul class="tg-socialicons">
									<li class="tg-facebook"><a href="{{ $author->facebook }}"><i class="fa fa-facebook"></i></a></li>
									<li class="tg-twitter"><a href="{{ $author->twitter }}"><i class="fa fa-twitter"></i></a></li>
									<li class="tg-linkedin"><a href="{{ $author->instagram }}"><i class="fa fa-linkedin"></i></a></li>

								</ul>
							</div>
							<div class="tg-description">
								<p>{{ $author->biography }}</p>
							</div>
							<div class="tg-booksfromauthor">
								<div class="tg-sectionhead">
									<h2>Những cuốn sách tác giả đã xuất bản</h2>
								</div>
								<div class="row">
                                    @foreach($author->books as $book)
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
										<div class="tg-postbook">
											<figure class="tg-featureimg">
												<div class="tg-bookimg">
													<div class="tg-frontcover"><img src="{{ Storage::url($book->image_url) }}" alt="image description"></div>
													<div class="tg-backcover"><img src="{{ Storage::url($book->image_url) }}" alt="image description"></div>
												</div>
												<a class="tg-btnaddtowishlist" href="javascript:void(0);">
													<i class="icon-heart"></i>
													<span>Thêm vào yêu thích</span>
												</a>
											</figure>
											<div class="tg-postbookcontent">
												<ul class="tg-bookscategories">
                                                    @foreach($book->categories as $category)
                                                        <li><a href="javascript:void(0);">{{ $category->name }}</a></li>
                                                    @endforeach
												</ul>
{{--												<div class="tg-themetagbox"><span class="tg-themetag">sale</span></div>--}}
												<div class="tg-booktitle">
													<h3><a href="{{ route('home.book-detail',['id' => $book->id]) }}">{{ $book->title }}</a></h3>
												</div>
												<span class="tg-bookwriter">By: <a href="javascript:void(0);">{{ $book->author->name }}</a></span>
												<span class="tg-stars"><span></span></span>
												<span class="tg-bookprice">
													<ins>{{ number_format($book->price, 0, '.', ',') }} VNĐ</ins>
												</span>
												<a class="tg-btn tg-btnstyletwo" href="javascript:void(0);">
													<i class="fa fa-shopping-basket"></i>
													<em>Thêm vào giỏ</em>
												</a>
											</div>
										</div>
									</div>
                                    @endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
					Author Detail End
			*************************************-->
</main>
<!--************************************
				Main End
		*************************************-->
@endsection
