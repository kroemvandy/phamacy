@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
  <div class="bg-gray-100 p-5 h-full">
    <div class="bg-white p-4 pt-4 shadow-md rounded-lg">
      <h3 class="text-2xl font-medium text-gray-700 mb-2">Update Category Page</h3>
      <hr>  

      <form class="max-w-2xl mx-auto" method="POST" action="{{ route('update-category', [$categoryModel->id]) }}">
        @csrf
        @method('PUT')
        <div class="pt-5 pb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Category Name</label>
          <input type="text" id="CategoryName" name="CategoryName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $categoryModel->CategoryName }}" required />
        </div>  
        <div class="flex justify-end">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Change</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('js')
@endsection