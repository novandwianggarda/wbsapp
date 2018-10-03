<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WBS | DPMPTSP Prov.Jateng</title>
    <link rel="icon" type="gif/ico" href="{{asset('img/logoPTSP.png')}}" />
    <link rel="stylesheet" href="{{asset('css/landing_wbk.css')}}" type="text/css">
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>--}}
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("{{asset('img/front/paluanyar.jpg')}}");
            opacity: 0.8;
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .title{
            position:absolute;
            left:50%;
            top:40%;
            text-align:center;
            transform:translate(-50%, -50%);
            color:#f29a0e;
            font-size:8em;
            font-family: 'K2D';
        }
        .subtitle{
            position:absolute;
            left:50%;
            top:52%;
            text-align:center;
            font-family:'K2D', sans-serif;
            transform:translate(-50%, -50%);
            color:#f29a0e;
            font-size:1.5em;
        }
        .subtitle2{
            position:absolute;
            left:50%;
            top:60%;
            text-align:center;
            font-family:'Roboto', sans-serif;
            transform:translate(-50%, -50%);
            color:navajowhite;
            font-size:1.5em;
        }
        #content{
            position:absolute;
            width:100%;
            margin: auto;
            bottom:0;
            margin-bottom:150px;
            font-family:'Roboto', sans-serif;
            letter-spacing:0.1rem;
            color:antiquewhite;
            font-size:2em;
            text-transform: uppercase;
            text-align : center;
        }
        #content a {
            color:antiquewhite;
            text-decoration:none;
        }

        #content a:hover {
            color: #f29a0e;
        }
        #credits{
            position:absolute;
            width:100%;
            margin: auto;
            bottom:0;
            margin-bottom:25px;
            font-family:'Rakkas', sans-serif;
            letter-spacing:0.1rem;
            color:#f29a0e;
            font-size:0.7em;
            text-transform: uppercase;
            text-align : center;
        }
        #credits a {
            color:#f29a0e;
            text-decoration:none;
        }

        #credits a:hover {
            color:navajowhite;
        }
    </style>
</head>

<body>
<div class="bg"></div>
<h1 class="title">WBS</h1>
<h4 class="subtitle">Whistle Blowing System</h4>
<h4 class="subtitle2">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu </br> Provinsi Jawa Tengah</h4>
<div id="content">
    <p> <a data-toggle="tooltip" title="Laporkan Korupsi !" href="/post_korupsi"  target="blank">Korupsi</a> | <a data-toggle="tooltip" title="Laporkan Gratifikasi !" href="/post_gratifikasi" target="blank">Gratifikasi</a> | <a data-toggle="tooltip" title="Laporkan Benturan Kepentingan !" href="/post_benturan_kepentingan" target="blank">Benturan Kepentingan</a>  </p>
</div>
<div id="credits">
    <p> <a href="https://dpmptsp.jatengprov.go.id/"  target="blank">DPMPTSP Prov Jateng</a> | WBS | 2018</p>
</div>

</body>

    {{--<script src="{{asset('js/js.js')}}"></script>--}}
</html>