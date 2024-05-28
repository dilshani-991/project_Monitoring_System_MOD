
<!-- Army Project List page  -->

@extends('pages.header')
@extends('pages.footer')

@section('title','army-projectlist')
@section('content')



<style>
    .page-content{
        color: #045174;
    }
    .stu-table{
        background-color: lightskyblue;
        height: 250px;
        padding: 10px;
        border-radius: 5px;

    }
    .headline{
        text-align: left;
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        color:black;
    }
    .align-items {
    display: flex;
    align-items: center;
}

.align-items img {
    margin-right: 15px; /* Adjust as needed */
    max-height: 50px;   /* Adjust the size as needed */
}

</style>


<div class="page-content " >

   <div class="contain" >
    <div class="row">

        <div class="col-md-12 p-4 align-items">
            <img src="{{ asset('assets\img\army.png') }}" alt="Sri Lanka Army logo">
            <h2 class="headline">Sri Lanka Army projects</h2>
        </div>
    </div>

    <div class="row" >
        <div class="col-md-2">
            @extends('pages.sidenav_bar')
        </div>

        <div class="col-md-8" >
            <div class="caption">
                <h3 align ="center">Porject List</h3>
            </div>

            <div class="stu-table" >
                <div class="datatable mt-5">
                    <table class="table" >

                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>done</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>


        <div class="col-md-2"></div>



    </div>
















@endsection

