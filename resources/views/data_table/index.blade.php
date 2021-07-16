@extends('layout.layout_old')
@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.22/b-1.6.4/datatables.min.js"></script>

<div class ="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h3>Index Page</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('blogs.create')}}"> Add a new record </a>
        </div>
    </div>
</div>
<div class="container">
    <table class="Table" id="table1" role="grid">
        <thead>
            <tr role = "row">
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Action</th> 
            </tr>
        </thead>  
        <tbody>
        </tbody>
    </table>
</div>

<script>

    $(document).ready(function() {

        // $('#my Table').DataTable();

        var BASE = "{{ url('/') }}/";

        // console.log(BASE);

      var testtable = $('#table1').DataTable({
            "ajax": "{!! route('ajax.indexpagetable') !!}",
            columns: [

            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'body', name: 'body'},
            {data: 'action', name: 'action'},
           
        ]
        } );
   

    $('#table1').on('click','#delete',function(){
                // alert('clicked');
                var value = $(this).closest('tr').find('#hiddenID').val();
                alert('Now you are about to see something new!');
                var params = {
                    id:$(this).closest('tr').find('#hiddenID').val(),
                    _token:$(this).data("token"),
                };
                $.ajax({
                    url: BASE+'remove/'+value,
                    type: 'delete',
                    dataType: 'Json',
                    data: $.param(params),
                    success:function(response){
                        alert(response.message);
                    }
                });
                testtable
                .row( $(this).parents('tr') )
                .remove()
                .draw();
            });
        });

    </script>
 

