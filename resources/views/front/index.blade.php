@extends('front.layout.master')
@section('body')
<main class="home">
    <div class="title container">
      <h1><b>MS.Robot</b> stands top ranked platform for learning <b>Selenium Test Automation</b></h1>
      <h5><b>Why Choose MS.Robot Over All Automation Training Websites?</b></h5>
      <div class="title-quest row">
        <div class=" col-md-6">
          <p><b>Unlike other training websites, MS.Robot provides free training tutorials but as an added benefit, you
              will have full access to all our source code, framework and full Q&A support provided by our professional
              test automation architecture team.
            </b></p>
          <p><b>Start your learning journey NOW!!!</b></p>
          <br>
          <ul>
            <li><b>Sign up to get our FREE SELENIUM TEST AUTOMATION Code.</b></li>
            <li><b>Sign up to join in Q&A forum with our TEST AUTOMATION ARCHITECT team.</b></li>
            <li><b>Sign up to receive Selenium Tips & ebooks.</b></li>
          </ul>

          <div class="input-group">
            <input type="text" class="header_search_input" placeholder="Enter your email">
            <button class="btn btn-primary">Signin</button>
          </div>
        </div>
        <div class="col-md-6">
          <img src="front/anh/hero-img.svg" alt="">
        </div>
      </div>
    </div>
    <div id="feedback"><a href="#" data-bs-toggle="modal" data-bs-target="#feedbackModal"><img
          src="./anh/feedback_icon.svg" alt="" id="Feedbackicon">Feedback</a>
      <div class="modal fade" id="feedbackModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content modal-sigin-out">
            <!-- feedback form-->
            <form action="">
              <div class="modal-header ">
                <h5 class="modal-title">Your feedback!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label for="">How do you feel about our website?</label>
                  <div class="emojis-rate">
                    <input type="radio" name="emoji" id="emoji1" value="1">
                    <label for="emoji1">
                      <img src="front/anh/emo1.png" alt="">
                      <p>hate</p>
                    </label>
                    <input type="radio" name="emoji" id="emoji2" value="2">
                    <label for="emoji2">
                      <img src="front/anh/emo2.png" alt="" >
                      <p>don't like </p>
                    </label>
                    <input type="radio" name="emoji" id="emoji3" value="3">
                    <label for="emoji3">
                      <img src="front/anh/emo3.png" alt="">
                      <p>normal</p>
                    </label>
                    <input type="radio" name="emoji" id="emoji4" value="4">
                    <label for="emoji4">
                      <img src="front/anh/emo4.png" alt="">
                      <p>like</p>
                    </label>
                    <input type="radio" name="emoji" id="emoji5" value="5">
                    <label for="emoji5">
                      <img src="front/anh/emo5.png" alt="">
                      <p>Love</p>
                    </label>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="">How like are you to recommend our company/product/service to your friends and
                    colleagues?</label>
                  <div class="ratting">
                    <div class="radio-group">
                      <label for="r0" class="">0</label>
                      <input type="radio" name="recommend" id="r0" value="0">

                    </div>
                    <div class="radio-group">
                    <label for="r1">1</label>
                    <input type="radio" name="recommend" id="r1" value="1">
                    </div>
                    <div class="radio-group">
                      <label for="r2">2</label>
                      <input type="radio" name="recommend" id="r2" value="2">
                    </div>
                    <div class="radio-group">
                      <label for="r3">3</label>
                      <input type="radio" name="recommend" id="r3" value="3">
                    </div>
                    <div class="radio-group">
                      <label for="r4">4</label>
                      <input type="radio" name="recommend" id="r4" value="4">
                    </div>
                    <div class="radio-group">
                      <label for="r5">5</label>
                      <input type="radio" name="recommend" id="r5" value="5">
                    </div>
                    <div class="radio-group">
                      <label for="r6">6</label>
                      <input type="radio" name="recommend" id="r6" value="6">
                    </div>
                    <div class="radio-group">
                      <label for="r7">7</label>
                      <input type="radio" name="recommend" id="r7" value="7">
                    </div>
                    <div class="radio-group">
                      <label for="r8">8</label>
                      <input type="radio" name="recommend" id="r8" value="8">
                    </div>
                    <div class="radio-group">
                      <label for="r9">9</label>
                      <input type="radio" name="recommend" id="r9" value="9">
                    </div>
                    <div class="radio-group">
                      <label for="r10">10</label>
                      <input type="radio" name="recommend" id="r10" value="10">
                    </div>
                  </div>
                  <span class="result">not at all</span>
                </div>
                <div class="mb-3">
                  <label for="">Tell us what you like about our website</label>
                  <input type="text" name="username" class="form-control" id="Username"
                    placeholder="The great experience">
                </div>
                <div class="mb-3">

                </div>
                <button type="button" class="btn btn-primary mx-auto w-100 mb-3">Submit</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="tutorial container ">
      <h2>Automation Tools Tutorial</h2>
      <ul>
        <div class="img-group">
          <img src="front/anh/Group 201.png" alt="">
          <p><b>Selenium basic</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 202.png" alt="">
          <p><b>Selenium advance</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 203.png" alt="">
          <p><b>Java basic</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 204.png" alt="">
          <p><b>Java advance</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 205.png" alt="">
          <p><b>Selenium Automation
              frameworks</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 206.png" alt="">
          <p><b>Locators for
              Selenium automation</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 207.png" alt="">
          <p><b>Handling Data in
              Selenium Automation</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 208.png" alt="">
          <p><b>Reports for
              Selenium Automation</b></p>
        </div>
      </ul>
      <ul>
        <div class="img-group">
          <img src="front/anh/Group 209.png" alt="">
          <p style="text-align: left;"><b>Running Selenium Automation
              (multiple browsers, platforms, environments)</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 210.png" alt="">
          <p style="text-align: left;"><b>Jenkins build & Jenkins pipeline for Selenium Automation</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 211.png" alt="">
          <p><b>Maven</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 212.png" alt="">
          <p><b>TestNG</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 213.png" alt="">
          <p><b>Log4j</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 214.png" alt="">
          <p><b>Git</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 215.png" alt="">
          <p><b>Github</b></p>
        </div>
        <div class="img-group">
          <img src="front/anh/Group 216.png" alt="">
          <p><b>Docker for Selenium</b></p>
        </div>

      </ul>
    </div>
    <div class=" source-code container">
      <div class=" row">
        <div class="macbook col-md-6">
          <h1>Source code</h1>
          <img src="front/anh/Macbook.png" alt="">
        </div>
        <div class="col-md-2"></div>
        <div class="card card-test col-md-4">
          <div class="card-body" style="margin: 20px;">
            <h6>SELENIUM TEST AUTOMATION </h6>
            <p style="color: #EC5252">FREE</p>
            <p>This source code package includes:</p>
            <ul>
              <li><img src="front/anh/selenium-icon-19 1.png" alt=""> Test Automation Framework for Selenium</li>
              <li><img src="front/anh/website 1.png" alt=""> 4 Test Cases from MS Robot Demo Sites</li>
              <li><img src="front/anh/amazon 1.png" alt=""> 3 Test Cases from Amazon Web Site</li>
              <li><img src="front/anh/java 1.png" alt=""> Javadoc for Source Code</li>
              <li><img src="front/anh/file (1) 1.png" alt=""> User Guide</li>
            </ul>
            <button class=" btn-test" style="margin-top: 20px;">Download now</button>
          </div>
        </div>
      </div>
    </div>
    <div class="guild container ">
      <div class="row">
        <div class="step col-md-5">
          <h6>Learning path for absolute beginner in programming : FREE</h6>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 1:</b> Run our SELENIUM TEST
              AUTOMATION to know what selenium automation framework is.</li>
            <li><a href="#">Download Selenium Test Automation now> </a></li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 2:</b> Start Java Basic.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 3:</b> Learn Java Advance.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 4:</b> Start Selenium Basic.
            </li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 5:</b> Learn Selenium Advance.
            </li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 6:</b> Automate Test cases by
              yourself (Using our Demo Sites & Test cases excel file).</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 7:</b> Put your automation test
              cases into github.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 8:</b> Apply for QA Analyst, QA
              Engineer, Software Developer in Test job.</li>
          </ul>
        </div>
        <div class="col-md-2">

        </div>
        <div class="step col-md-5">
          <h6>Learning path for newly graduate with java knowledge: FREE</h6>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 1:</b> Run our SELENIUM TEST
              AUTOMATION to know what selenium automation framework is.</li>
            <li><a href="#">Download Selenium Test Automation now> </a></li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 2:</b> Start Selenium Basic.
            </li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 3:</b> Learn Selenium Advance.
            </li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 4:</b> Automate Test cases by
              yourself (Using our Demo Sites & Test cases excel file).</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 5:</b> Put your automation test
              cases into github.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 6:</b> Apply for QA Analyst, QA
              Engineer, Software Developer in Test job.</li>
          </ul>
        </div>
        <div class="step col-md-5">
          <h6>Learning Path for Selenium Automation Framework: FREE</h6>
          <ul class="fa-ul">
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 1:</b> Run our SELENIUM TEST
              AUTOMATION to know what selenium automation framework is.</li>
            <li><a href="#">Download Selenium Test Automation now> </a></li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 2:</b> Understand Selenium
              Automation Framework.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 3:</b> Create Framework to run
              cross Chrome, Firefox, IE, Safari..</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 4:</b> Create Framework to run
              in multiple platforms (windows, mac os, IOS, Android).</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 5:</b> Create Framework to run
              in multiple environments.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 6:</b> Create Framework to
              report automation steps.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 7:</b> Create Framework to run
              tests in parallel.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 8:</b> Create Framework with
              page object model.</li>
            <li><span class="fa-li"><i class="fa-solid fa-check"></i></i></span><b>Step 9:</b> Create Framework for BDD.
            </li>
          </ul>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5">
          <img src="front/anh/Artwork@2x.svg" alt="">
        </div>
        <div class="under-how col-md-6">
          <h6><b style="color: black;">Understanding</b> how to learn Selenium Effectively</h6>

          <p>1. How did I learn Selenium when I have a full-time job.</p>
          <p>2. How to learn All Selenium Automation With less than $100. </p>
          <p>3. Break the secret of learning programming for absolute beginner.</p>
          <p>4. Learn Selenium Automation in class vs online.</li>
          <p>5. QA Analyst salary vs Test Automation Developer/Engineer salary.</p>
          <p>6. Help! I can’t learn Selenium, I don’t understand it!</li>
          <p>7. Can’t create Selenium Automation Framework from scratch! You’re not alone!</p>
          <p>8. How to learn Selenium or any skills for QA Engineer career.</p>
          <p>9. The fastest way to learn Selenium in java language.</p>

        </div>
        <div class="col-md-1"></div>
        <div class="under-why col-md-5">
          <h6><b style="color: black;">Understanding</b> why learn Selenium Automation</h6>
          <p>If you ask a tester what she wants to learn next, chances are very high that the answer is:<br>
            Test Automation with Selenium WebDriver! <br>
            Most testers agree that manual testing skills are no longer sufficient for a successful career.<br>
            Companies still need testers but hire the ones proficient also with programming.<br>
            Between a tester that can test a user story and another that can also automate it, the second one has the
            higher chance of getting the job.
            <br>
          </p>
          <p>
            She adds value to the company now with her testing.
            <br>
            She also adds value to the company in the future through her automation. <br>
            Her automated tests can be repeated any time they are needed.
          </p>
        </div>
      </div>
    </div>
    <div class="main-bottom container">
      <h3><img src="front/anh/flaticon1537477497-svg.svg" alt=""> Online learning advantage</h3>

      <div class="row">
        <div class="group-item col-md-6">
          <img src="front/anh/file.svg" alt="">
          <p><b>LEARN IN YOUR OWN TIME</b><br>
            We are very busy in this world and in the software industry, you need to learn & update your skills set so
            that you can get a job easily. Online learning is the best tool to help you achieve the skills you need in
            you own time
          </p>
        </div>
        <div class="group-item col-md-6">
          <img src="front/anh/file.svg" alt="">
          <p><b>24/7 RESOURCES ACCESS</b><br>
            There is no limited time for using resources online. You take your time to understand deeply & correctly.
            Programming with Selenium requires time to understand, practice. Ability to learn online will give you
            unlimited time instead of feeling lost in the class and have no time to stop and read again.

          </p>
        </div>
        <div class="group-item col-md-6">
          <img src="front/anh/file.svg" alt="">
          <p><b>SIGNIFICANCE OF LEARNING SELENIUM</b> <br>
            If you are looking for a software tester job, chance is the job will require you know test automation &
            selenium. Having Selenium Webdriver skill set will give you a peace of mind whenever you apply for Software
            tester job.
          </p>
        </div>
        <div class="group-item col-md-6">
          <img src="front/anh/file.svg" alt="">
          <p><b>SAVE $$$</b> <br>
            The cost of online class or classic class is a lot and require your time. When you learn using resources
            from the internet, it costs less.
          </p>
        </div>
      </div>
    </div>
  </main>
@endsection
