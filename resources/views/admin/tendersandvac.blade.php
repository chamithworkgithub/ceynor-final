@extends('layouts.app')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TendersAddModal">
        Add New
      </button>

    

    <!-- add Modal -->
                    
    <div class="modal fade" id="TendersAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tenders / Vacancies</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                
            <div class="modal-body">
                <ul class="alert alert-warning d-none" id="save_errorList"></ul>

                <form id="TenderAddForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="col-md-8">
                    <label class="form-label">Title</label>
                    <input type="text" name="tendertitle" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="image" class="form-label">Choose File</label>
                    <input class="form-control" type="file" name="file">
                    <small class="form-text text-muted">Please choose image size</small>
                  </div>


                <div class="form-group">
                    <label for="description">Description 01</label>
                    <textarea class="form-control" name="description_1"  rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 02</label>
                    <textarea class="form-control" name="description_2"  rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 03</label>
                    <textarea class="form-control" name="description_3"  rows="4"></textarea>
                </div>

                  
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          </div>
        </div>
    </div>

    <!-- add Modal End-->



 


    <!-- edit Modal -->
                    
    <div class="modal fade" id="TendersEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">News & Feeds Update</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                
            <div class="modal-body">
                <ul class="alert alert-warning d-none" id="edit_errorList"></ul>

                <form id="TenderEditForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf

                <input type="hidden" id="e_t_id" name="e_t_id">

                <div class="col-md-8">
                    <label class="form-label">Topic</label>
                    <input type="text" name="e_t_tendertitle" id="e_t_tendertitle" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="image" class="form-label">Choose Attachment</label>
                    <input class="form-control" type="file" name="e_t_file" id="e_t_file">
                    {{-- <small class="form-text text-muted">Please choose image size</small> --}}
                  </div>


                <div class="form-group">
                    <label for="description">Description 01</label>
                    <textarea class="form-control" name="e_t_description_1"  id="e_t_description_1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 02</label>
                    <textarea class="form-control" name="e_t_description_2" id="e_t_description_2"  rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 03</label>
                    <textarea class="form-control" name="e_t_description_3" id="e_t_description_3" rows="4"></textarea>
                </div>

                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
          </div>
        </div>
    </div>

    <!-- edit Modal End-->



    <!-- view Modal Start-->
                    
    <div class="modal fade" id="TenderViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">View News & Feeds Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

                
            <div class="modal-body">
                <ul class="alert alert-warning d-none" id="edit_errorList"></ul>

                {{-- <form id="GalleryBoatViewForm" class="row g-3" method="POST" enctype="multipart/form-data"> --}}
                    @csrf

                <input type="hidden" id="v_t_id" name="v_t_id" disabled>

                <div class="col-md-12">
                    <label class="form-label">Topic</label>
                    <input type="text" name="v_t_newstopic" id="v_t_newstopic" class="form-control" disabled>
                </div>

                <div class="col-md-4">
                    <label for="attachment" class="form-label">Attachment</label>
                    <input type="hidden" name="v_t_file" disabled>
                
                    <iframe src="" height="200" name="v_t_file" width="300" title="Iframe Example"></iframe>
                  </div>


                <div class="form-group">
                    <label for="description">Description 01</label>
                    <textarea class="form-control" name="v_t_description_1"  id="v_t_description_1" rows="3" disabled></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 02</label>
                    <textarea class="form-control" name="v_t_description_2" id="v_t_description_2"  rows="5" disabled></textarea>
                </div>

                <div class="form-group">
                    <label for="description">Description 03</label>
                    <textarea class="form-control" name="v_t_description_3" id="v_t_description_3" rows="4" disabled></textarea>
                </div>

                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </form>
          </div>
        </div>
    </div>

    <!-- view Modal End-->



    


    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tenders / Vacancies</div> 
                <div class="card-body">
                    <!-- Table Start -->
                    <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Topic</th>
                                                <th>Image</th>
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

<!-- Table End -->   
                    
                </div>
            </div>
        </div>
    </div>



</div><!-- End Div container -->




@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
   
    
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).on('submit', '#TenderAddForm', function (e) {
            e.preventDefault();

            let formData = new FormData($('#TenderAddForm')[0]);

            $.ajax({
                type: "POST",
                url: "{{URL('/admin/tenders-vacancies')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {  
                    if (response.status == 400) {
                        $('#save_errorList').html("");
                        $('#save_errorList').removeClass('d-none');
                        $.each(response.errors, function (key, err_value) { 
                        $('#save_errorList').append('<li>'+err_value+'</li>');
                        });
                    }else if(response.status == 200){
                        $('#save_errorList').html("");
                        $('#save_errorList').addClass('d-none');
                        // this.reset();
                        $('#TenderAddForm').find('input').val('');
                        $('#TendersAddModal').modal('hide');
                        $('#TenderAddForm')[0].reset();
                        alert(response.message);
                        fetchData();
                       
                    }
                }
            });

        });

        fetchData();

        function fetchData() {
            $.ajax({
                type: "GET",
                url: "{{URL('/fetch-tenders-vacancies/')}}",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.tenders_vacancies, function (key, item) { 
                        $('tbody').append('' 
                        +'<tr><td> '+ item.topic +' </td>' +
                        '<td>'+'<img src=../uploads/tenders-vacancies/pdf.png height="60px"></td>'+
                        '<td>'+ '<button type="button" value="' + item.id + '" class="btn btn-success viewbtn-tenders-vacancies btn-circle"><i class="fa fa-eye"></i></button>' +' </td>'+
                        '<td>'+ '<button type="button" value="' + item.id + '" class="btn btn-warning editbtn-tenders-vacancies btn-circle"><i class="fas fa-edit"></i></button>' +' </td>'+
                        '<td>'+ '<button type="button" value="' + item.id + '" class="btn btn-danger deletebtn-tenders-vacancies btn-circle"><i class="fas fa-trash"></i></button>' +' </td>  </tr>');
                    });
                }
            });
        }


        $(document).on('click', '.editbtn-tenders-vacancies', function (e) {
            var news_id = $(this).val();
            var url = "{{URL('edit-tenders-vacancies')}}";
            var dltUrl = url+"/"+news_id;
            $('#TendersEditModal').modal('show');
            // alert(news_id); 
            $.ajax({
                type: "GET",
                url: dltUrl,
                success: function (response) {
                    console.log(response);
                    if (response.status == 404) {
                        // alert(response.message)
                        $('#TendersEditModal').modal('hide');
                    }else{

                        $('#e_t_tendertitle').val(response.tenders_vacancies.topic);
                        $('#e_t_description_1').val(response.tenders_vacancies.description_1);
                        $('#e_t_description_2').val(response.tenders_vacancies.description_2);
                        $('#e_t_description_3').val(response.tenders_vacancies.description_3);
                        $('#e_t_id').val(news_id);
                        fetchData();
                       
                    }
                        
                }
            });

        });

        //view model

        $(document).on('click', '.viewbtn-tenders-vacancies', function (e) {
            var n_id = $(this).val();
            var url = "{{URL('/edit-tenders-vacancies/')}}";
            var dltUrl = url+"/"+n_id;
            $('#TenderViewModal').modal('show');
            // alert(n_id);
            $.ajax({
                type: "GET",
                url: dltUrl,
                success: function (response) {
                    console.log(response);
                    if (response.status == 404) {
                        alert(response.message)
                        $('#TenderViewModal').modal('hide');
                    }else{
                        console.log(response);

                        $("input[name='v_t_newstopic']").val(response.tenders_vacancies.topic);
                        $("input[name='v_t_file']").siblings("iframe").attr("src", "../uploads/tenders-vacancies/"+response.tenders_vacancies.file);
                        $("textarea[name='v_t_description_1']").val(response.tenders_vacancies.description_1);
                        $("textarea[name='v_t_description_2']").val(response.tenders_vacancies.description_2);
                        $("textarea[name='v_t_description_3']").val(response.tenders_vacancies.description_3);
                        fetchData();
                        

                    }
                        
                }
            });

        });



        $(document).on('submit','#TenderEditForm', function (e) {
            e.preventDefault();
            var id = $('#e_t_id').val();
            let EditFormData = new FormData($('#TenderEditForm')[0]);

            var url = "{{URL('/update-tenders-vacancies/')}}";
            var dltUrl = url+"/"+id;

            $.ajax({
                type: "POST",
                url: dltUrl,
                data: EditFormData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status == 400) {
                        $('#edit_errorList').html("");
                        $('#edit_errorList').removeClass('d-none');
                        $.each(response.errors, function (key, err_value) { 
                        $('#edit_errorList').append('<li>'+err_value+'</li>');
                        });
                    }else if(response.status == 404){
                        alert(response.message);
                    }
                    else if(response.status == 200){
                        $('#edit_errorList').html("");
                        $('#edit_errorList').addClass('d-none');
                        alert(response.message);
                        $('#TenderEditForm')[0].reset();
                        $('#TendersEditModal').modal('hide');
                        fetchData();
                        
                    }
                }
            });
        });


        $(document).on('click', '.deletebtn-tenders-vacancies',function (e) {
            e.preventDefault();

            var id = $(this).val();
            var url = "{{URL('/delete-tenders-vacancies/')}}";
            var dltUrl = url+"/"+id;

            $.ajax({
                type: "DELETE",
                url: dltUrl,
                dataType: "json",
                success: function (response) {
                   if (response.status == 400) {
                    alert(response.message);
                   }else if (response.status == 200){
                    alert(response.message);
                    fetchData();
                   }

                }
            });

        });


        
    });


</script>

@endsection