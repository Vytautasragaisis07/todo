@extends('layouts.app')

@section('content')
<div class="site-section bg-light">
        <div class="container">

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/prideti-task" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-7 mb-5"  data-aos="fade">

            <h2 class="mb-5 text-black">Pridėkite užduotį</h2>

            <div class="row form-group">

                <div class="col-md-12">
                    <label class="text-black" for="subject">Pavadinimas</label>
                    <input type="text" id="subject" name="subject" class="form-control">
                </div>


                <div class="col-md-12">
                    <label class="text-black" for="priority">Svarba</label>
                    <input type="text" id="priority" name="priority" class="form-control">
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="date">Data</label>
                    <input type="text" id="date" name="date" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="complete">Įvykdyta</label>
                    <input type="text" id="complete" name="complete" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <label class="text-black" for="modified">Sukurta</label>
                    <input type="text" id="modified" name="modified" class="form-control">
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="Pridėti" class="btn btn-primary py-2 px-4 text-white">
                </div>
            </div>


        </div>
    </div>
</form>
</div>

</div>
@endsection