@if(!empty($errors))
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <strong>Ops!!</strong> {!! $error !!}
            @endforeach
        </div>
    @endif
@endif