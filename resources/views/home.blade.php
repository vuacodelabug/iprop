@extends('layouts.master')

@section('title', 'Hello world')
@section('content')
    <div class="page-content">
        <div>
            <h1 class="text-container blinking-text animate__animated animate__pulse">Hello World</h1>
            <select name="province" id="province">
                <option value="">Chọn tỉnh</option>
                @foreach($provinces as $province)
                    <option value="{{ $province->provinceid }}">{{ $province->name }}</option>
                @endforeach
            </select>
            
            <select name="district" id="district">
                <option value="">Chọn huyện</option>
            </select>
            {{-- disabled --}}
            <select name="ward" id="ward">
                <option value="">Chọn xã</option>
            </select>
        </div>
        <img src="" alt="">
    </div>
@endsection
@section('css')
@endsection
@section('script')
    <script>
       
    </script>
@endsection
