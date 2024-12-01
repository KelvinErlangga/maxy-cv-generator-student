<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Template</title>
</head>

<body>
    <form method="POST" action="{{route('pelamar.curriculum_vitae.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <div class="form-group">
                    <label for="template_curriculum_vitae_id" class="form-label">Pilih Template CV</label>
                    <select class="form-control" id="template_curriculum_vitae_id" name="template_curriculum_vitae_id" required>
                        <option value="">Pilih</option>
                        @foreach($templateCurriculumVitae as $templateCV)
                        <option value="{{$templateCV->id}}">{{$templateCV->template_curriculum_vitae_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <button class="mt-4 btn btn-primary btn-lg" type="submit">Langkah Selanjutnya</button>
    </form>
</body>

</html>