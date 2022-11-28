<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    @include('part.navbar_main')
    @include('sweetalert::alert')

    <div class="col-md-12 m-4">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
        </ol>
        </nav>
    </div>

    <div class="col-md-12 p-4">
        <div class="card">
            <div class="card-header">
                <h4><i class="fa fa-shopping-cart"></i> Checkout </h4>
            </div>
                <div class="card-body">
                    @if(!empty($pesanan))
                    <p> Checkout Date: {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Template Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanan_detail as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->shopping->template_name }}</td>
                                <td>Rp {{ number_format($item->jumlah_harga, 0, '.', '.') }}</td>
                                <td>
                                    <form action="{{ route('checkout') }}/{{ $item->id }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" align="right"><strong>Total Price: </strong></td>
                                <td align="left"><strong>Rp {{ number_format($pesanan->total_price, 0, '.', '.') }}</strong></td>
                                <td>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table> 
                    @endif
                    <div class="d-flex flex-row-reverse">
                        <a  href="{{ route('confirmation') }}" class="btn btn-success"><i class="fa fa-shopping-cart"></i> Go to Purchase Method </a>
                    </div>
                    
                </div>
            
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>    
</body>
</html>