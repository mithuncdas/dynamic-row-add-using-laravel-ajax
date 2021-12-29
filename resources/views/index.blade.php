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
                            Dynamtic Row Add Using Javascript and Laravel
                            <br>(also pass data into controller)
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
                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                            <tbody>
                             
                              

                             
                            </tbody>
                        
                           
                          </table>

                          <button type="button"  onclick="addRow()" class="btn btn-sm btn-success">add</button>
                          <br>
                          <button type="submit" class=" mt-3 btn btn-lg btn-success">Save Data</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      function addRow(){
        var tbodyRef = document.getElementById('myTable').getElementsByTagName('tbody')[0];

        // Insert a row at the end of table
        var newRow = tbodyRef.insertRow();

        // Insert a cell at the end of the row
        var newCell = newRow.insertCell();

        // Append a text node to the cell
        newRow.innerHTML = '<tr><td> <input type="number" class="form-control" name="serial[]" placeholder="Ex:01"></td><td><input type="text" class="form-control" name="product_name[]" placeholder="Ex:fruit"></td><td> <input type="text" class="form-control" name="product_details[]" placeholder="Ex:good fruit"></td><td><input type="number" class="form-control" name="product_price[]" placeholder="Ex:100"></td><td><input type="number" class="form-control" name="product_qty[]" placeholder="Ex:10"></td><td> <input type="number" class="form-control" name="line_total[]" placeholder="Ex:10"></td><td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Remove</button></td></tr>';
        // newRow.innerHTML = '<tr><td>2</td><td>Fruit</td><td>Product Details</td><td>Product Price</td><td>Product Qty</td><td>Total</td><td><button class="btn btn-danger btn-sm" onclick="deleteRow(this)">Remove</button></td></tr>';
        
      }
      function deleteRow(btn){
        var row = btn.parentNode.parentNode;
        row.parentNode.removeChild(row);
      }
    </script>

    
    
</body>
</html>