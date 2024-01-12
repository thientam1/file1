@extends('front.layout.admin')
@section('admin_body')
<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Add Blog</h5>
              <?php
                use Illuminate\Support\Facades\Session;
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alter" style="color:red">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
              <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3 ">
                      <label for="exampleInputEmail1" class="col-sm-2  col-form-label">Title</label>
                      <div class="col-sm-9">
                      <input name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="row mb-3 ">
                      <label for="exampleInputEmail1" class="col-sm-2  col-form-label">title detail</label>
                      <div class="col-sm-9">
                      <textarea name="title_detail" class="form-control " id="" height="250" ></textarea>
                      </div>
                    </div>
                    <div class="row mb-3 ">
                      <label for="exampleInputEmail1" class="col-sm-2  col-form-label">blog detail</label>
                      <div class="col-sm-9">
                      <textarea name="blog_detail" class="form-control " id="" height="250" ></textarea>
                      </div>
                    </div>
                    <div class="row mb-3 ">
                      <label for="exampleInputEmail1" class="col-sm-2  col-form-label">Img</label>
                      <div class="col-sm-9">
                      <input name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="file">
                      </div>
                    </div>
                    <button type="submit" name="them_danh_mucsp" class="btn btn-primary">Add Blog</button>
                  </form>
                </div>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection
