    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <a class="navbar-brand ml-5" href="/">School Management System</a>
    <ul class="navbar-nav ml-auto mr-5">
        @guest
            <li class="nav-item">
                <a href="/login" class="nav-link rounded-0 btn {{request()->is('login')?'btn-light text-dark':''}}">Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link  rounded-0 btn {{request()->is('register')?'btn-light text-dark':''}}">Register</a>
            </li>
        @else
             <li class="nav-item ml-5 ">
                <p class="text-white font-weight-bold mt-2">Welcome !
                    <span class="avatar-circle" style="cursor: pointer;" wire:click="$emit('openUserProfileModal', {{ auth()->user()->id }})">
                        {{ substr(ucfirst(auth()->user()->name), 0, 1) }}
                    </span>
                    <span class="text-warning">
                        {{ ucfirst(auth()->user()->name) }}
                    </span> 
                </p>
            </li>   
            <li class="nav-item ml-5">
                <livewire:logout />
            </li>  
            <nav class="bg-slate-700 text-white">
    <div class="flex" style="display: flex; justify-content: space-between;">
        <a style="color: white; font-family: sans-serif;" href="/StudentControl" class="nav-link">Student Control</a>
        <a style="color: white; font-family: sans-serif;" href="/StaffControl" class="nav-linkk">Staff Control</a>
    </div>
</nav>


@livewireScripts
<style>
    .flex {
        background-color: black;
        padding: 10px;
        border-radius: 5px;
    }

    .nav-link {
        padding:5px;
        /* Adjust padding as needed */
        text-decoration: none;
        transition: background-color 0.3s ease;
        border-radius: 5px;
        margin-left: 5px;
    }
    .nav-linkk {
        padding:5px;
        /* Adjust padding as needed */
        text-decoration: none;
        transition: background-color 0.3s ease;
        border-radius: 5px;
        margin-right: 70%;
    }

    .nav-link:hover {
        background-color: purple;
       width: auto;
    }

    .nav-linkk:hover {
        background-color: purple;
       width: auto;
    }
    .nav-link.active {
        background-color: indigo;
        /* Active background color */
    }
    .nav-linkk.active {
        background-color: indigo;
        /* Active background color */
    }
</style>
    <livewire:scripts />
 
        @endguest
    </ul>
    
</nav>
