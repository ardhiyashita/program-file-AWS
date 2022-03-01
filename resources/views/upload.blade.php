<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('assets/projekStyle.css') }}" rel="stylesheet" />
    <title>S3 AWS</title>
</head>
<body>
    <form action="{{ route('upload-file-fix') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container">
        <h2 class="mb-3">Silahkan Input File</h2>


        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input col-xl" id="customFile" name="berkas">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>


        <button class="mb-3 btn btn-info" type="submit">NEH DISINI SUBMITNYA</button>    
        </div>

    </form>
</body>
</html>