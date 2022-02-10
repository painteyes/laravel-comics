
@extends('layouts.app')

@section('page_title')
Homepage
@endsection

@section('main_content')

    <div class="container">

        <div class="comics">

            @foreach ($comics_array as $comic)

                <div class="single-comic">

                    @include('components.single-comic', [
                        'title' => $comic['series'],
                        'cover_path' => $comic['thumb']
                    ])

                </div>
                
            @endforeach

        </div>
        
    </div>
    
@endsection



