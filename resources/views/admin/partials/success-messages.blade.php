@if(session('message'))
<div class="alert alert-info alert-dismissible" role="alert">

    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
</div>
@endif