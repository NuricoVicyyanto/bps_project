@extends('admin.dashboard')
@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">

    <div class="row">
        <div class="col-sm-2">
            <ul class="navbar-nav sidebar accordion" id="accordionSidebar">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/profile') }}">
                        <i class="fas fa-fw fa-user-alt"></i>
                        <span>PROFILE</span></a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/messages') }}">
                        <i class="fas fa-fw fa-envelope"></i>
                        <span>MESSAGES</span></a>
                </li>
                <hr class="sidebar-divider">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/notification') }}">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>NOTIFICATION</span></a>
                </li>
                <hr class="sidebar-divider">
            </ul>
        </div>
        <div class="col-sm">
                      <!-- Breadcrumb -->
                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Notification</li>
                        </ol>
                      </nav>

                      <!-- /Breadcrumb -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Pilih Semua
                        </label>
                      </div>
                      <br>
                    <table class="table table-inbox table-hover">
                      <tbody>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message  dont-show">PHPClass</td>
                            <td class="view-message ">Added a new class: Login Class Fast Site</td>
                            <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message  text-right">9:27 AM</td>
                        </tr>
                        <tr class="unread">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            {{-- <td class="inbox-small-cells"><i class="fa fa-star"></i></td> --}}
                            <td class="view-message dont-show">Google Webmaster </td>
                            <td class="view-message">Improve the search presence of WebSite</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 15</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">JW Player</td>
                            <td class="view-message">Last Chance: Upgrade to Pro for </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 15</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Tim Reid, S P N</td>
                            <td class="view-message">Boost Your Website Traffic</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">April 01</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Freelancer.com <span class="label label-danger pull-right">urgent</span></td>
                            <td class="view-message">Stop wasting your visitors </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">May 23</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">WOW Slider </td>
                            <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">LinkedIn Pulse</td>
                            <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">Feb 19</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Drupal Community<span class="label label-success pull-right">megazine</span></td>
                            <td class="view-message view-message">Welcome to the Drupal Community</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 04</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook</td>
                            <td class="view-message view-message">Somebody requested a new password </td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">June 13</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Skype <span class="label label-info pull-right">family</span></td>
                            <td class="view-message view-message">Password successfully changed</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 24</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Google+</td>
                            <td class="view-message">alireza, do you know</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 09</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="dont-show">Zoosk </td>
                            <td class="view-message">7 new singles we think you'll like</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">May 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">LinkedIn </td>
                            <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">February 25</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="dont-show">Facebook</td>
                            <td class="view-message view-message">Your account was recently logged into</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">March 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Twitter</td>
                            <td class="view-message">Your Twitter password has been changed</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">April 07</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                            <td class="view-message">http://golddesigner.org/ Performance Report</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">July 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">AddMe.com</td>
                            <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">August 10</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Terri Rexer, S P N</td>
                            <td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">April 14</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Bertina </td>
                            <td class="view-message">IMPORTANT: Don't lose your domains!</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">June 16</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                            <td class="view-message dont-show">Laura Gaffin, S P N </td>
                            <td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">August 10</td>
                        </tr>
                        <tr class="">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show">Facebook</td>
                            <td class="view-message view-message">Alireza Zare Login faild</td>
                            <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                            <td class="view-message text-right">feb 14</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </aside>
        </div>


        </div>
      </div>
</div>
<!-- /.container-fluid -->

@endsection
