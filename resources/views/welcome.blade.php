@extends('layouts.app')
@include('layouts.header')

        <title>My First Website</title>
@include('layouts.header2')
    @include('nav')
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    @if (isset($email)) 
                        <h1>Hello <?= $email ?></h1>
                    @else
                        <h1>Hello User</h1>
                    @endif
                    <div class="row">
                        <div class="col-8">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus sapien vel justo suscipit, in tincidunt tellus suscipit. Vestibulum sollicitudin congue metus non tristique. Cras lacus lorem, condimentum nec lacus et, mollis interdum nunc. Maecenas eu nibh in est fringilla eleifend ac quis metus. Quisque quis porta nibh, sed consectetur odio. Sed rhoncus vel mauris non rutrum. Nullam ultrices non arcu quis mollis. Integer vel nisl ac tortor aliquam sollicitudin ut id nunc. Suspendisse maximus urna elit, non facilisis lorem sodales non. Sed imperdiet eros at neque feugiat tristique. Nullam dui turpis, bibendum et purus eget, ultrices efficitur quam. Aliquam et tempor libero, vitae accumsan est. Praesent eget metus eros.
                            </p>
                            <p>
                                Ut rutrum, sapien egestas interdum porta, urna velit vehicula nulla, vel tempor odio nunc rutrum nunc. In fermentum varius massa eget tempus. Morbi nisi urna, venenatis vitae egestas eu, eleifend sed velit. Mauris sed ullamcorper magna. Mauris et dictum nulla. Nullam efficitur pellentesque tortor, et ullamcorper dui venenatis vel. Nam mollis ipsum vitae ipsum faucibus, at blandit orci dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In pharetra, leo et maximus posuere, odio quam varius ante, et malesuada felis urna et ipsum. Maecenas leo lectus, ultrices sed dolor in, fringilla laoreet risus. Maecenas nec rutrum metus, non pulvinar sapien. Curabitur maximus ac sem vel venenatis. Proin dapibus et nisi in luctus. Integer semper et sapien id tempus. Vestibulum pulvinar tempus mollis.
                            </p>
                            <p>
                                Duis elementum, metus sit amet dictum sodales, elit est sagittis mauris, id vestibulum libero mauris quis velit. Proin vel turpis dapibus, ullamcorper leo quis, fringilla nunc. Mauris ac augue sem. Maecenas nec diam volutpat, euismod est congue, fermentum tellus. Vestibulum dapibus odio diam, eget blandit libero ornare et. Praesent sit amet libero in sem volutpat bibendum a eu felis. Nullam cursus purus eget justo rhoncus, at eleifend nibh mollis. Cras semper erat eu mi tincidunt, vel interdum lectus feugiat. Nunc tincidunt, nibh eu volutpat porta, ligula dolor convallis est, sed fermentum risus mi hendrerit ligula. Suspendisse id nulla eros. Fusce dignissim elit id blandit scelerisque. Proin congue, nisi in vestibulum iaculis, ex nisi varius ante, in finibus nisl lorem a leo. Morbi cursus porttitor tellus, id imperdiet eros dictum at. Curabitur varius nunc ac ante egestas, eget vestibulum nunc aliquam. Nam congue, lectus sed accumsan tincidunt, tortor augue fermentum justo, at finibus nisl ante sed lorem. Cras tincidunt sed metus eu volutpat.
                            </p>
                        </div>
                        <div class="col-4">
                            <img src="https://slimages.macysassets.com/is/image/MCY/products/2/optimized/9048762_fpx.tif?op_sharpen=1&wid=400&hei=489&fit=fit,1&$filterlrg$" alt="black and bronze shoes">
                            <p style="text-align: center; padding-top:.5rem"><i>This text describes the image.</i></p>
                        </div>
                    </div>
<p>Duis elementum, metus sit amet dictum sodales, elit est sagittis mauris, id vestibulum libero mauris quis velit. Proin vel turpis dapibus, ullamcorper leo quis, fringilla nunc. Mauris ac augue sem. Maecenas nec diam volutpat, euismod est congue, fermentum tellus. Vestibulum dapibus odio diam, eget blandit libero ornare et. Praesent sit amet libero in sem volutpat bibendum a eu felis. Nullam cursus purus eget justo rhoncus, at eleifend nibh mollis. Cras semper erat eu mi tincidunt, vel interdum lectus feugiat. Nunc tincidunt, nibh eu volutpat porta, ligula dolor convallis est, sed fermentum risus mi hendrerit ligula. Suspendisse id nulla eros. Fusce dignissim elit id blandit scelerisque. Proin congue, nisi in vestibulum iaculis, ex nisi varius ante, in finibus nisl lorem a leo. Morbi cursus porttitor tellus, id imperdiet eros dictum at. Curabitur varius nunc ac ante egestas, eget vestibulum nunc aliquam. Nam congue, lectus sed accumsan tincidunt, tortor augue fermentum justo, at finibus nisl ante sed lorem. Cras tincidunt sed metus eu volutpat.</p>

<p>Vivamus elementum sem vitae dolor egestas aliquam. Sed malesuada ante a arcu posuere, ut venenatis augue tempor. Quisque nec neque sit amet elit iaculis dignissim. Aenean ultricies nisi dui, ac eleifend dui tristique sed. Donec non leo eget velit porta blandit. Integer molestie ipsum ac finibus sagittis. Praesent tellus eros, tincidunt ac malesuada in, porta ut velit. Ut pulvinar gravida sapien, ultricies ornare tortor blandit ac. Suspendisse sit amet ultricies nisi. Etiam tincidunt imperdiet sagittis. Praesent venenatis feugiat ligula in finibus. Ut nisl eros, consequat at vehicula sit amet, varius id risus. Vivamus ac vestibulum dui. Aliquam erat volutpat.</p>  

<p>Maecenas nunc arcu, consequat et elit ut, ornare pretium est. Integer vehicula vehicula auctor. Duis scelerisque sem sit amet eros lacinia, sit amet commodo nunc dictum. Pellentesque ac lobortis quam, a tempus est. Quisque hendrerit aliquam elit id dictum. Curabitur vitae quam cursus, commodo augue vel, aliquet lorem. Quisque scelerisque, massa ut imperdiet aliquam, lacus nisl ornare justo, id efficitur quam felis vel dui. Nullam congue mauris vel neque tristique suscipit. Cras mollis tellus et vestibulum sollicitudin. Nam sit amet mollis eros. Nunc mollis urna ac turpis laoreet, sed rutrum nibh convallis. Nam vitae placerat lacus. Mauris et odio tristique, congue magna at, varius nibh.
</p>
                </div>
            </div>
        </div>
    </body>
</html>
