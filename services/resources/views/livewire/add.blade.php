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
            
            <a href="{{route('admin.Jobs')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">All Jobs</a>
  
            
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
          <form enctype="multipart/form-data">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="ville" class="block text-sm font-medium text-gray-700">Ville</label>
                  <input type="text" name="ville" id="ville" autocomplete="ville" wire:model="ville" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('ville')
                  <p>{{$message}}</p>
                  @enderror
                </div>
  
                <div class="col-span-6 sm:col-span-4">
                  <label for="phone" class="block text-sm font-medium text-gray-700">phone</label>
                  <input type="text" name="phone" id="phone" wire:model="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('phone')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label class="block text-sm font-medium text-gray-700">exp</label>
                  <input type="text" name="exp" wire:model="exp" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('exp')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="name" class="block text-sm font-medium text-gray-700">name</label>
                  <input type="text" name="name" id="name" wire:model="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('name')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
                  <input type="text" name="service" id="service" wire:model="service" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('service')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="image" class="block text-sm font-medium text-gray-700">image</label>
                  <input type="file" name="image" id="image" wire:model="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('image')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="image" class="block text-sm font-medium text-gray-700">simage</label>
                  <input type="file" name="simage" id="image" wire:model="simage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                  @error('image')
                  <p>{{$message}}</p>
                  @enderror
                </div>

                {{-- <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-sm font-medium text-gray-700">Service</label>
                  <select wire:model="svr_id" name="svr_id" class="w-full border bg-white rounded px-3 py-2 outline-none text-gray-700">
                    {{-- @foreach ($scategories as $scategory)
                      <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                    @endforeach --
                </select>
                </div> --}}
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button wire:click.prevent="store()" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Save
                </button>
                <button wire:click.prevent="closeModalPopover()" type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  Canceld
                  </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>