{{-- 
    
    [Available data]

    $single_comic_details = [

        "id" => [number],
        "title" => [string],
        "description" => [string],
        "thumb" => [string],
        "price" => [string],
        "series" => [string],
        "sale_date" => [string],
        "type" => [string],
        "artists_list" => [string],
        "writers" => [array]
        
    ]   

--}}

@extends('layouts.app')

@section('page_title')
Single comic details
@endsection

@section('main_classes')
bg-light
@endsection

@section('main_content')

    <div>
        <img src="{{$single_comic_details['thumb']}}" alt="">
    </div>

    <h2>{{$single_comic_details['title']}}</h2> 

    <div>U.S. Price: {{$single_comic_details['price']}}</div>

    <div>
        {{$single_comic_details['description']}}
    </div>

    <div>
        <div>
            <h3>Talent</h3>
            <div>Art by: 
                
                
                
            </div>
            {{-- <div>Written by: {{$single_comic_details['writers']}}</div> --}}
        </div>

        <div>
            <h3>Specs</h3>
            <div>Series: {{$single_comic_details['series']}}</div>
            <div>U.S. Price: {{$single_comic_details['price']}}</div>
            <div>On Sale Date: {{$single_comic_details['sale_date']}}</div>
        </div>
    </div> 
   
@endsection