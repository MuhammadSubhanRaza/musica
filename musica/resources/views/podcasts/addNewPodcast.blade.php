
@extends('layouts/sitelayout')

@section('main-sec')


<section class="sec-add-new-podcast">
    <div class="sec-add-new-pod-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Upload your Track</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="sec-add-new-pod-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="form-control" name="title" placeholder="Title">
                        <input type="text" class="form-control mt-3" name="description" placeholder="Description">
                        <label class="mt-3">Upload Audio File</label>
                        <input type="file" class="form-control mt-2" name="title" placeholder="Title">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
