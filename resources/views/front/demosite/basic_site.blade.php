@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>BASIC SITE</b></h1>
  </div>
  <main style="padding: 0 200px;">
    <article class="container">
      <section>
        <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'city1')">City 1</button>
          <button class="tablinks" onclick="openCity(event, 'city2')">City 2</button>
          <button class="tablinks" onclick="openCity(event, 'city3')">City 3</button>
          <button class="tablinks" onclick="openCity(event, 'city4')">City 4</button>
        </div>

        <!-- Tab content -->
        <div id="city1" class="tabcontent" style="display: block;">
          <p>Description 1
            <br>
            Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed platea vulputate
            nisl
            porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat. Neque dictum quis.
            <br>
            A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in tortor dapibus rhoncus
            pretium
            nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet, viverra. Curabitur fermentum mollis
            libero.
            Diam neque, nam sem in eu tortor.
            <br>
            Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames. Nostra sodales ligula
            nec
            habitasse integer class ad taciti nulla sollicitudin iaculis potenti condimentum convallis sollicitudin.
            Nibh
            aliquet.
          </p>
        </div>

        <div id="city2" class="tabcontent">
          <p>Description 2
            <br>
            Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed platea vulputate
            nisl
            porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat. Neque dictum quis.
            <br>
            A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in tortor dapibus rhoncus
            pretium
            nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet, viverra. Curabitur fermentum mollis
            libero.
            Diam neque, nam sem in eu tortor.
            <br>
            Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames. Nostra sodales ligula
            nec
            habitasse integer class ad taciti nulla sollicitudin iaculis potenti condimentum convallis sollicitudin.
            Nibh
            aliquet.
          </p>
        </div>

        <div id="city3" class="tabcontent">
          <p>Description 3
            <br>
            Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed platea vulputate
            nisl
            porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat. Neque dictum quis.
            <br>
            A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in tortor dapibus rhoncus
            pretium
            nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet, viverra. Curabitur fermentum mollis
            libero.
            Diam neque, nam sem in eu tortor.
            <br>
            Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames. Nostra sodales ligula
            nec
            habitasse integer class ad taciti nulla sollicitudin iaculis potenti condimentum convallis sollicitudin.
            Nibh
            aliquet.
          </p>
        </div>
        <div id="city4" class="tabcontent">
          <p>Description 4
            <br>
            Imperdiet penatibus etiam massa tristique mauris elit rhoncus morbi nisl nostra eu, sed platea vulputate
            nisl
            porta tortor, felis dapibus odio ut purus sodales bibendum sociosqu mi placerat. Neque dictum quis.
            <br>
            A rhoncus, sollicitudin egestas vel quis dignissim class placerat urna malesuada in tortor dapibus rhoncus
            pretium
            nulla dui maecenas. Ad sodales tellus class felis dictum, imperdiet, viverra. Curabitur fermentum mollis
            libero.
            Diam neque, nam sem in eu tortor.
            <br>
            Magnis. Hac commodo montes interdum eu tempor non per volutpat ornare posuere fames. Nostra sodales ligula
            nec
            habitasse integer class ad taciti nulla sollicitudin iaculis potenti condimentum convallis sollicitudin.
            Nibh
            aliquet.
          </p>
        </div>
      </section>
      <section class="space-ev">
        <div class=" ">
          <p>City 1</p>
          <img src="front/anh/city-1.png" alt="">
          <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>
        </div>
        <div class="">
          <p>City 2</p>
          <img src="front/anh/city-1 (1).png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>

        </div>
        <div class="">
          <p>City 3</p>
          <img src="front/anh/city-1 (2).png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>

        </div>
        <div class="">
          <p>City 4</p>
          <img src="front/anh/city-1 (3).png" alt="">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>

        </div>
        </div>
      </section>
      <section>
        <h2 class="black">Registration Form</h2>
        <form action="">
        <div class="registration">
          <b class="col-md-2">Your Name (*)</b>
          <div>
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last name">
          </div>
        </div>
        <div class="registration">
          <b class="col-md-2">Marital Status</b>
          <div>
            <input type="radio" id="Single" name="Status" value="Single">
            <label for="Single">Single</label>
            <input type="radio" id="Married" name="Status" value="Married">
            <label for="Married">Married</label>
            <input type="radio" id="Divorced" name="Status" value="Divorced">
            <label for="Divorced">Divorced</label>
          </div>
        </div>
        <div class="registration">
          <b class="col-md-2">Hobby</b>
          <div>
            <input type="checkbox" value="Cooking">
            <label for="">Cooking</label>
            <input type="checkbox" value="Reading">
            <label for="">Reading</label>
            <input type="checkbox" value="Dancing">
            <label for="">Dancing</label>
            <input type="checkbox" value="Writing">
            <label for="">Writing</label>
          </div>
        </div>
        <div class="regis-input">
          <b>Country </b>
          <div>
            <select name="" id="" style="width: 200px;"></select>
          </div>
        </div>
        <div class="regis-input">
          <b>Your Email Address(*)</b>
          <div>
            <input type="text">
          </div>
        </div>
        <div class="regis-input">
          <b>Your Phone Number (*)</b>
          <div>
            <input type="text">
          </div>
        </div>
        <div class="regis-input">
          <b>Your Profile Picture (required)</b>
          <div>
            <input type="file" id="myfile" name="myfile" multiple><br><br>
          </div>
        </div>
        <div class="regis-input">
          <b>Your Profile Picture (required)</b>
          <div>
            <select name="" id="">
              <option value="Browser Commands">Browser Commands</option>
              <option value="Navigation Commands">Navigation Commands</option>
              <option value="Switch Commands">Switch Commands</option>
              <option value="Wait Commands">Wait Commands</option>
            </select>
          </div>
        </div>
        <div class="regis-input">
          <b>About Yourself</b>
          <div>
            <textarea name="" id="" cols="30" rows="10"></textarea>
          </div>
        </div>
        <button>submit</button>
      </form>
      </section>
    </article>
  </main>
@endsection
