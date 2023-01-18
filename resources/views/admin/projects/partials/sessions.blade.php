@if (session('create'))
    <div class="alert alert-success w-75 m-auto text-center my-3" role="alert">
        {!! session('create') !!}
    </div>
@elseif (session('edit'))
    <div class="alert alert-success w-75 m-auto text-center my-3" role="alert">
        {!! session('edit') !!}
    </div>
@elseif (session('delete'))
    <div class="alert alert-success w-75 m-auto text-center my-3" role="alert">
        {!! session('delete') !!}
    </div>
@else
    <h3 class="text-center py-3">I MIEI PROGETTI</h3>
@endif
