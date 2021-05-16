@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4 mb-4">Register New Admin</h1>
    <form action="/cms/en/createUser" method="post">
        @csrf
        <div class="form-group">
            <label for="">Email</label>
            @error('email')
            <div class="alert alert-danger mt-2 mb-2">
                {{$message}}
            </div>
            @enderror
            <input type="text" name="email" class="form-control">
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Firstname</label>
                    @error('firstname')
                    <div class="alert alert-danger mt-2 mb-2">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="firstname" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Lastname</label>
                    @error('lastname')
                    <div class="alert alert-danger mt-2 mb-2">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="lastname" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Address</label>
            @error('adress')
            <div class="alert alert-danger mt-2 mb-2">
                {{$message}}
            </div>
            @enderror
            <textarea name="adress" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            @error('password')
            <div class="alert alert-danger mt-2 mb-2">
                {{$message}}
            </div>
            @enderror
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Re-type Password</label>
            @error('password_confirmation')
            <div class="alert alert-danger mt-2 mb-2">
                {{$message}}
            </div>
            @enderror
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Role</label>
            @error('role')
            <div class="alert alert-danger mt-2 mb-2">
                {{$message}}
            </div>
            @enderror
            <select name="role" id="" class="form-control">
                <option value="1">Admin</option>
                <option value="2">UKM</option>
            </select>
        </div>
        <input type="submit" value="Create New Admin" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
@include('admin/layouts/footer')
