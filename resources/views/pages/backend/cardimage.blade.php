<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Card Image') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('status'))
                <div class="flex items-center justify-center">
                    <div class="flex bg-{{ session('status') === 'success' ? 'green' : 'red' }}-100 border border-{{ session('status') === 'success' ? 'green' : 'red' }}-400 text-{{ session('status') === 'success' ? 'green' : 'red' }}-700 px-4 py-3 rounded" role="alert">
                        <strong class="font-bold">{{ session('status') === 'success' ? 'Success!' : 'Error!' }}</strong>
                        <span class="block sm:inline">{{ session('message') }}</span>
                    </div>
                </div>
            @endif
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-4 md:pr-2">
                    <div class="card">
                        <!-- Image Preview 1 -->
                        @foreach($photos as $photo)
                            @if($photo->serial === 'card1')
                                <div class="image-preview mb-4" style="width: 200px; height: 200px;"> <!-- Adjust width and height as needed -->
                                    <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview" class="preview-image w-full h-full object-cover">
                                </div>
                            @endif
                        @endforeach


                        <!-- Form for Image URL 1 -->
                        <form id="imageUploadForm" class="mb-4" enctype="multipart/form-data" action="{{ route('card.photo.update', ['id' => "card1"]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Upload
                            </button>
                        </form>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mb-4 md:pl-2">
                    <div class="card">
                        <!-- Image Preview 2 -->
                        @foreach($photos as $photo)
                            @if($photo->serial === 'card2')
                                <div class="image-preview mb-4" style="width: 200px; height: 200px;"> <!-- Adjust width and height as needed -->
                                    <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview" class="preview-image w-full h-full object-cover">
                                </div>
                            @endif
                        @endforeach
                        <!-- Form for Image URL 2 -->
                        <form id="imageUploadForm" class="mb-4" enctype="multipart/form-data" action="{{ route('card.photo.update', ['id' => "card2"]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Upload
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 mb-4 md:pr-2">
                    <div class="card">
                        <!-- Image Preview 1 -->
                        @foreach($photos as $photo)
                            @if($photo->serial === 'card3')
                                <div class="image-preview mb-4" style="width: 200px; height: 200px;"> <!-- Adjust width and height as needed -->
                                    <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview" class="preview-image w-full h-full object-cover">
                                </div>
                            @endif
                        @endforeach
                        <!-- Form for Image URL 1 -->
                        <form id="imageUploadForm" class="mb-4" enctype="multipart/form-data" action="{{ route('card.photo.update', ['id' => "card3"]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Upload
                            </button>
                        </form>
                    </div>
                </div>
                <div class="w-full md:w-1/2 mb-4 md:pl-2">
                    <div class="card">
                        <!-- Image Preview 2 -->
                        @foreach($photos as $photo)
                            @if($photo->serial === 'card4')
                                <div class="image-preview mb-4" style="width: 200px; height: 200px;"> <!-- Adjust width and height as needed -->
                                    <img src="{{ asset('uploads/cards/'. $photo->image) }}" alt="Image Preview" class="preview-image w-full h-full object-cover">
                                </div>
                            @endif
                        @endforeach
                        <!-- Form for Image URL 2 -->
                        <form id="imageUploadForm" class="mb-4" enctype="multipart/form-data" action="{{ route('card.photo.update', ['id' => "card4"]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
                                <input type="file" id="image" name="image" accept="image/*" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                            <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Upload
                            </button>
                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
</x-app-layout>
