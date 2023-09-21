<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <div class="container" style="height:50px; width: 100%; background-color: #0E1264; color: white;margin-top:10px">
                            <h3 style="text-align: center;">Edit Profile</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif

                        <form wire:submit.prevent="updateTeacher">
                            <div class="form-group">
                            <div class="form-group">
           <label for="image" style="margin-left:170px">Image</label>
             <input type="file" class="form-control" style="margin-top:20" wire:model="image" />

            @if ($image)
            @if(is_string($image))
        <img src="{{ asset('storage/' . $image) }}" alt="Teacher Image" class="mt-2" style="max-width: 200px;margin-left:120px" />
        <span>{{$image}}</span>
        @else
        <img src="{{ $image->temporaryUrl() }}"  alt="Temporary Image Preview" style="max-width: 200px; margin-top: 10px; margin-right:20px;" />
          @endif
          @endif
         @error('image')
        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
          @enderror
            </div>


                               
                                <h3 style="margin-left: 170px">{{ $name }}</h3>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" wire:model="email" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('email')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="mobile" class="form-control" wire:model="mobile" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('mobile')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="address" class="form-control" wire:model="address" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('address')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input type="gender" class="form-control" wire:model="gender" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('gender')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="date_of_birth">Date Of Birth (dd/mm/yyyy)</label>
                                    <input type="date" class="form-control" wire:model="date_of_birth" autocomplete="off" max="{{date('Y-m-d')}}" />
                                    {{-- for validation --}}
                                    @error('date_of_birth')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="experience">Experience</label>
                                    <input type="experience" class="form-control" wire:model="experience" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('experience')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="remarks">Remarks</label>
                                    <input type="remarks" class="form-control" wire:model="remarks" autocomplete="off" />
                                    {{-- for validation --}}
                                    @error('remarks')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary btn-sm w-50" style="background-color: #0E1264; margin-top:30px;">Update Teacher</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
