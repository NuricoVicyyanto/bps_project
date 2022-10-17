@extends('admin.dashboard')
@section('content')


 <!-- Begin Page Content -->
 <div class="container-fluid">

<div  id="url_wrapper">
    <div id="url">
        <div id="advise">Search keyword or paste link here</div>
        <form method="post" onsubmit="return false">
            <input id="input" type="text" name="url" autocomplete="off">
            <input id="submit" type="submit" value="Submit">
            <div id="suggestions"></div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
