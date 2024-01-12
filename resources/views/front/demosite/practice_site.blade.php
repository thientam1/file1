@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>AUTOMATION PRACTICE SITE</b></h1>
  </div>
  <main>'
    <article class="container">
      <h3 class="black"><b>Sample Iframe page</b></h3>
      <h3 class="black"><b>Test page to practice your Iframe related coding skills.</b></h3>
      <p>There are 3 Iframes in this page. You can switch between them from parent frame to child iframe.</p>
      <p>Use these frames to practice your skills.</p>
      <label for="">iframe1</label>
      <iframe src="front/iframe-1.html" width="100%" height="500" style="border:1px solid grey; box-shadow:2px 8px 16px 2px rgba(0,0,0,0.2); "></iframe> <br>
      <label for="" style="margin-top: 50px;">iframe2</label>
      <iframe src="front/iframe-2.html" frameborder="0" width="100%" height="500" style="border:1px solid grey; box-shadow:2px 8px 16px 2px rgba(0,0,0,0.2);"></iframe>
      <label for="" style="margin-top: 50px;">iframe3</label>
      <iframe src="front/anh/Handling Alerts using Selenium WebDriver.png" frameborder="0" width="100%" height="500" style="border:1px solid grey; box-shadow:2px 8px 16px 2px rgba(0,0,0,0.2);"></iframe>
    </article>
  </main>
@endsection
