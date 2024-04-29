<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Video Gallery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="max-w-lg mx-auto">
                @if(session('status'))
                    <div class="flex items-center justify-center">
                        <div class="flex bg-{{ session('status') === 'success' ? 'green' : 'red' }}-100 border border-{{ session('status') === 'success' ? 'green' : 'red' }}-400 text-{{ session('status') === 'success' ? 'green' : 'red' }}-700 px-4 py-3 rounded" role="alert">
                            <strong class="font-bold">{{ session('status') === 'success' ? 'Success!' : 'Error!' }}</strong>
                            <span class="block sm:inline">{{ session('message') }}</span>
                        </div>
                    </div>
                @endif

                    <form class="mb-4 container-fluid" enctype="multipart/form-data" action="{{ route('upload.gallery.video') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="link" id="link" rows="4" style="width: 100%;" placeholder="Enter video link"></textarea>
                        </div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Upload
                        </button>
                    </form>


                    <div class="container mx-auto px-4">
                        <div class="grid grid-cols-2 gap-4">
                            @foreach($videos as $video)
                                <div class="w-full sm:w-1/2 mb-4">
                                    <div class="aspect-w-12 aspect-h-9">
                                        {!! $video->link !!}
                                    </div>
                                    <form action="{{ route('gallery.video.delete', $video->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this slider?')" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 mt-2">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>

            </div>




        </div>
    </div>
</x-app-layout>
