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
            <section>
                <header class="row">
                    <h3 class="col-lg-9"><b style="color: black;">CATEGORIY</b> Q & A WITH OUR TEST AUTOMATION ARCHITECT TEAM</h3>
                    <button class="btn btn-primary btn-lg btn-block col-lg-3" data-bs-toggle="modal" data-bs-target="#AskQuestionModal">Ask Question</button>
                    <div class="modal fade" id="AskQuestionModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content modal-sigin-out">
                                <!--Ask Question form -->
                                <form action="">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Select the question category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3  ">
                                            <label for="">1. Special catalog, you will be expertly answered by our experts.</label>
                                            <a href="{{route('quest')}}" class="btn btn-primary btn-lg btn-block w-100" style="color: white;">Q & A with Our Test Automation Architect team</a>
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="">2. Free catalogory, you can ask all questions here. No login required..</label>
                                            <a href="{{route('quest')}}" class="btn btn-dark btn-lg btn-block w-100" style="color: white;">General Discussion</a>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </header>
                <hr class="underlined">
            </section>
            <section>
                <header class="space-bt">
                    <p class="gray">TOTAL QUESTION: <b class="blue">{{$total_qa}}</b></p>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary active">Newest</button>
                        <button type="button" class="btn btn-outline-primary">Answers</button>
                        <button type="button" class="btn btn-outline-primary">Views</button>
                        <button type="button" class="btn btn-outline-primary">Asked by</button>
                    </div>
                </header>
            </section>

            <section>
                @foreach($all_quest as $key => $q)
                <a href="{{URL::to('/quest'.$q->questID)}}">
                    <div class="question-group">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="front/anh/Question No.svg" alt="">
                                <h5 style="color: white;">0</h5>
                            </div>
                            <div class="col-md-10">
                                <h4 class="blue">Do you see this question? Q & A with our Test Automation Architect team</h4>
                                <div style="height: 100px;">
                                <p>{{$q->title}}</p>
                                </div>
                                <br>
                                <div class="space-bt" style="margin-top: 20px;">
                                    <p class="gray">Asked in: <b class="blue">Selenium</b></p>
                                    <p class="gray">Asked by: <b class="blue">{{$q->email}}</b></p>
                                    <p class="gray">Asked on: {{$q->reg_date}}</p>
                                </div>
                            </div>
                            <div class="col-md-1 question-group-right">
                                <h3 style="color: #00BC23;">{{$q->vote}}</h3>
                                <label for="">Votes</label>
                                <div class="Answer-number">
                                    <h3>2</h3>
                                    <p class="blue">Answer</p>
                                </div>
                                <p>{{$q->view}} view</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </section>
            <div class="space-bt">
                <ul class="pagination" style="align-items: center;">
                    <li class="page-item active"><a class="page-link" href="#">15</a></li>
                    <li class="page-item "><a class="page-link" href="#">30</a></li>
                    <li class="page-item"><a class="page-link" href="#">50</a></li>
                    <li class="page-item gray" style="padding: 0.375rem 0.75rem;">Per page</li>
                </ul>
                <ul class="pagination">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item "><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
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

</main>
@endsection
