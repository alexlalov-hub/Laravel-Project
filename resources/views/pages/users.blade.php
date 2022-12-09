@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tables'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Patients table</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th>
                                            <a class="" href="/patients?sortBy=username">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Username

                                            <a class="" href="/patients?sortBy=username&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th class="text-center">
                                            <a class="" href="/patients?sortBy=firstName">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Name

                                            <a class="" href="/patients?sortBy=firstName&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/patients?sortBy=email">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Email

                                            <a class="" href="/patients?sortBy=email&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/patients?sortBy=address">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Address

                                            <a class="" href="/patients?sortBy=address&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/patients?sortBy=city">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            City

                                            <a class="" href="/patients?sortBy=city&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/patients?sortBy=country">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Country

                                            <a class="" href="/patients?sortBy=country&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            <a class="" href="/patients?sortBy=phone">
                                                <i class="fa-solid fa-arrow-up-z-a"></i>
                                            </a>

                                            Postal

                                            <a class="" href="/patients?sortBy=phone&sortDir=desc">
                                                <i class="fa-solid fa-arrow-down-z-a"></i>
                                            </a>
                                        </th>
                                        <th
                                            class="text-center">
                                            Doctors</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                         alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{$user->username}}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{"$user->firstname $user->lastname"}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->address}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->city}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->country}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$user->postal}}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            @foreach($user->doctors()->get() as $doctor)
                                                <p class="text-xs font-weight-bold mb-0">{{$doctor->name}}</p>
                                            @endforeach
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                               data-toggle="tooltip" data-original-title="Delete user">
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
        {{$users->links()}}
        @include('layouts.footers.auth.footer')
    </div>
@endsection
