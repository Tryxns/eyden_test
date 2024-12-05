<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @session('success')
        <div class="py-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="alert alert-success p-6" role="alert"> 
                        {{ $value }}
                    </div>
                </div>
            </div>
        </div>

    @endsession
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('jumbotron.upload') }}" enctype='multipart/form-data'>
                    @csrf                
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="col-span-full">
                                <label for="jumbotron_img" class="block text-sm/6 font-medium dark:text-gray-100">Jumbotron Image</label>
                                <input
                                    type="file"
                                    className="text-sm text-black-500
                                    file:mr-5 file:py-1 file:px-3 file:border-[1px]
                                    file:text-xs file:font-medium
                                    file:bg-stone-50 file:text-black-700
                                    hover:file:cursor-pointer hover:file:bg-blue-50
                                    hover:file:text-blue-700 text-black-900"
                                    name="jumbotron_img"
                                />
                                
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="col-span-full">
                                <label for="jumbotron_headline" class="block text-sm/6 font-medium dark:text-gray-100">Jumbotron headline</label>
                                <input id="jumbotron_headline" type="hidden" name="jumbotron_headline" value="" />
                                <trix-editor input="jumbotron_headline" class="trix-content"></trix-editor>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="col-span-full">
                                <label for="jumbotron_caption" class="block text-sm/6 font-medium dark:text-gray-100">Jumbotron caption</label>
                                <input id="jumbotron_caption" type="hidden" name="jumbotron_caption" value="" />
                                <trix-editor input="jumbotron_caption" class="trix-content"></trix-editor>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('update.benefit') }}" enctype='multipart/form-data'>
                    @csrf
                    <div class="editor-container p-6" id="">                        
                        <label for="benefit_title">Benefit Title</label>
                        <input id="benefit_title" type="hidden" name="benefit_title" value="" />
                        <trix-editor input="benefit_title" class="trix-content"></trix-editor>
                    </div>

                    <div class="editor-container p-6" id="">                        
                        <label for="benefit_one">Benefit One</label>
                        <input id="benefit_one" type="hidden" name="benefit_one" value="" />
                        <trix-editor input="benefit_one" class="trix-content"></trix-editor>
                    </div>

                    <div class="editor-container p-6" id="">                        
                        <label for="benefit_two">Benefit Two</label>
                        <input id="benefit_two" type="hidden" name="benefit_two" value="" />
                        <trix-editor input="benefit_two" class="trix-content"></trix-editor>
                    </div>

                    <div class="editor-container p-6" id="">                        
                        <label for="benefit_three">Benefit Three</label>
                        <input id="benefit_three" type="hidden" name="benefit_three" value="" />
                        <trix-editor input="benefit_three" class="trix-content"></trix-editor>
                    </div>
                    <div class="p-6">
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
