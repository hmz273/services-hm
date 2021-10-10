{{-- <div>
  <div class="service">
    <div class="container">
        <div class="section-header">
            <p>Our Services</p>
            <h2>Provide Services Worldwide</h2>
        </div>
        <a wire:click="create()" class="btn">Get A Quote</a>
        @if($isModalOpen)
        @include('livewire.add')
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
            </div>
            @endforeach
        </div>
    </div>
</div>
</div> --}}

<div class="team">
  <div class="container">
      <div class="section-header">
          <p>Team Member</p>
          <h2>Meet Our Expert Cleaners</h2>
      </div>
      <a wire:click="create()" class="btn">Get A Quote</a>
        @if($isModalOpen)
        @include('livewire.add')
        @endif
      <div class="row">
          @foreach ($prvs as $prv)
          <div class="col-lg-3 col-md-6">
            <img src="{{asset('assets/img/cancel.svg')}}" wire:click="delete({{ $prv->id }})" style="height: 10px; width:10px;">
              <div class="team-item">
                  <div class="team-img">
                      <img src="{{asset('assets/img/team-1.jpg')}}" alt="Team Image">
                  </div>
                  <div class="team-text">
                      <h2>{{ $prv->ville }}</h2>
                      {{-- <h3>{{$prv->scategories->name}}</h3> --}}
                      {{ $prv->phone }}
                      <div class="team-social">
                          <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                          <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                          <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          
          
          @endforeach
  </div>
</div>