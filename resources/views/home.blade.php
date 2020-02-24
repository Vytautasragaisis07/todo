@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                <div class="site-section" data-aos="fade">
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 offset-1">
                                    <table class="table">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Pavadinimas</th>
                                            <th scope="col">Aprašymas</th>
                                            <th scope="col">Kaina</th>
                                            <th scope="col">El paštas</th>
                                            <th scope="col">Telefonas</th>
                                            <th scope="col">Vietovė</th>
                                            <th scope="col">Radagavimas</th>
                                            <th scope="col">Trinimas</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tasks as $task)
                                            <tr>
                                                <td>{{$task->id}}</td>
                                                <td>{{$task->subject}}</td>
                                                <td>{{$task->priority}}</td>
                                                <td>{{$task->date}}</td>
                                                <td>{{$task->complete}}</td>
                                                <td>{{$task->modified}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-sm-6 offset-3">
                                    <div class="row form-group text-center">
                                        <div class="col-md-12">
                                            <a href="/prideti" class="btn btn-primary py-2 px-4 text-white">Prideti</a>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
