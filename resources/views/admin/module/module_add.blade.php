@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #b70000;
            font-weight: 700px;
        }
    </style>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Add Module Page </h4>

                            <form method="POST" action="{{ route('store.module') }}" enctype="multipart/form-data">
                                @csrf



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Module Category
                                        Name</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-select"
                                            aria-label="Default select example">
                                            <option selected="">Open this select menu</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Module Title </label>
                                    <div class="col-sm-10">
                                        <input name="title" class="form-control" type="text"
                                            id="example-text-input">

                                        @error('title')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end row -->



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Module Description
                                    </label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" class="block w-full mt-1 rounded-md" name="description">
                                        </textarea>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Module Image </label>
                                    <div class="col-sm-10">
                                        <input name="image" class="form-control" type="file" id="image">
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                            
                                </div>
                                <!-- end row -->


                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Insert Module">
                            </form>



                        </div>
                    </div>
                </div> <!-- end col -->
            </div>



        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    <!-- <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script> -->
    <!-- <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor

            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: "{{route('ckeditor.upload',['_token' => csrf_token()]) }}",
        }

            })
            .catch( error => {

                console.error( error );

            } );

    </script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(document.querySelector('#editor'), {
        ckfinder: {
            uploadUrl: "{{ route('ckeditor.upload',['_token' => csrf_token()]) }}"
        }
    })
    .catch(error => {
        console.error(error);
    });
</script>


@endsection
