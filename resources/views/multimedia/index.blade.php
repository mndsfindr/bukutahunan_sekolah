<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css'])

    <style>
        body {
            display: flex;
            flex-direction: row;
        }

        div {
            margin-right: 10px; /* Adjust the margin as needed for spacing between images */
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }
        
    </style>
</head>
<body>
    <div>
        <img src="{{asset('ICMM.png')}}" style="width: 151px; height: 154px; flex-shrink: 0;">
    </div>

    <div>
        <img src="{{asset('IC1MM.png')}}" style="width: 125px; height: 113px; flex-shrink: 0; position: absolute; right:0; top:0;">
    </div>

    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>

    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>

    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>
    
    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>

    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>

    <div>
        <img src="{{asset('MMP.png')}}" style="width: 168px; height: 175px;">
    </div>

</body>
</html>
