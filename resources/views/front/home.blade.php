<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    {{--    <link href="{{ asset('/') }}admin-assets/css/datatables.min.css" rel="stylesheet" />--}}
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="{{ asset('/') }}admin-assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Submit Your Idea</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('new.idea') }}" method="post" enctype="multipart/form-data" id="main_form">
                            @csrf
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                    <span class="text-danger error-text name_error"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="tel" name="mobile" class="form-control mobile_error" >
                                    <span class="text-danger error-text mobile_error"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Idea Title</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" class="form-control" >
                                    <span class="text-danger error-text title_error"></span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4" >Select Category </label>
                                <div class="col-md-8">
                                    <select name="category_id" id="" class="form-control">
                                        <option value="" selected disabled >Select a Category</option>
                                        @foreach($Categories as $Category)
                                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Short Description</label>
                                <div class="col-md-8">
                                    <textarea name="short_description" class="form-control" id="" cols="30" rows="10" ></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Long Description</label>
                                <div class="col-md-8">
                                    <textarea name="long_description" class="form-control" id="" cols="30" rows="10" ></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-4"></label>
                                <div class="col-md-8 position-relative">
                                    <input type="submit" value="Submit" class="btn btn-outline-success ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('/') }}admin-assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}admin-assets/js/scripts.js"></script>
{{--<script src="{{ asset('/') }}admin-assets/js/datatables.min.js"></script>--}}
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}admin-assets/assets/demo/chart-area-demo.js"></script>
<script src="{{ asset('/') }}admin-assets/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}admin-assets/js/datatables-simple-demo.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    CKEDITOR.replace('long_description');
</script>


<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
<script>
    $(function(){

        $("#main_form").on('submit', function(e){
            e.preventDefault();

            $.ajax({
                url:$(this).attr('action'),
                method:$(this).attr('method'),
                data:new FormData(this),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(document).find('span.error-text').text('');
                },
                success:function(data){
                    if(data.status == 0){
                        $.each(data.error, function(prefix, val){
                            $('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $('#main_form')[0].reset();
                        alert(data.msg);
                    }
                }
            });
        });
    });
</script>

</body>
</html>
