
<!DOCTYPE html>
<html>
<head>
    <title>Islami Bank Nursing Institute, Barisal</title>



    @include('website.layout.style')

</head>
<body>

@include('website.layout.header')


@include('website.layout.nav')


<div class="card" style="width: 25rem;">



    <form action="{{route('student.save')}}"method="post"enctype="multipart/form-data" >
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Father Name</label>
        <input type="text" name="f_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mother Name</label>
        <input type="text" name="m_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mobile NO</label>
        <input type="number" name="mobile_no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">NID</label>
        <input type="number" name="nid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">SSC Year</label>
        <input type="number" name="ssc_year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Result</label>
        <input type="number" name="result" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Gender</label><br>



        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>



    </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Permanent Address</label>
            <input type="text" name="per_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

       {{-- <div class="form-group">
            <label for="ibit_id">Select IBIT</label>

            <select class="form-control" name="ibit_id"id="ibit_id">

                <option value="">Please select Your IBIT</option>
                @foreach($ibits as $ibit)
                    <option value="{{$ibit->id}}">{{$ibit->name}}</option>
                @endforeach

            </select>


        </div>
--}}



       {{-- <div class="form-group">
            <label for="exampleInputEmail1">Select Department</label>

            <select class="form-control" name="department_id">

                <option value="">Please select Your Department</option>
                @foreach($depts as $dept)
                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                @endforeach

            </select>


        </div>

--}}
        <div class="form-group">
            <label for="exampleInputEmail1">SSC Certificate/Mark Sheet and Picturt</label>
            <div class="row">
                <div class="col-md-4"><input type="file" class="form-control" name="student_image[]" id="exampleInputEmail1" placeholder="Insert Image" ></div>
                <div class="col-md-4"><input type="file" class="form-control" name="student_image[]" id="exampleInputEmail1" placeholder="Insert Image" ></div>

            </div>

        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Date of Birth</label>
            <input type="date" name="d_o_b" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>


        <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>




@include('website.layout.footer')



</body>
</html>