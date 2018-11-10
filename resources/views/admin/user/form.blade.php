<br>
@include('admin.partial.errors')
<form dir="ltr" method="post" action="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required value="{{ old('email',isset($userItem) ? $userItem->email : '') }}">

    </div>
    <div class="form-group">
        <label for="exampleInputText">Full Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputText" placeholder="Full Name" required value="{{ old('name' , isset($userItem) ? $userItem->name : '') }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password') }}">
    </div>
    <div class="form-group">  <label for="wallet">Initial Wallet</label>  <div class="input-group">

            <input type="text" class="form-control" name="wallet" id="wallet" aria-label="Amount" value="{{ old('wallet',isset($userItem) ? $userItem->wallet : '0') }}" >
            <div class="input-group-append">
                <span class="input-group-text">Rials</span>
            </div>
        </div>
    </div>
    <div class="form-group">
    <label for="inputState">Type</label>
    <select class="custom-select mr-sm-2" id="inputState" name="role">

            <option value="0">Admin</option>
            <option value="1" selected>User</option>

        </select>
    </div>
    <br>
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>