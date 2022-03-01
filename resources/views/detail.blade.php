
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            img {
                width: 20%;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif                        
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                </div>
                @if($jenis=='medicines' && $id==1)
                <div><h1>Paracetamol</h1></div>                
                <div><img src="https://www.monotaro.id/media/catalog/product/cache/a93b75c01b21750ab1c37c1e1fecbffe/f/r/frP103680567-1.jpg"></div>  
                <div><p>Ini adalah obat penurun demam</p></div>
                @elseif($jenis=='medicines' && $id==2)
                <h1>Vitamin C</h1>
                <img src="https://lifepack.id/wp-content/uploads/2020/12/88.jpg">
                <p>Ini adalah suplemen vitamin C untuk tubuh</p>

                @elseif($jenis=='med_equip' && $id==1)
                <h1>Masker</h1>
                <img src="https://s4.bukalapak.com/img/4472273609/large/Chemical_Respirator_Mask_NP_306_Dual_Filter.jpg">
                <p>Ini adalah penyaring debu</p>
                @elseif($jenis=='med_equip' && $id==2)
                <h1>Suntik</h1>
                <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/5/24/00a806bc-93bd-4f5e-85b1-eb68a0b100df.jpg">
                <p>Ini adalah alat untuk injeksi obat atau virus untuk vaksin</p>
                @endif                    
                
                <div class="links">                 
                </div>
            </div>
        </div>
    </body>
</html>
