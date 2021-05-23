@extends('layouts.app')
@section('content')


<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/shop_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/frontend/styles/shop_responsive.css')}}">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

	
		
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">categories</div>
								</div>

								<ul class="cat_menu">
									<li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
									<li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
									<li class="hassubs">
										<a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Smartphones<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
									<li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
								</ul>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li>
												<a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Smartphones</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<ul class="sidebar_categories">
								<li><a href="#">Computers & Laptops</a></li>
								<li><a href="#">Cameras & Photos</a></li>
								<li><a href="#">Hardware</a></li>
								<li><a href="#">Smartphones & Tablets</a></li>
								<li><a href="#">TV & Audio</a></li>
								<li><a href="#">Gadgets</a></li>
								<li><a href="#">Car Electronics</a></li>
								<li><a href="#">Video Games & Consoles</a></li>
								<li><a href="#">Accessories</a></li>
							</ul>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #0e8ce4;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">

							

							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<ul class="brands_list">
								@foreach($brands as $row)
								@php
								$brand=DB::table('brands')->where('id',$row->brand_id)->first();
								@endphp
								<li class="brand"><a href="">{{$brand->brand_name}}</a></li>
							
							</ul>
							@endforeach
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid row">
							<div class="product_grid_border"></div>
                               @foreach($products as $row)
						
							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{asset($row->image_one)}}"style="height: 100px", width="100px" alt=""></div>
								<div class="product_content">

									       @if($row->discount_price == NULL)
                                                <br><span class="text-danger"><b> ${{ $row->selling_price }} </b></span>
                                            @else
                                             <div class="product_price discount">${{ $row->discount_price }}<span>${{ $row->selling_price }}</span></div>
                                            @endif

									<div class="product_name"><div><a href="{{ url('product/details/'.$row->id.'/'.$row->product_name) }}" tabindex="0">{{$row->product_name}}</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								   <button  
                                               class="addwishlist" data-id="{{ $row->id }}"> 
                                               <div class="product_fav">
                                                  <i class="fa fa-heart text-info"></i>  
                                               </div>
                                            </button>

								<ul class="product_marks">
									  <ul class="product_marks">
                                                 @if($row->discount_price == NULL)
                                                 <li class="product_mark product_new" style="background: green;">NEW</li>

                                                 @else
                                                @php
                                                $amount=$row->selling_price - $row->discount_price;
                                                $discount=$amount/$row->selling_price * 100;
                                                @endphp 
                                                 <li class="product_mark product_new" style="background: red;">{{ intval($discount) }}%</li>
                                               
                                           
                                                </li>
                                                 @endif
                                                
                                               
                                            </ul>
								</ul>
							</div>

						@endforeach

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								{{$products->links()}}
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_1.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_2.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_3.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_4.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_5.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_6.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_7.jpg')}}" alt=""></div></div>
<div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{asset('public/frontend/images/brands_8.jpg')}}" alt=""></div></div>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->



	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						<div class="logos ml-sm-auto">
							<ul class="logos_list">
								<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="{{asset('public/frontend/js/shop_custom.js')}}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
      $(document).ready(function() {
            $('.addwishlist').on('click', function(){  
              var id = $(this).data('id');
              if(id) {
                 $.ajax({
                     url: "{{  url('/add/wishlist/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                       const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000
                        })

                       if($.isEmptyObject(data.error)){
                            Toast.fire({
                              type: 'success',
                              title: data.success
                            })
                       }else{
                             Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                       }

                     },
                    
                 });
             } else {
                 alert('danger');
             }
              e.preventDefault();
         });
     });

</script>
@endsection