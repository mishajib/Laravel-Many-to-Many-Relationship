<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-footer" style="position: fixed;bottom: 0;">
                    &copy; {{ now()->year }} MI SHAJIB. ALL RIGHTS RESERVED.
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Sweet Alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.3.0/dist/sweetalert2.all.min.js"></script>
<!-- Sweet Alert 2 End -->
<!-- Toastr Js -->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
@include('sweetalert::alert')


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            Toast.fire({
                type: 'error',
                title: '{{ $error }}'
            })
        </script>
    @endforeach
@endif


@if(session('successMsg'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            type: 'success',
            title: '{{ session('successMsg') }}'
        })
    </script>
@endif

@stack('js')

</body>
</html>
