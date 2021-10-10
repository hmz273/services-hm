<div>
    <div class="px-4 space-y-4 mt-8">
        <div class="row text-center">
<h1 ><h2 class="text-center">search for a 
    <a href="" class="typewrite text-danger " data-period="2000" data-type='[ "Plombier.", "Techno", "Treciane", "Papier" ]'>
      <span class="wrap "></span>
    </a>
</h2>
  </h1>
</div>
        {{-- <h3 class="text-center text-gray">Search for a<span class="wrap"></h3> --}}
        <form method="get">

            <input class="border-solid border border-gray-300 p-2 w-full md:w-1/4" 
                type="text" wire:model="term"/>

                
                {{-- <input class="border-solid border border-gray-300 p-2 w-full md:w-1/4" 
                type="text" placeholder="Services" wire:model="term"/> --}}
        </form>
        <div class="text-white" wire:loading>Searching users...</div>
        <div wire:loading.remove>
        <!-- 
            notice that $term is available as a public 
            variable, even though it's not part of the 
            data array 
        -->
        @if ($term == "")
            <div class="text-white text-sm">
                Enter a term to search for users.
            </div>
        @else
            @if($jobs->isEmpty())
                <div class="text-gray-500 text-sm">
                    No matching result was found.
                </div>
                {{-- @if($scategories->isEmpty())
                <div class="text-gray-500 text-sm">
                    No matching result was found.
                </div> --}}
            @else
                <div class="row mt-5">
            @foreach ($jobs as $jb)
            {{-- <div class="col-lg-3 col-md-6"> --}}

                {{-- <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/img/team-1.jpg')}}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>{{ $jb->name }}</h2>
                        {{-- @foreach ($doctors as $doctor) --}
                        <h3>{{ $jb->ville }}</h3>
                        <h3>{{ $jb->service }}</h3>
                        
                        
                        <div class="team-social">
                            <a class="social-tw" value="{{ $jb->phone }}"><i class="fab fa-twitter"></i></a>
                            <a class="social-fb" href="tel:{{ $jb->phone }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>--}}
            {{-- </div>  --}}
            <div class="col-lg-3 col-md-6">
                <div class="our-team-main">
                
                <div class="team-front">
                <img src="http://placehold.it/110x110/9c27b0/fff?text=Dilip" class="img-fluid" />
                <h3>{{ $jb->name }}</h3>
                <p class="text-gray">{{ $jb->ville }}</p>
                <p><a href="{{ $jb->phone }}">contact</a></p>
                </div>
                
                {{-- <div class="team-back">
                <span>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                natoque penatibus et magnis dis parturient montes,
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                natoque.
                </span>
                </div> --}}
                
                </div>
                </div>
            @endforeach
    </div>
                {{-- @else --}}
                {{-- @foreach($scategories as $scategory)
                    <div>
                        <h3 class="text-lg text-gray-900 text-bold">{{$scategory->name}}</h3>
                    </div>
                @endforeach --}}
            @endif
            {{-- @endif --}}
        @endif
        </div>
    </div>
    <div class="px-4 mt-4">
        {{$jobs->links()}}
    </div>

    <style>


h1
{
	color:#fff;
	margin:40px 0 60px 0;
	font-weight:300;
}

.our-team-main
{
	width:100%;
	height:auto;
	border-bottom:5px #323233 solid;
	background:#fff;
	text-align:center;
	border-radius:10px;
	overflow:hidden;
	position:relative;
	transition:0.5s;
	margin-bottom:28px;
}


.our-team-main img
{
	border-radius:50%;
	margin-bottom:20px;
	width: 90px;
}

.our-team-main h3
{
	font-size:20px;
	font-weight:700;
}

.our-team-main p
{
	margin-bottom:0;
}

.team-back
{
	width:100%;
	height:auto;
	position:absolute;
	top:0;
	left:0;
	padding:5px 15px 0 15px;
	text-align:left;
	background:#fff;
	
}

.team-front
{
	width:100%;
	height:auto;
	position:relative;
	z-index:10;
	background:#fff;
	padding:15px;
	bottom:0px;
	transition: all 0.5s ease;
}

/* .our-team-main:hover .team-front
{
	bottom:-200px;
	transition: all 0.5s ease;
}

.our-team-main:hover
{
	border-color:#777;
	transition:0.5s;
} */

/*our-team-main*/


    </style>

    <script>
       var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
    </script>
</div>