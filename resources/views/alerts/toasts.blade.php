<script>
    $(document).ready(function () {
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                toastr.error("{{$error}}");
            @endforeach
        @endif

        @if (session('status'))
            toastr.success(' {{ session('status') }}');
        @endif
    })
</script>

<script type="text/javascript">
    window.addEventListener('alert', ({detail: {type, message}}) => {
        toastr.success(message);
    })
</script>
