<html>
    <head>
        @vite(['resources/css/app.css'])
    </head>
<body>
    <section class="vh-100">
        <div class="align-items-center">
            <img src="{{asset('cloud2.png')}}" style="width: 500px;
            height: 250px; position: absolute; top: 90px; left: 100px;">
        </div>
        <div class="align-items-center">
            <img src="{{asset('paper1.png')}}" style="width: 220px;
            height: 220px; position: absolute; top: 0px; left: 0px;">
        </div>
        <div class="align-items-center">
            <img src="{{asset('paper2.png')}}" style="width: 220px;
            height: 220px; position: absolute; bottom: 0px; right: 0px;">
        </div>
        <div class="align-items-center">
            <img src="{{asset('paper3.png')}}" style="width: 550px;
            height: 550px; display: block; margin-left: auto; margin-right: auto;">
        </div>
        {{-- <div class="align-items-center">
            <img src="{{asset('textbelongs.png')}}" style="width: 550px;
            height: 550px; margin-left: auto; margin-right: auto;">
        </div> --}}
    </section>
</body>
</html>