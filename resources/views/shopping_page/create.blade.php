<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @include('part.navbar_main')

    <div class="container">
        <h4>Add Template</h4>
    
        {{-- @if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}
    
        <form method="post" action="{{ route('shopping.store') }}" enctype="multipart/form-data">
        @csrf
            <div>Template Name <input type="text" name="template_name"></div>
            
            <div>Price <input type="text" name="price"></div>
            <div>Description <input type="textarea" name="description"></div>
    
            <div class="form-group">
                <label for="picture"> Upload Foto</label>
                <input type="file" class="form-control" name="picture">
            </div>
            
            {{-- <div>Tgl. Terbit <input type="date" name="tgl_terbit"
            class="date form-control" id="datepicker" placeholder="yyyy/mm/dd"></div> --}}
    
            <!-- <input type="text" id="datepicker"></p> -->
            <div><button type="submit">Save</button>
            <a href="/shop">Cancel</a></div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</body>
</html>



