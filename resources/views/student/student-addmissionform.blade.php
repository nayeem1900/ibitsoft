<!DOCTYPE html>
<html>
<head>
    <title>Islami Bank Nursing Institute, Barisal</title>
    @include('website.layout.style')
</head>
<body>

@include('website.layout.header')


@include('website.layout.nav')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admission Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.save') }}" enctype="multipart/form-data">
                        @csrf
                        @include('admin_page.message')

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Father Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="f_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mother Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="m_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mobile NO') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="mobile_no" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('NID NO') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="nid" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('EXAM OF SSC YEAR') }}</label>

                            <div class="col-md-6">
                                <input id="ssc-year" type="text" class="form-control @error('name') is-invalid @enderror" name="ssc_year"  required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('RESULT') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" class="form-control @error('name') is-invalid @enderror" name="result" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gender">Gender <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label>
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label>
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>


                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="per_address" type="text" class="form-control @error('email') is-invalid @enderror" name="per_address"  required autocomplete="">

                                @error('per_address')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="item form-group">
                            <label for="exampleInputEmail1">SSC Certificate/Mark Sheet and Picturt</label>
                            <div class="row">
                                <div class="col-md-4"><input type="file" class="form-control" name="student_image[]" id="student_image" placeholder="Insert Image" ></div>
                                <div class="col-md-4"><input type="file" class="form-control" name="student_image[]" id="student_image" placeholder="Insert Image" ></div>

                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('SSC Roll') }}</label>

                            <div class="col-md-6">
                                <input id="roll" type="text" class="form-control @error('email') is-invalid @enderror" name="roll"  required autocomplete="email">

                                @error('roll')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('SSC Board') }}</label>

                            <div class="col-md-6">

                                <label for="board">Choose SSC Board:</label>
                                <select name="board" id="board">
                                    <option value="">Select Board</option>
                                    <option value="cumilla">Cumilla</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chattagram">Chattagram</option>
                                    <option value="dinajpur">Dinajpur</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="rangpur">Rangpur</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="jessore">Jessore</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="bteb">BTEB</option>
                                    <option value="madrasha">Madrasha</option>
                                </select>

                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="date" class="form-control @error('email') is-invalid @enderror" name="d_o_b" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="division_id" class="col-md-4 col-form-label text-md-right">{{ __('Select Your IBIT') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="ibit_id">

                                    <option value="">Please select Your IBIT</option>
                                    @foreach(App\Ibit::orderBy('name','asc')->get() as $ibit)
                                        <option value="{{$ibit->id}}">{{$ibit->name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>








                        <div class="form-group row">
                            <label for="division_id" class="col-md-4 col-form-label text-md-right">{{ __('Select Department') }}</label>

                            <div class="col-md-6">

                                <select class="form-control" name="department_id">

                                    <option value="">Please select Your Department</option>
                                    @foreach(App\Department::orderBy('name','asc')->get() as $dept)
                                        <option value="{{$dept->id}}">{{$dept->name}}</option>
                                    @endforeach

                                </select>

                            </div>
                        </div>








                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>












@include('website.layout.footer')



</body>
</html>