@extends('layouts.guest')
@section('title')
MeccaShop | Menu Utama
@endsection
@section('container')
    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">
                <div class="item-slick1 bg-overlay1" style="background-image: url(guest/images/slide-05.jpg);"
                    data-thumb="{{ asset('guest/images/thumb-01.jpg') }}" data-caption="Women’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Women Collection 2018
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    New arrivals
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="/allitems"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url(guest/images/slide-06.jpg);"
                    data-thumb="{{ asset('guest/images/thumb-02.jpg') }}" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Men New-Season
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    Jackets & Coats
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="/allitems"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 bg-overlay1" style="background-image: url(guest/images/slide-07.jpg);"
                    data-thumb="{{ asset('guest/images/thumb-03.jpg') }}" data-caption="Men’s Wear">
                    <div class="container h-full">
                        <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                                <span class="ltext-202 txt-center cl0 respon2">
                                    Men Collection 2018
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                                <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                    NEW SEASON
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="/allitems"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrap-slick1-dots p-lr-10"></div>
        </div>
    </section>


    <!-- Banner -->
    {{-- <div class="sec-banner bg0 p-t-95 p-b-55">
        <div class="container">
            <h1>Category :</h1>
            <p></p>
            <div class="row">
                <div class="col-md-6 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('guest/images/banner-04.jpg') }}" alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Women
                                </span>

                                <span class="block1-info stext-102 trans-04">
                                    New Trend
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('guest/images/banner-05.jpg') }}" alt="IMG-BANNER">

                        <a href="product.html"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    Men
                                </span>

                                <span class="block1-info stext-102 trans-04">
                                    New Trend
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                @foreach ($categories as $category)
                <div class="col-md-6 col-lg-3 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="{{ asset('storage/'. $category->gambar) }}" alt="IMG-BANNER">

                        <a href="/allitems?category={{ $category->slug }}"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8">
                                    {{ $category->nama }}
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div class="sec-banner bg0">
        <div class="flex-w flex-c-m">
            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('guest/images/banner-04.jpg') }}" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Women
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2018
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('guest/images/banner-05.jpg') }}" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Men
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                Spring 2018
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="size-202 m-lr-auto respon4">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{ asset('guest/images/banner-06.jpg') }}" alt="IMG-BANNER">

                    <a href="product.html"
                        class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Bags
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                New Trend
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="sec-product bg0 p-t-100 p-b-50">
        <div class="container">
            <div class="p-b-32">
                <h3 class="ltext-105 cl5 txt-center respon1">
                    KATEGORI
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                {{-- <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Best Seller</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#featured" role="tab">Featured</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Top Rate</a>
                    </li>
                </ul> --}}

                <!-- Tab panes -->
                <div class="tab-content p-t-50">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <!-- Slide2 -->
                        <div class="wrap-slick2">
                            <div class="slick2">
                                @foreach ($categories as $category)


                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="{{ asset('storage/' .  $category->gambar) }}" alt="IMG-PRODUCT">
                                            <a href="/allitems?category={{ $category->slug }}"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                                Lihat
                                            </a>
                                        </div>
                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 text-dark">
                                                    {{ $category->nama }}
                                                </a>
                                            </div>

                                            {{-- <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-02.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Herschel supply
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $35.31
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-03.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Only Check Trouser
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $25.50
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-04.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Classic Trench Coat
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $75.00
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-05.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Front Pocket Jumper
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $34.75
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-06.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Vintage Inspired Classic
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $93.20
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-07.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Shirt in Stretch Cotton
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $52.66
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="images/product-08.jpg" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Pieces Metallic Printed
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $18.96
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <!-- - -->
                    {{-- <div class="tab-pane fade" id="featured" role="tabpanel">
                        <!-- Slide2 -->
                        <div class="wrap-slick2">
                            <div class="slick2">
                                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-pic hov-img0">
                                            <img src="{{ asset('guest/images/product-09.jpg') }}" alt="IMG-PRODUCT">

                                            <a href="#"
                                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                Quick View
                                            </a>
                                        </div>

                                        <div class="block2-txt flex-w flex-t p-t-14">
                                            <div class="block2-txt-child1 flex-col-l ">
                                                <a href="product-detail.html"
                                                    class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                    Converse All Star Hi Plimsolls
                                                </a>

                                                <span class="stext-105 cl3">
                                                    $75.00
                                                </span>
                                            </div>

                                            <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#"
                                                    class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04"
                                                        src="images/icons/icon-heart-01.png" alt="ICON">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    {{-- <section class="bg0 p-t-23 p-b-130">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5">
                    Product Overview
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        All Products
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".women">
                        Women
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".men">
                        Men
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".bag">
                        Bag
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shoes">
                        Shoes
                    </button>

                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".watches">
                        Watches
                    </button>
                </div>

                <div class="flex-w flex-c-m m-tb-10">
                    <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                        <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                        <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                        Search
                    </div>
                </div>

                <!-- Search product -->
                <div class="dis-none panel-search w-full p-t-10 p-b-15">
                    <div class="bor8 dis-flex p-l-15">
                        <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                            <i class="zmdi zmdi-search"></i>
                        </button>

                        <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product"
                            placeholder="Search">
                    </div>
                </div>
            </div>

            <div class="row isotope-grid">
                @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->

                        <div class="block2">
                            <div class="block2-pic hov-img0 label-new" data-label="New">
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="IMG-PRODUCT">
                                <a href="#"
                                    class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>

                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{ $item->nama }}
                                    </a>

                                    <span class="stext-105 cl3">
                                        Rp.{{ $item->harga }}
                                    </span>
                                </div>

                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04"
                                            src="{{ asset('guest/images/icons/icon-heart-01.png') }}" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                            src="{{ asset('guest/images/icons/icon-heart-02.png') }}" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($items->count())
                <div class="d-flex justify-content-center">
                    {{ $items->links() }}
                </div>
            @else
                <h1 class="text-center fs-4">No Post Found</h1>
            @endif()

        </div>
    </section> --}}
@endsection
