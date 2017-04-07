<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        <div class="container full-height">
            <div class="row">
                <div class="col-md-12 api-info">
                     <div class="panel panel-primary">
                          <div class="panel-heading"> Welcome to the <strong>CollegeStudent</strong> API </div> 
                              <div class="panel-body">
                                  <p>I designed this API using <a href="https://laravel.com/">Laravel</a>for my own personal use, although it <em>can</em> be used by anyone. I am passionate about music, NCAA basketball, and sorting algorithms, so I developed an easy way to keep track of these things. You can use the API to add your favorite albums, NCAA basketball players, and sorting algorithms. You can also query this API to view all the information about all your stored albums, NCAA basketball players, and sorting algorithms. The API conforms to <strong>REST</strong> architecture and supports the 4 standard HTTP methods <strong>GET</strong>, <strong>POST</strong>, <strong>PUT</strong>, and <strong>DELETE</strong>.
                                  </p>
                             </div>
                    </div>
                </div>
            </div>

            <div class="content row">
                <div class="links">
                  <div class="col-md-4">
                      <a href="#">Documentation</a>
                  </div>
                  <div class="col-md-4">
                        <a href="https://github.com/victorcui96/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><title>Logo: Github</title><path d="M13.97 1.57c-7.03 0-12.733 5.703-12.733 12.74 0 5.622 3.636 10.393 8.717 12.084.637.13.87-.277.87-.615 0-.302-.013-1.103-.02-2.165-3.54.77-4.29-1.707-4.29-1.707-.578-1.473-1.413-1.863-1.413-1.863-1.154-.79.09-.775.09-.775 1.276.104 1.96 1.316 1.96 1.312 1.135 1.936 2.99 1.393 3.712 1.06.116-.823.445-1.384.81-1.704-2.83-.32-5.802-1.414-5.802-6.293 0-1.39.496-2.527 1.312-3.418-.132-.322-.57-1.617.123-3.37 0 0 1.07-.343 3.508 1.305 1.016-.282 2.105-.424 3.188-.43 1.082 0 2.167.156 3.198.44 2.43-1.65 3.498-1.307 3.498-1.307.695 1.754.258 3.043.13 3.37.815.903 1.314 2.038 1.314 3.43 0 4.893-2.978 5.97-5.814 6.286.458.388.876 1.16.876 2.358 0 1.703-.016 3.076-.016 3.482 0 .334.232.748.877.61 5.056-1.687 8.7-6.456 8.7-12.08-.055-7.058-5.75-12.757-12.792-12.75z"/></svg>
                        </a>
                  </div>
                  <div class="col-md-4">
                      <a href="http://cuidesign.net/">Personal Website</a>
                  </div>
                </div>
            </div>
        </div> <!-- End .container -->
    </body>
</html>
