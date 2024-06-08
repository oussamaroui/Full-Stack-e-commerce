@extends('layouts.app')

@section('content')
    <div class="container w-11/12 mx-auto">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            <h2 class="text-2xl font-bold mb-4">Les ventes</h2>
            <table class="min-w-full leading-normal border-2 border-gray-200 rounded-xl">
                <thead>
                    <tr class="border-b-2 border-gray-200">
                        <th
                            class="px-5 py-3 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Image
                        </th>
                        <th
                            class="px-5 py-3 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Name
                        </th>
                        <th
                            class="px-5 py-3 bg-gray-100 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">
                            Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach ($products as $product)
                        @php
                            $totalPrice += $product->price;
                        @endphp
                        <tr class="border-b border-gray-300 bg-white">
                            <td class="px-2 py-2">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="w-16 h-16 object-cover mx-auto">
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ $product->name }}
                            </td>
                            <td class="px-2 py-2 text-center">
                                {{ number_format($product->price, 2) }} MAD
                            </td>
                        </tr>
                    @endforeach
                    <tr class="border-t-2 border-gray-300 bg-gray-500 text-white">
                        <td colspan="2" class="px-2 py-2 text-center font-semibold">Total Price:</td>
                        <td colspan="1" class="px-2 py-2 text-center font-semibold">{{ number_format($totalPrice, 2) }}
                            MAD</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
