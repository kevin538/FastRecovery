@extends('dashboard.layout.header')
@extends('dashboard.layout.sidebar')

@section('content')
    <div class="row" style="padding-top:20px;">
        <div class="col-md-12">
            <div class="row">
                <div class="col bugs">
                    <div class="card">
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-black mb-0">Informations Utilisateur </h3>
                        </div>
                        @csrf
                        <div class="table-responsive">
                            <table class="table align-items-center  table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name"> Nom Utilisateur </th>
                                        <th scope="col" class="sort" data-sort="budget">Email Utilisateur</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">

                                                <div class="media-body">
                                                    <span
                                                        class="name mb-0 text-black">{{ ucfirst(Auth::user()->name) }}</span>
                                                </div>
                                            </div>
                                        </th>
                                        <td>
                                            {{ ucfirst(Auth::user()->email) }}

                                        </td>

                                        <td class="text-right">
                                            <a {{-- href="{{ route('employe/edit', ['id' => $user->id]) }}" --}}><i class="fa fa-edit"></i></a>

                                        </td>
                                    </tr>
                                </tbody>
                                <div style="padding-left: 86%;">

                                </div>
                            </table>
                        @endsection
