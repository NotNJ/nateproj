@extends('layouts.app')
@include('layouts.header')
<title>About Us</title>
@include('layouts.header2')
@include('nav')
    <body>
        <div>
          <h5 style="text-align: left; padding-top: .5rem; padding-left: .5rem">Updated as of: {{ $date }}
          </h5>
        </div>
    </body>
</html>
