<div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="nav navbar-brand" id="left-bar">
            <a href="#" class="navbar-brand">
                <img src="{{ URL::to('/images') }}/logo.jpg" width=220; height=150;>
            </a>
        </div>
        <!-- hamburger -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse" aria-controls="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only"> Toggle Navigation </span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapse">
            <div class="navbar-nav float-right text-right pr-3">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="#">Blog</a>
                <a class="nav-item nav-link active" href="#">About us</a>
                <a class="nav-item nav-link active" href="#">Services</a>

                    <a  style="display: none" id="navbarDropdownLogout" class="nav-item nav-link active" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Log uit') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>




            </div>
        </div>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-item nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-item nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="active nav-link nav-item dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                       <?php $name = Auth::user()->name ?> {{strtok($name," ")}} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown" >
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Log uit') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</div>

<script>
    $('.navbar-toggler-icon').hover(function(){
        $('#navbarDropdownLogout').css('display','initial');

        $('#navbarDropdown').css('display','none');
    });



</script>