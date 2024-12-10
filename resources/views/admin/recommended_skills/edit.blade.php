@extends('admin.master_admin')
@section('title', 'Ubah Rekomendasi Keahlian | CVRE GENERATE')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Ubah Rekomendasi Keahlian</h1>

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-4 mb-4 text-center">Ubah Rekomendasi Keahlian</h4>
                <form method="POST" action="{{route('admin.recommended_skills.update', $recommendedSkill)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="job_id" class="form-label">Pekerjaan</label>
                                <select class="form-control" id="job_id" name="job_id" required>
                                    <option value="{{$recommendedSkill->job->id}}">{{$recommendedSkill->job->job_name}}</option>
                                    @foreach($jobs as $job)
                                    <option value="{{$job->id}}">{{$job->job_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="skill_id" class="form-label">Rekomendasi Keahlian</label>
                                <select class="form-control" id="skill_id" name="skill_id" required>
                                    <option value="{{$recommendedSkill->skill->id}}">{{$recommendedSkill->skill->skill_name}}</option>
                                    @foreach($skills as $skill)
                                    <option value="{{$skill->id}}">{{$skill->skill_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="mt-4 btn btn-primary btn-lg" type="submit">Ubah Rekomendasi Keahlian</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection