@if (count($errors) > 0 )
    @foreach ($errors->all() as $error)

        <div class="alert alert-danger">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none';">×</button>
            <span><b> Errors - </b>{{ $error }}</span>
        </div>
    @endforeach

@endif