@extends('layouts.app')

@section('content')
<section class="h-screen w-screen"
    style="background-image: url({{ asset('assets/images/bg.png') }}); background-position: center; background-repeat: no-repeat;background-size: cover;">
    <div class="flex h-screen w-screen bg--dark">
        <h1 class="text-9xl font--gilroy-bold m-auto"
            style="background: conic-gradient(from 180deg at 50% 50%, #020031 0deg, #090035 19.68deg, #2B045E 29.09deg, #3E0578 37.08deg, #7708BE 44.38deg, #C80EEC 108.66deg, #E839DE 147.4deg, #F35AAA 159.09deg, #F8668A 168.49deg, #FFA290 179.83deg, #FE8E68 180deg, #FF8134 191.01deg, #FFB97D 192deg, #F7BD4F 206.51deg, #F3C07A 219.02deg, #EBD4C3 226.4deg, #DEDFE3 246.49deg, #D8E7F8 269.42deg, #94D7FC 277.72deg, rgba(0, 156, 233, 0.87) 306.55deg, #0058AA 308.44deg, #02205D 321.45deg, #020031 360deg); backdrop-filter: blur(200px);  -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Case Study</h1>
    </div>
</section>
@endsection