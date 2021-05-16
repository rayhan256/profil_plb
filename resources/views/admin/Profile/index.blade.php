@include('admin/layouts/header')
    <div class="container-fluid">
        <h3 class="mt-4 mb-4">Admin Profile</h3>
        <div class="d-flex flex-row justify-content-between">
            <div class="flex-column align-self-center text-center" style="margin-left: 10%;">       
                <img src="{{asset('storage/profile/'.$admin->profile_pic)}}" alt="profile" class="rounded-circle" width="150" height="150">
                <div class="text-center mt-4 h4">
                    {{$admin->firstname}} {{$admin->lastname}}
                </div>
                <div class="text-center mt-1 h6">
                    {{$admin->email}}
                </div>
            </div>
            <div class="flex-column" style="margin-right: 15%">
                <h5 class="mb-4">Update Profile</h5>
                <form action="/cms/en/profile/update" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$admin->id}}">
                    <div class="form-group">
                        <label for="">Firstname</label>
                        <input type="text" name="firstname" class="form-control" value="{{$admin->firstname}}">
                    </div>
                    <div class="form-group">
                        <label for="">Lastname</label>
                        <input type="text" name="lastname" class="form-control" value="{{$admin->lastname}}">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" value="{{$admin->adress}}">
                    </div>
                    <div class="form-group">
                        <label for="">Profile Photo</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <input type="submit" value="Update" class="btn btn-outline-primary mt-3 mb-3">
                </form>
            </div>
        </div>
    </div>
@include('admin/layouts/footer')