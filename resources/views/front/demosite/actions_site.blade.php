@extends('front.layout.master')
@section('body')
<div class="page-title">
    <h1><b>AUTOMATION ACTIONS SITE</b></h1>
  </div>
  <main>
    <article>
        <div class="nav nav-tabs">
          <section class="container" style="border: 1px solid #EBEBEB">
            <div class="nav nav-tabs">
              <li class="nav-item">
                <a class="tablinks nav-link active" onclick="openCity(event, 'Portlets')">Portlets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'Multiple-Lists')">Multiple Lists</a>
              </li>
              <li class="nav-item">
                <a class="tablinks nav-link " onclick="openCity(event, 'Description')">Simple List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link tablinks" onclick="openCity(event, 'Review')">Grid Sorting</a>
              </li>
              <li class="nav-item">
                <a class="tablinks nav-link" onclick="openCity(event, 'Description')">Accepted Elements</a>
              </li>
            </div>
            <!-- Tab content -->
            <div id="Portlets" class="tabcontent" style="display: block;">
              <div class="alert alert-warning">
                Re-Order Elements provided. For Ex : Move Car to Motobike place
              </div>
              <p>One touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The
                same is true
                as we experience in emotional sensation of stress from our first instances of social rejection ridicule.
                We
                quickly
                learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the
                most
                common of
                all making mistakes.
              </p>
            </div>
            <div id="Multiple-Lists" class="tabcontent">
              <p>There are no reviews yet. <br>
                Be the first to review “Galaxy Galaxy S8” <br>
                Your email address will not be published. Required fields are marked *
              </p>
            </div>
        </div>
    </article>
  </main>
@endsection
