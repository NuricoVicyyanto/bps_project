@extends('admin.dashboard')
@section('content')

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>


<style>
    body { text-align: center; padding: 5px; background: #F5F5F5;}

    .container { width: 100%; text-align: center; margin: auto;}

    .copyright { margin-top: 50px; font-size: 12px; }
    .copyright a { text-decoration: none; padding: 5px;background: #c0392b; color: #FFFFFF; }

    p{
      font-family: 'Inconsolata', sans-serif;
      font-size: 15px;
      font-weight: 700;
    }
    .copyright a:hover { text-decoration: none; background: #fff; }

    .pad50{
      padding-top: 50px;
    }

    .button {

      display: inline-block;
      height: 40px;
      line-height: 40px;
      padding-right: 30px;
      padding-left: 70px;
      position: relative;
      background-color:rgb(0,0,0);
      color:rgb(255,255,255);
      text-decoration: none;
      text-transform: lowercase;
      letter-spacing: 1px;
      margin-bottom: 15px;
      text-shadow:0px 1px 0px rgba(0,0,0,0.5);
    -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)";zoom:1;
    filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

      -moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
      -webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
      box-shadow:0px 2px 2px rgba(0,0,0,0.2);
      -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)";
    filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
    }

    .button:hover{
        text-decoration: none;
      color: #eeeaee;
    }

    .button p{font-size: 18px;}
    .button span {
      position: absolute;
      left: 0;
      width: 50px;
      font-size:30px;
      -webkit-border-top-left-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    border-right: 1px solid  rgba(0,0,0,0.15);
        text-decoration: none;
    }

    .button.twitter {
      background: #00acee;
    }

    .button.facebook {
     background: #3b5998;
    }

    .button.google-plus{
      background: #db4a39;
    }

    .button.linkedin {
      background: #0e76a8;
    }

    .button.youtube {
     background: #c4302b;
    }

    .button.github{
      background: #171515;
    }

    .button.android {
      background: #a4c639;
    }

    .button.skype {
     background: #00aff0;
     }

    .button.dropbox{
      background: #3d9ae8;
    }

    .button.foursquare{
      background: #25a0ca;
    }

    .button.apple{
      background: #cdcdcd;
    }

    .button.dribbble{
      background: #ea4c89;
    }

    .button.instagram{
      background: #3f729b;
    }

    .button.pinterest{
      background: #c8232c;
    }

    .text-center{
      text-align: center;
    }
    </style>
   <div class="pad50"></div>
   <div class="container">
    <a href="#" class="button facebook"><span><i class="icon-facebook"></i></span><p>Facebook</p></a>

    <a href="#" class="button twitter"><span><i class="icon-twitter"></i></span><p>Twitter</p></a>

    <a href="#" class="button google-plus"><span><i class="icon-google-plus"></i></span><p>Google +</p></a>

    <a href="#" class="button github"><span><i class="icon-github"></i></span><p>Github</p></a>

    <a href="#" class="button android"><span><i class="icon-android"></i></span><p>Android</p></a>

    <a href="#" class="button linkedin"><span><i class="icon-linkedin"></i></span><p>Linkedin</p></a>

    <a href="#" class="button youtube"><span><i class="icon-youtube"></i></span><p>YouTube</p></a>

    <a href="#" class="button skype"><span><i class="icon-skype"></i></span><p>skype</p></a>

    <a href="#" class="button dropbox"><span><i class="icon-dropbox"></i></span><p>dropbox</p></a>

    <a href="#" class="button foursquare"><span><i class="icon-foursquare"></i></span><p>foursquare</p></a>

    <a href="#" class="button apple"><span><i class="icon-apple"></i></span><p>apple</p></a>

    <a href="#" class="button dribbble"><span><i class="icon-dribbble"></i></span><p>dribbble</p></a>

    <a href="#" class="button instagram"><span><i class="icon-instagram"></i></span><p>instagram</p></a>

    <a href="#" class="button pinterest"><span><i class="icon-pinterest"></i></span><p>pinterest</p></a>
</div>

@endsection
