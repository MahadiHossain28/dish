<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('CSS/dashboard.css')}}" type="text/css" />


    <title>Admin Dashboard</title>
</head>
<div class="d-flex" id="wrapper">
    @include('backend.include.sidebar')

    <div id="page-content-wrapper">
        @include('backend.include.backend_header')
        <div class="container rounded bg-white py-3 ">
            <div class="row">

                @foreach($users as $key=>$user)
                @if($user->role_id==1)
                <div class="col-md-12 border-right">
                    <div class="d-flex flex-column align-items-center text-center ">
                        <!-- @if($user->upload != null)
                        <img class="rounded-circle mt-5" width="150px"
                            src="{{asset('/uploads/profile/'.$user->upload)}}" alt="" width="200" height="200">
                        @endif -->
                        <span class="font-weight-bold"><strong>Name:</strong> {{$user->name}}</span>
                        <!-- <span class="text-black-50"><strong>Phone:</strong> {{$user->password}}</span> -->
                        <span class="text-black-50"><strong>Email:</strong> {{$user->email}}</span>
                        <span class="text-black-50"><strong>Phone:</strong> {{$user->phone}}</span>

                    </div>
                    {{--<div class="d-flex flex-column align-items-center text-center">
                        <a class="btn btn-primary" href="{{route('editadmin',$user->id)}}" role="button"><i
                        class="fa-solid fa-pen-nib"></i> Edit User Profile</a>
                </div> --}}
            </div>

            @endif
            @endforeach
        </div>
    </div>
</div>
</div>