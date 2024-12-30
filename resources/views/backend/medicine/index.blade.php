@extends('backend.layouts.master')

@section('css')
    
@endsection

@section('content')
    <div class="bg-gray-100 p-5">
        <div class="bg-white shadow-md rounded-lg p-4">
            <h3 class="text-2xl font-medium mb-2 text-gray-800">Medicine Page</h3>
            <hr>

            <div class="flex justify-end mt-5">
                <a href="{{ route('create-medicine') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-1 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class='fas fa-plus-square'></i> Create Medicine</a>
            </div>

            <table class="min-w-full mt-5">
                <thead>
                    <tr>
                        <th
                            class="pl-5 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            No.
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Name
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Description
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Price
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Qty
                        </th>
                        <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Category
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    
                  @if(count($medicine) > 0)
                    @foreach ( $medicine as $medicineItem)
                    <tr>
                        <td class="px-5 py-2 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900">{{ $medicineItem->id }}</div>
                        </td>
    
                        <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    @if ($medicineItem->Image !== '')
                                    <img src="{{ asset('storage/' . $medicineItem->Image) }}" alt="img">
                                    @else
                                        <img src="{{ asset('/images/no-img.png') }}" alt="image">
                                    @endif
                                </div>

                                <div class="ml-4">
                                    <div class="text-sm font-medium leading-5 text-gray-900">
                                        {{ $medicineItem->MedicineName }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900"> {{ $medicineItem->MedicineDescription }}</div>
                        </td>

                        <td class="px-6 py-2 whitespace-no-wrap border-b border-gray-200">
                            <span
                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full"> {{ $medicineItem->Price }} រៀល</span>
                        </td>

                        <td
                            class="px-6 py-2 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200"> {{ $medicineItem->Qty }}</td>
                        <td
                            class="px-6 py-2 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200"> {{ $medicineItem['category']['CategoryName'] }}</td>
                        <td
                            class="px-6 py-2 text-sm font-medium leading-5 text-right whitespace-no-wrap border-b border-gray-200 flex items-center gap-2">
                            <a href="" class="tooltip text-white font-normal bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 rounded-md text-xs px-3 py-2.5 transition duration-150 ease-in-out dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700"><i class='fas fa-edit'></i><span class="tooltiptext">Edit</span></a>
                            <a href="" class="tooltip text-white font-normal bg-green-600 hover:bg-green-700 focus:ring-2 focus:ring-green-400 rounded-md text-xs px-3 py-2.5 transition duration-150 ease-in-out dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700"><i class='fas fa-eye'></i><span class="tooltiptext">Detail</span></a>

                            <form method="POST" >
                                {{-- @csrf
                                @method('DELETE') --}}
                                <button type="submit" class="tooltip focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-400 font-normal rounded-md text-xs px-3 py-2.5 transition duration-150 ease-in-out dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700"><i class='fas fa-trash-alt'></i><span class="tooltiptext">Delete</span></button>
                            </form>
                        </td>
                    </tr>  
                    @endforeach
                  @else
                    <p>No Data</p>
                  @endif
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    
@endsection