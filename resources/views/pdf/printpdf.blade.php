<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">

    <style>
    .myTableBg4 {
        width: 100%;
        min-width: 260px;
        min-height: 200px;
        text-align: center;
        background-image: url('/img/backpdf.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        border: 1px solid black;
    }

    @media print {
        .noPrint {
            display: none;
        }
    }
    </style>




    <!-- Scripts -->
    <script defer src="{{ asset('vendor/alpine.js') }}"></script>
</head>

<body class="antialiased">
    <div id="app">
        <div class="main-wrapper">
            <div class="row ">
                <div class="col-12 col-md-12 col-lg-12 ">
                    <div class="card border rounded">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-sm" style="border: 5px;">
                                    <!-- #######  THIS IS A COMMENT - Visible only in the source editor #########-->
                                    <tbody>
                                        <tr>
                                            <td rowspan="5"><img src="/img/logo2.jpg" width="293" height="225"
                                                    class="img-responsive"
                                                    style="display: block; margin-left: auto; margin-right: auto;" />
                                            </td>
                                            <td style="text-align: center;" colspan="3">
                                                <h4><strong>ЭНГИЙН</strong></h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;" colspan="3">Ачааны код:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <h2 style="text-align: center;"><strong>{{$data->code}}</strong>
                                                </h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;" colspan="3">Хүлээн авагчийн нэр:</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <h3 style="text-align: center;">{{$data->receiver_name}}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">Ачааны код:</td>
                                            <td style="text-align: left;" colspan="3">Хүлээн авагчийн утасны
                                                дугаар:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 style="text-align: center;">{{$data->code}}</h2>
                                            </td>
                                            <td colspan="3">
                                                <h3 style="text-align: center;">{{$data->receiver_number}}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">Илгээгчийн нэр:</td>
                                            <td style="text-align: left;" colspan="3">Хүлээн авагчийн хаяг:</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3 style="text-align: center;">{{$data->shipper_name}}</h3>
                                            </td>
                                            <td colspan="3">
                                                <h3 style="text-align: center;">{{$data->receiver_address}}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">Илгээгчийн дугаар:</td>
                                            <td style="text-align: left;">Ачааны жин:</td>
                                            <td style="text-align: left;">Тоо ширхэг:</td>
                                            <td style="text-align: left;">Үнийн дүн:</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">
                                                <h3>{{$data->shipper_number}}</h3>
                                            </td>
                                            <td>
                                                <h3 style="text-align: center;">{{$data->weight}}кг</h3>
                                            </td>
                                            <td>
                                                <h3 style="text-align: center;">{{$data->item_count}}ш</h3>
                                            </td>
                                            <td style="text-align: center;">
                                                <h3>{{$data->ship_price}}</h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: left;">Дэлгэрэнгүй:</td>
                                            <td style="text-align: center;">
                                                @if($data->is_delivery = 1)
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg> Хүргэлттэй
                                                </p>
                                                @else
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    </svg> Хүргэлтгүй
                                                </p>
                                                @endif
                                            </td>
                                            <td>
                                                @if($data->kr_total < $data->ship_price)
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg> Монголд төлөх
                                                </p>
                                                @else
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    </svg> Монголд төлөх
                                                </p>
                                                @endif
                                            </td>
                                            <td style="text-align: center;">
                                                @if($data->kr_total >= $data->ship_price)
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check-circle-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg> Төлсөн
                                                </p>
                                                @else
                                                <p style="text-align: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    </svg> Төлөөгүй
                                                </p>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">
                                                <h4>{{$data->description}}</h4>
                                            </td>
                                            <td colspan="3">
                                                <p>OneWay Cargo ХХК</p>
                                                <p>хаяг</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <div class="card-footer text-right noPrint">
                            <button onclick="window.print()" class="btn btn-lg btn-primary noPrint">&nbsp Хэвлэх
                                &nbsp</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->

        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>

    <livewire:scripts />
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>