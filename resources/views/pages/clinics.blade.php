@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Clinics table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <a class="" href="/clinics?sortBy=name">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Clinic

                                            <a class="" href="/clinics?sortBy=name&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th class="text-center">
                                            <a class="" href="/clinics?sortBy=address">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Address

                                            <a class="" href="/clinics?sortBy=address&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/clinics?sortBy=city">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            City

                                            <a class="" href="/clinics?sortBy=city&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/clinics?sortBy=country">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Country

                                            <a class="" href="/clinics?sortBy=country&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/clinics?sortBy=email">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Email

                                            <a class="" href="/clinics?sortBy=email&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/clinics?sortBy=phone">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Phone

                                            <a class="" href="/clinics?sortBy=phone&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>                                        </th>
                                        <th
                                            class="text-center">
                                            Doctors</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($clinics as $clinic)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                         alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$clinic->name}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{$clinic->address}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{$clinic->city}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$clinic->country}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$clinic->email}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$clinic->phone}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @foreach($clinic->doctors()->get() as $doctor)
                                                <p class="text-xs font-weight-bold mb-2">{{$doctor->name}}</p>
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs mr-4"
                                               data-toggle="tooltip" data-original-title="Edit clinic">
                                                Edit
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Delete clinic">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
            {{$clinics->links()}}
        @include('layouts.footers.auth.footer')
    </div>
@endsection
