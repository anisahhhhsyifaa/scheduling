<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator Form</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.svg') }}" type="image/x-icon">

</head>

<body>
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">
                        Administrator FORM
                    </div>
                    <div class="card-body">
                        <p>Silahkan masukan data anda sebagai admin , pada form dibawah:</p>

                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="fullname">Nama lengkap</label>
                                <input type="text" class="form-control" name="fullname" id="fullname"
                                    value="{{ old('fullname') }}"
                                    class="form-control @error('fullname') is-invalid @enderror" />
                                @error('fullname')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for = "note">Alasan Kunjungan</label>
                                <textarea type="text" class="form-control" name="note" id="note" value="{{ old('note') }}"
                                    class="form-control @error('note') is-invalid @enderror"> </textarea>
                                @error('note')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class= "btn btn-primary">Submit
                                <span class="bi bi-send ms-2"></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.j') }}s"></script>
    <script src="{{ asset('/assets/js/mazer.js') }}"></script>


</body>

</html>
