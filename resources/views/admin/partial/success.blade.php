@if(session('success'))
<div class="alert alert-success">
    <p>your creation was successfull</p>
</div>
@endif
@if(session('delete'))
    <div class="alert alert-success">
        <p>the user destroyed</p>
    </div>
@endif
@if(session('status'))
    <div class="alert alert-success">
        <p>the user update</p>
    </div>
@endif
@if(session('success_file'))
    <div class="alert alert-success">
        <p>the file created</p>
    </div>
@endif
@if(session('delete_file'))
    <div class="alert alert-success">
        <p>the file deleted</p>
    </div>
@endif
@if(session('plans_success'))
    <div class="alert alert-success">
        <p>the plan created</p>
    </div>
@endif
@if(session('plan_delete'))
    <div class="alert alert-success">
        <p>the plan deleted</p>
    </div>
@endif
@if(session('package_success'))
    <div class="alert alert-success">
        <p>the package created</p>
    </div>
@endif
@if(session('delete_package'))
    <div class="alert alert-success">
        <p>the package deleted</p>
    </div>
@endif
