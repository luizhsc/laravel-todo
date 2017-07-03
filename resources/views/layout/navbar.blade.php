<div class="w3-top">
    <div class="w3-bar w3-black w3-card-2">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    </div>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card-2" id="myNavbar">
            <a href="{{ url('/home/') }}" class="w3-bar-item w3-button w3-padding-large">Home</a>


            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Task <i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="{{ url('/tarefas/') }}" class="w3-bar-item w3-button">List All</a>
                    <a href="{{ url('/tarefas/create') }}" class="w3-bar-item w3-button">New</a>   

                </div>
            </div>

            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Tag <i class="fa fa-caret-down"></i></button>     
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="{{ url('/tags/') }}" class="w3-bar-item w3-button">List All</a>
                    <a href="{{ url('/tags/create') }}" class="w3-bar-item w3-button">New</a>       
                </div>
            </div>            
        </div>
    </div>