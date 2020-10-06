<!DOCTYPE html>
<html>
<head>
    <title>User Create</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="table table-dark">
                <div class="card">
                    <div class="table table-dark">
                        <h2 class="table table-dark">CRIAÇÃO DE USUÁRIO</h2>
                    </div>
                    <div class="card-body">
                        
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                                Session::forget('success');
                            @endphp
                        </div>
                        @endif
                   
                        <form method="POST" action="{{ url('user/store') }}">
                  
                            {{ csrf_field() }}
                  
                            <div class="form-group">
                                <label>Name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                   
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                    
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Year:</label>
                                <input type="year" name="year" class="form-control" placeholder="Year">
                                @if ($errors->has('year'))
                                    <span class="text-danger">{{ $errors->first('year') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Date:</label>
                                <input type="date" name="date" class="form-control" placeholder="Date">
                                @if ($errors->has('date'))
                                    <span class="text-danger">{{ $errors->first('date') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Programmer:</label>
                                <input type="text" name="programmer" class="form-control" placeholder="Programmer">
                                @if ($errors->has('programmer'))
                                    <span class="text-danger">{{ $errors->first('programmer') }}</span>
                                @endif
                            </div>
                   
                            <div class="form-group text-center">
                                <button class="btn btn-success btn-submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>