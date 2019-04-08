<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Get to The Base</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .my-custom-scrollbar {
                position: relative;
                max-height: 75vh;
                overflow-y: scroll;
            }

            ::-webkit-scrollbar {
                width: 10px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
                background: none; 
            }
             
            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #7D817B;
                border-radius: 5px;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #7D817B; 
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    The Northern Base
                </div>
                <div class="my-custom-scrollbar">
                    <table class="table table-wrapper-scroll-y table-striped table-dark mb-0">
                        <thead>
                            <tr>
                                <th scope="col">First name</th>
                                <th scope="col">Last name</th>
                                <th scope="col">Type</th>
                                <th scope="col">On Mission Since</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($soldiers))
                            @foreach($soldiers as $soldier)
                            <tr>
                                <td>
                                    {{ $soldier->soldier_name }}
                                </td>
                                <td>
                                    {{ $soldier->soldier_lastname }}
                                </td>
                                <td>
                                    {{ $soldier->soldier_type }}
                                </td>
                                <td>
                                    {{ $soldier->created_at }}
                                </td>
                            </tr>
                            @endforeach
                        @else
                        No soldiers found in Tha Maaathership
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
