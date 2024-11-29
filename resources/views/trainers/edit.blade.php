@extends('layouts.base')

@section('content')

    <form class="max-w-sm mx-auto" action="{{ url('trainers/'.$trainer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" value="{{$trainer->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-pink-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="rank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rank</label>
            <input type="text" name="rank" id="rank" value="{{$trainer->rank}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-pink-400 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button class="bg-pink-700 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Update Trainer</button>
    </form>
@endsection