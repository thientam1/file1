@extends('front.layout.master')
@section('body')
<div class="page-title">
      <h1><b>TUTORIALS</b></h1>
    </div>
<main class="container">
    <div class="tutorial container ">
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
    <div class="row">
      <aside class="col-lg-3 container ">
        <div class="aside-link">
          <li><a href="">Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</a></li><br>
          <li><a href="">Browser Recording, WorkBench, Running Your First Test, Listener, Reading Test Result</a></li>
          <br>
          <li><a href="">Toolbars, Log Into A Website, Regular Expression Extractor</a></li><br>
          <li><a href="">Handle Dynamic Token, Assertions, Using CSV Data File</a></li><br>
          <li><a href="">Jmeter Components</a></li><br>
          <li><a href="">Throughput, Function Helper, Saving Test Result</a></li><br>
          <li><a href="">Remote Jmeter, Plugins Manager, Variables</a></li><br>
          <li><a href="">HTTP Simple Table Server, Json Format, Bean Shell Script</a></li><br>
          </ul>
        </div>
      </aside>
      <article class="jmeter col-lg-6">
        <img src="front/anh/jmeter.png" alt="">
        <h4><b>Jmeter Fundamentals, Install and Create A Basic Jmeter Test Plan</b></h4>
        <section>
          <h5><b>Load, Stress And Performance Test</b></h5>
          <p><b>Load test:</b> is the testing how the system works by increasing the load sending to the system. With
            load testing, we will know how many user using software product that the system still works properly.
            <br>
            <br>
            <b>Performance test:</b> is the testing how software application performed such as how long it takes for the
            servers to response. With performance testing, we will know how long it takes for a software product get
            response so that we can improve the quality of software by making sure it will be run in the expected time
            response.
            <br><br>
            <b>Stress test:</b> is the testing how the system works under stress. With stress test, we will know at
            which point
            the system will be failed and how the system recovers back.
          </p>
          <h5><b>What Is Jmeter?</b></h5>
          <p><b>Jmeter</b> is a free application testing software from The Apache Software Foundation. </p>
          <p><b>Jmeter</b> is a tool for running Load test, Performance test or Stress test. It is designed for testing
            Web Application, Web services (Soap & Rest api) and more.</p>
          <h5><b>How does Jmeter work?</b></h5>
          <p>Jmeter<b></b> acts like a group of users sending requests to a target server. It collects response from
            target server and other information which show the performance of the application via graphs or summary
            tables.</p>
          <h5><b>Why Use Jmeter?</b></h5>
          <p><b>Jmeter</b> is an open-source application. Therefore, it is very popular Test tool.</p>
          <p><b>Jmeter</b> has been created for 15 years and has a large community supporting.</p>
          <p><b>Jmeter</b> is one of the top Software Testing Tool for automation. Most of the opening job for software
            tester, QA engineer, Automation analyst, QA Analyst require or “good to have” Jmeter skill.
          </p>
        </section>
        <section>
          <h5><b>Install Jmeter</b></h5>
          <p>Below is Operating Systems can be run Jmeter. Even if your OS is not listed, Jmeter should run on it
            provided that the JVM is compliant.</p>
          <div class="center">
            <img src="front/anh/Screen Shot 2019-03-02 at 3.52.png" alt="">
          </div>
        </section>
        <section>

          <h5><b>Download Java:</b></h5>
          <p>Latest java version:<a href="">https://www.java.com/en/download/windows-64bit.jsp</a></p>
          <p>Following the Instruction from Java to install. Then set up JAVA_HOME environment variable by these steps
          </p>
          <p>- Open Control Panel\System and Security\System on your computer</p>
          <div class="center">
            <img src="front/anh/Screen Shot 2019-03-02 at 4.04.png" alt="">
          </div>
          <p>- Choose Advance system setting</p>
          <div class="center">
            <img src="front/anh/Screen Shot 2019-03-02 at 4.08.png" alt="">
          </div>
          <p>- Click on Environment Variables</p>
          <div class="center">
            <img src="front/anh/Screen Shot 2019-03-02 at 4.09.png" alt="">
          </div>

          <p>- At the end of Variable value, put path where is<a href=""> Java\Bin folder such as C:\Program Files
              (x86)\Java\jre1.8.0_91\bin</a></p>
          <p>- Then click on OK. Make sure you don’t remove any existing Variable value. </p>
          <p><b>Download Jmeter:</b> <a href="">http://Jmeter.apache.org/download_Jmeter.cgi</a>
          <p>- To install Jmeter, simply unzip the zip/tar file into the directory where you want Jmeter to be installed
            (zip file is for Window, tar file is for Unix). Make sure that you have a JRE/JDK correctly installed and
            the JAVA_HOME environment variable set.</p>
          </p>
          <p><b>To run Jmeter:</b> run the Jmeter.bat (for Windows) or Jmeter (for Unix) file. These files are found in
            the bin directory.</p>
        </section>
        <section>
          <h5>Jmeter Test Plan: Basic Elements (Thread Group, Sampler, Assertion, Listener)</h5>
          <p><b>Thread group:</b> is to set up number of user to run the test.</p>
          <p><b>Sampler:</b> is the request for running the test (http/https/soap/rest).</p>
          <p><b>Assertions:</b> are to use for comparing the actual result with the expected result so that we can
            decide if the test is passed.</p>
          <p><b>Listeners:</b> are the reports from Jmeter.
          </p>
        </section>
      </article>
      <aside class="banner col-lg-3">
        <a href=""><img src="front/anh/Rectangle.png" alt=""></a>
        <a href=""><img src="front/anh/Rectangle (1).png" alt=""></a>
        <a href=""><img src="front/anh/Rectangle (2).png" alt=""></a>
        <a href=""><img src="front/anh/Rectangle (3).png" alt=""></a>
      </aside>
    </div>
  </main>
@endsection
