@extends('layouts.app')
@include('layouts.header')

        <title>Newsletter</title>
@include('layouts.header2')
@include('nav')
    <body>
        <div class="container">
            <h5 style="text-align: center; padding-top: .25rem;">Newsletter filler text</h5>
            <div class="row justify-content-center">
                <div class="col-3" style="padding-top: .25rem;">
                   <form method="POST" action="/test">
                      {{ csrf_field() }}
                       <input type="text" class="form-control" name="emailsub" placeholder="Email">

                       <button type="submit" class="btn btn-primary" style="margin-top: .25rem;">Register</button>
                   </form>
                </div>
            </div>
        </div>
    </body>
</html>
