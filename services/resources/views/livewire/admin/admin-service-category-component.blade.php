{{-- <div>
  <style>
    nav svg{
      height: 20px;
    }

    nav .hidden{
      display: block !important;
    }
  </style>
  <div class="container">
    <div class="row" style="margin-top: -30px;">
        <div class="titles">
            <h2>Services Category</h2>
            <i class="fa fa-plane"></i>
            <hr class="tall">
        </div>
    </div>
</div>

<nav class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
        
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <button wire:click="create()" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Add Category</button>
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

@if($isModalOpen)
@include('livewire.create')
@endif

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Id
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Title
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($scategories as $scategory)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $scategory->id }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="{{asset('')}}/{{$scategory->image}}" style="height: 50px; width:50px;" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{ $scategory->name }}
                      
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{ $scategory->slug }}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <button wire:click="delete({{ $scategory->id }})" class="text-indigo-600 hover:text-indigo-900">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div> --}}



<div>
  <!-- Service Start -->
  <div class="service">
    <div class="container">
        <div class="section-header">
            <p>Our Services</p>
            <h2>Provide Services Worldwide</h2>
        </div>
        {{-- <input class="form-control" type="text" placeholder="Your Name" wire:model="search"> --}}
        <a wire:click="create()" class="btn">Get A Quote</a>
        @if($isModalOpen)
        @include('livewire.create')
        @endif
        <div class="row">
          @foreach ($scategories as $scategory)
            <div class="col-lg-3 col-md-6">
              <img src="{{asset('assets/img/cancel.svg')}}" wire:click="delete({{ $scategory->id }})" style="height: 10px; width:10px;">
                <div class="service-item">
                    <img src="{{asset('assets/img/service-1.jpg')}}" alt="Service">
                    <h3>{{ $scategory->name }}</h3>
                    <p>
                      {{ $scategory->slug }}
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
                {{--  --}}
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- <ul>
  @foreach($scategories as $scategory)
      <li>{{ $scategory->name }}</li>
  @endforeach
</ul> --}}
<!-- Service End -->
</div>