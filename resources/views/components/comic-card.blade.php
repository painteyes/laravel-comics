
{{-- 
    [Available data]

    $title = [string]
    $cover_path = [string]
    $id = [number]

--}}

<a href="{{ route('single-comic', ['id' => $id]) }}">

    <div>
        <img src="{{$cover_path}}" alt="{{$title}}">
        <h3>{{$title}} </h3>
    </div>

</a>