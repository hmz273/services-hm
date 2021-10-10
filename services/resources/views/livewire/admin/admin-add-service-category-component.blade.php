<style>
  nav svg{
    height: 20px;
  }

  nav .hidden{
    display: block !important;
  }
</style>
<nav class="bg-gray-800">
<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
  <div class="relative flex items-center justify-between h-16">
    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
      
      <div class="hidden sm:block sm:ml-6">
        <div class="flex space-x-4">
          
          <a href="{{route('admin.service-categories')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">All Category</a>

          
        </div>
      </div>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      <div class="ml-3 relative">
      </div>
    </div>
  </div>
</div>
</nav>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6 p-6 ">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">New Category</h3>
          <p class="mt-1 text-sm text-gray-600">
            This information will be displayed publicly so be careful what you share.
          </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        @if (Session::has('message'))
            <div role="alert">{{Session::get('message')}}</div>
        @endif
        <form>
          @csrf
          <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" autocomplete="name" wire:model="name" wire:keyup="generateSlug" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('name')
                <p>{{$message}}</p>
                @enderror
              </div>

              <div class="col-span-6 sm:col-span-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input type="text" name="slug" id="slug" wire:model="slug" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                @error('slug')
                <p>{{$message}}</p>
                @enderror
              </div>
  
              <div>
                <label class="block text-sm font-medium text-gray-700">
                  Cover photo
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                  <div class="space-y-1 text-center">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex text-sm text-gray-600">
                      <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="image" wire:model="image" type="file" class="sr-only">
                        @error('image')
                        <p>{{$message}}</p>
                        @enderror
                      </label>
                      <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">
                      PNG, JPG, GIF up to 10MB
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button wire:click.prevent="createNewCategory()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>