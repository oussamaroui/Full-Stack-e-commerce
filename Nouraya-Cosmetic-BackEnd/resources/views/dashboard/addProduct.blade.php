@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="flex flex-col justify-center items-center border-2 border-gray-300 py-3 cursor-pointer opacity-70 hover:opacity-100" for="image">
                    <img src="/icons/makeup.svg" alt="upload" width="25" class="inline ml-2" />
                    Ajouter Image
                    <input type="file" name="image" id="image" class="hidden file-input"
                        onchange="handleImageChange(event)">
                </label>
                <div id="image-preview" class="flex justify-center mt-4 hidden">
                    <img id="preview-img" src="#" alt="Selected" class="preview-img w-24 h-24 object-cover" />
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Nom
                </label>
                <input type="text" name="name" id="name"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Product Name">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Prix
                </label>
                <input type="text" name="price" id="price"
                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Price">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="w-full bg-[#E76364] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Ajouter Produit
                </button>
            </div>
        </form>
    </div>

    <script>
        function handleImageChange(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');
            const previewImg = document.getElementById('preview-img');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.classList.remove('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.classList.add('hidden');
            }
        }
    </script>
@endsection
