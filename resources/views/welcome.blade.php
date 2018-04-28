@extends('layouts.app')

@section('content')

<div id="homePage">
    @include('includes.nav')

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (isset($email)) 
                    <h1>Hello <?= $email ?></h1>
                @else
                    <h1>Hello User</h1>
                @endif
                <div class="row">
                    <div class="col-6">
                        <p>
                            Duis elementum, metus sit amet dictum sodales, elit est sagittis mauris, id vestibulum libero mauris quis velit. Proin vel turpis dapibus, ullamcorper leo quis, fringilla nunc. Mauris ac augue sem. Maecenas nec diam volutpat, euismod est congue, fermentum tellus. Vestibulum dapibus odio diam, eget blandit libero ornare et. Praesent sit amet libero in sem volutpat bibendum a eu felis. Nullam cursus purus eget justo rhoncus, at eleifend nibh mollis. Nunc tincidunt, nibh eu volutpat porta, ligula dolor convallis est, sed fermentum risus mi hendrerit ligula. Suspendisse id nulla eros. Fusce dignissim elit id blandit scelerisque. Proin congue, nisi in vestibulum iaculis, ex nisi varius ante, in finibus nisl lorem a leo. Morbi cursus porttitor tellus, id imperdiet eros dictum at. Curabitur varius nunc ac ante egestas, eget vestibulum nunc aliquam. Nam congue, lectus sed accumsan tincidunt, tortor augue fermentum justo, at finibus nisl ante sed lorem. Cras tincidunt sed metus eu volutpat.
                        </p>
                    </div>
                    <div class="col-6">
                        <img src="https://i.imgur.com/J939Pg3.jpg" class="welcome-image">
                        <p style="text-align: center; padding-top:.5rem"><i>This text describes the image.</i></p>
                    </div>
                </div>
                <p>
                    Duis elementum, metus sit amet dictum sodales, elit est sagittis mauris, id vestibulum libero mauris quis velit. Proin vel turpis dapibus, ullamcorper leo quis, fringilla nunc. Mauris ac augue sem. Maecenas nec diam volutpat, euismod est congue, fermentum tellus. Vestibulum dapibus odio diam, eget blandit libero ornare et. Praesent sit amet libero in sem volutpat bibendum a eu felis. Nullam cursus purus eget justo rhoncus, at eleifend nibh mollis. Cras semper erat eu mi tincidunt, vel interdum lectus feugiat. Nunc tincidunt, nibh eu volutpat porta, ligula dolor convallis est, sed fermentum risus mi hendrerit ligula. Suspendisse id nulla eros. Fusce dignissim elit id blandit scelerisque. Proin congue, nisi in vestibulum iaculis, ex nisi varius ante, in finibus nisl lorem a leo. Morbi cursus porttitor tellus, id imperdiet eros dictum at. Curabitur varius nunc ac ante egestas, eget vestibulum nunc aliquam. Nam congue, lectus sed accumsan tincidunt, tortor augue fermentum justo, at finibus nisl ante sed lorem. Cras tincidunt sed metus eu volutpat.
                </p>

                <p>
                    Vivamus elementum sem vitae dolor egestas aliquam. Sed malesuada ante a arcu posuere, ut venenatis augue tempor. Quisque nec neque sit amet elit iaculis dignissim. Aenean ultricies nisi dui, ac eleifend dui tristique sed. Donec non leo eget velit porta blandit. Integer molestie ipsum ac finibus sagittis. Praesent tellus eros, tincidunt ac malesuada in, porta ut velit. Ut pulvinar gravida sapien, ultricies ornare tortor blandit ac. Suspendisse sit amet ultricies nisi. Etiam tincidunt imperdiet sagittis. Praesent venenatis feugiat ligula in finibus. Ut nisl eros, consequat at vehicula sit amet, varius id risus. Vivamus ac vestibulum dui. Aliquam erat volutpat.
                </p>  

                <p>
                    Duis elementum, metus sit amet dictum sodales, elit est sagittis mauris, id vestibulum libero mauris quis velit. Proin vel turpis dapibus, ullamcorper leo quis, fringilla nunc. Mauris ac augue sem. Maecenas nec diam volutpat, euismod est congue, fermentum tellus. Vestibulum dapibus odio diam, eget blandit libero ornare et. Praesent sit amet libero in sem volutpat bibendum a eu felis. Nullam cursus purus eget justo rhoncus, at eleifend nibh mollis. Cras semper erat eu mi tincidunt, vel interdum lectus feugiat. Nunc tincidunt, nibh eu volutpat porta, ligula dolor convallis est, sed fermentum risus mi hendrerit ligula. Suspendisse id nulla eros. Fusce dignissim elit id blandit scelerisque. Proin congue, nisi in vestibulum iaculis, ex nisi varius ante, in finibus nisl lorem a leo. Morbi cursus porttitor tellus, id imperdiet eros dictum at. Curabitur varius nunc ac ante egestas, eget vestibulum nunc aliquam. Nam congue, lectus sed accumsan tincidunt, tortor augue fermentum justo, at finibus nisl ante sed lorem. Cras tincidunt sed metus eu volutpat.
                </p>

                <p>
                    Vivamus elementum sem vitae dolor egestas aliquam. Sed malesuada ante a arcu posuere, ut venenatis augue tempor. Quisque nec neque sit amet elit iaculis dignissim. Aenean ultricies nisi dui, ac eleifend dui tristique sed. Donec non leo eget velit porta blandit. Integer molestie ipsum ac finibus sagittis. Praesent tellus eros, tincidunt ac malesuada in, porta ut velit. Ut pulvinar gravida sapien, ultricies ornare tortor blandit ac. Suspendisse sit amet ultricies nisi. Etiam tincidunt imperdiet sagittis. Praesent venenatis feugiat ligula in finibus. Ut nisl eros, consequat at vehicula sit amet, varius id risus. Vivamus ac vestibulum dui. Aliquam erat volutpat.
                </p>  

                <p>
                    Maecenas nunc arcu, consequat et elit ut, ornare pretium est. Integer vehicula vehicula auctor. Duis scelerisque sem sit amet eros lacinia, sit amet commodo nunc dictum. Pellentesque ac lobortis quam, a tempus est. Quisque hendrerit aliquam elit id dictum. Curabitur vitae quam cursus, commodo augue vel, aliquet lorem. Quisque scelerisque, massa ut imperdiet aliquam, lacus nisl ornare justo, id efficitur quam felis vel dui. Nullam congue mauris vel neque tristique suscipit. Cras mollis tellus et vestibulum sollicitudin. Nam sit amet mollis eros. Nunc mollis urna ac turpis laoreet, sed rutrum nibh convallis. Nam vitae placerat lacus. Mauris et odio tristique, congue magna at, varius nibh.
                </p>

            </div>
        </div>
    </div>
</div>
@endsection