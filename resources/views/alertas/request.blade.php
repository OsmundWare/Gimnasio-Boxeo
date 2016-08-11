<article class="col-sm-12">
    @if(count($errors)>0)
        <div class="alert alert-danger fade in">
            <button class="close" data-dismiss="alert">
                x
            </button>
            <i class="fa-fw fa fa-times"></i>
            <strong>Error!</strong>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
        </div>
    @endif
</article>