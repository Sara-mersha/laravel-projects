@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}">
                
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="username" class="sr-only">username</label>
                    <input type="text" name="username" id="username" placeholder="username" class="bg-gray-100 border-2 w-full  p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{old('username')}}">
                
                    @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" class="bg-gray-100 border-2 w-full p-4  rounded-lg @error('email') border-red-500 @enderror" value="{{old('email')}}">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">password</label>
                    <input type="password" name="pasword" id="password" placeholder="choose password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="mb-4">
                    <label for="pasword_confirmation" class="sr-only">password again</label>
                    <input type="password" name="pasword_confirmation" id="pasword_confirmation" placeholder="repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('pasword_confirmation') border-red-500 @enderror" value="">
               
                @error('pasword_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="mb-4">
                    <button typ="submit" class="bg-blue-500 text-black px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection