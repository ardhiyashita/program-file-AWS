<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>S3 AWS</title>
  </head>
  <body>
    <form action="{{ route('upload-file-AWS') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">INPUT FILE</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="berkas">
        <button type="submit">NEH DISINI SUBMITNYA</button>
    </div>
    </form>

    
  </body>
</html>