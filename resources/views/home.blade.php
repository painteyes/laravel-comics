
@extends('layouts.app')

@section('page_title')
Homepage
@endsection

@section('main_classes')
bg-dark
@endsection

@section('main_content')

    <div class="container">

        <div class="comics">

            @foreach ($comics_array as $comic)

                <div class="single-comic">

                    @include('components.comic-card', [
                        'title' => $comic['series'],
                        'cover_path' => $comic['thumb'],
                        'id' => $comic['id']
                    ])

                </div>
                
            @endforeach

        </div>
        
    </div>
    
@endsection



