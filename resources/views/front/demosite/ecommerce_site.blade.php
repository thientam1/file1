@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>ECOMMERCE SITE</b></h1>
</div>
  <main class="container">
    <div class=" row" style="padding: 50px;">
      <article class="col-lg-9 col-md-12">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <a href="./product-details.html">
              <div class=" product-item">
                <div class="product-item-header">
                  <img src="front/anh/product/Samsung Galaxy S8 Plus.png" alt="">
                </div>
                <div class="product-item-body">
                  <h5 class="black">Samsung Galaxy S8 Plus</h5>
                  <p>$100</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/Samsung Galaxy Note 8.png " alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">Samsung Galaxy Note 8</h5>
                <p>$100</p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/Samsung Galaxy S9.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">Samsung Galaxy S9</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/Samsung Galaxy S9 Plus.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">Samsung Galaxy S9 Plus</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/iPhone X.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">iPhone X</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/iPhone XR.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">iPhone XR</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/iPhone XS.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">iPhone XS</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class=" product-item">
              <div class="product-item-header">
                <img src="front/anh/product/iPhone XS Max.png" alt="">
              </div>
              <div class="product-item-body">
                <h5 class="black">iPhone XS Max</h5>
                <p>$100</p>
              </div>
            </div>
          </div>
        </div>
      </article>
      <aside class="col-lg-3 col-md-12 ">
        <div class="product-search">
          <input class="w-100" type="text" placeholder="search">
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <section class="Categories">
          <h4>Categories</h4>
          <a href="" class="space-bt active">
            <div>All</div>
            <div>(08)</div>
          </a>
          <a href="" class="space-bt active">
            <div>Apple</div>
            <div>(04)</div>
          </a>
          <a href="" class="space-bt active">
            <div>Samsung</div>
            <div>(04)</div>
          </a>
          <a href="" class="space-bt active">
            <div>Xiaomi</div>
            <div>(00)</div>
          </a>
          <a href="" class="space-bt active">
            <div>Other</div>
            <div>(00)</div>
          </a>
        </section>
        <section>
          <h4>Filter by Price</h4>

          <div class="wrapper ">
            <div class="container">
              <input type="range" min="0" max="2500" value="500" id="slider-1" oninput="slideOne()">
              <input type="range" min="0" max="2500" value="2000" id="slider-2" oninput="slideTwo()">

              <div class="slider ">
                <div class="track"></div>
                <div class="range"></div>
                <div class="thumb left"></div>
                <div class="thumb right"></div>
              </div>
            </div>
            <div class="values" style="display: flex;">
              <p>Price: </p>
              <b> $<span id="range1">
                  0
                </span>
                <span> &dash; $</span>
                <span id="range2">
                  2500
                </span></b>
            </div>
          </div>
        </section>
        <section>
          <h4>Popular Products</h4>
          <div class="row Popular-Products ">
            <img src="front/anh/product/iPhone XS Max.png" alt="" class="col-lg-4">
            <div class="col-lg-8">
              <h6 class="black">iPhone XS Max</h6>
              <p>$100</p>
            </div>
          </div>
          <div class="row Popular-Products ">
            <img src="front/anh/product/iPhone XS Max.png" alt="" class="col-lg-4">
            <div class="col-lg-8">
              <h6 class="black">iPhone XS Max</h6>
              <p>$100</p>
            </div>
          </div>
          <div class="row Popular-Products ">
            <img src="front/anh/product/iPhone XS Max.png" alt="" class="col-lg-4">
            <div class="col-lg-8">
              <h6 class="black">iPhone XS Max</h6>
              <p>$100</p>
            </div>
          </div>
        </section>
      </aside>

    </div>
  </main>
@endsection
