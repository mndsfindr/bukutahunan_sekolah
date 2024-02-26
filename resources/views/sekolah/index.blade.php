<html>
    <head>
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <section class="vh-100">
            <div class="align-items-center">
                <a class="btn btn-primary me-1" href="{{url('/sekolah/welcome')}}" >
                <img src="{{asset('oursatoernus.png')}}" style="width: 500px;
                    height: 535px; display: block; margin-left: auto; margin-right: auto;">
                </a>
            </div>
            
            <div>
                <img src="{{asset('cloud.png')}}" style="width: 220px;
                    height: 200px; position: absolute; top: 8px; left: 140px;">
            </div>

            <div>
                <img src="{{asset('cloud.png')}}" style="width: 220px;
                height: 200px; position: absolute; top: 8px; right: 170px;">
            </div>

            <div>
                <img src="{{asset('cloud.png')}}" style="width: 220px;
                height: 200px; position: absolute; bottom: 8px; left: 140px;">
            </div>

            <div>
                <img src="{{asset('cloud.png')}}" style="width: 220px;
                height: 200px; position: absolute; bottom: 8px; right: 170px;">
            </div>

        </section>
    </body>
</html>