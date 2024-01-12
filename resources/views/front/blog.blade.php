@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>BLOGS</b></h1>
  </div>
  <div class="blog-banner ">
    <div class="container">
    <h2>Sign up to get our FREE SELENIUM TEST AUTOMATION Code.</h2><br>
    <h2>Sign up to join in Q&A forum with our TEST AUTOMATION ARCHITECT team.</h2><br>
    <h2>Sign up to receive Selenium Tips & ebooks.</h2>
    <div class="input-group">
      <input type="text" class="header_search_input" placeholder="Enter your email">
      <button class="btn btn-primary">Sign Up</button>
    </div>
  </div>
  </div>
  <main class="container">
    <div class="row">
      <article class="col-lg-8">
        <section class="content">
          <h1>How Did I Learn Selenium When I Have A Full-time Job</h1>
          <div class="content-head">
            <div>
              <img src="./anh/Frieren.png" alt="">
            <p>by <a href="">Frieren</a></p>
            </div>
          <p>23 Dec, 2019</p>
          </div>
          <img src="./anh/Image.png" alt="">
          <p><b>In this article I will tell you my experience to learn Selenium Webdriver and Java programming when I'm working with a full-time job. You will learn: <br>
            - How to start your learning journey <br>
            - How to learn faster in small time <br>
            -	How to learn Java language (and yes, it's hard!) <br>
            -	How to make sure you can achieve your learning goal <br><br>
            Let's get started.
          </b>
          </p>
          <div class="content-head" >
            <div><h2>420</h2>
              <p>Comment</p>
            </div>
              <a href="./blog2.html" class="btn btn-danger btn-lg btn-block w-100" id="Continue">Continue Reading</a>
          </div>
          <hr class="underlined">
        </section>
        <section class="content">
          <h1>Can't Create Selenium Automation Framework From Scratch! You're Not Alone!</h1>
          <div class="content-head">
            <div>
              <img src="./anh/Frieren.png" alt="">
            <p>by <a href="">Frieren</a></p>
            </div>
          <p>23 Dec, 2019</p>
          </div>
          <img src="./anh/Image2.png" alt="">
          <p><b>In this article I will tell you my experience to create Selenium Automation Framework From Scratch. You will learn: <br>
            - Why you need an Automation Framework <br>
            - Why it is very hard to implement a framework <br>
            -	How to start building Selenium Automation Framework <br>
            -	How to achieve your goal of having a correct and good Automation Framework <br><br>
            Let's get started.
          </b>
          </p>
          <div class="content-head" >
            <div><h2>320</h2>
              <p>Comment</p>
            </div>
              <button class="btn btn-dark btn-lg btn-block w-100" type="button">Unlock now<i class='bx bxs-lock justify-content-md-end'></i></button>
          </div>
          <hr class="underlined">
        </section>
      </article>
      <aside class=" col-lg-4">

          <div class="blog-search">
            <input  class="w-100" type="text" placeholder="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
          <section class="blog-section">
            <h3>Popular articles</h3>
            <hr class="underlined">
            <h5><a href="" class="">QA Analyst salary vs Test Automation Developer or QA Engineer salary.</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">
            <h5><a href="">The fastest way to learn Selenium in Java language.</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">
            <h5><a href="">Can't create Selenium Automation Framework from scratch! You're not alone!</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">

          </section>
          <section class="blog-section">
            <h3>RECENT articles</h3>
            <hr class="underlined">
            <h5><a href="" class="">QA Analyst salary vs Test Automation Developer or QA Engineer salary.</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">
            <h5><a href="">The fastest way to learn Selenium in Java language.</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">
            <h5><a href="">Can't create Selenium Automation Framework from scratch! You're not alone!</a></h5>
            <p>23 July, 2018</p>
            <hr class="underlined">
          </section>
          <section class="blog-section">
            <h3>Keywords</h3>
            <hr>
            <button class="btn btn-outline-primary">Ideas</button>
            <button class="btn btn-outline-primary">Education</button>
            <button class="btn btn-outline-primary">Design</button>
            <button class="btn btn-outline-primary active">Development</button>
            <button class="btn btn-outline-primary">SELENIUM</button>
          </section>
      </aside>
    </div>
    <div class="blog-bot">
      <button class="btn btn-primary btn-lg btn-block w-50 center">Older posts</button>
    </div>

  </main>
@endsection
