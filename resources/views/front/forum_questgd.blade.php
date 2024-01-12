@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>FORUM</b></h1>
</div>
<div class="forum-banner ">
    <div class="forum-search ">
        <input type="text" class="w-50" placeholder="Enter your question">
        <button class="btn btn-primary btn-lg btn-block">Search</button>
    </div>
</div>
<main class="container forum-page ">
    <div class="row">
        <article class="col-lg-9">
            <h4>Ask a question</h4>
            <hr class="underlined">
            <section>
                <form action="{{route('save_quest')}}" method="post">
                    @csrf
                    <h5>Title</h5>
                    <p>Be specific and imagine you're asking a question to another person</p>
                    <input type="text" name="title" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="e.g. Is there an R function for finding the index of an element in a vector?">
                    <br>
                    <h5>Body</h5>
                    <p>Include all the information someone would need to answer your question</p>
                    <textarea name="body" id="editor" cols="30" rows="10"></textarea>
                    <br>
                    <h5>Tags</h5>
                    <p>Add up to 5 tags to describe what your question is about</p>
                    <input type="text" name="tab" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="e.g. selenium, automation test">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;">Review your question</button>
                </form>
            </section>
        </article>
        <aside class="col-lg-3">
            <h4>Draft your question</h4>
            <hr class="underlined">
            <p>The community is here to help you with specific coding, algorithm, or language problems.
                <br>
                Avoid asking opinion-based questions.
            </p>
            <section class="">
                <div class="questions-container">
                    <div class="row">
                        <div class="col-2">
                            <label for="" class="box-number"><b>1</b></label>
                        </div>
                        <div class="Accordion col-10">
                            <button>
                                <span>Summarize the problem</span>
                                <i class="fas fa-chevron-down d-arrow"></i>
                            </button>
                            <ul>
                                <li>Include details about your goal</li>
                                <li>Describe expected and actual results</li>
                                <li>Include any error messages</li>
                            </ul>
                        </div>
                        <div class="col-2">
                            <label for="" class="box-number"><b>2</b></label>
                        </div>
                        <div class="Accordion col-10">
                            <button>
                                <span>Describe what you've tried</span>
                                <i class="fas fa-chevron-down d-arrow"></i>
                            </button>
                            <p>Show what you've tried and tell us what you found (on this site or elsewhere) and why it didn't meet your needs. You can get better answers when you provide research.</p>
                        </div>
                        <div class="col-2">
                            <label for="" class="box-number"><b>3</b></label>
                        </div>
                        <div class="Accordion col-10">
                            <button>
                                <span>Show some code</span>
                                <i class="fas fa-chevron-down d-arrow"></i>
                            </button>
                            <p>When appropriate, share the minimum amount of code others need to reproduce your problem (also called a minimum, reproducible example).</p>
                        </div>
                    </div>
                </div>
            </section>
        </aside>
    </div>
</main>
<script>
    const buttons = document.querySelectorAll('button');

      buttons.forEach( button =>{
          button.addEventListener('click',()=>{
              const faq = button.nextElementSibling;
              const icon = button.children[1];

              faq.classList.toggle('show');
              icon.classList.toggle('rotate');
          })
      } )</script>

@endsection
