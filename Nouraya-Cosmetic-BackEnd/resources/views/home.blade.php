@extends('layouts.app')

@section('content')
    <div class="w-11/12 mx-auto mt-2">
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white border-l-4 border-blue-500 shadow h-24 py-4 px-4 flex items-center rounded">
                <div class="flex-grow">
                    <div class="text-xs font-bold text-blue-500 uppercase mb-1">Produits totaux</div>
                    <div class="text-xl font-bold text-gray-800">{{ $productCount }}</div>
                </div>
                <div>
                    <i class="fas fa-box fa-2x text-gray-300"></i>
                </div>
            </div>
            <div class="bg-white border-l-4 border-green-500 shadow h-24 py-4 px-4 flex items-center rounded">
                <div class="flex-grow">
                    <div class="text-xs font-bold text-green-500 uppercase mb-1">Produits vendus</div>
                    <div class="text-xl font-bold text-gray-800">{{ $basketCount }}</div>
                </div>
                <div>
                    <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                </div>
            </div>
            <div class="bg-white border-l-4 border-red-500 shadow h-24 py-4 px-4 flex items-center rounded">
                <div class="flex-grow">
                    <div class="text-xs font-bold text-red-500 uppercase mb-1">Revenu</div>
                    <div class="text-xl font-bold text-gray-800">{{ number_format($totalBasketPrice, 2) }} MAD</div>
                </div>
                <div>
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>

        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[1000px] mx-auto">
            <canvas id="productBasketChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('productBasketChart').getContext('2d');
            const productCount = {{ $productCount }};
            const basketCount = {{ $basketCount }};

            const data = {
                labels: ['Produits', 'Produits Vendus'],
                datasets: [{
                    label: 'Count',
                    data: [productCount, basketCount],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            new Chart(ctx, config);
        });
    </script>
@endsection
