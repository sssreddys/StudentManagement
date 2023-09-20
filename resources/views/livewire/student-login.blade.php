<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto mt-5">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form wire:submit.prevent="staffLogin">
                <p class="display-6 text-center">Student Login</p>
                <hr class="bg-white"/>
                @if($error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $error }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Student ID" wire:model="form.std_id"  />
                    @error("form.std_id")  <p class="pt-2 px-1 text-danger">{{ str_replace('form.std id', 'Student ID', $message)}}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" wire:model="form.password"  />
                    @error("form.password")  <p class="pt-2 px-1 text-danger">{{ 
                    str_replace('form.password', 'password', $message) }}</p>  @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark btn-block" value="Login" />
                </div>
            </form>
        </div>
    </div>
</div>