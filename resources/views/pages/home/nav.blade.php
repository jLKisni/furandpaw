<div class="nav_container">
    <div class="nav_main">
        <div class="nav_left">
            <a href="{{ url('/') }}"><img src="img/furpawlogo.png"></a>
        </div>
        <div class="nav_right">
            <ul>
                <li>
                    <a href="{{ url('/') }}" class="active">Home</a>
                    <ul class="sub_nav" id="sub1">
                        <li class="li-style"><a href="{{ url('pet-store') }}">Pet Store</a></li>
                        <li class="li-style"><a href="#">Pet Walking</a></li>
                        <li class="li-style"><a href="#">Adoption</a></li>
                        <li class="li-style"><a href="#">Club</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Features</a>
                    <ul class="sub_nav" id="sub2">
                        <li class="li-style"><a href="{{ url('pet-clinics') }}">Pet Clinics</a></li>
                        <li class="li-style"><a href="#">Our Services</a></li>
                        <li class="li-style"><a href="#">Contact</a></li>
                        <li class="li-style"><a href="">Our Team</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Gallery</a>
                    <ul class="sub_nav" id="sub3">
                        <li class="li-style"><a href="#">Pets Adoption</a></li>
                        <li class="li-style"><a href="#">Pets Sale</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('post-sale') }}">Shop</a></li>
                <li><a href="{{ url('adopt') }}">
                        <button class="button green hvr-pulse"><i class="fa fa-check-circle"></i> ADOPT</button>
                    </a></li>
                <li><a href="{{ url('breed') }}">
                        <button class="button red hvr-pulse"><span class="glyphicon glyphicon-heart"></span> FIND A
                            COUPLE
                        </button>
                    </a></li>
            </ul>
        </div>
    </div>
</div><!-- End of Nav -->
