@extends('backend.layouts.master')

@section('css')
    
@endsection

@section('content')
<div class="bg-gray-100 p-5 h-full">
    <div class="bg-white p-4 shadow-md rounded-lg">     
        <h3 class="text-2xl font-medium text-gray-700 mb-2">Category Page</h3>
        <hr>

        @if (Session::has('success'))
            <div id="success-alert" class="p-3 mb-3 w-96 mt-1 mx-auto text-sm text-green-700 bg-green-100 border border-green-400 rounded-lg shadow-md flex items-center justify-between dark:bg-green-200 dark:text-green-800" role="alert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-700 dark:text-green-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 0l2-2m-6 6V6" />
                    </svg>
                    {{ Session::get('success') }}
                </div>
                <button onclick="document.getElementById('success-alert').remove();" class="text-green-700 hover:text-green-800 focus:outline-none">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('success-alert').remove();
                }, 5000);
            </script>
         @endif
    
        <div class="mt-5 mb-5 flex justify-end">
            <a href="{{ route('create-category') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class='fas fa-plus-square'></i> Create Category</a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-h-[430px]">
            <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400">
                <thead class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-200 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-48 py-3">
                            Category Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                @if(count($category) > 0)
                        @foreach ( $category as $item)
                        <tr class="odd:bg-white even:bg-gray-50 border-b dark:border-gray-300  overflow-auto">
                            <th scope="row" class="px-6 py-0 font-medium text-gray-800 whitespace-nowrap">
                                {{ $item->id }}
                            </th>
                            <th scope="row" class="px-48 py-0 font-medium text-gray-800 whitespace-nowrap">
                                {{ $item->CategoryName }}
                            </th>
                            <th scope="row" class="px-6 py-2 text-gray-800 whitespace-nowrap flex gap-2 items-center">
                                <a href="{{ route('edit-category', [$item->id]) }}" class="tooltip text-white font-normal bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 rounded-md text-sm px-3 py-2.5 transition duration-150 ease-in-out dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700"><i class='fas fa-edit'></i><span class="tooltiptext">Edit</span></a>
                                <form action="{{ route('delete-category', [$item->id]) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="tooltip show_confirm focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-400 font-normal rounded-md text-sm px-3 py-2.5 transition duration-150 ease-in-out dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700"><i class='fas fa-trash-alt'></i><span class="tooltiptext">Delete</span></button>
                                </form>
                            </th>  
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <th>No Data</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection
