<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Curriculum Vitae</title>
</head>

<body>
    <a href="{{ route('export-cv.pdf', $curriculumVitaeUser) }}" class="btn btn-danger">Download</a>

    <a href="{{ route('print-cv', $curriculumVitaeUser) }}" class="btn btn-danger">Print</a>

</body>

</html>