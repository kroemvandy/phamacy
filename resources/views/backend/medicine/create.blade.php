@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <div class="bg-gray-100 p-5">
        <div class="bg-white shadow-md rounded-md p-5">
            <h3 class="text-2xl font-medium text-gray-700 mb-2">Create Medicine Page</h3>
            <hr>
            <form method="POST" class="mt-8" action="{{ route('store-medicine') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">
                            Name</label>
                        <input type="text" id="MedicineName" name="MedicineName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Panadol" required />
                    </div>
                    <div>
                        <label for="CategoryId" class="block mb-2 text-sm font-medium text-gray-900">
                            Category Type
                        </label>
                        <select name="CategoryId" id="CategoryId"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Choose Category</option>
                            @foreach($categories as $key => $category)
                                <option value="{{ $key }}"> {{ $category }} </option></option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Price </label>
                        <input type="text" id="Price" name="Price"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="10000៛" required />
                    </div>
                    <div>

                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                        <input
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            id="Image" name="Image" type="file">

                    </div>
                    <div>
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900">
                            Qty</label>
                        <input type="number" id="Qty" name="Qty"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="123" required />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">
                            Expire Date</label>
                        <input type="date" id="ExpDate" name="ExpDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Choose Date" required />
                    </div>
                </div>
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900">
                        Description</label>
                    <input type="text" id="MedicineDescription" name="MedicineDescription"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="description..." required />
                </div>
                <div class="flex justify-end mt-9">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                </div>
            </form>

        </div>
    </div>
@endsection

@section('js')
@endsection
