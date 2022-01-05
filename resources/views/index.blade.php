<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Row add Using Javascript Laravel and Pass Data into Controller</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title text-center" style="font-size:20px;color:rgb(10, 151, 81)">
                            Dynamtic Row Add Using ajax and Laravel
                            <br>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <table id="myTable" class="table table-striped">
                            <thead>
                              <tr>
                                <th>Index</th>
                                <th>Product name</th>
                                <th>Product Details</th>
                                <th>Product Price</th>
                                <th>Product Qty</th>
                                <th>Total</th>
                                <th></th>
                              </tr>
                            </thead>
                          
                            <tbody id="table-body" >

                              
                                    @include('includes.products')
                               

                               
                              

                             
                            </tbody>
                            <tfoot>
                                <tr>
                                   
                                    <td><input type="number" id="serial" class="form-control" placeholder="Ex: 01"></td>
                                    <td><input type="text" id="name" class="form-control" placeholder="Ex: fruit"></td>
                                    <td><input type="text" id="details" class="form-control" placeholder="Ex: good fruit"></td>
                                    <td><input type="text" id="price" class="form-control" placeholder="Ex: 100"></td>
                                    <td><input type="text" id="qty" class="form-control" placeholder="Ex: 5"></td>
                                    <td><input type="text" id="line_total" class="form-control" placeholder="Ex: 500"></td>
                                    <td><button type="submit" onclick="savaData()" class="btn btn-sm btn-success">save</button></td>
                                </tr>
                             
                            </tfoot>
                        
                           
                          </table>

                          <button type="button"  id="add-row" class="btn btn-sm btn-success">add</button>
                          <br>
                         
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
   <script>
       function savaData(){
        var serial = document.getElementById("serial");
        
        var name = document.getElementById('name');
        var details = document.getElementById('details');
        var price = document.getElementById('price');
        var qty = document.getElementById('qty');
        
        $.ajax({
                type:'GET',
                url:'{!!URL::to('savedata')!!}',
                data:{'serial':serial.value,'name':name.value,'details':details.value,'price':price.value,'qty':qty.value},
                success:function(response){
                    $('#table-body').html(response.view);
                    document.getElementById("serial").value = "";
                    document.getElementById("name").value = "";
                    document.getElementById("details").value = "";
                    document.getElementById("qty").value = "";
                    document.getElementById("line_total").value = "";
                },

            });
        }

        function removeRow(id){
            $.ajax({
                type:'GET',
                url:'{!!URL::to('removedata')!!}',
                data:{'id':id},
                success:function(response){
                    $('#table-body').html(response.view);
                },

            });
        }
        
   </script>
    

    
    
</body>
</html>

