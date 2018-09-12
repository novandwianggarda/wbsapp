<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WBS | DPMPTSP Prov.Jateng</title>
    <link rel="icon" type="gif/ico" href="{{asset('img/prov.gif')}}" />
    <link rel="stylesheet" href="{{asset('css/landing_wbk.css')}}" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>
    <script src="{{asset('js/TweenMax.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div id="pixiCanvas"></div>


<h1 class="title">WBS</h1>
<h4 class="subtitle">Whistle Blowing System</h4>
<div id="content">
    <p> <a data-toggle="tooltip" title="Laporkan Korupsi !" href="/post_korupsi"  target="blank">Korupsi</a> | <a data-toggle="tooltip" title="Laporkan Gratifikasi !" href="/post_gratifikasi" target="blank">Gratifikasi</a> | <a data-toggle="tooltip" title="Laporkan Benturan Kepentingan !" href="/post_benturan_kepentingan" target="blank">Benturan Kepentingan</a>  </p>
</div>
<div id="credits">
    <p> <a href="https://dpmptsp.jatengprov.go.id/"  target="blank">DPMPTSP Prov Jateng</a> | WBS | 2018</p>
</div>


<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

    <script src="{{asset('js/js.js')}}"></script>
</html>