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
            @foreach($quest_detail as $key => $qd)
            <section>
                <div class="row">
                    <div class="col-md-1">
                        <img src="front/anh/Question No.svg" alt="">
                        <h5 style="color: white;">0</h5>
                    </div>
                    <div class="col-md-10">
                        <h4 class="blue">Do you see this question? Q & A with our Test Automation Architect team</h4>

                        <div class="space-bt" style="margin-top: 20px;">
                            <p class="gray">Asked in: <b class="blue">Selenium</b></p>
                            <p class="gray">Asked in: <b class="blue">{{$qd->email}}</b></p>
                            <p class="gray">Asked on: {{$qd->reg_date}}</p>
                        </div>
                    </div>
                    <div class="col-md-1 question-group-right">
                        <div class="Answer-number">
                            <h3>2</h3>
                            <p class="blue">Answer</p>
                        </div>
                        <p>{{$qd->view}} view</p>
                    </div>
                </div>
                <hr class="underlined">
            </section>
            <section class="space-bt">
                <div class="row">
                    <div class="quest-votes col-md-1">
                        <button><i class="fa-regular fa-square-caret-up fa-2xl"></i></button>
                        <h4 style="color: #00BC23;">{{$qd->vote}}</h4>
                        <button><i class="fa-regular fa-square-caret-down fa-2xl"></i></button>
                        <p>Votes</p>
                    </div>
                    <div class="col-md-11">
                        <p style="font-size: 18px;">{{$qd->title}}
                        </p>
                        <p></p>
                        <br>

                        <?php
                        $body = $qd->body;
                        echo $body;
                        ?>
                    </div>

                    <div class="space-bt">
                        <ul>
                            <li><a href="">
                                    <div>pselenium</div>
                                </a></li>
                            <li><a href="">
                                    <div>automation test</div>
                                </a></li>
                        </ul>
                        <ul>
                            <li><b>
                                    <h5>Share :</h5>
                                </b></li>
                            <li><i class='bx bxl-facebook bx-sm' style="color: #0744F2;"></i></li>
                            <li><i class='bx bxl-twitter bx-sm' style="color:#18CCF3;"></i></li>
                        </ul>
                    </div>
                </div>
            </section>
            @endforeach
            <section>
                <header class="space-bt">
                    <h4 class="black">ANSWERS: 2</h4>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary active">Newest</button>
                        <button type="button" class="btn btn-outline-primary">Oldest</button>
                        <button type="button" class="btn btn-outline-primary">Votes</button>
                    </div>
                </header>

                <hr class="underlined">
                <p class="gray">Answered by: <a href="" class="blue">Tony Stark </a>Answered 29 mins ago</p>
                <div class="row">
                    <div class="quest-votes col-md-1">
                        <button><i class="fa-regular fa-square-caret-up fa-2xl"></i></button>
                        <h4 style="color: #00BC23;">10</h4>
                        <button><i class="fa-regular fa-square-caret-down fa-2xl"></i></button>
                        <p>Votes</p>
                    </div>
                    <div class="col-md-11">
                        <p style="font-size: 18px;">This is just a test to see what options are available when submitting a question. I guess
                            there could be a lot of stuff typed in here, but I am too lazy to test that out.
                        </p>
                        <p>
                            To start your self-learning, you need to learn for free on the internet. Its recommendations are based on a review of
                            the existing academic literature which is complemented by the analysis of numerous contributions by software
                            developers, self-learners, and teachers of programming. Additionally, it incorporates effective learning techniques
                            derived from psychological research. Its intended readers are primarily entrepreneurs and ‘startup people’ who are
                            driven to build new businesses with code, although the proposed approach is also transferable to other domains and
                            audiences.

                        </p>

                    </div>
                </div>
                <hr class="underlined">
                <div style="margin-left: 100px;">
                    <p>This is just a test to see what options are available when submitting a question. I guess there could be a lot of
                        stuff typed in here, but I am too lazy to test that out. <a class="blue" href="">Peter Monica </a><label for="" class="gray">Apr 16 at 6:57</label> </p>
                    <hr class="underlined">
                    <p>
                        To start your self-learning, you need to learn for free on the internet. Its recommendations are based on a review of
                        the existing academic literature which is complemented by the analysis of numerous contributions by software
                        developers, self-learners, and teachers of programming.
                        <a class="blue" href="">Kevin Kotz</a> <label class="gray">Apr 19 at 6:57</label>
                    </p>
                    <hr class="underlined">
                    <div class="space-bt">
                        <ul>
                            <li><button>Add a comment</button></li>
                        </ul>
                        <ul>
                            <li><b>
                                    <h5>Share :</h5>
                                </b></li>
                            <li><i class='bx bxl-facebook bx-sm' style="color: #0744F2;"></i></li>
                            <li><i class='bx bxl-twitter bx-sm' style="color:#18CCF3;"></i></li>
                        </ul>
                    </div>
                </div>
                <hr class="underlined">
            </section>
            <section>
                <h4 class="black">Your Answer</h4>
                <form action="">
                    <input type="text" id="editor" height="400px">
                    <button class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;">Post your answer</button>
                </form>
                <p>Not the answer you're looking for? Browse other questions tagged
                    <a class="tag" href="">selenium</a>
                    <a class="tag" href="">automation test</a>
                    or <a href="" class="blue">ask your own question.</a>
                </p>
            </section>
        </article>
        <aside class="col-lg-3" style="margin-top: 50px;">
            <h3 class="black">TOTAL QUESTION: {{$total_quest}}</h3>
            <hr class="underlined">
            <section style="margin-top: 100px;">
                <h3 class="black">CATEGORIES</h3>
                <hr class="underlined">
                <div class="space-bt">
                    <div>
                        <div class="box-number">
                            <p>{{$total_qa}}</p>
                        </div>
                    </div>
                    <a href="{{route('forum')}}" class="active"><b>Q & A with our Test Automation Architect team</b></a>
                </div>
                <hr class="underlined">
                <div>
                    <label for="" class="box-number">{{$total_gd}}</label>
                    <a href="{{route('forum2')}}" class="active"><b>General discussion</b></a>
                </div>
                <hr class="underlined">
            </section>
            <section class="banner">
                <a href=""><img src="front/anh/Rectangle.png" alt=""></a>
                <a href=""><img src="front/anh/Rectangle (1).png" alt=""></a>
                <a href=""><img src="front/anh/Rectangle (2).png" alt=""></a>
                <a href=""><img src="front/anh/Rectangle (3).png" alt=""></a>
            </section>
        </aside>
    </div>
    <div id="editor">This is some sample content.</div>
</main>
@endsection
