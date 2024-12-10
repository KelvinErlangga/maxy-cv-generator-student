<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Template Cover Letter</title>
</head>

<body>
    <form method="POST" action="{{route('pelamar.cover_letter.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <div class="form-group">
                    <label for="template_cover_letter_id" class="form-label">Pilih Template Cover Letter</label>
                    <select class="form-control" id="template_cover_letter_id" name="template_cover_letter_id" required>
                        <option value="">Pilih</option>
                        @foreach($templateCoverLetter as $templateCL)
                        <option value="{{$templateCL->id}}">{{$templateCL->template_cover_letter_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <button class="mt-4 btn btn-primary btn-lg" type="submit">Langkah Selanjutnya</button>
    </form>
</body>

</html>