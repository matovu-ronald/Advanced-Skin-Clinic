<nav class="main-menu">
    <div class="navbar-header">
        <!-- Toggle Button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse clearfix">
        <ul class="navigation">
            <li class="current"><a href="{{ url('/') }}">Home</a></li>

            @foreach($menuItems as $menuItem)
                <li class="current"><a href="{{ $menuItem->url() }}">{{ $menuItem->name }}</a></li>
            @endforeach

        </ul>
    </div>
</nav><!-- Main Menu End-->