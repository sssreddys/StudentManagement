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
