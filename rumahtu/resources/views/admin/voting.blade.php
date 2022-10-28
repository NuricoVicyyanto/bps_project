@extends('admin.dashboard')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <select class="form-select form-select-sm m-3 w-25" aria-label=".form-select-sm example">
        @foreach ($dtKaryawan as $item)
        <option value={{ $item->id }}>{{ $item->name }}</option>
        @endforeach
    </select>
    <div class="card-body">
        <div class="form-group">
            <label for="topic">What can we help you with ?</label>
            <select class="form-control" name="topic">
                  <option value="Work with us">I want to know more about your services</option>
                  <option value="Request a demo">I want a no-obligation demo of your services</option>
                  <option value="Employment query">I am interested in working for you</option>
             </select>
        </div>
        ....
        <div class="form-group callback">
            <label for="time_callback">* What time should we call you back ?</label>
            <select class="form-control" name="time_callback">
                 <option value="Morning">Morning</option>
                 <option value="Afternoon">Afternoon</option>
                 <option value="Evening">Evening</option>
            </select>
        </div>
        <div class="form-group upload">
               <label for="send_cv">* Upload your CV</label>
               <input type="file" name="send_cv" />
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kriteria</th>
                        <th>Penilaian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <p><strong>How do you rate customer support</strong></p>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1" />
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2" />
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="option3" />
                                <label class="form-check-label" for="inlineRadio3">3</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4"
                                value="option4" />
                                <label class="form-check-label" for="inlineRadio4">4</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5"
                                value="option5" />
                                <label class="form-check-label" for="inlineRadio5">5</label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

@endsection
